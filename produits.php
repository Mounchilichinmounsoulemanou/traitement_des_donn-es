<?php
 require_once("templates/header.php");
 $products = [
    "Robes",
    "Chemise Rouge",
    "Pantalon",
    "Culotte",
    "Jean",
    "Chapeau"
];

$name = isset($_GET["name"]) ? $_GET["name"] : null;

?>



<div class="container">
    <h1>
        <?php echo $name ? $name : "Page produits"; ?>
    </h1>
    <ul>
        <?php
        foreach ($products as $key => $name) {
            echo '<li><a href="produits.php?name='.$name.'">'.$name.'</a></li>';
        }
        ?>
        
    </ul>

</div>

<?php require_once("templates/footer.php") ?>