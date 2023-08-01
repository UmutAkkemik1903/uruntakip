<?php
class createModel extends model
{
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
