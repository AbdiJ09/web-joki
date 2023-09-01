const first = document.querySelector("#first");
// const text = document.querySelector("#text");
const sniper = document.querySelector("#text-front");
const mahkota = document.querySelector("#mahkota");
const textBack = document.querySelector("#text-back");
const nibiru = document.querySelector("#nibiru");
function updateParallax() {
    let value = window.scrollY;
    first.style.transform = `translateY(${value * 0.7}px)`;
    sniper.style.marginLeft = value * -2.5 + "px";
    // nibiru.style.marginRight = value * -2.5 + "px";

    // text.style.marginTop = value * 2.5 + "px";
    // mahkota.style.marginTop = value * -2.5 + "px";
    textBack.style.marginRight = value * -2.5 + "px";

    // ... tambahkan perubahan lainnya
}

window.addEventListener("scroll", function () {
    requestAnimationFrame(updateParallax);
});

const header = document.querySelector("header");
window.addEventListener("scroll", function () {
    header.classList.toggle("sticky", window.scrollY > 1000);
});
[];
const open = document.querySelector("#menu-icon");
const nav = document.querySelector(".nav");

open.onclick = () => {
    open.classList.toggle("bx-x");
    nav.classList.toggle("open");
};
document.addEventListener("click", function (e) {
    if (!open.contains(e.target) && !nav.contains(e.target)) {
        open.classList.remove("bx-x");
        nav.classList.remove("open");
    }
});
function counter() {
    let count = setInterval(function () {
        let c = parseInt($(".counter").text());
        $(".counter").text((++c).toString());
        if (c == 99) {
            clearInterval(count);
        }
    }, 30);
    let countTrust = setInterval(function () {
        let c = parseInt($(".counter-trust").text());
        $(".counter-trust").text((++c).toString());
        if (c == 97) {
            clearInterval(countTrust);
        }
    }, 30);
    let countFast = setInterval(function () {
        let c = parseInt($(".counter-fast").text());
        $(".counter-fast").text((++c).toString());
        if (c == 90) {
            clearInterval(countFast);
        }
    }, 30);
}
counter();

document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll("nav ul li a");

    navLinks.forEach((link) => {
        link.addEventListener("click", () => {
            navLinks.forEach((navLink) => {
                navLink.classList.remove("active");
            });
            link.classList.add("active");
        });
    });
});
