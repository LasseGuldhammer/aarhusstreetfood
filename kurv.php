<!DOCTYPE html>
<html class="no-js" lang="">

<?php include 'include/head.php' ?>

<body>
    
    <!-- Hovedmenu -->
    
<?php include 'include/sidebarnav.php' ?>
    
    <!-- Primært indhold -->
    
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

            // Hent alle products i orders fra user 1
            $stmt = $conn->prepare("SELECT p.id, p.name, p.price, o.id, o.user_id FROM products as p INNER JOIN products_belong_to_orders as po ON p.id=po.product_id INNER JOIN orders as o ON po.order_id=o.id WHERE o.user_id='1'");
            $stmt->execute();
            $user_orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            $stmt = $conn->prepare("SELECT * FROM users");
            $stmt->execute();
            $current_user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        ?>
    
        <main>
            <h1>Kurv</h1>
            <h2><?php echo $current_user[0]["name"] ?>s ordrer</h2>
            <table id="ordrer">
            <?php foreach($user_orders as $user_order) { ?>                
                <tr>
                    <td>Ordre <?php echo $user_order["id"] ?>:</td>
                    <td><?php echo $user_order["name"] ?></td>
                    <td>Pris: <?php echo $user_order["price"] ?></td>
                </tr>
            <?php } ?>
            </table>
        </main>
    
    
    
    <!-- Footer med kontaktinformation -->
      <?php include 'include/footer.php' ?>

    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="js/menu.js"></script>
</body>

</html>