<?php 
	$file = file_get_contents("./projects.json");
	$jsonData = json_decode($file, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="theme-color" content="#fcb315">
	<meta name="description" content="Portfolio Nard">
	<title>Nard - Frontend development & UX Design</title>
	<link rel="icon" type="image/x-icon" href="./favicon.ico">
	<link href="./uikit-3/css/uikit.min.css" rel="stylesheet" />
	<link href="./style.css" rel="stylesheet" />
	<script src="./uikit-3/js/uikit.min.js" type="text/javascript"></script>
	<script src="./script/script.js" type="text/javascript"></script>
</head>
<body>
	<main>
		<!-- Home Section -->
		<section id="home" class="uk-height-1-1 slide-yellow">
			<h1 id="landing-title" class=".uk-heading-large">Mijn naam is Nard, aangenaam!<br />Ik ben UX/UI Designer, Front-end Developer, en professioneel levensgenieter.</h1>
			<p id="welcomeMessage">Goedemiddag!</p>
			<a href="#projects" id="btn-to-projects-container">				
				<div id="btn-to-projects" 	></div>
			</a>
		</section>
		<section id="projects" class="slide-yellow">
			<div class="uk-container">
				<h2 class="uk-text-lead">Projecten</h2>
				<p class="intro-text uk-text-default">
					Hieronder volgen een aantal projecten die ik heb uitgevoerd bij mijn verschillende werkgevers.<br>	
					Ik laat hierbij een reeks afbeeldingen of screenshots zien en deze probeer ik vervolgens zo goed mogelijk toe te lichten.
				</p>
			</div>
				<?php foreach($jsonData as $value)
				{ 
					?>
					<div class="preview-rect" uk-toggle="target: #<?php echo $value['id'] ?>">
						<div class="projectPreviewTitle uk-text-large uk-text-uppercase"><?php echo $value['title'] ?></div>
						<img src="./img/thumbnails/<?php echo $value['images'][0] ?>.webp" alt="image" />	
					</div>
					<div id="<?php echo $value['id'] ?>" uk-modal>
						<div class="uk-modal-dialog uk-margin-auto-vertical slide-black">
							<button class="uk-close-large uk-modal-close" type="button" aria-label="Close" uk-close></button>
							<h2 class="uk-modal-title"><?php echo $value['title'] ?></h2>
							<div class="uk-grid">
								<p class='uk-text-default'><?php echo $value['text'] ?></p>
								<div class="uk-position-relative uk-visible-toggle uk-light">
									<?php foreach($value["images"] as $image){ ?>
										<a href="./img/projects/<?php echo $image ?>.jpg">
											<div class="project-image-container">
												<img class="project-image" src="./img/thumbnails/<?php echo $image ?>.webp" alt="" loading="lazy" data-magnifier-mode="glass">
											</div>
										</a>
									<?php } ?>
								</div>
							</div>
							<div class="labelContainer">
								<?php foreach($value['labels'] as $lbl) { ?>
									<label class="label"><?php echo $lbl ?></label>
								<?php } ?>
							</div>
						</div>
					</div>
					<?php
				} ?>
				</div>				
		</section>
	</main>
	<footer class="slide-black">
		<p class="uk-container">&copy; 2024 Nard Broekstra</p>
	</footer>
</body>
</html>