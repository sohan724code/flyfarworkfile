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

    <title>Fly Far International</title>
</head>

<body>
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
                        <div class="fs-6 dropdown-toggle" role="button" id="dropdownMenu2" data-toggle="dropdown"
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
            <div class="container-fluid admin-content">
                <!-- todo and new package and search section -->
                <!-- ! starts -->
                <!-- <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8 col-md-8" id="anpp-box">
                            <a class="anp" href="add-package.php">
                                <button class="anp-btn">
                                    +
                                </button>
                                <span class="anp-text">Add new Package</span>
                            </a>
                        </div>
                        <div class="col-lg-8 col-md-8 d-none" id="anpj-box">
                            <a class="anp" href="add-job.html">
                                <button class="anp-btn">
                                    +
                                </button>
                                <span class="anp-text">Add new Job</span>
                            </a>
                        </div>
                        <div class="col-lg-8 col-md-8 d-none" id="anpg-box">
                            <a class="anp" href="add-gallery.html">
                                <button class="anp-btn">
                                    +
                                </button>
                                <span class="anp-text">Add new Gallery</span>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="position-relative d-flex w-100">
                                <img src="./images/dashboardimage4.svg" alt="" class="search-icon">
                                <input class="form-control form-control-sm ps-4" type="text"
                                    placeholder="Enter any package name">
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- ! end -->
                <!-- todo button group -->
                <!-- ! starts -->
                <div class="anp-btn-box">
                    <a href="index.php" class="option">Home</a>

                    <div class="select-option">
                        <div class="package-link">Package</div>
                        <ul>
                            <li><a href="./add-package.php">Add Package</a></li>
                            <li><a href="./package.php">All Packages</a></li>
                            <li><a href="./package-text.php">Package Text</a></li>
                        </ul>
                    </div>

                    <!-- <a href="#" class="option">Jobs</a> -->
                    <div class="select-option">
                        <div class="package-link">Jobs</div>
                        <ul>
                            <li><a href="./add-job.php">Add Jobs</a></li>
                            <li><a href="./job-package.php">All Jobs</a></li>
                            <li><a href="./job-text.php">Job Text</a></li>
                        </ul>
                    </div>
                    <!-- <a href="#" class="option">Gallery</a> -->
                    <div class="select-option">
                        <div class="package-link">Gallery</div>
                        <ul>
                            <li><a href="./add-gallery.php">Add Gallery</a></li>
                            <li><a href="./gallery-package.php">All Gallery</a></li>
                            <li><a href="./package-text.php">Gallery Text</a></li>
                        </ul>
                    </div>

                </div>
                <!-- ! ends  -->
                <!-- todo when i click Gallery tour button this from will show -->
                <!-- !starts  -->
                <div class="agsection" id="agsection">
                    <table class="gallery-table">
                        <thead>
                            <th>Name</th>
                            <th>ID</th>
                            <th>Destination</th>
                            <th>Cost</th>
                            <th>Group Size</th>
                            <th>Total Booked</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="gl-box">
                                        <div class="me-2">
                                            <img src="./images/packageImage.png" alt="">
                                        </div>
                                        <span>Sitakunda Tour </span>
                                    </div>
                                </td>
                                <td>PKG-100</td>
                                <td>Chittagong Bangladesh</td>
                                <td>58,6989</td>
                                <td>19</td>
                                <td>19</td>
                                <td>
                                    <div class="pnbox">
                                        <button class="glebtn">Edit</button>
                                        <button class="gldbtn">Delete</button>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <!-- <form action="#" class="ptour">
                        <h5 class="anp-h5">Gallery Text</h5>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-3 col-md-3">
                                    <div class="gl-flexbox">
                                        <div class="gl-div">Welcome To Our Gallery</div>
                                        <div class=""><img src="./images/arrow.svg" alt=""></div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5">
                                    <div class="gal-input">
                                        <input type="text" class="form-control" name="galplaceholdertext"
                                            id="galplaceholdertext"
                                            placeholder="Placeholder text commonly used to demonstrate the visual form of a document or a typeface.....">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2">
                                    <div class="gal-input">
                                        <input type="text" class="form-control" name="galtext" id="galtext"
                                            placeholder="Watch Video">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2">
                                    <div class="gal-input">
                                        <input type="text" class="form-control" name="galtext2" id="galtext2"
                                            placeholder="Read More">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="gal-input">
                                        <h5 class="anp-h5">Images</h5>
                                        <label for="changeWatchVideo" class="form-label">Change Watch Video</label>
                                        <input type="file" class="form-control-file" name="changeWatchVideo"
                                            id="changeWatchVideo" placeholder="Long Text">

                                    </div>
                                </div>
                                <div class="anp-input-submit">
                                    <button type="submit">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </form> -->
                </div>
                <!-- !ends  -->
            </div>
            <!-- todo main content  ends here-->
        </main>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- jaqury CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- jquery datepicker theme ui  -->
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

    <!-- External JavaScript -->
    <script src="./../../../js/script.js"></script>
    <script src="./../../../js/flyfarladies-home.js"></script>

    <!-- DataTable -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>




</body>

</html>