<?php 
class qrcodeGEN
{
  public $server = "localhost";
  public $user = "root";
  public $pass = "";
  public $dbname = "howtoqr";
	public $conn;
  public function __construct()
  {
  	$this->conn= new mysqli($this->server,$this->user,$this->pass,$this->dbname);
  	if($this->conn->connect_error)
  	{
  		die("connection failed");
  	}
  }
 	public function insertQr($qrUname,$final,$qrimage,$qrlink)
 	{
 			$sql = "INSERT INTO qrcodes(qrUsername,email,qrImg,qrlink) VALUES('$qrUname','$final','$qrimage','$qrlink')";
 			$query = $this->conn->query($sql);
 			return $query;

 	
 	}
 	public function displayImg()
 	{
 		$sql = "SELECT qrimg,qrlink from qrcodes where qrimg='$qrimage'";

 	}
}
$generateQR = new qrcodeGEN();