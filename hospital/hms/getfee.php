
<?php

class Database{
  
  private $host  = 'localhost';
    private $user  = 'root';
    private $password   = '';
    private $database  = "hms"; 
    
    public function getConnection(){    
    $conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
     if($conn->connect_error){
      die("Error failed to connect to MySQL: " . $conn->connect_error);
    } else {
      return $conn;
    }

if($_GET['action']=='doctorid'){
	$docinfo=$_POST['docinfo'];
	$query= mysqli_query($conn,"select * from doctors where doctorName=$docinfo");
	$array=mysqli_fetch_array($query);
	echo $array['docFees'];
}	
	}
}
	?>