<?php
    $servername='localhost';
    $username='root';
    $password='1234';
    $dbname = "credentials";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }


if(isset($_POST['submit']))
{    
     $food = $_POST['fooditem'];
     $qty = $_POST['qty'];
     $sql = "INSERT INTO food (food,quantity)
     VALUES ('$food','$qty')";
     mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet">

    <style type="text/css">
        .box1 {
            padding: 100px;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            background-image: url(blue_bg.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            position: fixed;
        }

        h1{
            color: rgb(255, 255, 255);
            font-family: teko;
            font-size: 80px;
            position: absolute;
            bottom: 400px;
            left: 470px;
            text-shadow: 3px 3px 3px gray
        }

        .button-73 {
            appearance: none;
            background-color: #FFFFFF;
            border-radius: 40em;
            border-style: none;
            box-shadow: #ADCFFF 0 -12px 6px inset;
            box-sizing: border-box;
            color: #000000;
            cursor: pointer;
            display: inline-block;
            font-family: -apple-system, sans-serif;
            font-size: 1.2rem;
            font-weight: 700;
            letter-spacing: -.24px;
            margin: 0;
            outline: none;
            padding: 1rem 1.3rem;
            quotes: auto;
            text-align: center;
            text-decoration: none;
            transition: all .15s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .button-73:hover {
            background-color: #FFC229;
            box-shadow: #FF6314 0 -6px 8px inset;
            transform: scale(1.125);
        }

        .button-73:active {
            transform: scale(1.025);
        }

        @media (min-width: 768px) {
            .button-73 {
                font-size: 1.5rem;
                padding: .75rem 2rem;
            }
        }

        p {
            color: rgb(255, 255, 255);
            font-family: teko;
            font-size: 80px;
            position: absolute;
            bottom: 60px;
            left: 680px;
            text-shadow: 3px 3px 3px gray
        }

        .active {
            font-family: -apple-system, sans-serif;
            font-size: 1.2rem;
            font-weight: 700;
            letter-spacing: -.24px;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="box1">

        <h1> Thank you for you donation! </h1>

        <br><br><br><br><br><br><br><br><br>
        <img src="logo1.png" height="300px" width="300px">
        <p>QUIKARE</p>

        <br><br><br><br><br>
    </div>
 
</body>

</html>