<!--
 * Created in PhpStorm
 * @author Brian Kiehn
 * @date 1/27/2020
 * @version 3.0
 * form1.html
 * https://github.com/medioxumate/dating2b.git
 * GreenRiverDev
 -->
    <!-- main body -->
    <section class ="container-fluid">
        <form method ="Post" action ="bio">
            <div class ="card">
                <div class="card-header">
                    <h1>Personal Information</h1>
                </div><!--end card-header-->
                <div class ="card-body">
                    <div class="row">
                        <div class="col-7">
                            <div class ="row">
                                <div class ="col form-group">
                                    <label>First Name</label>
                                    <input class = "form-control" type ="text" name ="fn" value =<?= ($fn) ?>>
                                </div>
                            </div>

                            <div class="row">
                                <div class ="col form-group">
                                    <label>Last Name</label>
                                    <input class = "form-control" type ="text" name ="ln" value =<?= ($ln) ?>>
                                </div>
                            </div>

                            <div class="row">
                                <div class ="col form-group">
                                    <label>Age</label>
                                    <input class = "form-control" type ="text" name ="age" value =<?= ($age) ?>>
                                </div>
                            </div>

                            <div class ="row">
                                <div class="col form-group">
                                    <br>
                                    <label><b>Gender:</b>
                                        <input type ="radio" name ="g" id ="m" value="Male"><label for ="m">Male</label>
                                        <input type ="radio" name ="g" id ="f" value ="Female"><label for ="f">Female</label>
                                        <input type ="radio" name ="g" id ="b" value ="Both"><label for ="b">Both</label>
                                        <input type ="radio" name ="g" id ="o" value ="Other"><label for ="o">Other</label>
                                    </label>
                                </div>
                            </div>

                            <div class ="row">
                                <div class="col form-group">
                                    <label>Phone Number</label>
                                    <input class = "form-control" type ="text" name ="ph" value =<?= ($ph) ?>>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="row">
                                <div class="col align-self-center">
                                    <br>
                                    <div class="card">
                                        <div class="card-body">
                                            <p>
                                                <b>Disclaimer: </b> All information is protected by our privacy policy.
                                                Profile information can only be viewed by others by the user's request.
                                                No government spies here!
                                            </p>
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