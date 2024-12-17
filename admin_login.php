<html>
<head>
<title>Admin Login</title>

<style>
body
{
font-family: Arial, sans-serif;
background: url('media/0001.jpg');
background-size: cover;
color: #333;
text-align: center;
margin: 0;
padding: 0;
}

.container
{
opacity: 0.9;
margin: 100px auto;
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

form input 
{
width: 100%;
padding: 10px;
margin-bottom: 15px;
border: 1px solid #ccc;
border-radius: 10px;
font-size: 14px;
}

button
{
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

button:hover 
{
background-color: #e14e54;
}

.error {
color: red;
font-size: 14px;
margin-top: 10px;
}

</style>

</head>


<?php include 'header.php'; ?>

<body>
<div class="container">
<h2>Admin Login</h2>
<form method="POST" action="">
<label for="username">Username:</label>
<input type="text" id="username" name="username" required>

<label for="password">Password:</label>
<input type="password" id="password" name="password" required>

<button type="submit">Login</button>
</form>

<?php include 'footer.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$conn = new mysqli('localhost', 'root', '', 'student_lms');

if ($conn->connect_error) 
{
die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
                
header("Location: admin_dashboard.php");
exit;
} 
else
{
echo "<p class='error'>Invalid username or password!</p>";
}
$conn->close();
}

?>
</div>
</body>
</html>
