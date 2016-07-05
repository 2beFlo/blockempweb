<!DOCTYPE html>
<html lang="de">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Deutschsprachiger Minecraft-Server ab 18">
    <meta name="author" content="Florian Lillpopp" >

    <title>Block Empirium - Der Minecraft-Server ab 18!</title>
    
	 <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

 <?php require('navigation.php'); ?>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Der Minecraft-Server ab 18!</div>
                <div class="intro-heading">Block Empirium</div>
                <a href="#services" class="page-scroll btn btn-xl">Erkunde unsere Welt</a>
            </div>
        </div>
    </header>
    <!-- Galerie -->
    
    <section  id="galerie">
		<?php require('galerie.php'); ?>
	</section>
   
    <!-- Services Section -->
    <section id="services">
 		<?php require('serverdaten.php'); ?>                       
	</section>
		      
    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
 		<?php require('projekte.php'); ?>  
    </section>
	 
	 <!-- Detail Section -->
    <section id="detail">
 		<?php require('besonderheiten.php'); ?>
    </section>
    
    <!-- Nachtgedanken Grid Section -->
    <section id="nachtgedanken" class="bg-light-gray">
 		<?php require('nachtgedanken.php'); ?>
    </section>

    <!-- About Section -->
    <section id="about">
 		<?php require('wissenswert.php'); ?>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
 		<?php require('team.php'); ?>
    </section>


<?php require('footer.php'); ?>
<?php require('content.php'); ?>
<?php require('scripts.php'); ?>

</body>

</html>