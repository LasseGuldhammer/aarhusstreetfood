<!DOCTYPE html>
<html>

<head>
    <?php include 'include/head.php' ?>
    <title>Kort | Aarhus Street Food</title>
</head>

<body>

    <!-- Hovedmenu -->    
    <?php include 'include/sidebarnav.php' ?>
    
    <!-- Opret en PDO -->
    <?php include 'include/pdo.php' ?>
    
    <?php
        // Hent indholdet fra kitchens tabellen
        $stmt = $conn->prepare("SELECT * FROM kitchens");
        $stmt->execute();
        $kitchens = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    
    <!-- Primært indhold -->
    <main>        
        <img src="img/kort.svg" alt="kort over Aarhus Street Food" class="asf-kort">
        
        <!-- Foreach loop der laver en ordered list med køkkenernes navne -->
        <ol class="navne-liste">
            <?php foreach($kitchens as $kitchen) { ?>
                <li><?php echo $kitchen["name"]; ?></li>
            <?php } ?>
        </ol>
    </main>
    
    
    
    <!-- Footer med kontaktinformation -->
    <?php include 'include/footer.php' ?>

    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="js/menu.js"></script>

</body>
</html>