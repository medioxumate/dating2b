<!--
 * Created in PhpStorm
 * @author Brian Kiehn
 * @date 1/27/2020
 * @version 2.0
 * form3.html
 * https://github.com/medioxumate/dating2b.git
 * GreenRiverDev
 -->

<section class ="container-fluid">
    <form method ="Post" action ="profile">
        <div class ="card">
            <div class="card-header">
                <h1>Interests</h1>
            </div><!--end card-header-->
            <div class ="card-body">
                <div class="row">
                    <div class="col form-group">
                        <p>In-door Interests</p>
                        <div class ="row justify-content-around">
                                <?php foreach (($in?:[]) as $inOption): ?>
                                    <div class="col-3">
                                        <label><input type="checkbox" name="in[]" value="<?= ($inOption) ?>">
                                            <?= ($inOption) ?></label>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                <div class="row">
                    <div class="col form-group">
                        <p>Out-door Interests</p>
                        <div class ="row justify-content-around">
                            <?php foreach (($out?:[]) as $outOption): ?>
                                <div class="col-3">
                                    <label><input type="checkbox" name="out[]" value="<?= ($outOption) ?>"><?= ($outOption)."
" ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class ="card-footer">
                    <div class="row justify-content-end">
                        <div class="col offset-10">
                                <button type ="submit">Next</button>
                                <button type ="reset">Reset</button>
                        </div>
                    </div>
                </div>
    </form>
</section>
</body>
</html>