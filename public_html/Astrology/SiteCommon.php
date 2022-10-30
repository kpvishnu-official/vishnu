<?php

class SiteCommon {
    public const TEMPLATE_URL = __DIR__ . '\template';
    public function styleSheet(array $styleSheetLinks): string 
    {
        $siteLink = self::TEMPLATE_URL . '\..\assets\css\site-common.css';
        $link = "<link rel='stylesheet' href='" . $siteLink . "'>";
        if (!$styleSheetLinks) {
            return $link;
        }
        foreach ($styleSheetLinks as $styleSheetLink) {
            $siteLink = self::TEMPLATE_URL . $styleSheetLink;
            $link .= "<link rel='stylesheet' href=$styleSheetLink>";
        }
        return $link;
    }
}
