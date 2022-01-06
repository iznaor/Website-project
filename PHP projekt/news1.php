<?php
print '
<!DOCTYPE HTML>
<html lang="hr">
	<head>
		<title>News</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="news1">
		<meta name="keywords" content="news1">
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
      <h1>Vikings explored the Americas long before Christopher Columbus</h1>
      <figure>
        <img src="img/vikings.jpg" alt="Viking" title="Viking">
        <figcaption> @meiksbar / Pexels </figcaption>
      </figure>
      <p>The Vikings were the first Europeans in the Americas, well before Christopher Columbus, according to new evidence that places the seafaring warriors at a site in Newfoundland in 1021.</p>
      <p>Using longships, the Vikings were the first to cross the Atlantic Ocean to settle in Canada before exploring more of the Americas. This aligns with the oral histories later recorded as the Icelandic Sagas, revealing how Vikings interacted with Indigenous populations -- and just who in Europe knew about Viking exploration of the new world.</p>
      <p>Researchers landed on a definitive date thanks to two unlikely sources: chopped wood and a solar storm that occurred more than 1,000 years ago.</p>
      <p>Source: <a href="https://edition.cnn.com/2021/10/23/world/science-newsletter-wt-scn-vikings/index.html" target="_blank">CNN</a></p>
      
    </main>


    <footer>
	      <p>Copyright &copy; 2021 Ivan Znaor<a href="https://github.com/iznaor/Website-project"><img src="img/github.svg"title="Github" alt="Github" style="width:24px; margin-top:0.4em"></a></p>
    </footer>
</body>
</html>
';


?>