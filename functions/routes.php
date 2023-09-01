<?php 
    session_start();
    require 'functions.php';
    if (isset($_POST['save_post'])) {
        $address = "";
        $media_id = "";
        $title = $_POST['title'];
        $title_type = $_POST['title_type']; //Select Type of Title == default, post is poem
        $sub_title = $_POST['sub_title'];   // null == default, post is poem or magazine
        $general_type = $_POST['general_type']; //Select General Type == default, post is poem or magazine
        if($general_type == "Global"){
            $address = $_POST['global_location'];
        }else if($general_type == "Local"){
            $address = $_POST['city'].", ".$_POST['address'];
        }
        $author_name = $_POST['author_name'];
        $content = $_POST['content'];
        $admin = $_SESSION['user'];
        $post_date = date("Y-m-d",time()); 
        $update_date = date("Y-m-d",time());
        if ($_FILES['files'] != null) {
                $picture = "";
                $media_type = "";
                $picture_to_store = "";
                $ground[] = $_FILES['files'];
                if (file_exists("../image/".$title)) {
                    die("File already exit");
                }else{
                    mkdir("../image/".$title,0777, true);
                }
                foreach ($ground as $key => $value) {
                    for ($i=0; $i <sizeof($value['name']) ; $i++) { 
                        $picture_to_store = $picture_to_store.$title.($i+1).",";
                        $picture = $title.($i+1);
                        move_uploaded_file($_FILES['files']['tmp_name'][$i], '../image/'.$title.'/'.$picture);
                        $media_type = $media_type.$_FILES['files']['type'][$i].",";
                    }
                }
                media_save($picture_to_store,$media_type,$admin,$post_date,$update_date);
                $media_id = media_id();
            }
        if ($title_type == "Select Type of Title") {
            poem_save($title,$content,$author_name,$media_id,$admin,$post_date,$update_date);
            header('Location:../admin/post.php');
        }elseif ($title_type != "Select Type of Title" && $sub_title == null) {
            magazines_save($title,$content,$title_type,$media_id,$author_name,$admin,$post_date,$update_date);
            header('Location:../admin/post.php');
        }else{
            news_save($title,$sub_title,$content,$address,$general_type,$title_type,$media_id,$author_name,$admin,$post_date,$update_date);
            header('Location:../admin/post.php');
        }
    }
    if (isset($_POST['register'])) {
        $name = $_POST['f_name'].$_POST['l_name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $conf_pass = $_POST['conf_pass'];
        if($pass==$conf_pass){
            $pass = md5($pass);
            register($name,$email,$pass);
        }else{
            header('Location:../admin/register.php');
        }
    }
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        if (login($email,$pass)) {
            $admin = user($email,$pass);
            $_SESSION['user'] = $admin;
            header('Location:../admin/post.php');
        }else{
            header('Location:../admin');
        }
    }
    if (isset($_GET['logout'])) {
        unset($_SESSION['user']);
        header('Location:../admin');
    }