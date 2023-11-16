<?php

class SiteManager
{
    /*Soll später steuern, welche User auf welche Seite können*/
    private $siteInfo;

    public function __construct()
    {
        // Lade die Datei mit den Informationen zu den Seiten
        $this->loadSiteInfo();
    }

    private function loadSiteInfo()
    {
        // Lese den Inhalt der JSON-Datei und speichere ihn im $siteInfo-Array
        $siteInfoJson = file_get_contents(__DIR__ . "/../../sites/site_info.json");
        $this->siteInfo = json_decode($siteInfoJson, true);
    }

    public function getSiteFiles()
    {
        // Überprüfe den "sites"-Ordner auf PHP-Dateien
        $siteFiles = glob(__DIR__ . "/../../sites/*.php");

        // Rückgabe der gefundenen PHP-Dateien
        return $siteFiles;
    }

    public function getSiteInfo($filename)
    {
        // Überprüfe, ob Informationen zu der angegebenen Datei vorhanden sind
        if (array_key_exists($filename, $this->siteInfo)) {
            return $this->siteInfo[$filename];
        } else {
            return false;
        }
    }
}
