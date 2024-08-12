document.addEventListener('DOMContentLoaded', function () {
  const logForm = document.getElementById('logForm');
  //   const submitButton = document.getElementById('submitLogForm');

  //   const passwordInput = document.getElementById('password');
  //   const passwordConfirmInput = document.getElementById('passwordConfirm');
  //   const errorDiv = document.querySelector('.err-conf-pass');

  //   passwordInput.addEventListener('input', checkPasswords);
  //   passwordConfirmInput.addEventListener('input', checkPasswords);

  logForm.addEventListener('submit', function (event) {
    event.preventDefault();

    const formData = new FormData(logForm);
    const data = Object.fromEntries(formData.entries());

    fetch(logForm.action, {
      method: logForm.method,
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: new URLSearchParams(data).toString(),
    })
      .then(response => {
        if (!response.ok) {
          return response.json().then(errorData => {
            displayErrors(logForm, errorData);
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
});
