<?php
if (isset($_POST['upload'])) {
    $description = $_POST['description'][0];

    // Check for unwanted scripts in the description
    if (preg_match('/<script[\s\S]*?\/script>/', $description)) {
        $error = "Description contains disallowed script tags.";
        header("Location: index.php?error=" . urlencode($error));
        exit();
    }

    # Database connection file
    include 'db.conn.php';

    # Number of images
    $num_of_imgs = count($_FILES['images']['name']);

    for ($i = 0; $i < $num_of_imgs; $i++) {
        $image_name = $_FILES['images']['name'][$i];
        $tmp_name = $_FILES['images']['tmp_name'][$i];
        $error = $_FILES['images']['error'][$i];

        $description = $_POST['description'][$i]; // Get the corresponding description

        if ($error === 0) {
            $img_ex = pathinfo($image_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array('jpg', 'jpeg', 'png');

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid('IMG-', true) . '.' . $img_ex_lc;
                $img_upload_path = 'uploads/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                $sql = "INSERT INTO images (img_name, description) VALUES (?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$new_img_name, $description]);

                header("Location: index.php");
            } else {
                $em = "You can't upload files of this type";
                header("Location: index.php?error=$em");
            }
        } else {
            $em = "Unknown Error Occurred while uploading";
            header("Location: index.php?error=$em");
        }
    }
}
?>
