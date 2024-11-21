<?= $this->extend('layout'); ?>

<?= $this->section('main') ?>

<div class="container">
    <div class="row bg-primary-subtle">
        <div class="col-6 p-5">
            <h1>Selamat Datang Di Toko Buku AfterRain</h1>
            <p>Menyediakan Semua Varian Buku yang Sangat Menarik untuk Dibaca</p>
            <button class="btn btn-warning">Lihat Produk</button>
        </div>
        <div class="col-6 p-5">
            <h1>Temukan Buku Menarik Anda</h1>
            <form action="">
                <div class="mb-3">
                    <input type="text" name="judul" id="judul"
                        class="form-control" placeholder="Judul Buku">
                </div>
                <div class="mb-3">
                    <select name="kategori" id="kategori" class="form-control">
                        <option value="">-- Pilih Kategori --</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="text" name="pengarang" id="pengarang"
                        placeholder="Pengarang" class="form-control">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <h2 class="mb-3">Hasil Pencariana</h2>
            <div class="row">
                <div class="col-4 p-3">
                    <div class="card">
                        <img src="<?= base_url() ?>/images/1.webp" class="card-img-top" alt="Cover Buku Mushoku Tensei Season 1">
                        <div class="card-body">
                            <h5 class="card-title">Mushoku Tensei Season 1</h5>
                            <p class="card-text">Rp. 60.000</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 p-3">
                    <div class="card">
                        <img src="<?= base_url() ?>/images/2.webp" class="card-img-top" alt="Cover Buku Mushoku Tensei Season 2">
                        <div class="card-body">
                            <h5 class="card-title">Mushoku Tensei Season 2</h5>
                            <p class="card-text">Rp. 65.000</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 p-3">
                    <div class="card">
                        <img src="<?= base_url() ?>/images/3.webp" class="card-img-top" alt="Cover Buku Mushoku Tensei Season 3">
                        <div class="card-body">
                            <h5 class="card-title">Mushoku Tensei Season 3</h5>
                            <p class="card-text">Rp. 70.000</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 p-3">
                    <div class="card">
                        <img src="<?= base_url() ?>/images/4.jpg" class="card-img-top" alt="Cover Buku Mushoku Tensei Season 4">
                        <div class="card-body">
                            <h5 class="card-title">Mushoku Tensei Season 4</h5>
                            <p class="card-text">Rp. 75.000</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 p-3">
                    <div class="card">
                        <img src="<?= base_url() ?>/images/5.jpg" class="card-img-top" alt="Cover Buku Mushoku Tensei Season 5">
                        <div class="card-body">
                            <h5 class="card-title">Mushoku Tensei Season 5</h5>
                            <p class="card-text">Rp. 50.000</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 p-3">
                    <div class="card">
                        <img src="<?= base_url() ?>/images/6.jpg" class="card-img-top" alt="Cover Buku Mushoku Tensei Season 6">
                        <div class="card-body">
                            <h5 class="card-title">Mushoku Tensei Season 6</h5>
                            <p class="card-text">Rp. 55.000</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection() ?>