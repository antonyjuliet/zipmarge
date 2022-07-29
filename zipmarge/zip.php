<?php
// $file = 'C:/wamp64/www/test/703394-SWOT Presentation PPT-4-3.zip';

// // get the absolute path to $file
// $path = 'C:/wamp64/www/test/ext/';

// $zip = new ZipArchive;
// $res = $zip->open($file);
// if ($res === TRUE) {
  // // extract it to the path we determined above
  // $zip->extractTo($path);
  // $zip->close();
  // echo "WOOT! $file extracted";
// } else {
  // echo "Doh! I couldn't open ";
// }



// Enter the name of directory
$pathdir = 'C:/wamp64/www/test/ext/'; 
  
// Enter the name to creating zipped directory
$zipcreated = "C:/wamp64/www/test/new-of-Zip.zip.tftydjgrftgdtyh";
  
// Create new zip class
$zip = new ZipArchive;
   
if($zip -> open($zipcreated, ZipArchive::CREATE ) === TRUE) {
      
    // Store the path into the variable
    $dir = opendir($pathdir);
       
    while($file = readdir($dir)) {
        if(is_file($pathdir.$file)) {
            $zip -> addFile($pathdir.$file, $file);
        }
    }
    $zip ->close();
}
  
?>