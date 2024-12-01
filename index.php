<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manish gym</title>
    
</head>
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<style>
    body{
        color:white;
        margin:0px;
        padding:0px;
        background-image:url(img.jpg);

       
    }
    .left{ 
        display:inline-block;
        /* border: 2px solid red; */
        position: absolute;
        left:34px;
        top:20px;

    }
    .left img{
        width: 136px;
        filter:invert(100%);
    }
    .left div{
        text-align:center;
        line-height: 19px;
        font-size:26px;
    }
    .mid{
        display:block;
        width:40%;
        margin:29px auto;
        /* border:2px solid green; */
        font-size: 20px;

    }
    .right{
        position: absolute;
        right: 34px;
        top:43px;
        display:inline-block;
        /* border:2px solid yellow */

    }
    .navbar{
        display:inline-block;
        font-family: cursive;
        

    }
    .navbar li{
        color:white;
        display:inline-block;
        

    }
    .navbar li a{
        color:white;
        text-decoration: none;
        padding:34px 15px;
    }
    .navbar li a:hover,.navbar li a.active{
        color:chocolate;
        text-decoration:underline;
        
    }
    .btn{
        font-family:cursive;
        margin:0px 9px;
        background-color: black;
        color:white;
        padding: 4px 14px;
        border:2px solid grey;
        border-radius: 20px;
      cursor: pointer;
    }
    .btn:hover{
        background-color:aqua;
    }
    .container{
        border:2px solid white;
        margin:106px 80px;
        padding:75px;
        width:33%;
        border-radius: 28px;

    }
    .form-group input{
        font-family:cursive;
        text-align: center;
        display:block;
        width:508px;
        border-radius:8px;
        padding:1px;
        border:2px solid black;
        margin:11px auto;
        font-size: 27px;

    }
    .container h1{
        text-align:center;
    }
    .container button{
        display:block;
        width:74%;
        margin:20px auto;
    }


</style>
<body>
    <header class="header">
        <div class="left">
            <img src="logoimg.jpg" alt="error">
            <div>Manish fitness</div>
            

        </div>
        <div class="mid">
            <ul class="navbar">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="https://www.fulcrumfitness.com/blog/10-benefits-of-going-to-the-gym "target="_blank">About us</a></li>
                <li><a href="https://www.calculator.net/bmi-calculator.html "target="_blank">Fitness calculator</a></li>
                <li><a href="https://mail.google.com/mail/u/0/#inbox"target="_blank">Contact us</a></li>
            </ul>


        </div>
        <div class="right">
            <button class="btn">call us now</button>
            <button class="btn">Email us</button>

        </div>
    </header>
    <div class="container">
        <h1>Join the best gym in delhi now</h1>
        <form action="index.php" method="post">
            <div class="form-group">
            <input type="text"name="txtname" placeholder=" name">
            </div>
            <div class="form-group">
                <input type="text"name="txtage" placeholder=" age">
                </div>
                <div class="form-group">
                    <input type="text"name="txtgend" placeholder=" Gender">
                    </div>
                    <div class="form-group">
                        <input type="text"name="txtlocality" placeholder=" Locality">
                        </div>
                        <button class="btn" name="btnsubmit">Submit</button>
                        <?php
if (isset($_POST["btnsubmit"])) 
    $name = $_POST["txtname"];
    $age = $_POST["txtage"];
    $gender = $_POST["txtgend"];
    $Locality = $_POST["txtlocality"];

    $mycon = mysqli_connect("localhost", "root", "", "prashant", 3307);

    
    $sql = "INSERT INTO vikas (name, age, gender, locality) VALUES (?, ?, ?, ?)";
    $ps = $mycon->prepare($sql);
   
        $ps->bind_param("siss", $name, $age, $gender, $Locality);
        
      
    $mycon->close();
    

?>


        </form>
    </div>
    
</body>
</html>