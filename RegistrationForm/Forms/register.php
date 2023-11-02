<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
   
    $name=$_POST['name'];
    $mail=$_POST['mail'];
    $password=$_POST['password'];
    $dob=$_POST['dob'];
    $num=$_POST['num'];
    $role=$_POST['role'];
    $interview=$_POST['interview'];
    $location=$_POST['location'];



    
    echo "Name: ".$name."<br><br>";
    echo "Email: ".$mail."<br><br>";
    echo "Password: ".$password."<br><br>";
    echo "DOB: ".$dob."<br><br>";
    echo "Mobile Number: ".$num."<br><br>";
    echo "Job Role: ".$role."<br><br>";
    echo "Interview Date: ".$interview."<br><br>";
    echo "Preffered Location: ".$location."<br><br>";
    
    

}