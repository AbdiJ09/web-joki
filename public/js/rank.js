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
        ];

        let isValid = true;

        inputNames.forEach((inputName) => {
            const inputElement = document.querySelector(
                `[name="${inputName}"]`
            );
            const inputValue = inputElement.value.trim();
            console.log(inputValue);
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
