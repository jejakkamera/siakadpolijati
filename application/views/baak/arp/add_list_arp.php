<div class="page-wrapper">
    <div class="container-fluid">
        <div class="card card-outline-danger">
            <div class="card-header">
                <h4 class="m-b-0 text-white">ADD List ARP</h4>
            </div>
            <div class="card-block">
                <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                <b><?php echo validation_errors(); ?></b>

                <form action="<?= base_url('/baak/arp/add_arp_action') ?>" method="post">
                    <div class="form-group">
                        <label for="judul_arp">Judul ARP</label>
                        <input type="text" class="form-control" name="judul_arp" id="judul_arp" required placeholder="Masukan Judul ARP">
                    </div>

                    <div class="form-group">
                        <label for="deskripsi_arp">Deskripsi ARP</label>
                        <textarea name="deskripsi_arp" id="deskripsi_arp" cols="30" rows="10"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="role">Pilih role</label>
                        <select name="role[]" id="role" required multiple class="form-control select2 role">

                            <?php foreach ($role as $key => $value) { ?>
                                <option value="<?= $value['role'] ?>">
                                    <?= $value['role'] ?>
                                </option>
                            <?php }; ?>
                        </select>

                    </div>
            </div>
            <button class="btn btn-primary " type="submit">Save</button>
            </form>
        </div>

        <div class="card">
            <div class="card-header">
                Data Informasi Gambar
            </div>
            <div class="card-block">
                <h4 class="card-title">Data Informasi Gambar</h4>
                <?php echo form_open_multipart(base_url() . '/baak/informasi/input_gambar'); ?>
                <div class="form-group">
                    <label for="file">Gambar</label>
                    <input type="file" class="form-control" id="file" name="file" placeholder="Password">
                </div>
                <input type="text" hidden value="tambah" name="add">
                <button type="submit" class='btn btn-primary my-3'>simpan</button>
                </form>

                <h4>File Tersimpan</h4>

                <ul>
                    <?php foreach ($data_gambar as $key) { ?>
                        <li> <a target="_blank" href="<?= base_url() . '/assets/informasi/' . $key['file'] ?>"><?= $key['file'] ?></a> <a class='ml-3' style="color: blue;" href="<?= base_url() . '/baak/informasi/hapus_gambar/' . $key['id'] ?>"><i class="fa fa-trash"></i>Hapus</a> </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>

<script src="//cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('deskripsi_arp');
    $(document).ready(function() {

        $('.select2').select2();
    })
</script>