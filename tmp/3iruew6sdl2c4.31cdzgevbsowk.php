<!--
 * Created in PhpStorm
 * @author Brian Kiehn
 * @date 1/27/2020
 * @version 2.0
 * profile.html
 * https://github.com/medioxumate/dating2b.git
 * GreenRiverDev
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--custom style sheet-->
    <link rel="stylesheet" href="styles/styles.css"/>

    <title>Profile</title>
</head>
<body>

    <section class ="container-fluid">
        <div class ="card">
            <div class="card-header">
                <h1>Your Profile</h1>
            </div><!--end card-header-->
            <div class ="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class = "card-body">
                                <ul class ="list-group list-group-flush">
                                    <li class="list-group-item">Name: <?= ($SESSION['fn']) ?> <?= ($SESSION['ln']) ?></li>
                                    <li class ="list-group-item">Gender: <?= ($SESSION['g']) ?></li>
                                    <li class ="list-group-item">Age: <?= ($SESSION['age']) ?></li>
                                    <li class ="list-group-item">Phone: <?= ($SESSION['ph']) ?></li>
                                    <li class ="list-group-item">Email: <?= ($SESSION['em']) ?></li>
                                    <li class ="list-group-item">State: <?= ($SESSION['st']) ?></li>
                                    <li class ="list-group-item">Seeking: <?= ($SESSION['sk']) ?></li>
                                    <li class ="list-group-item">Interests:
                                        <?php foreach (($SESSION['in']?:[]) as $indoor): ?>
                                            <?= ($indoor)."
" ?>
                                        <?php endforeach; ?>
                                        <?php foreach (($SESSION['out']?:[]) as $outdoor): ?>
                                            <?= ($outdoor)."
" ?>
                                        <?php endforeach; ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class ="d-flex justify-content-center">
                            <img class ="img-fluid rounded" src="images/globe.png" alt="Globalists"/>
                        </div>
                    </div>
                </div>
                <div class ="row">
                    <div class="col offset-6">
                        <h5 class="card-title">Biography: </h5>
                        <p class ="card-text"><?= ($SESSION['bio']) ?></p><br><br>
                    </div>
                </div>
                <div class ="row">
                    <div class ="col-12">
                        <div class ="d-flex justify-content-center">
                            <form method ="post" action="contact">
                                <button type="submit" class="rounded text-center">Contact Me!</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>