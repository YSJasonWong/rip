<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <title>成功儲存</title>
    <link rel="icon" type="image/x-icon" href="../assets/site/ripfavicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/customize.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="keywords" content="rip, media art, death" />
    <meta name="description" content="讓您預先紀錄最後的說話。" />
    <meta name="author" content="YS Jason Wong" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body class="bg-1 font-1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-md navbar-dark bg-black fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand px-3 text-white fw-bolder fs-3" href="mainZh.php">身後事務所</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <img id="navbutton" onmouseout="document.getElementById('navbutton').src = '../assets/site/nav-icon.png';" onmouseover="document.getElementById('navbutton').src = '../assets/site/nav-icon-hover.png';" src="../assets/site/nav-icon.png" width="25pt" class="float-end">
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header bg-black text-white">
                    <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">目錄</h5>
                    <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close">
                        <img id="closebutton" onmouseout="document.getElementById('closebutton').src = '../assets/site/cross-icon.png';" onmouseover="document.getElementById('closebutton').src = '../assets/site/cross-icon-hover.png';" src="../assets/site/cross-icon.png" width="20pt">
                    </button>
                </div>
                <div class="offcanvas-body bg-black text-white">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3" id="nav-ul">
                        <li class="nav-item">
                            <a class="nav-link text-white-50" aria-current="page" href="../about.html">關於計劃</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white-50" href="../termofuse.html">須知</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-1" href="../en/mainEn.php">Eng</a>
                        </li>
                </div>
                </ul>
            </div>
        </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-9">
                <h2 class="fs-2">你的檔案已被儲存<br>感謝閣下使用 請按<a class="btn fs-2 bg-black text-1" href="infoZh.php">此處</a>查看你的個人檔案</h2>
            </div>
        </div>
    </div>
    <footer class="container-fluid bg-black fixed-bottom py-3">
        <div class="row justify-content-between">
            <a href="termofuse.html" class="col-lg-1 text-decoration-none text-white-50">使用條款</a>
            <p class="col-md-7 text-white fw-normal">© 2022 <span class="text-1">Jason Wong</span>。版權所有 不得轉載</p>
        </div>
    </footer>
</body>

</html>