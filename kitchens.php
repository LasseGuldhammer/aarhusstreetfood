<?php
session_start();
$cart = array();
$_SESSION['cart']=$cart;
?>
<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Køkkener | Aarhus Street Food</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/jquery.modal.css">
    </head>
    
    <body>
        
        <!-- Header med fixed logo -->
        <header>
            <img id="asf-logo" class="asf-logo" src="img/logo.png" alt="Aarhus Street Food logo">
        </header>
        
        <!-- Hovedmenu -->
        <nav>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="index.html">Forside</a>
                <a href="kitchens.html">Køkkener</a>
                <a href="#">Kurv</a>
                <a href="#">Kort</a>
                <a href="#">Profil</a>
            </div>
        </nav>
        
        <!-- Opret ny PDO -->
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
        </main>
        
        <!-- Footer med kontaktinformation -->
        <footer>
            <div>
                <p>Åbningstider</p>
            </div>
            <div>
                <p>Adresse</p>
            </div>
            <div>
                <p>E-mail</p>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        
        <script src="js/menu.js"></script>
        
        <script src="js/jquery.modal.min.js" type="text/javascript" charset="utf-8"></script>
    
        <script src="js/kitchens.js"></script>        
    </body>
</html>