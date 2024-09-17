<div class="page-wrapper">
    <div class="container-fluid">
        <div class="card card-outline-danger">
            <div class="card-header">
                <h4 class="m-b-0 text-white">ADD SKPI Mahasiswa</h4>
            </div>
            <div class="card-block">
                <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                <b><?php echo validation_errors(); ?></b>
                <form action="<?= base_url('/baak/mahasiswa/skpi_edit_action/' . $id_draft . '/' . $nim) ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="berkas">berkas *pdf </label>
                        <input type="file" class="form-control" name="berkas" id="berkas" placeholder="Masukan berkas ">
                        <?php if ($master['file'] != NULL) { ?>
                            <a target="_blank" href="<?= base_url('assets/berkas/skpi/' . $master['file']) ?>">
                                <small><i class="fa fa-eye"></i> Lihat Data Sebelumnya</small>
                            </a>
                        <?php }; ?>
                    </div>
                    <div class="form-group">
                        <label for="status">status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="">Pilih Status</option>
                            <option <?= ($master['status'] == '1') ? "selected" : "" ?> value="1">Validasi</option>
                            <option <?= ($master['status'] == '2') ? "selected" : "" ?> value="2">Acc</option>
                            <option <?= ($master['status'] == '4') ? "selected" : "" ?> value="4">perbaikan</option>
                            <option <?= ($master['status'] == '3') ? "selected" : "" ?> value="3">Tolak</option>
                        </select>
                    </div>
                    <button class="btn btn-primary " type="submit">Save</button>
                    <a href=" <?= base_url('/baak/mahasiswa/skpi/' . $nim) ?> " class="btn btn-warning">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {

        $('.select2').select2();
    })
</script>