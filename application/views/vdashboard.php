<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h1>Dashboard</h1>
                </div>
                <div class="card-body">
                    <!-- <h5 class="card-title">Special title treatment</h5> -->
                    <p class="card-text">
                    <p>Hello <?= $this->session->userdata('nama') ?></p>
                    </p>
                    <a href="<?php echo base_url('koleksi/pinjam'); ?>" class="btn btn-primary mt-2">Pinjam Buku</a>
                    <a href="<?php echo base_url('login/logout') ?>" class="btn btn-danger">Log Out</a>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layout/footer'); ?>