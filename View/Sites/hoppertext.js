(function () {
    var csrf = "VxWGODE96TYJvFZ3t55MseBp",
        shownHint = true,
        signedIn = false;

    function getSelectedText() {
        var e = "";
        window.getSelection ? e = window.getSelection().toString() : document.getSelection ? e = document.getSelection().toString() : document.selection && (e = document.selection.createRange().text);
        if (e === "") {
            var t = window.frames;
            for (var n = 0; n < t.length; n++) {
                if (e !== "") break;
                try {
                    document.getSelection ? e = t[n].document.getSelection().toString() : document.selection && (e = t[n].document.selection.createRange().text)
                } catch (r) {
                    continue
                }
            }
        }
        return e
    }

    function notify(e, t, n, r) {
        var i = "_hopper_hud_" + (new Date).getTime(),
            s = ["display:block", "position:fixed", "left:50%", "top:0", "width:300px", "height:" + (r || 85) + "px", "margin:0 0 0 -150px", t === "error" ? "background:rgba(249,53,0,0.8)" : "background:rgba(0,0,0,0.8)", "color:#fff", "font:700 12px/24px Helvetica Neue,Arial,Helvetica,sans-serif", "text-align:center", "z-index:2147483647", "-webkit-border-radius:0 0 10px 10px", "-moz-border-radius:0 0 10px 10px", "border-radius:0 0 10px 10px", ""].join("!important;"),
            o = ["display:block", "text-align:center", "color:#fff", "font-size:54px", "line-height:54px", "margin:8px 0 0 -2px", ""].join("!important;"),
            u = '<div id="' + i + '" style="' + s + '">' + '<span style="' + o + '">' + (t === "error" ? "&#10008;" : "&#10003;") + "</span>" + e + "</div>";
        document.body.innerHTML += u, setTimeout(function () {
            var e = document.getElementById(i);
            e.parentNode.removeChild(e)
        }, 3e3)
    }

    function sendContent(e) {
        var t = e.length > 0;
        t ? type = "text" : (e = window.location.href, type = "link");
        var n = "_hopper_" + (new Date).getTime(),
            r = '<form id="_form' + n + '" method="post" style="display:none!important;" action="https://gethopper.com/you/bookmarklet" target="' + n + '">' + '<input type="hidden" name="_csrf" value="' + csrf + '">' + '<input type="hidden" name="content" value="' + e.replace(/"/g, '"') + '">' + '<input type="hidden" name="type" value="' + type + '">' + "</form>" + '<iframe id="' + n + '" name="' + n + '" width="0" height="0" style="position:absolute;left:-10000px;visibility:hidden!important"></iframe>';
        document.body.innerHTML += r, setTimeout(function () {
            var e = document.getElementById(n),
                t = document.getElementById("_form" + n);
            e.onload = function () {
                e.parentNode.removeChild(e), t.parentNode.removeChild(t)
            }, t.submit()
        }, 50), notify((t ? "&ldquo;" + e.substring(0, 20) + (e.length > 20 ? "&hellip;" : "") + "&rdquo;" : "Website") + " saved to your Hopper!")
    }

    function trackMark() {
        function e(e, t) {
            return e + Math.floor(Math.random() * (t - e))
        }
        var t = 1e9,
            n = e(t, 9999999999),
            r = e(1e7, 99999999),
            i = e(t, 2147483647),
            s = (new Date).getTime(),
            o = window.location,
            u = new Image,
            a = ["https://www.google-analytics.com/__utm.gif?utmwv=5.2.3&utms=3", "&utmn=", n, "&utmt=event", "&utme=5(Create*Bookmarklet*text)&utmcs=-", "&utmr=", o, "&utmp=", o.pathname, "&utmac=UA-573799-10&utmcc=__utma%3D", r, ".", i, ".", s, ".", s, ".", s, ".2%3B%2B__utmb%3D", r, "%3B%2B__utmc%3D", r, "%3B%2B__utmz%3D", r, ".", s, ".2.2.utmccn%3D(referral)%7Cutmcsr%3D", o.host, "%7Cutmcct%3D", o.pathname, "%7Cutmcmd%3Dreferral%3B%2B__utmv%3D", r, ".-%3B"].join("");
        u.src = a
    }
    if (signedIn) try {
        sendContent(getSelectedText());
        if (!shownHint || typeof shownHint == "undefined") {
            var hintId = "_hopper_hint_" + (new Date).getTime(),
                hintStyles = ["display:block", "position:fixed", "left:50%", "bottom:0", "width:600px", "height:22px", "margin:0 0 0 -300px", "background:rgba(0,0,0,0.8)", "color:#fff", "font:400 12px/22px Helvetica Neue,Arial,Helvetica,sans-serif", "text-align:center", "z-index:2147483647", "-webkit-border-radius:10px 10px 0 0", "-moz-border-radius:10px 10px 0 0", "border-radius:10px 10px 0 0", ""].join("!important;"),
                hint = '<div id="' + hintId + '" style="' + hintStyles + '"><span style="font-weight:700!important;">Hint:</span> If you select some text and press &ldquo;Save to Hopper,&rdquo; we&rsquo;ll save only that text.</div>';
            document.body.innerHTML += hint, setTimeout(function () {
                var e = document.getElementById(hintId);
                e.parentNode.removeChild(e)
            }, 45e3)
        }
        setTimeout(trackMark, 500)
    } catch (e) {
        notify("Uh oh, something went wrong. Try again later.", "error")
    } else {
        var linkStyles = ["padding:3px 5px", "background:#fff", "font-weight:400", "color:rgba(249,53,0,1)", "-webkit-border-radius:3px", "-moz-border-radius:3px", "border-radius:3px", "text-decoration:none"].join("!important;");
        notify('Please <a href="https://gethopper.com/signin" target="_blank" style="' + linkStyles + '">sign in</a> first.' + "<br>" + 'No account? <a href="https://gethopper.com/signup" target="_blank" style="' + linkStyles + '">sign up</a>', "error", 15e3, 120)
    }
})();