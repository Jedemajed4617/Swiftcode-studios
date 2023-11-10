<?php
$id = $_GET['id'];
require_once("db_conn.php");

$stmt = $conn->prepare("SELECT * FROM featured WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();

$image_paths = '';
$infotext = '';
$title = '';


while ($row = mysqli_fetch_assoc($result)) {
    $image_paths = $row['IMG'];
    $title  = $row['TITTLE'];
    $infotext = $row['INFOTEXT'];
}

echo '
<section class="sdg">
    <img class="img" src="'.$image_paths.'" alt="sdg cards">
    <article class="sdg">
        <h1>'.$title.'</h1>
        <h2 class="container__h2">'.$infotext.'</h2>
    </article>
</section>
</body>
</html>
';