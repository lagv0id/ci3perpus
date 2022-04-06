<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="assets/img/logots.jpg" alt="" width="80px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <!-- Menentukan navbar mana yang aktif menggunakan ternary.
                    (Condition) ? (Statement1) : (Statement2);
                    -->
                    <a class="nav-link" href="<?php echo base_url('dashboard') ?>">Dashboard</a>
                    <a class="nav-link" href="<?php echo base_url('user') ?>">User</a>
                    <a class="nav-link" href="<?php echo base_url('koleksi') ?>">Koleksi</a>
                    <a class="nav-link" href="<?php echo base_url('about') ?>">About</a>
                </div>
            </div>
        </div>
    </nav>