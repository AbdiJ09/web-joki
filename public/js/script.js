const header = document.querySelector("header");

window.addEventListener("scroll", function () {
    header.classList.toggle("sticky", window.scrollY > 200);
});
[];
// Panggil fungsi untuk menginisialisasi status "sticky" saat halaman dimuat

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
        layout: 2, // Atur layout agar judul dan ikon berada di atas pesan
        timeout: 2000,
    });
}

document
    .getElementById("btn-order-rank")
    .addEventListener("click", function () {
        const inputNames = [
            "email",
            "password",
            "NickName",
            "LoginVia",
            "Nominal",
            "order",
            "whatsapp",
            "payment",
            // "price",
        ];

        let isValid = true;

        inputNames.forEach((inputName) => {
            console.log(inputName);
            const inputElement = document.querySelector(
                `[name="${inputName}"]`
            );
            const inputValue = inputElement.value.trim();

            if (inputElement.type === "select-one") {
                const selectInput =
                    inputElement.options[inputElement.selectedIndex];
                if (selectInput.value === "-") {
                    warningNotif(
                        "Data login kosong,silahkan di input",
                        "fas fa-exclamation-triangle"
                    );
                    isValid = false;
                }
            }
            if (inputElement.type === "radio") {
                const radio = document.querySelectorAll(
                    `[name="${inputName}"]:checked`
                );

                if (radio.length === 0) {
                    warningNotif(
                        `Nominal ${inputName} kosong, silahkan di input`,
                        "fas fa-exclamation-triangle"
                    );
                    isValid = false;
                }
            }
            if (inputValue === "") {
                warningNotif(
                    `Data ${inputName} kosong, silahkan di isi `,
                    "fas fa-exclamation-triangle"
                );
                isValid = false;
                // const inputValue = inputElement.value.trim();
            }
        });
        if (isValid) {
            inputNames.forEach((inputName) => {
                const inputElement = document.querySelector(
                    `[name="${inputName}"]`
                );
                if (inputElement) {
                    if (inputElement.type === "select-one") {
                        const selectedOption =
                            inputElement.options[inputElement.selectedIndex];
                        const value = selectedOption.value;
                        document.getElementById(
                            `${inputName}-display`
                        ).textContent = value;
                    } else if (inputElement.type === "radio") {
                        const selectedRadio = document.querySelector(
                            `[name="${inputName}"]:checked`
                        );
                        const value = selectedRadio.value;
                        document.getElementById(
                            `${inputName}-display`
                        ).textContent = value;
                    } else {
                        const value = inputElement.value;
                        document.getElementById(
                            `${inputName}-display`
                        ).textContent = value;
                    }
                }
                const btnSubmit = document.querySelector(".pesan");
                btnSubmit.addEventListener("click", function () {
                    btnSubmit.setAttribute("type", "submit");
                });
            });

            const modal = new bootstrap.Modal(
                document.getElementById("modalVerif")
            );
            modal.show();
        }
    });

const starOrderInput = document.querySelector("#star_order");
const priceRank = document.querySelector("#price");
starOrderInput.addEventListener("input", function () {
    const checkedRadioButton = document.querySelector(".btn-check:checked");
    if (checkedRadioButton) {
        let priceValue =
            checkedRadioButton.parentElement.querySelector(
                ".price-rank"
            ).textContent;
        priceValue = parseFloat(priceValue.replace("Rp.", "").replace(",", "")); // Mengonversi menjadi float
        const price = document.querySelectorAll(".harga");
        let total = this.value * priceValue;
        priceRank.value = total.toFixed(3);
        console.log(total);
        price.forEach((p) => {
            p.textContent = `Rp.${total.toFixed(3)}`; // Menggunakan toFixed() untuk menampilkan dua angka desimal
        });
    }
});
