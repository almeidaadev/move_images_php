<?php
function dump($dd)
{
    echo "<pre>";
    var_dump($dd);
    echo "</pre>";
}

$files_name = $_FILES["files"]["name"];
$path_imgs_file = __DIR__ . "/" . "imgs";

$extension_allowed = [
    "webp",
    "jpg",
    "png",
];

foreach ($files_name as $index => $file) {
    $extension_file = strtolower(pathinfo($file)['extension']);
    $file_tmp = $_FILES["files"]["tmp_name"][$index];
    $new_file_name = uniqid() . "." . $extension_file;

    if (!in_array($extension_file, $extension_allowed)) {
        echo "Arquivo não permitido: " . $file;
        exit;
    }

    if (move_uploaded_file($file_tmp, $path_imgs_file . "/" . $new_file_name)) {
        echo "Arquivo movido com sucesso.";
    } else {
        echo "Ocorreu algum erro.";
    }
}