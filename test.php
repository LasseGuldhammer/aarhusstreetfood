<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Forside | Aarhus Street Food</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/normalize.css">    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/jquery.modal.css">
    </head>

<body>
    <!--Call your modal-->
    <a href="#test" data-modal>TEST</a>

    <!--DEMO01-->
    <div id="test" class="modal-wrapper">
        <h2>Modal</h2>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.modal.min.js" type="text/javascript" charset="utf-8"></script>
    
    <script>
        $('a[data-modal]').click(function(event) {
            $(this).modal({
            fadeDuration: 150
        });
            return false;
        });
        
        
    </script>
    
</body>

</html>