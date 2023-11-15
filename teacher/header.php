<?php
 //session_start();
 $site_url = 'http://localhost/sms-project/';
  if(isset($_SESSION['login']))
  {
    if(isset($_SESSION['user_type']) && $_SESSION['user_type'] != 'teacher')
    {
      $user_type = $_SESSION['user_type'];
      header('Location: /sms-project/'.$user_type.'/dashboard.php');
    }
  }
  else 
  {
    
    header('Location: ../login.php');
  }

  $std_id = $_SESSION['user_id'];
  $student = get_user_data($std_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Teacher | Dashboard </title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">