<!DOCTYPE html>
<html lang="en">
<head>
	<title>Francois - Blog</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Francois - Journey of Development</h1>
	<h2>Chapter 1 - FRANCOIS</h2>

	<!--<div id="sidenav_btn"><button onclick="HideBar()">Show</button></div>-->

	<?php
		include "menu.php";
	?>

	<div class="main">
			<p>
		Hello everyone who reads this. This is gonna be my veeery <i>informal</i> blog / devlog-kinda thing on 'Francois', a paranormal-y murder-mystery adventure game with a strong, strong focus on 
		<b>ACTUALLY HAVING THE PLAYER MAKE DISCOVERIES AND CONNECTIONS, AND MAKING THEM REALLY FEEL LIKE A DETECTIVE</b>. 
		Thought I'd put it in caps to remind myself of the main goal I'm going for in developing this game.
		<br><br>
		I'm making this game because I want to tell a story. It's a convoluted story set in Marseille, France in the 1980s. It stretches all the way back to the late 1700s, and it all revolves around the pivotal Francois. Whoever this man is, whatever he is, he's been around for 300 years, yet little is known about him. Though he's so mysterious, Francois could potentially bring an end to the world. It's your job to figure out who he is, what he wants, and everything else revolving around it.
		<br><br>
		At the moment of writing this (09/07/2019), I've developed the general core mechanics of the game. The game is in 2D, and I've basically finished the movement system that has the protagonist find the shortest path to wherever the player clicks.
		<br><br>
		<img src="06-06-2019- Pathfinding.gif" width="600" height="450">

		<br><br>
		Then I made it look a little better with a background that actually looks three-dimensional and allowed diagonal movement...
		<br><br>
		<img src="14-06-2019 - Rooms.gif" width="650" height="350">
		<br><br>

		The main mechanic however that I've implemented into this game is the Journal. In the top right corner of the screen, there's a button that allows you to open it. In said Journal, the player can note down / add: Characters, Evidence, Locations and Information. These can be discovered by playing the game and exploring different avenues. I'll refer to these from now on as CELI. You can learn of new CELI via investigating things within different environments and locations, communicating with characters and generally exploring this world.
		<br><br>
		CELI can be used:<br/>
		<ul>
		  <li>As topics of communication with characters.</li>
		  <li>As proof towards a character being guilty of a crime.</li>
		  <li>As proof that a character is lying about something.</li>
		</ul>

		<p>
		And generally, CELI is used to further the game's story and unravel the mystery of Francois. It's used to not only answer questions like: Who did it? Did he do it? type thing, but also to ask questions. You can ask characters what they know about X, or accuse a guilty part and provide Y as proof. The game will never ask you any questions. As a player / detective, YOU are the one asking questions 'round here.
		</p>
	</p>
	<p class="goodbye">
		Volare via u lil gamers.
	</p>

	<?php
		echo "Hello World";
	?>

	</div>

	<br>
	<!-- begin wwww.htmlcommentbox.com -->
	 <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com">Comment Form</a> is loading comments...</div>
	 <link rel="stylesheet" type="text/css" href="https://www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />
	 <script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="https://www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&mod=%241%24wq1rdBcg%24YH.%2FyBPf1snHPSgCrWmrQ."+"&opts=16862&num=10&ts=1566990168471");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
	<!-- end www.htmlcommentbox.com -->

	<script>

		function HideBar(){
			var x = document.getElementById("sidenav");
			
			if (x.style.display === "none") {
				x.style.display = "block";
 			} else {
 				x.style.display = "none";
			}

		}
	</script>
</body>
</html>
