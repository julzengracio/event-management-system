<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
            span.error{
                color: red;
            }            
        </style>  
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class ="col-md-6 col-md-offset-3">
                    <?php
                    if (isset($errorMessage))
                        echo "<p>$errorMessage</p>";
                    ?>
                    <form action="login.php" method="POST"><!--form-->
                        <div class = "form-group">
                            <!--username field-->
                            <label for="username">Username: </label>
                            <input type="text"
                                   name="username"
                                   class="form-control"
                                   value="<?php if (isset($formdata['username'])) echo $formdata['username']; ?>"
                                   />
                            <span class = "error"><!--error message for invalid input-->
                                <?php if (isset($errors['username'])) echo $errors['username']; ?>
                            </span>
                        </div>
                        <div class = "form-group">
                            <!--password field-->
                            <label for="password">Password: </label>
                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   value=""
                                   />
                            <span class = "error"><!--error message for invalid input-->
                                <?php if (isset($errors['password'])) echo $errors['password']; ?>
                            </span>
                        </div>
                        <button type = "submit" class = "btn btn-default">Login</button>
                    </form>
                </div><!--col md 6 div-->
            </div><!--container div-->
        </div><!--content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
