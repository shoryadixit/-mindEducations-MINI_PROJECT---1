<?php

session_start();

if (isset($_SESSION['tutoruser'])){
    if (isset($_POST['upload'])){
        $course_name = $_POST['cname'];
        $file_pdf_name = $_FILES['inputpdf']['name'];
        $file_pdf_size = $_FILES['inputpdf']['size'];
        $file_pdf_type = $_FILES['inputpdf']['type'];
        $file_pdf_tmp_name = $_FILES['inputpdf']['tmp_name'];

        $file_img_name = $_FILES['inputimg']['name'];
        $file_img_size = $_FILES['inputimg']['size'];
        $file_img_type = $_FILES['inputimg']['type'];
        $file_img_tmp_name = $_FILES['inputimg']['tmp_name'];

        if($course_name == $file_pdf_name && $course_name == $file_img_name){
    
            if ($file_pdf_type == "pdf" && $file_img_type == "jpg" || $file_img_type == "jpeg" || $file_img_type == "png"){
                $folder_pdf = "uploadcourses/pdf/".$file_pdf_name;
                $folder_img = "uploadcourses/img/".$file_img_name;
                if (move_uploaded_file($file_pdf_tmp_name, $folder_pdf) && move_uploaded_file($file_img_tmp_name, $folder_img)){
                    echo "<script>alert('Upload Succesful !!!')</script>";
                    header("Refresh: 0; URL=welcome.php");
                    $_SESSION['course_add'] = true;
                } else {
                    echo "<script>alert('Some Error Occured !!!')</script>";
                    header("Refresh: 0; URL=welcome.php");
                }
            } else {
                echo "<script>alert('Filetype must be pdf Thumbnail type must be in Image format !!!')</script>";
                header("Refresh: 0; URL=welcome.php");
            }
        } else{
            echo "<script>alert('Entered course name and uploaded files name should be same !!!')</script>";
            header("Refresh: 0; URL=welcome.php");
        }
    }
}
?>
