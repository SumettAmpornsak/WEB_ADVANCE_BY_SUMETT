<?php
require_once "ex05_connectdb.php";

//ข้อมูลสำหรับเตรียมบันทึกลงฐานข้อมูล
$stdIDValue = $_POST['studentID'];
$fnameValue = $_POST['firstname'];
$lnameValue = $_POST['lastname'];
$phoneValue = $_POST['phone'];

    $stmt = $conn->prepare("INSERT INTO students(stdID, fname, lname, phone_no) VALUES (:StdID, :Fname, :Lname, :Phone)");

    $stmt->bindParam(':StdID', $stdIDValue);
    $stmt->bindParam(':Fname', $fnameValue);
    $stmt->bindParam(':Lname', $lnameValue);
    $stmt->bindParam(':Phone', $phoneValue);

    $stmt->execute();
        echo "เพิ่มข้อมูลสำเร็จแล้วครับ";
