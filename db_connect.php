$conn = new mysqli('localhost', 'root', '', 'student_lms');


if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
