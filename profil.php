<!DOCTYPE html>
<html class="no-js" lang="">

<?php include 'include/head.php' ?>

<body id="background1">
    

 

    <!-- Hovedmenu -->
    
<?php include 'include/sidebarnav.php' ?>
    
    <!-- Primært indhold -->
    
    
    <main class="main-padding">
      <div id="login">
            <div>
                <form action="forside.php" method="POST">
                    <input type="text" name="username" placeholder="Brugernavn" class="inp0">
                    <br>
                    <input type="password" name="password" placeholder="Password" class="inp0">
                    <br>
                    <input type="submit" name="login" value="Login" class="inp1"> 
                    <input type="submit" name="opretbruger" value="Opret bruger" class="inp1"> 
                </form>
            </div>
        </div>
    </main>
    
    
    <!-- Footer med kontaktinformation -->
       <footer class="footerforside">
 
    <p>Aarhus Street Food</p> <p> Mad Mad Mad Mad</p> <p> Tlf: 12 34 56 78 </p> <p> Email: aarhusstreetfood@gmail.com </p>
   
</footer>

    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="js/menu.js"></script>
</body>

</html>