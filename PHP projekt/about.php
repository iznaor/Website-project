<?php 
	print '
<button onclick="myFunction()">Toggle dark mode</button>

<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>
      <h1>About</h1>
      <video width="50%" controls poster="img/news.jpg" >
		  <source src="video/video.mp4" type="video/mp4">
		  Your browser does not support HTML5 video.
      </video>
      <p>GLOBAL NEWS is the world leader in bringing you the latest breaking news, pictures, videos, and special reports.</p>
      <p>Read todays latest news headlines and stay up to date on politics, sports, business, crime and tech.</p>
      <p>Comprehensive up-to-date news coverage, aggregated from sources all over the world.</p>

';
?>