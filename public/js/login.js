const container = document.querySelector(".container");
const loginLink = document.querySelector(".singin");
const registerLink = document.querySelector(".singup");

registerLink.addEventListener("click", function () {
    container.classList.add("active");
});
loginLink.addEventListener("click", function () {
    container.classList.remove("active");
});
