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
        
        <!-- Opret ny PDO -->
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
        

        <!-- Primært indhold -->
        <main>
            <article id="articlekitchen">
            <?php foreach($results as $result) { ?>
            <section class="kitchen">
                <img class="kitchen-image" src="img/<?php echo $result["image"]; ?>" alt="<?php echo $result["name"]; ?> billede">
                <h2 class="kitchen-name"><?php echo $result["name"]; ?></h2>
            </section>

        <!-- Alle køkkenerne + modalbokse -->
        <main>
            <!-- Foreach loop der genererer alle køkkenerne -->
            <?php foreach($kitchens as $kitchen) { ?>
            <a href="#<?php echo $kitchen["id"]; ?>-modal" data-modal>
                <section class="kitchen">
                    <img class="kitchen-image" src="img/<?php echo $kitchen["image"]; ?>" alt="<?php echo $kitchen["name"]; ?> billede">
                    <h2 class="kitchen-name"><?php echo $kitchen["name"]; ?></h2>
                </section>
            </a>
            <!-- Foreach loop der genererer alle modalbokse  -->
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
                                <button>Bestil</button>
                            </div>
                        <?php }
                    } ?>
            </div>

            <?php } ?>
                </article>
            
         
        </main>
        
        <!-- Footer med kontaktinformation -->
      
        <?php include 'include/footer.php' ?>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        
        <script src="js/menu.js"></script>
        
        <script src="js/jquery.modal.min.js" type="text/javascript" charset="utf-8"></script>
    
        <script src="js/kitchens.js"></script>        
    </body>
</html>