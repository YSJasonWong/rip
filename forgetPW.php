<?php
include_once ("../private/resetPW.php");
?>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-md navbar-dark bg-black fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand px-3 text-white fw-bolder fs-4" href="index.php">Funeral Agency 身後事務所</a>
        </div>
    </nav>
    
    <div class="container-fluid align-items-center justify-content-center">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="row justify-content-center align-items-center">
                <h2 class="col-md-auto text-center">忘記密碼</h2>
                <h2 class="col-md-auto text-center">Forget Password</h2>
                <div class="col-md-11">
                    <form class="row justify-content-center" method="POST">
                        <legend>Please enter your email address. 請輸入你的電郵地址。</legend>
                        <input type="text" name="email" size="25">
                        <input type="submit" name="submit" value="傳送 Send">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="container-fluid bg-black fixed-bottom py-3">
        <div class="row justify-content-between">
            <a href="termofuse.html" class="col-lg-1 text-decoration-none text-white-50">Term of use 使用條款</a>
            <p class="col-lg align-self-center text-white text-center fw-normal">© 2022 copyright <span
                    class="text-1">Jason Wong</span> all right reserved.<br>版權所有 不得轉載</p>
        </div>
    </footer>
</body>

</html>