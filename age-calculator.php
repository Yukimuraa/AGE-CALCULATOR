<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="agecalculator.css">
</head>
<body>
    <?php
    $result ='';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $birthdate = $_POST['birthdate'];
      
        if(!empty($birthdate)){
            $birthdate = new DateTime($birthdate);
            $today = new DateTime('Today');
            $age = $birthdate->diff($today)->y;
            $result = "Your age is $age years.";
        }else{
            $result = 'Please Enter a valid date';
        }
    }
    ?>
    <h1>AGE CALCULATOR</h1>
    <div class="age-calculator">
        <form action="" method="post">
        <div class="line">
        <input type="date" name="birthdate">
        </div>
        <input type="submit" value="Calculate Age" class="btn">
        <div class="line">
        <input type="text" name="" value="<?php echo htmlspecialchars($result);?>" readonly>
        </div>
        </form>
    </div>
   
</body>
</html>