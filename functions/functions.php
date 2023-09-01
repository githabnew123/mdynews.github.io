<?php
    function poem_save($title,$content,$author_name,$media_id,$user_id,$created_at,$updated_at){
        require 'dbcon.php';
        $sql = "INSERT into poem__tables(title,content,author_name,media_id,user_id,created_at,updated_at) values ((:title),(:content),(:author_name),(:media_id),(:user_id),(:created_at),(:updated_at))";
        $stmt = $connection->prepare($sql);
        $stmt ->bindParam(':title',$title);
        $stmt ->bindParam(':content',$content);
        $stmt ->bindParam(':author_name',$author_name);
        $stmt ->bindParam(':media_id',$media_id);
        $stmt ->bindParam(':user_id',$user_id);
        $stmt ->bindParam(':created_at',$created_at);
        $stmt ->bindParam(':updated_at',$updated_at);
        $stmt ->execute();
    }
    function news_save($title,$subtitle,$content,$location,$general_type,$type_of_title,$media_id,$author_name,$user_id,$created_at,$updated_at){
        require 'dbcon.php';
        $sql = "INSERT INTO news(title,subtitle,content,location,general_type,type_of_title,media_id,author_name,user_id,created_at,updated_at) VALUES ((:title),(:subtitle),(:content),(:location),(:general_type),(:type_of_title),(:media_id),(:author_name),(:user_id),(:created_at),(:updated_at))";
        $stmt = $connection->prepare($sql);
        $stmt ->bindParam(':title',$title);
        $stmt ->bindParam(':subtitle',$subtitle);
        $stmt ->bindParam(':content',$content);
        $stmt ->bindParam(':location',$location);
        $stmt ->bindParam(':general_type',$general_type);
        $stmt ->bindParam(':type_of_title',$type_of_title);
        $stmt ->bindParam(':media_id',$media_id);
        $stmt ->bindParam(':author_name',$author_name);
        $stmt ->bindParam(':user_id',$user_id);
        $stmt ->bindParam(':created_at',$created_at);
        $stmt ->bindParam(':updated_at',$updated_at);
        $stmt -> execute();
    }
    function magazines_save($title,$content,$type_of_magazine,$media_id,$author_name,$user_id,$created_at,$updated_at){
        require 'dbcon.php';
        $sql = "INSERT INTO magazines(title,content,type_of_magazine,media_id,author_name,user_id,created_at,updated_at) VALUES ((:title),(:content),(:type_of_magazine),(:media_id),(:author_name),(:user_id),(:created_at),(:updated_at))";
        $stmt = $connection->prepare($sql);
        $stmt ->bindParam(':title',$title);
        $stmt ->bindParam(':content',$content);
        $stmt ->bindParam(':type_of_magazine',$type_of_magazine);
        $stmt ->bindParam(':media_id',$media_id);
        $stmt ->bindParam(':author_name',$author_name);
        $stmt ->bindParam(':user_id',$user_id);
        $stmt ->bindParam(':created_at',$created_at);
        $stmt ->bindParam(':updated_at',$updated_at);
        $stmt -> execute();
    }
    function media_save($name,$media_type,$user_id,$created_at,$updated_at){
        require 'dbcon.php';
        $sql = "INSERT into photo__videos(name,media_type,user_id,created_at,updated_at) values((:name),(:media_type),(:user_id),(:created_at),(:updated_at))";
        $stmt = $connection->prepare($sql);
        $stmt ->bindParam(':name',$name);
        $stmt ->bindParam(':media_type',$media_type);
        $stmt ->bindParam(':user_id',$user_id);
        $stmt ->bindParam(':created_at',$created_at);
        $stmt ->bindParam(':updated_at',$updated_at);
        $stmt ->execute();
    }
    function media_id(){
        require 'dbcon.php';
        $sql = "SELECT * FROM photo__videos";
        $stmt = $connection->prepare($sql);
        $stmt-> execute();
        $data = $stmt->fetchAll();
        return sizeof($data);
    }
    function register($name,$email,$pass){
        require 'dbcon.php';
        $sql = "INSERT into users(name,email,password) values ((:name),(:email),(:pass))";
        $stmt = $connection->prepare($sql);
        $stmt ->bindParam(':name',$name);
        $stmt ->bindParam(':email',$email);
        $stmt ->bindParam(':pass',$pass);
        $stmt-> execute();
        header('Location:../admin/index.php');
    }
    function login($email,$pass){
        require 'dbcon.php';
        $sql = "SELECT * from users where email = (:email)";
        $stmt = $connection->prepare($sql);
        $stmt ->bindParam(':email',$email);
        $stmt-> execute();
        $data = $stmt->fetchAll();
        if (!$data[0]['email']) {
            echo "<script>alert('sir does not exit')</script>";
        }else{
            if($data[0]['password']==md5($pass)){
                return true;
            }else{
                return false;
            }
        }
    }
    function user($email,$pass){
        require 'dbcon.php';
        $sql = "SELECT * from users where email = (:email)";
        $stmt = $connection->prepare($sql);
        $stmt ->bindParam(':email',$email);
        $stmt-> execute();
        $data = $stmt->fetchAll();
        if (!$data[0]['email']) {
            echo "<script>alert('sir does not exit')</script>";
        }else{
            if($data[0]['password']==md5($pass)){
                return $data[0]['email'];
            }else{
                return false;
            }
        }
    }
    function get_local_news(){
        require 'dbcon.php';
        $sql = "SELECT * from news where general_type = 'Local' order by id desc";
        $stmt = $connection->prepare($sql);
        $stmt ->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
    function get_global_news(){
        require 'dbcon.php';
        $sql = "SELECT * from news where general_type = 'Global' order by id desc";
        $stmt = $connection->prepare($sql);
        $stmt ->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
    function get_magzines(){
        require 'dbcon.php';
        $sql = "SELECT * from magazines order by id desc";
        $stmt = $connection->prepare($sql);
        $stmt ->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
    function get_poems(){
        require 'dbcon.php';
        $sql = "SELECT * from poem__tables order by id desc";
        $stmt = $connection->prepare($sql);
        $stmt ->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
    function get_heading_news(){
        require 'dbcon.php';
        $sql = "SELECT * from news order by id desc";
        $stmt = $connection->prepare($sql);
        $stmt ->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
    function get_image_with_id($y){
        require 'dbcon.php';
        $sql = "SELECT name, media_type from photo__videos where id = (:id)";
        $stmt = $connection->prepare($sql);
        $stmt ->bindParam(':id',$y);
        $stmt ->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
    function post_target($page_target,$type_of_site){
        $data = null;
        if($type_of_site=='Local'){
            $data = get_local_news();
        }elseif($type_of_site=='Global'){
            $data = get_global_news();
        }elseif($type_of_site=='Poems'){
            $data = get_poems();
        }
        $i = sizeof($data);
        $limit = $i%4;
        return $limit;
    }
    function post_info($id,$post_type){
        require 'dbcon.php';
        $sql = "";
        if ($post_type=='Local') {
            $sql = "SELECT * from news where id=(:id)";
        }elseif($post_type=='Global'){
            $sql = "SELECT * from news where id=(:id)";
        }elseif($post_type=='Magazine'){
            $sql = "SELECT * from magazines where id=(:id)";
        }elseif($post_type=='Poem'){
            $sql = "SELECT * from poem__tables where id=(:id)";
        }
        $stmt = $connection->prepare($sql);
        $stmt ->bindParam(':id',$id);
        $stmt ->execute();
        $data = $stmt->fetchAll();
        return $data;
    }
?>