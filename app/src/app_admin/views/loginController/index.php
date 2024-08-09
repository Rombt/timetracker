<?php require_once TEMPLATE_PATH . '/components/header.php' ?>


<main>

   <div class="wrapper-section">
      <div class="rmbt-full-width login-form-full-width">
         <section class="rmbt-container login-form">
            <div class="login-form__row">

               <div class="login-form__col">

                  <h1 class='font-title'>Complete this form <br> for log in</h1>

                  <div class="login-form__wrap">
                     <form id='regForm' class="font-text simple-block " action="#" method=''>
                        <label for="email">
                           Email:
                           <input type="text" id="email" name='email' required>
                        </label>
                        <label for="password">
                           Password:
                           <input type="text" id="password" name='password' required>
                        </label>

                        <button type='submit' class='font-text'> registration </button>

                     </form>
                  </div>



               </div>
            </div>
         </section>
      </div>
   </div>

</main>




<?php require_once TEMPLATE_PATH . '/components/footer.php' ?>