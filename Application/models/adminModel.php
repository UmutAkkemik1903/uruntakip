<?php


class adminModel extends model
{
    public function listview()
    {
        $sorgu = $this->db->prepare("select * from uyeler");
        $sorgu->execute();
        return $sorgu->fetchAll(PDO::FETCH_ASSOC);
    }
    public function guncelle($id)
    {
        $sorgu = $this->db->prepare("select * from uyeler where id=?");
        $sorgu->execute(array($id));
        return $sorgu->fetch(PDO::FETCH_ASSOC);
    }
public function veriEkle($name,$email,$sifre,$yetki)
{
    $sorgu=$this->db->prepare("insert into uyeler(name,email,password,yetki) values(?,?,?,?)");
   $kontrol= $sorgu->execute(array($name,$email,$sifre,$yetki));
    if ($kontrol)
    {
        return true;
    }
    else
    {
        return false;
    }
}
public function veriGuncelle($id, $name, $email, $sifre, $yetki)
{
    $sorgu = $this->db->prepare("update uyeler set name=?,email=?,password=?,yetki=? where id=? ");
    $kontrol = $sorgu->execute(array($name,$email,$sifre,$yetki,$id));
    if ($kontrol)
    {
        return true;
    }
    else
    {
        return false;
    }
}
public function silVeri($id)
{
    $sorgu=$this->db->prepare("delete from uyeler where id=?");
    $sorgu->execute(array($id));
}


}