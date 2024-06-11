<?php







// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "uni2";

// // Create connection to MySQL server without specifying a database
// $conn = mysqli_connect($servername, $username, $password);

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // Create database if it doesn't exist
// $db_query = "CREATE DATABASE IF NOT EXISTS $dbname";
// if (!mysqli_query($conn, $db_query)) {
//     die("Error creating database: " . mysqli_error($conn));
// }

// // Select the database
// mysqli_select_db($conn, $dbname);

// // Create table if it doesn't exist
// $table_query = "CREATE TABLE IF NOT EXISTS personaldetails (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     profilePic BLOB NOT NULL,
//     firstName VARCHAR(50) NOT NULL,
//     lastName VARCHAR(50) NOT NULL,
//     email VARCHAR(50) NOT NULL,
//     mobile VARCHAR(15) NOT NULL,
//     cnic VARCHAR(15) NOT NULL,
//     domicile VARCHAR(50) NOT NULL,
//     gender VARCHAR(10) NOT NULL,
//     address_1 TEXT NOT NULL,
//     city VARCHAR(50) NOT NULL,
//     province VARCHAR(50) NOT NULL,
//     fatherName VARCHAR(50) NOT NULL,
//     fatherCnic VARCHAR(15) NOT NULL,
//     fatherOccupation VARCHAR(50) NOT NULL,
//     fatherIncome VARCHAR(50) NOT NULL,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if (!mysqli_query($conn, $table_query)) {
//     die("Error creating table: " . mysqli_error($conn));
// }

// if (isset($_POST['save'])) {
//     $profilePic = $_POST['profilePic'];
//     $firstName = $_POST['firstName'];
//     $lastName = $_POST['lastName'];
//     $email = $_POST['email'];
//     $mobile = $_POST['mobile'];
//     $cnic = $_POST['cnic'];
//     $domicile = $_POST['domicile'];
//     $gender = $_POST['gender'];
//     $address_1 = $_POST['address_1'];
//     $city = $_POST['city'];
//     $province = $_POST['province'];
//     $fatherName = $_POST['fatherName'];
//     $fatherCnic = $_POST['fatherCnic'];
//     $fatherOccupation = $_POST['fatherOccupation'];
//     $fatherIncome = $_POST['fatherIncome'];

//     $sql_query = "INSERT INTO personaldetails (profilePic, firstName, lastName, email, mobile, cnic, domicile, gender, address_1, city, province, fatherName, fatherCnic, fatherOccupation, fatherIncome)
//     VALUES ('$profilePic', '$firstName', '$lastName', '$email', '$mobile', '$cnic', '$domicile', '$gender', '$address_1', '$city', '$province', '$fatherName', '$fatherCnic', '$fatherOccupation', '$fatherIncome')";

//     if (mysqli_query($conn, $sql_query)) {
//         echo '<!DOCTYPE html>
//         <html lang="en">
//         <head>
//             <meta charset="UTF-8">
//             <meta name="viewport" content="width=device-width, initial-scale=1.0">
//             <title>Submitted Successfully</title>
//         </head>
//         <body>
//             <div style="text-align: center;">
//                 <br><br>
//             <img src="success.png" alt="">
//             <br><br>
            
//             <h1 style="font-weight: bold;font-size: 40px;font-family: Verdana, Geneva, Tahoma, sans-serif;">Your Data Is Submitted Successfully.</h1>
//             </div>
//         </body>
//         </html>';
//     } else {
//         echo '<!DOCTYPE html>
//         <html lang="en">
//         <head>
//             <meta charset="UTF-8">
//             <meta name="viewport" content="width=device-width, initial-scale=1.0">
//             <title>Error</title>
//         </head>
//         <body>
//             <div style="text-align: center;">
//                 <br><br>
//             <img width="370px" src="error.png" alt="">
//             <br><br>
            
//             <h1 style="font-weight: bold;font-size: 40px;font-family: Verdana, Geneva, Tahoma, sans-serif;">Error Found</h1>
//             </div>
//         </body>
//         </html>';
//     }

