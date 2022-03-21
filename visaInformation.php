<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Visa Information</title>
</head>

<body>
    <div class="page-container mb-5">

        <?php include 'side_navbar.php' ?>

        <main class="p-3">
            <div class="d-lg-none d-flex justify-content-end">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mobile-menu" viewBox="0 0 20 20" fill="currentColor" id="mobile-menu">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg>
            </div>

            <div class="mt-3 d-flex justify-content-between align-items-center">
                <div class="position-relative">
                    <input class="form-control form-control-sm ps-4" type="text" placeholder="Enter Keywords">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 search-icon" fill="none" viewBox="0 0 24 24" stroke="gray">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <div class="d-flex">
                    <div class="dropdown me-3 mt-1">
                        <div class="fs-6 dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            EN
                        </div>
                    </div>
                    <div class="top-icons">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <div class="top-icons">
                        <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24" stroke="gray">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </div>

                    <button type="button" class="btn btn-sm  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> <img src="images/avatar.jpg" alt="" width="30px" style="margin-top: -5px;">
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

            <div class="my-5 mt-5">
                <div class="location-container2  shadow-sm  p-3">
                    <div class="p-2">
                        <p class="text-secondary fs-5">Where are you from?</p>
                        <div class="input-con">
                            <input type="text" list="country-list" class="location2-input">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-2">
                        <p class="text-secondary fs-5">Where you want to go?</p>
                        <div class="input-con">
                            <input type="text" list="country-list" class="location2-input">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                    </div>

                    <!-- Country List -->
                    <datalist id="country-list">
                    </datalist>
                </div>
            </div>


            <div class="mt-5">
                <h2 class="fw-bold" style="color: #3751FF;">Visa Information</h2>
            </div>

            <div class="mt-5 w-50">
                <h5>Visa Information</h5>
                <hr>
            </div>

            <div class="mt-2 row w-75">

                <div class="col col-md-4 ">
                    <div class=" w-100 ">
                        <span>Client Title</span> <br />
                        <select class="form-select mt-2 border-dark" aria-label="Default select example">
                            <option selected>Mr</option>
                            <option value="1">Mr</option>
                            <option value="2">Mrs</option>

                        </select>
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class=" ">
                        <span>Client Name</span> <br />
                        <input class="form-control mt-2 border-dark" list="datalistOptions" id="exampleDataList" placeholder="Enter Your Name Here!">
                    </div>
                </div>

                <div class="col col-md-4">
                    <div class="  ">
                        <span>Email</span> <br />
                        <input class="form-control mt-2 border-dark " list="datalistOptions" id="exampleDataList" placeholder="Enter Your Email Here!">
                    </div>
                </div>
            </div>


            <div class="mt-4 row w-75">

                <div class="col col-md-4">
                    <div class="  ">
                        <span>Phone Number</span> <br />
                        <input class="form-control mt-2 border-dark " list="datalistOptions" id="exampleDataList">
                    </div>
                </div>
                <div class="col col-md-4">
                    <div class=" ">
                        <span>Location</span> <br />
                        <input class="form-control mt-2 border-dark " list="datalistOptions" id="exampleDataList" placeholder="Enter Your Location!">
                    </div>
                </div>


            </div>

            <!-- Button trigger modal -->

            <div class="mt-4">
                <button class="btn py-2 px-3 text-light" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border: 1px solid #3751FF ; border-radius: 25px; background-color: #3751FF;">Get
                    Information</button>
            </div>


            <!-- Modal -->
            <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class=" mx-auto mb-5 mt-3">
                            <h5 class="text-center">Select Visa Type</h5>
                            <div class="d-flex mt-3 ">
                                <div class="">
                                    <button class="btn py-2 px-3 text-light" style="border: 1px solid #3751FF ; border-radius: 25px; background-color: #3751FF;">Sticker
                                        Visa</button>
                                </div>
                                <div class=" ms-3">
                                    <button class="btn py-2 px-3 text-light" style="border: 1px solid #3751FF ; border-radius: 25px; background-color: #3751FF;">E-Visa</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>





        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="js/Visainformaton.js"></script>
    <script src="script.js"></script>
</body>

</html>