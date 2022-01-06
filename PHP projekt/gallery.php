<?php 
	print '
<button onclick="myFunction()">Toggle dark mode</button>

<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>

<h1>Gallery</h1>
		<div id="gallery" style="width:1000px; display:block;height:1000px;">
			<figure id="1">
				<a href="img/GalleryIMG1.jpg" target="new">
				<img src="img/GalleryIMG1.jpg" alt="Wildlife" title="Wildlife">
				<figcaption>Wildlife<figcaption>
				</a>
			</figure>
			<figure id="2">
				<a href="img/GalleryIMG2.jpg" target="new">
				<img src="img/GalleryIMG2.jpg" alt="Trains" title="Trains">
				<figcaption>Trains<figcaption>
				</a>
			</figure>
			<figure id="3">
				<a href="img/GalleryIMG3.jpg" target="new">
				<img src="img/GalleryIMG3.jpg" alt="House" title="House">
				<figcaption>House<figcaption>
				</a>
			</figure>
			<figure id="4">
				<a href="img/GalleryIMG4.jpg" target="new">
				<img src="img/GalleryIMG4.jpg" alt="City" title="City">
				<figcaption>City<figcaption>
				</a>
			</figure>
			<figure id="5">
				<a href="img/GalleryIMG5.jpg" target="new">
				<img src="img/GalleryIMG5.jpg" alt="Jungle" title="Jungle">
				<figcaption>Jungle<figcaption>
				</a>
			</figure>
			<figure id="6">
				<a href="img/GalleryIMG6.jpg" target="new">
				<img src="img/GalleryIMG6.jpg" alt="Pizza" title="Pizza">
				<figcaption>Pizza<figcaption>
				</a>
			</figure>
		
		</div>
	';
?>