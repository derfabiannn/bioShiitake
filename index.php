<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="title" content="BioShiitake Tirol official website" />
		<meta
			name="description"
			content="BioShiitake Tirol kultiviert Shiitake-Pilze nach traditioneller japanischer Methode auf Baumstämmen, insbesondere Schwarzeichen. Diese nachhaltige Anbaumethode ermöglicht es den Pilzen, ihr volles Aroma zu entfalten, was zu einer beeindruckenden Größe und intensiven Aromatik führt. Durch den Verzicht auf künstliche Anbaumethoden garantiert BioShiitake Tirol höchste Qualität und Reinheit."
		/>
		<meta
			name="keywords"
			content="Shiitake Pilze aus Tirol, Traditionell angebaute Shiitake Pilze, Shiitake Pilze mit intensivem Aroma, Shiitake Pilze direkt vom Produzenten, Nachhaltige Shiitake Pilzzucht, Hochwertige Shiitake Pilze Österreich, Traditionelle Shiitake Zucht auf Baumstämmen, Shiitake Pilze auf Schwarzeichen, Shiitake Pilze kaufen Österreich, Bio Shiitake Pilze Tirol, Tirol, Bio Pilze, Shiitake, Regional, Bio Shiitake, Tiroler Pilze, Bio Shiitake"
		/>
		<meta name="robots" content="index, follow" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="language" content="German" />
		<meta name="revisit-after" content="7 days" />

		<title>BioShiitake Tirol</title>
		<link rel="stylesheet" href="style.css" />
		<link rel="icon" href="images/logo.svg" type="image/jpeg" />
	</head>
	<body>
		<div class="logo-space" id="main">
			<img src="images/logo-07.png" class="logo-img" alt="BioShiitake Logo" />
		</div>

		<div class="header">
			<a href="#main">Home</a>
			<a href="#products">Produkte</a>
			<a href="#about">Über uns</a>
			<a href="#contact">Kontakt</a>
		</div>

		<div class="main">
			<!--<img src="images/logo-07.png" class="banner-image" alt="BioShiitake Logo">-->

			<h1>Willkommen bei BioShiitake Tirol</h1>
			<p>
				Wir kultivieren unsere Shiitakepilze (Lentinula edodes) nach der
				traditionellen japanischen Methode – das heißt, sie wachsen auf
				Baumstämmen, so wie es in der Natur vorgesehen ist. Der Name „Shiitake“
				setzt sich aus „shii“ (椎), dem (Pasania)Baum, und „take“ (茸), dem
				Pilz, zusammen. Diese natürliche Umgebung bevorzugt der Shiitakepilz und
				verleiht ihm seinen charakteristischen Geschmack.
			</p>
			<p>
				Für unseren Anbau verwenden wir Schwarzeichen, eine Eichenart (Quercus),
				die dem seltenen Pasaniabaum aus dem alten Japan ähnlich ist. Durch die
				Reifung der Fruchtkörper in hochwertigem Eichenholz erzielen wir eine
				herausragende Qualität. Das Resultat sind Pilze mit einem einzigartigen
				Erscheinungsbild, beeindruckender Größe und einer intensiven Aromatik,
				die sie von konventionell angebauten Shiitakepilzen deutlich abheben.
			</p>

			<div class="divider" id="products">
				<div class="hr-line"></div>
				<span>Unsere Produkte</span>
				<div class="hr-line"></div>
			</div>

			<img
				src="https://bioshiitake.tirol/images/pilze.jpg"
				class="banner-image"
				alt="Pilze"
			/>

			<p>
				Wir kultivieren unsere Shiitake nach uralter japanischer Tradition.
				Diese natürliche Anbaumethode ist nicht nur nachhaltig, sondern verleiht
				unseren Shiitake auch ihren unvergleichlichen Geschmack. Jeder Pilz
				entwickelt sich auf einem Baumstamm, was ihm Zeit gibt, sein volles
				Aroma zu entfalten. Wir verzichten auf künstliche Anbaumethoden, um ein
				Produkt von höchster Qualität und Reinheit zu erhalten. Das Holz
				verleiht den Pilzen nicht nur eine einzigartige Note, sondern sorgt auch
				für ihre beeindruckende Größe und ihr intensives Aroma. Unsere Shiitake
				sind etwas Besonderes. Ein Pilze mit einzigartigem Geschmack,
				beeindruckender Größe und intensiver Aromatik.
			</p>

			<h3>Entdecken Sie den Unterschied!</h3>

			<div class="divider" id="about">
				<div class="hr-line"></div>
				<span>Wer wir sind</span>
				<div class="hr-line"></div>
			</div>

			<h2 align="center">Mehr Inhalt kommt bald!</h2>
			<div style="margin: 20vh 0"></div>

			<div class="divider" id="contact">
				<div class="hr-line"></div>
				<span>Kontakt</span>
				<div class="hr-line"></div>
			</div>

			<?php
			if(isset($_GET['error']) AND $_GET['error'] == 1){
				echo '<h2 style="color: red; text-align: center;">Leider ist bei der &Uuml;bertragung ein Fehler passier! Bitte sende uns doch eine E-Mail mit deinem Anliegen.<br><a href="mailto:mail@bioshiitake.tirol" style="text-decoration-line: underline;
  text-decoration-color: red; color: red;">mail@bioshiitake.tirol</a></h2>';
			}
		
			if(isset($_GET['error']) AND $_GET['error'] == 0){
				echo '<h2 style="color: green; text-align: center;">Ihre Nachricht wurde erfolgreich ubermittelt!<br>Wir werden uns in bald bei Ihnen melden!</h2>';
			}
		?>

			<div class="container">
				<form action="submit.php" method="post">
					<label for="name">Name *</label>
					<input
						type="text"
						id="name"
						name="name"
						placeholder="Vorname Nachname"
						required
					/>

					<label for="email">E-Mail-Adresse *</label>
					<input
						type="email"
						id="email"
						name="email"
						placeholder="mail@example.com"
						required
					/>

					<div style="display: none">
						<label for="testfield">Leave this field blank:</label>
						<input type="text" id="testfield" name="testfield" />
					</div>

					<label for="betreff">Betreff *</label>
					<select id="betreff" name="betreff" required>
						<option value="" selected disabled hidden>Bitte auswählen</option>
						<option value="Bestellung">Bestellung</option>
						<option value="Allgemeine Anfrage">Allgemeine Anfrage</option>
						<option value="Website">Website</option>
						<option value="Sonstiges">Sonstiges</option>
					</select>

					<label for="nachricht">Nachricht *</label>
					<textarea
						id="nachricht"
						name="nachricht"
						placeholder="Was können wir für Sie tun?"
						style="height: 200px"
						required
					></textarea>

					<input type="submit" value="Absenden" />
				</form>
			</div>
		</div>

		<div class="footer">
			<p>BioShiitake Tirol | <a href="impressum.html">Impressum</a></p>
			<!-- https://www.indivisus.at/ -->
		</div>

		<script>
			//Optional client side validation, reduces server load.
			document
				.querySelector("form")
				.addEventListener("submit", function (event) {
					const honeypot = document.getElementById("testfield");
					if (honeypot.value !== "") {
						event.preventDefault(); // Prevent form submission
						alert("Bot detected. Please try again later."); // Optional user feedback.
					}
				});
		</script>
	</body>
</html>
