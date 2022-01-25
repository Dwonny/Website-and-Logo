<!DOCTYPE html>
	<head> 
    <title>DwaneWeb - Home</title>
		<meta name="viewport" content="widht=device-width, initial-scale=1,0">
		<meta charset="utf-8">		
		<link rel="shortcut icon" type="image/png" href="IMAGES/favicon.png">
		<link href="style.css" rel="stylesheet" type="text/css">
		<link href="style_eendag.css" rel="stylesheet" type="text/css">
		<link href="style_opdrachten.css" rel="stylesheet" type="text/css">
		<link href="style_overmij.css" rel="stylesheet" type="text/css">
	</head>

	<body class="body"> 
		<header class="mainheader">
			<a href="index.php?page=1">
				<img src="IMAGES/logo.png" alt="DwaneWeb" title="DwaneWeb - Home">
			</a>

			<nav> 
				<ul>
                        <li><a href="index.php?page=1">Home</a></li>
						<li><a href="index.php?page=2">Overmij</a></li>
						<li><a href="index.php?page=3">Dagboek</a></li>
						<li><a href="index.php?page=4">Opdrachten</a></li>
						<li><a href="index.php?page=5">Ontwerp</a></li>
				</ul>
			</nav>
		</header>

		<div class="maincontent">
			<div class="content">
				<article class="topcontent">
					<header>
						<h2 class="mainpageh2">Welkom Pagina</h2>
					</header>
                   
                   
             <article>

			<?php
			if (isset( $_GET["page"]))
			{
				$nummer = $_GET["page"];
			}
			else
			{
				$nummer = 1;
			}

			switch ($nummer)
			{
				case 1:
					readfile("home.inc");
					break;

				case 2:
					readfile("overmij.inc");
					break;

				case 3:
					readfile("eendag.inc");
					break;

				case 4:
					readfile("opdrachten.inc");
					break;

				default:
					readfile("home.inc");
			};
			?>
		</article>

					<footer>
						<p class="post-info">DwaneWeb - 2021</p>
					</footer>

					<content>
						<p>DwaneWeb is hoe ik mijn allereerste website heb naar vernoemd. Op deze website kunt 
							u hierboven aan het menu vinden, hiermee kun je vervolgens naar de andere
							"bladzijdes" van mijn website!</p>
					</content>
				</article>
				<article class="bottomcontent">
					<header>
						<h2 class="mainpageh2">Hoe het is ontstaan</h2>
					</header>

					<footer>
						<p class="post-info">DwaneWeb - 2020</p>
					</footer>

					<content>
						<p>DwaneWeb heb ik vernoemd deels naar een "Dwayne The Crock" meme. Maar de site zelf
							is niet zomaar ontstaan, door middel van leerzame lessen bij het vak informatica 
							kreeg ik het voor elkaar om een website te maken door middel van HTML en CSS!
						</p>
					</content>
				</article>
			</div>
		</div>

		<aside class="top-sidebar">
			<article class="topcontent">
				<header>
					<h2 class="mainpageh2"><a href="Eerste_Website/index.html">Website 1</a></h2>
				</header>

				<footer>
					<p class="post-info">DwaneWeb - HTML</p>
				</footer>
			</article>
		</aside>

		<aside class="middle-sidebar">
			<article class="bottomcontent">
				<header>
					<h2 class="mainpageh2"><a href="Tweede_Website/index.html">Website 2</a></h2>
				</header>

				<footer>
					<p class="post-info">DwaneWeb - HTML en CSS</p>
				</footer>
			</article>
		</aside>

		<aside class="bottom-sidebar">
			<article>
				<h2>Dia</h2>
				<p>Tekst</p>
			</article>
		</aside>

		<footer class="mainfooter">
			<p>Copyright &copy; Dwaneweb.nl</p>
		</footer>
		
	</body>


</html>