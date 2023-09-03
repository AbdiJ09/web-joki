// const betrik = document.querySelector("#first");
// const first = document.querySelector(".paralax");
// const textFront = document.querySelector("#text-front");
// const mahkota = document.querySelector("#mahkota");
// const textBack = document.querySelector("#text-back");
// function updateParallax() {
//     let value = window.scrollY;
//     betrik.style.marginTop = value * -2.5 + "px";
//     // first.style.marginTop = value * -1.5 + "px";
//     textFront.style.marginLeft = value * -2.5 + "px";
//     textBack.style.marginRight = value * -2.5 + "px";
//     // ... tambahkan perubahan lainnya
// }

// window.addEventListener("scroll", function () {
//     requestAnimationFrame(updateParallax);
// });

const header = document.querySelector("header");

function updateStickyClass() {
    const isDesktop = window.innerWidth > 1000;
    const isMobile = window.innerWidth <= 500;

    if (isDesktop && window.scrollY > 1000) {
        header.classList.add("sticky");
    } else if (isMobile && window.scrollY > 100) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}

window.addEventListener("scroll", updateStickyClass);
window.addEventListener("resize", updateStickyClass);

// Panggil fungsi untuk menginisialisasi status "sticky" saat halaman dimuat
updateStickyClass();

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
