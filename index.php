<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Note: This is the home page! -->
        <title>Women Who Can</title>
        <!-- We require the connection class to be able to access it -->
        <?php require('connection.php'); ?>
    </head>
    <body>
    <!-- Just adding these as a test to link the pages -->
        <a href="views/pages/sign_in.php">Sign in</a>
        <a href="controllers/sign_out_controller.php">Sign out</a>
    <!-- This is Peter's example code to decide what page to display -->
    <?php /*
        if (isset($_GET['controller']) && isset($_GET['action'])) {
            $controller = $_GET['controller'];
            $action     = $_GET['action'];
      } else {
            $controller = 'pages';
            $action     = 'home';
      }
    
    require_once('views/layout.php');
        */?>
    </body>
</html>
