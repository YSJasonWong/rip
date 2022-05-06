<?php

if (isset($_POST['email'])) {
    if ($admin->checkEmailExist($admin->tryConnect_rip_user(), $email)) {
        $confirmedEmail = $_POST['email'];
        
    }
}
