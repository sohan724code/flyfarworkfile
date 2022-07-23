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
    <link rel="stylesheet" href="../../css/style.css">

    <title>Fly Far International</title>
</head>



<body>
    <div class="page-container mb-5">
        <!-- Side Navbar -->

        <?php include "../../side_navbar.php" ?>

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
            <div class="mt-5">
                <h4 class="fw-bolder">Manage Website</h4>
                <p class="text-secondary">You can manage your all website from here</p>

                <table class=" m-table">
                    <thead>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <tr class="m-tr">
                            <td>Fly Far Ladies</td>
                            <td>www.flyfarladies.com</td>
                            <td class="active-status">
                                <div>Active</div>
                            </td>
                            <td class="manage">
                                <a href="./fly-far-ladies/">
                                    <div>Manage</div>
                                </a>
                            </td>
                        </tr>
                        <tr class="m-tr">
                            <td>B2B Portal</td>
                            <td>www.b2b.flyfarint.com</td>
                            <td class="active-status">
                                <div>Active</div>
                            </td>
                            <td class="manage">
                                <a href="flyfarladies-home.html">
                                    <div>Manage</div>
                                </a>
                            </td>
                        </tr>
                        <tr class="m-tr">
                            <td>Fly Far Int</td>
                            <td>www.flyfarint.com</td>
                            <td class="pause-status">
                                <div>Pause</div>
                            </td>
                            <td class="manage">
                                <a href="./fly-far-ladies/">
                                    <div>Manage</div>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- todo main content  ends here-->
        </main>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- External JavaScript -->
    <script src="../../js/script.js"></script>

    <!-- DataTable -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>




</body>

</html>