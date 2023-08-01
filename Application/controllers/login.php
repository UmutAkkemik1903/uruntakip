<?php
class login extends controller
{
    public function index()
    {
        $this ->render('login');
    }

    public function send()
    {
        if ($_POST)
        {
            $name = helper:: cleaner($_POST['name']);
            $password = helper:: cleaner($_POST['password']);

            if ($name!="" and $password!="")
            {
                $control =$this->model('uyeModel')->control($name, md5($password));
                if($control==0)
                {
                    helper::flashData("statu","Böyle Bir Kullanıcı Yoktur");
                    helper::redirect(SITE_URL."/login");
                }
                else
                {
                    sessionManager::createSession(['name'=>$name, 'password'=> md5($password)]);
                    helper::redirect(SITE_URL);

                }
            }
            else
            {
                helper::flashData("statu","Lütfen Tüm Alanları Giriniz");
                helper::redirect(SITE_URL."/login");
            }

        }
        else
        {
            exit("Hatalı Giriş");
        }
    }

}
