<?php
class urunler extends controller
{
    public function index()
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }
        $data = $this->model('urunlerModel')->listview();

        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('urunler/index', ['data' => $data]);
        $this->render('site/footer');

    }
    public function listeleA()
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }
        $data=$this->model('urunlerModel')->siralaA();
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('urunler/index', ['data'=>$data]);
        $this->render('site/footer');


    }
    public function listeleZ()
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }
        $data=$this->model('urunlerModel')->siralaZ();
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('urunler/index', ['data'=>$data]);
        $this->render('site/footer');


    }
    public function tarihA()
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }
        $data=$this->model('urunlerModel')->siralaT();
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('urunler/index', ['data'=>$data]);
        $this->render('site/footer');


    }
    public function tarihZ()
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }
        $data=$this->model('urunlerModel')->siralaTT();
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('urunler/index', ['data'=>$data]);
        $this->render('site/footer');


    }

    public function create()
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }

        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('urunler/create');
        $this->render('site/footer');
    }
    public function send()
    {
        if(!$this->sessionManager->isLogged()){helper::redirect(SITE_URL); die();}
        if($_POST)
        {
            $mal = helper::cleaner($_POST['mal_no']);
            $barkot = helper::cleaner($_POST['barkot']);
            $ad = helper::cleaner($_POST['urun_adi']);
            $date = helper::cleaner(date($_POST['skt']));
            if($ad!="")
            {
                $insert = $this->model('urunlerModel')->create($mal,$barkot,$ad,$date);
                if($insert)
                {
                    helper::flashData("statu","Ürün Başarı İle Eklendi");
                    helper::redirect(SITE_URL."/urunler/index");
                }
                else
                {
                    helper::flashData("statu","Ürün Eklenemedi");
                    helper::redirect(SITE_URL."/urunler/create");
                }
            }
            else
            {
                helper::flashData("statu","Ürün adı boş bırakılamaz");
                helper::redirect(SITE_URL."/urunler/create");
            }
        }
    }
    public function edit($id)
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }
        $data = $this->model('urunlerModel')->getData($id);
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('urunler/edit',['data'=>$data]);
        $this->render('site/footer');
    }
//  İkinci düzenleme


    public function editt($id)
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }
        $data = $this->model('urunlerModel')->getDataa($id);
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('urunler/editt',['data'=>$data]);
        $this->render('site/footer');
    }
    public function duzenle($id)
    {
        if (!$this->sessionManager->isLogged()) {
            helper::redirect(SITE_URL);
            die();
        }
        $data = $this->model('urunlerModel')->duzenle($id);
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('urunler/duzenle',['data'=>$data]);
        $this->render('site/footer');
    }
    public function update($id)
    {
        if(!$this->sessionManager->isLogged()){helper::redirect(SITE_URL); die();}
        if($_POST)
        {
            $mal = helper::cleaner($_POST['mal_no']);
            $barkot = helper::cleaner($_POST['barkot']);
            $ad = helper::cleaner($_POST['urun_adi']);
            $date = helper::cleaner(date($_POST['skt']));
            if($ad!="")
            {
                $insert = $this->model('urunlerModel')->updateData($id,$mal,$barkot,$ad,$date);
                if($insert)
                {
                    helper::flashData("statu","Ürün Başarı İle Düzenlendi");
                    helper::redirect(SITE_URL."/urunler/index");
                }
                else
                {
                    helper::flashData("statu","Ürün Düzenlenemedi");
                    helper::redirect(SITE_URL."/urunler/edit/".$id);
                }
            }
            else
            {
                helper::flashData("statu","Ürün adı boş bırakılamaz");
                helper::redirect(SITE_URL."/urunler/edit/".$id);
            }
        }
        else
        {
            exit("giriş yok");
        }
    }

    //düzenle 2

    public function updatee($id)
    {
        if(!$this->sessionManager->isLogged()){helper::redirect(SITE_URL); die();}
        if($_POST)
        {
            $mal = helper::cleaner($_POST['mal_no']);
            $barkot = helper::cleaner($_POST['barkot']);
            $ad = helper::cleaner($_POST['urun_adi']);
            $date = helper::cleaner(date($_POST['skt']));
            if($ad!="")
            {
                $insert = $this->model('urunlerModel')->updateDataa($id,$mal,$barkot,$ad,$date);
                if($insert)
                {
                    helper::flashData("statu","Ürün Başarı İle Düzenlendi");
                    helper::redirect(SITE_URL."/urunler/tarih");
                }
                else
                {
                    helper::flashData("statu","Ürün Düzenlenemedi");
                    helper::redirect(SITE_URL."/urunler/editt/".$id);
                }
            }
            else
            {
                helper::flashData("statu","Ürün adı boş bırakılamaz");
                helper::redirect(SITE_URL."/urunler/editt/".$id);
            }
        }
        else
        {
            exit("giriş yok");
        }
    }
    public function duzenlee($id)
    {
        if(!$this->sessionManager->isLogged()){helper::redirect(SITE_URL); die();}
        if($_POST)
        {
            $mal = helper::cleaner($_POST['mal_no']);
            $barkot = helper::cleaner($_POST['barkot']);
            $ad = helper::cleaner($_POST['urun_adi']);
            $date = helper::cleaner(date($_POST['skt']));
            if($ad!="")
            {
                $insert = $this->model('urunlerModel')->updateData($id,$mal,$barkot,$ad,$date);
                if($insert)
                {
                    helper::flashData("statu","Ürün Başarı İle Düzenlendi");
                    helper::redirect(SITE_URL."/urunler/home");
                }
                else
                {
                    helper::flashData("statu","Ürün Düzenlenemedi");
                    helper::redirect(SITE_URL."/urunler/home/".$id);
                }
            }
            else
            {
                helper::flashData("statu","Ürün adı boş bırakılamaz");
                helper::redirect(SITE_URL."/urunler/home/".$id);
            }
        }
        else
        {
            exit("giriş yok");
        }
    }
    public function delete($id)
    {
        if (!$this->sessionManager->isLogged()){helper::redirect(SITE_URL); die();}
        $delete = $this->model('urunlerModel')->deleteData($id);
        helper::redirect(SITE_URL."/urunler");
    }
    public function home()
    {
        if (!$this->sessionManager->isLogged()){helper::redirect(SITE_URL); die();}
        if (isset($_GET['firstDate']) and isset($_GET['secondDate']))
        {
            $data = $this->model('urunlerModel')->filtrele($_GET['firstDate'],$_GET['secondDate']);
        }
        else {
            $data = $this->model('urunlerModel')->filtrele(date("Y-m-01"),date("Y-m-d"));
        }

        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('home',['data'=>$data]);
        $this->render('site/footer');
    }
    public function tarih()
    {
        if (!$this->sessionManager->isLogged()){helper::redirect(SITE_URL); die();}
        if (isset($_GET['firstDate']) and isset($_GET['secondDate']))
        {
            $data = $this->model('urunlerModel')->filtrele($_GET['firstDate'],$_GET['secondDate']);
        }
        else {
            $data = $this->model('urunlerModel')->filtrele(date("Y-m-01"),date("Y-m-d"));
        }

        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('urunler/tarih',['data'=>$data]);
        $this->render('site/footer');
    }


}
