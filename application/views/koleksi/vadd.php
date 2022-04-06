<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Masukkan detail buku</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo base_url('koleksi/insert') ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="judul">Judul : </label>
                            <input type="text" class="form-control" id="judul" name="judul">
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis : </label>
                            <input type="text" class="form-control" id="jenis" name="jenis">
                        </div>
                        <div class="form-group">
                            <label for="penerbit">Penerbit : </label>
                            <input type="text" class="form-control" id="penerbit" name="penerbit">
                        </div>
                        <div class="form-group">
                            <label for="penulis">Penulis : </label>
                            <input type="text" class="form-control" id="penulis" name="penulis">
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun : </label>
                            <input type="text" class="form-control" id="tahun" name="tahun">
                        </div>
                        <!-- <div class="form-group">
                            <label for="cover">Cover : </label>
                            <input type="text" class="form-control" id="cover" name="cover">
                        </div> -->
                        <div class="form-group">
                            <label for="cover">Cover : </label>
                            <input type="file" class="form-control-file" id="cover" name="cover">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<?php $this->load->view('layout/footer'); ?>