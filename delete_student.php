<html>
<head>
<title>Delete Student</title>


<style>

body
{
font-family: Arial, sans-serif;
background: url('media/0003.jpg');
background-size:cover;
text-align: center;
}

.container {
margin: 50px auto;
max-width: 400px;
background: white;
padding: 30px;
border-radius: 10px;
box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
}

h2
{
font-size: 24px;
margin-bottom: 20px;
color: #444;
}

form label {
font-size: 16px;
margin-bottom: 5px;
display: block;
text-align: left;
}

form input {
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
background-color: #197a92;
}
</style>
</head>


<body>
<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>

<div class="container">
<h2>Delete Student</h2>
<form method="POST" action="">
<label for="nic">Enter NIC:</label>
<input type="text" id="nic" name="nic" required>
<button type="submit">Delete</button>

</form>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$conn = new mysqli('localhost', 'root', '', 'student_lms');
$nic = $_POST['nic'];

$sql = "DELETE FROM students WHERE nic='$nic'";
if ($conn->query($sql) === TRUE) {
echo "<p>Student deleted successfully!</p>";
}

else{
echo "<p>Error deleting student: " . $conn->error . "</p>";
}

$conn->close();
}
?>
<?php include 'footer.php'; ?>
</div>
</body>
</html>
