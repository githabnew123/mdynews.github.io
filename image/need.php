$files = glob("../image/".$title . '/*');
foreach($files as $file){
    if(is_file($file)){
        unlink($file);
    }
}
rmdir("../image/".$title);

