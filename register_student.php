<html>
<head>
<title>Register Student</title>

<style>
body
{
font-family: Arial, sans-serif;
background: url('0002.jpg');
background-size: cover;
color: #333;
text-align: center;
margin: 10;
padding: 10;
}

.container
{
opacity: 0.9;
margin: 50px auto;
max-width: 500px;
background: white;
padding: 8px;
border-radius: 10px;
box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
}

h2{
font-size: 24px;
margin-bottom: 20px;
color: #444;
}

form label
{
font-size: 16px;
margin-bottom: 5px;
display: block;
text-align: left;
}



form input 
{
width: 100%;
padding: 10px;
margin-bottom: 15px;
border: 1px solid #ccc;
border-radius: 5px;
font-size: 14px;
}

button{
width: 100%;
background-color: #ff5f6d;
color: white;
border: none;
padding: 15px;
border-radius: 15px;
font-size: 18px;
cursor: pointer;
transition: background-color 0.3s ease;
}

button:hover {
background-color: #5dc0b8;
}

.success {
color: green;
font-size: 16px;
margin-top: 10px;
}

.error {
color: red;
font-size: 16px;
margin-top: 10px;
}

</style>
</head>


<body>
<div class="container">
<h2>Register Student</h2>
<form method="POST" action="">
<label for="name">Name:</label>
<input type="text" id="name" name="name" required>

<label for="nic">NIC:</label>
<input type="text" id="nic" name="nic" required>

<label for="address">Address:</label>
<input type="text" id="address" name="address" required>

<label for="tel_no">Telephone Number:</label>
<input type="text" id="tel_no" name="tel_no" required>

<label for="course">Course:</label>
<input type="text" id="course" name="course" required>

<button type="submit">Register</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{      
$conn = new mysqli('localhost', 'root', '', 'student_lms');

          
if ($conn->connect_error) {
die("<p class='error'>Connection failed: " . $conn->connect_error . "</p>");
}

         
$name = $_POST['name'];
$nic = $_POST['nic'];
$address = $_POST['address'];
$tel_no = $_POST['tel_no'];
$course = $_POST['course'];

            
$sql = "INSERT INTO students (name, nic, address, tel_no, course) VALUES ('$name', '$nic', '$address', '$tel_no', '$course')";

if ($conn->query($sql) === TRUE) {
echo "<p class='success'>Student registered successfully!</p>";
} 
else{
echo "<p class='error'>Error: " . $conn->error . "</p>";
}
          
$conn->close();


}
?>

</div>

</body>
</html>
