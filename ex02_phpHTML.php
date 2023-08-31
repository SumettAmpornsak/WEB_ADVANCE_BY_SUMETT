<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP&HTML</title>
    <style>
        #mydiv{
            border-color: rgba(38, 16, 240, 0.475);
            border-style: solid;
            border-width: 3px;
            background: blue;
            text-align: center;
      }
      h1{
        text-align: center;
        background: blue;
        color: white;
      }
      h2{
        text-align: center;
      }
    </style>
</head>
<body>
    <div id="mydiv">
        <h1>
            <span style="color:white">ข้อมูลส่วนบุคคล</span>
        </h1>
    </div>
<br>
    <div style="border:solid; padding: 10px">
        
        <?php
            echo "รหัสนักศึกษา: 644230035 <br>";
            echo "<span style='color:green'>ชื่อ-สกุล: นายสุเมธ อำพรศักดิ์ <br></span>"; 
            echo "หมูเรียน: 64/38 <br>";
            echo "<b>สาขาวิชา :เทคโนโลยีสารสนเทศ</b> <br>";
            echo "มหาวิทยาลัยราชภัฏนครปฐม <br>";
        ?>
    </div>
            <h1>การจัดการกับตัวแปร</h1>
        <?php
            $fname = "Sumett";
            $lname = "Ampornsak";
            $age = "47";


            //เชื่อมตัวแปร ." "
            echo $fname." "; //แสดงค่าตัวแปรเดียว
            echo $lname." ";
            echo "<br>".$fname." ".$lname; //แสดงค่าตัวแปรหลายตัว
            echo "<br> I am ".$age."year olds "; //แสดงค่าตัวแปรหลายตัว
            echo $age;
        ?>
<hr>
        <h2>แสดงการแทรกโค้ด php เข้าไปยัง</h2>

<form action="">
  <label for="fname">NAME</label>
  <input type="text" id="fname" name="fname" value="<?php echo $fname ?>">

  <label for="lname">SURNAME</label>
  <input type="text" id="lname" name="lname"value="<?php echo $lname ?>">
</form>
</body>
</html>