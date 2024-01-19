<?php 
	$file = file_get_contents("./projects.json");
	$jsonData = json_decode($file, true);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>UX Designer Portfolio</title>
		<link href="./uikit-3/css/uikit.min.css" rel="stylesheet" />
		<link href="./style.css" rel="stylesheet" />
		<script src="./uikit-3/js/uikit-icons.min.js" type="text/javascript"></script>
		<script src="./uikit-3/js/uikit.min.js" type="text/javascript"></script>
		<script src="./script/script.js" type="text/javascript"></script>
	</head>
	<body>
		<main>
			<!-- Home Section -->
			<section id="home" class="uk-height-1-1 slide-yellow">
				<h1 id="landing-title" class=".uk-heading-large">
					Mijn naam is Nard Broekstra, aangenaam!<br/> 
					Ik ben UX/UI Designer, Front-end Developer, [functie] en professioneel levensgenieter.
				</h1>
				<p id="welcomeMessage">Goedemiddag!</p>
				<a href="#projects" id="btn-to-projects-container">
					<div id="btn-to-projects"></div>
				</a>
			</section>
			<section id="projects" class="uk-container slide-black" >
				<h2>Projecten</h2>
				<p>
					Hieronder volgen een aantal projecten die ik heb uitgevoerd bij mijn
					verschillende werkgevers. Ik laat hierbij een reeks afbeeldignen of
					screenshots zien en deze probeer ik vervolgens zo goed mogelijk toe te
					lichten.
				</p>

				<?php 
				
				//print_r($jsonData);
				foreach($jsonData as $value){
					echo "<div class='uk-grid'>";
					echo "<h2 class='.uk-heading-medium'>{$value['title']}</h2>";
					echo "<p class='uk-text-default'>{$value['text']}</p>";
					foreach($value["images"] as $image){
						echo "<img class='uk-width-auto' src='{$image}'>";
					}
					echo "</div>";
				}
				?>
			</section>
		
		</main>

		<footer>
			<p class="uk-container">&copy; 2024 Nard Broekstra</p>
		</footer>
	</body>
</html>
