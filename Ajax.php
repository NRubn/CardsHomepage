<?php
if (isset($_GET['page'])) {
    $pageName = $_GET['page'];
    
    require_once 'PageRenderer.php'; // Pfade anpassen, falls nötig
    
    $renderer = new PageRenderer();
    $content = $renderer->render($pageName);
    
    echo $content;
} else {
    echo 'Ungültige Anfrage.';
}
?>
