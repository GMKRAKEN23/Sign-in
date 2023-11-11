<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

   <div class="forme">
    <div class="form_one"></div>
    <div class="form_two"></div>
   </div>

    <div class="container_form">
        <form action="#" method="post">
            <fieldset>
                <legend>Sign In</legend>

                <?php if(isset($errorMsg)): ?>
                <p><?php echo $errorMsg; ?></p>
                <?php endif; ?>
                
                <div class="input_container">
                    <div class="input_field">
                        <label for="pseudo">Pseudo</label>
                        <input type="text" name="pseudo" id="pseudo" require>
                    </div>
                    <div class="input_field">
                        <div class="box_one">
                            <label for="First_name">First name</label>
                            <input type="text" name="first_name" id="First_name" require> 
                        </div>
                        <div class="box_two">
                            <label for="Last_name">Last name</label>
                            <input type="text" name="last_name" id="Last_name" require>
                        </div>
                    </div>
                    <div class="input_field">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="name" require>
                    </div>
                    <div class="input_field">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" require>
                    </div>
                </div>
            </fieldset>
            <button type="submit" name="submit">Send</button>
        </form>
    </div>

</body>
</html>