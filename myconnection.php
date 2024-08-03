<? 
$lastName = $_POST['lastName'];
$firstName = $_POST['firstName'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$Password = $_POST['password'];
$number = $_POST['number'];


//creating my database

$conn = new mysqli('localhost'root','','test');
if($conn->connect_error){
die('connection failed : '.conn->connect_error);

}else{
$stmt = $conn->prepare("insert into registration(lastName, firstName, gender, email, password, number) values(?, ?, ?, ?, ?)")

}
?>