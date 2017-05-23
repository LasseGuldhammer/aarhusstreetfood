<!DOCTYPE html>
<html>
    
<head>
    <?php include 'include/head.php' ?>
    <title>Køkkener | Aarhus Street Food</title>
</head>
    
<body>
    
    <!-- Hovedmenu -->        
    <?php include 'include/sidebarnav.php' ?>
        
    <!-- Opret en PDO -->
    <?php
        $servername = "localhost";
        $dbname = "asf";
        $username = "root";
        $password = "";

        // Forbind til databasen
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
            }
        catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }

        // Hent indholdet fra kitchens tabellen
        $stmt = $conn->prepare("SELECT * FROM kitchens");
        $stmt->execute();
        $kitchens = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Hent indholdet fra products tabellen
        $stmt = $conn->prepare("SELECT * FROM products");
        $stmt->execute();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
        
    <!-- Alle køkkenerne + modalbokse -->
    <main>
        <article id="articlekitchen">
        <!-- Foreach loop der genererer alle køkkenerne -->
        <?php foreach($kitchens as $kitchen) { ?>
        <a href="#<?php echo $kitchen["id"]; ?>-modal" data-modal>
            <section class="kitchen">
                <img class="kitchen-image" src="img/<?php echo $kitchen["image"]; ?>" alt="<?php echo $kitchen["name"]; ?> billede">
                <h2 class="kitchen-name"><?php echo $kitchen["name"]; ?></h2>
            </section>
        </a>
        <!-- Alle modalboksene  -->
        <div id="<?php echo $kitchen["id"]; ?>-modal" class="modal-wrapper">
            <img class="kitchen-image" src="img/<?php echo $kitchen["image"]; ?>" alt="<?php echo $kitchen["name"]; ?> billede">
            <h2 class="kitchen-name"><?php echo $kitchen["name"]; ?></h2>
            <p><?php echo $kitchen["description"]; ?></p>
                <?php
                // Foreach loop der genererer alle retterne            
                 foreach($products as $product) { 
                    if ($product["kitchen_id"] === $kitchen["id"]) { ?>
                    <div class="product-name">
                        <h4><?php echo $product["name"]; ?></h4>
                    </div>
                    <div class="product-price">
                        <p><?php echo $product["price"]; ?> kr</p>
                    </div>
                    <!-- En form med skjult "type", der leverer brugbar information til databasen, men er skjult for kunden. -->
                    <div class="product-order">
                        <form method="post">
                            <input type="hidden" name="id" value="<?php echo       $product["id"]; ?>">
                            <input type="hidden" name="user_id" value="1">
                            <input type="hidden" name="total_price" value="<?php echo $product["price"]; ?>">
                            <td><input class="bestil" type="submit" value="Bestil" name="submit"></td>
                        </form>
                    </div>
                    <?php }
                } ?> 
        </div>
        <?php } ?>
        </article> 
    </main>    
    
    <!-- 2 statements der henholdsvis sender user_id og total_price til tabellen orders. Og sender product_id og order_id ind i products_belong_to_orders. -->
    <?php    
    if(isset($_POST["submit"])){

    $stmt = $conn->prepare("INSERT INTO orders (user_id, total_price) 
    VALUES('".$_POST["user_id"]."','".$_POST["total_price"]."')");
    $sonuc = $stmt->execute();
    $LAST_ID = $conn->lastInsertId();

    $stmt = $conn->prepare("INSERT INTO products_belong_to_orders (product_id, order_id)
    VALUES('".$_POST["id"]."','".$LAST_ID."')");
    $sonuc = $stmt->execute();}
    ?>
        
    <!-- Footer med kontaktinformation -->
    <footer>
        <p>Aarhus Street Food</p>
        <p>Mad Mad Mad Mad</p>
        <p>Tlf: 12 34 56 78 </p>
        <p>Email: aarhusstreetfood@gmail.com</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script src="js/menu.js"></script>

    <script src="js/jquery.modal.min.js" type="text/javascript" charset="utf-8"></script>

    <script src="js/kitchens.js"></script>        

</body>
</html>