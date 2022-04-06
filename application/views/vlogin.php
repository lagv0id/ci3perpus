<?php $this->load->view('layout/header'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center text-dark mt-5">Login TS</h2>
            <div class="text-center mb-5 text-dark">asdfghjkl</div>
            <div class="card my-5">
                <form class="card-body cardbody-color p-lg-5">

                    <div class="text-center">
                        <img src="assets/img/logots.jpg" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px" alt="profile">
                    </div>

                    <form action="<?php echo base_url('login/auth') ?>" method="post">

                        <div class="mb-3">
                            <input type="text" class="form-control" id="Username" placeholder="User Name" name="username">
                        </div>

                        <div class="mb-3">
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                        </div>

                        <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-3 w-100">Login</button></div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="rememberme">
                            <label class="form-check-label" for="flexCheckDefault">
                                Remember me
                            </label>
                        </div>

                    </form>

                    <div id="emailHelp" class="form-text text-center mb-3 text-dark">Not Registered? <a href="#" class="text-dark fw-bold"> Create an Account</a>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('layout/footer'); ?>