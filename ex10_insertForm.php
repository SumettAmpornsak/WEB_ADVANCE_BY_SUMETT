<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert PDO by ?</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .new_container{
            width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f5f5f5;
            height: 100vh;
        }
    </style>

</head>
<body>

    <div class="new_container">
        <form action="ex10_insertFormscript.php" method="post">
        <h3 class="mt-4">ฟอร์มกรอกข้อมูลนักศึกษา</h3>
        <hr>
            <div class="mb-3">
                <label for="studentid" class="form-label">Student ID</label>
                <input type="text" class="form-control" name="studentID">
            </div>
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstname">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastname">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" class="form-control" name="phone">
            </div>

            <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary ">Submit</button>
            </div>
        </form>
        <hr>
        <p class="text-end"><a href="ex07_index.php">กลับหน้าหลัก</a></p>
    </div>


</body>
</html>
