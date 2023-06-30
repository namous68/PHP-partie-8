<?php
    setcookie('user', json_encode($userInfo), time() + 86400); // Expire après 1 jour


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $age = $_POST['age'];

    $userinfo = [
        'lastname' => $lastname,
        'firstname' => $firstname,
        'age' => $age
    ];

   
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modifier le Cookie</title>
</head>
<body>
    <h1>Modifier le Cookie</h1>
    <form method="POST">
        <label for="lastname">Nom :</label>
        <input type="text" id="lastname" name="lastname" required><br>

        <label for="firstname">Prénom :</label>
        <input type="text" id="firstname" name="firstname" required><br>

        <label for="age">Âge :</label>
        <input type="number" id="age" name="age" required><br>

        <input type="submit" value="Enregistrer">
    </form>
</body>
</html>
