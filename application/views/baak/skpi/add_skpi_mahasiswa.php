<div class="page-wrapper">
    <div class="container-fluid">
        <div class="card card-outline-danger">
            <div class="card-header">
                <h4 class="m-b-0 text-white">ADD SKPI Mahasiswa</h4>
            </div>
            <div class="card-block">
                <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                <b><?php echo validation_errors(); ?></b>
                <form action="<?= base_url('/baak/skpi/validasi/add_action') ?>" method="post" enctype="multipart/form-data">

                    <?php if ($this->session->userdata('role') == 'pegawai_baak') { ?>
                        <div class="form-group">
                            <label for="prodi">Pilih Prodi</label>
                            <select name="prodi" id="prodi" required class="form-control select2 prodi">
                                <option value="" selected>Pilih Program Studi</option>
                                <?php foreach ($prodi as $key => $value) { ?>
                                    <option value="<?= $value['kode_program_studi'] ?>">
                                        <?= $value['nama_program_studi'] . ' - ' . $value['nama_jenjang_pendidikan'] ?>
                                    </option>
                                <?php }; ?>
                            </select>
                        </div>
                    <?php }; ?>

                    <div class="form-group">
                        <label for="mahasiswa">Pilih mahasiswa</label>
                        <select name="mahasiswa" id="mahasiswa" required class="form-control select2 mahasiswa" <?= ($this->session->userdata('role') == 'pegawai_baak') ? 'disabled' : '' ?>>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="kategori">Pilih kategori</label>
                        <select name="kategori" id="kategori" required class="form-control select2 kategori">
                            <option value="" selected>Pilih Kategori</option>
                            <?php foreach ($kategori as $key => $value) { ?>
                                <option value="<?= $value['id'] ?>">
                                    <?= $value['kategori'] ?>
                                </option>
                            <?php }; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" id="keterangan" required placeholder="Masukan Keterangan berkas">
                    </div>
                    <div class="form-group">
                        <label for="berkas">berkas *pdf</label>
                        <input type="file" class="form-control" name="berkas" id="berkas" required placeholder="Masukan berkas ">
                    </div>
                    <button class="btn btn-primary " type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    var role = "<?= $this->session->userdata('role') ?>"
    var username = "<?= $this->session->userdata('username') ?>"


    $(document).ready(function() {

        $('.prodi').select2();
        $('.kategori').select2();

        // login baak
        if (role == 'pegawai_baak') {
            $('#prodi').change(function() {
                $("#mahasiswa").prop('disabled', false);
                $('.mahasiswa').select2({
                    minimumInputLength: 3,
                    ajax: {
                        url: '<?= base_url('baak/skpi/validasi/json_list_mahasiswa/') ?>' + $("#prodi").val(),
                        dataType: 'json',
                        method: "POST",
                        data: function(params) {
                            return {
                                kec: params.term
                            };
                        },
                        processResults: function(data) {
                            var result = [];

                            $.each(data, function(index, item) {
                                result.push({
                                    id: item.kode,
                                    text: item.nama
                                });
                            });
                            return {
                                results: result
                            };
                        }
                    }
                });
            })
        } else {
            $('.mahasiswa').select2({
                minimumInputLength: 3,
                ajax: {
                    url: '<?= base_url('baak/skpi/validasi/json_list_mahasiswa/') ?>' + username,
                    dataType: 'json',
                    method: "POST",
                    data: function(params) {
                        return {
                            kec: params.term
                        };
                    },
                    processResults: function(data) {
                        var result = [];

                        $.each(data, function(index, item) {
                            result.push({
                                id: item.kode,
                                text: item.nama
                            });
                        });
                        return {
                            results: result
                        };
                    }
                }
            });
        }


    });
</script>