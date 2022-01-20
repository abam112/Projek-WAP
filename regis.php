

<!doctype html>
<html lang="en">
$emailErr = "";

<head>
    <?php include('header.php') ?>
</head>

<body>
    <?php include('navbar.php') ?>

    <main role="main " class="container">
        
        <?php include('welcome.php') ?>

        <div class="container mt-5">
            <div class="row mb-4">
                <div class="col-12">
                    <h5 class="mb-4">Register</h5>
                    <form action="controller/auth.php?action=register" method="POST">
                        <div class="mb-3">
                            <label for="reg" class="form-label">Name</label>
                            <input type="text" class="form-control" id="reg" placeholder="Input your name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="reg" class="form-label">Email</label>
                            <input type="email" class="form-control" id="reg" placeholder="Input your email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="reg" class="form-label">Password</label>
                            <input type="password" class="form-control" id="pw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Harus berisi setidaknya satu angka dan satu huruf besar dan kecil, dan setidaknya 8 karakter atau lebih" placeholder="Input your password" name="password" required>
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