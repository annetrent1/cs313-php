<?php
    // $stackid = $_POST['stackid'];
    $stackid = 1;
    require "./dbConnect.php";
    $db = get_db();
    
    // $query = $db->prepare("INSERT INTO public.stack (userID, name)
    //     VALUES ( ( SELECT userID FROM public.user 
    //     WHERE userid=:userid), 
    //     :name);");
    // $query->bindValue(':userid', $userid, PDO::PARAM_INT);
    // $query->bindValue(':name', $name, PDO::PARAM_STR);
    // $query->execute();
    // header("Location: ./stacks.php");
    // die();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./notecard.css">
</head>
<body>

    <div class="title">
        <h1>Create New Notecard</h1>
    </div>

    <div class="section">
        <form method="post" action="" >
            <div class="input-container">
                <div class="input-section">
                    <label for="descriptionfront">Front</label>
                    <input class="input" type="text" id="descriptionfront" name="descriptionfront"/>
                </div>
                <div class="input-section">
                    <label for="descriptionback">Back</label>
                    <input class="input" type="text" id="descriptionback" name="descriptionback"/>
                </div>
                <div class="button-section">
                    <input class="add-button" type="submit" value="Submit"/>
                </div>
            </div>
        </form>
    </div>


</body>
</html>