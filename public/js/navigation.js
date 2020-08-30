function jumpMain() {
    window.location.href = "http://localhost/app\components/main.php"; // адрес на Главнус страницу
}

function jumpInformation() {
    window.location.href = "http://localhost/app\components/information.php"; // адрес на страницу О нас
}

function jumpProducts() {
    window.location.href = "http://localhost/app\components/products.php"; // адрес на страницу Продукция
}

function jumpContact() {
    window.location.href = "http://localhost/app\components/contacts.php"; // адрес на страницу Контактов
}

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