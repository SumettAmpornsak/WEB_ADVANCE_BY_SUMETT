<?php
    $serverName = "localhost";
    $databaseName = "mydb6438";
    $username = "root";
    $password = "";

    //ข้อมูลสำหรับเตรียมบันทีกลงฐานข้อมูล
    $stdIDValue = "644230035";
    $fnameValue = "Sumett";
    $lnameValue = "Ampornsak";
    $phoneValue = "0957940917";


    try{
        $conn = new PDO ("mysql:host=$serverName;dbname=$databaseName",$username,$password);

        // ตั้งค่าให้ PDO คืนค่าเป็น exception หากเกิดข้อผิดพลาด
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //echo "เชื่อมต่อฐานข้อมูลสำเร็จแล้วครับ";

        $sql = "INSERT INTO students(stdID,fname,lname,phone_no) VALUES ('$stdIDValue','$fnameValue', '$lnameValue', '$phoneValue')";

        $result=$conn->exec($sql);
        if ($result == true) {
            echo "เพิ่มข้อมูลสำเร็จแล้วนะครับ";
        } else {
            echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูลนะครับ";
        }
        

        }catch(PDOException $e){
        echo "พบข้อผิดพลาด".$e->getMessage();
    }

?>