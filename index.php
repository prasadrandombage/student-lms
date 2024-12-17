<html>
<head>
<title>SMGC Campus</title>
<style>
body{
font-family: Arial, sans-serif;
background: url('media/0001.jpg') no-repeat center center fixed;
background-size: cover;
text-align: center;
margin: 0;
padding: 0;
}

.container
{
opacity: 0.9;
margin: 90px auto;
max-width: 600px;
background: white;
padding: 30px;
border-radius: 10px;
box-shadow: 5px 4px 10px rgba(0.1, 0.2, 0.5, 0.5);
}

h1 {
margin: 0;
font-size: 24px;
color: #444;
}

button{
display: block;
width: 100%;
background-color: #ff5f6d;
color: white;
border: none;
padding: 15px;
margin: 20px 0;
border-radius: 15px;
font-size: 18px;
cursor: pointer;
transition: background-color 0.5s ease;
}

button:hover {
background-color: #e14e54;
}

</style>
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">
<h1>Student LMS</h1>
<button onclick="window.open('register_student.php', '_blank')">Student Register</button>
<button onclick="location.href='admin_login.php'">Admin Login</button>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
