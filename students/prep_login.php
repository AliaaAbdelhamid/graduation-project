<?php 
session_start();
include('database.php'); 

?>
<head>
    <tittle> </tittle>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/login prep style.css">
</head>


    <div class="login-form">
        <h1>Login Form</h1>
        <?php 
       
            if (isset($_POST['login']))
             {
                $sql="select * from student where email='{$_POST["user"]}' and password='{$_POST["password"]}' and year='preparatory'";
                $res=$dp->query($sql);
                if ($res->num_rows>0) {
                    $ro=$res->fetch_assoc();
                
                    $_SESSION["student_id"]=$ro["student_id"];
                    $_SESSION["email"]=$ro["email"];
                    $_SESSION["class_id"]=$ro["class_id"];
                    $_SESSION["section_id"]=$ro["section_id"];
                    $_SESSION["year"]=$ro["year"];
                    
               
                    echo"<script>window.open('student_profile.php','_self');</script>";
           } 
                 else {
                    echo " <div class='error'> Invalid User or password</div>";
                }
            }
         ?>
         <form id=login_form action=<?php echo $_SERVER["PHP_SELF"];?> method="POST">
            <p>User Name</p>
            <input type="text" id="user" name="user" placeholder="Email">

            <p> Password</p>
            <input type="password" id="password" name="password" placeholder="Password">
            <button type="submit" name="login">Login</button>
        </form>


    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
     
  </body>
</html>