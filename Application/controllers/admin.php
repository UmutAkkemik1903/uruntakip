<?php


class admin extends controller
{
    public function index()
    {
        if (!$this->sessionManager->isLogged()) {helper::redirect(SITE_URL);die();}
        $data = $this->model('adminModel')->listview();
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('admin/uyeKontrol', ['data' => $data]);
        $this->render('site/footer');

    }
    public function kullaniciEkle()
    {
        if (!$this->sessionManager->isLogged()) {helper::redirect(SITE_URL);die();}

        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('admin/ekle');
        $this->render('site/footer');
    }
    public function ekle()
    {
        if (!$this->sessionManager->isLogged()) {helper::redirect(SITE_URL);die();}
        if ($_POST) {


            $name = helper::cleaner($_POST['name']);
            $email = helper::cleaner($_POST['email']);
            $sifre = helper::cleaner(md5($_POST['password']));
            $yetki = helper::cleaner($_POST['yetki']);
            if ($name != '' and $sifre != '') {


                $veri = $this->model('adminModel')->veriEkle($name, $email, $sifre, $yetki);
                if ($veri) {
                    helper::flashData("statu", "Kayıt Başarılı");
                    helper::redirect(SITE_URL . "/admin");
                } else {
                    helper::flashData("statu", "Kayıt Yapılamadı");
                    helper::redirect(SITE_URL . "/admin/kullaniciEkle");
                }

            } else {
                helper::flashData("statu", "Ad ve Şifre alanı boş bırakılamaz!");
                helper::redirect(SITE_URL . "/admin");
            }
        }

    }
    public function duzenle($id)
    {
        if (!$this->sessionManager->isLogged()) {helper::redirect(SITE_URL);die();}
        $veri = $this->model('adminModel')->guncelle($id);
        $this->render('site/header');
        $this->render('site/sidebar');
        $this->render('admin/duzenle',['data'=>$veri]);
        $this->render('site/footer');
    }
    public function guncelle($id)
    {
        if (!$this->sessionManager->isLogged()) {helper::redirect(SITE_URL);die();}
        if ($_POST) {
            $name = helper::cleaner($_POST['name']);
            $email = helper::cleaner($_POST['email']);
            $sifre = helper::cleaner(md5($_POST['password']));
            $yetki = helper::cleaner($_POST['yetki']);
            if ($name != '' and $sifre != '') {


                $kontrol = $this->model('adminModel')->veriGuncelle($id, $name, $email, $sifre, $yetki);
                if ($kontrol) {
                    helper::flashData("statu", "Güncelleme Başarılı");
                    helper::redirect(SITE_URL . "/admin");
                } else {
                    helper::flashData("statu", "Güncelleme Yapılamadı");
                    helper::redirect(SITE_URL . "/admin/duzenle" . $id);
                }

            }
            else {
                helper::flashData("statu","Ad ve şifre alanı boş bırakılamaz");
                helper::redirect(SITE_URL."/admin/duzenle".$id);

            }
        }
    }
    public function sil($id)
    {
        if (!$this->sessionManager->isLogged()) {helper::redirect(SITE_URL);die();}
        $this->model('adminModel')->silVeri($id);
        helper::redirect(SITE_URL."/admin");

    }

}