<form action="php.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit" name="sub_pic">


</form>
<?php if (isset($_POST['sub_pic'])) {

    $image_dir = './image/'; //directory you want your image to be saved
    $imagename = $_FILES['image']['name'];
    $imagetempname = $_FILES['image']['tmp_name'];
    $imagetype = $_FILES['image']['type'];
    $imagesize = $_FILES['image']['size'];

    $imagepath = $image_dir . $imagename; //store image path for access

    $imageresult = move_uploaded_file($imagetempname, $imagepath); //combine also for access

    //if it fails tell the user something
    if (!$imageresult) {
        echo "<script>alert('Error uploading banner!!..Please try again')</script>";
        exit();
    }
    if (!get_magic_quotes_gpc()) {
        $imagename = addslashes($imagename);
        $imagepath = addslashes($imagepath);
    }

    //query to insert into database
    $query = mysqli_query("INSERT INTO table (image) VALUES ('$imagepath')");
}
?>