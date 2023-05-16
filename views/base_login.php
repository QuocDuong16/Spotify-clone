<?php
    require_once "./config/basehref.php";
    $url = getUrl();
    if (!isset($_SESSION['username'])) {
        header("Location: ?url=home/index");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        echo "<base href='".$url."'>";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/images/spotify.ico">
    <meta property="og:image" content="./assets/images/spotify.png">
    <title>Spotify - Trình phát trên web</title>
    <!-- Icon Css -->
    <link rel="stylesheet" href="./assets/fonts/style.css">
    <!--[if lt IE 8]><!-->
    <link rel="stylesheet" href="./assets/fonts/ie7/ie7.css">
    <!--<![endif]-->
    <!-- Bootstrap 5.3.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <!-- CSS - SCSS -->
    <link rel="stylesheet" href="./assets/css/index_login.css">
    <?php 
        if (isset($css)) {
            echo $css;
        }
    ?>
</head>

<body>
    <div id="main" class="d-grid">
        <header id="top-bar">
            <div class="d-flex align-items-center justify-content-between gap-3">
                <div id="action-buttons" class="d-flex flex-shrink-1">
                    <button type="button" title="Quay lại" class="d-flex justify-content-center align-items-center">
                        <i class="niand-icon-spotify-left"></i>
                    </button>
                    <button type="button" title="Tiếp theo" class="d-flex justify-content-center align-items-center">
                        <i class="niand-icon-spotify-right"></i>
                    </button>
                </div>
                <div class="btn-nav flex-shrink-1"><a href="#" class="text-white">Premium</a></div>
                <div class="btn-nav flex-shrink-1"><a href="#" class="text-white">Hỗ trợ</a></div>
                <div class="btn-nav flex-shrink-1"><a href="#" class="text-white">Tải xuống</a></div>
                <div id="vertical-line"></div>
                <div id="sign-up-in" class="d-flex align-items-center flex-shrink-1">
                    <button id="sign-up" type="button" class="text-white me-4">Đăng ký</button>
                    <button id="sign-in" type="button" class="rounded-5">Đăng nhập</button>
                </div>
            </div>
        </header>

        <main id="main-view">
            <!-- Nội dung của trang con -->
            <?php echo $content; ?>
        </main>

        <div id="side-bar" class="d-flex flex-column">
            <div id="logo">
                <div class="w-100">
                    <a href="#" class="text-white">
                        <i class="niand-icon-spotify-logo"></i>
                    </a>
                </div>
            </div>
            <nav id="menu" class="w-100">
                <ul>
                    <li>
                        <a href="#" class="active text-white d-flex align-items-center">
                            <i class="niand-icon-spotify-home"></i>
                            <span>Trang chủ</span></a>
                    </li>
                    <li>
                        <a href="#" class="text-white d-flex align-items-center">
                            <i class="niand-icon-spotify-search"></i>
                            <span>Tìm kiếm</span></a>
                    </li>
                    <li>
                        <a href="#" class="text-white d-flex align-items-center">
                            <i class="niand-icon-spotify-library"></i>
                            <span>Thư viện</span></a>
                    </li>
                </ul>
            </nav>
            <div id="user-actions" class="d-flex flex-column flex-grow-1">
                <div class="mt-4">
                    <div class="w-100 action-button">
                        <button type="button" class="d-flex align-items-center">
                            <span class="playlist-add">
                                <i class="niand-icon-spotify-add"></i>
                            </span>
                            <span>Tạo playlist</span>
                        </button>
                    </div>
                    <div class="w-100 action-button">
                        <button type="button" class="d-flex align-items-center">
                            <span class="liked-song">
                                <i class="niand-icon-spotify-heart"></i>
                            </span>
                            <span>Bài hát đã thích</span>
                        </button>
                    </div>
                </div>
            </div>
            <div id="user-settings">
                <div class="cookie w-100">
                    <a href="#" class="text-white">Cookie</a>
                </div>
                <div class="languages">
                    <button type="button" class="d-flex align-items-center">
                        <i class="niand-icon-spotify-internet"></i>
                        <span>Tiếng Việt</span>
                    </button>
                </div>
            </div>
        </div>

        <footer>
            <div id="now-playing-bar" class="pe-2 ps-2">
                <div class="row row-cols-3 m-auto">
                    <div id="now-playing-bar-left" class="col d-flex align-items-center">
                        <div class="d-flex gap-3 justify-content-start align-items-center">
                            <div>
                                <img class="img-fluid rounded-1" src="https://i.scdn.co/image/ab67616d0000485170cb943c9a67b7eda3414366" alt="">
                            </div>
                            <div>
                                <div class="title">
                                    không nói ai mà biết
                                </div>
                                <div class="authors">
                                    <a href="#">14 Casper</a>
                                    <a href="#">Bon Nghiêm</a>
                                </div>
                            </div>
                            <div>
                                <i class="niand-icon-spotify-heart-empty"></i>
                            </div>
                            <div>
                                <i class="niand-icon-spotify-picture-in-picture"></i>
                            </div>
                        </div>
                    </div>
                    <div id="now-playing-bar-center" class="col d-flex align-items-center">
                        <div class="d-flex flex-column w-100 gap-2">
                            <div class="player-controls d-flex align-items-center justify-content-center gap-4">
                                <div class="player-controls-left d-flex align-items-center justify-content-center gap-4">
                                    <button type="button">
                                        <i class="niand-icon-spotify-mix"></i>
                                    </button>
                                    <button type="button">
                                        <i class="niand-icon-spotify-prev"></i>
                                    </button>
                                </div>
                                <div class="player-controls-center">
                                    <button type="button" class="bg-white m-0 p-1 rounded-circle d-flex justify-content-center align-items-center">
                                        <i class="niand-icon-spotify-play text-black"></i>
                                    </button>
                                </div>
                                <div class="player-controls-right d-flex align-items-center justify-content-center gap-4">
                                    <button type="button">
                                        <i class="niand-icon-spotify-next"></i>
                                    </button>
                                    <button type="button">
                                        <i class="niand-icon-spotify-loop"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="playback-bar d-flex align-items-center justify-content-center gap-2">
                                <div class="playback-position">
                                    0:00
                                </div>
                                <div class="progress-bar w-100 rounded-2">
                                </div>
                                <div class="playback-duration">
                                    4:34
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="now-playing-bar-right" class="col d-flex justify-content-end align-items-center gap-3">
                        <div>
                            <i class="niand-icon-spotify-mic"></i>
                        </div>
                        <div>
                            <i class="niand-icon-spotify-playlist"></i>
                        </div>
                        <div>
                            <i class="niand-icon-spotify-loudspeaker"></i>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="niand-icon-spotify-volumn"></i>
                            <div class="volumn-bar rounded-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>