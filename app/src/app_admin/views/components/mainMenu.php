<div class="cont-main-horizontal-menu">
   <nav class="font-text main-horizontal-menu">
      <ul>
         <li><a href="<?php echo URL ?>">home</a></li>
         <li><a href="<?php echo URL ?>/about">about</a></li>

         <?php if ( User::isLogin() ) : ?>
         <li><a href="<?php echo URL ?>/workarea">work area</a></li>
         <?php if ( User::isAdmin() ) : ?>
         <li><a href="<?php echo URL ?>/users">users</a></li>
         <?php endif ?>
         <li><a href="<?php echo URL ?>/login/logout">logOut</a></li>
         <li><a href="<?php echo URL ?>/profile">profile</a></li>
         <?php else : ?>
         <li><a href="<?php echo URL ?>/registration">registration</a></li>
         <li><a href="<?php echo URL ?>/login">login</a></li>
         <?php endif ?>
         <li><a href="<?php echo URL ?>/support">support</a></li>
      </ul>
   </nav>
</div>