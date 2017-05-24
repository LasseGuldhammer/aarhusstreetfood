<!DOCTYPE html>
<html>

<head>
    <?php include 'include/head.php' ?>
    <title>Kurv | Aarhus Street Food</title>
</head>

<body>
    
    <!-- Hovedmenu -->    
    <?php include 'include/sidebarnav.php' ?>
    
    <!-- Opret en PDO -->
    <?php include 'include/pdo.php' ?>
    
    <?php
        // Hent alle products i orders fra user 1
        $stmt = $conn->prepare("SELECT p.id, p.name, p.price, o.id, o.user_id FROM products as p INNER JOIN products_belong_to_orders as po ON p.id=po.product_id INNER JOIN orders as o ON po.order_id=o.id WHERE o.user_id='1'");
        $stmt->execute();
        $user_orders = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $stmt = $conn->prepare("SELECT * FROM users");
        $stmt->execute();
        $current_user = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    
    <main class="main-padding">
        <h1>Kurv</h1>
        <h2><?php echo $current_user[0]["name"] ?>s ordrer</h2>
        <table class="ordrer">
        <?php foreach($user_orders as $user_order) { ?>                
            <tr>
                <td>Ordre <?php echo $user_order["id"] ?>:</td>
                <td><?php echo $user_order["name"] ?></td>
                <td>Pris: <?php echo $user_order["price"] ?> kr</td>
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