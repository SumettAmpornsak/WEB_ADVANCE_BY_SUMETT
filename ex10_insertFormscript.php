<?php
//ติดต่อ db 
require_once 'ex05_connectdb.php';

//ดึงข้อมูลจากฟอร์ม เก็บไว้ในตัวแปร สำหรับเตรียมส่งไปยัง db
$stdIDValue = $_POST['studentID'];
$fnameValue = $_POST['firstname'];
$lnameValue = $_POST['lastname'];
$phoneValue = $_POST['phone'];

$sql = "INSERT INTO students(stdID, fname, lname, phone_no) VALUES (?,?,?,?)";

$stmt = $conn->prepare($sql); //เตรียมข้อมูล

$stmt->bindParam(1, $stdIDValue); //จับคู่ตัวแปรกับ hd
$stmt->bindParam(2, $fnameValue); //จับคู่ตัวแปรกับ hd
$stmt->bindParam(3, $lnameValue); //จับคู่ตัวแปรกับ hd
$stmt->bindParam(4, $phoneValue); //จับคู่ตัวแปรกับ hd

$result=$stmt->execute(); //สิ่งที่ผูกเข้าด้วยกัน 

//echo "เพิ่มข้อมูลเรียบร้อยแล้วนะครับ"

    

//Sweetalert

echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';

if($result){
echo '<script>
    setTimeout(function () {

        Swal.fire({
            position: "center",
            icon: "success",
            title: "บันทึกข้อมูลสำเร็จ",
            showConfirmButton: false,
            timer: 1500
        }).then(function() {
            window.location = "ex10_insertForm.php";
        });
    }
    , 1000);  
</script>';
}else{
    echo '<script>
    setTimeout(function () {

        Swal.fire({
            position: "center",
            icon: "error",
            title: "เกิดข้อผิดพลาด",
            showConfirmButton: false,
            timer: 1500
        }).then(function() {
            window.location = "ex10_insertForm.php";
        });
    }
    , 1000);  
</script>';

}
?>