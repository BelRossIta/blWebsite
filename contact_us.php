<?php include("includes/contact_form_verification.php");?>
<!DOCTYPE html>
<html lang="en">
    <!-- head, meta stuff is in includes file -->
<head>
    <?php
        include('includes/header.inc.php');
    ?>
    <title>Booties 'R' Us</title>
</head>
<!-- body -->
<body>
    <header>
        <?php include('includes/nav.inc.php');?>
    </header>
    <!-- main -->
    <main>
        <form id="contact" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" >
            <div class="form_body">


            </div>
        </form>
    </main>
    
</body>
<!-- footer -->
<footer>
    <?php include('includes/footer.inc.php') ;?>
</footer>
</html>