<?php
class database{
    var $host = "localhost";
    var $user = "root";
    var $passw = "";
    var $db = "tic";
    var $con;

    function __construct() {
        $this->con=mysqli_connect($this->host,$this->user,$this->passw,$this->db);
        mysqli_select_db($this->con,$this->db);
    }

    function tampil_data(){
        $data = mysqli_query($this->con,"SELECT * from user_login");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function hapus($id){
        mysqli_query($this->con,"DELETE from user_login where id='$id'");
    }

}


