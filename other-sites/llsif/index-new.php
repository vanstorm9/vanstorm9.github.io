<html>
	
	<?php
		echo "Hello World";
	?>

	<head>
	<script src="audio-handle.js"></script>
	<link rel="stylesheet" type="text/css" href="scene.css">

		<title>Love Live SIF Waifu Simulator</title>
		<center><h1>Love Live SIF Waifu Simulator</h1>
		Click on the waifu or any buttons to have her speak. </br></br>
		</center>

	</head>


	

	<body>
	<center>
	<div id="container">
    	<img id='homeScreen' src='images/background0.png'>
    	<img id="idol_img" src='images/hanayo0.png' usemap="#waifumap">
	</div>

	
	</center>




	<audio autoplay loop>
			<source src="audio/background-music.mp3" type="audio/mp3" />
		</audio>
	
	<map name="waifumap">

		
		<!--
  		<area shape="rect" coords="100,500,225,600" onclick="homeClick()">
  		<area shape="rect" coords="227,500,353,600" onclick="storyClick()">
  		<area shape="rect" coords="356,500,482,600" onclick="memberClick()">
		-->
  		<area shape="rect" coords="100,100,540,540" onclick="waifuClick()">

	</map>
	
	</body>


</html>