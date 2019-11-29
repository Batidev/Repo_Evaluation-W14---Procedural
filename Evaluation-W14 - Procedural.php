<?php

session_start();

if(empty($_SESSION['contacts'])){
    $_SESSION['contacts']= [];
}

if (!empty($_POST)){
    $librairie= [
        "name"      => $_POST["text"],
        "firstName" => $_POST["text"],
        "gsm"       => $_POST["text"],
        "email"     => $_POST["email"]
    ];

    array_push($_SESSION["contacts"], $librairie);
}


if (!empty($_SESSION["contacts"]) && count($_SESSION["contacts"])):?>
    <ul id="contacts">
        <?php foreach($_SESSION["contacts"] as $key => $contact): ?>
            <li class="">
                <div class=""><?php echo $contact["name"];?></div>
                <div class=""><?php echo $contact["firstname"];?></div>
                <div class=""><?php echo $contact["gsm"];?></div>
                <div class=""><?php echo $contact["email"];?></div>
            </li>
        <?php endforeach; ?>
    </ul>
<?php
endif;
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="eval.php" method="POST">
        <div>
            <div>
                <label for="">Nom</label>
                <input type="text" name="name">
            </div>               
            <div>
                <label for="">Prénom</label>
                <input type="text" name="firstName">
            </div>
            <div>
                <label for="">Téléphone</label>
                <input type="text" name="gsm">
            </div>
            <div>
                <label for="">Email</label>
                <input type="emai" name="email">
            </div>
            <button type="submit">Envoyer</button>
        </div>
    </form>
</body>
</html>