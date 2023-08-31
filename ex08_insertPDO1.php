<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert data by PDO</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class= "container">
    <form action="ex08_insertPDO1Script.php" method='post'>
        <h3 class="mt-4">กรอกข้อมูลนักศึกษา</h3>
        <hr>
        <div class="mb-3">
            <label for="studentID" class="form-label">Student ID</label>
            <input type="text" class="form-control" name="studentID">
        </div>
        <div class="mb-3">
            <label for="firstname" class="form-label">First name</label>
            <input type="text" class="form-control" name="firstname">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last name</label>
            <input type="text" class="form-control" name="lastname">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone number</label>
            <input type="text" class="form-control" name="phone">
        </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <hr>
    <p class="text-end"><a href="ex07_index.php">กลับหน้าหลัก</a></p>
</div>
</body>
</html>