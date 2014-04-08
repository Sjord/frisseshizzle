<?php
include('config.php');
$mysqli = new mysqli($server, $username, $password, $database);

if ($_POST['comment']) {
    $comment = $_POST['comment'];
    $afbeelding = $_FILES['userfile']['name'];
    $dest = dirname(__FILE__).'/pics/'.$afbeelding;
    move_uploaded_file($_FILES['userfile']['tmp_name'], $dest);
    $mysqli->query("INSERT INTO entries (afbeelding, comment) VALUES ('$afbeelding', '$comment')");
}

include('header.php'); 

$result = $mysqli->query("SELECT * FROM entries ORDER BY id DESC");
while ($row = $result->fetch_assoc()) {
    echo "<p class='jumbotron'>";
    if ($row['afbeelding']) {
        echo "<img src='getfile.php?file=$row[afbeelding]' style='max-height: 100px; max-width: 100px;'>";
    }
    echo "$row[comment]</p>";
}
?>


<h2>Schrijf ook iets</h2>
<div>
    <form method="POST"  enctype="multipart/form-data">
        <p>
            <textarea name="comment" style="width: 50%; height: 200px"></textarea>
        </p>
        <p>
            Afbeelding: <input type="file" name="userfile">
        </p>
        <input type="submit">
    </form>
</div>
<?php include('footer.php'); ?>
