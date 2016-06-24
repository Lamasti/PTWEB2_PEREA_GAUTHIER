<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="icon" type="image/png" href="favicon.png" />
		<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->

        <link rel="stylesheet" type="text/css" href="css/reset.css">
		
 		
			<?php
			
			$saison 	= isset($_GET['saison']) ? $_GET['saison'] : NULL;
			$page 		= isset($_GET['page']) ? $_GET['page'] : NULL;
			
			if($saison == "winter")
			{
				echo '<link rel="stylesheet" type="text/css" href="css/style_winter.css">';
			}
			elseif($saison == "summer")
			{
				echo '<link rel="stylesheet" type="text/css" href="css/style_summer.css">';
			}
			elseif($saison == "spring")
			{
				echo '<link rel="stylesheet" type="text/css" href="css/style_spring.css">';
			}
			elseif($saison == "autumn")
			{
				echo '<link rel="stylesheet" type="text/css" href="css/style_autumn.css">';
			}
			
			?>
		
        <title>Gauthier PEREA</title>
    </head>
    <body>
		<nav class="menu">
			<ul>
				<li><a href="contenu.php?saison=<?php echo $saison;?>&amp;page=accueil">Accueil</a></li>
				<li><a href="contenu.php?saison=<?php echo $saison;?>&amp;page=formation">Formations</a></li>
				<li><a href="contenu.php?saison=<?php echo $saison;?>&amp;page=competence">Compétences</a></li>
				<li><a href="contenu.php?saison=<?php echo $saison;?>&amp;page=divers">Divers</a></li>
				<li><a href="contenu.php?saison=<?php echo $saison;?>&amp;page=porfolio">Portfolio</a></li>
				<li><a href="contenu.php?saison=<?php echo $saison;?>&amp;page=contact">Contact</a></li>
			</ul>
		
		</nav>
		
		<div class="conteneur">

		<?php 
		
		if($page == "accueil")
		{
			include('includes/accueil.php'); 
		}
		elseif($page == "formation")
		{
			include('includes/formation.php'); 
		}
		elseif($page == "competence")
		{
			include('includes/competence.php'); 
		}
		elseif($page == "porfolio")
		{
			include('includes/porfolio.php'); 
		}
		elseif($page == "contact")
		{
			include('includes/contact.php'); 
		}
		elseif($page == "divers")
		{
			include('includes/divers.php'); 
		}
		?>
		
		</div>
    </body>
</html>