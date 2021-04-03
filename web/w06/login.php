<?php 
require "./dbConnect.php";
$db = get_db();

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    foreach ($db->query("SELECT userid FROM public.user WHERE email='" . $email . "';") as $row)
    {
        $userid = $row['userid'];
    }

    if ($email != "" && $password != ""){

        $sql_query = $db->prepare("select count(*) as cntUser from public.user where email='" . $email . "' and password='" . $password . "';");
        $sql_query->execute();
        
        if($sql_query > 0){
            $userid = "";
            foreach ($db->query("SELECT userid FROM public.user WHERE email='" . $email . "';") as $row)
            {
                $userid = $row['userid'];
            }
            session_start();
            $_SESSION["userid"] = $userid; 
            header('Location: ./stacks.php');
            die();
        }else{
            echo "Invalid username and password";
        }

    }

}
if(isset($_POST['register'])){
    header('Location: ./registerUser.php');
    die();
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./notecard.css">
</head>
<body>

    <div class="title">
        <h1>Login</h1>
    </div>

    <div class="login">
        <form method="post" action="" >
            <div class="input-section">
                <label for="email">Email:</label>
                <input class="input" type="text" id="email" name="email"/>
            </div>
            <div class="input-section">
                <label  for="password">Password:</label>
                <input class="input" type="text" id="password" name="password"/>
            </div>
            <div class="button-section">
                <input class="login-button" type="submit" value="Register" name="register" id="register"/>
                <input class="login-button" type="submit" value="Login" name="login" id="login"/>
            </div>
        </form>

    </div>

</body>
</html>