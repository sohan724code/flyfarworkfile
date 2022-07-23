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
    <link rel="stylesheet" href="css/style.css">

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
                <form action="#" class="addpackage" id="addpackage">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <a class="back-btn" href="flyfarladies-home.html">
                                    <i class="fa-solid fa-angle-left"></i>
                                    Back
                                </a>
                            </div>
                            <div class="add-package-box">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="adpack-input">
                                                <label for="jobid" class="form-label">Job ID</label>
                                                <input type="text" class="form-control" id="jobid" name="jobid"
                                                    placeholder="Job ID">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="adpack-input">
                                                <label for="jobcategory" class="form-label">Job Category</label>
                                                <input type="text" class="form-control" name="jobcategory"
                                                    id="jobcategory" placeholder="Job Category">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="adpack-input">
                                                <label for="jobtitle" class="form-label">Title</label>
                                                <input type="text" class="form-control" name="jobtitle" id="jobtitle"
                                                    placeholder="Job Title">
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="adpack-input">
                                                <label for="jobcreateddate" class="form-label">Job Created Date</label>
                                                <input type="date" class="form-control" name="jobcreateddate"
                                                    id="jobcreateddate">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="abpack-textbox">
                                                <label for="sight5image" class="form-label">Description</label>
                                                <div id="editor" class="editor"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 d-flex justify-content-end">
                                            <button type="submit" class="save-changes">Add Job</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
            <!-- todo main content  ends here-->
        </main>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- External JavaScript -->
    <script src="js/script.js"></script>

    <!-- DataTable -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });

    </script>





</body>

</html>