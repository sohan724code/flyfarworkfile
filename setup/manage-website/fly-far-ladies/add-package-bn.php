<?php

include "./../../../session.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font awesome toolkit  -->
    <script src="https://kit.fontawesome.com/334d847a1e.js" crossorigin="anonymous"></script>

    <!-- ckeditor cdn  -->
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>



    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="./../../../css/style.css">

    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">

    <title>Fly Far International</title>
</head>



<body>
    <div class="page-container mb-5">
        <!-- Side Navbar -->
        <?php include "../../../side_navbar.php" ?>

        <main class="p-3">
            <div class="d-lg-none d-flex justify-content-end">
                <img src="./images/dashboardimage6.svg" alt="" class="h-5 w-5 mobile-menu">
            </div>

            <div class="mt-3 d-flex justify-content-between align-items-center">
                <div class="position-relative d-flex">
                    <img src="./images/dashboardimage4.svg" alt="" class="search-icon">
                    <input class="form-control form-control-sm ps-4" type="text" placeholder="Enter Keywords">
                </div>
                <div class="d-flex">
                    <div class="dropdown me-3 mt-1">
                        <div class="fs-6 dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            EN
                        </div>
                    </div>
                    <div class="top-icons">
                        <img src="./images/dashboardimage3.svg" alt="">
                    </div>
                    <div class="top-icons">
                        <img src="./images/dashboardimage2.svg" alt="">
                    </div>

                    <button type="button" class="btn btn-sm  dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"> <img src="images/avatar.jpg" alt="" width="30px"
                            style="margin-top: -5px;">
                    </button>
                    <ul class="dropdown-menu shadow" style="width: 200px;">
                        <div class="p-0 m-0">
                            <a class="dropdown-item" href="#">
                                Fahim
                            </a>
                        </div>
                        <div class="p-0 m-0">
                            <hr class="dropdown-divider">
                        </div>

                        <div><a class="dropdown-item" href="#">My Profile</a></div>
                        <div>
                            <hr class="dropdown-divider">
                        </div>
                        <div><a class="dropdown-item" href="#">Settings</a></div>
                        <div>
                            <hr class="dropdown-divider">
                        </div>
                        <div><a class="dropdown-item" href="#">Chat</a></div>
                        <div>
                            <hr class="dropdown-divider">
                        </div>
                        <div><a class="dropdown-item" href="#">Logout</a></div>
                    </ul>
                </div>
            </div>

            <!-- todo main content  starts here-->
            <div class="container">
                <form class="addpackage" id="addpackage" method="post" enctype="multipart/form-data">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <a class="back-btn" href="index.php">
                                    <i class="fa-solid fa-angle-left"></i>
                                    Back
                                </a>
                            </div>
                            <div class="add-package-box">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-3 d-none">
                                            <div class="adpack-input">
                                                <label for="packageid" class="form-label">Package ID</label>
                                                <input type="hidden" class="form-control" name="pkid"
                                                    value="<?php echo $PKG_Id ?>" placeholder="Package ID" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="adpack-input">
                                                <label for="packageid" class="form-label">Package Short Name</label>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Dusai Resort" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="adpack-input">
                                                <label for="duration" class="form-label">Long Title</label>
                                                <input type="text" class="form-control" name="title" id="title"
                                                    placeholder="Sajek Hill View Resort 2 Days 3 Night" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="adpack-input">
                                                <label for="shorttitle" class="form-label">Region</label>
                                                <input type="text" class="form-control" name="region" id="shorttitle"
                                                    placeholder="Sajek" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="adpack-input">
                                                <label for="longtitle" class="form-label">Country</label>
                                                <input type="text" class="form-control" name="country" id="longtitle"
                                                    placeholder="Bangladesh" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="adpack-input">
                                                <label for="destination" class="form-label">Package Code</label>
                                                <input type="text" class="form-control" name="packageCode" required
                                                    id="destination" placeholder="Package Code">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="adpack-input">
                                                <label for="destination" class="form-label">Destination</label>
                                                <input type="text" class="form-control" name="destination" required
                                                    id="destination" placeholder="Destination">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="adpack-input">
                                                <label for="destination" class="form-label">Night</label>
                                                <input type="number" class="form-control" name="night" id="destination"
                                                    required placeholder="3">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="adpack-input">
                                                <label for="destination" class="form-label">Day</label>
                                                <input type="number" required class="form-control" name="day"
                                                    id="destination" placeholder="2">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="adpack-input">
                                                <label class="form-label" for="tourtype">Plan Type</label>
                                                <select class="form-select" name="plan" id="tripType" required>
                                                    <option selected>Select Type</option>
                                                    <option value="inbound">Domestic</option>
                                                    <option value="outbound">International</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="adpack-input">
                                                <label class="form-label" for="tripType">Trip Type</label>
                                                <select class="form-select" name="tripType" id="tripType" required>
                                                    <option selected>Select Type</option>
                                                    <option value="night">Night Trip</option>
                                                    <option value="outbound">Day Trip</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="adpack-input">
                                                <label for="groupsize" class="form-label">Group Size</label>
                                                <input type="number" class="form-control" name="group-size"
                                                    id="groupsize" placeholder="Group Size" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="adpack-input">
                                                <label class="form-label" for="triptheme">Tour Type</label>
                                                <select class="form-select" name="tour-type" id="triptheme" required>
                                                    <option selected>Select Type</option>
                                                    <option value="budget">Budget</option>
                                                    <option value="luxurious">Luxurious</option>
                                                    <option value="trekking">Trekking</option>
                                                    <option value="relax">Relax</option>
                                                    <option value="activity">Activity</option>
                                                    <option value="others">others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="adpack-input">
                                                <label for="cost" class="form-label">Cost</label>
                                                <input type="text" class="form-control" name="price" id="cost" required
                                                    placeholder="Cost">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="adpack-input">
                                                <label for="bookclosedate" class="form-label">Book Close Date</label>
                                                <input type="date" class="form-control" required
                                                    name="last_cancellation_date" id="bookclosedate">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="adpack-input">
                                                <label for="journeystartdate" required class="form-label">Journey Start
                                                    Date</label>
                                                <input type="date" class="form-control" name="start_date"
                                                    id="journeystartdate">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="adpack-input">
                                                <label for="journeyenddate" required class="form-label">Journey End
                                                    Date</label>
                                                <input type="date" class="form-control" name="end_date"
                                                    id="journeyenddate">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="adpack-input">
                                                <label for="coverimage" class="form-label">Cover Image (864 X
                                                    486)</label>
                                                <input type="file" class="form-control-file" name="coverimage" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="adpack-input">
                                                <label for="coverimage" class="form-label">Slider Images x 6 (864 X
                                                    486)</label>
                                                <input type="file" required class="form-control-file" name="files[]"
                                                    multiple>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="abpack-textbox">
                                                <label for="sight5image" class="form-label">Day Plan</label>
                                                <textarea class="form-control" required name="dayPlan"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="abpack-textbox">
                                                <label for="sight5image" class="form-label">Food</label>
                                                <textarea class="form-control" name="food" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="abpack-textbox">
                                                <label for="sight5image" class="form-label">Inclusion</label>
                                                <textarea class="form-control" required name="inclusion"></textarea>
                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="abpack-textbox">
                                                <label for="sight5image" class="form-label">Exclusion</label>
                                                <textarea class="form-control" required name="exclusion"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="abpack-textbox">
                                                <label for="sight5image" class="form-label">Places will be
                                                    visited</label>
                                                <textarea class="form-control" required name="places"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="abpack-textbox">
                                                <label for="sight5image" class="form-label">Instructions</label>
                                                <textarea class="form-control" required name="instruction"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="abpack-textbox">
                                                <label for="sight5image" class="form-label">Refund</label>
                                                <textarea class="form-control" required name="refund"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="abpack-textbox">
                                                <label for="sight5image" class="form-label">Offer</label>
                                                <textarea class="form-control" required name="offer"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 d-flex justify-content-end my-3">
                                            <button type="submit" class="save-changes">Add Package</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>

                <?php

                    $servername = "sg1-ts2.a2hosting.com";
                    $username = "flyfarin_flyfarladies";
                    $password = "@Kayes70455";
                    $dbname = "flyfarin_flyfarladies";

                    // Create connection
                    $connect = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($connect->connect_error) {
                        die("Connection failed: " . $connect->connect_error);
                    }

                    $sql = "SELECT * FROM packages ORDER BY id DESC LIMIT 1";
                    $result = $connect->query($sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            $outputString = preg_replace('/[^0-9]/', '', $row["pkid"]);
                            $number= (int)$outputString + 1;
                            $PKG_Id = "PKG-$number";									
                    }
                    } else {
                        $PKG_Id ="PKG-1000";
                    }


                    if ($_SERVER['REQUEST_METHOD'] === 'POST'){

                        $code = $_POST["packageCode"];
                        $name = $_POST["name"];
                        $title = $_POST["title"];
                        $night = $_POST["night"];
                        $day = $_POST["day"];
                        $type = $_POST["tripType"];
                        $region = $_POST["region"];
                        $country = $_POST["country"];
                        $continent = $_POST["continent"];
                        $start_date = $_POST["start_date"];
                        $end_date = $_POST["end_date"];
                        $dayPlan = $_POST["dayPlan"];
                        $last_cancellation_date = $_POST["last_cancellation_date"];
                        $tour_type = $_POST["tour-type"];
                        $plan = $_POST["plan"];
                        $group_size = $_POST["group-size"];
                        $price = $_POST["price"];
                        $inclusion = $_POST["inclusion"];
                        $exclusion  = $_POST["exclusion"];
                        $food = $_POST["food"];
                        $places  = $_POST["places"];
                        $instruction = $_POST["instruction"];
                        $refund = $_POST["refund"];
                        $offer = $_POST["offer"];


                        $upload_dir = '../../../../CDN/images/'."$code/".DIRECTORY_SEPARATOR;         
                        mkdir($upload_dir, 0777, true);
                            $fileName = $_FILES["coverimage"]["name"];
                            $fileType = pathinfo($fileName,PATHINFO_EXTENSION);
                            $targetFilePath = $upload_dir."coverimage.$fileType";
                            
                            $allowTypes = array('jpg','png','jpeg','gif','webp','PNG','JPEG','jpeg');
                        
                            if(in_array($fileType, $allowTypes)){
                                // Upload file to server
                                if(move_uploaded_file($_FILES["coverimage"]["tmp_name"], $targetFilePath)){
                                    echo "File Uploaded";
                                    
                                }else{
                                    $statusMsg = "Sorry, there was an error uploading your file.";
                                }
                            }else{
                                $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
                            }
                        
                        $allowed_types = array('jpg', 'png', 'jpeg', 'gif','webp');
                        $maxsize = 1024 * 1024;

                        if(!empty(array_filter($_FILES['files']['name']))) {
                            if(count(array_filter($_FILES['files']['name'])) <= 6){
                                foreach ($_FILES['files']['tmp_name'] as $key => $value) {
                                    $file_tmpname = $_FILES['files']['tmp_name'][$key];
                                    $file_name =  $_FILES['files']['name'][$key];
                                    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
                                    $rename = "sightImage$key".".$file_ext";
                                    
                                    $file_size = $_FILES['files']['size'][$key];

                                    // Set upload file path
                                    $filepath = $upload_dir.$rename;

                                    // Check file type is allowed or not
                                    if(in_array(strtolower($file_ext), $allowed_types)) {

                                        if ($file_size > $maxsize)		
                                            echo "Error: File size is larger than the allowed limit.";

                                        if(file_exists($filepath)) {
                                            $filepath = $upload_dir.time().$rename;
                                            
                                            if( move_uploaded_file($file_tmpname, $filepath)) {
                                                echo "{$rename} successfully uploaded <br />";
                                            }
                                            else {					
                                                echo "Error uploading {$rename} <br />";
                                            }
                                        }
                                        else {
                                        
                                            if( move_uploaded_file($file_tmpname, $filepath)) {
                                                echo "{$rename} successfully uploaded <br />";
                                            }
                                            else {					
                                                echo "Error uploading {$rename} <br />";
                                            }
                                        }
                                    }
                                    else {				
                                        // If file extension not valid
                                        echo "Error uploading {$rename}";
                                        echo "({$file_ext} file type is not allowed)<br / >";
                                    }
                                }
                                
                            }else{
                                echo "Cannot Upload More than 6 File";
                            }
                            
                        }
                        else {
                            
                            // If no files selected
                            echo "No files selected.";
                        }

                        $Cover  = "coverimage.$fileType";
                        

                    $sql = "INSERT INTO `packagesNew`(`pkid``cover`, `code`, `name`, `title`, `night`, `day`, `trip_type`, `tour_type`, `plan`, `region`, `country`, `continent`, `start_date`, `end_date`, `dayplan`, `inclusion`, `exclusion`, `places`, `food`, `instruction`, `refund`, `last_cancellation_date`, `offer`, `group_size`, `price`) 
                                        VALUES ('$PKG_Id','$Cover','$code', '$name', '$title', '$night','$day','$type','$tour_type','$plan','$region','$country','$continent','$start_date','$end_date','$dayPlan','$inclusion','$exclusion','$places','$food','$instruction','$refund','$last_cancellation_date','$offer','$group_size','$price')";

                    if ($connect->query($sql) === TRUE) {
                        print '<script>
                                                            swal({
                                                            title: "Success!",
                                                            text: "Package Added Successfully!",
                                                            type: "success",
                                                            confirmButtonText: "Cool"
                                                            },
                                                            function(){
                                                                window.location=\'package.php\'
                                                                });
                                                        </script>';
                    } else {
                        echo "Error: " . $sql . "<br>" . $connect->error;
                    }

                    $connect->close();

                    }

                    ?>



            </div>
            <!-- todo main content  ends here-->
        </main>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- External JavaScript -->
    <script src="../../../js/script.js"></script>

    <!-- DataTable -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#editor1'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#editor2'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#editor3'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#editor4'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#editor5'))
        .catch(error => {
            console.error(error);
        });
    </script>





</body>

</html>