<html>
<head>
<title>Search Student</title>


<style>

body{
font-family: Arial, sans-serif;
background: url('0003.jpg');
background-size: cover;
color: #333;
text-align: center;
margin: 0;
padding: 0;
}

.container {
opacity: 0.9;
margin: 50px auto;
max-width: 400px;
background: white;
padding: 25px;
border-radius: 10px;
box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
}

h2
{
font-size: 24px;
margin-bottom: 20px;
color: #444;
}

form label{
font-size: 16px;
margin-bottom: 5px;
display: block;
text-align: left;
}


form input{
width: 100%;
padding: 10px;
margin-bottom: 15px;
border: 1px solid #ccc;
border-radius: 5px;
font-size: 14px;
}

button
{
width: 100%;
background-color: #2193b0;
color: white;
border: none;
padding: 15px;
border-radius: 5px;
font-size: 18px;
cursor: pointer;
transition: background-color 0.3s ease;
}

button:hover {
background-color: #197a92;
}

.result
{
margin-top: 20px;
font-size: 16px;
color: #444;
text-align: left;
background: #f9f9f9;
padding: 15px;
border-radius: 5px;
}

</style>
</head>



<body>


<?php include 'menu.php'; ?> <!-- Include Menu -->

<div class="container">
<h2>Search Student</h2>
<form method="POST" action="">
<label for="nic">Enter NIC:</label>
<input type="text" id="nic" name="nic" required>
<button type="submit">Search</button>
</form>


<div class="result">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$conn = new mysqli('localhost', 'root', '', 'student_lms');
$nic = $_POST['nic'];
$sql = "SELECT * FROM students WHERE nic='$nic'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc())
{
echo "Name : " . $row["name"] . "<br>";
echo "NIC : " . $row["nic"] . "<br>";
echo "Address : " . $row["address"] . "<br>";
echo "Tel No : " . $row["tel_no"] . "<br>";
echo "Course : " . $row["course"] . "<br>";
}

}
else{
echo "No student found with NIC: $nic";
}

$conn->close();
}

?>

</div>
</div>
</body>
</html>
