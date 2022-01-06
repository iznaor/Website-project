<?php
print '

<!DOCTYPE HTML>
<html lang="hr">
	<head>
		<title>News</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="news3">
		<meta name="keywords" content="news3">
		<meta name="author" content="Ivan Znaor">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css">
		<link rel="icon" type="image/png" href="favicon.png">
        <!-- style>
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
            }
            li {
                display: inline-block;
                margin-right: 10px;
            }
        </style -->
	</head>
<body>
    <header>
	<div class="hero-image"></div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
            </ul>
        </nav>

    </header>
    <main>
        <!-- HOME TEXT -->
<button onclick="myFunction()">Toggle dark mode</button>

<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>
      <h1>France successfully launches cutting-edge military communications satellite</h1>
      <figure>
        <img src="img/france.jpg" alt="France" title="France">
        <figcaption> @eugene-dorosh-230277 / Pexels </figcaption>
      </figure>
      <p>France has successfully launched a state-of-the-art satellite into orbit, designed to allow all of Frances armed forces across the globe to communicate swiftly and securely. Paris created a space force command in July 2019, amongst concerns that rival countries were heavily investing in space technology, seen as a new military frontier.</p>
      <p>The satellite is designed to resist military aggression from the ground and in space, as well as interference, French air and space force spokesman Colonel Stephane Spet told AFP.</p>
      <p>The Ariane 5 rocket carrying the Syracuse 4A satellite took off from Kourou, in French Guiana late Saturday, with the mission accomplished 38 minutes and 41 seconds after takeoff.</p>
      <p>Source: <a href="https://www.france24.com/en/europe/20211024-france-successfully-launches-cutting-edge-military-communications-satellite" target="_blank">france24</a></p>
      
    </main>


    <footer>
	      <p>Copyright &copy; 2021 Ivan Znaor <a href="https://github.com/iznaor/Website-project"><img src="img/github.svg"title="Github" alt="Github" style="width:24px; margin-top:0.4em"></a></p>
    </footer>
</body>
</html>
';


?>