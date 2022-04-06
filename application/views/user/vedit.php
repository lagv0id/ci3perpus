<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Edit detail user</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo base_url('user/update/' . $detail['id']) ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="judul">Nama : </label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $detail['nama'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Email : </label>
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $detail['email'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="penerbit">Password : </label>
                            <input type="password" class="form-control" id="password" name="password" value="<?php echo $detail['password'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="penulis">Alamat : </label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $detail['alamat'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="tahun">Telepon : </label>
                            <input type="text" class="form-control" id="telp" name="telp" value="<?php echo $detail['telp'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="cover">Profile Picture : </label>
                            <input type="file" class="form-control-file" id="profpic" name="profpic">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<?php $this->load->view('layout/footer'); ?>