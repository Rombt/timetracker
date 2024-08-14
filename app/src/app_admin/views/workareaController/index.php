<?php if ( ! User::isLogin() ) {
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

                  <div class="add-entry-wrap">

                     <a id="iconAddEntry" href="#addEntry" class="popup-link icon-edit-entry">add entry</a>
                     <div id="addEntry" class="popup">
                        <div class="popup__body">
                           <div class="popup__content">
                              <div class="popup__close-window"></div>
                              <div class="popup__title"> add new entry </div>
                              <div class="popup__text">
                                 <form id='addEntryForm' class="font-text simple-block"
                                    action="<?php echo URL ?>/workarea/addentry" method='POST'>

                                    <label for="date">
                                       Date:
                                       <input type="data" id="date" name='date'>
                                    </label>
                                    <label for="user_name">
                                       User name:
                                       <input type="text" id="user_name" name='user_name'>
                                    </label>
                                    <label for="hours">
                                       Hours:
                                       <input type="text" id="hours" name='hours'>
                                    </label>
                                    <label for="comment">
                                       Comment:
                                       <textarea id="comment" name='comment'></textarea>
                                    </label>

                                    <button id='submitEditEntryForm' type='submit' class='font-text'> add entry
                                    </button>
                                    <!-- <div class="err-conf-pass">passwords does not match</div> -->

                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>

                  <?php if ( count( $this->arrResults['TIME_LOG'] ) ) : ?>

                  <table id='work_area_table' class='simple-block font-text'>
                     <tr>
                        <th>Date</th>
                        <?php if ( User::isAdmin() ) : ?>
                        <th>User name</th>
                        <?php endif ?>
                        <th>Hours</th>
                        <th>Comments</th>
                        <th></th>

                     </tr>

                     <?php foreach ( $this->arrResults['TIME_LOG'] as $str ) : ?>
                     <tr>
                        <td><?php echo $str['day']; ?></td>
                        <?php if ( User::isAdmin() ) : ?>
                        <td><?php echo $str['username']; ?></td>
                        <?php endif ?>
                        <td class='hours-field'><?php echo $str['hours']; ?></td>
                        <td class='comment-field'><?php echo $str['comment']; ?></td>
                        <td>
                           <a href="#editEntry" class="popup-link icon-edit-entry "
                              data-entry_id="<?php echo $str['id']; ?>">edit entry</a>
                        </td>
                     </tr>
                     <?php endforeach; ?>

                  </table>

                  <?php else : ?>
                  <div class="massage-box">
                     <h2>this user hadn't working yet</h2>
                  </div>
                  <?php endif ?>


                  <div id="editEntry" class="popup">
                     <div class="popup__body">
                        <div class="popup__content">
                           <div class="popup__close-window"></div>
                           <div class="popup__title"> </div>
                           <div class="popup__text">

                              <form id='editEntryForm' class="font-text simple-block"
                                 action="<?php echo URL ?>/workarea/editentry" method='POST'>

                                 <label for="hours">
                                    Hours:
                                    <input type="text" id="hours" name='hours'>
                                 </label>
                                 <label for="comment">
                                    Comment:
                                    <textarea id="comment" name='comment'></textarea>
                                 </label>

                                 <button id='submitEditEntryForm' type='submit' class='font-text'> save changes
                                 </button>
                                 <!-- <div class="err-conf-pass">passwords does not match</div> -->

                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
         </section>
      </div>
   </div>

</main>






<?php require_once TEMPLATE_PATH . '/components/footer.php' ?>