<?php

trait Upload {

    public function storeImag($image)
    {
        $img_dir   = "../../src/images/uploads/";
        $path      = $image['name'];
        $temp_name = $image['tmp_name'];

        $target_file = $img_dir.basename($path); // public/uploads/6637.png
        $img_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); // png

        $new_file_name=time().".".$img_file_type;

        move_uploaded_file($temp_name, $img_dir.$new_file_name);

        return $new_file_name;
    }
}