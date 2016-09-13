<!doctype html>
<html class="no-js" lang="en">
<?php include '../page_header.php' ?>
	<body id="top">
		<!--[if lt IE 9]>
			<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
		<![endif]-->
<?php include '../navigation.php' ?>
<div class="key-visual">

    <h1 class="page-title"><span>Conference Schedule</span></h1>

</div>
<?php //include '../logo.php' ?>
</header>


      <div class="content-wrapper">
         <div class="container">
            <div class="row">
               <div class="span12">
                  <div class="page-header">
                     <h1>True North PHP Conference Schedule</h1>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="span12" >
<?php include '../schedule.php'; ?>
               </div>
            </div>
            <hr>
         </div>
      </div>
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
      <script type="text/javascript" src="js/fancyapps-fancyBox-2bb0da9/source/jquery.fancybox.js?v=2.1.0"></script>
      <script type="text/javascript">
         $(document).ready(function() {
            $(".fancybox").fancybox();
         });
      </script>
<?php include '../footer.php'; ?>
   </body>
</html>
