<?php

class admin
{
    static function tryConnect_rip_user()
    {
        $servername = "***************@**********.com";
        $username = "**************";
        $password = "*******************";
        $DBname = "rip_user";
        $dbConnect = mysqli_connect($servername, $username, $password, $DBname);
        if (mysqli_connect_error()) {
            echo "<script>alert('Connect to database failed.');</script>";
            die("Connection failed: " . $dbConnect->connect_error);
            return false;
        }
        return $dbConnect;
    }

    //return string array of all user info 
    static function getAllUserInfo($dbConnect)
    {
        $sql = "SELECT * FROM user_info";
        $a = mysqli_query($dbConnect, $sql);
        $b = mysqli_fetch_assoc($a);
        return isset($b) ? $b : 9999;
    }

    static function checkUserExist($dbConnect, $uname)
    {
        $sql = "SELECT * FROM user_info WHERE username = '$uname'";
        $result = mysqli_query($dbConnect, $sql);
        $re = !is_null(mysqli_fetch_assoc($result));
        return $re;
    }

    static function checkEmailExist($dbConnect, $email)
    {
        $sql = "SELECT * FROM user_info WHERE email = '$email'";
        $result = mysqli_query($dbConnect, $sql);
        $re = !is_null(mysqli_fetch_assoc($result));
        return $re;
    }

    static function setUserInfo($dbConnect, $user, $pass, $email)
    {
        //$user= hash("SHA512", $user);
        $pass = hash("SHA512", $pass);
        $sql = "INSERT INTO user_info VALUES ('$user','$pass', '$email')";
        $result = mysqli_query($dbConnect, $sql);
        if ($result == false) {
            echo "<script>alert('Update to Info error.');</script>";
        }
    }

    static function setUserData($dbConnect, $user, $nickname)
    {
        $sql = "INSERT INTO `user_data`(`data_exist`, `username`, `nickname`, `phone_number`, `phone_passcode`, `emergency_contact_name`, `emergency_contact_phone`, `actions`, `accept`, `actknowledgement`) VALUES (0,'$user','$nickname',NULL,NULL,'','',NULL,'1','0')";
        $result = mysqli_query($dbConnect, $sql);
        if ($result == false) {
            echo "<script>alert('Update to Data error.');</script>";
        }
    }

    static function checkDataExist($dbConnect, $user)
    {
        $sql = "SELECT `data_exist` FROM `user_data` WHERE `username` = '$user'";
        $result = mysqli_query($dbConnect, $sql);
        // echo mysqli_fetch_assoc($result)['data_exist'];
        return (mysqli_fetch_assoc($result)['data_exist'] == "0") ? false : true;
    }

    static function updateUserData($dbConnect, $username, $nickname, $phone_number, $phone_passcode, $emergency_contact_name, $emergency_contact_phone, $actions, $accept, $actknowledgement)
    {
        $sql = "UPDATE `user_data` SET `data_exist`= '1', `nickname` = '$nickname', `phone_number`= '$phone_number',`phone_passcode`= '$phone_passcode',`emergency_contact_name`= '$emergency_contact_name',`emergency_contact_phone`= '$emergency_contact_phone',`actions`= '$actions',`accept`= '$accept',`actknowledgement`= '$actknowledgement' WHERE `username` = '$username'";
        $result = mysqli_query($dbConnect, $sql);
        if ($result == false) {
            echo "<script>alert('Upload Error.');</script>";
        }
    }

    //return json 
    static function showAllUserData($dbConnect)
    {
        echo "jason2jj";
        //$sql = "SELECT * FROM `user_data`";
        //$result = mysqli_query($dbConnect, $sql);
        //$array = mysqli_fetch_assoc($result);

        //$encoded = json_encode($array);
        // $jsonbb = json_decode($json); 
        //echo var_dump($result);
    }

    static function showOneUserData($dbConnect, $uname)
    {
        $sql = "SELECT * FROM `user_data` WHERE `username` = '$uname'";
        $result = mysqli_query($dbConnect, $sql);
        $array = mysqli_fetch_assoc($result);
        $encoded = json_encode($array, 16, 7600);
        // $jsonbb = json_decode($json); 
        echo var_dump($encoded);
    }

    static function fetchUserData($dbConnect, $uname, $target)
    {
        $sql = "SELECT `$target` FROM `user_data` WHERE `username` = '$uname'";
        $result = mysqli_query($dbConnect, $sql);
        if ($result) {
            while ($row = mysqli_fetch_row($result)) {
                if (!is_null($row[0])) {
                    echo $row[0];
                }
            }
        }
    }

    static function showAllUserNameActions($dbConnect)
    {
        $sql = "SELECT `nickname` , `actions` FROM `user_data` WHERE `accept` = '1'";
        $result = mysqli_query($dbConnect, $sql);
        $json ="";
        while ($all_channel = mysqli_fetch_assoc($result)) {
            $nname = $all_channel['nickname'];
            $action = $all_channel['actions'];
            //$json .= '{"nickname":"' . $nname . '","actions":"' . $action . '"},';
            $json = json_decode('{"nickname":"' . $nname . '","actions":"' . $action . '"}');
            $output[] = $json;
        }
        //$json = substr($json, 0, -1);
        //$encoded = json_encode($array);
        // $jsonbb = json_decode($encoded); 
        // foreach ($output as $e) {
        //     echo $e->nickname;
        // }
        //return '{"result":"['.$json.']"}"';
        return $output;
    }

    static function checkPassword($dbConnect, $user, $pass)
    {
        $pass = hash("SHA512", $pass);
        $sql = "SELECT * FROM user_info WHERE username ='$user' AND password ='$pass' limit 1";
        $result = mysqli_query($dbConnect, $sql);
        $re = !is_null(mysqli_fetch_assoc($result));
        return $re;
    }
}

$admin = new admin;
