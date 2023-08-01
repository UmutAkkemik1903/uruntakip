<?php
class uyeModel extends model
{
    public function  control ($name,$password)
    {
        $query =$this->db->prepare("select * from uyeler where name =? and password =?");
        $query->execute(array($name,$password));
        return $query->rowCount();

    }

    public function  create($ad,$email,$password)
    {
        $ekle =$this->db->prepare("insert into uyeler(name,email,password) values(?,?,?)");
        $insert= $ekle-> execute(array($ad,$email,$password));

        if($insert)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

}
