<?php

    include_once ("./../../../session.php");

    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.flyfarladies.com/v1.0/HomeContent.php?all',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    ));

    $response = curl_exec($curl);
    curl_close($curl);  
    $Result = json_decode($response, true);

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

    <!--Bootstrap DataTable CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="./../../../css/style.css">
    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">

    <!-- slick slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">

    <title>Fly Far International</title>
</head>

<body style='overflow-x:hidden'>
    <div class="page-container mb-5">
        <!-- Side Navbar -->
        <?php include "../../../side_navbar.php" ?>

        <main class="container-fluid p-3">
            <div class="d-lg-none d-flex justify-content-end mb-1">
                <img src="./images/dashboardimage6.svg" alt="" class="h-5 w-5 mobile-menu" id="mobile-menu">
            </div>

            <div class="container-fluid d-flex justify-content-between align-items-center">
                <div class="position-relative d-flex">
                    <img src="./images/dashboardimage4.svg" alt="" class="search-icon">
                    <input class="form-control form-control-sm ps-4" type="text" placeholder="Enter Keywords">
                </div>
                <div class="d-flex">
                    <div class="dropdown me-3 mt-1">
                        <div style='color:#767676' class="fs-6 dropdown-toggle" role="button" id="dropdownMenu2"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            EN
                        </div>
                    </div>

                    <div class="top-icons">
                        <img src="../../../images/dashboardimage3.svg" alt="">
                    </div>



                    <div class="top-icons">
                        <img src="./images/dashboardimage2.svg" alt="">
                    </div>

                    <button type="button" class="btn btn-sm  dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"> <img src="images/avatar.jpg" alt="" width="30" style="margin-top: -5px;">
                    </button>
                    <ul class="dropdown-menu shadow" style="width: 200px;">
                        <li class="p-0 m-0">
                            <a class="dropdown-item" href="#">
                                Fahim
                            </a>
                        </li>
                        <li class="p-0 m-0">
                            <hr class="dropdown-divider">
                        </li>

                        <li><a class="dropdown-item" href="#">My Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Chat</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>
            </div>

            <!-- todo main content  starts here-->
            <div class="container admin-content">
                <div class="anp-btn-box">
                    <a href="index.php" class="option">Home</a>
                    <a href="package.php" class="option">Packages</a>

                    <!-- <div class="select-option">
                        <div class="package-link">Package</div>
                        <ul>
                            <li><a href="./add-package.php">Add Package BN</a></li>
                            <li><a href="./add-package-en.php">Add Package En</a></li>
                            <li><a href="./package.php">All Packages</a></li>
                            <li><a href="./package-text.php">Package Text</a></li>
                        </ul>
                    </div> -->

                    <div class="select-option">
                        <div class="package-link">Media Coverage</div>
                        <ul>
                            <li><a href="./presscoverage.php">Add Coverage</a></li>
                        </ul>
                    </div>
                    <div class="select-option">
                        <div class="package-link">Blog</div>

                    </div>

                </div>
                <!-- ! ends  -->
                <!--todo when i click home button this form will show home section form  -->
                <!-- !starts  -->
                <div class="ahsection" id="ahsection">

                    <!-- Tobanner Start -->

                    <h3 class=" anp-h2">All Text</h3>
                    <h5 class="anp-h5">Banner text</h5>
                    <div class="container-fluid">
                        <!-- Banner Short Text -->

                        <!-- Banner Short Title Text -->
                        <form action="#" method="GET">
                            <div class=" row">
                                <div class="col-lg-4 col-md-4">
                                    <input type="hidden" name="position" value="randomtext" />
                                    <div class="anp-input">
                                        <label for="bannerShortText" class="form-label">Title Text English</label>
                                        <input type="text" class="form-control" id="bannerTitleTextEN"
                                            name="bannerTitleTextEN" placeholder="Go Explore">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="bannerShortText" class="form-label">Title Text Bangla</label>
                                        <input type="text" class="form-control" id="bannerTitleTextBN"
                                            name="bannerTitleTextBN" placeholder="Go Explore">
                                    </div>
                                </div>

                                <div class="col d-flex justify-content-start align-items-end">
                                    <div class="anp-input-submit">
                                        <button type="submit">Add</button>
                                    </div>
                                </div>
                            </div>
                        </form>


                        <div class="anp-input-submit" data-bs-toggle="modal" data-bs-target="#exampleModalrandom">
                            <button type="submit">View</button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalrandom" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog  modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="table-responsive">
                                            <table class="info-table" class="table table-striped" style="width:100%"
                                                data-order="">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Text English</th>
                                                        <th>Text Bangla</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <?php
                                            

                                            include "config.php";
                                            $sql = "SELECT * FROM randomText ORDER BY id DESC LIMIT 10";
                                            $result = $connect->query($sql);
                                            $count=0;
                                            if ($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) {
                                                    $count++;
                                                    $id = $row['id'];
                                                    $textEN = $row['textEN'];
                                                    $textBN = $row['textBN'];
                                                    
                                                        echo "<tr >";
                                                        echo "<td>$count</td>";
                                                        echo "<td>$textEN</td>";
                                                        echo "<td>$textBN</td>";
                                                        echo "<td>                                                      
                                                        <a href='delete.php?id=$id' class='btn btn-primary' >Delete</a></td>";
                                                        echo "</tr>";
                                                    }

                                                    
                                                    }
                                                
                                            
                                            ?>
                                            </table>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>


                        <!-- Banner Main Text -->
                        <form action="#" method="GET">
                            <input type="hidden" name="position" value="banner" />
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="bannerShortText" class="form-label">Main Text English</label>
                                        <input type="text" class="form-control" id="bannerMainTextEN"
                                            name="bannerMainTextEN" placeholder="Main Text English"
                                            value="<?php echo $Result[0]['mainEN']?>">
                                    </div>
                                </div>
                                <div class=" col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="bannerShortText" class="form-label">Main Text Bangla</label>
                                        <input type="text" class="form-control" id="bannerMainTextBN"
                                            name="bannerMainTextBN" placeholder="Main Text Bangla"
                                            value="<?php echo $Result[0]['mainBN']?>">
                                    </div>
                                </div>
                                <div class=" col d-flex justify-content-start align-items-end">
                                    <div class="anp-input-submit">
                                        <button type="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!-- Tobanner End -->

                        <form action="#" method="GET">
                            <div class=" row">
                                <div class="col-lg-4 col-md-4">
                                    <input type="hidden" name="position" value="banner" />
                                    <div class="anp-input">
                                        <label for="bannerShortText" class="form-label">Sub Heading Text English</label>
                                        <input type="text" class="form-control" id="bannerShortTextEN"
                                            name="bannerShortTextEN" placeholder="Short Text English"
                                            value="<?php echo $Result[0]['titleEN']?>">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="bannerShortText" class="form-label">Sub Heading Text Bangla</label>
                                        <input type="text" class="form-control" id="bannerShortTextBN"
                                            name="bannerShortTextBN" placeholder="Short Text Bangla"
                                            value="<?php echo $Result[0]['titleBN']?>">
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-start align-items-end">
                                    <div class="anp-input-submit">
                                        <button type="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!---->
                        <!-- Banner Main Text -->
                        <form action="#" method="GET">
                            <input type="hidden" name="position" value="banner" />
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="bannerShortText" class="form-label">Pink Text English</label>
                                        <input type="text" class="form-control" id="bannerPinkTextEN"
                                            name="bannerPinkTextEN" placeholder="Pink Text English" maxlength="20"
                                            value="<?php echo $Result[0]['shortEN']?>">
                                    </div>
                                </div>
                                <div class=" col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="bannerShortText" class="form-label">Pink Text Bangla</label>
                                        <input type="text" class="form-control" id="bannerPinkTextBN"
                                            name="bannerPinkTextBN" placeholder="Pink Text Bangla" maxlength="20"
                                            value="<?php echo $Result[0]['shortBN']?>">
                                    </div>
                                </div>
                                <div class=" col d-flex justify-content-start align-items-end">
                                    <div class="anp-input-submit">
                                        <button type="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!-- Banner Long Text Section Start -->
                        <form action="#" method="GET">
                            <input type="hidden" name="position" value="banner" />
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="bannerShortText" class="form-label">Long Text English</label>
                                        <input type="text" class="form-control" id="bannerLongTextEN"
                                            name="bannerLongTextEN" placeholder="Long Text English"
                                            value="<?php echo $Result[0]['longEN']?>">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="bannerShortText" class="form-label">Long Text Bangla</label>
                                        <input type="text" class="form-control" id="bannerLongTextEN"
                                            name="bannerLongTextBN" placeholder="Long Text Bangla"
                                            value="<?php echo $Result[0]['longBN']?>">
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-start align-items-end">
                                    <div class="anp-input-submit">
                                        <button type="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!-- Video Link -->
                        <form action="#" method="GET">
                            <div class="row">
                                <input type="hidden" name="position" value="banner" />
                                <div class="col-lg-8 col-md-8">
                                    <div class="anp-input">
                                        <label for="changeWatchVideo" class="form-label">Video Link</label>
                                        <input type="text" class="form-control" id="videolink" name="videolink"
                                            placeholder="Video Link" value="<?php echo $Result[0]['videolink']?>">
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-start align-items-end">
                                    <div class="anp-input-submit">
                                        <button type="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Video Link End -->


                    </div>

                    <h3 class=" anp-h2 custom-margin">Slider Image</h3>
                    <form action="#" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="position" value="slider" />
                        <div class="container-fluid">
                            <div class="row d-flex align-items-center ">

                                <div class=" col-xl-4  col-lg-6 col-md-4 mt-0">

                                    <div class="adpack-input  py-3">
                                        <label for="coverimage" class="form-label">Change Slider in English Image
                                            1</label>
                                        <input type="file" class="form-control-file" id="coverImage1" name="sliderimage"
                                            required>
                                    </div>

                                </div>


                                <div class="col-xl-2 col-lg-3 col-md-3 mx-2  ">
                                    <div class="imageBox">
                                        <div id="sliderImage1"></div>
                                    </div>


                                </div>

                                <div class=" col-xl-4 col-lg-6 col-md-6 d-flex justify-content-start align-items-end">
                                    <div class="anp-input-submit">
                                        <button type="submit" class='me-3'>Add Image</button>
                                    </div>

                                    <div class="anp-input-submit">
                                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseExample" aria-expanded="false"
                                            aria-controls="collapseExample">
                                            View Image
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>


                    <!-- caurosel section start here -->


                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <div class="row">

                                <?php

                            include 'config.php';

                            $sql = "SELECT * FROM slider ORDER BY id DESC LIMIT 10";
                            $result = $connect->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    $imageLink = $row["image"];
                                    $id = $row["id"];

                                    echo"<div class='col-md-4'>
                                            <img src='$imageLink' class='rounded float-start' alt='...' width='100%' height='100px'/>
                                            <form action='#' method='GET'>
                                                <input type='hidden' name='action' value='sliderdelete'>
                                                <input type='hidden' name='id' value='$id'>
                                                <div class='btnBox'>
                                                    <button class='deleteBtnBox' type='submit'>Delete</button>
                                                </div>
                                            </form>
                                        </div>";
                                    									
                                }
                            }

                        ?>


                            </div>

                        </div>
                    </div>




                    <div class="container mt-5 ">

                        <h3 class=" anp-h2 custom-margin">Package Section Title</h3>
                        <div class="container-fluid ">
                            <form action="#" method="GET">
                                <div class="row">
                                    <input type="hidden" name="position" value="package" />
                                    <div class="col-lg-4 col-md-4">
                                        <div class="anp-input">
                                            <label for="changeWatchVideo" class="form-label">Main Text
                                                English</label>
                                            <input type="text" class="form-control" id="packageMainTextEN"
                                                name="packageMainTextEN" placeholder="Main Text English"
                                                value="<?php echo $Result[1]['mainEN']?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="anp-input">
                                            <label for="changeWatchVideo" class="form-label">Main Text
                                                Bangla</label>
                                            <input type="text" class="form-control" id="packageMainTextBN"
                                                name="packageMainTextBN" placeholder="Main Text Bangla"
                                                value="<?php echo $Result[1]['mainBN']?>">
                                        </div>
                                    </div>
                                    <div class="col d-flex justify-content-start align-items-end">
                                        <div class="anp-input-submit">
                                            <button type="submit" class='me-3'>Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Package  Section End -->

                        <!-- Reviews  Section Start -->

                        <h3 class=" anp-h2 custom-margin">Client Review Section Title</h3>
                        <div class="container-fluid">
                            <form action="#" method="GET">
                                <input type="hidden" name="position" value="review" />
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="anp-input">
                                            <label for="changeWatchVideo" class="form-label">Main Text
                                                English</label>
                                            <input type="text" class="form-control" id="reviewMainTextEN"
                                                name="reviewMainTextEN" placeholder="Main Text English"
                                                value="<?php echo $Result[2]['mainEN']?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="anp-input">
                                            <label for="changeWatchVideo" class="form-label">Main Text
                                                Bangla</label>
                                            <input type="text" class="form-control" id="reviewMainTextEN"
                                                name="reviewMainTextBN" placeholder="Main Text Bangla"
                                                value="<?php echo $Result[2]['mainBN']?>">
                                        </div>
                                    </div>
                                    <div class="col d-flex justify-content-start align-items-end">
                                        <div class="anp-input-submit">
                                            <button type="submit">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!-- Reviews  Section End -->

                        <div class="anp-input-submit" data-bs-toggle="modal" data-bs-target="#examplemediaModalReview"
                            style="margin-top: 20px;">
                            <button type="submit"> Add Review + </button>
                        </div>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseExampleReview" aria-expanded="false"
                            aria-controls="collapseExample">
                            View All Review
                        </button>

                        <div class="modal fade" id="examplemediaModalReview" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabelReview">Add Review</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="container-fluid">
                                            <form action="#" method="POST" enctype="multipart/form-data">
                                                <input type="hidden" name="position" value="reviewadd" />
                                                <div class=" row ">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="anp-input">
                                                            <label for="changeWatchVideo" class="form-label"> Client
                                                                Name
                                                                English </label> <input type="text" class="form-control"
                                                                id="nameEN" name="nameEN" placeholder="Date In English">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="anp-input">
                                                            <label for="changeWatchVideo" class="form-label">Client
                                                                Name
                                                                Bangla</label>
                                                            <input type="text" class="form-control" id="nameBN"
                                                                name="nameBN" placeholder="Name In Bangla">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="anp-input">
                                                            <label for="changeWatchVideo" class="form-label">
                                                                Designation English</label>
                                                            <input type="text" class="form-control" id="designationEN"
                                                                name="designationEN" placeholder="designationEN">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="anp-input">
                                                            <label for="changeWatchVideo" class="form-label">
                                                                Designation Bangla</label>
                                                            <input type="text" class="form-control" id="designationBN"
                                                                name="designationBN" placeholder="Designation Bangla">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="anp-input">
                                                            <label for="changeWatchVideo" class="form-label">
                                                                Company Name in English</label>
                                                            <input type="text" class="form-control" id="companyEN"
                                                                name="companyEN" placeholder="Company Name in English">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="anp-input">
                                                            <label for="changeWatchVideo" class="form-label">
                                                                Company Name in Bangla</label>
                                                            <input type="text" class="form-control" id="companyBN"
                                                                name="companyBN" placeholder="Company Name in Bangla">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class=" row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="anp-input">
                                                            <label for="changeWatchVideo"
                                                                class="form-label">Stars</label>
                                                            <input type="number" class="form-control" id="stars"
                                                                name="stars" placeholder="Stars">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="anp-input">
                                                            <label for="changeWatchVideo"
                                                                class="form-label">Testimonial</label>
                                                            <textarea type="text" class="form-control" id="testimonial"
                                                                name="testimonial" rows="20"
                                                                placeholder="Testimonial"></textarea>
                                                        </div>
                                                    </div>

                                                    <!-- <div class="col-lg-6 col-md-6">
                                                        <div class="anp-input">
                                                            <label for="changeWatchVideo" class="form-label">Review
                                                                Link</label>
                                                            <input type="text" class="form-control" id="reviewlink"
                                                                name="reviewlink" placeholder="Review Link">
                                                        </div>
                                                    </div> -->

                                                </div>



                                                <div class=" row d-flex align-items-center">

                                                    <div class="col-lg-4 col-md-4 ">
                                                        <div class="adpack-input media_input">
                                                            <label for="coverimage" class="form-label">Change Client
                                                                Logo</label>
                                                            <input type="file" class="upload__input form-control-file"
                                                                name="clientlogo" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-4 d-flex gap-3 mt-3">
                                                        <div class="imageBox"
                                                            style="border: 1px solid #999;width:200px;height:100px; padding:5px;overflow:hidden">
                                                            <div id="upload__files2"></div>
                                                        </div>
                                                        <div class="anp-input-submit">
                                                            <button type="submit">Add New</button>
                                                        </div>

                                                    </div>


                                                </div>
                                            </form>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="collapse" id="collapseExampleReview">
                        <div class="card card-body">
                            <div class="container mt-5 ">
                                <div class="container-fluid">
                                    <div class="row">
                                        <?php
                                    $sql = "SELECT * FROM reviews ORDER BY id DESC LIMIT 10";
                                    $result = $connect->query($sql);
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                        $id = $row['id'];
                                        $nameEN = $row["nameEN"];
                                        $nameBN = $row['nameBN'];
                                        $reviewLink = $row['source'];
                                        $designationEN = $row['designationEN'];
                                        $designationBN = $row['designationBN'];
                                        $companyEN = $row['companyEN'];
                                        $companyBN = $row['companyBN'];
                                        $testimonial = $row['messageEN'];
                                        $imageLink = $row["img"];
                                        $stars = $row["stars"];
                                        
                                        
                                        
                                        echo"<div class='col-lg-3 col-md-6'>
                                                <div class='pressBox'>
                                                    <img src='$imageLink' class='rounded float-start' alt='...' width='100%'
                                                        height=50px'/><br/>
                                                        <div style='width:100%; height:fit-content;text-align:justify;'>
                                                        <p> $nameEN</p>
                                                        </div>
                                                        <div class='btnBox'>
                                                            <form action='#' method='GET'>
                                                                <input type='hidden' name='action' value='reviewdelete'>
                                                                <input type='hidden' name='id' value='$id'>
                                                                
                                                                    <button class='deleteBtnBox' type='submit'>Delete</button>
                                                                
                                                            </form>
                                                            
                                                            <button class='deleteBtnBox' data-bs-toggle='modal' data-bs-target='#exampleModalReviewi$id'> Update</button>
                                                                                                                                
                                                        </div>
                                                </div>                                               
                                            </div>";

                                            print"<div class='modal fade' id='exampleModalReviewi$id' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                                        <div class='modal-dialog modal-xl'>
                                                            <div class='modal-content'>
                                                            <div class='modal-header'>
                                                                <h5 class='modal-title' id='exampleModalLabel'> Update Media</h5>
                                                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                                            </div>
                                                            <div class='modal-body'>
                                                               <div class='container-fluid'>
                                                                        
                                                            <form action='#' method='POST' enctype='multipart/form-data'>
                                                            <input type='hidden' name='position' value='reviewupdate' />
                                                            <input type='hidden' name='id' value='$id'>
                                                            <div class=' row '>
                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='changeWatchVideo' class='form-label'> Client
                                                                            Name
                                                                            English </label> <input type='text' class='form-control'
                                                                            id='nameEN' name='nameEN' value='$nameEN' placeholder='Date In English'>
                                                                    </div>
                                                                </div>
                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='changeWatchVideo' class='form-label'>Client
                                                                            Name
                                                                            Bangla</label>
                                                                        <input type='text' class='form-control' id='nameBN'
                                                                            name='nameBN' value='$nameBN' placeholder='Name In Bangla'>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class='row'>
                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='changeWatchVideo' class='form-label'>
                                                                            Designation English</label>
                                                                        <input type='text' class='form-control' id='designationEN'
                                                                            name='designationEN' value='$designationEN' placeholder='designationEN'>
                                                                    </div>
                                                                </div>

                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='changeWatchVideo' class='form-label'>
                                                                            Designation Bangla</label>
                                                                        <input type='text' class='form-control' id='designationBN'
                                                                            name='designationBN' value='$designationBN' placeholder='Designation Bangla'>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class='row'>
                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='changeWatchVideo' class='form-label'>
                                                                            Company Name English</label>
                                                                        <input type='text' class='form-control' id='companyEN'
                                                                            name='companyEN' value='$companyEN' placeholder='Company Name English'>
                                                                    </div>
                                                                </div>

                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='changeWatchVideo' class='form-label'>
                                                                           Company Name Bangla</label>
                                                                        <input type='text' class='form-control' id='companyBN'
                                                                            name='companyBN' value='$companyBN' placeholder='Company Name Bangla'>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class='row'>
                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='changeWatchVideo' class='form-label'>
                                                                            Star</label>
                                                                        <input type='text' class='form-control' id='stars'
                                                                            name='stars' value='$stars' placeholder='stars'>
                                                                    </div>
                                                                </div>                                                              

                                                                <div class='col-lg-6 col-md-6'>
                                                                    <div class='anp-input'>
                                                                        <label for='changeWatchVideo'
                                                                            class='form-label'>Testimonial</label>
                                                                        <textarea type='text' class='form-control' id='testimonial'
                                                                            name='testimonial' rows='20' placeholder='Testimonial'>$testimonial</textarea>
                                                                    </div>
                                                                </div>                                                       

                                                            </div>



                                                            <div class=' row d-flex align-items-center'>

                                                                <div class='col-lg-4 col-md-4 '>
                                                                    <div class='adpack-input media_input'>
                                                                        <label for='coverimage' class='form-label'>Change Client
                                                                            Logo</label>
                                                                        <input type='file' class='upload__input form-control-file'
                                                                            name='clientlogo'>
                                                                    </div>
                                                                </div>

                                                                <div class='col-lg-4 col-md-4 d-flex gap-3 mt-3'>
                                                                    <div class='imageBox'
                                                                        style='border: 1px solid #999;width:200px;height:100px; padding:5px;overflow:hidden'>
                                                                        <div id='upload__files2'></div>
                                                                    </div>
                                                                    <div class='anp-input-submit'>
                                                                        <button type='submit'>Add New</button>
                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </form>
                                                        </div>
                                                </div>
                                                </div>
                                                </div>
                                                </div>";
                                                } }?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                    <!-- Founder's Massage  Section Start -->

                    <h3 class=" anp-h2 custom-margin">Founder's Massage Section Title in English</h3>
                    <div class="container-fluid">
                        <form action="#" method="GET">
                            <input type="hidden" name="position" value="foundertext" />
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="changeWatchVideo" class="form-label">Main Text English</label>
                                        <input type="text" class="form-control" id="founderMainTextEN"
                                            name="founderMainTextEN" placeholder="Main Text English"
                                            value="<?php echo $Result[3]['mainEN']?>">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="changeWatchVideo" class="form-label">Main Text Bangla</label>
                                        <input type="text" class="form-control" id="founderMainTextBN"
                                            name="founderMainTextBN" placeholder="Main Text Bangla"
                                            value="<?php echo $Result[3]['mainBN']?>">
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-start align-items-end">
                                    <div class="anp-input-submit">
                                        <button type="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <form action="#" method="POST">
                            <input type="hidden" name="position" value="foundertext" />
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="changeWatchVideo" class="form-label">Long Text English</label>
                                        <input type="text" class="form-control" id="founderLongTextEN"
                                            name="founderLongTextEN" placeholder="Main Text Bangla"
                                            value="<?php echo $Result[3]['longEN']?>">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="changeWatchVideo" class="form-label">Long Text Bangla</label>
                                        <input type="text" class="form-control" id="founderLongTextBN"
                                            name="founderLongTextBN" placeholder="Main Text Bangla"
                                            value="<?php echo $Result[3]['longBN']?>">
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-start align-items-end">
                                    <div class="anp-input-submit">
                                        <button type="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <form action="#" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="position" value="founder" />

                            <div class="row">

                                <div class="col-lg-4 col-md-4">
                                    <div class="adpack-input section_input">
                                        <label for="coverimage" class="form-label">Change Section Image </label>
                                        <input type="file" class="upload__input form-control-file" name="founderimage"
                                            required>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 d-flex gap-3 ">
                                    <div class="imageBox"
                                        style="border: 1px solid #999;width:200px;height:100px; padding:5px;overflow:hidden">
                                        <div id="upload__files1"></div>
                                    </div>

                                    <div class="anp-input-submit ">
                                        <button type="submit">Update</button>
                                    </div>


                                </div>

                            </div>
                        </form>
                    </div>

                    <!-- Founder's Massage  Section End -->

                    <!-- Media and Asset Section Start -->

                    <h3 class=" anp-h2 custom-margin">Media and Asset Section</h3>
                    <div class="container-fluid">
                        <form action="#" method="GET">
                            <input type="hidden" name="position" value="media" />
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="changeWatchVideo" class="form-label">Main Text English</label>
                                        <input type="text" class="form-control" id="mediaMainTextEN"
                                            name="mediaMainTextEN" placeholder="Main Text Bangla"
                                            value="<?php echo $Result[4]['mainEN']?>">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="changeWatchVideo" class="form-label">Main Text Bangla</label>
                                        <input type="text" class="form-control" id="mediaMainTextBN"
                                            name="mediaMainTextBN" placeholder="Main Text Bangla"
                                            value="<?php echo $Result[4]['mainBN']?>">
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-start align-items-end">
                                    <div class="anp-input-submit">
                                        <button type="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="anp-input-submit" data-bs-toggle="modal" data-bs-target="#examplemediaModal"
                            style="margin-top: 20px;">
                            <button type="submit"> Add Media + </button>
                        </div>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            View All
                        </button>

                        <div class="modal fade" id="examplemediaModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Media</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="container-fluid">
                                            <form action="#" method="POST" enctype="multipart/form-data">
                                                <input type="hidden" name="position" value="mediaadd" />
                                                <div class=" row ">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="anp-input">
                                                            <label for="changeWatchVideo" class="form-label">Date In
                                                                English</label>
                                                            <input type="text" class="form-control" id="dateEN"
                                                                name="dateEN" placeholder="Date In English">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="anp-input">
                                                            <label for="changeWatchVideo" class="form-label">Date In
                                                                Bangla</label>
                                                            <input type="text" class="form-control" id="dateBN"
                                                                name="dateBN" placeholder="Date In English">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="anp-input">
                                                            <label for="changeWatchVideo" class="form-label">Media
                                                                Link</label>
                                                            <input type="text" class="form-control" id="medialink"
                                                                name="medialink" placeholder="Media Link">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="anp-input">
                                                            <label for="changeWatchVideo" class="form-label">Media
                                                                text
                                                                English</label>
                                                            <input type="text" class="form-control" id="mediatextEN"
                                                                name="mediatextEN" placeholder="Media text English">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class=" row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="anp-input">
                                                            <label for="changeWatchVideo" class="form-label">Media
                                                                text
                                                                Bangla</label>
                                                            <input type="text" class="form-control" id="mediatextBN"
                                                                name="mediatextBN" placeholder="Media text Bangla">
                                                        </div>
                                                    </div>

                                                </div>



                                                <div class=" row d-flex align-items-center">

                                                    <div class="col-lg-4 col-md-4 ">
                                                        <div class="adpack-input media_input">
                                                            <label for="coverimage" class="form-label">Change Media
                                                                Logo</label>
                                                            <input type="file" class="upload__input form-control-file"
                                                                name="medialogo" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 col-md-4 d-flex gap-3 mt-3">
                                                        <div class="imageBox"
                                                            style="border: 1px solid #999;width:200px;height:100px; padding:5px;overflow:hidden">
                                                            <div id="upload__files2"></div>
                                                        </div>
                                                        <div class="anp-input-submit">
                                                            <button type="submit">Add New</button>
                                                        </div>

                                                    </div>


                                                </div>
                                            </form>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <div class="container mt-5 ">
                                <div class="container-fluid">
                                    <div class="row">
                                        <?php
                                    $sql = "SELECT * FROM media_coverage ORDER BY id DESC LIMIT 10";
                                    $result = $connect->query($sql);
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                        $id = $row['id'];
                                        $imageLink = $row["image"];
                                        $dateEN = $row['dateEN'];
                                        $dateBN = $row["dateBN"];
                                        $medialink = $row['link'];
                                        $mediatextBN = $row['textBN'];
                                        $mediatextEN = $row['textEN'];
                                        $imageLink = $row["image"];
                                        
                                        
                                        echo"<div class='col-lg-3 col-md-6'>
                                                <div class='pressBox'>
                                                    <img src='$imageLink' class='rounded float-start' alt='...' width='100%'
                                                        height=50px'/><br/>
                                                        <div style='width:100%; height:fit-content;text-align:justify;'>
                                                        <p> $mediatextEN</p>
                                                        </div>
                                                        <div class='btnBox'>
                                                            <form action='#' method='GET'>
                                                                <input type='hidden' name='action' value='mediadelete'>
                                                                <input type='hidden' name='id' value='$id'>
                                                                
                                                                    <button class='deleteBtnBox' type='submit'>Delete</button>
                                                                
                                                            </form>
                                                            
                                                            <button class='deleteBtnBox' data-bs-toggle='modal' data-bs-target='#exampleModali$id'> Update</button>
                                                                                                                                
                                                        </div>
                                                </div>                                               
                                            </div>";

                                            print"<div class='modal fade' id='exampleModali$id' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                                        <div class='modal-dialog modal-xl'>
                                                            <div class='modal-content'>
                                                            <div class='modal-header'>
                                                                <h5 class='modal-title' id='exampleModalLabel'> Update Media</h5>
                                                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                                            </div>
                                                            <div class='modal-body'>
                                                               <div class='container-fluid'>
                                                                        


                                                            <form action='#' method='POST' enctype='multipart/form-data'>
                                                                <input type='hidden' name='position' value='mediaupdate' />
                                                                <input type='hidden' name='id' value='$id' />
                                                                <div class=' row '>
                                                                    <div class='col-lg-6 col-md-6'>
                                                                        <div class='anp-input'>
                                                                            <label for='changeWatchVideo' class='form-label'>Date In English</label>
                                                                            <input type='text' class='form-control' id='videolink' name='dateEN' value='$dateEN'
                                                                                placeholder='Date In English'>
                                                                        </div>
                                                                    </div>
                                                                    <div class='col-lg-6 col-md-6'>
                                                                        <div class='anp-input'>
                                                                            <label for='changeWatchVideo' class='form-label'>Date In Bangla</label>
                                                                            <input type='text' class='form-control' id='videolink' name='dateBN' value='$dateBN'
                                                                                placeholder='Date In Bangla'>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class=' row'>
                                                                    <div class='col-lg-6 col-md-6'>
                                                                        <div class='anp-input'>
                                                                            <label for='changeWatchVideo' class='form-label'>Media Link</label>
                                                                            <input type='text' class='form-control' id='medialink' name='medialink'
                                                                                value='$medialink' placeholder='Media Link'>
                                                                        </div>
                                                                    </div>

                                                                    <div class='col-lg-4 col-md-5'>
                                                                        <div class='anp-input'>
                                                                            <label for='changeWatchVideo' class='form-label'>Media text English</label>
                                                                            <input type='text' class='form-control' id='videolink' name='mediatextEN'
                                                                                value='$mediatextEN' placeholder='Media text English'>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class=' row'>

                                                                    <div class='col-lg-12 col-md-12'>
                                                                        <div class='anp-input'>
                                                                            <label for='changeWatchVideo' class='form-label'>Media text Bangla</label>
                                                                            <input type='text' class='form-control' id='videolink' value='$mediatextBN'
                                                                                name='mediatextBN' placeholder='Media text Bangla'>
                                                                        </div>
                                                                    </div>

                                                                </div>



                                                                <div class=' row d-flex align-items-center'>

                                                                    <div class='col-lg-4 col-md-4 '>
                                                                        <div class='adpack-input mediaModal_input'>
                                                                            <label for='coverimage' class='form-label'>Change Media Logo </label>
                                                                            <input type='file' class='upload__input form-control-file' name='medialogo' onchange='mediaId($id)'/>
                                                                        </div>
                                                                    </div>
                                                                    <div class='col-lg-4 col-md-4 d-flex gap-3 mt-3'>
                                                                        <div class='imageBox'
                                                                            style='border: 1px solid #999;width:200px;height:100px; padding:5px;overflow:hidden;z-index:0;'>
                                                                            <div id='mediaModalInputImageBox$id'></div>
                                                                        </div>
                                                                        <div class='anp-input-submit'>
                                                                            <button type='submit'> Update Now</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                </div>
                                                </div>
                                                </div>
                                                </div>";
                                                } }?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                    <!-- Media and Asset Section End -->



                    <!-- Our Core Team Section Start -->

                    <h3 class=" anp-h2 custom-margin">Our Core Team Section</h3>
                    <div class="container-fluid">
                        <form action="#" method="GET">
                            <input type="hidden" name="position" value="team" />
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="changeWatchVideo" class="form-label">Main Text
                                            English</label>
                                        <input type="text" class="form-control" id="teamMainTextEN"
                                            name="teamMainTextEN" placeholder="Main Text
                                                English" value="<?php echo $Result[5]['mainEN']?>">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="changeWatchVideo" class="form-label">Main Text
                                            Bangla</label>
                                        <input type="text" class="form-control" id="teamMainTextBN"
                                            name="teamMainTextBN" placeholder="Main Text
                                                Bangla" value="<?php echo $Result[5]['mainBN']?>">
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-start align-items-end">
                                    <div class="anp-input-submit">
                                        <button type="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Our Core Team Section End -->

                    <div class="anp-input-submit" data-bs-toggle="modal" data-bs-target="#exampleteamModal"
                        style="margin-top: 20px;">
                        <button type="submit"> Add Team + </button>
                    </div>

                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseExampleTeam" aria-expanded="false" aria-controls="collapseExampleTeam">
                        View All Team Member
                    </button>


                    <div class="modal fade" id="exampleteamModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                        <form action="#" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="position" value="teamadd" />
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="anp-input">
                                                        <label for="changeWatchVideo" class="form-label">Team Member
                                                            name in
                                                            English
                                                        </label>
                                                        <input type="text" class="form-control" id="nameBEN"
                                                            name="nameEN" placeholder="Team Member name in English">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="anp-input">
                                                        <label for="changeWatchVideo" class="form-label">Team Member
                                                            name in
                                                            Bangla</label>
                                                        <input type="text" class="form-control" id="nameBN"
                                                            name="nameBN" placeholder="Team Member name in Bangla">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="anp-input">
                                                        <label for="changeWatchVideo" class="form-label">Team Member
                                                            Designation English
                                                        </label>
                                                        <input type="text" class="form-control" id="designationEN"
                                                            name="designationEN"
                                                            placeholder="Team Member Designation English">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="anp-input">
                                                        <label for="changeWatchVideo" class="form-label">Team Member
                                                            Designation
                                                            Bangla
                                                        </label>
                                                        <input type="text" class="form-control" id="designationBN"
                                                            name="designationBN"
                                                            placeholder="Team Member Designation Bangla">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="adpack-input profile_input">
                                                        <label for="coverimage" class="form-label">Profile
                                                            Image</label>
                                                        <input type="file" class="upload__input form-control-file"
                                                            id="file_upload1" name="teamimage">
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-md-4">
                                                    <div class="imageBox"
                                                        style="border: 1px solid #999;width:200px;height:100px; padding:5px;overflow:hidden">
                                                        <div id="upload__files3"></div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-lg-4 col-md-3">
                                                    <div class="anp-input">
                                                        <label for="changeWatchVideo" class="form-label">Social
                                                            Media
                                                            Twitter
                                                        </label>
                                                        <input type="text" class="form-control" id="twitterLink"
                                                            name="twitterLink" placeholder="Social Media Twitter">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-3">
                                                    <div class="anp-input">
                                                        <label for="changeWatchVideo" class="form-label">Social
                                                            Media
                                                            Linkedin
                                                        </label>
                                                        <input type="text" class="form-control" id="linkedinLink"
                                                            name="linkedinLink" placeholder="Social Media Linkedin">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-4 col-md-3">
                                                    <div class="anp-input">
                                                        <label for="changeWatchVideo" class="form-label">Social
                                                            Media
                                                            Facebook
                                                        </label>
                                                        <input type="text" class="form-control" id="facebookLink"
                                                            name="facebookLink" placeholder="Social Media Facebook">
                                                    </div>
                                                </div>

                                                <div class="col d-flex justify-content-start align-items-end">
                                                    <div class="anp-input-submit">
                                                        <button type="submit">Add Member</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- Team Member Section Start -->

                    <div class="collapse" id="collapseExampleTeam">
                        <div class="card card-body">
                            <div class="container mt-5 ">
                                <div class="container-fluid">
                                    <div class="row">
                                        <?php include 'config.php';

                            $sql = "SELECT * FROM team ORDER BY id DESC LIMIT 10";
                            $result = $connect->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    $idteam = $row['id'];
                                    $imageLink = $row["images"];
                                    $nameEN = $row["nameEN"];
                                    $nameBN = $row["nameBN"];
                                    $designationEN = $row["designationEN"];
                                    $designationBN = $row["designationBN"];
                                    $facebookLink = $row["facebook"];
                                    $twitterLink = $row["twitter"];
                                    $linkedinLink = $row["linkedin"];

                                    echo"<div class='col-3'>
                                    <div class='card-wrapper'>
                                            <div class='cardImageBox'>
                                            <img src='$imageLink'/>
                                            </div>
                                            <div class='cardBody'>
                                            <h5>$nameEN</h5>
                                            <p class='text-secondary'>$designationEN</p>
                                            </div>
                                            <div class='cardFooter'>
                                            <a href='$facebookLink'>
                                            <img src='../../../images/coreTeamIcon/facebook.webp' />
                                            </a>
                                            <a href='$twitterLink' class='mx-2'>
                                            <img src='../../../images/coreTeamIcon/twitter.webp' />
                                            </a>
                                            <a href='$linkedinLink'>
                                            <img src='../../../images/coreTeamIcon/linkdin.webp' />
                                            </a>
                                            </div>
                                            <div class='btnBox'>
                                            <form action='#' method='GET'>
                                                    <input type='hidden' name='action' value='teamdelete'>
                                                    <input type='hidden' name='id' value='$idteam'>                                                   
                                                    <button class='deleteBtnBox'>Delete</button>
                                            </form>
                                            <button class='deleteBtnBox' data-bs-toggle='modal' data-bs-target='#exampleModal$idteam'> Update</button>
                                                                                                                        
                                            </div>         
                                        </div>
                                        </div>";
                                        echo"<div class='modal fade' id='exampleModal$idteam' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                                <div class='modal-dialog modal-xl'>
                                                    <div class='modal-content'>
                                                    <div class='modal-header'>
                                                        <h5 class='modal-title' id='exampleModalLabel'>Modal title</h5>
                                                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                                    </div>
                                                    <div class='modal-body'>
                                                    <div class='container-fluid'>
                                                        <form action='#' method='POST' enctype='multipart/form-data'>
                                                            <input type='hidden' name='position' value='teamupdate' />
                                                            <input type='hidden' name='id' value='$idteam' />
                                                            <div class='row'>
                                                                <div class='col-lg-4 col-md-4'>
                                                                    <div class='anp-input'>
                                                                        <label for='changeWatchVideo' class='form-label'>Team Member name in
                                                                            English
                                                                        </label>
                                                                        <input type='text' class='form-control' id='nameBEN' name='nameEN' value='$nameEN'
                                                                            placeholder='Team Member name in English'>
                                                                    </div>
                                                                </div>
                                                                <div class='col-lg-4 col-md-4'>
                                                                    <div class='anp-input'>
                                                                        <label for='changeWatchVideo' class='form-label'>Team Member name in
                                                                            Bangla</label>
                                                                        <input type='text' class='form-control' id='nameBN' name='nameBN' value='$nameBN'
                                                                            placeholder='Team Member  name in Bangla'>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class='row'>
                                                                <div class='col-lg-4 col-md-4'>
                                                                    <div class='anp-input'>
                                                                        <label for='changeWatchVideo' class='form-label'>Team Member
                                                                            Designation English
                                                                        </label>
                                                                        <input type='text' class='form-control' id='designationEN'
                                                                            name='designationEN' value='$designationEN' placeholder='Team Member Designation English'>
                                                                    </div>
                                                                </div>
                                                                <div class='col-lg-4 col-md-4'>
                                                                    <div class='anp-input'>
                                                                        <label for='changeWatchVideo' class='form-label'>Team Member
                                                                            Designation Bangla
                                                                        </label>
                                                                        <input type='text' class='form-control' id='designationBN'
                                                                            name='designationBN' value='$designationBN' placeholder='Team Member Designation Bangla'>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class='row'>
                                                                <div class='col-lg-4 col-md-4'>
                                                                    <div class='adpack-input profile_input'>
                                                                        <label for='coverimage' class='form-label'>Profile Image</label>
                                                                        <input type='file' class='upload__input form-control-file' name='teamimage'  onchange='teamId($idteam)'/>
                                                                    </div>
                                                                </div>

                                                                <div class='col-lg-4 col-md-4'>
                                                                    <div class='imageBox'
                                                                        style='border: 1px solid #999;width:200px;height:100px; padding:5px;overflow:hidden;z-index:0'>
                                                                        <div id='teamModalInputImageBox$idteam'></div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class='row'>
                                                                <div class='col-lg-4 col-md-3'>
                                                                    <div class='anp-input'>
                                                                        <label for='changeWatchVideo' class='form-label'>Socila Media
                                                                            Twitter
                                                                        </label>
                                                                        <input type='text' class='form-control' id='twitterLink' name='twitterLink'
                                                                            value='$twitterLink'
                                                                            placeholder='Socila Media Twitter'>
                                                                    </div>
                                                                </div>
                                                                <div class='col-lg-4 col-md-3'>
                                                                    <div class='anp-input'>
                                                                        <label for='changeWatchVideo' class='form-label'>Socila Media
                                                                            Linkedin
                                                                        </label>
                                                                        <input type='text' class='form-control' id='linkedinLink'
                                                                            name='linkedinLink' value='$linkedinLink' placeholder='Socila Media  Linkedin'>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class='row'>
                                                                <div class='col-lg-4 col-md-3'>
                                                                    <div class='anp-input'>
                                                                        <label for='changeWatchVideo' class='form-label'>Socila Media
                                                                            Facebook
                                                                        </label>
                                                                        <input type='text' class='form-control' id='facebookLink'
                                                                            name='facebookLink' value='$facebookLink' placeholder='Socila Media Facebook'>
                                                                    </div>
                                                                </div>

                                                                <div class='col d-flex justify-content-start align-items-end'>
                                                                    <div class='anp-input-submit'>
                                                                        <button type='submit'>Add Member</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                        
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>";
                                }
                            }
                        ?>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>






                    <!-- Company Section  Section Start -->

                    <h3 class=" anp-h2">Company Section</h3>
                    <div class="container-fluid">
                        <form action="#" method="POST">
                            <input type="hidden" name="position" value="aboutus" />
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="changeWatchVideo" class="form-label">About us in
                                            English</label>
                                        <textarea type="text" class="form-control" id="aboutusEN" name="aboutusEN"
                                            placeholder="About us in
                                                English" value=""><?php echo $Result[6]['longEN']?></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="changeWatchVideo" class="form-label">About us in
                                            Bangla</label>
                                        <textarea type="text" class="form-control" id="aboutusBN" name="aboutusBN"
                                            placeholder="About us in
                                                Bangla"><?php echo $Result[6]['longBN']?></textarea>
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-start align-items-end">
                                    <div class="anp-input-submit">
                                        <button type="submit">Update</button>
                                    </div>
                                </div>

                            </div>
                        </form>

                        <form action="" method="POST">
                            <input type="hidden" name="position" value="privacy" />
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="changeWatchVideo" class="form-label">Privacy
                                            Policy in
                                            English</label>
                                        <textarea type="text" class="form-control" id="privacyEN" name="privacyEN"
                                            placeholder="Privacy Policy in English"><?php echo $Result[7]['longEN']?></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="changeWatchVideo" class="form-label">Privacy
                                            Policy in
                                            Bangla</label>
                                        <textarea type="text" class="form-control" id="privacyBN" name="privacyBN"
                                            placeholder="Privacy Policy in Bangla"><?php echo $Result[7]['longBN']?></textarea>
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-start align-items-end">
                                    <div class="anp-input-submit">
                                        <button type="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <form action="" method="POST">
                            <input type="hidden" name="position" value="terms" />
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="changeWatchVideo" class="form-label">Terms &
                                            Condition in
                                            English</label>
                                        <textarea type="text" class="form-control" id="termsEN" name="termsEN"
                                            placeholder="Terms & Condition in English"><?php echo $Result[8]['longEN']?></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="changeWatchVideo" class="form-label">Terms &
                                            Condition in
                                            Bangla</label>
                                        <textarea type="text" class="form-control" id="termsBN" name="termsBN"
                                            placeholder="Terms & Condition in Bangla"><?php echo $Result[8]['longBN']?></textarea>
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-start align-items-end">
                                    <div class="anp-input-submit">
                                        <button type="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>


                        <form action="" method="POST">
                            <input type="hidden" name="position" value="refundin" />
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="changeWatchVideo" class="form-label">Inbound
                                            Refund policy
                                            in
                                            English</label>
                                        <textarea type="text" class="form-control" id="refundinEN" name="refundinEN"
                                            placeholder="Inbound Refund policy in
                                                English"><?php echo $Result[9]['longEN']?></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="changeWatchVideo" class="form-label">Inbound
                                            Refund policy
                                            in
                                            Bangla</label>
                                        <textarea type="text" class="form-control" id="refundinEN" name="refundinBN"
                                            placeholder="Inbound Refund policy in
                                                Bangla"><?php echo $Result[9]['longBN']?></textarea>
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-start align-items-end">
                                    <div class="anp-input-submit">
                                        <button type="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>


                        <form action="" method="POST">
                            <input type="hidden" name="position" value="refundout" />
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="changeWatchVideo" class="form-label">International Refund
                                            Policy
                                            in English</label>
                                        <textarea type="text" class="form-control" id="refundoutEN" name="refundoutEN"
                                            placeholder="International Refund Policy in English"><?php echo $Result[10]['longEN']?></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="changeWatchVideo" class="form-label">International Refund
                                            Policy
                                            in Bangla</label>
                                        <textarea type="text" class="form-control" id="refundoutBN" name="refundoutBN"
                                            placeholder="International Refund Policy in Bangla"><?php echo $Result[10]['longBN']?></textarea>
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-start align-items-end">
                                    <div class="anp-input-submit">
                                        <button type="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>


                        <form action="#" method="POST">
                            <input type="hidden" name="position" value="phone" />
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="changeWatchVideo" class="form-label">Phone
                                            Number in
                                            English</label>
                                        <input type="text" class="form-control" id="phoneEN" name="phoneEN"
                                            placeholder="Phone Number in English"
                                            value="<?php echo $Result[11]['shortEN']?>">
                                    </div>
                                </div>
                                <div class=" col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="changeWatchVideo" class="form-label">Phone
                                            Number in
                                            Bangla</label>
                                        <input type="text" class="form-control" id="phoneBN" name="phoneBN"
                                            placeholder="Phone Number in Bangla"
                                            value="<?php echo $Result[11]['shortBN']?>">
                                    </div>
                                </div>
                                <div class=" col d-flex justify-content-start align-items-end">
                                    <div class="anp-input-submit">
                                        <button type="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>


                        <form action="#" method="POST">
                            <input type="hidden" name="position" value="email" />
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="changeWatchVideo" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="emailEN"
                                            placeholder="Email" value="<?php echo $Result[12]['mainEN']?>">
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-start align-items-end">
                                    <div class="anp-input-submit">
                                        <button type="submit">Update</button>
                                    </div>
                                </div>

                            </div>
                        </form>

                        <form action="#" method="POST">
                            <input type="hidden" name="position" value="address" />
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="changeWatchVideo" class="form-label">Address in
                                            English</label>
                                        <textarea type="text" class="form-control" id="videolink" name="addressEN"
                                            placeholder="Address in English"><?php echo $Result[13]['longEN']?></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="anp-input">
                                        <label for="changeWatchVideo" class="form-label">Address in
                                            Bangla</label>
                                        <textarea type="text" class="form-control" id="videolink" name="addressBN"
                                            placeholder="Address in Bangla"><?php echo $Result[13]['longBN']?></textarea>
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-start align-items-end">
                                    <div class="anp-input-submit">
                                        <button type="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Company Section  Section End -->


                </div>
                <!-- !ends  -->

            </div>
            <!-- todo main content  ends here-->
        </main>
    </div>

    <!-- Ajax -->

    <script>
    $(document).ready(function() {

        $(document).on("click", ".delete-btn", function() {
            var $ele = $(this).parent().parent();
            $.ajax({
                url: "delete.php",
                type: "POST",
                cache: false,
                data: {
                    id: $(this).attr("data-id")
                },
                success: function(dataResult) {
                    var dataResult = JSON.parse(dataResult);
                    if (dataResult.statusCode == 200) {
                        $ele.fadeOut().remove();
                    }
                }
            });
        });
    });
    </script>



    <!-- Bootstrap JavaScript -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- jaqury CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- jquery datepicker theme ui  -->
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>



    <!-- DataTable -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js">
    </script>
    <!-- slick slider -->
    <!-- jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- External JavaScript -->
    <script src="./../../../js/script.js"></script>
    <script src="./../../../js/flyfarladies-home.js"></script>
    <script src="./../../../js/setup_index.js"></script>

