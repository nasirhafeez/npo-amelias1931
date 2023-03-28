<?php

require 'header.php';

?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>
      <?php echo htmlspecialchars($business_name); ?> WiFi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" href="../assets/styles/bulma.min.css"/>
    <link rel="stylesheet" href="../vendor/fortawesome/font-awesome/css/all.css"/>
    <link rel="icon" type="image/png" href="../assets/images/favicomatic/favicon-32x32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="../assets/images/favicomatic/favicon-16x16.png" sizes="16x16"/>
    <link rel="stylesheet" href="../assets/styles/main.css"/>
    <link rel="stylesheet" href="../assets/styles/style.css"/>
</head>

<body>
<div class="page">

    <div class="head">
        <br>
        <figure id="logo">
            <img src="../assets/images/logo.png">
        </figure>
    </div>

    <div class="main">
        <section class="section">
            <div class="container">
                <div id="login" class="content is-size-5 has-text-centered has-text-weight-bold">
                    Enter your details
                </div>
                <form id="info" method="post" action="connect.php">

                    <div id="login" class="content is-size-6 has-text-weight-bold">Gender</div>

                    <div class="field">
                        <div class="control">
                            <label class="radio">
                                <input type="radio" name="gender" value="male">
                                Male
                            </label>
                            <label class="radio">
                                <input type="radio" name="gender" value="female">
                                Female
                            </label>
                            <label class="radio">
                                <input type="radio" name="gender" value="other">
                                Other
                            </label>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Birthday</label>
                        <div class="control has-icons-left">
                            <input class="input" type="date" name="birthday" required>
                            <span class="icon is-small is-left"><i class="fas fa-birthday-cake"></i></span>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Address</label>
                        <div class="control has-icons-left">
                            <input class="input" type="text" name="street" placeholder="Street Address"
                                   required>
                            <span class="icon is-small is-left"><i class="fas fa-map-marker"></i></span>
                        </div>
                    </div>

                    <div class="field has-addons">
                        <p class="control has-icons-left">
                            <input class="input" type="text" name="city" placeholder="City">
                            <span class="icon is-small is-left"><i class="fas fa-city"></i></span>
                        </p>
                        <p class="control has-icons-left">
                            <input class="input" type="text" name="state" placeholder="State">
                            <span class="icon is-small is-left"><i class="fas fa-globe"></i></span>
                        </p>
                    </div>

                    <div class="buttons is-centered">
                        <button class="button is-dark">Submit</button>
                    </div>
                </form>
            </div>
            <br>
        </section>
    </div>
</div>

</body>
</html>
