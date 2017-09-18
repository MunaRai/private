<?php 

    include ('inc/db.inc.php');

    class user {

        protected $table='user';

        function insert( $data ){
            $conn = connect_db();
            $sql = "INSERT INTO ".$this->table." (user_name, password, email, first_name, last_name, city, state, hobbies ) VALUES ('".$data['user_name']."', '".$data['password']."', '".$data['email']."', '".$data['first_name']."', '".$data['last_name']."', '".$data['city']."', '".$data['state']."', '".$data['hobbies']."')";
            if( mysqli_query($conn, $sql) ){
                $response = array("type"=>"success", "message"=>"successfully Created Account" );
            }else{
                $response = array("type"=>"error", "message"=>"Your email address is already exist" );
            }
            return $response;
        }

        function login( $data ){
            var_dump($data);
            $sql = "SELECT email, password FROM ".$this->table." where email=".$data['email']." and password=".$data['password']." ";
            echo $sql;
        }

    }

    $user = new user; 