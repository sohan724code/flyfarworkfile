<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./../css/style.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Visa Query Setup</title>

    <style>
        /* visa query setup */
        .reset {
            all: revert;
        }

        .ffl-text-color {
            color: #3751FF
        }

        .ffl-border {
            border-style: solid;
            border-width: 1px;
            border-color: #3751FF;
            border-radius: 5px;
        }

        .ffl-button {
            font-size: 18px;
            color: white;
            border: 1px solid #3751FF;
            border-radius: 30px;
            background-color: #3751FF;
        }

        textarea:hover,
        input:hover,
        textarea:active,
        input:active,
        textarea:focus,
        input:focus,
        button:focus,
        button:active,
        button:hover,
        label:focus,
        .btn:active,
        .btn.active {
            outline: 0px !important;
            -webkit-appearance: none;
            box-shadow: none !important;
        }
    </style>
</head>

<body>
    <script>
        // Sweet Alert
        function success() {
            swal({
                title: "Success!",
                icon: "success",
                text: "Visa Information Added Successfully!",
                type: "success",
                confirmButtonText: "Cool"
            });
        }

        // total processing time 
        function totalProcessingTime() {
            const embassyProcessingTime = parseInt(document.getElementById("embassyProcessingTime").value);
            const officeProcessingTime = parseInt(document.getElementById("officeProcessingTime").value);
            document.getElementById("totalProcessingTime").innerHTML = embassyProcessingTime + officeProcessingTime;
        }

        // total cost 
        function totalCost() {
            const embassyFee = parseInt(document.getElementById("embassy-fee").value);
            const embassyAgentFee = parseInt(document.getElementById("embassy-agent-fee").value);
            const othersCost = parseInt(document.getElementById("others-cost").value);
            const serviceCharge = parseInt(document.getElementById("service-charge").value);

            document.getElementById("total-cost").innerHTML = embassyFee + embassyAgentFee + othersCost + serviceCharge;

        }
    </script>

    <?php

    include "./../session.php";

    // variables with empty values

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $error = "";
        $country = $_POST["country"];
        $visa_type = $_POST["visaType"];
        $entry_type = $_POST['entryType'];
        $visa_document_type = $_POST['visaDocumentType'];
        $visa_duration = $_POST['visaDuration'];
        $embassy_processing_time = $_POST['embassyProcessingTime'];
        $office_processing_time = $_POST['officeProcessingTime'];
        $processing_time_note = $_POST['processingTimeNote'];
        $minimum_validity = $_POST['minimumValidity'];
        $minimum_blank_page = $_POST['minimumBlankPage'];
        $passport_requirement_details = $_POST['passportRequirementDetails'];
        $national_ID_card = $_POST['nationalIDCard'];
        $photo_unit = $_POST['photoUnit'];
        $photo_width = $_POST['photoWidth'];
        $photo_height = $_POST['photoHeight'];

        $photo_requirement_details = $_POST['photoRequirementDetails'];
        $utility_bill = $_POST['utilityBill'];
        $asset_valuation = $_POST['assetValuation'];
        $visa_application_submission_center = $_POST['visaApplicationSubmissionCenter'];
        $google_map_link = $_POST['googleMapLink'];
        $address = $_POST['address'];
        $appointment_required = $_POST['appointmentRequired'];
        $visa_information_source_link_1 = $_POST['visaInformationSourceLink1'];
        $visa_information_source_link_2 = $_POST['visaInformationSourceLink2'];
        $embassy_fee = $_POST['embassyFee'];
        $embassy_agent_fee = $_POST['embassyAgentFee'];
        $others_cost = $_POST['othersCost'];
        $others_cost_details = $_POST['othersCostDetails'];
        $service_charge = $_POST['serviceCharge'];
        $professional_document_details = $_POST['professionalDocumentDetails'];
        $other_document_details = $_POST['otherDocumentDetails'];
        $general_information = $_POST['generalInformation'];
        $period = $_POST['period'];
        $minimum_balance = $_POST['minimum_balance'];
        $bank_solvency = $_POST['bankSolvency'];
        $bank_statement_details = $_POST['bankStatementDetails'];

        $sql = "INSERT INTO `visa_query_setup`( `country`, `visa_type`, `entry_type`, `visa_document_type`, `visa_duration`, `embassy_processing_time`, `office_processing_time`, `processing_time_note`, `minimum_validity`, `minimum_blank_page`, `passport_requirement_details`, `national_ID_card`, `photo_unit`, `photo_width`, `photo_height`, `photo_requirement_details`, `utility_bill`, `asset_valuation`, `visa_application_submission_center`, `google_map_link`, `address`, `appointment_required`, `visa_information_source_link_1`, `visa_information_source_link_2`, `embassy_fee`, `embassy_agent_fee`, `others_cost`, `others_cost_details`, `service_charge`, `professional_document_details`, `other_document_details`, `general_information`, `period`, `minimum_balance`, `bank_solvency`, `bank_statement_details`) 
        VALUES ('$country','$visa_type','$entry_type','$visa_document_type','$visa_duration','$embassy_processing_time','$office_processing_time', '$processing_time_note', '$minimum_validity','$minimum_blank_page','$passport_requirement_details','$national_ID_card','$photo_unit', '$photo_width', '$photo_height','$photo_requirement_details','$utility_bill','$asset_valuation','$visa_application_submission_center','$google_map_link','$address','$appointment_required','$visa_information_source_link_1','$visa_information_source_link_2','$embassy_fee','$embassy_agent_fee','$others_cost','$others_cost_details','$service_charge','$professional_document_details','$other_document_details','$general_information','$period','$minimum_balance','$bank_solvency','$bank_statement_details')";


        if ($conn->query($sql) === TRUE) {
            echo '<script>success();</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>




    <div class="page-container mb-5">

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

                    <button type="button" class="btn btn-sm  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> <img src="./../images/avatar.jpg" alt="" width="30px" style="margin-top: -5px;">
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


            <div class=" my-3">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="row">

                        <!-- left column -->
                        <div class="container w-50 col">

                            <!-- Inquiry Country and Visa Type -->
                            <div class="my-5">
                                <h1 class="fs-5 ffl-text-color"><u>Inquiry Country and Visa Type</u></h1>

                                <!-- input country name  -->
                                <div class="row p-3">
                                    <label class="col">Country</label>

                                    <div class="col">
                                        <fieldset class="reset ffl-border w-50 mx-auto">
                                            <legend class="reset f-6">Select</legend>
                                            <select name="country" class="border-0 w-100 form-select" id="countries">
                                                <option value="Bangladesh">Bangladesh</option>
                                            </select>
                                        </fieldset>
                                    </div>

                                </div>

                                <!-- input visa type -->
                                <div class="row p-3">
                                    <label class="col">Visa Type</label>

                                    <div class="col">
                                        <fieldset class="reset ffl-border w-50 mx-auto">
                                            <legend class="reset">Select</legend>
                                            <select name="visaType" class="border-0 w-100 form-select">
                                                <option value="Tourist Visa">Tourist Visa</option>
                                            </select>
                                        </fieldset>
                                    </div>

                                </div>

                                <!-- input entry type -->
                                <div class="row p-3">
                                    <label class="col">Entry Type</label>

                                    <div class="col">
                                        <fieldset class="reset ffl-border w-50 mx-auto">
                                            <legend class="reset">Select</legend>
                                            <select name="entryType" class="border-0 w-100 form-select">
                                                <option value="Multiple">Multiple</option>
                                            </select>
                                        </fieldset>
                                    </div>

                                </div>

                                <!-- input visa document type -->
                                <div class="row p-3">
                                    <label class="col">Visa Document Type</label>

                                    <div class="col">
                                        <fieldset class="reset ffl-border mx-auto w-50">
                                            <legend class="reset">Select</legend>
                                            <select name="visaDocumentType" class="border-0 w-100 form-select">
                                                <option value="Sticker Visa">Sticker Visa</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>

                                <!-- input visa duration type -->
                                <div class="row p-3">
                                    <label class="col">Visa Duration</label>

                                    <div class="col">
                                        <fieldset class="reset ffl-border w-50 mx-auto">
                                            <legend class="reset">Day</legend>
                                            <input name="visaDuration" value="90" type="number" class="border-0 w-100" required>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>


                            <div class="my-5">
                                <h1 class="fs-5 ffl-text-color"><u>Processing Time</u></h1>

                                <!-- input Embassy Processing Time -->
                                <div class="row p-3">
                                    <label class="col">Embassy Processing Time</label>

                                    <div class="col">
                                        <fieldset class="reset ffl-border w-50 mx-auto">
                                            <legend class="reset">Working Day</legend>
                                            <input type="number" id="embassyProcessingTime" value="40" onChange="totalProcessingTime()" class="border-0 w-100" name="embassyProcessingTime" required>
                                        </fieldset>
                                    </div>
                                </div>

                                <!-- input Embassy Processing Time -->
                                <div class="row p-3">
                                    <label class="col">Our Office Processing Time</label>

                                    <div class="col">
                                        <fieldset class="reset ffl-border w-50 mx-auto">
                                            <legend class="reset">Working Day</legend>
                                            <input type="number" id="officeProcessingTime" value="5" onChange="totalProcessingTime()" name="officeProcessingTime" class="border-0 w-100" required>
                                        </fieldset>
                                    </div>
                                </div>

                                <hr>

                                <div class="row p-3">
                                    <label class="col">Total Processing Time</label>

                                    <div class="col">
                                        <div class="reset ffl-border w-75 mx-auto row p-2">
                                            <text class="reset f-6 col">Day</text>
                                            <text id="totalProcessingTime" class="border-0 w-75 col">50</text>
                                        </div>
                                    </div>

                                    <div class="py-5">
                                        <label>Processing Time Note</label>
                                        <textarea rows="5" name="processingTimeNote" class="ffl-border p-1 mx-auto my-1 w-100"></textarea>
                                    </div>

                                </div>
                            </div>


                            <div class="my-5">

                                <h1 class="fs-5 ffl-text-color"><u>Passport</u></h1>

                                <!-- input Minimum Validity -->
                                <div class="row p-3">
                                    <label class="col">Minimum Validity</label>

                                    <div class="col">
                                        <fieldset class="reset ffl-border w-50 mx-auto">
                                            <legend class="reset">month</legend>
                                            <input name="minimumValidity" type="number" class="border-0 w-100 text-center" required>
                                        </fieldset>
                                    </div>
                                </div>

                                <!-- input Minimum Blank Page -->
                                <div class="row p-3">
                                    <label class="col">Minimum Blank Page</label>

                                    <div class="col">
                                        <fieldset class="reset ffl-border w-50 mx-auto">
                                            <legend class="reset">Page</legend>
                                            <input name="minimumBlankPage" type="number" class="border-0 w-100 text-center" required>
                                        </fieldset>
                                    </div>


                                    <!-- input Passport Requirement Details -->
                                    <div class="row p-3">
                                        <label>Passport Requirement Details</label>
                                        <textarea rows="5" name="passportRequirementDetails" class="ffl-border p-1 mx-auto my-1 w-100"></textarea>
                                    </div>
                                </div>



                                <!-- National ID card section -->
                                <div class="my-5">
                                    <h1 class="fs-5 ffl-text-color"><u>National ID Card</u></h1>
                                    <div>
                                        <fieldset class="reset ffl-border w-50 mx-auto">
                                            <legend class="reset">Select</legend>
                                            <select name="nationalIDCard" class="border-0 w-100 form-select">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>

                                <!-- Photo Requirement Section -->
                                <div class="my-5">
                                    <h1 class="fs-5 ffl-text-color"><u>Photo Requirement</u></h1>

                                    <div class="row">
                                        <div class="col text-center">
                                            <select name="photoUnit" class="w-75 mt-3 h-75 ffl-border text-center form-select" required>
                                                <option>Unit</option>
                                                <option value="mm">mm</option>
                                                <option value="cm">cm</option>
                                            </select>
                                        </div>

                                        <div class="col">
                                            <fieldset class="reset ffl-border w-75 mx-auto">
                                                <legend class="reset">Width</legend>
                                                <input name="photoWidth" class="border-0 w-100" type="number" required>
                                            </fieldset>
                                        </div>

                                        <div class="col">
                                            <fieldset class="reset ffl-border w-75 mx-auto">
                                                <legend class="reset">Height</legend>
                                                <input name="photoHeight" class="border-0 w-100" type="number" required>
                                            </fieldset>
                                        </div>


                                        <div class="py-5">
                                            <label>Photo Requirement Details</label>
                                            <textarea name="photoRequirementDetails" rows="5" class="ffl-border p-1 mx-auto my-1 w-100"></textarea>
                                        </div>
                                    </div>

                                </div>


                                <!-- Utility Bill Section -->
                                <div class="my-5">
                                    <h1 class="fs-5 ffl-text-color"><u>Utility Bill</u></h1>
                                    <div>
                                        <fieldset class="reset ffl-border w-50 mx-auto">
                                            <legend class="reset">Select</legend>
                                            <select name="utilityBill" class="border-0 w-100 form-select">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>

                                <!-- Asset Valuation -->
                                <div class="row p-3">
                                    <label class="col">Asset Valuation</label>

                                    <div class="col">
                                        <fieldset class="reset ffl-border w-50 mx-auto">
                                            <legend class="reset">Select</legend>
                                            <select name="assetValuation" class="border-0 w-100 form-select">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>

                                <!-- Visa Application Submission Center -->
                                <div class="row p-3">
                                    <label class="col">Visa Application Submission Center</label>

                                    <div class="col">
                                        <fieldset class="reset ffl-border w-50 mx-auto">
                                            <legend class="reset">Select</legend>
                                            <select name="visaApplicationSubmissionCenter" class="border-0 w-100 form-select">
                                                <option value="Visa Center">Visa Center</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>

                                <!-- Google Map Link -->
                                <div class="row p-3">
                                    <label class="col">Google Map Link</label>

                                    <div class="col">
                                        <fieldset class="reset ffl-border mx-auto">
                                            <legend class="reset">Link</legend>
                                            <input name="googleMapLink" class="border-0 w-100" required>
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="py-3">
                                    <label>Address</label>
                                    <textarea name="address" rows="5" class="ffl-border p-1 mx-auto my-1 w-100"></textarea>
                                </div>

                                <!-- Appointment Required -->
                                <div class="row p-3">
                                    <label class="col">Appointment Required</label>

                                    <div class="col">
                                        <fieldset class="reset ffl-border w-50 mx-auto">
                                            <legend class="reset">Select</legend>
                                            <select name="appointmentRequired" class="border-0 w-100 form-select">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>

                                <!-- Visa Information Source Link 1 -->
                                <div class="row p-3">
                                    <label class="col">Visa Information Source Link 1</label>

                                    <div class="col">
                                        <fieldset class="reset ffl-border mx-auto">
                                            <legend class="reset">Source Link</legend>
                                            <input class="border-0 w-100" type="url" name="visaInformationSourceLink1" required>
                                        </fieldset>
                                    </div>
                                </div>

                                <!-- Visa Information Source Link 2-->
                                <div class="row p-3">
                                    <label class="col">Visa Information Source Link 2</label>

                                    <div class="col">
                                        <fieldset class="reset ffl-border mx-auto">
                                            <legend class="reset">Source Link</legend>
                                            <input class="border-0 w-100" type="url" name="visaInformationSourceLink2" required>
                                        </fieldset>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- right column -->
                        <div class="container w-50 col">
                            <div class="my-5">
                                <h1 class="fs-5 ffl-text-color"><u>Cost Details</u></h1>

                                <!-- input Embassy Fee Fee  -->
                                <div class="row p-3">
                                    <label class="col">Embassy Fee</label>

                                    <div class="col">
                                        <fieldset class="reset ffl-border w-50 mx-auto">
                                            <legend class="reset f-6">BDT</legend>
                                            <input type="number" id="embassy-fee" value="10000" name="embassyFee" class="border-0 w-100" onChange="totalCost()" required>
                                        </fieldset>
                                    </div>

                                </div>

                                <!-- input Embassy Agent Fee  -->
                                <div class="row p-3">
                                    <label class="col">Embassy Agent Fee</label>

                                    <div class="col">
                                        <fieldset class="reset ffl-border w-50 mx-auto">
                                            <legend class="reset f-6">BDT</legend>
                                            <input type="number" value="5000" id="embassy-agent-fee" name="embassyAgentFee" class="border-0 w-100" onChange="totalCost()" required>
                                        </fieldset>
                                    </div>

                                </div>

                                <!-- input Others Cost -->
                                <div class="row p-3">
                                    <label class="col">Others Cost</label>

                                    <div class="col">
                                        <fieldset class="reset ffl-border w-50 mx-auto">
                                            <legend class="reset f-6">BDT</legend>
                                            <input name="othersCost" value="500" id="others-cost" class="border-0 w-100" type="number" onChange="totalCost()" required>
                                        </fieldset>
                                    </div>

                                    <label>Others Cost Details</label>
                                    <textarea name="othersCostDetails" rows="5" class="ffl-border p-1 mx-auto my-1 w-75"></textarea>

                                </div>

                                <!-- input Others Cost -->
                                <div class="row p-3">
                                    <label class="col">Our Service Charge</label>

                                    <div class="col">
                                        <fieldset class="reset ffl-border w-50 mx-auto">
                                            <legend class="reset f-6">BDT</legend>
                                            <input name="serviceCharge" id="service-charge" type="number" class="border-0 w-100 " value="500" onChange="totalCost()" required>
                                        </fieldset>
                                    </div>

                                </div>

                                <hr>

                                <div class="row p-3">
                                    <label class="col">Total Cost</label>
                                    <div class="col">
                                        <div class="reset ffl-border w-75 mx-auto row p-2">
                                            <text class="reset f-6 col">BDT</text>
                                            <text id="total-cost" class="border-0 w-75 col " required>16000</text>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="my-5">
                                <h1 class="fs-5 ffl-text-color"><u>Professional Document</u></h1>

                                <label>Professional Document Details</label>
                                <textarea name="professionalDocumentDetails" rows="5" class="ffl-border p-1 mx-auto my-1 w-100"></textarea>
                            </div>

                            <div class="my-5">
                                <h1 class="fs-5 ffl-text-color"><u>Other Documents</u></h1>

                                <label>Other Document Details</label>
                                <textarea name="otherDocumentDetails" rows="5" class="ffl-border p-1 mx-auto my-1 w-100"></textarea>

                            </div>

                            <div class="my-5">
                                <h1 class="fs-5 ffl-text-color"><u>Other Information</u></h1>

                                <label>General Information</label>
                                <textarea name="generalInformation" rows="5" class="ffl-border p-1 mx-auto my-1 w-100"></textarea>

                            </div>

                            <div class="my-5">
                                <h1 class="fs-5 ffl-text-color"><u>Financial Document</u></h1>

                                <!-- input Embassy Fee Fee  -->
                                <div class="row p-3">
                                    <label class="col">Bank Statement</label>



                                </div>

                                <!-- input Embassy Fee Fee  -->
                                <div class="row p-3">
                                    <label class="col">Period</label>

                                    <div class="col">
                                        <fieldset class="reset ffl-border w-50 mx-auto">
                                            <legend class="reset f-6">Month</legend>
                                            <input name="period" class="border-0 w-100" type="number" required>
                                        </fieldset>
                                    </div>

                                </div>

                                <!-- input Minimum Balance -->
                                <div class="row p-3">
                                    <label class="col">Minimum Balance</label>

                                    <div class="col">
                                        <fieldset class="reset ffl-border w-50 mx-auto">
                                            <legend class="reset f-6">BDT</legend>
                                            <input name="minimum_balance" type="number" class="border-0 w-100" required>
                                        </fieldset>
                                    </div>

                                </div>

                                <!-- input Bank Solvency-->
                                <div class="row p-3">
                                    <label class="col">Bank Solvency</label></label>

                                    <div class="col">
                                        <fieldset class="reset ffl-border w-50 mx-auto ">
                                            <legend class="reset">Select</legend>
                                            <select name="bankSolvency" class="border-0 w-100 form-select">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="my-5">


                                    <label>Bank Statement Details</label>
                                    <textarea name="bankStatementDetails" rows="5" class="ffl-border p-1 mx-auto my-1 w-100"></textarea>

                                </div>

                            </div>
                        </div>



                    </div>
                    <button type="submit" class="btn btn-primary w-25">Submit</button>
                </form>

            </div>
        </main>
    </div>


    <script>
        var url = './../json/countries.json';

        let countrySelect = document.getElementById('countries');

        function createOptions(data) {

            for (let i = 0; i < data.length; i++) {
                const option = document.createElement("option");
                option.text = data[i].name;
                countrySelect.add(option);
            }
        }

        fetch(url)
            .then(response => response.json())
            .then(data => createOptions(data));
    </script>

    <?php include './../external-scripts.php' ?>
</body>

</html>