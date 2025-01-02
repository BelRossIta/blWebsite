
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
            <fieldset class="fieldy">
                <div class="form_group">
                    <label for="fname">Enter Your First Name:</label>
                    <input type ="text" name="fname" id="fname" />
                </div>

                <div class="form_group">
                    <label for="lname">Enter Your Last Name:</label>
                    <input type="text" name="lname" id="lname"/>
                </div>

                <div class="form_group">
                    <label for="email">Enter Your Email:</label>
                    <input type="email" name="email" id="email"/>
                </div>

                <div class="form_group">
                    <label for="comment">Enter Your Message:</label>
                    <textarea id="comment" name="comment" row="30" cols="50"></textarea>
                </div>
                <div class="submission">
                    <button class="submit" type="button" >Submit Form</button>
                </div>
                <div class="reset">
                    <button class="reset" type="button">Clear Form</button>
                </div>
            </fieldset>

        </form>
    </main>
    
</body>
<!-- footer -->
<footer>
    <?php include('includes/footer.inc.php') ;?>
</footer>
</html>