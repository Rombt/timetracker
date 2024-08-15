<?php if ( ! User::isAdmin() ) {
	header( 'Location: login' );
	exit();
} ?>

<?php require_once TEMPLATE_PATH . '/components/header.php' ?>





<main>

   <div class="wrapper-section  work-area-wrapper-section">
      <div class="rmbt-full-width work-area-full-width">
         <section class="rmbt-container  work-area">

            <h1 class='font-title'>The is time log of <?php echo $_SESSION['USER_NAME'] ?></h1>
            <p class='font-text user-status'> status of user: <span> <?php echo $_SESSION['USER_ROLE'] ?></span></p>
            <div class="work-area__row  user-row">

               <div class="work-area__col">

                  <?php if ( count( $this->arrResults['USERS'] ) ) : ?>

                  <table class='simple-block font-text'>
                     <tr>
                        <th>User name</th>
                        <th>Something about this user</th>
                        <th>Something very important yet about this user</th>
                        <th>Reset password</th>
                     </tr>

                     <?php foreach ( $this->arrResults['USERS'] as $str ) : ?>
                     <tr>
                        <td><?php echo $str['username']; ?></td>
                        <td class='about-user'></td>
                        <td class='about-user'></td>
                        <td><a href='<?php echo URL ?>/users/resetpassword/<?php echo $str['id'] ?>'
                              class='reset-password'>Reset password</a>
                        </td>
                     </tr>
                     <?php endforeach; ?>

                  </table>
                  <?php else : ?>
                  <div class="massage-box">
                     <h2>this user hadn't working yet</h2>
                  </div>
                  <?php endif ?>

               </div>
            </div>
         </section>
      </div>
   </div>

</main>


<?php require_once TEMPLATE_PATH . '/components/footer.php' ?>