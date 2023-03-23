<?php
require_once('header.php');
?>

<body class="d-flex flex-column justify-content-between text-center" id="profil">
    <?php
    include_once('nav.php');
    ?>
    <main>
        <div class="d-flex justify-content-center">
            <section class="d-flex w-100">
                <div class="container py-4 d-flex flex-column justify-content-start gap-4">
                    <!-- <h1 class="h1 text-center" id="pageHeaderTitle"><?= $_SESSION['username'] ?></h1> -->
                    <article class="postcard dark red justify-content ">
                        <div class="postcard__img_link">
                           <a href=""> <img class="postcard__img" src="https://mdbcdn.b-cdn.net/img/new/avatars/16.webp" alt="Photo de profil" href="" /></a>
                        </div>
                        <div class="postcard__text align-item-center">
                            <div id="date">
                                <?= date('d F Y') ?>
                            </div>
                            <h2 class="d-flex">REWARDS OBTENUES</h2>
                            <ul class="postcard__tagbox">
                                <img class="rewardIcon" src="assets/pink_diamond.png">
                                <li class="tag__item"> 1809 Points de leagues</li>
                                <img class="rewardIcon" src="assets/money.png">
                                <li class="tag__item"> <img>480 Golds de victoire</li>
                            </ul>
                            <h2 class="d-flex">LEAGUE FAVORITE</h2>
                            <ul class="postcard__tagbox">
                                <li class="tag__item">LEAGUE OF LEGENDS</li>
                            </ul>
                        </div>
                        <div class="postcard__text ">
                            <div class="postcard__bar"></div>
                            <h2 class="d-flex-center">DERNIERS MATCHS</h2>
                            <table class="table table-striped ">
                                <tr>
                                    <th>DATE</th>
                                    <th>LEAGUE</th>
                                    <th>MODE</th>
                                    <th>RANK</th>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                        // //foreach ($matches as $match) {
                                        //     echo '<td>'. $match->date. '</td>';
                                        // //}
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        // foreach ($matches as $match) {
                                        //     echo '<td>'. $match->league->name. '</td>';
                                        // }
                                        ?>

                                    </td>
                                    <td>
                                        <?php
                                        // foreach ($matches as $match) {
                                        //     echo '<td>'. $match->mode. '</td>';
                                        // }
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        // foreach ($matches as $match) {
                                        //     echo '<td>'. $match->rank. '</td>';
                                        // }
                                        ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </article>
                    <div class="d-flex justify-content-between gap-4">
                        <div class="card d-flex">
                            <div class="card-img-top bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="/assets/lol.jpg" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">LEAGUE OF LEGENDS</h5>
                                <button type="button" class="btn btn-primary btn-dark">Stats</button>
                                <button type="button" class="btn btn-secondary btn-outline-dark">Leagues</button>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-img-top bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="/assets/overwatch.jpg" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                </a>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">OVERWATCH</h5>
                                <button type="button" class="btn btn-primary btn-dark">Stats</button>
                                <button type="button" class="btn btn-secondary btn-outline-dark">Leagues</button>
                            </div>
                        </div>
                        <div class="card  ">
                            <div class="card-img-top bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="/assets/cod.jpg" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                </a>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">CALL OF DUTY</h5>
                                <button type="button" class="btn btn-primary btn-dark">Stats</button>
                                <button type="button" class="btn btn-secondary btn-outline-dark">Leagues</button>
                            </div>

                        </div>

                    </div>
                    <div class="d-flex justify-content-center gap-4">
                        <button type="button" class="btn btn-primary btn-dark">Voir toutes les stats</button>
                        <button type="button" class="btn btn-primary btn-dark">Voir toutes les leagues</button>
                    </div>
                </div>

            </section>

        </div>



    </main>
    <?php
    require_once('footer.php');
    ?>

</body>