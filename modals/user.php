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
            $conn = connect_db();
            var_dump($data);
            $sql = 'SELECT email FROM user WHERE email="'.$data['email'].'" AND password="'.$data['password'].'"';
            
            $result = mysql_query($sql);
            var_dump(mysql_num_rows($result));
            if( mysql_num_rows($result) > 0 ){
                echo "new success";
            }else{
                echo "new fail";
            }
        }

    }

    $user = new user; 