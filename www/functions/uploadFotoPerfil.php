<?php

if(session_status() == PHP_SESSION_NONE)
{
  session_start();
}

function upload($target_dir, $file) 
{
  $imageFileType = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
  $target_file = $target_dir . "/" . uniqid(rand(), true) . "." .$imageFileType;
  $uploadOk = true;

  // Check if file already exists
  if (file_exists($target_file)) 
  {    
    $uploadOk = false;  
  }
  // Check file size
  if ($_FILES["foto-perfil"]["size"] > 500000)
  {
    $uploadOk = false;
  } 
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg")
  {
    $uploadOk = false;  
  }
  // Check if $uploadOk is set to 0 by an error
  if (!$uploadOk) 
  {
    echo "Falha ao subir o arquivo";
  } 
  else 
  {
    if (move_uploaded_file($file["tmp_name"], $target_file)) 
    {
      echo "The file ". htmlspecialchars( basename($file["name"])). " has been uploaded.";
    } 
    else 
    {
      echo "Sorry, there was an error uploading your file.";
    }

  }  
return $target_file;
}