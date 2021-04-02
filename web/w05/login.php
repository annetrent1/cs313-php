<?php 
session_start();
require "./dbConnect.php";
$db = get_db();

if(isset($_POST['login'])){

    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    if ($email != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from public.users where email='".$email."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['email'] = $email;
            header('Location: notecard.php');
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
            $user = $db->prepare("SELECT firstname, lastname FROM public.user");
            $user->execute();
            

            while ($row = $user->fetch(PDO::FETCH_ASSOC))
            {
                
                $fName = $row['firstname'];
                $lName = $row['lastname'];

                echo "<p class='user'>$fName $lName<p>";
            }
        ?>
        <form action="" method="post">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="anne@anne.com"><br><br>
        <label for="password">Password:</label>
        <input type="text" id="password" name="password" value="pass">
        <input type="submit" value="Login" name="login" id="login">
        </form>


    </div>
    


</body>
</html>