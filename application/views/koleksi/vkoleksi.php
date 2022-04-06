<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <?php if ($this->session->flashdata('pesan') != '') { ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo $this->session->flashdata('pesan'); ?>
                </div>
            <?php } ?>
            <div class="card">
                <div class="card-header">
                    <h1>Koleksi</h1>
                </div>
                <div class="card-body">
                    <!-- Dumptext -->
                    Donec posuere, odio eget sollicitudin mattis, eros urna convallis metus, nec cursus risus neque non nisi. Quisque imperdiet velit nec velit fermentum, auctor sagittis odio euismod. Quisque tristique turpis vel nibh tincidunt, in iaculis nibh tempus. Quisque feugiat dignissim urna sit amet finibus. Duis pretium iaculis orci. Curabitur tempor ac est id sodales. Sed quis dolor rutrum, vestibulum dui in, interdum eros.

                    Nunc lacinia rutrum diam. Morbi feugiat metus ex, sit amet lobortis nibh accumsan nec. Mauris at suscipit quam. Proin fringilla mollis tortor vitae viverra. Nullam eget est vulputate, tempor lectus eu, condimentum metus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In hac habitasse platea dictumst. Morbi ut velit tempus, pulvinar odio et, aliquet urna. Ut ullamcorper tellus id nibh egestas gravida. Donec pretium euismod nisi vitae consequat. Cras fermentum ultricies magna. Donec pulvinar a dolor quis malesuada. In luctus sapien purus, quis viverra velit rutrum a. Ut sodales ante a leo porta feugiat. Suspendisse potenti. Pellentesque pretium placerat neque sit amet imperdiet.
                    <br>

                    <a href="koleksi/add" class="btn btn-primary">Insert</a>

                    <!-- Buat table header -->
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Jenis</th>
                            <th>Penerbit</th>
                            <th>Penulis</th>
                            <th>Tahun</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                        /**
                         * Tampilkan semua data
                         */
                        foreach ($list as $item) { ?>
                            <tr>
                                <td><?php echo $item['id']; ?></td>
                                <td><?php echo $item['judul']; ?></td>
                                <td><?php echo $item['jenis']; ?></td>
                                <td><?php echo $item['penerbit']; ?></td>
                                <td><?php echo $item['penulis']; ?></td>
                                <td><?php echo $item['tahun']; ?>
                                <td>
                                    <a href="koleksi/detail/<?php echo $item['id']; ?>" class="btn btn-primary">Detail</a>
                                    <a href="koleksi/edit/<?php echo $item['id']; ?>" class="btn btn-warning">Edit</a>
                                    <a onclick="konfirmasi(<?php echo $item['id']; ?>)" class="btn btn-danger">Hapus Konfirm</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function konfirmasi(id) {
        let text = "Apakah anda yakin ingin menghapus data?";
        if (confirm(text) == true) {
            window.location.href = "koleksi/delete/" + id;
        }
    }
</script>

<?php $this->load->view('layout/footer'); ?>