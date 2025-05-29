<?php
function dump($dd)
{
    echo "<pre>";
    var_dump($dd);
    echo "</pre>";
}


dump($_FILES["file"]);

$path_imgs_file = __DIR__ . "/" . "imgs";
$file_name = $_FILES["file"]["name"];
$extension_file = pathinfo($file_name)['extension'];
$file_tmp = $_FILES["file"]["tmp_name"];

$extension_allowed = [
    "webp",
    "jpg",
    "png",
];

if (!in_array($extension_file, $extension_allowed)) {
    echo "Arquivo não permitido: " . $extension_file;
    exit;
}

if (move_uploaded_file($file_tmp, $path_imgs_file . "/" . $file_name)) {
    echo "Arquivo movido com sucesso.";
} else {
    echo "Ocorreu algum erro.";
}