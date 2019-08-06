<?php
    ob_start();
    include_once 'mysqli.php';
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    switch($_REQUEST['t']){
        case 'demo-form':demo_form();break;
        case 'sign-in':sign_in();break;
        case 'sign-up':sign_up();break;
        case 'logout':log_out();break;
        case 'admin-account':admin_account();break;
        defualt:break;
    }

    function demo_form(){
        if(isset($_POST['app_name'])){
            if(filter_input(INPUT_POST,'user_name') != null){
                $name = filter_input(INPUT_POST,'user_name');
                $email = filter_input(INPUT_POST,'user_email');
                $id = 0;
            }
            else {
                $name = filter_input(INPUT_COOKIE,'name');
                $email = filter_input(INPUT_COOKIE,'email');
                $id = $_COOKIE['id'];
            }
            $app_name = filter_input(INPUT_POST,'app_name');
            $_SESSION['app_name'] = $app_name;
            $description = filter_input(INPUT_POST,'description');
            if($_POST['type'] == "other"){
                $type = filter_input(INPUT_POST,'other');
            }
            else $type = filter_input(INPUT_POST,'type');
            $res = $GLOBALS['conn']->query("INSERT INTO demo_app (user_id,user_name,app_name,description,type,state) VALUES ('$id','$name','$app_name','$description','$type','Not yet')");
            if($res){
                setcookie('app',$app_name,time()+(60*24*60*60),"/");
                header("Location: ./");
            }
            else {
                echo $GLOBALS['conn']->error;
                setcookie('app','0',time()+(60*24*60*60),"/");

        };


        }
        // else echo "asdjasn".filter_input(INPUT_POST,'user_name').filter_input(INPUT_POST,'app_name');
    }
//////////////////////////////////////////
    function sign_in(){
        echo "sign_in";
        $email = filter_input(INPUT_POST,'email');
        $password =  $_POST['password'];
        $result = $GLOBALS['conn']->query("SELECT name,id,password FROM clients WHERE email='$email'");
        if($result){
            $row = $result->fetch_assoc();
            if(password_verify($password,$row['password']))
            {
                echo "<br>password is good <br>";
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['email'] = $email;
                $_SESSION['sign_error'] = "";
                setcookie("id",$_SESSION['id'],time()+(60*24*60*60),"/");
                setcookie("name",$_SESSION['name'],time()+(60*24*60*60),"/");
                setcookie("email",$_SESSION['email'],time()+(60*24*60*60),"/");
                header("Location: ./");
            }
            else {echo $_SESSION['sign_error'] = "Email or Password you entered is Wrong";header("Location: ./");}
        }
        else {$_SESSION['sign_error'] = "Email is wrong or doesn't exist";header("Location: ./");}
    }

///////////////////////////////////////////////
    
    function sign_up(){
        echo "sign_up";
        if(isset($_POST{'name'})){
            $name = filter_input(INPUT_POST,'name');
            $email = filter_input(INPUT_POST,'email');
            $password =  password_hash($_POST['password'],PASSWORD_BCRYPT);
            $result = $GLOBALS['conn']->query("SELECT name,id,password FROM clients WHERE email='$email'");
            if($result->num_rows == 0){
                $ress = $GLOBALS['conn']->query("INSERT INTO clients (name,email,password) VALUES ('$name','$email','$password')");
                if($ress){
                    $res = $GLOBALS['conn']->query("SELECT id FROM clients WHERE email='$email'");
                    $row = $res->fetch_assoc();
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['name'] = $name;
                    $_SESSION['email'] = $email;
                    $_SESSION['sign_error'] = "";
                    setcookie("id",$_SESSION['id'],time()+(60*24*60*60),"/");
                    setcookie("name",$_SESSION['name'],time()+(60*24*60*60),"/");
                    setcookie("email",$_SESSION['email'],time()+(60*24*60*60),"/");
                    header("Location: ./");
                }
            }
            else {
                $_SESSION['sign_error'] = "Email already registered, please sign in";
                header("Location: ./");
            }
        }
        else echo "whaat";
    }

////////////////////////////////

    function log_out(){
        session_destroy();
        setcookie('id','',1,'/');
        setcookie('name','',1,'/');
        setcookie('email','',1,'/');
        header("Location: ./");
    }
    
    function admin_account(){
            $name = test_input($_POST['name']);
            $info = test_input($_POST['info']);
            $link = test_input($_POST['link']);
            $GLOBALS['conn']->query("INSERT INTO projects (name,info,href) VALUES ('$name','$info','$link')");
            echo "oka";
            if(isset($_FILES['image'])){
                    echo "<br>upload is set<br>";
                    
                    $target_dir = "./uploads/";
                    $ex = explode(".",$_FILES['image']['name']);
                    $_FILES['image']['name'] = $name.".jpg";
                    echo $_FILES['image']['name'];
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                    // Check if image file is a actual image or fake image
                    
                        $check = getimagesize($_FILES["image"]["tmp_name"]);
                        if($check !== false) {
                            echo "File is an image - " . $check["mime"] . ".";
                            $uploadOk = 1;
                        } else {
                            echo "File is not an image.";
                            $uploadOk = 0;
                        }
                    
                    // Check if file already exists
                    if (file_exists($target_file)) {
                        unlink($target_file);
                        echo "Sorry, file already exists.";
                        $target_dir = "./uploads/";
                    $ex = explode(".",$_FILES['image']['name']);
                    $_FILES['image']['name'] = $name.".jpg";
                    echo $_FILES['image']['name'];
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);
                    $uploadOk = 1;
                    
                    }
                    // Check file size
                    if ($_FILES["image"]["size"] > 5000000) {
                        echo "Sorry, your file is too large.";
                        $uploadOk = 0;
                    }
                    // Allow certain file formats
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = 0;
                    }
                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                        echo "Sorry, your file was not uploaded.";
                    // if everything is ok, try to upload file
                    } else {
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                        }
                    }
                    echo "<br>process successfully done";
                }
            else die( "where file!");
//die("<br>".$_FILES["image"]["size"]);
            header('Location: ./');
        }
    

    ob_end_flush();