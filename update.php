<!doctype html>
<html lang="en">
<head>
    <?php include('header.php') ?>
</head>

<body>
    <?php include('navbar.php') ?>

    <main role="main " class="container">
        
        <?php include('welcome.php') ?>
        
        <?php 
            include('database/cassyier.php');
            $id =  $_GET['id'];

            $data = new Cassyier();
            $data = $data->show($id);
        ?>

        <div class="container mt-5">
            <div class="row mb-4">
                <div class="col-12">
                    <h5 class="mb-4">List Transaksi <?= $data['barang']?> </h5>
                    <form action="controller/cassyier.php?id=<?= $data['id'] ?>&action=update" method="POST">
                    <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="<?= $data['barang']?>" name="barang" value = "<?= $data['barang']?>"
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="<?= $data['tanggal']?>" name="tanggal" value ="<?= $data['tanggal']?>">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nominal Harga</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="<?= $data['nominal_harga']?>" name="nominal_harga" value ="<?= $data['nominal_harga']?>">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">
                                Update
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