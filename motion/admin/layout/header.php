<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motion</title>
     <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="shortcut icon" href="image/icons8-monitor-50.png" type="image/png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
     <link rel="stylesheet" href="css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="admin.css" type="text/css">
<style>
body {
/* 
  background-color:#404db2; */

  font-family: Arial, Helvetica, sans-serif;
}
.admin-nav{
  background-color:#ffcd42!important;
  font-size:1.5rem !important; 
  color:#fff !important;
}


 </style>
</head>
<body>

<nav class=" navbar fixed-top p-0 shadow navar-dark" style="background-color:#225470">
<a href="" class="navbar-brand col-sm-3 col-md-2 mr-0">
Admin</a>

</nav>

<!-- sidebar -->
<div class="container-fluid mb-5" style="margin-top:40px;">
  <div class="row">
  <nav class="col-sm-3 col-md-2  sidebar py-2 d-print-none admin-nav">
    <div class="sidebar-sticky">
      <ul class="nav flex-column">
         <li class="nav-item">
           <a href="index.php" class="nav-link">
           <i class="fas fa-tachomenter-alt"></i>Dashboard</a>
         </li>
         <li class="nav-item">
         <a href="categories.php" class="nav-link"><i class="fab fa-accessible-icon"></i>Categories</a>
         </li>
         <li class="nav-item">
         <a href="courses.php" class="nav-link"><i class="fad fa-chalkboard-teacher"></i>Courses</a>
         </li>
         <li class="nav-item">
         <a href="student.php" class="nav-link"><i class="fas fa-users-class"></i>Student</a>
         </li>
         <li class="nav-item">
         <a href="lessons.php" class="nav-link"><i class="fad fa-chalkboard-teacher"></i>Lessons</a>
         </li>
         <li class="nav-item">
         <a href="level.php" class="nav-link">Level</a>
         </li>
         <li class="nav-item">
         <a href="role.php" class="nav-link"><i class="fas fa-user-tag"></i>Role</a>
         </li>
         <li class="nav-item">
         <a href="users.php" class="nav-link"><i class="fas fa-users"></i>Users</a>
         </li>
      </ul>
      
    </div>
  
  </nav>