<?php
class urunlerModel extends model
{
    public function listview()
    {
        $query = $this->db->prepare("select * from urunler order by skt ASC ");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function siralaA()
    {
        $query = $this->db->prepare("select * from urunler order by urun_adi ASC ");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function siralaZ()
    {
        $query = $this->db->prepare("select * from urunler order by urun_adi DESC ");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function siralaT()
    {
        $query = $this->db->prepare("select * from urunler order by skt ASC ");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function siralaTT()
    {
        $query = $this->db->prepare("select * from urunler order by skt DESC ");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($mal,$barkot,$ad,$date)
    {
        $query = $this->db->prepare("insert into urunler(mal_no,barkot,urun_adi,skt) VALUES(?,?,?,?)");
        $insert = $query->execute(array($mal,$barkot,$ad,$date));
        if ($insert) {
            return true;
        } else {
            return false;
        }
    }
    public function getData($id)
    {
        $query = $this->db->prepare("select * from urunler where id = ?");
        $query->execute(array($id));
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function getDataa($id)
    {
        $query = $this->db->prepare("select * from urunler where id = ?");
        $query->execute(array($id));
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public function duzenle($id)
    {
        $query = $this->db->prepare("SELECT * from urunler WHERE id=?");
        $query->execute(array($id));
        $bak = $query->fetch(PDO::FETCH_ASSOC);

    }
    public function updateData($id,$mal,$barkot,$ad,$date)
    {
        $query = $this->db->prepare("update urunler set mal_no = ? ,barkot = ? ,urun_adi = ?, skt = ? where id = ?");
        $update = $query->execute(array($mal,$barkot,$ad,$date,$id));
        if($update)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function updateDataa($id,$mal,$barkot,$ad,$date)
    {
        $query = $this->db->prepare("update urunler set mal_no = ? ,barkot = ? ,urun_adi = ?, skt = ? where id = ?");
        $update = $query->execute(array($mal,$barkot,$ad,$date,$id));
        if($update)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function deleteData($id)
    {
        $query = $this->db->prepare("delete from urunler where id = ? ");
        $query->execute(array($id));
    }
    public function ara($name)
    {
        $query = $this->db->prepare("select * from urunler where urun_adi like ? ");
        $query->execute(array("%".$name."%"));
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function filtrele($firstDate,$secondDate)
    {
        $query=$this->db->prepare("select * from urunler where skt BETWEEN ? and ? group by id");
        $query->execute(array($firstDate,$secondDate));
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createExcel($mal_no,$barkot,$urunadi,$skt)
    {
        $query = $this->db->prepare("select * from urunler where urun_adi = ?");
        $query->execute(array($urunadi));
        if ($query->rowCount() == 0) {

            $query = $this->db->prepare("insert into urunler(mal_no,barkot,urun_adi,skt) VALUES(?,?,?,?)");
            if ($skt != "") {
                $skt = $skt;
            } else {
                $skt = date("y-m-d");
            }
            $insert = $query->execute(array($mal_no, $barkot, $urunadi, $skt));
            if ($insert) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function sktGuncel()
    {

        $query = $this->db->prepare("select * from urunler where skt");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


}
