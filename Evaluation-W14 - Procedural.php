<?php
include 'header_eval.php';

session_start();

$contacts = ['name', 'firstName', 'gsm', 'email'];

if(empty($_SESSION["recuper-donnees-formulaire.php"])){
    $_SESSION["recuper-donnees-formulaire.php"]= [];
}

if (!empty($_POST['name']) && !empty($_POST['firstName']) && !empty($_POST['gsm']) && !empty($_POST['email'])){
        $userName = $_POST['name'];
        $userFirstname = $_POST['firstName'];
        $gsm = $_POST['gsm'];
        $userEmail = $_POST['email'];

} else {

?>
    <h1>Répertoire</h1>
    <form action="recuper-donnees-formulaire.php" method="POST">
        <div>
            <div class="col-6">
                <label for="name">Nom</label>
                <input type="text" name="name">
            </div>               
            <div class="col-6">
                <label for="firstName">Prénom</label>
                <input type="text" name="firstName">
            </div>
            <div class="col-6">
                <label for="gsm">Téléphone</label>
                <input type="text" name="gsm">
            </div>
            <div class="col-6">
                <label for="email">Email</label>
                <input type="emai" name="email">
            </div>
            <button type="submit">Envoyer</button>
        </div>
    </form>
</body>
</html>

<?php
}