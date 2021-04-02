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
        <h1>Login <?php echo "Hello" ?></h1>
    </div>

    <div class="section">
        <?php 
            $users = $db->query('SELECT firstname, password FROM public.user')
            foreach ($users)
            {
                echo "<p class='user'> $row['firstname'] </p>";
                echo '<br/>';
            }
        ?>
    </div>


</body>
</html>