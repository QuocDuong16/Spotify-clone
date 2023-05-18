<?php require_once 'style.php'; ?>
<link rel="stylesheet" href="./assets/css/index_profile.css" />

<body>
    <div id="container">
    <?php require_once 'header.php'; ?>

        <main id="main-view">
            <div class="container-fuild" style="background-color: #1f2a3a">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-lg-3 px-0 bg-dark">
                            <?php require_once 'sidebar.php' ?>
                        </div>
                        <div class="col-md-9 bg-white">
                            <p class="fs-1 fw-bold m-4">Khôi phục danh sách phát</p>
                            <div class="m-4 border" style="background-color: #f8f8f8">
                                <p class="m-2">Bạn chưa xóa bất kỳ danh sách phát nào</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            require_once 'footer.php';
            ?>
        </main>
    </div>
</body>
<?php require_once 'script.php'; ?>
</html>