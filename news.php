<?php

/**
 * Created by IntelliJ IDEA.
 * User: Nkosi
 * Date: 3/15/16
 * Time: 3:57 PM
 */

require 'db.php';

class News{

    public $db;
    protected $query;
    protected $news;
    protected $records;
    protected $json;

    function __construct($db){
        $this->db = $db;
        $this->getNews();
    }

    public function getNews(){
        $this->query = $this->db->query("SELECT * FROM TDA_Torpedokid.Headlines_");
        $this->records = array();
        $this->records = $this->query->fetchAll(PDO::FETCH_ASSOC);
        $this->json['news'] = $this->records;
        echo json_encode($this->json);
    }

}

new News($db);