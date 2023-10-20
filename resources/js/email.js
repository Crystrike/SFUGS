document.addEventListener('DOMContentLoaded', function () {
    const emailInput = document.getElementById('email');
    const emailError = document.getElementById('emailError');
    const submitBtn = document.getElementById('submitBtn');
    const successMessage = document.getElementById('successMessage');

    submitBtn.addEventListener('click', function () {
        const email = emailInput.value;
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

        if (emailPattern.test(email)) {
            // Почта соответствует шаблону
            emailError.textContent = '';
            successMessage.style.display = 'block';
        } else {
            // Почта не соответствует шаблону
            emailError.textContent = 'Неверный формат почты';
            successMessage.style.display = 'none';
        }
    });
});
