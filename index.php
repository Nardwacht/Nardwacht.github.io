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
	<title>Nard - Frontend development & UX Design</title>
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
				Mijn naam is Nard, aangenaam!<br />
				Ik ben UX/UI Designer, Front-end Developer, [functie] en professioneel levensgenieter.
			</h1>
			<p id="welcomeMessage">Goedemiddag!</p>
			<a href="#projects" id="btn-to-projects-container">
				<div id="btn-to-projects"></div>
			</a>
		</section>
		<section id="projects" class="slide-yellow">
			<div class="uk-container">
				<h2>Projecten</h2>
				<p>
					Hieronder volgen een aantal projecten die ik heb uitgevoerd bij mijn
					verschillende werkgevers. Ik laat hierbij een reeks afbeeldignen of
					screenshots zien en deze probeer ik vervolgens zo goed mogelijk toe te
					lichten.
				</p>

				<?php foreach($jsonData as $value)
				{ 
					?>
					<div class="preview-rect" uk-toggle="target: #<?php echo $value['id'] ?>">
						<img src="<?php echo $value['images'][0] ?>" alt="image" />	
					</div>
					<div id="<?php echo $value['id'] ?>" uk-modal>
						<div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical slide-black">
							<button class="uk-close-large uk-modal-close" type="button" aria-label="Close" uk-close></button>
							<h2 class="uk-modal-title"><?php echo $value['title'] ?></h2>
							<div class="uk-grid">
								<p class='uk-text-default'><?php echo $value['text'] ?></p>
								<div uk-position-relative uk-visible-toggle uk-light tabindex="-1" uk-slideshow="autoplay: true">
									<ul class="uk-slideshow-items">
										<?php foreach($value["images"] as $image){ ?>
										<li>
											<div class="uk-panel" uk-grid uk-lightbox="animation: fade">
												<a class="uk-inline" href="<?php echo $image ?>" data-caption="<?php echo $value['caption']; ?>">
													<div class="uk-position-center uk-panel"></div>
													<img src="<?php echo $image ?>" alt="" loading="lazy" data-magnifier-mode="glass">
												</a>
											</div>
										</li>
										
										<?php } ?>
									</ul>
									<a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous uk-slideshow-item="previous"></a>
									<a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next uk-slideshow-item="next"></a>
								</div>
							</div>
							<?php foreach($value['labels'] as $lbl) { ?>
								<label class="label"><?php echo $lbl ?></label>
							<?php } ?>
						</div>
					</div>
					<?php
				} ?>
			
				</div>					
			</div>
		</section>
	</main>
	<footer class="slide-black">
		<p class="uk-container">&copy; 2024 Nard Broekstra</p>
	</footer>
</body>

</html>