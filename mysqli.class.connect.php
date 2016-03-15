<?php

/**
 * Created by IntelliJ IDEA.
 * User: Nkosi RN
 * Date: 3/15/16
 * Time: 2:39 PM
 */
class Conn{

    public $conn;
    public $host;
    public $user;
    public $pass;
    public $db;
    public $port;

    function __construct(){


        $this->getConn();
    }


    public function setData($h, $u, $pa, $d, $p){
        $this->host = $h;
        $this->user = $u;
        $this->pass = $pa;
        $this->db = $d;
        $this->port = $p;
    }


    public function connect(){

        // Check connection
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }else{

        }
        if(!$this->conn){
            echo "failed";
        }else{

        }
    }


    public function setConn(){
        $this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db, $this->port);
    }

    public function getConn(){
        return $this->conn;
    }

}

$con = new Conn();
$con->setData("whm.empirestate.co.za", "Simba_ES", "*************", "TDA_Torpedokid", "3306");
$con->setConn();
$con->connect();