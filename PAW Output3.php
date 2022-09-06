<form method="POST" action="" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Upload Foto Diri</td>
            <td>:</td>
            <td><input type="file" name="file"></td>
        </tr>
        <tr>
        <td><input type="submit" name="hasil" value="KIRIM"></td>
        </tr>
    </table>
</form>

<?php
    if(isset($_POST["hasil"])){
        $file = $_FILES["file"]["name"];
        $tmp_name = $_FILES["file"]["tmp_name"];
        move_uploaded_file($tmp_name, "images/".$file);
    }
?>

<h1>Foto yang di upload : <img src="images/<?php echo $file ?>" > </h1>