document.addEventListener('DOMContentLoaded', function () {
  const formLogin = document.querySelector('#regForm');

  const fieldPass = formLogin.querySelector('#password');
  const fieldConfirmPass = formLogin.querySelector('#passwordConfirm');

  console.log('fieldPass = ', fieldPass);
  console.log('fieldConfirmPass = ', fieldConfirmPass);

  const submitButton = formLogin.querySelector('#submitRegForm');
  const errConfPass = formLogin.querySelector('.err-conf-pass');

  fieldConfirmPass.addEventListener('blur', function () {
    const fieldPassValue = fieldPass.value;
    const fieldConfirmPassValue = fieldConfirmPass.value;

    if (fieldPassValue === fieldConfirmPassValue) {
      submitButton.disabled = false;
      if (errConfPass.style.display === 'block') {
        errConfPass.style.display = 'none';
      }
    } else {
      errConfPass.style.display = 'block';
    }
  });
});
