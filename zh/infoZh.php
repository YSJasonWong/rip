<?php
include_once('../private/Admin_Functions.php');
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['loggedIn'] = false;
?>

    <!DOCTYPE html>
    <html lang="zh-Hant">

    <head>
        <title>請重新登入</title>
        <link rel="icon" type="image/x-icon" href="../assets/site/ripfavicon.ico" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.4.0/p5.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.4.0/addons/p5.sound.min.js"></script>
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
                                <a class="nav-link text-white-50" href="termofuseZh.html">須知</a>
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
                    <h2 class="fs-2">登入錯誤<br>請再次<a class="btn fs-2 bg-black text-1 m-2" href="mainZh.php">登入</a></h2>
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

    <?php
} else {
    $now = time();
    if ($now > $_SESSION['expireTime']) {
        $_SESSION['loggedIn'] = false;
        session_unset();
        session_destroy();
    ?>
        <!DOCTYPE html>
        <html lang="zh-Hant">

        <head>
            <title>請重新登入</title>
            <link rel="icon" type="image/x-icon" href="../assets/site/ripfavicon.ico" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.4.0/p5.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.4.0/addons/p5.sound.min.js"></script>
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
                                    <a class="nav-link text-white-50" href="termofuseZh.html">須知</a>
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
                        <h2 class="fs-2">連線逾時<br>請再次<a class="btn fs-2 bg-black text-1 m-2" href="mainZh.php">登入</a></h2>
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
    <?php

    } else {
        if (isset($_POST['phone_number'])) {
            $username = $_SESSION['username'];
            $nickname = $_POST["nickname"];
            $phone_number = $_POST["phone_number"];
            $phone_passcode = $_POST["phone_passcode"];
            $emergency_contact_name = $_POST["emergency_contact_name"];
            $emergency_contact_phone = $_POST["emergency_contact_phone"];
            $actions = $_POST["actions"];
            $accept = $_POST["accept"];
            $actknowledgement = $_POST["actknowledgement"];
            $admin->updateUserData($admin->tryConnect_rip_user(), $username, $nickname, $phone_number, $phone_passcode, $emergency_contact_name, $emergency_contact_phone, $actions, $accept, $actknowledgement);
            header('Location: SuccessUpdateZh.php');
        }

    ?>

        <!DOCTYPE html>
        <html lang="zh-Hant">

        <head>
            <title>歡迎! 身後事務所</title>
            <link rel="icon" type="image/x-icon" href="../assets/site/ripfavicon.ico" />
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link href="../css/customize.css" rel="stylesheet">
            <meta charset="utf-8">
            <meta name="keywords" content="rip, media art, death" />
            <meta name="description" content="讓您預先紀錄最後的說話。" />
            <meta name="author" content="YS Jason Wong" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        </head>

        <body class="bg-1 font-1" onload="setMode();setInput();">
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
                                    <a class="nav-link text-1" href="../about.html">關於計劃</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-1" href="../termofuse.html">須知</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-1" href="../en/mainEn.php">Eng</a>
                                </li>
                                <li class="nav-item">
                                    <a href="../private/logout.php" class="btn ms-2 p-1 bg-1 text-black">登出</a>
                                </li>
                        </div>
                        </ul>
                    </div>
                </div>
                </div>
            </nav>
            <div class="container-fluid vh-100 py-5">
                <div class="row align-items-center justify-content-center pt-5">
                    <div class="col-9 justify-content-center">
                        <h2 class="fs-1 fw-bold">歡迎, <?php echo $admin->fetchUserData($admin->tryConnect_rip_user(), $_SESSION["username"], "nickname"); ?>!</h2>

                    </div>
                </div>

                <div class="row align-items-center justify-content-center pb-5">
                    <div class="col-md-10 pb-5" id="fillData">
                        <h2>編輯個人檔案</h2>
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" autocomplete="on" class="row justify-content-center">
                            <div class="col-lg-6">
                                <label>上載你的自選遺照: <span class="label">(可選填)</span></label><br>
                                <input name="file" type="file" /><br>
                                <label>用戶名稱:</label><br>
                                <input id="formUsername" type="text" size="20" name="username" readonly><br>
                                <label>匿稱:</label><br>
                                <input id="formNickname" type="text" size="20" name="nickname"><br>
                                <label>電話號碼:</label><br>
                                <input id="formPhoneNumber" type="text" size="10" name="phone_number"><br>
                                <label>解鎖電話密碼:</label><br>
                                <input id="formPhonePasscode" type="text" size="10" name="phone_passcode"><br>
                                <label>緊急聯絡人名稱:</label><br>
                                <input id="formEmergencyName" type="text" size="15" name="emergency_contact_name"><br>
                                <label>緊急聯絡人電話:</label><br>
                                <input id="formEmergencyPhone" type="text" size="10" name="emergency_contact_phone"><br>
                            </div>
                            <div class="col-lg-6 pb-5">
                                <label>請在此紀錄您的說話或心願。 (必須)</label><br>
                                <textarea id="formActions" name="actions" rows="10" cols="30" required></textarea><br>
                                <input type="checkbox" id="formAccept" name="accept" value="1">
                                <label>已閱讀並同意身後事務所使用你的個人資料</label><br>
                                <input type="checkbox" id="formActknowledgement" name="actknowledgement" value="1">
                                <label>已告訴親朋好友關於此網站</label><br>
                                <input class="btn bg-black text-1 text-end" name="submit" type="submit" value="儲存">
                            </div>
                        </form>
                        <button class="btn bg-black text-1 text-end" onclick="editMode();">重置</button>
                        <button class="btn bg-black text-1 text-end" onclick="viewMode();">返回</button>
                    </div>
                    <div class="col-md-5 justify-content-center pb-5" id="showData">
                        <h2>您的個人檔案</h2>
                        <img width='100px' src="/uploads/rip/profile_pics/<?php echo $_SESSION['username'] ?>.jpg">
                        <ul>
                            <li>用戶名稱: <span id="displayUsername"></span></li>
                            <li>匿稱: <span id="displayNickname"></span></li>
                            <li>電話號碼: <span id="displayPhoneNumber"></span></li>
                            <li>解鎖電話密碼: <span id="displayPhonePasscode"></span></li>
                            <li>緊急聯絡人名稱: <span id="displayEmergencyName"></span></li>
                            <li>緊急聯絡人電話: <span id="displayEmergencyPhone"></span></li>
                            <li>已儲存的遺言/心願: <br><span id="displayActions"></span></li>
                            <li><img src="" id="displayAccept" width="25">同意身後事務所使用你的個人資料 </li>
                            <li><img src="" id="displayActknowledgement" width="25">已告訴親朋好友關於此網站 </li>
                        </ul>
                        <a class="btn bg-black text-1" onclick="editMode();">更改個人檔案</a>
                    </div>
                </div>
            </div>
            <script>
                function setInput() {
                    document.getElementById('displayUsername').innerText = '<?php echo $_SESSION['username'] ?>';
                    document.getElementById('formUsername').placeholder = '<?php echo $_SESSION['username'] ?>';
                    document.getElementById('formUsername').value = '<?php echo $_SESSION['username'] ?>';

                    document.getElementById('displayNickname').innerText = '<?php $admin->fetchUserData($admin->tryConnect_rip_user(), $_SESSION['username'], 'nickname'); ?>';
                    document.getElementById('formNickname').placeholder = '<?php $admin->fetchUserData($admin->tryConnect_rip_user(), $_SESSION['username'], 'nickname'); ?>';
                    document.getElementById('formNickname').value = '<?php $admin->fetchUserData($admin->tryConnect_rip_user(), $_SESSION['username'], 'nickname'); ?>';

                    document.getElementById('displayPhoneNumber').innerText = '<?php $admin->fetchUserData($admin->tryConnect_rip_user(), $_SESSION['username'], 'phone_number'); ?>';
                    document.getElementById('formPhoneNumber').placeholder = '<?php $admin->fetchUserData($admin->tryConnect_rip_user(), $_SESSION['username'], 'phone_number'); ?>';
                    document.getElementById('formPhoneNumber').value = '<?php $admin->fetchUserData($admin->tryConnect_rip_user(), $_SESSION['username'], 'phone_number'); ?>';

                    document.getElementById('displayPhonePasscode').innerText = '<?php $admin->fetchUserData($admin->tryConnect_rip_user(), $_SESSION['username'], 'phone_passcode'); ?>';
                    document.getElementById('formPhonePasscode').placeholder = '<?php $admin->fetchUserData($admin->tryConnect_rip_user(), $_SESSION['username'], 'phone_passcode'); ?>';
                    document.getElementById('formPhonePasscode').value = '<?php $admin->fetchUserData($admin->tryConnect_rip_user(), $_SESSION['username'], 'phone_passcode'); ?>';

                    document.getElementById('displayEmergencyName').innerText = '<?php $admin->fetchUserData($admin->tryConnect_rip_user(), $_SESSION['username'], 'emergency_contact_name'); ?>';
                    document.getElementById('formEmergencyName').placeholder = '<?php $admin->fetchUserData($admin->tryConnect_rip_user(), $_SESSION['username'], 'emergency_contact_name'); ?>';
                    document.getElementById('formEmergencyName').value = '<?php $admin->fetchUserData($admin->tryConnect_rip_user(), $_SESSION['username'], 'emergency_contact_name'); ?>';

                    document.getElementById('displayEmergencyPhone').innerText = '<?php $admin->fetchUserData($admin->tryConnect_rip_user(), $_SESSION['username'], 'emergency_contact_phone'); ?>';
                    document.getElementById('formEmergencyPhone').placeholder = '<?php $admin->fetchUserData($admin->tryConnect_rip_user(), $_SESSION['username'], 'emergency_contact_phone'); ?>';
                    document.getElementById('formEmergencyPhone').value = '<?php $admin->fetchUserData($admin->tryConnect_rip_user(), $_SESSION['username'], 'emergency_contact_phone'); ?>';

                    document.getElementById('displayActions').innerText = '<?php $admin->fetchUserData($admin->tryConnect_rip_user(), $_SESSION['username'], 'actions'); ?>';
                    document.getElementById('formActions').placeholder = '<?php $admin->fetchUserData($admin->tryConnect_rip_user(), $_SESSION['username'], 'actions'); ?>';
                    document.getElementById('formActions').value = '<?php $admin->fetchUserData($admin->tryConnect_rip_user(), $_SESSION['username'], 'actions'); ?>';

                    if ('<?php $admin->fetchUserData($admin->tryConnect_rip_user(), $_SESSION['username'], 'accept'); ?>' == 1) {
                        document.getElementById('formAccept').checked = true;
                        document.getElementById('displayAccept').src = "../assets/site/yes-icon.png";
                    } else {
                        document.getElementById('displayAccept').src = "../assets/site/no-icon.png";
                    }

                    if ('<?php $admin->fetchUserData($admin->tryConnect_rip_user(), $_SESSION['username'], 'actknowledgement'); ?>' == 1) {
                        document.getElementById('formActknowledgement').checked = true;
                        document.getElementById('displayActknowledgement').src = "../assets/site/yes-icon.png";
                    } else {
                        document.getElementById('displayActknowledgement').src = "../assets/site/no-icon.png";
                    }
                }

                function setMode() {
                    if ('<?php $admin->fetchUserData($admin->tryConnect_rip_user(), $_SESSION['username'], 'data_exist') ?>' == 0) {
                        editMode();
                    } else {
                        viewMode();
                    }
                }

                function editMode() {
                    setInput();
                    document.getElementById('fillData').style.display = 'block';
                    document.getElementById('showData').style.display = 'none';

                }

                function viewMode() {
                    setInput();
                    document.getElementById('fillData').style.display = 'none';
                    document.getElementById('showData').style.display = 'block';

                }
            </script>
            <footer class="container-fluid bg-black fixed-bottom py-3">
                <div class="row justify-content-between">
                    <a href="termofuse.html" class="col-lg-1 text-decoration-none text-white-50">使用條款</a>
                    <p class="col-md-7 text-white fw-normal">© 2022 <span class="text-1">Jason Wong</span>。版權所有 不得轉載</p>
                </div>
            </footer>
        </body>

        </html>

<?php

    }
}
