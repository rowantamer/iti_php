<html>
    <head>
        <title> contact form </title>
        <link rel="stylesheet" href="views/formStyle.css">
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
                    
                    <div class="action">
                        <button type="submit" class="action-button">Get started</button>
                    </div>
                </form>
            </div>
        </div>
    </body>

</html>
