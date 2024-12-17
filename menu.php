<!-- menu.php -->
<style>
.menu {
    background-color: #333;
    overflow: hidden;
    text-align: center;
    margin-bottom: 20px;
    border-radius: 5px;
}

.menu a {
    display: inline-block;
    color: white;
    text-decoration: none;
    padding: 14px 20px;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

.menu a:hover, .menu a.active {
    background-color: #197a92;
    color: #fff;
    border-radius: 5px;
}
</style>

<div class="menu">
    <a href="search_student.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'search_student.php' ? 'active' : ''; ?>">Search Student</a>
    <a href="update_student.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'update_student.php' ? 'active' : ''; ?>">Update Student</a>
    <a href="delete_student.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'delete_student.php' ? 'active' : ''; ?>">Delete Student</a>
</div>
