<?php 

    include ('inc/db.inc.php');

    class user{

        protected $table='user';
        protected $conn;
        
        function __construct() {
           $this-> conn = connect_db();
        //   echo "construct";
        }
        
        function __destruct() {
        //   echo "destruct";
        }
        
        function insert( $data ){
            $sql = "INSERT INTO ".$this->table." (user_name, password, email, first_name, last_name, city, state, hobbies ) VALUES ('".$data['user_name']."', '".$data['password']."', '".$data['email']."', '".$data['first_name']."', '".$data['last_name']."', '".$data['city']."', '".$data['state']."', '".$data['hobbies']."')";
            if( mysqli_query($this->conn, $sql) ){
                $response = array("type"=>"success", "message"=>"successfully Created Account" );
            }else{
                $response = array("type"=>"error", "message"=>"Your email address is already exist" );
            }
            return $response;
        }

        function login( $data ){
            // https://www.w3schools.com/php/func_mysqli_num_rows.asp
            $query = sprintf( "SELECT `email` FROM user WHERE `email`='%s' AND `password`='%s'", $data['email'], $data['password'] );
            if( $result = mysqli_query( $this->conn, $query ) ) {
                if( mysqli_num_rows( $result ) > 0 ){
                  return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }

        function getdata( $email){
            $query = sprintf( "SELECT * FROM user WHERE `email`='%s'", $email );
            $result = $this->conn->query($query);
            if( $result->num_rows > 0){
                return $result->fetch_assoc();
            }else{
                return false;
            }
        }

        function update( $data ){
           $query = "UPDATE ".$this->table." SET user_name = ".$data['user_name'].", email = ".$data['email'].", first_name = ".$data['first_name'].", last_name = ".$data['last_name'].", city =".$data['city'].", state=".$data['state'].", hobbies=".$data['hobbies']." WHERE email = ".$data['email'].";
           echo $query;
           
           // if( mysqli_query($this->conn, $sql) ){
           //     $response = array("type"=>"success", "message"=>"successfully updated Account" );
           // }else{
           //     $response = array("type"=>"error", "message"=>"updation unsuccessful" );
           // }
           // return $response;
        }

    }

    $user = new user; 