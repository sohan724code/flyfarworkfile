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
            <div class="container admin-content">
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
                <!-- todo when click on jobs button this div will show -->
                <!-- !starts  -->
                <div class="ajsection" id="ajsection">
                    <!-- <table class="jbs-table">
                        <thead>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Created</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Job-1000</td>
                                <td>
                                    <div class="jbs-ctd">
                                        Front-end Developer
                                    </div>
                                </td>
                                <td>
                                    <div class="">
                                        Nice Experienced Front-end Developer
                                    </div>
                                </td>
                                <td>
                                    19-12-2022
                                </td>
                                <td>
                                    <div class="jbs-action">
                                        <div class="jbs-edit">
                                            Edit
                                        </div>
                                        <div class="jbs-delete">
                                            Delete
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Job-1000</td>
                                <td>
                                    <div class="jbs-ctd">
                                        Front-end Developer
                                    </div>
                                </td>
                                <td>
                                    <div class="">
                                        Nice Experienced Front-end Developer
                                    </div>
                                </td>
                                <td>
                                    19-12-2022
                                </td>
                                <td>
                                    <div class="jbs-action">
                                        <div class="jbs-edit">
                                            Edit
                                        </div>
                                        <div class="jbs-delete">
                                            Delete
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Job-1000</td>
                                <td>
                                    <div class="jbs-ctd">
                                        Front-end Developer
                                    </div>
                                </td>
                                <td>
                                    <div class="">
                                        Nice Experienced Front-end Developer
                                    </div>
                                </td>
                                <td>
                                    19-12-2022
                                </td>
                                <td>
                                    <div class="jbs-action">
                                        <div class="jbs-edit">
                                            Edit
                                        </div>
                                        <div class="jbs-delete">
                                            Delete
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Job-1000</td>
                                <td>
                                    <div class="jbs-ctd">
                                        Front-end Developer
                                    </div>
                                </td>
                                <td>
                                    <div class="">
                                        Nice Experienced Front-end Developer
                                    </div>
                                </td>
                                <td>
                                    19-12-2022
                                </td>
                                <td>
                                    <div class="jbs-action">
                                        <div class="jbs-edit">
                                            Edit
                                        </div>
                                        <div class="jbs-delete">
                                            Delete
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Job-1000</td>
                                <td>
                                    <div class="jbs-ctd">
                                        Front-end Developer
                                    </div>
                                </td>
                                <td>
                                    <div class="">
                                        Nice Experienced Front-end Developer
                                    </div>
                                </td>
                                <td>
                                    19-12-2022
                                </td>
                                <td>
                                    <div class="jbs-action">
                                        <div class="jbs-edit">
                                            Edit
                                        </div>
                                        <div class="jbs-delete">
                                            Delete
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table> -->
                <form action="">
                        <h5 class="anp-h5">Job Text</h5>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 d-flex justify-content-start align-items-center">
                                <div class="jbs-div">
                                    Find your Best Jobs
                                </div>
                                <div class="">
                                    <img src="./images/arrow.svg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="jbs-input">
                                    <input type="text" class="form-control" name="jobsplaceholder" id="jobsplaceholder"
                                        placeholder="Placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.......">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="jbs-input">
                                    <input type="text" class="form-control" name="jobtext" id="jobtext"
                                        placeholder="How To Apply">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="jbs-flexbox">
                        <div class="">
                            <h5 class="anp-h5">Images</h5>
                            <div class="input-file">
                                <label for="" class="form-label">Change
                                    Banner Image</label>
                                <input type="file" class="form-control-file" id="" name=""
                                    placeholder="Day Out Package">
                            </div>
                        </div>
                        <div class="">
                            <h5 class="anp-h5">Video</h5>
                            <div class="input-file">
                                <label for="" class="form-label">Upload Video</label>
                                <input type="file" class="form-control-file" id="" name=""
                                    placeholder="Day Out Package">
                            </div>
                        </div>
                    </div>
                    <div class="anp-input-submit">
                        <button type="submit">Save Changes</button>
                    </div>
                </form>
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