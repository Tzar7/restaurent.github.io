<?php 

$conn=mysqli_connect('localhost','atul','12345','restaurent');
if (!$conn) {
    echo "error in my conn".mysqli_connect_error();
}
if(isset($_POST['submit'])) {
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $telephone=mysqli_real_escape_string($conn,$_POST['telephone']);

    $sql="INSERT INTO user(name,email,telephone,password) VALUES('$name','$email','$telephone','$password')";

    if (mysqli_query($conn,$sql)) {
        header('location: login.php');
    }else{
        echo "error".mysqli_error($conn);
    }
}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Festive&family=Varela+Round&display=swap" rel="stylesheet">
    <style>
        body{
            background-image: url('back.png');
            
        }
        .card{
          margin-top: 80px;
          margin-right:800px ;
          margin-left:500px ;
          font-family: 'Patrick hand', cursive;
          font-size: 20px;
          box-shadow: 0 15px 25px rgba(129, 124, 124, 0.2);
          height: 500px;
          width: 400px;
          border-radius: 2px;
          backdrop-filter: blur(14px);
          background-color: rgba(255, 255, 255, 0.2);
          padding: 10px;
          text-align: center;
          font-weight: 900;


        }
        button {
        	background-color: rgb(245, 226, 181);
        	font-family: 'Patrick Hand',cursive;
            margin-top: 20px;
    
  
        }
        input {
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
            text-align: left;
            width: 350px;
            line-height: 25px;
            margin-bottom: 0px; 
            height: 50px;
            flex: 0 0 800px;
            margin-left: 0px;
            border-radius: 5px;
        }
    </style>

</head>
<body>
	<nav class="navbar">
            <a href="index.html">
             <img src="cofee.jpg"  style="border-radius: 50%;"  width="100" height="100" class="d-inline-block align-top" alt=""></a>
             <center><h1 style="font-family: 'Festive', cursive;font-size: 50px;"><b>BROWN & SUGAR</b></h1></center>
             
             <div class="d-flex justify-content-end">
             
                 
                <a href="about.html"class="btn btn-light" style="border:0px;margin-right: 40px;font-family: 'Patrick Hand', cursive;">CONATCT US</a>
                <a href="login.php"class="btn btn-light" style="border:0px;margin-right: 40px;font-family: 'Patrick Hand', cursive ;">LOGIN</a>
     
             </div>
         </nav>
         <form action="signup.php" method="POST">
         	<div class="card">
         		<div class="card-head">
         			<h3>SIGN UP!</h3>
         		</div>
                <div class="card-body">
                    <input type="text" name="name" placeholder="NAME" required><br>
                    <input type="numbers" name="telephone" placeholder="MOBILE NUMBER" required>
                    <br>
                    <input type="email" name="email" placeholder="EMAIL" required>
                    <br>
                    <input type="password" name="password" placeholder="PASSWORD" required>
                    <br>
                    <center>
                        <button><input type="submit" name="submit"  class="btn brand z-depth-0"></button>
                    </center>
                </div>
         	</div>
         </form>



</body>
</html>
