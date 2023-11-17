const header = document.querySelector("header");

window.addEventListener("scroll", function () {
    header.classList.toggle("sticky", window.scrollY > 200);
});

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

const passwordInput = document.getElementById("password");
const passwordIcon = document.getElementById("iconPw");

passwordInput.addEventListener("input", function () {
    if (passwordInput.value.trim() !== "") {
        // Jika input password tidak kosong, tampilkan ikon
        passwordIcon.style.display = "block";
    } else {
        // Jika input password kosong, sembunyikan ikon
        passwordIcon.style.display = "none";
    }
});

passwordIcon.addEventListener("click", function () {
    if (passwordInput.getAttribute("type") === "password") {
        // Jika tipe input adalah 'password', ubah menjadi 'text'
        passwordInput.setAttribute("type", "text");
        passwordIcon.classList.remove("bi-eye");
        passwordIcon.classList.add("bi-eye-slash");
    } else {
        // Jika tipe input adalah 'text', ubah menjadi 'password'
        passwordInput.setAttribute("type", "password");
        passwordIcon.classList.remove("bi-eye-slash");
        passwordIcon.classList.add("bi-eye");
    }
});

const paymentBody = document.querySelector(".button-payment");
const paymentDrawwer = document.querySelector(".payment-drawwer");

function paymentOpen() {
    paymentDrawwer.classList.toggle("active");
}
function warningNotif(message, icon) {
    iziToast.error({
        title: "Warning",
        message: message,
        position: "topRight",
        timeout: 5000,
        theme: "light",
        icon: icon,
        titleSize: 20,
        messageSize: 20,
        titleLineHeight: "30",
        maxWidth: 400,
        layout: 2,
    });
}

const starOrderInput = document.querySelector("#star_order");
const priceRank = document.querySelector("#price");
starOrderInput.addEventListener("input", function () {
    const checkedRadioButton = document.querySelector(".btn-check:checked");
    if (checkedRadioButton) {
        let priceValue =
            checkedRadioButton.parentElement.querySelector(
                ".price-rank"
            ).textContent;
        priceValue = parseFloat(
            priceValue.replace("Rp.", "").replace(".", "").replace(".", "")
        ); // Mengonversi menjadi float
        const price = document.querySelectorAll(".harga");
        let total = this.value * priceValue;
        priceRank.value = total;
        price.forEach((p) => {
            p.textContent = total.toLocaleString("id-ID", {
                style: "currency",
                currency: "IDR",
            });
        });
    }
});
