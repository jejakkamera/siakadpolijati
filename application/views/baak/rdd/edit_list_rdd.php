<div class="page-wrapper">
    <div class="container-fluid">
        <div class="card card-outline-danger">
            <div class="card-header">
                <h4 class="m-b-0 text-white">ADD List</h4>
            </div>
            <div class="card-block">
                <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                <b><?php echo validation_errors(); ?></b>
                <form action="<?= base_url('/baak/rdd/edit_list_action/' . $master['id']) ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="type">Pilih type</label>
                        <select name="type" id="type" required class="form-control select2 type">
                            <option value="" selected>Pilih type</option>
                            <?php foreach ($type as $key => $value) { ?>
                                <option <?= ($master['id_type'] == $value['id']) ? 'selected' : ''  ?> value="<?= $value['id'] ?>">
                                    <?= $value['type'] ?>
                                </option>
                            <?php }; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tanggal">tanggal</label>
                        <input type="date" class="form-control" name="tanggal" id="tanggal" required placeholder="Masukan tanggal berkas" value="<?= $master['tanggal'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="nomer_rdd">Nomer RDD</label>
                        <input type="text" class="form-control" name="nomer_rdd" id="nomer_rdd" required placeholder="Masukan Nomer Rdd berkas" value="<?= $master['nomer_rdd'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="subjek">Subjek</label>
                        <textarea name="subjek" id="subjek" cols="30" rows="10"><?= $master['subjek'] ?></textarea>
                    </div>


                    <div class="form-group">
                        <label for="file">file *pdf (Tidak perlu upload ulang jika tidak ingin edit berkas)</label>
                        <input type="file" class="form-control" name="file" id="file" placeholder="Masukan file ">
                        <a target="_blank" href="<?= base_url('assets/berkas/rdd/' . $master['file']) ?>">
                            <small><i class="fa fa-eye"></i> Lihat Data Sebelumnya</small>
                        </a>
                    </div>

                    <div class="form-group">
                        <label for="role">Pilih role</label>
                        <select name="role[]" id="role" required multiple class="form-control select2 role">

                            <?php foreach ($role as $key => $value) { ?>
                                <option value="<?= $value['role'] ?>" <?= (strpos($master['role'], $value['role'])) ? 'selected' : '' ?>>
                                    <?= $value['role'] ?>
                                </option>
                            <?php }; ?>
                        </select>
                    </div>
                    <button class="btn btn-primary " type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="//cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('subjek');
    $(document).ready(function() {

        $('.select2').select2();
    })
</script>