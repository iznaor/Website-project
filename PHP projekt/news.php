<?php
print '
<button onclick="myFunction()">Toggle dark mode</button>

<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>

<h1>News</h1>
	<div class="news">
	      <a href="news1.php"><img src="img\vikings.jpg" alt="Vikings explored the Americas long before Christopher Columbus" title="Vikings explored the Americas long before Christopher Columbus"></a>
              <h2>Vikings explored the Americas long before Christopher Columbus</h2>
              <p>The Vikings were the first Europeans in the Americas, well before Christopher Columbus <a href="news1.php"> More ...</a></p>
              <p><time datetime="2021-23-10">23 October 2021</time></p>
              <hr>
              <a href="news2.php"><img src="img\taiwan.jpg" alt="Taiwan: Earthquake of magnitude 6.5 strikes island" title="Taiwan: Earthquake of magnitude 6.5 strikes island"></a>
              <h2>Taiwan: Earthquake of magnitude 6.5 strikes island</h2>
              <p>The epicentre was in Yilan county, and buildings shook in the capital, Taipei, but there are no reports of any damage.<a href="news2.php"> More ...</a></p>
              <p><time datetime="2021-24-10">24 October 2021</time></p>
              <hr>
              <a href="news3.php"><img src="img\france.jpg" alt="France successfully launches cutting-edge military communications satellite" title="France successfully launches cutting-edge military communications satellite"></a>
              <h2>France successfully launches cutting-edge military communications satellite</h2>
              <p>France has successfully launched a state-of-the-art satellite into orbit, designed to allow all of Frances armed forces across the globe to communicate swiftly and securely.<a href="news3.php"> More ...</a></p>
              <p class="padding" ><time datetime="2021-24-10">24 October 2021</time></p>
              <hr>
	</div>
			';

if (isset($action) && $action != '') {
		$query  = "SELECT * FROM globalnews";
		$query .= " WHERE id=" . $_GET['action'];
		$result = @mysqli_query($MySQL, $query);
		$row = @mysqli_fetch_array($result);
			print '
			<div class="other news">
				<img src="' . $row['picture'] . '" alt="' . $row['title'] . '" title="' . $row['title'] . '">
				<h2>' . $row['title'] . '</h2>
				<p>'  . $row['description'] . '</p>
				<time datetime="' . $row['date'] . '">' . pickerDateToMysql($row['date']) . '</time>
				<hr>
			</div>';
	}
	else {
		print '<h1>other news</h1>';
		$query  = "SELECT * FROM globalnews";
		$query .= " WHERE archive='N'";
		$query .= " ORDER BY date DESC";
		$result = @mysqli_query($MySQL, $query);
		while($row = @mysqli_fetch_array($result)) {
			print '
			<div class="news">
				<img src="' . $row['picture'] . '" alt="' . $row['title'] . '" title="' . $row['title'] . '">
				<h2>' . $row['title'] . '</h2>';
				if(strlen($row['description']) > 300) {
					echo substr(strip_tags($row['description']), 0, 300).'... <a href="index.php?menu=' . $menu . '&amp;action=' . $row['id'] . '">More</a>';
				} else {
					echo strip_tags($row['description']);
				}
				print '
				<time datetime="' . $row['date'] . '">' . pickerDateToMysql($row['date']) . '</time>
				<hr>
			</div>';
		}
	}
?>