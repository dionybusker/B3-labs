<!-- jouw HTML voor een Header komt hier... 
Gebruik hier tenminste een header afbeelding en een menu
Zorg dat je in het menu bij elk item een url parameter zet
om te bepalen welke inhoud er ingeladen moet worden in je html
-->
<?php
    include("dbcon.php");
    include_once("index.php");
    // $stmt = $conn->prepare("SELECT * FROM onderwerpen WHERE id = :id");
    // $stmt->execute([':id' => $_GET['id']]);
    // $result = $stmt->fetch();

?>

<img src="./img/windowsxp.png" alt="windows xp">
<ul id="menu">
    <li><a href="index.php?id=<?php echo $result['id']; ?>">Client/Server</a></li>
    <li><a href="index.php?id=<?php echo $result['id']; ?>">PHP</a></li>
    <li><a href="index.php?id=<?php echo $result['id']; ?>">MySQL</a></li>
    <li><a href="index.php?id=<?php echo $result['id']; ?>">PDO</a></li>
</ul>