//     mysqli_close($conn);
// }











$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uni3";

// Create connection to MySQL server without specifying a database
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database if it doesn't exist
$db_query = "CREATE DATABASE IF NOT EXISTS $dbname";
if (!mysqli_query($conn, $db_query)) {
    die("Error creating database: " . mysqli_error($conn));
}

// Select the database
mysqli_select_db($conn, $dbname);

// Create table if it doesn't exist
$table_query = "CREATE TABLE IF NOT EXISTS personaldetails (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    profilePic VARCHAR(255) NOT NULL,
    firstName VARCHAR(50) NOT NULL,
    lastName VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    mobile VARCHAR(15) NOT NULL,
    cnic VARCHAR(15) NOT NULL,
    domicile VARCHAR(50) NOT NULL,
    gender VARCHAR(10) NOT NULL,
    address_1 TEXT NOT NULL,
    city VARCHAR(50) NOT NULL,
    province VARCHAR(50) NOT NULL,
    fatherName VARCHAR(50) NOT NULL,
    fatherCnic VARCHAR(15) NOT NULL,
    fatherOccupation VARCHAR(50) NOT NULL,
    fatherIncome VARCHAR(50) NOT NULL,
    matricObtainedMarks VARCHAR(50) NOT NULL,
    matricTotalMarks VARCHAR(50) NOT NULL,
    matricSubject1 VARCHAR(50) NOT NULL,
    matricSubject2 VARCHAR(50) NOT NULL,
    matricSubject3 VARCHAR(50) NOT NULL,
    matricSubject4 VARCHAR(50) NOT NULL,
    matricDocuments VARCHAR(255) NOT NULL,
    studyFields VARCHAR(50) NOT NULL,
    fscObtainedMarks VARCHAR(50) NOT NULL,
    fscTotalMarks VARCHAR(50) NOT NULL,
    fscSubject1 VARCHAR(50) NOT NULL,
    fscSubject2 VARCHAR(50) NOT NULL,
    fscSubject3 VARCHAR(50) NOT NULL,
    fscSubject4 VARCHAR(50) NOT NULL,
    fscDocuments VARCHAR(255) NOT NULL,
    chooseField VARCHAR(50) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (!mysqli_query($conn, $table_query)) {
    die("Error creating table: " . mysqli_error($conn));
}

