from flask import Flask, request, jsonify, render_template_string
# from flask_ngrok import run_with_ngrok
from joblib import load
from scipy.sparse import hstack
import re
from nltk.corpus import stopwords
from nltk.stem import PorterStemmer
# %tb

# Flask app setup
app = Flask(__name__)
# run_with_ngrok(app)  # Enables ngrok for public URL access


# HTML Template for frontend
html_template = """
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Research Paper Classifier</title>
  <!-- Bootstrap core CSS -->
  <link href="{{ url_for('static', filename='Assets/bootstrap-4.5.0-dist/css/bootstrap.min.css') }}" rel="stylesheet">

  <style>
    .myCard {
      background-image: url('{{ url_for('static', filename='Assets/SVG/w_welcome_poB.svg') }}'), url('{{ url_for('static', filename='Assets/SVG/w_welcome_poT.svg') }}');
      background-repeat: no-repeat;
      background-size: cover;
    }

    .my_sub_card {
      background-image: url('{{ url_for('static', filename='Assets/SVG/w_po1.svg') }}');
      background-repeat: no-repeat;
      background-size: cover;
    }

    .mybtn {
      display: block;
      width: 50%;
      height: 50px;
      border-radius: 25px;
      border: none;
      text-align: center;
      background-image: linear-gradient(to right, #91EAE4, #7F7FD5, #86A8E7);
      color: #fff;
      font-family: 'Poppins', sans-serif;
      text-transform: uppercase;
      margin: 1rem auto;
      cursor: pointer;
      transition: 0.5s;
    }

    .mybtn:hover {
      background-position: right;
      box-shadow: 10px 10px 18px -4px rgba(0, 0, 0, 0.75);
    }

    .myshadow {
      box-shadow: 10px 10px 17px -2px rgba(203, 203, 203, 1);
    }

    textarea {
      resize: none;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">
      <img src="{{ url_for('static', filename='Assets/logos/NSS_LOGO.png') }}" width="65" height="65" alt="Logo">
    </h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <!-- Update Profile and Password links -->
    </nav>
    <a class="btn btn-info" style="background-color: #4A529D" href="../logout">LOGOUT</a>
  </div>

  <!-- Main Content -->
  <div class="container">
    <!-- Welcome Card -->
    <div class="jumbotron bg-light p-4 p-md-5 rounded myCard shadow-sm">
      <div class="col-md-6 px-0">
        <h1 class="display-4 text-white" style="text-shadow: 2px 2px 2px rgba(149, 150, 150, 0.68); font-weight:400">Welcome</h1>
        <p class="lead my-3 text-white"><b>Enter the title and abstract of the paper to classify.</b></p>
      </div>
    </div>

    <!-- Input Section -->
    <form id="prediction-form">
      <div class="row mb-2">
        <!-- Abstract Input -->
        <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 myshadow h-md-250 position-relative my_sub_card">
            <div class="col p-4 d-flex flex-column position-static">
              <h3 class="mb-0">Abstract</h3>
              <textarea class="form-control" id="abstract" rows="5" style="height:100%" placeholder="Enter the abstract here..." required></textarea>
            </div>
          </div>
        </div>

        <!-- Title Input -->
        <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 myshadow h-md-250 position-relative my_sub_card">
            <div class="col p-4 d-flex flex-column position-static">
              <h3 class="mb-0">Title</h3>
              <textarea class="form-control" id="title" rows="5" placeholder="Enter the title here..." required></textarea>
            </div>
          </div>
        </div>
      </div>

      <!-- Submit Button -->
      <div class="d-flex justify-content-center">
        <button type="button" class="mybtn" id="submit-btn">Submit</button>
      </div>
    </form>

    <!-- Prediction Result -->
<div id="result" class="text-center mt-4">
    <div class="card mx-auto" style="width: 50%; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); border-radius: 15px;">
        <div class="card-body">
            <h4 class="card-title">Predicted Category for the Paper is: </h4>
            <p id="predicted-category" class="card-text text-primary" style="font-size: 1.5rem; font-weight: bold;">Waiting for prediction...</p>
        </div>
    </div>
</div>

  <!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ url_for('static', filename='Assets/bootstrap-4.5.0-dist/js/bootstrap.min.js') }}"></script>
<script>
  document.getElementById("submit-btn").addEventListener("click", function () {
    const abstract = document.getElementById("abstract").value;
    const title = document.getElementById("title").value;

    // Send POST request to backend
fetch('/predict', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
    },
    body: JSON.stringify({ abstract: abstract, title: title }),
})
.then((response) => response.json())
.then((data) => {
    document.getElementById("result").innerHTML = `<h4>Predicted Category: ${data.predicted_category}</h4>`;
})
.catch((error) => {
    console.error('Error:', error);
    document.getElementById("result").innerHTML = `<h4>Error occurred while predicting</h4>`;
});
  });
</script>

</body>

</html>

"""

# Route to render the HTML page
@app.route('/')
def index():
    return render_template_string(html_template)

# Route to handle predictions
@app.route('/predict', methods=['POST'])
def predict():
    
    data = request.get_json()
    title = data.get('title', '')
    abstract = data.get('abstract', '')

    # Load models and vectorizers
    vectorizer = load('title_vectorizer.pkl')
    abstr_vectorizer = load('abstract_vectorizer.pkl')
    xgb_model = load('xgb_model.pkl')
    rf_model = load('rf_model.pkl')
    lgbm_model = load('lgbm_model.pkl')
    label_encoder = load('label_encoder.pkl')
    
    # Initialize text cleaner
    stemmer = PorterStemmer()
    words = stopwords.words("english")
    
    def clean_text(text):
        return " ".join([stemmer.stem(i) for i in re.sub("[^a-zA-Z0-9]", " ", text).split() if i.lower() not in words]).lower()

    # Clean input
    cleaned_title = clean_text(title)
    cleaned_abstract = clean_text(abstract)

    # Vectorize input
    title_features = vectorizer.transform([cleaned_title])
    abstract_features = abstr_vectorizer.transform([cleaned_abstract])
    combined_features = hstack([title_features, abstract_features])

    # Predict using XGBoost
    xgb_prediction_encoded = xgb_model.predict(combined_features)
    xgb_prediction = label_encoder.inverse_transform(xgb_prediction_encoded)  
    
    # Predict using Random Forest
    rf_prediction_encoded = rf_model.predict(combined_features)
    rf_prediction = label_encoder.inverse_transform(rf_prediction_encoded) 
    
    # Predict using LightGBM
    lgbm_prediction_encoded = lgbm_model.predict(combined_features)
    lgbm_prediction = label_encoder.inverse_transform(lgbm_prediction_encoded)  
    
    predictions = [rf_prediction[0], lgbm_prediction[0], xgb_prediction[0]]
    final_prediction = max(set(predictions), key=predictions.count)

    # Log all predictions
    app.logger.debug(f"Title: {title}, Abstract: {abstract}")
    app.logger.debug(f"Title Features Shape: {title_features.shape}")
    app.logger.debug(f"Abstract Features Shape: {abstract_features.shape}")
    app.logger.debug(f"Combined Features Shape: {combined_features.shape}")

    logging.debug(f"XGBoost Prediction: {xgb_prediction}")
    logging.debug(f"Random Forest Prediction: {rf_prediction}")
    logging.debug(f"LightGBM Prediction: {lgbm_prediction}")
    
    return jsonify({'predicted_category': final_prediction})


# Run Flask app
if __name__ == '__main__':
    import logging
    logging.basicConfig(level=logging.DEBUG)
    app.run(debug=True, use_reloader=False)