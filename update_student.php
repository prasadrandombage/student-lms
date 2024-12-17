<html>
<head>
<title>Update Student</title>

<style>

body{
font-family: Arial, sans-serif;
background: url('0005.jpg');
background-size:cover;
text-align: center;
margin: 0;
padding: 0;
}

.container {
opacity: 0.9;
margin: 60px auto;
max-width: 380px;
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

form label
{
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

button:hover
{
background-color:#197a92;
}

</style>
</head>


<body>
<?php include 'menu.php'; ?> <!-- Include Menu -->
<div class="container">
<h2>Update Student</h2>

<form method="POST" action="">

<label for="nic">NIC:</label>
<input type="text" id="nic" name="nic" required>

<label for="name">Name:</label>
<input type="text" id="name" name="name">

<label for="address">Address:</label>
<input type="text" id="address" name="address">

<label for="tel_no">Tel No:</label>
<input type="text" id="tel_no" name="tel_no">

<label for="course">Course:</label>
<input type="text" id="course" name="course">

<button type="submit">Update</button>
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$conn = new mysqli('localhost', 'root', '', 'student_lms');
$nic = $_POST['nic'];
$name = $_POST['name'];
$address = $_POST['address'];
$tel_no = $_POST['tel_no'];
$course = $_POST['course'];

$sql = "UPDATE students SET name='$name', address='$address', tel_no='$tel_no', course='$course' WHERE nic='$nic'";
if ($conn->query($sql) === TRUE) {
echo "<p>Student updated successfully!</p>";
}

else
{
echo "<p>Error updating student: " . $conn->error . "</p>";
}

$conn->close();
}
?>

</div>
</body>
</html>
