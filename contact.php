<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kontakt - BioShiitake Tirol</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="images/icon.png" type="image/jpeg" />
  </head>
  <body>
    <div class="header">
      <a href="#" class="logo">BioShiitake.tirol</a>
      <div class="header-right">
        <a href="index.html">Home</a>
		<a href="products.html">Produkte</a>
        <a href="about.html">Über uns</a>
        <a href="contact.php" class="active">Kontakt</a>
      </div>
    </div>
	  
    <image
      src="images/pilze2.jpg"
      alt="Banner Image"
      class="banner-image"
    ></image>

    <div class="main">
      <h1>Kontakt - BioShiitake Tirol</h1>
		<?php
			if(isset($_GET['error']) AND $_GET['error'] == 1){
				echo '<h2 style="color: red; text-align: center;">Leider ist bei der &Uuml;bertragung ein Fehler passier! Bitte sende uns doch eine E-Mail mit deinem Anliegen.<br><a href="mailto:mail@bioshiitake.tirol" style="text-decoration-line: underline;
  text-decoration-color: red; color: red;">mail@bioshiitake.tirol</a></h2>';
			}
		
			if(isset($_GET['error']) AND $_GET['error'] == 0){
				echo '<h2 style="color: green; text-align: center;">Ihre Nachricht wurde erfolgreich ubermittelt!<br>Wir werden uns in bald bei Ihnen melden!</h2>';
			}
		?>
		<!--<div class="box">
			<h4>Martin Widauer</h4>
			<h4>Lukas Isser</h4>
		</div>-->
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
			
		<div style="display: none;">
    		<label for="testfield">Leave this field blank:</label>
    		<input type="text" id="testfield" name="testfield">
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
    </div>
	  
	  <script>
//Optional client side validation, reduces server load.
document.querySelector('form').addEventListener('submit', function(event) {
  const honeypot = document.getElementById('testfield');
  if (honeypot.value !== '') {
    event.preventDefault(); // Prevent form submission
    alert("Bot detected. Please try again later."); // Optional user feedback.
  }
});
</script>
  </body>
</html>
