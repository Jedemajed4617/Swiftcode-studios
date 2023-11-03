<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validatie van de invoer
    $newUsername = $_POST['new-username'];

    $prohibitedWords = array('homo', 'neger', 'klootzak', 'lesbi', 'nigger', 'cunt', 'n3g3r');

    foreach ($prohibitedWords as $word) {
        if (stripos($newUsername, $word) !== false) {
            $_SESSION['not_allowed'] = true;
            header("location: /profile/profile.php");
            exit;
        }
    }

    if (empty($newUsername)) {
        $_SESSION['username_failed'] = true;
        header("location: /profile/profile.php");
        exit;
    } 

    require_once("../src/db_conn.php");

    $username = $_SESSION['username'];

    // Query om de gebruikersnaam bij te werken
    $sql = "UPDATE accounts SET username = ? WHERE username = ?";
    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("ss", $newUsername, $username);

        if ($stmt->execute()) {
            $_SESSION['username_success'] = true;
            $_SESSION['username'] = $newUsername; // Werk de gebruikersnaam in de sessie bij
        } else {
            $_SESSION['username_failed'] = true;
        }

        $stmt->close();
    }

    $mysqli->close();
    header("location: /profile/profile.php");
} else {
    header("location: /profile/profile.php");
}

?>