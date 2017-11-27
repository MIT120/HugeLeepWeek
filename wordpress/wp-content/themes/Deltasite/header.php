
<html <?php language_attributes(); ?>>
  <head>
    <meta chartset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width" >
    <link rel='icon' type='image/png' href='http://SpylonGFX.com/flavicon.png'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <!-- Bootstrap | part 1 -->
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel='icon' type='image/png' href='http://SpylonGFX.com/flavicon.png'>
    <link href='https://fonts.googleapis.com/css?family=Nunito:300,300i,400,400i,700,700i|Roboto:900' rel='stylesheet'>
    <title> Delta </title>

    <script src='https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js'></script>
    <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
            <div class="hidden-md-up">
              <div class='general_header'>
                <?php get_search_form()  ?>
                  <div class='general_headermenu' id='showMenu' onclick='openNav()'></div>

                  <!--        MENU -->
                  <div id='myNav' class='overlay'>
                      <div onclick='closeNav()' id='showContent' class='closemenubtn'>
                          <div class='closemenuicon'></div>
                      </div>
                      <div class='overlay-content'>
                          <a href='https://i358717.iris.fhict.nl/wordpress' class='menuitem'>Projects</a><br>
                          <a href='https://i358717.iris.fhict.nl/wordpress/about-mobile/' class='menuitem'>About</a><br>
                          <a href='https://i358717.iris.fhict.nl/wordpress/contact-mobile/' class='menuitem'>Contact</a><br>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="hidden-sm-down" >
              <a class="brand" href="https://i358717.iris.fhict.nl/wordpress"><div class='general_headerlogo'></div></a>
                <ul class="nav nav-pills pull-right p-t-5">
                      <li><a class="navBulletsColor" href="https://i358717.iris.fhict.nl/wordpress">Projects</a></li>
                      <li><a class="navBulletsColor" href="https://i358717.iris.fhict.nl/wordpress/about">About</a></li>
                      <li><a class="navBulletsColor" href="https://i358717.iris.fhict.nl/wordpress/contact-us">Contact</a></li>
                </ul>
            </div>
        </div>

      </div>
    </nav>
