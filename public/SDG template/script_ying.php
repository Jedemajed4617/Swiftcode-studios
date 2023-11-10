<?php
$id = $_GET['id'];
require_once("db_conn.php");

$stmt = $conn->prepare("SELECT * FROM featured WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();
$sdg = mysqli_fetch_assoc($result);

echo '
<section class="sdg">
    <img class="img" src="'.$sdg["IMG"].'" alt="sdg cards">
    <article class="sdg">
        <h1>'.$sdg["TITTLE"].'</h1>
        <h2 class="container__h2">'.$sdg["INFOTEXT"].'</h2>
    </article>
</section>
';