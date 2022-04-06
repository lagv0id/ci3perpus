<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar'); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Detail Buku</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <table class='table'>
                                <tr>
                                    <th>Judul</th>
                                    <th>Penulis</th>
                                    <th>Penerbit</th>
                                </tr>
                                <tr>
                                    <td><?php echo $detail['judul'] ?></td>
                                    <td><?php echo $detail['penulis'] ?></td>
                                    <td><?php echo $detail['penerbit'] ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-4">
                            <img style="width:150px" src="<?php echo base_url('assets/img/' . $detail['cover']) ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Edit detail buku</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo base_url('koleksi/update/' . $detail['id']) ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="judul">Judul : </label>
                            <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $detail['judul'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis : </label>
                            <input type="text" class="form-control" id="jenis" name="jenis" value="<?php echo $detail['jenis'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="penerbit">Penerbit : </label>
                            <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo $detail['penerbit'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="penulis">Penulis : </label>
                            <input type="text" class="form-control" id="penulis" name="penulis" value="<?php echo $detail['penulis'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun : </label>
                            <input type="text" class="form-control" id="tahun" name="tahun" value="<?php echo $detail['tahun'] ?>">
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