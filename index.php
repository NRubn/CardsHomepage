<?php

// Erforderliche Datei importieren
require_once 'components/classes/SiteManager.php';
// Instanz des SiteManagers erstellen
$siteManager = new SiteManager();
// Alle PHP-Dateien im "sites"-Ordner abrufen
$siteFiles = $siteManager->getSiteFiles();



?>
<!DOCTYPE html>
<html lang="de">
<head>
<?php
	require_once 'config.php';
	require_once HEADER;
?>
</head>
<body>
  <header>
	<img class="headerlogo backbutton" src="<?php echo LOGO ?>">
    <?php
	require_once MENU;
	?>
  </header>
<main>
<div id="overlay">
</div>
<div id="userarea">
 </div>
</main>
  <footer>
	<?php
		require_once FOOTER;
	?>
  </footer>
</body>
</html>
