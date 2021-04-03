<?php 
session_start();
require "./dbConnect.php";
$db = get_db();

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email != "" && $password != ""){

        $sql_query = $db->prepare("select count(*) as cntUser from public.user where email='$email' and password='$password';");
        $sql_query->execute();
        $_SESSION["sql_query"] = $sql_query; 
        

        if($sql_query > 0){
            $userid = $db->prepare("select userid from public.user where email='$email' and password='$password';");
            $userid->execute();
            $_SESSION['userid'] = $userid;
            $userid = $_SESSION['userid'];
            header('Location: ./notecard.php');
        }else{
            echo "Invalid username and password";
        }

    }

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

    <div class="section">
        
        <?php 
            // $user = $db->prepare("SELECT firstname, lastname FROM public.user");
            // $user->execute();
            

            // while ($row = $user->fetch(PDO::FETCH_ASSOC))
            // {
                
            //     $fName = $row['firstname'];
            //     $lName = $row['lastname'];

            //     echo "<p class='user'>$fName $lName<p>";
            // }
        ?>
        <form method="post" action="" >
        <label for="email">Email:</label>
        <input type="text" id="email" name="email"/><br><br>
        <label for="password">Password:</label>
        <input type="text" id="password" name="password"/>
        <input type="submit" value="Login" name="login" id="login"/>
        </form>


    </div>
    


</body>
</html>