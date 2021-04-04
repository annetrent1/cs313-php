<?php 
    session_start();
    require "./dbConnect.php";
    $db = get_db();
    $userid = $_SESSION['userid'];
    $_SESSION['userid'] = $userid;
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./notecard.css">
</head>

<body>
    <a href='./logout.php'>Logout</a>

    <div class="title">
        <h1>Stacks </h1>
    </div>

    <div class="section">
        <?php foreach ($db->query("SELECT name, stackid FROM public.stack WHERE userid='" . $userid . "';") as $row)
        {
            echo '<p class="item"><a href="./notecards.php?stackid=' . $row['stackid'] . '">' .  $row['name'] . '</a> </p>';
        }
        ?>
        <form method="post" action="./insertStack.php">
            <div class="item">
                <label for="addstack">Add New Stack</label>
                <input type="hidden" name="userid" value="<?php echo $userid?>" />
                <input class="input" type="text" id="addstack" name="addstack" />
                <div class="button-section">
                    <input class="add-button" type="submit" value="+" />
                </div>
            </div>
        </form>
    </div>


</body>

</html>