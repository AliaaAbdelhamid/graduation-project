<?php 
session_start();
include('database.php'); 
?>
<head>
    <tittle> </tittle>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/login style.css">
</head>

<body >
    <div class="login-form">
        <h1>Login Form</h1>
        <?php 
            if(isset($_POST['login']))
            {
                $sql="select * from parent where  email='{$_POST["user"]}' and password='{$_POST["password"]}'";
                $res=$dp->query($sql);
                if($res->num_rows>0)
                {
                    $ro=$res->fetch_assoc();
        
                        $_SESSION["name"]=$ro["name"];
                        $_SESSION["class_id"]=$ro["class_id"];
                        $_SESSION["student_id"]=$ro["student_id"];
                        
                   
                    echo"<script>window.open('Profile.php','_self');</script>";

                }
                else
                {
                    echo " <div class='error'> Invalid User or password</div>";
                }
            }
        ?>
        <form id=login_form action=<?php echo $_SERVER["PHP_SELF"];?> method="POST">
            <p>User Name</p>
            <input type="text" id="user" name="user" placeholder="User Name">

            <p> Password</p>
            <input type="password" id="password" name="password" placeholder="Password">
            <button type="submit" name="login">Login</button>
        </form>


    </div>

  </body>
</html>
<script>
</script>