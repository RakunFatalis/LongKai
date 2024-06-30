<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Runeterra</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    
    <!-- Google Font Ubuntu -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
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

    <!-- Start video background -->
    <div class="container-fluid remove-vid-marg">
        <div class="vid-parent">
            <video playsinline autoplay muted loop>
                <source src="video/videonav.mp4">
            </video>
            <div class="vid-overlay"></div>
        </div>
        <div class="vid-content">
            <h1 class="my-content">Chào mừng tới Runeterra</h1>      
            <small class="my-content">Nơi hướng dẫn bạn về cách chơi Runeterra</small><br>
            <a href="#" class="btn btn-danger"> Bắt đầu thôi</a>
        </div>
    </div>
    <!-- End video background -->

    <!-- Start Text Banner -->
    <div class="container-fluid txt-banner">
        <div class="row bottom-banner">
            <div class="col-sm">
                <h5><i class="fa-solid fa-book"></i> Những bài hướng dẫn qua ải</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fa-solid fa-people-group"></i> Các content creator nổi tiếng</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fa-solid fa-building"></i> Những update mới của nhà phát triển</h5>
            </div>
        </div>
    </div>
    <!-- End Text Banner -->

    <!-- Start Post Banner -->
    <div class="container mt-5">
        <h1 class="text-center">Những bài viết phổ biến</h1>
        
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="image/Pantheon.webp" class="card-img-top" alt="Pantheon">
                    <div class="card-body">
                        <h5 class="card-title">Chi tiết về Pantheon</h5>
                        <p class="card-text">Đây là phần giới thiệu nhỏ về bài viết 1. Nội dung ngắn gọn và súc tích để thu hút người đọc.</p>
                    </div>
                    <div class="card-footer text-center">
                        <p class="btn btn-primary text-white font-weight-bolder">Đọc thêm</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="image/Lux 2.0.webp" class="card-img-top" alt="Lux2.0">
                    <div class="card-body">
                        <h5 class="card-title">Chi tiết về Lux Illuminated</h5>
                        <p class="card-text">Đây là phần giới thiệu nhỏ về bài viết 2. Nội dung ngắn gọn và súc tích để thu hút người đọc.</p>
                    </div>
                    <div class="card-footer text-center">
                        <p class="btn btn-primary text-white font-weight-bolder">Đọc thêm</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="image/Ashe.webp" class="card-img-top" alt="Ashe">
                    <div class="card-body">
                        <h5 class="card-title">Chi tiết về Ashe</h5>
                        <p class="card-text">Đây là phần giới thiệu nhỏ về bài viết 3. Nội dung ngắn gọn và súc tích để thu hút người đọc.</p>                        
                    </div>
                    <div class="card-footer text-center">
                        <p class="btn btn-primary text-white font-weight-bolder">Đọc thêm</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Post Banner -->

    <!-- Xem thêm button -->
    <div class="text-center m-2">
        <a class="btn btn-danger btn-sm" href="#">XEM THÊM</a>
    </div>

    <!-- Contact -->
    <div class="container mt-4" id="Contact">
        <h2 class="text-center mb-4">Liên hệ</h2>
        <div class="row">
            <div class="col-md-8">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name">Họ và tên</label>
                        <input type="text" class="form-control" name="name" placeholder="Họ và tên">
                    </div>
                    <div class="form-group">
                        <label for="subject">Tiêu đề</label>
                        <input type="text" class="form-control" name="subject" placeholder="Tiêu đề">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <label for="message">Mô tả</label>
                        <textarea class="form-control" name="message" placeholder="Chúng tôi có thể giúp gì được cho bạn" style="height: 150px;"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Gửi</button>
                </form>
            </div><!-- Contact 1-->

            <div class="col-md-4 stripe text-black text-center">
                <h4>Runeterra</h4>
                <p>Bình Thạnh, Tp.HCM<br>
                Phone: 0979743500<br>
                E-mail: tuhailong32@gmail.com<br>
                Github: <a href="https://github.com/RakunFatalis" target="_blank">https://github.com/RakunFatalis</a></p>
            </div>
        </div>
    </div>
    <!-- End Contact -->
<!-- Start Footer -->
<footer class="bg-dark text-white">
    <div class="container">
        <div class="row py-4">
            <div class="col-md-3">
                <h5>Runeterra</h5>
                <p class="text-white">Learn And Be Better</p>
            </div>
            <div class="col-md-3">
                <h5>Liên kết nhanh</h5>
                <ul class="list-unstyled">
                    <li><a href="index.php" class="text-white">Home</a></li>
                    <li><a href="#" class="text-white">Guide</a></li>
                    <li><a href="#" class="text-white">My Post</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Liên hệ</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Feedback</a></li>
                    <li><a href="#" class="text-white">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Mạng xã hội</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                    <li><a href="#" class="text-white"><i class="fab fa-twitter"></i> Twitter</a></li>
                    <li><a href="#" class="text-white"><i class="fab fa-instagram"></i> Instagram</a></li>
                    <!-- Thêm các liên kết khác tại đây -->
                </ul>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="text-white">© 2024 Runeterra. All Rights Reserved. Design by Từ Hải Long</p>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

    <!-- Jquery and Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Font Awesome JS -->
    <script src="js/all.min.js"></script>
</body>
</html>
