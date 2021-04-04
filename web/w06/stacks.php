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
    <div class="logout-button"><a href='./logout.php'>Logout</a></div>

    <div class="title">
        <h1>Stacks </h1>
    </div>

    <div class="section">
        <?php foreach ($db->query("SELECT name, stackid FROM public.stack WHERE userid='" . $userid . "';") as $row)
        {
            echo '<div class="item note-item">';
            echo '<div>';
            echo '<a href="./notecards.php?stackid=' . $row['stackid'] . '">' .  $row['name'] . '</a>';
            echo '</div><div>';
            echo '<a class="button-edit" href="./editStack.php?stackid=' . $row['stackid'] . '&name=' . $row['name'] . '"> Edit </a>';
            echo '</div></div>';
        }
        ?>
        <form method="post" action="./insertStack.php">
            <div class="item">
                <label for="addstack">Add New Stack</label>
                <input type="hidden" name="userid" value="<?php echo $userid?>" />
                <input class="input" type="text" id="addstack" name="addstack" />
                <input class="add-button" type="submit" value="+" />
            </div>
        </form>
    </div>


</body>

</html>