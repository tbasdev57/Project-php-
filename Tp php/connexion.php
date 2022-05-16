<?php
$login = "";
$password = "";
if (isset($_POST['login'])) {
    $login = $_POST['login'];
}
if (isset($_POST['password'])) {
    $password = $_POST['password'];
}

if ($login != "" && $password == "") {
    echo "vous avez oublié d'écrire votre mot de passe";
}

if ($login == "" && $password != "") {
    echo "vous avez oublié d'écrire votre login";
}

if ($login == "admin" && $password == "root") {
    $_SESSION["login"] = $login;
}

if (isset($_SESSION["login"])) {
    header('Location: accueil.php');
}

?>

<form action="" method="post">
    <input type="text" name="login" value="<?php echo $login; ?>" />
    <input type="password" name="password" value="<?php echo $password; ?>" />

    <input type="submit" />
</form>