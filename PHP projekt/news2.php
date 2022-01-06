<?php
print '

<!DOCTYPE HTML>
<html lang="hr">
	<head>
		<title>News</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="news2">
		<meta name="keywords" content="news2">
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
      <h1>Taiwan: Earthquake of magnitude 6.5 strikes island</h1>
      <figure>
        <img src="img/taiwan.jpg" alt="Taiwan" title="Taiwan">
        <figcaption> @te-ta-2614167 / Pexels </figcaption>
      </figure>
      <p>The epicentre was in Yilan county, and buildings shook in the capital, Taipei, but there are no reports of any damage.</p>
      <p>An earthquake with a magnitude of 6.5 has struck Taiwan, the countrys weather bureau has said. It had a depth of 41.5 miles (66.8km) and could be felt across northern and eastern parts of the island, it added.</p>
      <p>The epicentre was in Yilan county, and buildings shook in the capital, Taipei.</p>
      <p>Source: <a href="https://news.sky.com/story/taiwan-earthquake-of-magnitude-6-2-strikes-island-12442999" target="_blank">skynews</a></p>
      
    </main>


    <footer>
	      <p>Copyright &copy; 2021 Ivan Znaor<a href="https://github.com/iznaor/Website-project"><img src="img/github.svg"title="Github" alt="Github" style="width:24px; margin-top:0.4em"></a></p>
    </footer>
</body>
</html>

';


?>