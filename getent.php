<?PHP
require_once 'connection.php';
$conn=new dbConnection();
   $connection=$conn->connect_db();
    $id = $_GET['id'];
		//$json = $request->getBody();
		//$obj = json_decode($json, TRUE);
		//$userName= $obj["email"];
		//$password =$obj["password"];
		$query="SELECT * FROM(
    SELECT *,(((acos(sin((46.7866719*(22/7)/180)) * sin((lat*(22/7)/180))+cos((46.7866719*(22/7)/180)) * cos((lat*(22/7)/180)) * cos(((-92.1004852 - lon)*(22/7)/180))))*180/(22/7))*60*1.1515*1.609344) as distance FROM venue) t
WHERE distance <= 5 AND cat='".$id."'";
		try{
				$stmt = $connection->prepare($query);
				//$stmt->bind_param("ss", $userName,$password);
	//$stmt->bind_param("s", $password);
				$stmt->execute();
				$res = $stmt->get_result();
				$myArray = array();
                while($row = $res->fetch_array(MYSQL_ASSOC)) {
                    $myArray[] = $row;
                    //$myArray[i] = $row;//For sending entire data lets dicuss and finalize
                }
                //Sending clubbed data for both hall and address_info using hid
                echo json_encode($myArray);
		}catch(PDOException $e) {
			return json_encode($e->getMessage());
		}

?>