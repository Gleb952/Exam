<?php

 $conn = new mysqli("localhost", "eng_bd", "5]u1n(69Q7HIO!*u", "eng_bd");
 $conn->query("SET NAMES 'utf8'");
 if($conn->connect_error){die("Ошибка: " . $conn->connect_error);}



 class Foo
 {
    public function get_data(){
        echo "bar\n";

        
    }
 }


?>