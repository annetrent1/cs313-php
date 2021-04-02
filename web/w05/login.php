<?php 
session_start();
require "./dbConnect.php";
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
        <form action="" method="" id="login">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="anne@anne.com"><br><br>
        <label for="password">Password:</label>
        <input type="text" id="password" name="password" value="pass">
        <input type="submit" value="login">
        </form>


    </div>
    


</body>
</html>