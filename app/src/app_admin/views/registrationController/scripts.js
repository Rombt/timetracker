document.addEventListener('DOMContentLoaded', function () {
  const regForm = document.getElementById('regForm');
  const submitButton = document.getElementById('submitRegForm');
  const passwordInput = document.getElementById('password');
  const passwordConfirmInput = document.getElementById('passwordConfirm');
  const errorDiv = document.querySelector('.err-conf-pass');

  passwordInput.addEventListener('input', checkPasswords);
  passwordConfirmInput.addEventListener('input', checkPasswords);

  regForm.addEventListener('submit', function (event) {
    event.preventDefault();

    const formData = new FormData(regForm);
    const data = Object.fromEntries(formData.entries());

    fetch(regForm.action, {
      method: regForm.method,
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: new URLSearchParams(data).toString(),
    })
      .then(response => {
        if (!response.ok) {
          return response.json().then(errorData => {
            displayErrors(regForm, errorData);
            throw new Error('Server responded with an error');
          });
        }
        return response.json();
      })
      .then(data => {
        window.location.href = data.redirectUrl;
      })
      .catch(error => {});
  });

  function checkPasswords() {
    if (passwordInput.value === passwordConfirmInput.value) {
      errorDiv.style.display = 'none';
      submitButton.disabled = false;
    } else {
      errorDiv.style.display = 'block';
      submitButton.disabled = true;
    }
  }
});
