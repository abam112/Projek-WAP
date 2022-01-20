<!doctype html>
<html lang="en">
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
                    <h5 class="mb-4">Login</h5>
                    <form action="controller/auth.php?action=login" method="POST">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan email anda" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan password anda" name="password">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">
                                Masuk
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php include('footer-login.php') ?>

    <?php include('scripts.php') ?>
</body>

</html>