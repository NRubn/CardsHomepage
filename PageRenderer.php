<?php
class PageRenderer {
    public function render($pageName) {
		$filePath = 'sites/' . $pageName . '.php';
		if (file_exists($filePath)) {
            ob_start(); // Starte den Output Buffering
            require_once $filePath;
            $content = ob_get_clean();
            // Prüfen, ob die Methode getcontent() vorhanden ist
            if (method_exists($pageName, 'getcontent')) {
                $content .= $pageName::getcontent();
            }
            
            echo $content;
        } else {
            echo "Seite $pageName nicht gefunden.";
        }
    }
}
?>