</body>

</html>

<?php 

include_once "config.php";

if(array_key_exists('position', $_GET) && array_key_exists('bannerShortTextEN',$_GET) && array_key_exists('bannerShortTextBN', $_GET)){
    $position = $_GET['position'];
    $bannerShortTextEN = str_replace("'", "''",$_GET['bannerShortTextEN']);
    $bannerShortTextBN = str_replace("'", "''",$_GET['bannerShortTextBN']);
    
    $sql = "UPDATE `HomeContent` SET `titleBN`='$bannerShortTextBN',`titleEN`='$bannerShortTextEN' WHERE position = '$position'";
    
    if ($connect->query($sql) === TRUE) {
        print '<script>
            swal({
            title: "Success!",
            text: "Updated Successfully!",
            type: "success",
            confirmButtonText: "Cool"
            },
            function(){
                window.location=\'index.php\'
                });
        </script>';
    }else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

if(array_key_exists('position', $_GET) && array_key_exists('bannerPinkTextEN',$_GET) && array_key_exists('bannerPinkTextBN', $_GET)){
    $position = $_GET['position'];
    $bannerPinkTextEN = str_replace("'", "''",$_GET['bannerPinkTextEN']);
    $bannerPinkTextBN = str_replace("'", "''",$_GET['bannerPinkTextBN']);
    
    $sql = "UPDATE `HomeContent` SET `shortBN`='$bannerPinkTextBN',`shortEN`='$bannerPinkTextEN' WHERE position = '$position'";
    
    if ($connect->query($sql) === TRUE) {
        print '<script>
            swal({
            title: "Success!",
            text: "Updated Successfully!",
            type: "success",
            confirmButtonText: "Cool"
            },
            function(){
                window.location=\'index.php\'
                });
        </script>';
    }
}



if(array_key_exists('position', $_GET) && array_key_exists('bannerTitleTextEN',$_GET) && array_key_exists('bannerTitleTextBN', $_GET)){
    $position = $_GET['position'];
    if($position == 'randomtext'){
    $bannerTitleTextEN = str_replace("'", "''",$_GET['bannerTitleTextEN']);
    $bannerTitleTextBN = str_replace("'", "''",$_GET['bannerTitleTextBN']);
    
    $sql = "INSERT INTO `randomText`(`textEN`, `textBN`) VALUES ('$bannerTitleTextEN','$bannerTitleTextBN')";
    
        if ($connect->query($sql) === TRUE) {
            print '<script>
                swal({
                title: "Success!",
                text: "Add Successfully!",
                type: "success",
                confirmButtonText: "Cool"
                },
                function(){
                    window.location=\'index.php\'
                    });
            </script>';
        }else {
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
    }
}

if(array_key_exists('position', $_GET) && array_key_exists('bannerMainTextEN',$_GET) && array_key_exists('bannerMainTextBN', $_GET)){
    $position = $_GET['position'];
    $bannerMainTextEN = str_replace("'", "''",$_GET['bannerMainTextEN']);
    $bannerMainTextBN = str_replace("'", "''",$_GET['bannerMainTextBN']);
    
    $sql = "UPDATE `HomeContent` SET `mainBN`='$bannerMainTextBN',`mainEN`='$bannerMainTextEN' WHERE position = '$position'";
    
    if ($connect->query($sql) === TRUE) {
        print '<script>
            swal({
            title: "Success!",
            text: "Updated Successfully!",
            type: "success",
            confirmButtonText: "Cool"
            },
            function(){
                window.location=\'index.php\'
                });
        </script>';
    }else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

if(array_key_exists('position', $_GET) && array_key_exists('bannerLongTextBN',$_GET) && array_key_exists('bannerLongTextEN', $_GET)){
    $position = $_GET['position'];
    $bannerLongTextEN = str_replace("'", "''",$_GET['bannerLongTextEN']);
    $bannerLongTextBN = str_replace("'", "''",$_GET['bannerLongTextBN']);
    
    $sql = "UPDATE `HomeContent` SET `longBN`='$bannerLongTextBN',`longEN`='$bannerLongTextEN' WHERE position = '$position'";
    
    if ($connect->query($sql) === TRUE) {
        print '<script>
            swal({
            title: "Success!",
            text: "Updated Successfully!",
            type: "success",
            confirmButtonText: "Cool"
            },
            function(){
                window.location=\'index.php\'
                });
        </script>';
    }else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}


if(array_key_exists('position', $_GET) && array_key_exists('videolink',$_GET)){
    $position = $_GET['position'];
    $videolink = str_replace("'", "''",$_GET['videolink']);
    
    $sql = "UPDATE `HomeContent` SET `videolink`='$videolink' WHERE position = '$position'";
    
    if ($connect->query($sql) === TRUE) {
        print '<script>
                swal({
                title: "Success!",
                text: "Updated Successfully!",
                type: "success",
                confirmButtonText: "Cool"
                },
                function(){
                    window.location=\'index.php\'
                    });
              </script>';
    }else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
    
}

//Slider

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_POST['position'] == "slider"){
        $upload_dir = '../../../../cdn.flyfarladies.com/Slider/'.DIRECTORY_SEPARATOR;         
        $fileName = $_FILES["sliderimage"]["name"];
        $fileType = pathinfo($fileName,PATHINFO_EXTENSION);
        $targetFilePath = $upload_dir.$fileName;
        
        $allowTypes = array('jpg','png','jpeg','gif','webp','PNG','JPEG','JPG');
    
        if(in_array($fileType, $allowTypes)){
            // Upload file to server
            if(move_uploaded_file($_FILES["sliderimage"]["tmp_name"], $targetFilePath)){
                $imageLink = "https://cdn.flyfarladies.com/Slider/$fileName";      
                $sql = "INSERT INTO `slider`(`image`) VALUES ('$imageLink')";

                if ($connect->query($sql) === TRUE) {
                    print '<script>
                        swal({
                        title: "Success!",
                        text: "Updated Successfully!",
                        type: "success",
                        confirmButtonText: "Cool"
                        },
                        function(){
                            window.location=\'index.php\'
                            });
                    </script>';
                }else {
                    echo "Error: " . $sql . "<br>" . $connect->error;
                }
                
            }else{
               //$statusMsg = "Sorry, there was an error uploading your file.";
            }
        }else{
           // $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
               
    } 

    
}


// Delete Slider

if(array_key_exists('action',$_GET)){  
        $action = $_GET['action'];
        if($action == 'sliderdelete'){
            $id=$_GET['id'];
            $sql = "DELETE FROM `slider` WHERE id=$id";
            if (mysqli_query($connect, $sql)) {
                print '<script>
                    swal({
                    title: "Success!",
                    text: "Deleted Successfully!",
                    type: "success",
                    confirmButtonText: "Cool"
                    },
                    function(){
                        window.location=\'index.php\'
                        });
                </script>';
            } 
            else {
                    print '<script>
                    swal({
                    title: "Cannot Be Deleted!",
                    text: "Error!",
                    type: "error",
                    confirmButtonText: "Ups"
                    },
                    function(){
                        window.location=\'index.php\'
                        });
                </script>';
            }
            
        }
}


//Package mainText


if(array_key_exists('position', $_GET) && array_key_exists('packageMainTextEN',$_GET) && array_key_exists('packageMainTextBN', $_GET)){
    $position = $_GET['position'];
    $packageMainTextEN = str_replace("'", "''",$_GET['packageMainTextEN']);
    $packageMainTextBN = str_replace("'", "''",$_GET['packageMainTextBN']);
    
    $sql = "UPDATE `HomeContent` SET `mainBN`='$packageMainTextBN',`mainEN`='$packageMainTextEN' WHERE position = '$position'";
    
    if ($connect->query($sql) === TRUE) {
        print '<script>
            swal({
            title: "Success!",
            text: "Updated Successfully!",
            type: "success",
            confirmButtonText: "Cool"
            },
            function(){
                window.location=\'index.php\'
                });
        </script>';
    }else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

if(array_key_exists('position', $_GET) && array_key_exists('reviewMainTextEN',$_GET) && array_key_exists('reviewMainTextBN', $_GET)){
    $position = $_GET['position'];
    $reviewMainTextEN = str_replace("'", "''",$_GET['reviewMainTextEN']);
    $reviewMainTextBN = str_replace("'", "''",$_GET['reviewMainTextBN']);
    
    $sql = "UPDATE `HomeContent` SET `mainBN`='$reviewMainTextBN',`mainEN`='$reviewMainTextEN' WHERE position = '$position'";
    
    if ($connect->query($sql) === TRUE) {
        print '<script>
            swal({
            title: "Success!",
            text: "Updated Successfully!",
            type: "success",
            confirmButtonText: "Cool"
            },
            function(){
                window.location=\'index.php\'
                });
        </script>';
    }else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

// Review Act6ions

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $position = $_POST['position'];
    if($position == "reviewadd"){

        $nameEN = str_replace("'", "''",$_POST['nameEN']);
        $nameBN = str_replace("'", "''",$_POST['nameBN']);
        $designationEN = str_replace("'", "''",$_POST['designationEN']);
        $designationBN = str_replace("'", "''",$_POST['designationBN']);
        $companyEN = str_replace("'", "''",$_POST['companyEN']);
        $companyBN = str_replace("'", "''",$_POST['companyBN']);
        $testimonial = str_replace("'", "''",$_POST['testimonial']);
        //$sourceLink = str_replace("'", "''",$_POST['reviewlink']);
        $stars = str_replace("'", "''",$_POST['stars']);


        //Logo Upload
        $upload_dir = '../../../../cdn.flyfarladies.com/Review/'.DIRECTORY_SEPARATOR;         
        $fileName = $_FILES["clientlogo"]["name"];
        $fileType = pathinfo($fileName,PATHINFO_EXTENSION);
        $targetFilePath = $upload_dir.$fileName;
        
        $allowTypes = array('jpg','png','jpeg','gif','webp','PNG','JPEG','JPG');
    
        if(in_array($fileType, $allowTypes)){
            if(move_uploaded_file($_FILES["clientlogo"]["tmp_name"], $targetFilePath)){
                $imageLink = "https://cdn.flyfarladies.com/Review/$fileName";      
                $sql = "INSERT INTO `reviews`(`img`,`stars`, `designationBN`, `designationEN`,`companyBN`, `companyEN`, `messageEN`, `nameEN`, `nameBN`)
                    VALUES ('$imageLink','$stars','$designationBN','$designationEN','$companyBN','$companyEN','$testimonial','$nameEN','$nameBN')";

                if ($connect->query($sql) === TRUE) {
                    print '<script>
                        swal({
                        title: "Success!",
                        text: "Added Successfully!",
                        type: "success",
                        confirmButtonText: "Cool"
                        },
                        function(){
                            window.location=\'index.php\'
                            });
                    </script>';
                }else {
                    echo "Error: " . $sql . "<br>" . $connect->error;
                }
                
            }else{
               //$statusMsg = "Sorry, there was an error uploading your file.";
            }
        }else{
           // $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
               
    }

    //Update

    if($_POST['position'] == "reviewupdate"){

        $idreview = $_POST['id'];
        $nameEN = str_replace("'", "''",$_POST['nameEN']);
        $nameBN = str_replace("'", "''",$_POST['nameBN']);
        $designationEN = str_replace("'", "''",$_POST['designationEN']);
        $designationBN = str_replace("'", "''",$_POST['designationBN']);
        $companyEN = str_replace("'", "''",$_POST['companyEN']);
        $companyBN = str_replace("'", "''",$_POST['companyBN']);
        $testimonial = str_replace("'", "''",$_POST['testimonial']);
        //$sourceLink = str_replace("'", "''",$_POST['reviewlink']);
        $stars = str_replace("'", "''",$_POST['stars']);

        if($_FILES["clientlogo"]["name"]){
            //Logo Upload
            $upload_dir = '../../../../cdn.flyfarladies.com/Press/'.DIRECTORY_SEPARATOR;         
            $fileName = $_FILES["clientlogo"]["name"];
            $fileType = pathinfo($fileName,PATHINFO_EXTENSION);
            $targetFilePath = $upload_dir.$fileName;
            
            $allowTypes = array('jpg','png','jpeg','gif','webp','PNG','JPEG','JPG');
        
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["clientlogo"]["tmp_name"], $targetFilePath)){
                    $imageLink = "https://cdn.flyfarladies.com/Review/$fileName";      

                    $sql = "UPDATE `reviews` SET `img`='$imageLink', `nameEN`='$nameEN', `nameBN`='$nameBN', `designationEN`='$designationEN',
                 `designationBN`='$designationBN',`stars`='$stars', `messageEN`='$testimonial'  where id='$idreview'";

                    if ($connect->query($sql) === TRUE){
                        print '<script>
                            swal({
                            title: "Success!",
                            text: "Added Successfully!",
                            type: "success",
                            confirmButtonText: "Cool"
                            },
                            function(){
                                window.location=\'index.php\'
                                });
                        </script>';
                    }else {
                        echo "Error: " . $sql . "<br>" . $connect->error;
                    }
                    
                }
            }
            
        }else{
            
                $sql = "UPDATE `reviews` SET `nameEN`='$nameEN', `nameBN`='$nameBN', `designationEN`='$designationEN',
                     `designationBN`='$designationBN',`companyEN`='$companyEN',`companyBN`='$companyBN',`stars`='$stars',
                     `messageEN`='$testimonial', `source`='$sourceLink'  where id='$idreview'";

                if ($connect->query($sql) === TRUE) {
                    print '<script>
                        swal({
                        title: "Success!",
                        text: "Updated Successfully!",
                        type: "success",
                        confirmButtonText: "Cool"
                        },
                        function(){
                            window.location=\'index.php\'
                            });
                    </script>';
                }
                
            }
        }
           
}



//Media Delete

if(array_key_exists('action',$_GET)){  
        $action = $_GET['action'];
        if($action == 'reviewdelete'){
            $id=$_GET['id'];
            $sql = "DELETE FROM `reviews` WHERE id=$id";
            if (mysqli_query($connect, $sql)) {
                print '<script>
                    swal({
                    title: "Success!",
                    text: "Deleted Successfully!",
                    type: "success",
                    confirmButtonText: "Cool"
                    },
                    function(){
                        window.location=\'index.php\'
                        });
                </script>';
            } 
            else {
                    print '<script>
                    swal({
                    title: "Cannot Be Deleted!",
                    text: "Error!",
                    type: "error",
                    confirmButtonText: "Ups"
                    },
                    function(){
                        window.location=\'index.php\'
                        });
                </script>';
            }
            
        }
}

// Actions









if(array_key_exists('position', $_GET) && array_key_exists('founderMainTextEN',$_GET) && array_key_exists('founderMainTextBN', $_GET)){
    $position = $_GET['position'];
    $founderMainTextEN = str_replace("'", "''",$_GET['founderMainTextEN']);
    $founderMainTextBN = str_replace("'", "''",$_GET['founderMainTextBN']);
    
    $sql = "UPDATE `HomeContent` SET `mainBN`='$founderMainTextBN',`mainEN`='$founderMainTextEN' WHERE position = '$position'";
    
    if ($connect->query($sql) === TRUE) {
        print '<script>
            swal({
            title: "Success!",
            text: "Updated Successfully!",
            type: "success",
            confirmButtonText: "Cool"
            },
            function(){
                window.location=\'index.php\'
                });
        </script>';
    }else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $position = $_POST['position'];
    if($position == "foundertext"){
        $founderLongTextEN = str_replace("'", "''",$_POST['founderLongTextEN']);
        $founderLongTextBN = str_replace("'", "''",$_POST['founderLongTextBN']);
        
        $sql = "UPDATE `HomeContent` SET `longEN`='$founderLongTextEN',`longBN`='$founderLongTextBN' WHERE position = '$position'";
        
        if ($connect->query($sql) === TRUE) {
            print '<script>
                swal({
                title: "Success!",
                text: "Updated Successfully!",
                type: "success",
                confirmButtonText: "Cool"
                },
                function(){
                    window.location=\'index.php\'
                    });
            </script>';
        }else {
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
        
    }
    
  
}


//Founder Image

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $position = $_POST['position'];
    if($position == "founder"){

        $upload_dir = '../../../../cdn.flyfarladies.com/Founder/'.DIRECTORY_SEPARATOR;         
        $fileName = $_FILES["founderimage"]["name"];
        $fileType = pathinfo($fileName,PATHINFO_EXTENSION);
        $targetFilePath = $upload_dir.$fileName;
        
        $allowTypes = array('jpg','png','jpeg','gif','webp','PNG','JPEG','JPG');
    
        if(in_array($fileType, $allowTypes)){
            // Upload file to server
            if(move_uploaded_file($_FILES["founderimage"]["tmp_name"], $targetFilePath)){
                $imageLink = "https://cdn.flyfarladies.com/Founder/$fileName";      
                $sql = "UPDATE `HomeContent` SET `imagelink`='$imageLink' WHERE position = 'foundertext'";

                if ($connect->query($sql) === TRUE) {
                    print '<script>
                        swal({
                        title: "Success!",
                        text: "Updated Successfully!",
                        type: "success",
                        confirmButtonText: "Cool"
                        },
                        function(){
                            window.location=\'index.php\'
                            });
                    </script>';
                }else {
                    echo "Error: " . $sql . "<br>" . $connect->error;
                }
                
            }else{
               //$statusMsg = "Sorry, there was an error uploading your file.";
            }
        }else{
           // $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
               
    }
    
  
}




if(array_key_exists('position', $_GET) && array_key_exists('mediaMainTextEN',$_GET) && array_key_exists('mediaMainTextBN', $_GET)){
    $position = $_GET['position'];
    $mediaMainTextEN = str_replace("'", "''",$_GET['mediaMainTextEN']);
    $mediaMainTextBN = str_replace("'", "''",$_GET['mediaMainTextBN']);
    
    $sql = "UPDATE `HomeContent` SET `mainBN`='$mediaMainTextBN',`mainEN`='$mediaMainTextEN' WHERE position = '$position'";
    
    if ($connect->query($sql) === TRUE) {
        print '<script>
            swal({
            title: "Success!",
            text: "Updated Successfully!",
            type: "success",
            confirmButtonText: "Cool"
            },
            function(){
                window.location=\'index.php\'
                });
        </script>';
    }else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}


//Media Add Image

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $position = $_POST['position'];
    if($position == "mediaadd"){

        $dateEN = str_replace("'", "''",$_POST['dateEN']);
        $dateBN = str_replace("'", "''",$_POST['dateBN']);
        $mediatextEN = str_replace("'", "''",$_POST['mediatextEN']);
        $mediatextBN = str_replace("'", "''",$_POST['mediatextBN']);
        $medialink = str_replace("'", "''",$_POST['medialink']);


        //Logo Upload
        $upload_dir = '../../../../cdn.flyfarladies.com/Press/'.DIRECTORY_SEPARATOR;         
        $fileName = $_FILES["medialogo"]["name"];
        $fileType = pathinfo($fileName,PATHINFO_EXTENSION);
        $targetFilePath = $upload_dir.$fileName;
        
        $allowTypes = array('jpg','png','jpeg','gif','webp','PNG','JPEG','JPG');
    
        if(in_array($fileType, $allowTypes)){
            // Upload file to server
            if(move_uploaded_file($_FILES["medialogo"]["tmp_name"], $targetFilePath)){
                $imageLink = "https://cdn.flyfarladies.com/Press/$fileName";      
                $sql = "INSERT INTO `media_coverage`(`image`, `textEN`, `textBN`, `link`, `dateEN`, `dateBN`)
                        VALUES ('$imageLink','$mediatextEN','$mediatextBN','$medialink','$dateEN','$dateBN')";

                if ($connect->query($sql) === TRUE) {
                    print '<script>
                        swal({
                        title: "Success!",
                        text: "Added Successfully!",
                        type: "success",
                        confirmButtonText: "Cool"
                        },
                        function(){
                            window.location=\'index.php\'
                            });
                    </script>';
                }else {
                    echo "Error: " . $sql . "<br>" . $connect->error;
                }
                
            }else{
               //$statusMsg = "Sorry, there was an error uploading your file.";
            }
        }else{
           // $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        }
               
    }

    //Update

    if($_POST['position'] == "mediaupdate"){

        $idmediaupdate = $_POST['id'];
        $dateEN = str_replace("'", "''",$_POST['dateEN']);
        $dateBN = str_replace("'", "''",$_POST['dateBN']);
        $mediatextEN = str_replace("'", "''",$_POST['mediatextEN']);
        $mediatextBN = str_replace("'", "''",$_POST['mediatextBN']);
        $medialink = str_replace("'", "''",$_POST['medialink']);

        if($_FILES["medialogo"]["name"]){
            //Logo Upload
            $upload_dir = '../../../../cdn.flyfarladies.com/Press/'.DIRECTORY_SEPARATOR;         
            $fileName = $_FILES["medialogo"]["name"];
            $fileType = pathinfo($fileName,PATHINFO_EXTENSION);
            $targetFilePath = $upload_dir.$fileName;
            
            $allowTypes = array('jpg','png','jpeg','gif','webp','PNG','JPEG','JPG');
        
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["medialogo"]["tmp_name"], $targetFilePath)){
                    $imageLink = "https://cdn.flyfarladies.com/Press/$fileName";      

                    $sql = "UPDATE `media_coverage` SET `image`='$imageLink', `textEN`='$mediatextEN', `textBN`='$mediatextBN', `link`='$medialink',
                 `dateEN`='$dateEN', `dateBN`='$dateBN' where id='$idmediaupdate'";

                    if ($connect->query($sql) === TRUE) {
                        print '<script>
                            swal({
                            title: "Success!",
                            text: "Added Successfully!",
                            type: "success",
                            confirmButtonText: "Cool"
                            },
                            function(){
                                window.location=\'index.php\'
                                });
                        </script>';
                    }else {
                        echo "Error: " . $sql . "<br>" . $connect->error;
                    }
                    
                }
            }
            
        }else{
            
                $sql = "UPDATE `media_coverage` SET `textEN`='$mediatextEN', `textBN`='$mediatextBN', `link`='$medialink',
                 `dateEN`='$dateEN', `dateBN`='$dateBN' where id='$idmediaupdate'";

                if ($connect->query($sql) === TRUE) {
                    print '<script>
                        swal({
                        title: "Success!",
                        text: "Updated Successfully!",
                        type: "success",
                        confirmButtonText: "Cool"
                        },
                        function(){
                            window.location=\'index.php\'
                            });
                    </script>';
                }
                
            }
        }
           
}



