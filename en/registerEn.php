<?php

include_once("../private/Admin_Functions.php");

session_start();
if (isset($_POST['username'])) {

    $uname = $_POST['username'];
    $nickname = $_POST['nickname'];
    $pword = $_POST['pwd'];
    $pword2 = $_POST['pwd2'];
    $email = $_POST['email'];

    $unameValid = "/([a-zA-Z][0-9]?){8-20}/i";
    $emailValid = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
    $error = "";

    // if (preg_match($unameValid, $uname)==0) {
    //     $error .= "Username should be consist of 8-20 letters and digits.";
    // }
    // else 
    if (preg_match($emailValid, $email) == 0) {
        $error .= "Incorrect email format.";
    }
    if ($pword != $pword2) {
        $error .= "The entered passwords do not match.";
    }
    //echo var_dump($admin->checkUserExist($admin->tryConnect_rip_user(), $uname));
    if ($admin->checkUserExist($admin->tryConnect_rip_user(), $uname)) {
        $error .= "Username has already been taken.";
    }
    if ($admin->checkEmailExist($admin->tryConnect_rip_user(), $email)) {
        $error .= "Email has been registered.";
    }

    if (empty($error)) {
        $admin->setUserInfo($admin->tryConnect_rip_user(), $uname, $pword, $email);
        $admin->setUserData($admin->tryConnect_rip_user(), $uname, $nickname);
        header("location: SuccessRegEn.php");
    } else {
        echo $error;
        echo "<script>alert('" . $error . "');</script>";
        header("Location: registerEn.php", true, 303);
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
    <div class="container-fluid pb-5">
        <div class="row vh-100 align-items-center justify-content-center py-5">
            <div class="col-md-6 py-5">
                <form name="form" class="font-1 pb-5" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <legend class="text-black fs-2 fw-bold text-start">Register Account</legend>
                    <label>Username: </label><input class="m-2" type="text" id="username" name="username" maxlength="20" size="15" pattern="^([a-z]+[A_Z]+[0-9]+){8-20}$" required>
                    <p>Consist of 8-20 letters or numbers</p>
                    <label>Nickname: </label><input class="m-2" type="text" id="nickname" name="nickname" maxlength="20" size="15" required><br>
                    <label>Email: </label><input class="m-2" type="email" id="email" name="email" maxlength="50" size="30" pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$" required><br>
                    <label>Password: </label><input class="m-2" type="password" id="pwd" name="pwd" maxlength="20" size="20" pattern="^[(a-z)+(A-Z)+(0-9)+(\.\,\^\&\*\@\#\$\%)+]{8-20}$" onchange="checkPasswordinput(this.value);checkPasswordMatch();" required><br>
                    <ul>
                        Your password should consist of:
                        <li id="length">8-20 characters</li>
                        <li id="upChar">at least 1 upper case letter</li>
                        <li id="lowChar">at least 1 lower case letter</li>
                        <li id="num">at least 1 number</li>
                        <li id="specialChar">at least 1 special character: .,^&*@#$%</li>
                    </ul>
                    <script>
                        function checkPasswordinput() {
                            let pw1 = document.forms["form"]["pwd"].value;
                            if (/.{8,20}/.test(pw1)) {
                                document.getElementById('length').style.color = '#00ff1a';
                            } else {
                                document.getElementById('length').style.color = 'red';
                            }
                            if (/[a-z]+/.test(pw1)) {
                                document.getElementById('lowChar').style.color = '#00ff1a';
                            } else {
                                document.getElementById('lowChar').style.color = 'red';
                            }
                            if (/[A-Z]+/.test(pw1)) {
                                document.getElementById('upChar').style.color = '#00ff1a';
                            } else {
                                document.getElementById('upChar').style.color = 'red';
                            }
                            if (/[0-9]+/.test(pw1)) {
                                document.getElementById('num').style.color = '#00ff1a';
                            } else {
                                document.getElementById('num').style.color = 'red';
                            }
                            if (/[\.\,\^\&\*\@\#\$\%]+/.test(pw1)) {
                                document.getElementById('specialChar').style.color = '#00ff1a';
                            } else {
                                document.getElementById('specialChar').style.color = 'red';
                            }
                        }

                        function checkPasswordMatch() {
                            let pw1 = document.forms["form"]["pwd"].value;
                            let pw2 = document.forms["form"]["pwd2"].value;
                            if (pw1 == pw2) {
                                document.getElementById('matched').style.color = '#00ff1a';
                            } else {
                                document.getElementById('matched').style.color = 'red';
                            }
                        }
                    </script>
                    <label>Enter password again: </label><input class="m-2" type="password" id="pwd2" name="pwd2" maxlength="20" size="20" onchange="checkPasswordMatch()" required><br>
                    <ul>
                        <li id="matched">password matched</li>
                    </ul>
                    <input class="btn bg-black text-1 my-3" type="submit" name="submit" value="Register">
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