<?php
session_start();
$cart = array();
$_SESSION['cart']=$cart;
?>
<!DOCTYPE html>
<html class="no-js" lang="">
    
<?php include 'include/head.php' ?>
    
<body>
    
    <!-- Hovedmenu -->        
    <?php include 'include/sidebarnav.php' ?>
        
        <!-- Opret en PDO -->
        <?php
            $servername = "localhost";
            $dbname = "asf";
            $username = "admin";
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
                            <div class="product">
                                <h4><?php echo $product["name"]; ?></h4>
                                <p><?php echo $product["price"]; ?></p>
                                <form method="post">               
                                    <input type="hidden" name="id" value="<?php echo $product["id"]; ?>">
                                    <input type="hidden" name="user_id" value="1">
                                    <input type="hidden" name="total_price" value="<?php echo $product["price"]; ?>">
                                    <input id="bestil" type="submit" value="Bestil" name="submit"></form>
                            </div>                        
                        <?php }
                    } ?>                    
            </div>
            <?php } ?>
            </article> 
        </main>
    
        <?php
    
        if(isset($_POST["submit"])){
            
        $stmt = $conn->prepare("INSERT INTO orders (user_id, total_price) 
        VALUES('".$_POST["user_id"]."','".$_POST["total_price"]."')");
        $sonuc = $stmt->execute();
        $LAST_ID = $conn->lastInsertId();
        
        $stmt = $conn->prepare("INSERT INTO products_belong_to_orders (product_id, order_id)
        VALUES('".$_POST["id"]."','".$LAST_ID."')");
        $sonuc = $stmt->execute();        
        
        /*
        $sql = "INSERT INTO orders (user_id, total_price)
    
        VALUES ('".$_POST["user_id"]."','".$_POST["total_price"]."')";
            
        $conn->exec($sql);
            
        $LAST_ID = PDO::lastInsertId;        
            
        $sql = "INSERT INTO products_belong_to_orders (product_id, order_id)
            
        VALUES ('".$_POST["id"]."','".$LAST_ID."')";
            
        $conn->exec($sql);
        */
            
        }
        ?>
        
        <!-- Footer med kontaktinformation -->
      
        <?php include 'include/footer.php' ?>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        
        <script src="js/menu.js"></script>
        
        <script src="js/jquery.modal.min.js" type="text/javascript" charset="utf-8"></script>
    
        <script src="js/kitchens.js"></script>        
    </body>
</html>