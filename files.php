<?php

if (isset($_POST["submit"]))
{
    try
    {
        $uploadFolder = "uploads/";

        //alapvető információk
        $fileName = basename($_FILES["kep"]["name"]);
        $tempFileName = $_FILES["kep"]["tmp_name"];
        $fileSize = $_FILES["kep"]["size"];
        $error = $_FILES["kep"]["error"];
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        $targetFile = $uploadFolder . $fileName;

        if ($error)
        {
            throw new Exception("Hiba történt a fájl feltöltése során: " . $error);
        }

        //2. a feltőltési mappa létezése vagy írása
        if (!is_dir($uploadFolder) || !is_writable($uploadFolder))
        {
            throw new Exception("A feltöltési mappa nem létezik vagy nem írható.");
        }

        //3. ha már létezik ilyen fájl
        if (file_exists($targetFile))
        {
            throw new Exception("Már létezik ilyen nevű fájl.");
        }

        //4. fájl méret ellenőrzése (pl max 5MB)
        if ($fileSize > 5 * 1024 * 1024)
        {
            throw new Exception("A fájl mérete túl nagy. Maximum 5MB engedélyezett.");
        }

        //5. fájl típus ellenőrzése (pl csak képek)
        if (!in_array($fileType, ['jpg', 'jpeg', 'png', 'gif']))
        {
            throw new Exception("Csak JPG, JPEG, PNG és GIF fájlok engedélyezettek.");
        }

        //Fájl áthelyezése temp -> targetbe
        if (move_uploaded_file($tempFileName, $targetFile))
        {
            echo "A fájl sikeresen feltöltve: " . htmlspecialchars($fileName);
        }
        else
        {
            throw new Exception("Hiba történt a fájl áthelyezése során.");
        }



    }catch(Exception $ex)
    {
        echo "Hiba történt: " . $ex->getMessage();
    } 

}  


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FileUpload</title>
</head>
<body>
    <h2>Fájl feltöltése</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="kép">Válassz egy képet a feltöltéshez</label>
        <input type="file" name="kep" id="kep">
        <button type="submit" name="submit">Feltöltés</button>
    </form>
</body>
</html>