<div class="page-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Kuesioner 
            </div>
            <div class="card-body">
                <div class="container mt-2">
                    <form action="<?= $action ?>" method="post">
                        <?php foreach ($kuisoner as $key => $value) { ?>
                            <div class="form-group">
                                <div class="text-left">
                                    <h4 class="card-title">
                                        <?= $key + 1 ?>. <?= $value['pertanyaan'] ?>
                                    </h4>
                                </div>

                               <div data-toggle="buttons">
                                    <label class="btn btn-outline-info " for="<?= $value['id'] ?>1">
                                        <input name="pg[<?= $value['id'] ?>]" id="<?= $value['id'] ?>1" value="<?= $value['id'] ?>-1" required type="radio" name="options" id="option1" autocomplete="off" > 1
                                    </label>
                                    <label class="btn btn-outline-info " for="<?= $value['id'] ?>2">
                                        <input name="pg[<?= $value['id'] ?>]" id="<?= $value['id'] ?>2" value="<?= $value['id'] ?>-2" required type="radio" name="options" id="option2" autocomplete="off"> 2
                                    </label>
                                    <label class="btn btn-outline-info" for="<?= $value['id'] ?>3">
                                        <input name="pg[<?= $value['id'] ?>]" id="<?= $value['id'] ?>3" value="<?= $value['id'] ?>-3" required type="radio" name="options" id="option3" autocomplete="off"> 3
                                    </label>
                                    <label class="btn btn-outline-info" for="<?= $value['id'] ?>4">
                                        <input name="pg[<?= $value['id'] ?>]" id="<?= $value['id'] ?>4" value="<?= $value['id'] ?>-4" required type="radio" name="options" id="option3" autocomplete="off"> 4
                                    </label>
                                    <label class="btn btn-outline-info" for="<?= $value['id'] ?>5">
                                        <input name="pg[<?= $value['id'] ?>]" id="<?= $value['id'] ?>5" value="<?= $value['id'] ?>-5" required type="radio" name="options" id="option3" autocomplete="off"> 5
                                    </label>
                                    <label class="btn btn-outline-info" for="<?= $value['id'] ?>6">
                                        <input name="pg[<?= $value['id'] ?>]" id="<?= $value['id'] ?>6" value="<?= $value['id'] ?>-6" required type="radio" name="options" id="option3" autocomplete="off"> 6
                                    </label>
                                </div>
                                            <!-- <input class="form-check-input" type="radio" name="pg[<?= $value['id'] ?>]" id="<?= $value['id'] ?>1" value="<?= $value['id'] ?>-1" required>
                                            <label class="form-check-label" for="<?= $value['id'] ?>1">
                                                1
                                            </label> -->



                            </div>

                        <?php }; ?>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
