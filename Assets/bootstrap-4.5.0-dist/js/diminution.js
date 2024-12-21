document.addEventListener('contextmenu', event => {
    event.preventDefault()
})

// document.onkeydown = function(e) {
// if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
// return false;
// }
// if(e.which === 123){
//        return false;
//     }
// }
shortcut = {
        all_shortcuts: {},
        add: function (e, t, n) {
            var r = {
                type: "keydown",
                propagate: !1,
                disable_in_input: !1,
                target: document,
                keycode: !1
            };
            if (n)
                for (var i in r) "undefined" == typeof n[i] && (n[i] = r[i]);
            else n = r;
            r = n.target, "string" == typeof n.target && (r = document.getElementById(n.target)), e = e.toLowerCase(), i = function (r) {
                r = r || window.event;
                if (n.disable_in_input) {
                    var i;
                    r.target ? i = r.target : r.srcElement && (i = r.srcElement), 3 == i.nodeType && (i = i.parentNode);
                    if ("INPUT" == i.tagName || "TEXTAREA" == i.tagName) return
                }
                r.keyCode ? code = r.keyCode : r.which && (code = r.which), i = String.fromCharCode(code).toLowerCase(), 188 == code && (i = ","), 190 == code && (i = ".");
                var s = e.split("+"),
                    o = 0,
                    u = {
                        "`": "~",
                        1: "!",
                        2: "@",
                        3: "#",
                        4: "$",
                        5: "%",
                        6: "^",
                        7: "&",
                        8: "*",
                        9: "(",
                        0: ")",
                        "-": "_",
                        "=": "+",
                        ";": ":",
                        "'": '"',
                        ",": "<",
                        ".": ">",
                        "/": "?",
                        "\\": "|"
                    },
                    f = {
                        esc: 27,
                        escape: 27,
                        tab: 9,
                        space: 32,
                        "return": 13,
                        enter: 13,
                        backspace: 8,
                        scrolllock: 145,
                        scroll_lock: 145,
                        scroll: 145,
                        capslock: 20,
                        caps_lock: 20,
                        caps: 20,
                        numlock: 144,
                        num_lock: 144,
                        num: 144,
                        pause: 19,
                        "break": 19,
                        insert: 45,
                        home: 36,
                        "delete": 46,
                        end: 35,
                        pageup: 33,
                        page_up: 33,
                        pu: 33,
                        pagedown: 34,
                        page_down: 34,
                        pd: 34,
                        left: 37,
                        up: 38,
                        right: 39,
                        down: 40,
                        f1: 112,
                        f2: 113,
                        f3: 114,
                        f4: 115,
                        f5: 116,
                        f6: 117,
                        f7: 118,
                        f8: 119,
                        f9: 120,
                        f10: 121,
                        f11: 122,
                        f12: 123
                    },
                    l = !1,
                    c = !1,
                    h = !1,
                    p = !1,
                    d = !1,
                    v = !1,
                    m = !1,
                    y = !1;
                r.ctrlKey && (p = !0), r.shiftKey && (c = !0), r.altKey && (v = !0), r.metaKey && (y = !0);
                for (var b = 0; k = s[b], b < s.length; b++) "ctrl" == k || "control" == k ? (o++, h = !0) : "shift" == k ? (o++, l = !0) : "alt" == k ? (o++, d = !0) : "meta" == k ? (o++, m = !0) : 1 < k.length ? f[k] == code && o++ : n.keycode ? n.keycode == code && o++ : i == k ? o++ : u[i] && r.shiftKey && (i = u[i], i == k && o++);
                if (o == s.length && p == h && c == l && v == d && y == m && (t(r), !n.propagate)) return r.cancelBubble = !0, r.returnValue = !1, r.stopPropagation && (r.stopPropagation(), r.preventDefault()), !1
            }, this.all_shortcuts[e] = {
                callback: i,
                target: r,
                event: n.type
            }, r.addEventListener ? r.addEventListener(n.type, i, !1) : r.attachEvent ? r.attachEvent("on" + n.type, i) : r["on" + n.type] = i
        },
        remove: function (e) {
            var e = e.toLowerCase(),
                t = this.all_shortcuts[e];
            delete this.all_shortcuts[e];
            if (t) {
                var e = t.event,
                    n = t.target,
                    t = t.callback;
                n.detachEvent ? n.detachEvent("on" + e, t) : n.removeEventListener ? n.removeEventListener(e, t, !1) : n["on" + e] = !1
            }
        }
    },
    shortcut.add("Ctrl+U", function () {
        //alert('Sorry\nNo CTRL+U is allowed. Be creative!')
    }),
    shortcut.add("Ctrl+Shift+J", function () {
        // alert('Sorry\nNo Command+Option+U is allowed. Be creative!')
    }),
    shortcut.add("F12", function () {
        //alert('Sorry\nNever duplicate this article...')
    }),
    shortcut.add("Ctrl+Shift+I", function () {
        // alert('Sorry\nNever duplicate this article...')
    });



eval(function (p, a, c, k, e, d) {
    e = function (c) {
        return c.toString(36)
    };
    if (!''.replace(/^/, String)) {
        while (c--) {
            d[c.toString(a)] = k[c] || c.toString(a)
        }
        k = [
			function (e) {
				return d[e];
			},
		];
        e = function () {
            return '\\w+'
        };
        c = 1
    };
    while (c--) {
        if (k[c]) {
            p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c])
        }
    }
    return p
}('(3(){(3 a(){8{(3 b(2){7((\'\'+(2/2)).6!==1||2%5===0){(3(){}).9(\'4\')()}c{4}b(++2)})(0)}d(e){g(a,f)}})()})();', 17, 17, '||i|function|debugger|20|length|if|try|constructor|||else|catch||5000|setTimeout'.split('|'), 0, {}))