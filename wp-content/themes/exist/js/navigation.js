! function () {
    var e, a, t, s, n, i;
    if ((e = document.getElementById("site-navigation")) && void 0 !== (a = e.getElementsByTagName("button")[0]))
        if (void 0 !== (t = e.getElementsByTagName("ul")[0])) {
            for (t.setAttribute("aria-expanded", "false"), -1 === t.className.indexOf("nav-menu") && (t.className += " nav-menu"), a.onclick = function () {
                    -1 !== e.className.indexOf("toggled") ? (e.className = e.className.replace(" toggled", ""), a.setAttribute("aria-expanded", "false"), t.setAttribute("aria-expanded", "false")) : (e.className += " toggled", a.setAttribute("aria-expanded", "true"), t.setAttribute("aria-expanded", "true"))
                }, n = 0, i = (s = t.getElementsByTagName("a")).length; n < i; n++) s[n].addEventListener("focus", l, !0), s[n].addEventListener("blur", l, !0);
            ! function (e) {
                var a, t, s = e.querySelectorAll(".menu-item-has-children > a, .page_item_has_children > a");
                if ("ontouchstart" in window)
                    for (a = function (e) {
                            var a, t = this.parentNode;
                            if (t.classList.contains("focus")) t.classList.remove("focus");
                            else {
                                for (e.preventDefault(), a = 0; a < t.parentNode.children.length; ++a) t !== t.parentNode.children[a] && t.parentNode.children[a].classList.remove("focus");
                                t.classList.add("focus")
                            }
                        }, t = 0; t < s.length; ++t) s[t].addEventListener("touchstart", a, !1)
            }(e)
        } else a.style.display = "none";

    function l() {
        for (var e = this; - 1 === e.className.indexOf("nav-menu");) "li" === e.tagName.toLowerCase() && (-1 !== e.className.indexOf("focus") ? e.className = e.className.replace(" focus", "") : e.className += " focus"), e = e.parentElement
    }
}();