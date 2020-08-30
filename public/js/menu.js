document.addEventListener("click", function(e) {
    if (e.target.className=="menu-toggle" || e.target.className=="icon") {
        if(document.getElementById("site-navigation").classList.contains("toggled-on")) {
        	document.getElementById("site-navigation").classList.remove("toggled-on");
        } else {
        	document.getElementById("site-navigation").classList.add("toggled-on");
        }
    }
});