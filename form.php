<?php

$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$number=$_POST['pnumber'];
$occupation= $_POST['occupation'];
$pet=$_POST['pet'];

$server= 'localhost';
$username='root';
$pwd='';
$dbname='activity';
$conn= new mysqli($server,$username,$pwd,$dbname);

$sql= "INSERT into petcare value ('".$name."', '".$age."' , '".$gender."','".$address."','".$number."','".$occupation."','".$pet."')";
$res=$conn->query($sql);
echo "<br><h1>Yayy!! Your Response has been recorded!!<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background-color: #7cc8f1;
      color: #ffffff;
    }
    button {
      margin: 5px 5px 5px 250px;
      border: none;
      align: center;
      background-color: #005d85;
      color: white;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      
    }
  
  </style>
</head>
<body>
   
  <button onclick="location.href='home.html'">Back to Home Page </button>

</html>