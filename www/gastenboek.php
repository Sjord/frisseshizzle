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

$query = "SELECT * FROM entries ";
if ($_GET['entry']) {
    $query .= "WHERE id=$_GET[entry]";
    echo '<a href="gastenboek.php">Toon alle reacties</a>';
}
$query .= " ORDER BY id DESC";

$result = $mysqli->query($query);
if (!$result) {
    echo "Er is iets fout gegaan: ";
    echo $mysqli->error;
}
while ($row = $result->fetch_assoc()) {
    echo "<p class='jumbotron'>";
    if ($row['afbeelding']) {
        echo "<a href='gastenboek.php?entry=$row[id]'><img src='getfile.php?file=$row[afbeelding]' style='max-height: 100px; max-width: 100px;'></a>";
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
