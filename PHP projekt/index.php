<?php  
	
	define('__APP__', TRUE);
	
	# pocetak sesije
    session_start();
	
	# ukljucivanje veze za konekciju na bazu
	include ("dbconn.php");
	
	# cjelobrojne varijable 
    if(isset($_GET['menu'])) { $menu   = (int)$_GET['menu']; }
	if(isset($_GET['action'])) { $action   = (int)$_GET['action']; }
	
	# slova 
    if(!isset($_POST['_action_']))  { $_POST['_action_'] = FALSE;  }
	

	if (!isset($menu)) { $menu = 1; }
	
    include_once("functions.php");
	
print '
<!DOCTYPE html>
<html>
	<head>
		
		<!-- CSS -->

		<link rel="stylesheet" href="style.css">

		<!-- End CSS -->

		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="News website with the latest news from around the world">
		<meta name="keywords" content="News, World">
		<meta name="author" content="Ivan Znaor">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="favicon.png">
		

		<title>index</title>

	</head>
<body>
	<header>
		<div'; if ($menu > 1) { print ' class="hero-image"'; } else { print ' class="hero-image"'; }  print '></div>
		<nav>';
			include("menu.php");
		print '</nav>
	</header>
	<main>';
		if (isset($_SESSION['message'])) {
			print $_SESSION['message'];
			unset($_SESSION['message']);
		}

	if (!isset($menu) || $menu == 1) { include("home.php"); }
	
	# Vijesti
	else if ($menu == 2) { include("news.php"); }
	
	# Kontakt
	else if ($menu == 3) { include("contact.php"); }
	
	# O stranici
	else if ($menu == 4) { include("about.php"); }
	
	# Galerija
	else if ($menu == 5) { include("gallery.php"); }

        # Registracija
	else if ($menu == 6) { include("register.php"); }
	
	# Prijava
	else if ($menu == 7) { include("signin.php"); }
	
	# Administrativni dio 
	else if ($menu == 8) { include("admin.php"); }

	print '
	</main>
	<footer>
		
          <p>Copyright &copy; 2021 Ivan Znaor<a href="https://github.com/iznaor/Website-project"><img src="img/github.svg"title="Github" alt="Github" style="width:24px; margin-top:0.4em"></a></p>

	</footer>
</body>
</html>';
?>