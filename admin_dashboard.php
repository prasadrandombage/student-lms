<html>
<head>
<title>Admin Dashboard</title>
<style>

body
{
font-family: Arial, sans-serif;
background: url('media/0004.jpg');
background-size:cover;
color: white;
text-align: center;
margin: 0;
padding: 0;
}

.container 
{
opacity: 0.95;
margin: 60px auto;
max-width: 500px;
background: white;
padding: 30px;
border-radius: 10px;
box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
color: #333;
}


h2
{
font-size: 24px;
margin-bottom: 20px;
}

button {
display: block;
width: 100%;
background-color: #2193b0;
color: white;
border: none;
padding: 15px;
margin: 15px 0;
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

<div class="container">
<h2>Admin Dashboard</h2>
<button onclick="location.href='search_student.php'">Search Student</button>
<button onclick="location.href='update_student.php'">Update Student</button>
<button onclick="location.href='delete_student.php'">Delete Student</button>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
