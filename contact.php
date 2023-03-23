<?php
require_once('header.php');
?>

<body class="d-flex flex-column justify-content-between text-center">
    <?php
    include_once('nav.php');
    ?>
    <style>
        form {
            color: lightblue;
        }
    </style>
    <main class="text-warning text-opacity-75 text-center">
        <form action="" method="post" class="container w-25">


            <!-- Name input -->
            <div class="form-outline form-white mb-4">
                <input type="text" id="username" class="form-control" name="username" />
                <label class="form-label" for="username">Username</label>
            </div>

            <!-- Email input -->
            <div class="form-outline form-white mb-4">
                <input type="email" id="email" class="form-control" name="email" />
                <label class="form-label" for="email">Email address</label>
            </div>
            <div>
                <label class="" for="sujet" name="sujet" style="margin-left:0;">Sujet :</label>
                <select id="sujet" name="Sujet" class="form-select form-dark btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <option value="leagues"><?= TXT_FOOTER_LEAGUES ?></option>
                    <option value="matchup"><?= TXT_FOOTER_MATCHUP ?></option>
                    <option value="rewards"><?= TXT_FOOTER_REWARDS ?></option>
                </select>
            </div>
            <div class="form-outline form-white mb-4" style="padding-top:10px; margin-top:10px
            ">
                <input type="text" id="message" class="form-control" name="message" style="margin-top: 10px;" />
                <label class="form-label" for="message">Your message</label>
            </div>

            <!-- Checkbox -->
            <div class="">
                <input class="form-check-input" type="checkbox" value="" id="form5Example3" name="terms" checked />
                <label class="form-check-label" for="form5Example3">
                    I have read and agree to the terms
                </label>
            </div>


            <!-- Submit button -->

            <button type="submit" class="btn btn-warning btn-block" style="margin-bottom: 15px;">Envoyer</button>
            <?php
            if (isset($_POST['username'], $_POST['email'], $_POST['message'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $message = $_POST['message'];


                echo '<script>alert("Merci ' . $username . ' de nous avoir contacté !\n\nNous t\'apporterons une réponse à l’adresse ' . $email . ' dans les plus brefs délais :\n\n' . $message . '");</script>';
            }

            ?>
        </form>
    </main>


    <?php
    include_once('footer.php');
    ?>


    </script>
</body>