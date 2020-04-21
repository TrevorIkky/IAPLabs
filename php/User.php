<?php
require_once "Connection.php";
require_once "UserOperation.php";
class User extends Connection implements UserOperation{
    public function __construct(){
        parent::__construct();
    }

    public function getData(){
        $sql = "SELECT * FROM user";
        $result = mysqli_query($this->conn, $sql);
        $arr = array();
        while($row =   $result->fetch_assoc()){
            array_push($arr, $row);
        }
        return($arr);
    }
    public function addUser($f, $l, $c){
        $sql = $this->conn->prepare("INSERT INTO  user (first_name, last_name, user_city) VALUES (?,?,?)");
        $sql->bind_param("sss", $f, $l, $c);
        return   $sql->execute();
    }
    public function deleteUser($i){
        $sql = $this->conn->prepare("DELETE  FROM  user WHERE id = ?");
        $sql->bind_param("i", $i);
        return $sql->execute();
    }

    public function updateUser($f, $l, $c, $i){
        $sql = $this->conn->prepare("UPDATE user SET first_name = ?, last_name = ?, user_city = ? WHERE id = ?");
        $sql->bind_param("sssi", $f, $l, $c,$i);
        return $sql->execute();
    }

    public function __destruct(){
        $this->conn->close();
    }



   /* private function executeQuery($sql, $dt,  ){
        $sql = $this->conn->prepare($sql, );
        $sql->bind_param($dt, $f, $l, $c,$i);
        return $sql->execute();
    }*/
    
}
?>