document.addEventListener('DOMContentLoaded', function () {
  const formLogin = document.querySelector('#regForm');

  const submitButton = formLogin.querySelector('#submitRegForm');
  const fieldPassValue = formLogin.querySelector('#password').value;
  const fieldConfirmPass = formLogin.querySelector('#passwordConfirm');
  const fieldConfirmPassValue = fieldConfirmPass.value;

  fieldConfirmPass.addEventListener('blur', function () {
    console.log('Пользователь завершил ввод: ');
    if (fieldPassValue === fieldConfirmPassValue) {
      submitButton.disabled = false;
    }
  });
});
