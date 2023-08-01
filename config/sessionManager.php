<?php
class sessionManager extends model
{
    static function createSession($array = [])
    {
        foreach ($array as $key => $value)
        {
            $_SESSION[$key] = helper::cleaner($value);
        }
    }
    static function deleteSession($key)
    {
        unset($_SESSION[$key]);
    }
    static function allSessionDelete()
    {
        session_destroy();
    }
    public function isLogged()
    {
        if(isset($_SESSION['name']) and isset($_SESSION['password']))
        {
            $name = $_SESSION['name'];
            $password = $_SESSION['password'];





            $query = $this->db->prepare("select * from uyeler where name =? and password =?");
            $query->execute(array($name,$password));

            if ($query->rowCount()!=0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            false;
        }
    }

    public function getUserInfo()
    {
        if ($this->isLogged())
        {
            $name = $_SESSION['name'];
            $password = $_SESSION['password'];



            $query = $this->db->prepare("select * from uyeler where name =? and password =?");

            $query->execute(array($name,$password));
            return $query->fetch(PDO::FETCH_ASSOC);
        }
        else
        {
            return false;
        }
    }



}