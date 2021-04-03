<?php
    $name = $_POST['addstack'];
    $userid = $_POST['userid'];
    require "./dbConnect.php";
    $db = get_db();
    
    $query = $db->prepare("INSERT INTO public.stack (userID, name)
        VALUES ( ( SELECT userID FROM public.user 
        WHERE userid=':userid'), 
        ':name');");
    $query->bindValue(':userid', $userid, PDO::PARAM_INT);
    $query->bindValue(':name', $name, PDO::PARAM_STR);
    $query->execute();
    echo "$name";
    echo "$userid";
?>