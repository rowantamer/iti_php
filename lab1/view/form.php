<html>
    <head>
        <title> contact form </title>
        <link rel="stylesheet" href="view/style.css">
    </head>

    <body>
   
        <div class="container">
            <!-- code here -->
            <div class="card">
                <div class="card-image">
                <h3> Contact Form </h3>
        <div id="after_submit">
            <?php echo $error ?? NULL ?>
        </div>
                </div>
                <!-- action="./welcome.html" -->
                <form class="card-form"  id="contact_form" action="index.php" method="POST" enctype="multipart/form-data">
                    <div class="input">
                        <input type="text" class="input-field" name="name" placeholder="enter your Name"
                              value="<?php echo  Validate_Form("name") ?>"/>
                    </div>
                    <div class="input">
                        <input type="text" class="input-field" name="email" placeholder="enter your email"  value="<?php echo  Validate_Form("email") ?>"/>
                    </div>
                    <div class="input">
                    <textarea id="message" class="input" name="message" rows="7" cols="30"><?php echo  Validate_Form("message") ?></textarea><br />
                    </div>
                    <div class="action">
                        <button type="submit" class="action-button">Get started</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="./script.js"></script>
    </body>

</html>
