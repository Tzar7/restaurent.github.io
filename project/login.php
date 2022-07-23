<?php 
session_start();
$conn=mysqli_connect('localhost','atul','12345','restaurent');
if (!$conn) {
    echo "error in my conn".mysqli_connect_error();
}
if (isset($_POST['submit'])) {
    $emailid=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT * FROM user WHERE email='".$emailid."' AND password='".$password."' limit 1";
    $result=mysqli_query($conn,$sql);

    if (mysqli_num_rows($result)==1) {
        header('location:dashboard.php');
    }else{
        echo "Incorrect Password Or Username";
        exit();
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
          margin-top: 50px;
          margin-right:50px ;
          margin-left:1000px ;
          font-family: 'Patrick hand', cursive;
          font-size: 25px;
          box-shadow: 0 15px 25px rgba(129, 124, 124, 0.2);
          height: 300px;
          border-radius: 5px;
          backdrop-filter: blur(14px);
          background-color: rgba(255, 255, 255, 0.2);
          padding: 10px;
          text-align: center;
          font-weight: 900;


        }
        button {
        	background-color: rgb(199, 162, 107);
        	font-family: 'Patrick Hand',cursive;
    
  
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
                <a href="signup.php"class="btn btn-light" style="border:0px;margin-right: 40px;font-family: 'Patrick Hand', cursive ;">SIGN UP</a>
     
             </div>
         </nav>
<div class="card">
	<div class="card-head">
		<center><h4>LOGIN</h4></center>
	</div>
	<div class="card-body">
		<form method="POST" action="login.php">
                                            <br>
                                            <input type="text" class="form-control" placeholder="Enter Username" name="email" required>
                                            <br>
                                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                                            <br>
                                            <br>
                                            <button type="submit" name="submit" class="button">SUBMIT</button>
        </form>
	</div>
</div>




</body>
</html>