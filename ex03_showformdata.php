<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumett-Pai</title>
    <style>
        h1{
            text-align: left;
            color: black;
        }
        span{
            color:blue;
        }
        fieldset {
            margin-bottom: 1em;
            border: 2px solid ;
            
            
        }
        .blcolor{
            color:blue;
        }
    </style>
</head>
<body>
        <?php
            $fname  = "Sumett";
            $lname  = "Ampornsak";
            $email = "644230035@webmail.npru.ac.th";
            $age = "47";
            $phone = "0957940917";
            $gender = "F";
            $skill = "HTML,JAVA";
            $note = "Interested in Computer field"; 

        ?>

    <h1>Information about me: <span><?php echo $fname," ",$lname ?></span></h1>
        
<br>

       
    <div>
        <fieldset>
        <legend>
                Text Field
        </legend>
           <form action="">
                <label for="fname">First name</label> <br>
                <input type="text" id="fname" name="fname" value="<?php echo $fname ?>" class="blcolor" >

                <span style="color:red;">*</span> <br>
                <label for="fname">Last name</label> <br>
                <input type="text" id="lname" name="lname" value="<?php echo $lname ?>" class="blcolor" ><br>

                <label for="fname">Email</label> <br>
                <input type="email" id="email" name="email" value="<?php echo $email ?>" class="blcolor" style="width: 200px;" ><br>

                <label for="fname">Age</label> <br>
                <input type="number" id="age" name="age" value="<?php echo $age ?>" min="0" max="200" class="blcolor" ><br>

                <label for="fname">Phone</label> <br>
                <input type="tel" id="phone" name="phone" value="<?php echo $phone ?>" class="blcolor">
           </form>
        </fieldset>
    </div>


    <div>
        <fieldset>
            <legend>Radio Button</legend>
            <label for="gender">Gender :</label>
                <?php
                if ($gender === "M"){
                echo "<input type='radio' name='gender' id='gender' value='M' checked > Male";
                echo "<input type='radio' name='gender' id='gender' value ='F'> Female";
            }   elseif ($gender === "F"){
                echo "<input type='radio' name='gender' id='gender' value='M'  >Male";
                echo "<input type='radio' name='gender' id='gender' value ='F' checked > Female";

            }
                        
                        // <label for="male">Male</label>
                        // <input type="radio" name="gender" value="female"id="female">
                        // <label for="female">Female</label><br>
                ?>
        </fieldset>
    </div>
    <div>
        <fieldset>
            <legend>
                Checkbox
            </legend>
                
                <form action="formdata.php" method="post">
                    <label for="skill">Skill :</label>
                        <input type="checkbox" name="html" value="html" checked id="html">
                        <label for="html">HTML</label>

                        <input type="checkbox" name="php" value="php"id="php">
                        <label for="php">PHP</label>

                        <input type="checkbox" name="java" value="java" checked id="java">
                        <label for="java">JAVA</label><br>
                </form>
        </fieldset>
    </div>
    <div>
        <fieldset>
            <legend>
                Textarea with CSS
            </legend>
            <label for="note">Note:</label>
                <textarea name="note" id="note" cols="90" rows="5" class="blcolor"><?php echo $note; ?> </textarea>
        </fieldset>
    </div>
    <div>
        <button type="button">ยืนยัน</button>
        <button type="button">กลับหน้าหลัก</button>
        </div>
</body>
</html>