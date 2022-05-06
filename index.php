<!DOCTYPE html>
<html lang="en">

<head>
    <title>Funeral Agency 身後事務所</title>
    <link rel="icon" type="image/x-icon" href="assets/site/ripfavicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/customize.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="keywords" content="rip, media art, death" />
    <meta name="description" content="leave your last words here. &#10;讓您預先紀錄最後的說話。" />
    <meta name="author" content="YS Jason Wong" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body class="bg-1 font-1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-md navbar-dark bg-black fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand px-3 text-white fw-bolder fs-3" href="index.php">Funeral Agency 身後事務所</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <img id="navbutton" onmouseout="document.getElementById('navbutton').src = 'assets/site/nav-icon.png';" onmouseover="document.getElementById('navbutton').src = 'assets/site/nav-icon-hover.png';" src="assets/site/nav-icon.png" width="25pt" class="float-end">
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header bg-black text-white">
                    <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Menu 目錄</h5>
                    <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close">
                        <img id="closebutton" onmouseout="document.getElementById('closebutton').src = 'assets/site/cross-icon.png';" onmouseover="document.getElementById('closebutton').src = 'assets/site/cross-icon-hover.png';" src="assets/site/cross-icon.png" width="20pt">
                    </button>
                </div>
                <div class="offcanvas-body bg-black text-white">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3" id="nav-ul">
                        <li class="nav-item">
                            <a class="nav-link text-white-50" href="termofuse.html">Term of Use 使用條款</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white-50" href="about.html">About project 關於計劃</a>
                        </li>
                </div>
                </ul>
            </div>
        </div>
        </div>
    </nav>
    <!-- <div class="container-fluid py-5"></div> -->
    <div class="container-fluid align-items-center justify-content-center">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="row justify-content-center align-items-center">
                <h2 class="col-md-auto text-center">請選擇語言</h2>
                <h2 class="col-md-auto text-center">Select Language</h2>
                <div class="col-md-11">
                    <div class="row justify-content-center">
                        <a href="zh/mainZh.php" class="col-4 col-md-2 btn bg-black text-white m-3">中文</a>
                        <a href="en/mainEn.php" class="col-4 col-md-2 btn bg-black text-white m-3">English</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="container-fluid bg-black fixed-bottom py-3">
        <div class="row justify-content-between">
            <a href="termofuse.html" class="col-lg-1 text-decoration-none text-white-50">Term of use 使用條款</a>
            <p class="col-lg align-self-center text-white text-center fw-normal">&#169; 2022 copyright <span class="text-1">Jason Wong</span> all right reserved.<br>版權所有 不得轉載</p>
        </div>
    </footer>
</body>

</html>