<?php
// include("config.php");
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database =  "routine maker";

// // Creating a connection
// $conn = mysqli_connect($servername, $username, $password, $database);
// // Die if connection was not successfull
// if(!$conn){
//     die("Sorry we failed to connect: ". mysqli_connect_error());
// }else{
//     echo '<script>alert("Connection was successful");</script>';
// }

// $contentType = trim($_SERVER["CONTENT_TYPE"] ?? ''); // PHP 8+
// echo `$_SERVER["CONTENT_TYPE"]`;
// Otherwise:
$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

/* Send error to Fetch API, if unexpected content type */
if ($contentType !== "application/json")
  die(json_encode([
    'value' => 0,
    'error' => 'Content-Type is not set as "application/json"',
    'data' => null,
  ]));

/* Receive the RAW post data. */
$content = trim(file_get_contents("php://input"));

/* $decoded can be used the same as you would use $_POST in $.ajax */
$decoded = json_decode($content, true);
// echo $decoded.'\n';
/* Send error to Fetch API, if JSON is broken */
// if(! is_array($decoded))
//   die(json_encode([
//     'value' => 0,
//     'error' => 'Received JSON is improperly formatted',
//     'data' => $decoded,
//   ]));

/* NOTE: For some reason I had to add the next line as well at times, but it hadn't happen for a while now. Not sure what went on */
$decoded = json_decode($decoded, true);

/* Do something with received data and include it in response */
// dumb e.g.
$response = $decoded['totalClass']+1 ; // 5

/* Send success to fetch API */
die(json_encode([
  'value' => 1,
  'error' => null,
  'data' => $response, // or ?array of data ($response) you wish to send back to JS
]));

$sql = 'INSERT INTO check (teacherName, subject , class) VALUES ("skg", "Doe", 4)';
if ($conn->query($sql) === TRUE) {
  // echo "New record created successfully";
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
}
?>