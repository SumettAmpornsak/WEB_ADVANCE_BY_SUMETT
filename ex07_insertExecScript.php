<?php
    require_once"ex05_connectdb.php";

        //ข้อมูลสำหรับเตรียมบันทีกลงฐานข้อมูล
        $stdIDValue = $_POST['studentID'];
        $fnameValue = $_POST['firstname'];
        $lnameValue = $_POST['lastname'];
        $phoneValue = $_POST['phone'];
       
    
            $sql = "INSERT INTO students(stdID,fname,lname,phone_no) VALUES ('$stdIDValue','$fnameValue', '$lnameValue', '$phoneValue')";
    
            $result=$conn->exec($sql);
            if ($result == true) {
                echo "เพิ่มข้อมูลสำเร็จแล้วนะครับ";
            } else {
                echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูลนะครับ";
            }
            
            header("Location: ex07_insertExecForm.php"); // ย้อนกลับ
    


?>
