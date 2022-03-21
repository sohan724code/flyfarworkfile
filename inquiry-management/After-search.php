<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Air Ticket after Search</title>
  <link rel="stylesheet" href="./../css/style.css">

  <!-- flickity -->
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- fontawsomelink -->

  <!-- font awsome -->
  <script src="https://kit.fontawesome.com/84e2e81068.js" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  <div class="page-container mb-5">
    <!-- Side Navbar -->
    <?php include './../side_navbar.php' ?>

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

          <button type="button" class="btn btn-sm  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="images/avatar.jpg" alt="" width="30px" style="margin-top: -5px;">
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
      <section class="p-3">
        <form action="" method="POST" class="p-3 rounded shadow-sm ats-form position-relative pb-5">
          <div class="d-flex flex-column flex-md-row">
            <div class="d-flex">
              <label class="radio-container me-3">One Way
                <input type="radio" name="trip-type" value="one-way" checked onclick="changeTripType('oneway')">
                <span class="checkmark"></span>
              </label>
              <label class="radio-container me-3">Round Trip
                <input type="radio" name="trip-type" value="one-way" onclick="changeTripType('roundtrip')">
                <span class="checkmark"></span>
              </label>
              <label class="radio-container me-3">Multi City
                <input type="radio" name="trip-type" value="one-way" onclick="changeTripType('multicity')">
                <span class="checkmark"></span>
              </label>
            </div>

            <div class="mx-auto d-flex">
              <div>
                <i class="far fa-user"></i>
                <select name="passenger-type" class="border-0">
                  <option value="">Passenger Type</option>
                  <option value="">A</option>
                  <option value="">B</option>
                  <option value="">C</option>
                </select>
                <i class="fas fa-caret-down fs-5 ats-icon"></i>
              </div>
              <div class="ms-4">
                Economy <i class="fas fa-caret-down fs-5 ats-icon"></i>
              </div>
            </div>
          </div>
          <div class="row g-3">
            <div class="col col-12 col-md-8" id="journey-from-con">
              <div class="p-1 h-100">
                <div class="row position-relative h-100">
                  <div class="col col-6">
                    <div class="border border-2 p-2 rounded h-100 d-flex align-items-center">
                      <div class="d-flex">
                        <i class="fas fa-map-marker-alt text-secondary fs-4 mx-2"></i>
                        <input value="CTG" type="text" class="ats-input" list="places-list" id="journey-from-input">
                      </div>
                    </div>
                  </div>
                  <div class="col col-6">
                    <div class="border border-2 p-2 rounded h-100 d-flex align-items-center">
                      <div class="d-flex">
                        <i class="fas fa-map-marker-alt text-secondary fs-4 mx-2"></i>
                        <input value="DAC" type="text" class="ats-input" list="places-list" id="journey-to-input">
                      </div>
                    </div>
                  </div>
                  <button type="button" class="ats-swap-btn" onclick="changeJourneyInputs()"><i class="fas fa-exchange-alt fs-5"></i></button>
                </div>
              </div>
            </div>
            <div class="col col-12 col-md-4" id="journey-to-con">
              <div class="p-1 h-100">
                <div class="row">
                  <div class="col col-12 " id="journey-start-con">
                    <div class="border border-2 p-2 rounded ats-date-input d-flex align-items-center overflow-hidden">
                      <div>
                        <i class="far fa-calendar-alt text-secondary fs-5"></i>
                      </div>
                      <div class="ms-3">
                        <p class="m-0 ">Return Date</p>
                        <input class="w-full border-0" type="date" name="" id="">
                      </div>
                    </div>
                  </div>
                  <div class="col col-6 d-none" id="return-date-con">
                    <div class="border border-2 p-2 rounded ats-date-input d-flex align-items-center overflow-hidden">
                      <div>
                        <i class="far fa-calendar-alt text-secondary fs-5"></i>
                      </div>
                      <div class="ms-3">
                        <p class="m-0 ">Return Date</p>
                        <input class="w-full border-0" type="date" name="" id="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <datalist id="places-list">

          </datalist>

          <button type="button" class="border-0 ats-search-btn"><i class="fas fa-search"></i> Search</button>
        </form>
      </section>



      <div class="main-carousel text-black mt-5 slider ">
        <div class="carousel-cell w-25">
          <div class="d-flex border p-3 rounded-3 ">
            <div>
              <img class="rounded-circle" src="images/emirates.png" alt="" width="60px">
            </div>
            <div class="ms-3">
              <span class="text-secondary">EM</span> <br>
              <span>BDT 124578</span>
            </div>
          </div>
        </div>
        <div class="carousel-cell w-25">
          <div class="d-flex border p-3 rounded-3 ">
            <div>
              <img class="rounded-circle" src="images/emirates.png" alt="" width="60px">
            </div>
            <div class="ms-3">
              <span class="text-secondary">EM</span> <br>
              <span>BDT 124578</span>
            </div>
          </div>
        </div>

        <div class="carousel-cell w-25">
          <div class="d-flex border p-3 rounded-3  ">
            <div>
              <img class="rounded-circle" src="images/emirates.png" alt="" width="60px">
            </div>
            <div class="ms-3">
              <span class="text-secondary">EM</span> <br>
              <span>BDT 124578</span>
            </div>
          </div>
        </div>

        <div class="carousel-cell w-25">
          <div class="d-flex border p-3 rounded-3  ">
            <div>
              <img class="rounded-circle" src="images/emirates.png" alt="" width="60px">
            </div>
            <div class="ms-3">
              <span class="text-secondary">EM</span> <br>
              <span>BDT 124578</span>
            </div>
          </div>
        </div>

        <div class="carousel-cell w-25">
          <div class="d-flex border p-3 rounded-3  ">
            <div>
              <img class="rounded-circle" src="images/emirates.png" alt="" width="60px">
            </div>
            <div class="ms-3">
              <span class="text-secondary">EM</span> <br>
              <span>BDT 124578</span>
            </div>
          </div>
        </div>

        <div class="carousel-cell w-25">
          <div class="d-flex border p-3 rounded-3  ">
            <div>
              <img class="rounded-circle" src="images/emirates.png" alt="" width="60px">
            </div>
            <div class="ms-3">
              <span class="text-secondary">EM</span> <br>
              <span>BDT 124578</span>
            </div>
          </div>
        </div>

        <div class="carousel-cell w-25">
          <div class="d-flex border p-3 rounded-3  ">
            <div>
              <img class="rounded-circle" src="images/emirates.png" alt="" width="60px">
            </div>
            <div class="ms-3">
              <span class="text-secondary">EM</span> <br>
              <span>BDT 124578</span>
            </div>
          </div>
        </div>


      </div>

      <div class="mt-4">
        <h5>345 Flight result</h5>
      </div>

      <div class="border border-danger rounded-3 p-2 mt-3 important">
        <span class="text-secondary fs-6 ">
          *Important: The airline fee is indiactive.Flyhub does not
          gurrentee
          the accuray of this information.All fees mentioned are per
          passenger <br>
          check any naional local and health advisor for this destination before you book.
        </span>
      </div>

      <div class="mt-4">
        <div class="d-flex">
          <button class="btn text-light px-3 fw-bold invoice-btn">Invoice
            Ammount</button>
          <button class="btn  ms-4 text-light px-3 fw-bold invoice-btn">Select</button>

          <button class="btn  ms-4 text-light px-3 fw-bold invoice-btn">Select</button>
        </div>
      </div>

      <div class="mt-5 shadow-sm rounded-3">
        <div class="row  p-3 ">
          <div class="col col-md-8">
            <div class="d-flex">
              <div class="mt-2">
                <img class="rounded-circle" src="images/emirates.png" alt="" width="60px">
              </div>
              <div class="ms-4" style="width: 100%;">
                <div class="border-bottom py-2 me-5">
                  <span>Emirates Airlines</span> <br>
                  <span>AK4567 73438</span>
                </div>

                <div class="mt-3 d-flex justify-content-between pe-5">
                  <div>
                    <span class="upper-accordian-text">15.15</span> <br>
                    <span class="upper-accordian-text2">Fri,25mar,</span>
                    <br>
                    <span class="upper-accordian-text2">2022</span> <br>
                    <span class="upper-accordian-text2">DAC</span>
                  </div>
                  <div class="ms-3">
                    <span class="upper-accordian-text">2 Steps</span> <br>
                    <span class="upper-accordian-text">4h 15min</span> <br>
                    <!-- arrow -->
                    <span class="upper-accordian-text">Journey Time</span> <br>
                  </div>
                  <div class="ms-3">
                    <span class="upper-accordian-text">20.35</span> <br>
                    <span class="upper-accordian-text2">Fri,25mar,</span> <br>
                    <span class="upper-accordian-text2">2022</span> <br>
                    <span class="upper-accordian-text2">DAC</span>
                  </div>
                </div>

                <div class=" pe-5 mt-3">
                  <div class=" text-center rounder p-2 depart ">
                    <span class="upper-accordian-text2">Depart Fri,28 march. Emirats Airlines</span>
                  </div>
                </div>


              </div>
            </div>
          </div>

          <div class="col col-md-3 ms-5">
            <strike class="strike"> <br>
              <span> BDT 25,456325<span> <br>
            </strike>
            <span>BDT 25,456325</span> <br>
            <button class="btn px-2 text-light fw-bold  mt-2 create-btn"> Create
              Quation</button>


          </div>
        </div>

        <div class=" mb-5 p-3 main-accordian">
          <div class="">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <div class=" w-100 row">
                      <div class="col col-6 fs-5 d-flex align-items-center">
                        <i class="fa-regular fa-circle-dollar"></i>
                        <span class="d-block ms-1">Refundable</span>
                      </div>
                      <div class="col col-2 text-secondary">
                        Business Class
                      </div>
                      <div class="col col-2 text-center text-secondary">
                        1 Adult
                      </div>
                      <div class="col col-2 pe-4 text-end ">
                        Flight Details
                      </div>
                    </div>
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">

                    <div class="row  ">
                      <div class="col col-md-5 acc-1st-col ">
                        <div class="d-flex  justify-content-center ">

                          <span class="mt-3 px-2  py-2 loc-btn">Dhaka
                            <i class="far fa-long-arrow-alt-right"></i>
                            New York </span>

                        </div>

                        <div class="mt-4 d-flex">
                          <div>
                            <img class="rounded-circle" src="images/emirates.png" alt="" width="60px">
                          </div>

                          <div class="ms-3">
                            <div>
                              <span>Emirates Airlines</span> <br>
                              <span class="upper-accordian-text2">Ak4562,2456</span>
                            </div>
                            <div class="mt-2">
                              <span class="upper-accordian-text2">6 Mar 2022 - Dhaka(DAC).
                                21:55</span> <br>
                              <span class="text-danger" class="upper-accordian-text2">Travel
                                Time : 09h 45m</span>
                            </div>

                            <div class="mt-1">
                              <div class="acc-mid-border">
                              </div>

                              <div class=" acc-mid-border2">
                              </div>


                              <div class="acc-mid-border">
                              </div>

                            </div>
                            <div>
                              <span class="upper-accordian-text2">6 Mar 2022 -
                                Istanbul(IST).
                                21:55</span> <br>


                              <span style="font-size: 10px;" style="width: 15px;" class="d-flex">Adult <svg style="width: 12px;" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ms-1" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" />
                                </svg> <span class="text-secondary ms-1 me-1">Check
                                  in:</span>
                                23kg(2picece) <svg style="width: 12px;" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ms-1 me-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                </svg> <span class="text-secondary me-1">Cabin:</span>
                                8kg(1piece) </span> <br>

                            </div>




                          </div>


                        </div>
                        <div class="d-flex  justify-content-center
                                                ">

                          <span class="mt-3 px-2  py-2 loc-btn">Dhaka
                            <i class="far fa-long-arrow-alt-right"></i>
                            New York </span>

                        </div>

                        <div class="mt-4 d-flex">
                          <div>
                            <img class="rounded-circle" src="images/emirates.png" alt="" width="60px">
                          </div>

                          <div class="ms-3">
                            <div>
                              <span>Emirates Airlines</span> <br>
                              <span class="upper-accordian-text2">Ak4562,2456</span>
                            </div>
                            <div class="mt-2">
                              <span class="upper-accordian-text2">6 Mar 2022 - Dhaka(DAC).
                                21:55</span> <br>
                              <span class="text-danger" class="upper-accordian-text2">Travel
                                Time : 09h 45m</span>
                            </div>

                            <div class="mt-1">
                              <div class="acc-mid-border">
                              </div>

                              <div class=" acc-mid-border2">
                              </div>


                              <div class="acc-mid-border">
                              </div>

                            </div>
                            <div>
                              <span class="upper-accordian-text2">6 Mar 2022 -
                                Istanbul(IST).
                                21:55</span> <br>


                              <span style="font-size: 10px;" style="width: 15px;" class="d-flex">Adult <svg style="width: 12px;" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ms-1" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" />
                                </svg> <span class="text-secondary ms-1 me-1">Check
                                  in:</span>
                                23kg(2picece) <svg style="width: 12px;" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ms-1 me-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                </svg> <span class="text-secondary me-1">Cabin:</span>
                                8kg(1piece) </span> <br>

                            </div>




                          </div>


                        </div>



                      </div>



                      <div class="col-md-7 mt-2 px-0">
                        <div class="mt-2">
                          <ul class="tab-list nav nav-tabs w-100" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active tab-btn" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Fare Summary</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link tab-btn" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Discount &
                                Gross</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link tab-btn" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Cancellation</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link tab-btn" id="contact-tab" data-bs-toggle="tab" data-bs-target="#Data" type="button" role="tab" aria-controls="Data" aria-selected="false">Data
                                Change</button>
                            </li>

                            <li class="nav-item" role="presentation">
                              <button class="nav-link tab-btn" id="contact-tab" data-bs-toggle="tab" data-bs-target="#Baggage" type="button" role="tab" aria-controls="Baggage" aria-selected="false">Baggage</button>
                            </li>
                          </ul>
                          <div class="tab-content px-1" id="myTabContent">
                            <div class="tab-pane fade show active " id="home" role="tabpanel" aria-labelledby="home-tab">

                              <div class="tab-row  border-bottom border-dark py-3">
                                <div class=" tab-btn ">
                                  <span class="text-secondary">Pax Type</span>
                                </div>
                                <div class="tab-btn ">
                                  <span class="text-secondary">Base Fare</span>

                                </div>
                                <div class="text-center tab-btn ">
                                  <span class="text-secondary ">Tax</span>

                                </div>
                                <div class=" tab-btn">
                                  <span class="text-secondary">Other</span>

                                </div>
                                <div class="tab-btn ">
                                  <span class="text-secondary">Discount</span>

                                </div>
                                <div class="tab-btn ">
                                  <span class="text-secondary">AIT & VAT</span>

                                </div>
                                <div class=" tab-btn ">
                                  <span class="text-secondary ">Pax Count</span>

                                </div>
                                <div class="tab-btn ">
                                  <span class=" fw-bold pax">Pax
                                    Count</span>

                                </div>
                                <div class="tab-btn ">
                                  <span class="text-secondary p-1 fare ">Fare Rule</span>

                                </div>

                              </div>


                              <div class="tab-row  border-bottom border-dark py-3">
                                <div class="  ">
                                  <span class="text-secondary upper-accordian-text2">Adult</span>
                                </div>
                                <div class=" ">
                                  <span class="text-secondary upper-accordian-text2">12245</span>

                                </div>
                                <div class="text-center ">
                                  <span class="text-secondary upper-accordian-text2">23645</span>

                                </div>
                                <div class=" ms-2">
                                  <span class="text-secondary upper-accordian-text2 ">0</span>

                                </div>
                                <div class=" ">
                                  <span class="text-secondary upper-accordian-text2">+5465</span>

                                </div>
                                <div class=" ">
                                  <span class="text-secondary upper-accordian-text2">216</span>

                                </div>
                                <div class=" ">
                                  <span class="text-secondary upper-accordian-text2 ">216</span>

                                </div>
                                <div class=" ">
                                  <span class="pax fw-bold">125334</span>

                                </div>


                              </div>



                            </div>
                            <div class="tab-pane fade px-2" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                              <div class="row border-bottom border-dark py-3 mt-2">
                                <div class="col col-md-4 text-secondary ">
                                  <span class="ms-2 upper-accordian-text2">Profit
                                    Ammount</span>
                                </div>
                                <div class="col col-md-4 text-secondary upper-accordian-text2">
                                  Comission
                                </div>
                                <div class="col col-md-4 text-secondary upper-accordian-text2">
                                  Invoice Ammount
                                </div>
                              </div>

                              <div class="row border-bottom border-dark py-3 mt-2">
                                <div class="col col-md-4 text-secondary ">
                                  <span class="ms-2 upper-accordian-text2">121893728</span>
                                </div>
                                <div class="col col-md-4 text-secondary upper-accordian-text2">
                                  7%
                                </div>
                                <div class="col col-md-4 text-secondary upper-accordian-text2">
                                  387238462
                                </div>
                              </div>

                            </div>
                            <div class="tab-pane fade px-2" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                              <div class=" row mt-3 pb-3 time">
                                <div class="col col-md-6 ms-3">
                                  <span class="text-secondary">Time Frame</span> <br>
                                  <span class="text-secondary fs-6">(From Scheduled
                                    flight
                                    Departure)</span>
                                </div>
                                <div class="col col-md-4">
                                  <span class="text-secondary">Airline Fee + Flyfarint
                                    Flight</span> <br>
                                  <span class="text-secondary fs-6">(Per
                                    Passenger)</span>
                                </div>
                              </div>
                              <div class=" row py-3 time">
                                <div class="col col-md-6 ms-3">
                                  <span class="time-time">0 hours to
                                    72
                                    hours</span> <br>

                                </div>
                                <div class="col col-md-4">
                                  <span class="time-time">Adult :
                                    20400 +
                                    3000</span> <br>
                                </div>
                              </div>

                              <div class=" row py-3">
                                <div class="col col-md-6 ms-3">
                                  <span class="time-time">72 hours to
                                    365
                                    days</span> <br>

                                </div>
                                <div class="col col-md-4">
                                  <span class="time-time">Adult :
                                    20400 +
                                    3000</span> <br>
                                </div>
                              </div>

                              <div class=" row mt-4 pb-3 time">
                                <div class="col col-md-6 ms-3">
                                  <span class="text-secondary">Time Frame</span> <br>
                                  <span class="text-secondary fs-6">(From Scheduled
                                    flight
                                    Departure)</span>
                                </div>
                                <div class="col col-md-4">
                                  <span class="text-secondary">Airline Fee + Flyfarint
                                    Flight</span> <br>
                                  <span class="text-secondary fs-6">(Per
                                    Passenger)</span>
                                </div>
                              </div>
                              <div class=" row py-3">
                                <div class="col col-md-6 ms-3">
                                  <span class="time-time">All Flight
                                    Departure</span> <br>

                                </div>
                                <div class="col col-md-4">
                                  <span class="time-time">Adult :
                                    20400 +
                                    3000</span> <br>
                                </div>
                              </div>
                              <div class="border border-danger rounded-3 p-2 mt-3 important">
                                <span class="text-secondary fs-6">
                                  *Important: The airline fee is indiactive.Flyhub
                                  does not
                                  gurrentee
                                  the accuray of this information.All fees mentioned
                                  are per
                                  passenger
                                </span>
                              </div>


                            </div>
                            <!-- not edited -->
                            <div class="tab-pane fade px-2" id="Data" role="tabpanel" aria-labelledby="contact-tab">
                              <div class=" row mt-3 pb-3 time">
                                <div class="col col-md-6 ms-3">
                                  <span class="text-secondary">Time Frame</span> <br>
                                  <span class="text-secondary fs-6">(From Scheduled
                                    flight
                                    Departure)</span>
                                </div>
                                <div class="col col-md-4">
                                  <span class="text-secondary">Airline Fee + Flyfarint
                                    Flight</span> <br>
                                  <span class="text-secondary fs-6">(Per
                                    Passenger)</span>
                                </div>
                              </div>
                              <div class=" row py-3 time">
                                <div class="col col-md-6 ms-3">
                                  <span class="time-time">0 hours to
                                    72
                                    hours</span> <br>

                                </div>
                                <div class="col col-md-4">
                                  <span class="time-time">Adult :
                                    20400 +
                                    3000</span> <br>
                                </div>
                              </div>

                              <div class=" row py-3">
                                <div class="col col-md-6 ms-3">
                                  <span class="time-time">72 hours to
                                    365
                                    days</span> <br>

                                </div>
                                <div class="col col-md-4">
                                  <span class="time-time">Adult :
                                    20400 +
                                    3000</span> <br>
                                </div>
                              </div>

                              <div class=" row mt-4 pb-3 time">
                                <div class="col col-md-6 ms-3">
                                  <span class="text-secondary">Time Frame</span> <br>
                                  <span class="text-secondary fs-6">(From Scheduled
                                    flight
                                    Departure)</span>
                                </div>
                                <div class="col col-md-4">
                                  <span class="text-secondary">Airline Fee + Flyfarint
                                    Flight</span> <br>
                                  <span class="text-secondary fs-6">(Per
                                    Passenger)</span>
                                </div>
                              </div>
                              <div class=" row py-3">
                                <div class="col col-md-6 ms-3">
                                  <span class="time-time">All Flight
                                    Departure</span> <br>

                                </div>
                                <div class="col col-md-4">
                                  <span class="time-time">Adult :
                                    20400 +
                                    3000</span> <br>
                                </div>
                              </div>
                              <div class="border border-danger rounded-3 p-2 mt-3 important">
                                <span class="text-secondary fs-6">
                                  *Important: The airline fee is indiactive.Flyhub
                                  does not
                                  gurrentee
                                  the accuray of this information.All fees mentioned
                                  are per
                                  passenger
                                </span>
                              </div>

                            </div>
                            <div class="tab-pane fade px-2" id="Baggage" role="tabpanel" aria-labelledby="contact-tab">
                              <div class="row border-bottom border-dark py-3 mt-2">
                                <div class="col col-md-4 text-secondary ">
                                  <span class="ms-2">Flight</span>
                                </div>
                                <div class="col col-md-4 text-secondary">
                                  Cabin
                                </div>
                                <div class="col col-md-4 text-secondary">
                                  Check-In
                                </div>
                              </div>

                              <div class="row border-bottom border-dark py-3 mt-2">
                                <div class="col col-md-4 text-secondary ">
                                  <span class="ms-2">Dac-Jfk</span>
                                </div>
                                <div class="col col-md-4 text-secondary">
                                  10 kg
                                </div>
                                <div class="col col-md-4 text-secondary">
                                  2
                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>


                </div>



              </div>
            </div>
          </div>
        </div>


      </div>






  </div>
  </div>






  </main>
  </div>


  <script src="js/airticket.js"></script>

  <!-- flickcity js -->
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="text/javascript">
    $('.main-carousel').flickity({
      // options
      cellAlign: 'left',
      // contain: true,
      // wrapAround: true,
      // freeScroll: true
    });
  </script>

  <script src="js/airportApi.js"></script>

</body>

</html>