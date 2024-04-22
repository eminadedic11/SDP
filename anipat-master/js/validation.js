document.addEventListener("DOMContentLoaded", function() {
    const validation = new JustValidate("#signup");

    validation
        .addField("#name", [
            { rule: "required", errorMessage: "Full Name is required" }
        ])
        .addField("#email", [
            { rule: "required", errorMessage: "Email is required" },
            { rule: "email", errorMessage: "Please enter a valid email address" }
        ])
        .addField("#password", [
            { rule: "required", errorMessage: "Password is required" },
        ])
        .addField("#phone", [
            { rule: "required", errorMessage: "Phone Number is required" },
        ])
        .addField("#experience", [
            { rule: "required", errorMessage: "Experience is required" }
        ]);

    validation.onSuccess(() => {
        const emailField = document.querySelector("#email");
        const emailValue = emailField.value.trim();
        fetch("validate-email.php?email=" + encodeURIComponent(emailValue))
            .then(response => response.json())
            .then(data => {
                if (!data.available) {
                    const errorMessage = document.createElement("div");
                    errorMessage.classList.add("js-error-message");
                    errorMessage.classList.add("error-message");
                    errorMessage.textContent = "Email already taken";
                    emailField.parentElement.appendChild(errorMessage);
                } else {
                    document.getElementById("signup").submit();
                }
            })
            .catch(error => console.error("Error:", error));
    });
});
