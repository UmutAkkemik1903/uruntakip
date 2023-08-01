<?php
class helper
{
    static function redirect($url)
    {
        if ($url)
        {
            if (!headers_sent())
            {
                header("Location:".$url);
            }
            else
            {
                echo'<script>location.href="'.$url.'";</script>';
            }
        }
    }
    static function cleaner($text) //Controller/Login sayfasındaki "Cleaner" çalışması için tanımlanan metod
    {
        $array = array('insert','update','union','select','*');
        $text = str_replace($array, '',$text);
        $text = strip_tags($text);
        $text = trim($text);
        return $text;
    }

    static function flashData($key,$value) ///Controller/Login sayfasındaki "flashData" çalışması için tanımlanan metod
    {
        $_SESSION[$key]= $value;
    }
    static function flashDataView($key)
    {
        if (isset($_SESSION[$key]))
        { $sonuc = $_SESSION[$key];
            unset($_SESSION[$key]);
            echo $sonuc;


        }

    }
}


