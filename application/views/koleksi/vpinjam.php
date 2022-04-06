<?php $this->load->view('layout/header'); ?>
<?php $this->load->view('layout/navbar'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h1>Pinjam buku</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo base_url('koleksi/pinjam') ?>" enctype="multipart/form-data">
                        <select class="form-select" name='judulpinjam'>
                            <?php
                            foreach ($dataku->result() as $tabel) {
                                echo "<option value=" . $tabel->id . ">" . $tabel->judul . "</option>";
                            }
                            ?>
                        </select>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<?php $this->load->view('layout/footer'); ?>