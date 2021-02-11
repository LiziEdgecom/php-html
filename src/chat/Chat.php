<?php
require 'Core.php';
class Chat extends Core{
    public function fetchMessages(){
        //query
        if($_SESSION['UID']==='admin'){
            $this->query("SELECT articles.data,
                                    articles.id,
                                   users.userID,
                                    users.UID                          
                                    FROM articles
                                    JOIN users
                                    ON articles.UID = users.userID
                                  
                                    ORDER BY id DESC 
        ");
            return $this->rows();
        }
        else {
            $this->query("SELECT articles.data,
                                    articles.id,
                                   users.userID,
                                    users.UID
                                    
                                    FROM articles
                                    JOIN users
                                    ON articles.UID = users.userID
                                    LEFT JOIN bans b ON users.userID = b.user WHERE b.user is null
                                    ORDER BY id DESC 
        ");
            return $this->rows();
            //tu ti píšem ako / tvoj select ti da len jeden udaj jeden row
        }
        //return rows
    }

    public function throwMessages($userId,$message){

       $this->query("INSERT INTO articles (UID, data)
                          VALUES ( '" . (int)$userId . "' , '" . $this->db->real_escape_string(htmlentities($message)) . "')");
    }


    public function deleteMessage($messageID){

        $this->query("DELETE FROM articles where id = '" . (int)$messageID . "' ");

    }

    public function updateMessage(){}


}