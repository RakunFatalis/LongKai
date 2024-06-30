<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Runeterra</a>
            <span class="navbar-text">Learn And Be Better</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav custom-nav pl-5">
                    <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Guide</a></li>
                    <li class="nav-item custom-nav-item"><a href="#" class="nav-link">My Post</a></li>
                    <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Log out</a></li>
                    <li class="nav-item custom-nav-item"><a href="login.php" class="nav-link">Log in</a></li>
                    <li class="nav-item custom-nav-item"><a href="register.php" class="nav-link">Sign up</a></li>
                    <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Feedback</a></li>
                    <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation -->

    <!-- Login Form -->
    <div class="container mt-5">
        <h2 class="text-center">Đăng nhập</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="login_process.php" method="POST">
                    <div class="form-group">
                        <label for="username">Tên đăng nhập</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Đăng nhập</button>
                </form>
                <div class="text-center mt-3">
                    <p>Nếu bạn chưa có tài khoản, vui lòng <a href="register.php">đăng ký</a>.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login Form -->

    <!-- Jquery and Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Font Awesome JS -->
    <script src="js/all.min.js"></script>
</body>
</html>
