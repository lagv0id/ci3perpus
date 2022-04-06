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
                        <div class="col-4 text-center">
                            <img style="width:150px" src="<?php echo base_url('assets/img/koleksi/' . $detail['cover']) ?>" alt=""><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layout/footer'); ?>