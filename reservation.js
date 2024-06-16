document.getElementById('reservationForm').addEventListener('submit', function(event) {
    const password = document.getElementById('password').value;
    const errorMessage = document.getElementById('error-message');

    const hasNumber = /\d/;
    const hasSpecialChar = /[!@#$%^&*(),.?":{}|<>]/;

    if (password.length > 15) {
        errorMessage.textContent = "Le mot de passe ne doit pas dépasser 15 caractères.";
        event.preventDefault();
    } else if (!hasNumber.test(password) || !hasSpecialChar.test(password)) {
        errorMessage.textContent = "Le mot de passe doit contenir au moins un chiffre et un caractère spécial.";
        event.preventDefault();
    } else {
        errorMessage.textContent = "la reservation a été prise en compte";
    }
});
