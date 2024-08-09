document.addEventListener('DOMContentLoaded', function () {
  const formLogin = document.querySelector('#regForm');
  const fieldPass = formLogin.querySelector('#password');
  const fieldConfirmPass = formLogin.querySelector('#passwordConfirm');
  const submitButton = formLogin.querySelector('#submitRegForm');
  const errConfPass = formLogin.querySelector('.err-conf-pass');

  fieldConfirmPass.addEventListener('blur', function () {
    if (fieldPass.value === fieldConfirmPass.value) {
      submitButton.disabled = false;
      if (errConfPass.style.display === 'block') {
        errConfPass.style.display = 'none';
      }
    } else {
      errConfPass.style.display = 'block';
    }
  });
});
