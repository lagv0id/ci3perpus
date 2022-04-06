<?php $this->load->view('layout/header'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <?php if ($this->session->flashdata('pesan') != '') { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo $this->session->flashdata('pesan'); ?>
                </div>
            <?php } ?>

            <div class="card my-5">
                <div class="card-body">

                    <h2 class="text-center text-dark mt-5">Login TS</h2>
                    <div class="text-center mb-5 text-dark">Welcome to login page or something idk</div>

                    <div class="text-center">
                        <img src="assets/img/logots.jpg" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="400px" alt="profile">
                    </div>

                    <form action="<?php echo base_url('login/auth') ?>" method="POST">
                        <label for="email">Email : </label><input type="text" name="email" class="form-control">
                        <label for="password">Password : </label><input type="password" name="password" class="form-control mt-1">
                        <div class="text-center"><input type="submit" class="btn btn-success mt-3" value="Login"></div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="rememberme">
                            <label class="form-check-label" for="flexCheckDefault">
                                Remember me
                            </label>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>