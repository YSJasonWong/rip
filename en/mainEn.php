<?php
include_once("../private/Admin_Functions.php");
session_start();

if (isset($_SESSION['loggedIn']) && isset($_SESSION['username'])) {
    header('Location: infoEn.php');
    exit();
} else {
    if (isset($_POST['username'])) {

        $uname = $_POST['username'];
        $pword = $_POST['pwd'];

        if ($admin->checkPassword($admin->tryConnect_rip_user(), $uname, $pword)) {
            session_regenerate_id();
            $_SESSION['loggedIn'] = true;
            $_SESSION['username'] = $uname;
            $_SESSION['startTime'] = time();
            $_SESSION['expireTime'] = $_SESSION['startTime'] + (15 * 60);
            header('Location: infoEn.php');
            exit();
        } else {
            echo "<script>alert('Invalid acount or incorrect password.');</script>";
            header('Location: mainEn.php');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Funeral Agency</title>
    <link rel="icon" type="image/x-icon" href="../assets/site/ripfavicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/customize.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="keywords" content="rip, media art, death" />
    <meta name="description" content="leave your last words here." />
    <meta name="author" content="YS Jason Wong" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body class="bg-1 font-1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-md navbar-dark bg-black fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand px-3 text-white fw-bolder fs-3" href="mainEn.php">Funeral Agency</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <img id="navbutton" onmouseout="document.getElementById('navbutton').src = '../assets/site/nav-icon.png';" onmouseover="document.getElementById('navbutton').src = '../assets/site/nav-icon-hover.png';" src="../assets/site/nav-icon.png" width="25pt" class="float-end">
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header bg-black text-white">
                    <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close">
                        <img id="closebutton" onmouseout="document.getElementById('closebutton').src = '../assets/site/cross-icon.png';" onmouseover="document.getElementById('closebutton').src = '../assets/site/cross-icon-hover.png';" src="../assets/site/cross-icon.png" width="20pt">
                    </button>
                </div>
                <div class="offcanvas-body bg-black text-white">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3" id="nav-ul">
                        <li class="nav-item">
                            <a class="nav-link text-1" href="../about.html">About Project</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-1" href="../termofuse.html">Term of Use</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-1" href="../zh/mainZh.php">中文</a>
                        </li>
                </div>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-sm-3">
                <form class="font-1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="on">
                    <fieldset>
                        <legend class="text-black fs-2 fw-bold">Log in</legend>
                        <span>Username: <br></span><input type="text" id="username" name="username" required><br>
                        <span>Password: <br></span><input type="password" id="pwd" name="pwd" required><br>
                        <input class="btn bg-black text-1 my-3" type="submit" name="submit" value="Log in">
                        <a href="registerEn.php" class="btn bg-black text-1 my-3">Register</a>
                        <!-- <a href="forgetPW.php" class="btn bg-black text-1 my-3">Forget password</a> -->
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <footer class="container-fluid bg-black fixed-bottom py-3">
        <div class="row justify-content-between">
            <a href="termofuse.html" class="col-lg-1 text-decoration-none text-white-50">Terms</a>
            <p class="col-md-7 text-white fw-normal">&#169; 2022 copyright <span class="text-1">Jason Wong</span> all right reserved.</p>
        </div>
    </footer>
</body>

</html>