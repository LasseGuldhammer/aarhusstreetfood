<!DOCTYPE html>
<html class="no-js" lang="">

    
<?php include 'include/head.php' ?>
    
    <body>
        

        
        <!-- Hovedmenu -->
        
<?php include 'include/sidebarnav.php' ?>
        
        <!-- Create New PDO -->
        <?php
            $servername = "localhost";
            $dbname = "asf";
            $username = "admin";
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
            <article id="articlekitchen">
            <?php foreach($results as $result) { ?>
            <section class="kitchen">
                <img class="kitchen-image" src="img/<?php echo $result["image"]; ?>" alt="<?php echo $result["name"]; ?> billede">
                <h2 class="kitchen-name"><?php echo $result["name"]; ?></h2>
            </section>
            <?php } ?>
                </article>
            
         
        </main>
        
        <!-- Footer med kontaktinformation -->
      
        <?php include 'include/footer.php' ?>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        
        <script src="js/menu.js"></script>
        
    </body>
</html>