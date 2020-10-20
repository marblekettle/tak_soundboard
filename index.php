<html>
<head>
	<title>Tak's Soundboard</title>
<script>
    function PlaySound(sound) {
        var snd = new Audio(sound);
        snd.play();
    }
</script>
<link rel="stylesheet" href="tak.css">
</head>
<body>

<div class="flex-container">
	<img src="tak.webp" class="tak"/>
	<div>
		<h1 class="head">Tak's Soundboard</h1><br>
		<h2 class="head">of Horrible Doom</h2><br>
	</div>
</div>

<div class="flex-container">
<?php
	$snds = glob("snd/*.mp3");
	for ($i = 0; $i < count($snds); $i++)
	{
		$snd = str_replace("snd/", "", $snds[$i]);
		$snd = str_replace(".mp3", "", $snd);
		$snd = str_replace("_", " ", $snd);
		print("<div><button class=\"button\""
				. "onclick=\"PlaySound('$snds[$i]')\">"
				. "$snd</button></div>\n");
	}
?>
</div>

</body>	
</html>