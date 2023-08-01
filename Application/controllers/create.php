<?php
class create extends controller
{
    public function index()
    {
        $this ->render('create');
    }
    public function send()
    {
        /*if (!$this->sessionManager->isLogged()){helper::redirect(SITE_URL); die();}*/
        if($_POST)
        {
            $ad = helper::cleaner($_POST['name']);
            $email = helper::cleaner($_POST['email']);
            $password = helper::cleaner (md5($_POST['password']));
            if ($email!="" and $password!="")
            {
                $ekle = $this->model('createModel')->create($ad,$email,$password);
                if ($ekle)
                {
                    helper::flashData("statu","Üye Başarı İle Eklendi");
                    helper::redirect(SITE_URL."/create");
                }
                else
                {
                    helper::flashData("statu","Üye Eklenemedi");
                    helper::redirect(SITE_URL."/create");
                }
            }
            else
            {
                helper::flashData("statu","Lütfen Tüm alanları giriniz");
                helper::redirect(SITE_URL."/create");
            }
        }
        else
        {
            helper::flashData("statu","Lütfen Tüm Alanları Giriniz"); //mail ve password boş ise kullanıcıya msj göndermek için (flashdATA)
            helper::redirect(SITE_URL."/create"); // eğer email ve password boşa eşit ise tekrar git (redirect) sıte url login sayfasına.
        }
    }
}