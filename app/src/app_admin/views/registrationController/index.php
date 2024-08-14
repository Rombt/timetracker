<?php require_once TEMPLATE_PATH . '/components/header.php' ?>


<main>

   <div class="wrapper-section">
      <div class="rmbt-full-width login-form-full-width">
         <section class="rmbt-container login-form">
            <div class="login-form__row">

               <div class="login-form__col">

                  <h1 class='font-title'>Complete this form <br> for registration</h1>

                  <div class="login-form__wrap">
                     <form id='regForm' class="font-text simple-block"
                        action="<?php echo URL ?>/registration/formProcessing" method='POST'>
                        <label for="email">
                           Login:
                           <input type="text" id="login" name='login' required>
                        </label>
                        <label for="email">
                           Email:
                           <input type="email" id="email" name='email' required>
                        </label>
                        <label for="password">
                           Password:
                           <input type="password" id="password" name='password' required>
                        </label>
                        <label for="passwordConfirm">
                           Password confirm:
                           <input type="password" id="passwordConfirm" name='passwordConfirm' required>
                        </label>

                        <button id='submitRegForm' type='submit' class='font-text' disabled> registration </button>
                        <div class="err-conf-pass">passwords does not match</div>
                     </form>

                  </div>



               </div>
            </div>
         </section>
      </div>
   </div>

</main>




<?php require_once TEMPLATE_PATH . '/components/footer.php' ?>