<html>
<head>
	 <link rel="stylesheet" href="ZodiacCss.css" />
</head>
<body>
<?php
	$value = $_GET["btn"];

	$allZodiacs = array(
	 array("CAPRICORN" , "earth" , "brown" , "black" , "amethyst" , "saturday" , "calm" , "#cc9966" , "#996633" , "#ff9933" , "#000000"),
	 array("AQUARIUS" , "air" , "blue" , "green" , "aquamarine" , "saturday" , "friendly" , "#80e5ff" , "#0080ff" ,"#66ff66" , "#009900"),
	 array("PISCES" , "water" , "white" , "lavander" , "moonstone" , "thursday" ,"sensitive" , "#ffccff" , "#ff33ff" , "#dd99ff" , "#bb33ff"),
	 array("ARIES" , "fire" , "red" , "orange" , "diamond" , "tuesday" , "dynamic" , "#ff6600" , "#ff8566" , "#ff3300" , "#e60000"),
	 array("TAURUS" , "earth" , "brown" , "green" , "emerald" , "friday" , "trustworthy" , "#cc9966" , "#996633" , "#66ff66" , "#009900"),
	 array("GEMINI" , "air" , "yellow" , "orange" , "agate" , "wednesday" , "talkative" , "#ffff99" , "#ffff4d" , "#ffff00" , "#ff6600"),
	 array("CANCER" , "water" , "blue" , "white" , "pearl" , "monday" , "sensitive" , "#66d9ff" , "#0099cc" , "#007399" , "#ffffff"),
	 array("LEO" , "fire" , "gold" , "orange" , "ruby" , "sunday" , "pretentious" , "#ffd700" , "#ff8533" , "#ff6600" , "#cc5200"),
	 array("VIRGO" , "earth" , "yellow" , "white" , "carnelian" , "wednesday" , "rigorous" , "#ffff80" , "#ffff00" , "#ffff00" , "#ffffff"),
	 array("LIBRA" , "air" , "blue" , "pink" , "sapphire" , "friday" , "balanced" , "#80e5ff" , "#0080ff" , "#ff80aa" , "#ff1a66"),
	 array("SCORPIO" , "water" , "claret red" , "white" , "opal" , "tuesday" , "ambitious" , "#cc0000" , "#990000" , "#660000" , "#ffffff"),
	 array("SAGITTARIUS" , "fire" , "amaranth" , "white" , "topaz" , "thursday" , "independent" , "#ffe6ff" , "#cc00cc" , "#990099" , "#660066")
	 );

	for($i = 0 ; $i < count($allZodiacs) ; $i++){
		if($value == $allZodiacs[$i][0]){
			?>
			<p class="paragraph">Your zodiac is : <?= $allZodiacs[$i][0] ?> .</p>
			<p class="paragraph">Your element is : <?= $allZodiacs[$i][1]?> .</p>
			<p class="paragraph">Your favorute colours are : <?= $allZodiacs[$i][2]?> and <?= $allZodiacs[$i][3]?> .</p>
			<p class="paragraph">Your stone is : <?= $allZodiacs[$i][4] ?> .</p>
			<p class="paragraph">Your luckiest day is : <?= $allZodiacs[$i][5] ?> .</p>
			<p class="paragraph">Your predominant characteristic is : being <?= $allZodiacs[$i][6]?> .</p>
			<?php
		}
	}
?>
	<table id="colourBox">
		<tr>
			<td>Click a box to change background color </td> 
        </tr>	
		<tr>
			<?php
				for($i = 0 ; $i < count($allZodiacs) ; $i++){
					if($value == $allZodiacs[$i][0]){
						for($j = 7 ; $j < count($allZodiacs[$i]) ; $j++){
							?>
							<td id="<?= $j ?>"class="colourCells" style="background-color: <?= $allZodiacs[$i][$j] ?> ;"
							 onclick="change(id)"></td>
							<?php							
						}
					}
				}
			?>
		</tr>
	</table>
	<labe style="font-family:sans-serif;">If you have an account you just enrol with username and password</label>
	<form action="ZodiacDataBase.php" method="get">
		<br/><label for="UserName">UserName :  <input name="name"></label><br/>
		<br/><label for="password">Password :  <input type="password" name="password"></label><br/>
		<br/><label for="mail">E-Mail :  <input name="mail"></label><br/>
		<br/><label for="birthday">Birthday :  <input name="birthday" placeholder="gg/aa/yyyy"></label><br/>
		<br/><label for="zodiac">Your zodiac : <input name="zodiac" value="<?=$value?>"></label><br/>
		<br><input type="submit" value="SUBMIT"><br/>
	</form>
	
	
<style>
	 body{
		 background-color: #b3b3ff ;
	 }
</style>
<script>
	function change(id){
		var color = document.getElementById(id).style.backgroundColor;
		document.body.style.backgroundColor = color ;
		var p = document.querySelectorAll(".paragraph");
		for(var i = 0 ; i < p.length ; i++){
			p[i].style.backgroundColor = "#ffffff" ;
		}
		document.getElementById("colourBox").style.backgroundColor = color ;
	}
</script>
</body>
<html>