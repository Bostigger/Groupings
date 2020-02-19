<?php

include 'config.php';

 if(isset($_POST['submit'])){

  $fname = $_POST['fname'];
  $sname = $_POST['sname'];
  $number  = $_POST['number'];
  $hostel = $_POST['hostel'];
  $group = rand(1,9);

  if ($group==1) {
    $sql = "insert into group1(Firstname,surname,number,hostel) values('$fname','$sname','$number','$hostel')";
    $exequery = mysqli_query($conn,$sql);
    header("location:index.php");
  }

  elseif ($group==2) {
    $sql = "insert into group2(Firstname,surname,number,hostel) values('$fname','$sname','$number','$hostel')";
    $exequery = mysqli_query($conn,$sql);
    header("location:index.php");
  }

  elseif ($group==3) {
    $sql = "insert into group3(Firstname,surname,number,hostel) values('$fname','$sname','$number','$hostel')";
    $exequery = mysqli_query($conn,$sql);
    header("location:index.php");
    }

    elseif ($group==4) {
    $sql = "insert into group4(Firstname,surname,number,hostel) values('$fname','$sname','$number','$hostel')";
    $exequery = mysqli_query($conn,$sql);
    header("location:index.php");

  }
  elseif ($group==5) {
    $sql = "insert into group5(Firstname,surname,number,hostel) values('$fname','$sname','$number','$hostel')";
    $exequery = mysqli_query($conn,$sql);
    header("location:index.php");

  }elseif ($group==6) {
    $sql = "insert into group6(Firstname,surname,number,hostel) values('$fname','$sname','$number','$hostel')";
    $exequery = mysqli_query($conn,$sql);
    header("location:index.php");
  }
  elseif ($group==7) {
    $sql = "insert into group7(Firstname,surname,number,hostel) values('$fname','$sname','$number','$hostel')";
    $exequery = mysqli_query($conn,$sql);
      header("location:index.php");

  }
  elseif ($group==8) {
    $sql = "insert into group8(Firstname,surname,number,hostel) values('$fname','$sname','$number','$hostel')";
    $exequery = mysqli_query($conn,$sql);
      header("location:index.php");
  }
  elseif ($group==9) {
    $sql = "insert into group9(Firstname,surname,number,hostel) values('$fname','$sname','$number','$hostel')";
    $exequery = mysqli_query($conn,$sql);
      header("location:index.php");
  }



}
 ?>
