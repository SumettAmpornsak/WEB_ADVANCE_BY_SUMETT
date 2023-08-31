<?php
  //connect db
    require_once 'ex05_connectdb.php';

  //สร้างตัวแปร เพื่อรับค่าจาก From
  $stdIDValue = $_POST['studentID'];
  $fnameValue = $_POST['firstname'];
  $lnameValue = $_POST['lastname'];
  $phoneValue = $_POST['phone'];

  $sql = "INSERT INTO students(stdID, fname, lname, phone_no) VALUES (?,?,?,?)";

  $stmt=$conn->prepare($sql); //เตรียมข้อมูล
  
  $stmt->bindParam(1,$stdIDValue); //จับคู่ตัวแปรกับ hd
  $stmt->bindParam(2,$fnameValue); //จับคู่ตัวแปรกับ hd
  $stmt->bindParam(3,$lnameValue); //จับคู่ตัวแปรกับ hd
  $stmt->bindParam(4,$phoneValue); //จับคู่ตัวแปรกับ hd
   
  $stmt->execute(); //สิ่งที่ผูกเข้าด้วยกัน 

  echo "เพิ่มข้อมูลเรียบร้อยแล้วนะครับ"


?>