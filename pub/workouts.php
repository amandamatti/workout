<?php

//    * DT173G - Webbutveckling III 
//    * Main php-file
//    * Mittuniversitetet 
//    * Amanda Matti, 2018 

// Database name: workout, Username: workout, Password: workout, Table: workouts 
// ------------------------------------------------------------------------------------
// | ID (int, AI, PRIMARY KEY) | date (varchar(50)) | activity (varchar(50)) | time (int) |
// 
//class App{
//    public static function get__PATH_INFO($path){
//        $path_elements = explode("/", $path);
//        $tempPI = "";
//        if (isset($path_elements[2])){
//            for ($i = 2 ;$i < count($path_elements); $i++ )
//                $tempPI .= "/".$path_elements[$i];
//        }
//        return $tempPI;
//    }
//}
// Get HTTP method, path and input of the request
$method = $_SERVER['REQUEST_METHOD'];
//$request = App::get__PATH_INFO($_SERVER['REQUEST_URI']);
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
$input = json_decode(file_get_contents('php://input'),true);

if($request[0] != "workouts"){ 
	http_response_code(404);
	exit();
}

//
// Send return header information
header("Content-Type: application/json; charset=UTF-8");

//$conn = mysqli_connect("localhost","workout", "password", "workouts") or die("Error connecting to database.");;
$conn = mysqli_connect("localhost","root") or die("Error connecting to database.");;
$db_connected = mysqli_select_db($conn, "workout"); // Work with the database named 'testrest' 



//
// HTTP method implementations of GET, POST, PUT and DELETE
switch ($method){
	case "GET":
		$sql = "SELECT ID, date, activity, time FROM workouts";
		if(isset($request[1])) $sql = $sql . " WHERE ID = " . $request[1] . ";";
		break;
	case "PUT":
		$sql = "UPDATE workouts SET date = '" . $input['date'] . "', activity = '" . $input['activity'] . "', time = '" . $input['time'] . "' WHERE ID = " . $request[1] . ";";
    	break;
	case "POST":
		$sql = "INSERT INTO workouts (date, activity, time) VALUES ('" . $input['date'] . "', '" . $input['activity'] . "', " . $input['time'] . ");";
		break;
	case "DELETE":
   		$sql = "DELETE FROM workouts WHERE ID = " . $request[1] . ";";
   		break;
}

// Always response with json array of cars except for GET /cars/id
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

$harr = [];
if($method != "GET") $sql = "SELECT ID, date, activity, time FROM workouts";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
while($row = mysqli_fetch_assoc($result)){
        $row_arr['ID'] = $row['ID'];
        $row_arr['date'] = $row['date'];
        $row_arr['activity'] = $row['activity'];
        $row_arr['time'] = $row['time'];
        array_push($harr,$row_arr);
}

mysqli_close($conn);

echo json_encode($harr);