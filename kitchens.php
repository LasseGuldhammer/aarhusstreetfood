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
    </head>
    
    <body>
        
        <!-- Header med fixed logo -->
        <header>
            <img id="asf-logo" class="asf-logo" src="img/logo.png" alt="Aarhus Street Food logo" onclick="toggleNav()">
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
        
        <!-- Create New PDO -->
        <?php
            $servername = "localhost";
            $dbname = "asf";
            $username = "root";
            $password = "";

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


            $stmt = $conn->prepare("SELECT * FROM `kitchens`");
            // var_dump($stmt);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            //var_dump($results);

        ?>
        
        <!-- Primært indhold -->
        <main>            
            <?php foreach($results as $result) { ?>
            <section class="kitchen">
                <img class="kitchen-image" src="img/<?php echo $result["image"]; ?>" alt="<?php echo $result["name"]; ?> billede">
                <h2 class="kitchen-name"><?php echo $result["name"]; ?></h2>
            </section>
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

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        
        <script src="js/menu.js"></script>
        
    </body>
</html>