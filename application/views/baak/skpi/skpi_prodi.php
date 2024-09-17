<div class="page-wrapper">
    <div class="container-fluid">
        <div class="card card-outline-danger">
            <div class="card-header">
                <h4 class="m-b-0 text-white">Draft SKPI Prodi <?= $prodi->nama_program_studi ?> - <?= $prodi->nama_jenjang_pendidikan ?></h4>
            </div>
            <div class="card-block">
                <form action="<?= base_url('/baak/skpi/kategori/add_skpi_prodi/' . $prodi->kode_program_studi) ?>" method="post" enctype="multipart/form-data">
                    <?php foreach ($draft as $key => $value) { ?>
                        <li class="list-group-item" for="defaultCheck<?= $value['draft']['id'] ?>">
                            <div class="form-check">
                                <input class="form-check-input" <?= ($value['selected']) ? "checked" : "" ?> name="draft[]" type="checkbox" value="<?= $value['draft']['id'] ?>" id="defaultCheck<?= $value['draft']['id'] ?>">
                                <label class="form-check-label" for="defaultCheck<?= $value['draft']['id'] ?>">
                                    <?= $value['draft']['draft_skpi'] ?>
                                </label>
                            </div>
                        </li>
                    <?php } ?>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>

            </div>
        </div>
    </div>
</div>