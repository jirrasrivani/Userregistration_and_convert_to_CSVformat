<?php 
  if(isset($_POST['name'])){
     $db="arcode_Harry";
     $server="localhost:3307";
     $username="root";
     $password="jirrasrivani";
    
     $con=mysqli_connect($server,$username,$password,$db);
     if(!$con)
     {
         die("Connection to this database failed due to " .
         mysqli_connect_error());
     }
     $name=$_POST['name'];
     $age=$_POST['age'];
     $email=$_POST['email'];
     $phone=$_POST['phone'];
     $desc=$_POST['desc'];
     $sql="INSERT INTO `arcode_first_php` (`name`, `age`, `email`, `phone`, `other`,`dt`) VALUES ('$name','$age','$email','$phone','$desc','current_timestamp()');";
    //  echo "successfully connected to db";

    // echo $sql;
    if($con->query($sql)==true)
    {
        // echo "Successfully inserted";
    }
    else
    {
        echo "Error : $sql <br> $con->error"; 
    }
    $con->close();
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="image1.jpeg" alt="Arcode">

    <div class="container">
        <h3>
            Welcome to Arcode 
        </h3>
        <p>
            Enter your details to confirm your particiipation 
        </p>
       
       <p class= "submit-msg"> Thanks for submitting the form </p>";
        

        <form action="index.php" method="post">
                <input type="text" name="name" id="name" placeholder="Enter your name">
                <input type="number" name="age" id="age" placeholder="Enter your age">    
                <input type="email" name="email" id="email" placeholder="Enter your email">        
                <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">     
                <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter other information">
                </textarea>                   
                <button class="btn">Submit</button>
                <!-- <button class="btn">Reset</button> -->
        </form>
        <script src="index.js"></script>
    </div>
</body>
</html>