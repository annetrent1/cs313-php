<?php require "./dbConnect.php";
$db = get_db();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./notecard.css">
</head>
<body>

    <div class="title">
        <h1>Login <?php echo "Hello"?></h1>
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
    </div>
    <form method="post" action="" name="signin">
        <div class="form-element">
            <label>Username</label>
            <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
        </div>
        <div class="form-element">
            <label>Password</label>
            <input type="password" name="password" required />
        </div>
        <button type="submit" name="login" value="login">Log In</button>
    </form>
    


</body>
</html>