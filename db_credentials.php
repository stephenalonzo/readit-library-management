<?php 

class dbCredentials {

    public $servername;
    public $username;
    
    public function setServerName($servername)
    {

        $this->servername = $servername;

    }

    public function getServerName()
    {

        return $this->servername;

    }

    public function setUsername($username)
    {

        $this->username = $username;

    }

    public function getUsername()
    {

        return $this->username;

    }

}

?>