if (isset($_POST['save'])) {
    // Handle file upload
    $target_dir = "profilePic/";
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $cnic = $_POST['cnic'];
    $domicile = $_POST['domicile'];
    $gender = $_POST['gender'];
    $address_1 = $_POST['address_1'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $fatherName = $_POST['fatherName'];
    $fatherCnic = $_POST['fatherCnic'];
    $fatherOccupation = $_POST['fatherOccupation'];
    $fatherIncome = $_POST['fatherIncome'];
    $matricObtainedMarks = $_POST['matricObtainedMarks'];
    $matricTotalMarks = $_POST['matricTotalMarks'];
    $matricSubject1 = $_POST['matricSubject1'];
    $matricSubject2 = $_POST['matricSubject2'];
    $matricSubject3 = $_POST['matricSubject3'];
    $matricSubject4 = $_POST['matricSubject4'];
    // $matricDocuments = $_POST['matricDocuments'];
    $studyFields = $_POST['studyFields'];
    $fscObtainedMarks = $_POST['fscObtainedMarks'];
    $fscTotalMarks = $_POST['fscTotalMarks'];
    $fscSubject1 = $_POST['fscSubject1'];
    $fscSubject2 = $_POST['fscSubject2'];
    $fscSubject3 = $_POST['fscSubject3'];
    $fscSubject4 = $_POST['fscSubject4'];
    // $fscDocuments = $_POST['fscDocuments'];
    $chooseField = $_POST['chooseField'];

    // Generate a unique file name using CNIC
    $profileFileType = strtolower(pathinfo($_FILES["profilePic"]["name"], PATHINFO_EXTENSION));
    $profilePic = $target_dir . $cnic . "."."_profile." . $profileFileType;

    $matricFileType = strtolower(pathinfo($_FILES["matricDocuments"]["name"], PATHINFO_EXTENSION));
    $matricDocuments = $target_dir . $cnic . "." ."_matric.". $matricFileType;

    $fscFileType = strtolower(pathinfo($_FILES["fscDocuments"]["name"], PATHINFO_EXTENSION));
    $fscDocuments = $target_dir . $cnic . "." ."_fsc." . $fscFileType;
    $uploadOk = 1;

    

 // Check if files are actual images or fake images
 $checkProfilePic = getimagesize($_FILES["profilePic"]["tmp_name"]);
 $checkMatricDocuments = getimagesize($_FILES["matricDocuments"]["tmp_name"]);
 $checkFscDocuments = getimagesize($_FILES["fscDocuments"]["tmp_name"]);
 if ($checkProfilePic === false || $checkMatricDocuments === false || $checkFscDocuments === false) {
     echo "File is not an image.";
     $uploadOk = 0;
 }

   // Check file size
   if ($_FILES["profilePic"]["size"] > 5000000 || $_FILES["matricDocuments"]["size"] > 5000000 || $_FILES["fscDocuments"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}


 // Allow certain file formats
 $allowedFormats = ["jpg", "png", "jpeg", "gif"];
 if (!in_array($profileFileType, $allowedFormats) || !in_array($matricFileType, $allowedFormats) || !in_array($fscFileType, $allowedFormats)) {
     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
     $uploadOk = 0;
 }


    

    

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    }
     else {
        if (move_uploaded_file($_FILES["profilePic"]["tmp_name"], $profilePic) &&
            move_uploaded_file($_FILES["matricDocuments"]["tmp_name"], $matricDocuments) &&
            move_uploaded_file($_FILES["fscDocuments"]["tmp_name"], $fscDocuments)) {
            

            $sql_query = "INSERT INTO personaldetails (profilePic, firstName, lastName, email, mobile, cnic, domicile, gender, address_1, city, province, fatherName, fatherCnic, fatherOccupation, fatherIncome,matricObtainedMarks,matricTotalMarks,matricSubject1,matricSubject2,matricSubject3,matricSubject4,matricDocuments,studyFields,fscObtainedMarks,fscTotalMarks,fscSubject1,fscSubject2,fscSubject3,fscSubject4,fscDocuments,chooseField)
            VALUES ('$profilePic', '$firstName', '$lastName', '$email', '$mobile', '$cnic', '$domicile', '$gender', '$address_1', '$city', '$province', '$fatherName', '$fatherCnic', '$fatherOccupation', '$fatherIncome' , '$matricObtainedMarks', '$matricTotalMarks', '$matricSubject1', '$matricSubject2', '$matricSubject3', '$matricSubject4', '$matricDocuments', '$studyFields', '$fscObtainedMarks', '$fscTotalMarks', '$fscSubject1', '$fscSubject2', '$fscSubject3', '$fscSubject4', '$fscDocuments', '$chooseField')";

            if (mysqli_query($conn, $sql_query)) {
                echo '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Submitted Successfully</title>
                </head>
                <body>
                    <div style="text-align: center;">
                        <br><br>
                    <img src="success.png" alt="">
                    <br><br>
                    
                    <h1 style="font-weight: bold;font-size: 40px;font-family: Verdana, Geneva, Tahoma, sans-serif;">Your Data Is Submitted Successfully.</h1>
                    </div>
                </body>
                </html>';
            } 
            else {
                echo '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Error</title>
                </head>
                <body>
                    <div style="text-align: center;">
                        <br><br>
                    <img width="370px" src="error.png" alt="">
                    <br><br>
                    
                    <h1 style="font-weight: bold;font-size: 40px;font-family: Verdana, Geneva, Tahoma, sans-serif;">Error Found</h1>
                    </div>
                </body>
                </html>';
            }
        } 
        else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    mysqli_close($conn);
}
















?>


