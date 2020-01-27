<!--
 * Created in PhpStorm
 * @author Brian Kiehn
 * @date 1/27/2020
 * @version 2.0
 * form2.html
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

    <title>Sign up</title>
</head>
<body>

<section class ="container-fluid">
    <form method ="Post" action ="hobbies">
        <div class ="card">
            <div class="card-header">
                <h1>Personal Information</h1>
            </div><!--end card-header-->
            <div class ="card-body">
                <div class="row">
                    <div class="col-7">
                        <div class ="row">
                            <div class ="col form-group">
                                <label>Email</label>
                                <input class = "form-control" type ="text" name ="em" value =<?= ($em) ?>>
                            </div>
                        </div>

                        <div class="row">
                            <div class ="col form-group">
                                <label>State
                                    <select class="form-control" name='st'>
                                        <option>Pick a State</option>
                                        <?php foreach (($states?:[]) as $stateChoices): ?>
                                            <option><?= ($stateChoices) ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </label>
                            </div>
                        </div>

                        <div class ="row">
                            <div class="col form-group">
                                <br>
                                <label><b>Seeking:</b>
                                    <input type ="radio" name ="sk" id ="m" value="Male"><label for ="m">Male</label>
                                    <input type ="radio" name ="sk" id ="f" value ="Female"><label for ="f">Female</label>
                                    <input type ="radio" name ="sk" id ="b" value ="Either Or"><label for ="b">Both</label>
                                    <input type ="radio" name ="sk" id ="o" value ="Other"><label for ="o">Other</label>
                                </label>
                            </div>
                        </div>
                    </div>
                        <div class="col">
                            <div class="row">
                                <div class="col align-self-center">
                                    <br>
                                    <div class="card">
                                        <div class="card-body">
                                            <label>Biography</label>
                                            <textarea class="form-control" name ="bio" rows="10" cols="60"><?= ($bio) ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end of card-body-->
            <div class ="card-footer">
                <div class="row justify-content-end">
                    <div class="col offset-10">
                        <button type ="submit">Next</button>
                        <button type ="reset">Reset</button>
                    </div>
                </div>
            </div>
            </div>
        </form>
    </section>
</body>
</html>