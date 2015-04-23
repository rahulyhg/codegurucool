
<!DOCTYPE html>
  <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>CodeGuruCool-A Questions Answer forum</title>

      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="../css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    </head>

    <body>
    <nav class="blue darken-4" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="../index.html" class="brand-logo"><img class="responsive-img logo-img" src="../images/logo.png"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="../overall/get_start.php" class="white-text">Home</a></li>
        <li><a href="../overall/about_us.html" class="white-text">About US</a></li>
        <?php
            require '../stdatabase/profile.php';
           if(isset($login_session)==1)
           {
            echo '<ul id="dropdown2" class="dropdown-content">';
        echo '<li><a href="#!">'.$login_session.'<span class="badge"></span></a></li>';
        echo '<li><a href="../stdatabase/logout.php">Logout</a></li></ul>';
        echo '<a class="btn dropdown-button" href="" data-activates="dropdown2">Welcome';
        echo '<i class="mdi-navigation-arrow-drop-down left"></i></a>';
        }
        else
        {
          echo'<li><a href="../overall/get_start.php" class="white-text">Register</a></li>';
        }
        ?>
  
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="../overall/get_start.php">Home</a></li>
        <li><a href="../overall/about_us.html">About US</a></li>
        <?php
            require '../stdatabase/profile.php';
           if(isset($login_session)==1)
           {
            echo '<ul id="dropdown2" class="dropdown-content">
                <li><a href="#!">'.$login_session.'<span class="badge"></span></a></li>
                <li><a href="../stdatabase/logout.php">Logout</a></li></ul>
                <a class="btn dropdown-button white-text" href="" data-activates="dropdown2">Welcome
               <i class="mdi-navigation-arrow-drop-down left"></i></a>';
        }
        else
        {
          echo'<li><a href="../overall/get_start.php" class="white-text">Register</a></li>';
        }
        ?>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse white"><i class="mdi-navigation-menu white"></i></a>
    </div>
  </nav>

<?php
define('WP_USE_THEMES', true);

require( dirname( __FILE__ ) . '/wp-blog-header.php' );?>
 <footer class="page-footer blue darken-4 center-align">
    <div class="container">
      <div class="row">
        <div class="col l12 s12">
          <h5 class="white-text">Why Codegurucool?</h5>
          <p class="grey-text text-lighten-4 left-align">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
        </div>    
     </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Copyright<a class="brown-text text-lighten-3" href="../index.html">&copy;Codegurucool</a>
      </div>
    </div>
  </footer>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="../js/jquery.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>
      <script type="text/javascript" src="../js/init.js"></script>
    </body>
  </html>