//Media Delete

if(array_key_exists('action',$_GET)){  
        $action = $_GET['action'];
        if($action == 'mediadelete'){
            $id=$_GET['id'];
            $sql = "DELETE FROM `media_coverage` WHERE id=$id";
            if (mysqli_query($connect, $sql)) {
                print '<script>
                    swal({
                    title: "Success!",
                    text: "Deleted Successfully!",
                    type: "success",
                    confirmButtonText: "Cool"
                    },
                    function(){
                        window.location=\'index.php\'
                        });
                </script>';
            } 
            else {
                    print '<script>
                    swal({
                    title: "Cannot Be Deleted!",
                    text: "Error!",
                    type: "error",
                    confirmButtonText: "Ups"
                    },
                    function(){
                        window.location=\'index.php\'
                        });
                </script>';
            }
            
        }
}




if(array_key_exists('position', $_GET) && array_key_exists('teamMainTextEN',$_GET) && array_key_exists('teamMainTextBN', $_GET)){
    $position = $_GET['position'];
    $teamMainTextEN = str_replace("'", "''",$_GET['teamMainTextEN']);
    $teamMainTextBN = str_replace("'", "''",$_GET['teamMainTextBN']);
    
    $sql = "UPDATE `HomeContent` SET `mainBN`='$teamMainTextBN',`mainEN`='$teamMainTextEN' WHERE position = '$position'";
    
    if ($connect->query($sql) === TRUE) {
        print '<script>
            swal({
            title: "Success!",
            text: "Updated Successfully!",
            type: "success",
            confirmButtonText: "Cool"
            },
            function(){
                window.location=\'index.php\'
                });
        </script>';
    }else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

//Add Team Member

//Add Team Member

if ($_SERVER["REQUEST_METHOD"] == "POST"){
     
     if($_POST['position'] == "teamadd"){
        $nameEN = str_replace("'", "''",$_POST['nameEN']);
        $nameBN = str_replace("'", "''",$_POST['nameBN']);        
        $designationEN = str_replace("'", "''",$_POST['designationEN']);
        $designationBN = str_replace("'", "''",$_POST['designationBN']);      
        $twitterLink = str_replace("'", "''",$_POST['twitterLink']);
        $linkedinLink = str_replace("'", "''",$_POST['linkedinLink']);
        $facebookLink = str_replace("'", "''",$_POST['facebookLink']);

        $upload_dir = '../../../../cdn.flyfarladies.com/Team/'.DIRECTORY_SEPARATOR;         

        $fileName = $_FILES["teamimage"]["name"];
        $fileType = pathinfo($fileName,PATHINFO_EXTENSION);
        $targetFilePath = $upload_dir."$nameEN.$fileType";
        
        $allowTypes = array('jpg','png','jpeg','gif','webp','PNG','JPEG','JPG');
    
        if(in_array($fileType, $allowTypes)){

            $nameImage = "$nameEN.$fileType";
            $imageLink = "https://cdn.flyfarladies.com/Team/$nameImage";
            
            if(move_uploaded_file($_FILES["teamimage"]["tmp_name"], $targetFilePath)){
                $sql = "INSERT INTO  `team` (`nameEN`, `nameBN`, `designationEN`, `designationBN`, `images`, `twitter`, `linkedin`, `facebook`)
                VALUES ('$nameEN','$nameBN','$designationEN','$designationBN','$imageLink','$twitterLink','$linkedinLink','$facebookLink')";
        
                if ($connect->query($sql) === TRUE) {
                    print '<script>
                        swal({
                        title: "Success!",
                        text: "Added Successfully!",
                        type: "success",
                        confirmButtonText: "Cool"
                        },
                        function(){
                            window.location=\'index.php\'
                            });
                    </script>';
                }else {
                    echo "Error: " . $sql . "<br>" . $connect->error;
                }
                
            }else{
                print '<script>
                        swal({
                        title: "Error!",
                        text: "Error",
                        type: "error",
                        confirmButtonText: "Ups"
                        },
                        function(){
                            window.location=\'index.php\'
                            });
                    </script>';
            }
        }else{
            print '<script>
                        swal({
                        title: "Error!",
                        text: "Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload",
                        type: "error",
                        confirmButtonText: "Sorry"
                        },
                        function(){
                            window.location=\'index.php\'
                            });
                    </script>';
        }

    }

//Update Team


     
     if($_POST['position'] == "teamupdate"){
        $idteamupdate = $_POST['id'];
        $nameEN = str_replace("'", "''",$_POST['nameEN']);
        $nameBN = str_replace("'", "''",$_POST['nameBN']);        
        $designationEN = str_replace("'", "''",$_POST['designationEN']);
        $designationBN = str_replace("'", "''",$_POST['designationBN']);      
        $twitterLink = str_replace("'", "''",$_POST['twitterLink']);
        $linkedinLink = str_replace("'", "''",$_POST['linkedinLink']);
        $facebookLink = str_replace("'", "''",$_POST['facebookLink']);


        if($_FILES["teamimage"]["name"]){
            $upload_dir = '../../../../cdn.flyfarladies.com/Team/'.DIRECTORY_SEPARATOR;         

            $fileName = $_FILES["teamimage"]["name"];
            $fileType = pathinfo($fileName,PATHINFO_EXTENSION);
            $targetFilePath = $upload_dir."$nameEN.$fileType";
            
            $allowTypes = array('jpg','png','jpeg','gif','webp','PNG','JPEG','JPG');
    
                if(in_array($fileType, $allowTypes)){

                    $nameImage = "$nameEN.$fileType";
                    $imageLink = "https://cdn.flyfarladies.com/Team/$nameImage";
                    
                    if(move_uploaded_file($_FILES["teamimage"]["tmp_name"], $targetFilePath)){

                        $sql = "UPDATE `team` SET `nameEN`='$nameEN',`nameBN`='$nameBN',`designationEN`='$designationEN',`designationBN`='$designationBN',
                                `images`='$imageLink',`twitter`='$twitterLink',`linkedin`='$linkedinLink',`facebook`='$facebookLink' WHERE id='$idteamupdate'";
                
                        if ($connect->query($sql) === TRUE) {
                            print '<script>
                                swal({
                                title: "Success!",
                                text: "Updated Successfully!",
                                type: "success",
                                confirmButtonText: "Cool"
                                },
                                function(){
                                    window.location=\'index.php\'
                                    });
                            </script>';
                        }else {
                            echo "Error: " . $sql . "<br>" . $connect->error;
                        }
                        
                    }
                }

        }else{
            $sql = "UPDATE `team` SET `nameEN`='$nameEN',`nameBN`='$nameBN',`designationEN`='$designationEN',`designationBN`='$designationBN',
                        `twitter`='$twitterLink',`linkedin`='$linkedinLink',`facebook`='$facebookLink' WHERE id='$idteamupdate'";
        
                if ($connect->query($sql) === TRUE) {
                    print '<script>
                        swal({
                        title: "Success!",
                        text: "Updated Successfully!",
                        type: "success",
                        confirmButtonText: "Cool"
                        },
                        function(){
                            window.location=\'index.php\'
                            });
                    </script>';
                }else {
                    echo "Error: " . $sql . "<br>" . $connect->error;
                }
            
        }
    }
        
        
}


//Delete Team

if(array_key_exists('action',$_GET)){  
        $action = $_GET['action'];
        if($action == 'teamdelete'){
            $id=$_GET['id'];
            $sql = "DELETE FROM `team` WHERE id=$id";
            if (mysqli_query($connect, $sql)) {
                print '<script>
                    swal({
                    title: "Success!",
                    text: "Deleted Successfully!",
                    type: "success",
                    confirmButtonText: "Cool"
                    },
                    function(){
                        window.location=\'index.php\'
                        });
                </script>';
            } 
            else {
                    print '<script>
                    swal({
                    title: "Cannot Be Deleted!",
                    text: "Error!",
                    type: "error",
                    confirmButtonText: "Ups"
                    },
                    function(){
                        window.location=\'index.php\'
                        });
                </script>';
            }
            
        }
}
 



//About Section


if ($_SERVER["REQUEST_METHOD"] == "POST"){
  
    $position = $_POST['position'];
    if($position == "aboutus"){
        $aboutusEN = str_replace("'", "''",$_POST['aboutusEN']);
        $aboutusBN = str_replace("'", "''",$_POST['aboutusBN']);
        
        $sql = "UPDATE `HomeContent` SET `longEN`='$aboutusEN',`longBN`='$aboutusBN' WHERE position = '$position'";
        
        if ($connect->query($sql) === TRUE) {
            print '<script>
                swal({
                title: "Success!",
                text: "Updated Successfully!",
                type: "success",
                confirmButtonText: "Cool"
                },
                function(){
                    window.location=\'index.php\'
                    });
            </script>';
        }else {
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
        
    }
    
  
}


//Privacy Policy Section

if ($_SERVER["REQUEST_METHOD"] == "POST"){  
    $position = $_POST['position'];
    if($position == "privacy"){
        $privacyEN = str_replace("'", "''",$_POST['privacyEN']);
        $privacyBN = str_replace("'", "''",$_POST['privacyBN']);
        
        $sql = "UPDATE `HomeContent` SET `longEN`='$privacyEN',`longBN`='$privacyBN' WHERE position = '$position'";
        
        if ($connect->query($sql) === TRUE) {
            print '<script>
                swal({
                title: "Success!",
                text: "Updated Successfully!",
                type: "success",
                confirmButtonText: "Cool"
                },
                function(){
                    window.location=\'index.php\'
                    });
            </script>';
        }else {
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
        
    }
}

//Terms Policy in English

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  
    $position = $_POST['position'];
    if($position == "terms"){
        $termsEN = str_replace("'", "''",$_POST['termsEN']);
        $termsBN = str_replace("'", "''",$_POST['termsBN']);
               
        $sql = "UPDATE `HomeContent` SET `longEN`='$termsEN',`longBN`='$termsBN' WHERE position = '$position'";       
        if ($connect->query($sql) === TRUE) {
            print '<script>
                swal({
                title: "Success!",
                text: "Updated Successfully!",
                type: "success",
                confirmButtonText: "Cool"
                },
                function(){
                    window.location=\'index.php\'
                    });
            </script>';
        }else {
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
        
    } 
}


//Domestic Refund Policy in English


if ($_SERVER["REQUEST_METHOD"] == "POST"){
  
    $position = $_POST['position'];
    if($position == "refundin"){
        $refundinEN = str_replace("'", "''",$_POST['refundinEN']);
        $refundinBN = str_replace("'", "''",$_POST['refundinBN']);
               
        $sql = "UPDATE `HomeContent` SET `longEN`='$refundinEN',`longBN`='$refundinBN' WHERE position = '$position'";       
        if ($connect->query($sql) === TRUE) {
            print '<script>
                swal({
                title: "Success!",
                text: "Updated Successfully!",
                type: "success",
                confirmButtonText: "Cool"
                },
                function(){
                    window.location=\'index.php\'
                    });
            </script>';
        }else {
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
        
    } 
}

//International Refund Policy in English


if ($_SERVER["REQUEST_METHOD"] == "POST"){
  
    $position = $_POST['position'];
    if($position == "refundout"){
        $refundoutEN = str_replace("'", "''",$_POST['refundoutEN']);
        $refundoutBN = str_replace("'", "''",$_POST['refundoutBN']);
               
        $sql = "UPDATE `HomeContent` SET `longEN`='$refundoutEN',`longBN`='$refundoutBN' WHERE position = '$position'";       
        if ($connect->query($sql) === TRUE) {
            print '<script>
                swal({
                title: "Success!",
                text: "Updated Successfully!",
                type: "success",
                confirmButtonText: "Cool"
                },
                function(){
                    window.location=\'index.php\'
                    });
            </script>';
        }else {
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
        
    } 
}

//Phone Section

if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $position = $_POST['position'];
    if($position == "phone"){
        $phoneEN = str_replace("'", "''",$_POST['phoneEN']);
        $phoneBN = str_replace("'", "''",$_POST['phoneBN']);
        
        $sql = "UPDATE `HomeContent` SET `shortEN`='$phoneEN',`shortBN`='$phoneBN' WHERE position = '$position'";
        
        if ($connect->query($sql) === TRUE) {
            print '<script>
                swal({
                title: "Success!",
                text: "Updated Successfully!",
                type: "success",
                confirmButtonText: "Cool"
                },
                function(){
                    window.location=\'index.php\'
                    });
            </script>';
        }else {
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
        
    } 
}


//Email Section


if ($_SERVER["REQUEST_METHOD"] == "POST"){
  
    $position = $_POST['position'];
    if($position == "email"){
        $emailEN = $_POST['emailEN'];
        
        $sql = "UPDATE `HomeContent` SET `mainEN`='$emailEN' WHERE position = '$position'";
        
        if ($connect->query($sql) === TRUE) {
            print '<script>
                swal({
                title: "Success!",
                text: "Updated Successfully!",
                type: "success",
                confirmButtonText: "Cool"
                },
                function(){
                    window.location=\'index.php\'
                    });
            </script>';
        }else {
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
        
    }
    
  
}

//Address Section


if ($_SERVER["REQUEST_METHOD"] == "POST"){
  
    $position = $_POST['position'];
    if($position == "address"){
        $addressEN = str_replace("'", "''",$_POST['addressEN']);
        $addressBN = str_replace("'", "''",$_POST['addressBN']);
                
        $sql = "UPDATE `HomeContent` SET `longEN`='$addressEN',`longBN`='$addressBN' WHERE position = '$position'";       
        if ($connect->query($sql) === TRUE) {
            print '<script>
                swal({
                title: "Success!",
                text: "Updated Successfully!",
                type: "success",
                confirmButtonText: "Cool"
                },
                function(){
                    window.location=\'index.php\'
                    });
            </script>';
        }else {
            echo "Error: " . $sql . "<br>" . $connect->error;
        }
        
    }
    
  
}





?>