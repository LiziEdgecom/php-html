<?php
require 'Core.php';
class Chat extends Core{
    public function fetchMessages(){
        //query
       $this->query("SELECT articles.data,
                                   users.userID,
                                    users.UID
                                    FROM articles
                                    JOIN users
                                    ON articles.UID = users.userID
                                    ORDER BY id DESC 
        ");
        return $this->rows();
        //tu ti píšem ako / tvoj select ti da len jeden udaj jeden row

        //return rows
    }

    public function throwMessages($userId,$message){

       $this->query("INSERT INTO articles (UID, data)
                          VALUES ( '" . (int)$userId . "' , '" . $this->db->real_escape_string(htmlentities($message)) . "')");
    }

}