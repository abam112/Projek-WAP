<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <?php include('header.php') ?>
</head>
<body>
    <?php include('navbar.php') ?>
    <main role="main " class="container">
        
        <?php include('welcome.php') ?>
        <?php $id=$_SESSION['id'] ?>
        <div class="container mt-5">
            <div class="row mb-4">
                <div class="col-12">
                    <h5 class="mb-4">Buat data transaksi</h5>
                    <form action="controller/cassyier.php?action=store" method="POST">
                    <div class="mb-3">          
                            <input type="hidden" class="form-control" value=<?php echo $id;?> name="id">
                        </div>

                        <div class="mb-3">
                            <label for="crt" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="crt" placeholder="Masukkan nama barang yang anda beli" name="barang" required>
                        </div>
                        <div class="mb-3">
                            <label for="crt" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="crt" placeholder="Masukkan tanggal transaksi anda" name="tanggal" required>
                        </div>
                        <div class="mb-3">
                            <label for="crt" class="form-label">Nominal Harga</label>
                            <input type="number" class="form-control" id="crt" placeholder="Masukkan harga sesuai pada saat transaksi" name="nominal_harga" required>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">
                                Buat
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php include('footer.php') ?>

    <?php include('scripts.php') ?>
</body>

</html>