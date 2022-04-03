<?php
    include_once 'header.php'
?>

    <section class="loginform">
        <h2>Login</h2>
        <div class="form">
            <form action = "includes/login.inc.php" method = "post">
                <div class="form-group">
                        <label for="email" class="form-label mt-4">Email address</label>
                        <input type="email" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter Email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                        <label for="password" class="form-label mt-4">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                
                <button type="submit" name="submit" class="btn btn-success">Login</button>

                <a href = "register.php"button type="button"  class="btn btn-primary">Register</button> </a>
            </form>
        </div>
    </section>

<?php

    // I TRIED TO MAKE ERROR MESSAGES KASO WAG NA AHHAHAH

    // if(isset($_GET["error"])) {
    //     if ($_GET["error"] == "emptyinput") {
    //         echo "<p> Fill in all fields! </p>";
    //     }
    //     else if ($_GET["error"] == "invaliduid") {
    //         echo "<p> Choose a proper username! </p>";
    //     }
    // }
?>


<?php
    include_once 'footer.php'
?>