<?php
$koneksi = mysqli_connect("localhost", "root", "", "tic");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $pass = password_hash($_POST['pass'], PASSWORD_BCRYPT);
    $role = "user";

    $targetDirectory = "assets/uploads/"; 
    $targetFile = $targetDirectory . $nama . '_' . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size (if needed)
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"../". $targetFile)) {
            echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
            
            // Now, you can use $targetFile as the path to store in the database
            $query = "INSERT INTO user_login (email,nama, password,gambar,role) VALUES ('$email', '$nama', '$pass', '$targetFile','$role')";
            $result = mysqli_query($koneksi, $query);

            if ($result) {
                header("location:../view/login.php");
            } else {
                echo '<script>alert("Failed to register user.");</script>';
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Close connection
    mysqli_close($koneksi);
}
?>
