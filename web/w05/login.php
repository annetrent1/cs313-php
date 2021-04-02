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
            foreach ($db->query('SELECT firstname, password FROM public.user') as $row)
            {
                echo 'user: ' . $row['firstname'];
                echo '<br/>';
            }
            $user = $db->prepare("SELECT firstname, lastname FROM public.user");
            $user->execute();

            // Go through each result
            while ($row = $user->fetch(PDO::FETCH_ASSOC))
            {
                
                $fName = $row['firstname'];
                $lName = $row['lastname'];

                echo "<p>$fName $lName<p>";
            }
        ?>
    </div>


</body>
</html>