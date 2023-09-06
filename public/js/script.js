const header = document.querySelector("header");

function updateStickyClass() {
    const isDesktop = window.innerWidth > 1000;
    const isMobile = window.innerWidth <= 500;

    if (isDesktop && window.scrollY > 400) {
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
// const formRank = document.querySelector("#order-rank");
// const orderRank = document.querySelector("#btn-order-rank");
// const email = document.querySelector("#email");

// orderRank.addEventListener("click", function () {
//     const modal = document.createElement("div");
//     modal.classList.add("modal", "fade");
//     modal.innerHTML = `
//         <div class="modal-dialog modal-dialog-centered">
//             <div class="modal-content">
//                 <div class="modal-header">
//                     <h5 class="modal-title">Judul Modal</h5>
//                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
//                 </div>
//                 <div class="modal-body">
//                     ${email.value}
//                 </div>
//                 <div class="modal-footer">
//                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
//                     <button type="button" class="btn btn-primary">Simpan Perubahan</button>
//                 </div>
//             </div>
//         </div>
//     `;

//     // Tambahkan modal ke dalam dokumen
//     formRank.appendChild(modal);

//     // Inisialisasi modal Bootstrap
//     const modalInstance = new bootstrap.Modal(modal);

//     // Tampilkan modal
//     modalInstance.show();
// });

document
    .getElementById("btn-order-rank")
    .addEventListener("click", function () {
        // Ambil nilai dari input WhatsApp
        const emailValue = document.getElementById("email").value;
        const nickValue = document.getElementById("idNick").value;
        const whatsappValue = document.getElementById("whatsapp").value;
        const selectedRank = document.querySelector(
            'input[name="select_joki"]:checked'
        ).value;

        // Tampilkan nilai di dalam modal
        document.getElementById("email-display").textContent = emailValue;
        document.getElementById("nick-display").textContent = nickValue;
        document.getElementById("joki-display").textContent = selectedRank;
        document.getElementById("whatsapp-display").textContent = whatsappValue;
    });
