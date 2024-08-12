<?php require_once TEMPLATE_PATH . '/components/header.php' ?>


<main>

   <div class="wrapper-section">
      <div class="rmbt-full-width reg-form-full-width">
         <section class="rmbt-container reg-form">
            <div class="reg-form__row">

               <div class="reg-form__col">

                  <h1 class='font-title'>Complete this form <br> for log in</h1>

                  <div class="reg-form__wrap">
                     <form id='logForm' class="font-text simple-block" action="<?php echo URL ?>/login/login"
                        method='POST'>
                        <label for="email">
                           Email:
                           <input type="email" id="email" name='email' required>
                        </label>
                        <label for="password">
                           Password:
                           <input type="password" id="password" name='password' required>
                        </label>

                        <button id='submitLogForm' type='submit' class='font-text'> login </button>

                     </form>
                  </div>



               </div>
            </div>
         </section>
      </div>
   </div>

</main>




<?php require_once TEMPLATE_PATH . '/components/footer.php' ?>