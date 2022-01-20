<!doctype html>
<html lang="en">

<?php session_start(); ?>
<?php include('controller/middleware.php'); ?>

<head>
    <?php include('header.php') ?>
</head>

<body>
    <?php include('navbar.php') ?>

    <main role="main " class="container">

        <?php include('welcome.php') ?>

        <?php 
            include('database/cassyier.php');

            $data = new Cassyier();
        ?>

        <div class="container mt-5">
            <div class="row mb-4">
                <div class="col-12">
                    <h3 class="mb-4">Hi, <?= $_SESSION['name'] ?></h3>

                    <h5 class="mb-4">List</h5>

                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th scope="col ">Barang</th>
                                <th scope="col ">Tanggal</th>
                                <th scope="col ">Nominal Harga</th>
                                <th scope="col ">Edit dan Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $id=$_SESSION['id'];
                            foreach($data->getAll($id) as $item) { ?>
                            
                            <tr>
                                <td><?= $item['barang'] ?></td>
                                <td><?= $item['tanggal'] ?></td>
                                <td><?= $item['nominal_harga'] ?></td>
                                <td>
                                    <div class="btn-group " role="group " aria-label="Basic example ">
                                        <a href="update.php?id=<?= $item['id'] ?>"<button type="button" class="btn btn-warning">Edit</button></a>
                                        
                                        <form onsubmit="return confirm('Apakah kamu yakin untuk menghapus item <?= $item['barang']?> dari list belanjaan kamu hari ini?')" 
							                action="controller/cassyier.php?id=<?= $item['id'] ?>&action=delete" 
							                method="POST">
                                        <button type="submit" class="btn btn-danger text-white">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <?php } ?>
                            
                        </tbody>
                    </table>
                    <div>
                        <p>Buat list Masukkan <a href="create.php">disini</a></p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include('footer.php') ?>

    <?php include('scripts.php') ?>
</body>

</html>


