<?php // VIEW SINIFI VIEWS KLASORUNDEKILERI ÇALIŞTIRMAK ICIN
class view
{
    static function render($file,$params = [])
    {
        if(file_exists(VIEWS_PATH."/".$file. ".php" )) // Eğer VIEWS_PATH dosyası varsa dosyayı dahil et.
        {
            extract($params);
            require_once VIEWS_PATH."/".$file.".php";
        }
        else
        {
            exit ($file. "Görüntü Dosyası Bulunamadı ");
        }
    }
}