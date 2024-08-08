<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php echo URL ?>/assets/styles/main-style.min.css?<?php echo rand() ?>" />
   <?php if ( isset( $this->addCss ) ) : ?>
   <link rel="stylesheet" href="<?php echo $this->addCss . '?' . rand() ?>" />
   <?php endif ?>

   <title><?php echo $this->getTitle() ?></title>
</head>


<body>
   <div class="rmbt-page-wrap">

      <header>
         <div class="wrapper-section">
            <div class="rmbt-full-width rmbt-top-string-header-full-width">
               <section class="rmbt-container rmbt-top-string-header">
                  <div class="rmbt-top-string-header__row">

                     <!-- <a href="/"> -->
                     <a href="/" class="rmbt-top-string-header__col header-logo">
                        <div class="wrap-img">
                           <img src="<?php echo URL ?>/assets/img/header-logo_color_1.png" alt="">
                        </div>
                        <span>Time tracker</span>
                     </a>
                     <div class="rmbt-top-string-header__col header-menu">
                        <ul>
                           <li><a href="/">home</a></li>
                           <li><a href="/">support</a></li>
                           <li><a href="/">about</a></li>
                           <li><a href="/">login</a></li>
                        </ul>
                     </div>
                  </div>
               </section>
            </div>
         </div>
      </header>