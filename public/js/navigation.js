document.addEventListener("click", function(e) {
    if (e.target.className=="gamburger" || e.target.className=="gumburgeButton" || e.target.className=="icon1" || e.target.className=="icon2") {
        if (document.querySelector(".menuBurger") && document.querySelector(".vizibl")){
            closeBurger();
        } else {
            openBurger();
        }
    }
});

function openBurger() {
    let close = document.querySelector(".icon1");
    close.classList.add("invizibl");
    let open = document.querySelector(".icon2");
    open.classList.remove("invizibl");
    let vizibl = document.querySelector(".menuBurger");
    vizibl.classList.add("vizibl");
}

function closeBurger() {
    let invizibl = document.querySelector(".menuBurger");
    invizibl.classList.remove("vizibl");
    let close = document.querySelector(".icon2");
    close.classList.add("invizibl");
    let open = document.querySelector(".icon1");
    open.classList.remove("invizibl");
}