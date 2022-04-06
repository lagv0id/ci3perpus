<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar'); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Detail User</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-8">
                            <table class='table'>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Telepon</th>
                                </tr>
                                <tr>
                                    <td><?php echo $detail['nama'] ?></td>
                                    <td><?php echo $detail['email'] ?></td>
                                    <td><?php echo $detail['alamat'] ?></td>
                                    <td><?php echo $detail['telp'] ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-4">
                            <img style="width:150px" src="<?php echo base_url('assets/img/users/' . $detail['profpic']) ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layout/footer'); ?>