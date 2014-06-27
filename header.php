
<!DOCTYPE html>

<!-- 
PARTIE HEAD
  Dans le Head, mettre les ifos sur l'encodage de la page, les balises méta pour le référencement et l'identitié de la page, les liens vers les éléments à implémenter comme Google Analytics, Bootstrap, etc. et enfin les liens pour appeler les feuilles reset puis feuilles de style
-->

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
        <!-- indique l'encodage -->
        <meta charset="utf-8">
        <!-- indique ... -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <!-- indique le titre du site, titre de l'onglet dans le nav -->
        <title>Projet temoin 2 - Eléna</title>
        <!-- Si google juge ces lignes pertinentes, il les affichera en description du lien -->
        <meta name="description" content="Voici mon projet web temoin">
        <!-- indique l'auteur' -->
        <meta name="author" content="Elena Web">
        <!-- indique ... -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- indique ... -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
        <!-- indique ... -->
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> 
        <!-- indique ... -->
        <link href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
        <!-- indique ... -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-theme.min.css">
        <!-- indique ... -->
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
        <!-- indique ... -->
        <script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<!-- Pour mailchimp : vérifier si ça ne fait pas doublon avec le script ci-dessous -->
		<script src="<?php bloginfo('template_directory'); ?>/script/script-mailchimp.html"></script>
			<link href="http://cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
			<style type="text/css">
			#mc_embed_signup{clear:left; font:14px Helvetica,Arial,sans-serif; }
			/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
			   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
			</style>
		<!-- indique ... -->
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> 
		<!-- Lorsqu'on aime une police sur google font, on peut la prendre et l'installer dans son site. Cette ligne dit au navigateur où aller chercher les infos pour l'afficher correctement -->
		<link href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
		<!-- indique le chemin vers la feuille de reset -->
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/stylesheets/reset.css" type="text/css"> 
		<!-- indique ... -->
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/main.js" type="text/javascript"></script> <!-- donc il faut avoir le fichier main.js dans un dossier JS -->
		<!-- Latest compiled and minified JavaScript -->
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css"> <!-- donc il faut avoir le fichier style.CSS dans un dossier stylesheet -->

</head>
    
<body>      
      	<!-- Pour que la like box de facebook fonctionne -->  
	        <div id="fb-root"></div>
	        <script>(function(d, s, id) {
	            var js, fjs = d.getElementsByTagName(s)[0];
	            if (d.getElementById(id)) return;
	            js = d.createElement(s); js.id = id;
	            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
	            fjs.parentNode.insertBefore(js, fjs);
	          }(document, 'script', 'facebook-jssdk'));
	        </script>
        <!-- Pour que google analytics fonctionne --> 
	     	<script type="text/javascript">
	 			var _gaq = _gaq || [];
	  			_gaq.push(['_setAccount', 'UA-32203429-1']);
	  			_gaq.push(['_trackPageview']);
	  			(function() {
	    		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				})();
			</script>
        <!-- Pour que twitter fonctionne --> 
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
				if(!d.getElementById(id)){js=d.createElement(s);js.id=id;
				js.src="//platform.twitter.com/widgets.js";
				fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
			</script>



	<header>

		<!-- la barre de navigation : version d'avant Wordpress 
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<ul class="nav nav-pills">
				  <li class="active"><a href="../page1.php">Menu 1</a></li>
				  <li><a href="../page2.php">Menu 2</a></li>
				  <li><a href="../page3.php">Menu 3</a></li>
				</ul>
			</div>
		</div> 
		-->
		<div class="row">
		 <?php
	          wp_nav_menu( array(
	              'menu'              => 'primary',
	              'theme_location'    => 'primary',
	              'depth'             => 2, /* nombre de sous menu autorisé */
	              'container'         => 'div',
	              'container_class'   => 'col-md-10 col-md-offset-1',
	      				/*'container_id'      => '', */
	              'menu_class'        => 'nav nav-pills',
	              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	              'walker'            => new wp_bootstrap_navwalker())
	          );
	     			 ?>
		
		</div>
      <!--/ autre version : la navbar-collapse 
	      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	        <div class="container">
	          <div class="navbar-header">
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	              <span class="sr-only">Toggle navigation</span>
	              <span class="icon-bar"></span>
	              <span class="icon-bar"></span>
	              <span class="icon-bar"></span>
	            </button>
	            <a class="navbar-brand" href="#">Project name</a>
	          </div>
	          <div class="navbar-collapse collapse">
	            <form class="navbar-form navbar-right" role="form">
	              <div class="form-group">
	                <input type="text" placeholder="Email" class="form-control">
	              </div>
	              <div class="form-group">
	                <input type="password" placeholder="Password" class="form-control">
	              </div>
	              <button type="submit" class="btn btn-success">Sign in</button>
	            </form>
	          </div>
	        </div>
	      </div>
	      -->


		<div class="mon-header"> 
			<h1 style="display:inline; padding:20px; margin:0 5 0 0;"><a href="<?php echo home_url(); ?>">Marque, logo, H1</a></h1>
			<p style="display:inline; padding:0; margin:0; font-weight:bold; color:#428bca" >&nbsp;&nbsp;&nbsp;Sous titre que j'ai rajouté à la même ligne, codé dans le html (et non le CSS)</p>
		</div>
	</header>