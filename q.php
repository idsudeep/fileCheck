<?php

$filenam= rand();

error_reporting(E_ALL);

$pagename = 'hold';

$newFileName = './folder/'.$filenam.".php";
$newFileContent = '<?php echo "Anything..."; ?>';



if (file_put_contents($newFileName, $newFileContent) !== false) {
    echo "File created (" . basename($newFileName) . ")";
} else {
    echo "Cannot create file (" . basename($newFileName) . ")";
}

/*
array_map('unlink', array_filter(
    (array) array_merge(glob("folder/*"))));

    file_put_contents('index.php',' <?php echo index; ?>'); 

    unlink($files[0]);
*/ 

$fileDir = './folder/';
$fileCount = 0;
$files = glob($fileDir.'/*');
if($files){
    $fileCount = count($files);
}
echo 'Total no of file present in Folder is '.$fileCount;
    
?>