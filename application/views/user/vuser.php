<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar'); ?>

<div class="container">
    <div class="row">
        <div class="card">

            <?php if ($this->session->flashdata('pesan') != '') { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo $this->session->flashdata('pesan'); ?>
                </div>
            <?php } ?>

            <div class="card-header">
                <h1>User</h1>
            </div>

            <div class="card-body">
                Quisque accumsan egestas leo, et egestas felis ullamcorper non. Quisque sit amet metus odio. Morbi magna nisi, mollis id placerat ac, viverra ut lectus. Fusce blandit diam sit amet lobortis fermentum. Nam et scelerisque tortor, at facilisis metus. Mauris cursus venenatis metus, ut finibus purus tincidunt in. Duis tristique eleifend neque vulputate mattis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam imperdiet aliquam viverra. Quisque elementum orci a tortor aliquet consequat. Aliquam facilisis sagittis nisi ut ultrices. Ut vel ultrices nisl. Sed mattis pulvinar metus. Aliquam malesuada leo leo, vitae convallis mauris tempor sit amet. Donec ultricies, justo eu rutrum dignissim, augue urna maximus magna, at sodales eros felis nec leo. Maecenas sit amet nibh at tortor tincidunt porta.
                <br>
                <a href="user/add" class="btn btn-primary">Add new user</a>
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Telepon</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    foreach ($list as $item) { ?>
                        <tr>
                            <td><?php echo $item['id']; ?></td>
                            <td><?php echo $item['nama']; ?></td>
                            <td><?php echo $item['email']; ?></td>
                            <td><?php echo $item['telp']; ?></td>
                            <td>
                                <a href="user/detail/<?php echo $item['id']; ?>" class="btn btn-primary">Detail</a>
                                <a href="user/edit/<?php echo $item['id']; ?>" class="btn btn-warning">Edit</a>
                                <a onclick="konfirmasi(<?php echo $item['id']; ?>)" class="btn btn-danger">Hapus Konfirm</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    function konfirmasi(id) {
        let text = "Apakah anda yakin ingin menghapus data?";
        if (confirm(text) == true) {
            window.location.href = "user/delete/" + id;
        }
    }
</script>

<?php $this->load->view('layout/footer'); ?>