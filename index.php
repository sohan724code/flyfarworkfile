<?php
include "session.php";

// payable
$Payable = 0;
$payableList = [];
$payList = "SELECT vendor.vendorId, vendor.name, SUM(deposit-cost) as Total FROM vendor_ledger
            INNER JOIN vendor ON vendor_ledger.VDR_ID=vendor.vendorId
            GROUP BY vendor_ledger.VDR_ID HAVING Total < 0";

$result = $conn->query($payList);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $Payable += $row['Total'];

    array_push($payableList, [$row['name'], $row['Total']]);
  }
}


// unearned
$UnEarned = 0;
$unearnedList = [];
$recvList = 'SELECT customer.name, SUM(deposit-cost) as Total FROM client_ledger
            INNER JOIN customer ON client_ledger.CSR_ID=customer.CustomerId 
            GROUP BY client_ledger.CSR_ID
            Having Total >  0';

$result = $conn->query($recvList);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $UnEarned += $row['Total'];

    array_push($unearnedList, [$row['name'], $row['Total']]);
  }
}


// receivable
$receivable = 0;
$receivableList = [];
$recvList = 'SELECT customer.name, SUM(deposit-cost) as Total FROM client_ledger
            INNER JOIN customer ON client_ledger.CSR_ID=customer.CustomerId                                        
            GROUP BY client_ledger.CSR_ID
            HAVING Total < 0';
$result = $conn->query($recvList);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $receivable += $row['Total'];
    array_push($receivableList, [$row['name'], $row['Total']]);
  }
}



// prepaid
$PrePaid = 0;
$prepaidList = [];
$payList = "SELECT vendor.vendorId, vendor.name, SUM(deposit-cost) as Total FROM vendor_ledger
            INNER JOIN vendor ON vendor_ledger.VDR_ID=vendor.vendorId
            GROUP BY vendor_ledger.VDR_ID
            HAVING Total > 0";

$result = $conn->query($payList);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $PrePaid += $row['Total'];
    array_push($prepaidList, [$row['name'], $row['Total']]);
  }
}



// bank
$BankTotal = 0;
$bankList = [];
$sql = "SELECT DISTINCT id, bankId, bankname,bankaccno, branchname, SUM(credit-debit) as Amount FROM bank GROUP BY bankname";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $bankgetID = $row["bankId"];
    $BankTotal += $row['Amount'];

    array_push($bankList, [$row['bankname'], $row['Amount']]);
  }
}


// mobile bank
$mobile_banking_list = [];
$mobile_banking = 0;
$Today = date("Y-m-d");
$sql = "SELECT id, MB_ID, mb_operator, mb_number, SUM(cashIn-cashOut) as balance FROM `mobile_banking` GROUP By MB_ID";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $mobile_banking += $row['balance'];

    array_push($mobile_banking_list, [$row['mb_operator'], $row['balance']]);
  }
} else {
  $mobile_banking = 0;
}


// cash
$cash = "SELECT SUM(cashIn - cashOut) as amount from cash";
$result = $conn->query($cash);
$Cash;

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $Cash = $row["amount"];
  }
}


// todays sale
$sale = [];
$Today = date("Y-m-d");
$sql = "SELECT
                invoice.invNo,
                invoice.createdtime,
                invoice.vendorName,
                invoice.type,
                airticket.vPrice1 AS vCost,
                invoice.clientName,
                airticket.cost1 AS Amount
FROM
    invoice
INNER JOIN airticket ON invoice.invNo = airticket.invNo
WHERE invoice.createdtime LIKE '$Today%'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $INV_NO = $row["invNo"];
    $sales += $row['Amount'];
  }
} else {
  $sales = 0;
}


// todays purchase

$Today = date("Y-m-d");
$sql = "SELECT
    invoice.invNo,
    invoice.createdtime,
    invoice.vendorName,
    invoice.type,
    airticket.vPrice1 AS vCost,
    invoice.clientName,
    airticket.cost1 AS Amount
FROM
    invoice
INNER JOIN airticket ON invoice.invNo = airticket.invNo
WHERE invoice.createdtime LIKE '$Today%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $INV_NO = $row["invNo"];
    $purchase += $row['vCost'];
  }
} else {
  $purchase = 0;
}


// vendor refund
$sql = "SELECT * FROM `unsettle_vendor_leadger` Order By DateTime DESC";
$result = $conn->query($sql);
$vendor_refunded = 0;
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $vendor_refunded = $row['amount'];
  }
}


// client refund

$sql = "SELECT * FROM `client_unsettle_ledger` Order By DateTime DESC";
$result = $conn->query($sql);
$client_refunded = 0;
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $client_refunded = $row['amount'];
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!--Bootstrap DataTable CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

  <title>Fly Far International</title>
</head>



<body>
  <div class="page-container mb-5">
    <!-- Side Navbar -->
    <nav class="side-nav  d-lg-block" id="side-navbar" class="w-50 ms-4 mt-4">
      <img src="images/logo.gif" alt="Fly Far Int Logo" width="230px" style=" margin-top: -20px;">

      <div class="ms-4 " style="width: 80%;">
        <a href="./index.php">
          <div class="sidenav-link">
            Dashboard
          </div>
        </a>

        <div class="sidenav-link navlink-with-icon" id="inquery-btn">
          <span>Inquiry Management</span> <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 nav-arrow" id="inquery-arrow" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </div>
        <div class="inner-nav" id="inner-inquery-links">

          <a href="./inquiry-management/air-ticket-search.php">
            <div class="inner-nav-link">
              Air Ticket Search
            </div>
          </a>

          <a href="visaInformation.php">
            <div class="inner-nav-link">
              Visa Information
            </div>
          </a>

          <a href="./inquiry-management/passport-search.php">
            <div class="inner-nav-link">
              Passport Search
            </div>
          </a>

          <a href="FFL.php">
            <div class="inner-nav-link">
              FFL Package
            </div>
          </a>

          <a href="#">
            <div class="inner-nav-link">
              Trips Package
            </div>
          </a>

          <a href="#">
            <div class="inner-nav-link">
              Travel Rules
            </div>
          </a>
        </div>



        <a href="#">
          <div class="sidenav-link">
            Task Management
          </div>
        </a>

        <a href="#">
          <div class="sidenav-link">
            Requirements
          </div>
        </a>
        <div class="sidenav-link navlink-with-icon" id="quation-btn">
          <span>Quation</span> <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 nav-arrow" id="quation-arrow" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </div>
        <div class="inner-nav" id="inner-quation-links">
          <a href="packageQuation.php">
            <div class="inner-nav-link">
              Package Quation
            </div>
          </a>
          <a href="">
            <div class="inner-nav-link">
              Air Ticket Quation
            </div>
          </a>
          <a href="#">
            <div class="inner-nav-link">
              Visa Quation
            </div>
          </a>
          <a href="#">
            <div class="inner-nav-link">
              Hotel Quation
            </div>
          </a>
          <a href="#">
            <div class="inner-nav-link">
              Travel Assitancy Quation
            </div>
          </a>
          <a href="#">
            <div class="inner-nav-link">
              Insurance Quation
            </div>
          </a>
          <a href="#">
            <div class="inner-nav-link">
              General Quation
            </div>
          </a>
        </div>
        <div class="sidenav-link navlink-with-icon" id="invoice-btn">
          <span>Invoice</span> <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 nav-arrow arrow-rotate" viewBox="0 0 20 20" fill="currentColor" id="invoice-arrow">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </div>
        <div class="inner-nav" id="inner-invoice-links">
          <a href="visaInvoice.php" target="_blank">
            <div class="inner-nav-link">
              Visa Invoice
            </div>
          </a>
          <a href="visaInvoicePDF.php">
            <div class="inner-nav-link">
              Visa Invoice PDF
            </div>
          </a>

        </div>

        <a href="#">
          <div class="sidenav-link">
            Money Receipt
          </div>
        </a>
        <div class="sidenav-link navlink-with-icon" id="expense-btn">
          <span>Expense</span> <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 nav-arrow arrow-rotate" viewBox="0 0 20 20" fill="currentColor" id="expense-arrow">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </div>
        <div class="inner-nav" id="inner-expense-links">
          <a href="OfficeExpense.php">
            <div class="inner-nav-link">
              Vendor Payment
            </div>
          </a>
          <a href="OfficeExpense.php">
            <div class="inner-nav-link">
              Office Expenses
            </div>
          </a>
          <a href="OfficeExpense.php">
            <div class="inner-nav-link">
              Other Expenses
            </div>
          </a>
        </div>
        <div class="sidenav-link navlink-with-icon" id="Setup-btn">
          <span>Setup</span> <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 nav-arrow arrow-rotate" viewBox="0 0 20 20" fill="currentColor" id="Setup-arrow">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </div>
        <div class="inner-nav" id="inner-Setup-links">
          <a href="">
            <div class="inner-nav-link">
              Account Setup
            </div>
          </a>
          <a href="">
            <div class="inner-nav-link">
              Admin Setup
            </div>
          </a>
          <a href="setup/visa-query-setup.php">
            <div class="inner-nav-link">
              Visa Query Setup
            </div>
          </a>
        </div>
        <a href="#">
          <div class="sidenav-link">
            Chart of Account
          </div>
        </a>
        <div class="sidenav-link navlink-with-icon" id="report-btn">
          <span>Report</span> <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 nav-arrow" viewBox="0 0 20 20" fill="currentColor" id="report-arrow">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </div>
        <div class="inner-nav" id="inner-report-links">
          <a href="prepaidUnearnedReciveable.php">
            <div class="inner-nav-link">
              Account Report
            </div>
          </a>
          <a href="#">
            <div class="inner-nav-link">
              Admin Report
            </div>
          </a>
          <a href="#">
            <div class="inner-nav-link">
              Management Report
            </div>
          </a>
        </div>
        <a href="#">
          <div class="sidenav-link">
            Reconcile
          </div>
        </a>
        <div class="sidenav-link navlink-with-icon" id="log-btn">
          <span>Log</span> <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 nav-arrow" viewBox="0 0 20 20" fill="currentColor" id="log-arrow">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </div>
        <div class="inner-nav" id="inner-log-links">
          <a href="#">
            <div class="inner-nav-link">
              Activity Log
            </div>
          </a>
          <a href="#">
            <div class="inner-nav-link">
              Deal History Log
            </div>
          </a>
        </div>
        <a href="#">
          <div class="sidenav-link">
            My Productivity Report
          </div>
        </a>

      </div>
    </nav>

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

      <div class="row gx-4 gy-2 mt-3">
        <div class="col col-6 col-md-3">
          <!-- Button trigger modal -->
          <div class="card-box " data-bs-toggle="modal" data-bs-target="#exampleModal">
            <div class="img-container img-con1">
              <img src="https://media.discordapp.net/attachments/944883914193907822/946281337801814016/prepaid-card.png" alt="" width="45px">
            </div>
            <h6>Payable</h6>
            <h5 id="payable"><?php echo number_format($Payable) . " Tk" ?></h5>
          </div>



          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Payable</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="table-responsive">
                    <?php
                    if (sizeof($payableList) > 0) {
                      echo '
                                            <table class="info-table" class="table table-striped" style="width:100%" data-order="">
                                                <thead>
                                                    <tr>
                                                        <th >Name</th>
                                                        <th class="text-end">Amount</th>
                                                    </tr>
                                                </thead>
                                            ';


                      foreach ($payableList as $payableData) {
                        echo "<tr >";
                        echo "<td>$payableData[0]</td>";
                        echo "<td class='text-end'>" . number_format($payableData[1]) . "</td>";
                        echo "</tr>";
                      }

                      echo "</table>";
                    } else {
                      echo "No data found";
                    }
                    ?>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col col-6 col-md-3">
          <!-- Button trigger modal -->
          <div class="card-box" data-bs-toggle="modal" data-bs-target="#exampleModal2">
            <div class="img-container img-con2">
              <img src="https://media.discordapp.net/attachments/944883914193907822/946281338271563846/income.png" alt="" width="45px">
            </div>
            <h6>Unearned</h6>
            <h5 id="unearned"><?php echo number_format($UnEarned) . " Tk" ?> </h5>
          </div>



          <!-- Modal -->
          <div class="modal fade" id="exampleModal2" tabindex="-1">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Unearned</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="table-responsive">
                    <?php
                    if (sizeof($unearnedList) > 0) {
                      echo '
                                            <table class="info-table" class="table table-striped" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th >Name</th>
                                                        <th class="text-end">Amount</th>
                                                    </tr>
                                                </thead>
                                            ';


                      foreach ($unearnedList as $unearnedData) {
                        echo "<tr >";
                        echo "<td>$unearnedData[0]</td>";
                        echo "<td class='text-end'>" . number_format($unearnedData[1]) . "</td>";
                        echo "</tr>";
                      }

                      echo "</table>";
                    } else {
                      echo "No data found";
                    }
                    ?>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col col-6 col-md-3">
          <!-- Button trigger modal -->
          <div class="card-box" data-bs-toggle="modal" data-bs-target="#exampleModal3">
            <div class="img-container img-con3">
              <img src="https://media.discordapp.net/attachments/944883914193907822/946281338032513034/delivery.png" alt="" width="45px">
            </div>
            <h6>Receivable</h6>
            <h5 id="receivable"><?php echo number_format($receivable) . " Tk" ?></h5>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal3" tabindex="-1">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Receivable</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="table-responsive">
                    <?php
                    if (sizeof($receivableList) > 0) {
                      echo '<table class="info-table" class="table table-striped" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th >Name</th>
                                                        <th class="text-end">Amount</th>
                                                    </tr>
                                                </thead>
                                            ';


                      foreach ($receivableList as $receivableData) {
                        echo "<tr >";
                        echo "<td>$receivableData[0]</td>";
                        echo "<td class='text-end'>" . number_format($receivableData[1]) . "</td>";
                        echo "</tr>";
                      }

                      echo "</table>";
                    } else {
                      echo "No data found";
                    }
                    ?>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col col-6 col-md-3">
          <!-- Button trigger modal -->
          <div class="card-box" data-bs-toggle="modal" data-bs-target="#modal4">
            <div class="img-container img-con4">
              <img src="https://media.discordapp.net/attachments/944883914193907822/946281338502270996/account.png" alt="" width="45px">
            </div>
            <h6>Prepaid</h6>
            <h5 id="prepaid"><?php echo number_format($PrePaid) . " Tk"; ?></h5>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="modal4" tabindex="-1">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Prepaid</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="table-responsive">
                    <?php
                    if (sizeof($prepaidList) > 0) {
                      echo '
                                            <table class="info-table" class="table table-striped" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th >Name</th>
                                                        <th class="text-end">Amount</th>
                                                    </tr>
                                                </thead>
                                            ';


                      foreach ($prepaidList as $prepaidData) {
                        echo "<tr >";
                        echo "<td>$prepaidData[0]</td>";
                        echo "<td class='text-end'>" . number_format($prepaidData[1]) . "</td>";
                        echo "</tr>";
                      }

                      echo "</table>";
                    } else {
                      echo "No data found";
                    }
                    ?>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row gx-4 gy-2 mt-3">
        <div class="col col-12 col-md-6">
          <div class="card-box d-flex justify-content-center align-items-center pt-0">
            <h6 class="me-2">Liabilities = </h6>
            <h5 id="unearned" class="mt-3"><?php echo number_format($Payable + $UnEarned) . " Tk" ?></h5>
          </div>
        </div>
        <div class="col col-12 col-md-6">
          <div class="card-box d-flex justify-content-center align-items-center pt-0">
            <h6 class="me-2">Asset = </h6>
            <h5 id="unearned" class="mt-3"><?php echo number_format($receivable + $PrePaid) . " Tk" ?></h5>
          </div>
        </div>
      </div>

      <div class="row gx-4 gy-2 mt-3">
        <div class="col col-4">

          <div class="card-box" data-bs-toggle="modal" data-bs-target="#bank">
            <h6>Bank</h6>
            <h5 id="payable "><?php echo $BankTotal . " Tk" ?></h5>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="bank" tabindex="-1">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Prepaid</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="table-responsive">
                    <?php
                    if (sizeof($bankList) > 0) {
                      echo '
                                            <table class="info-table" class="table table-striped" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th >Name</th>
                                                        <th class="text-end">Amount</th>
                                                    </tr>
                                                </thead>
                                            ';

                      echo "<tr >";
                      foreach ($bankList as $bankData) {
                        echo "<td>$bankData[0]</td>";
                        echo "<td class='text-end'>$bankData[1]</td>";
                      }
                      echo "</tr>";
                      echo "</table>";
                    } else {
                      echo "No data found";
                    }
                    ?>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-4">
          <div class="card-box" data-bs-toggle="modal" data-bs-target="#mobile_bank">
            <h6>Mobile Bank</h6>
            <h5 id="unearned"><?php echo number_format($mobile_banking) . " Tk" ?></h5>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="mobile_bank" tabindex="-1">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Prepaid</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="table-responsive">
                    <?php
                    if (sizeof($bankList) > 0) {
                      echo '
                                            <table class="info-table" class="table table-striped" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th >Name</th>
                                                        <th class="text-end">Amount</th>
                                                    </tr>
                                                </thead>
                                            ';


                      foreach ($mobile_banking_list as $mobile_banking_data) {
                        echo "<tr >";
                        echo "<td>$mobile_banking_data[0]</td>";
                        echo "<td class='text-end'>$mobile_banking_data[1]</td>";
                        echo "</tr>";
                      }

                      echo "</table>";
                    } else {
                      echo "No data found";
                    }
                    ?>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-4">
          <div class="card-box">
            <h6>Cash</h6>
            <h5 id="receivable"><?php echo number_format($Cash) . " Tk" ?></h5>
          </div>
        </div>
      </div>

      <div class="row gx-4 gy-2 mt-3">
        <div class="col col-12">
          <div class="card-box d-flex flex-column flex-md-row justify-content-center align-items-center pt-0">
            <h6>Total Cash and Cash Equivalent = </h6>
            <h5 id="unearned" class="mt-3 ms-2"><?php echo number_format($BankTotal + $mobile_banking + $Cash) . " Tk" ?></h5>
          </div>
        </div>
      </div>

      <div class="row gx-4 gy-2 mt-3">
        <div class="col col-6 col-md-3">
          <div class="card-box">
            <h6>Todays Sale</h6>
            <h5 id="todays-sale"><?php echo number_format($sales) ?></h5>
          </div>
        </div>
        <div class="col col-6 col-md-3">
          <div class="card-box">
            <h6>Todays Purchase</h6>
            <h5 id="todays-purchase"><?php echo number_format($purchase) . " Tk" ?></h5>
          </div>
        </div>
        <div class="col col-6 col-md-3">
          <div class="card-box">
            <h6>Earnings</h6>
            <h5 id="earnings"><?php echo number_format($sales - $purchase) . " Tk" ?></h5>
          </div>
        </div>
        <div class="col col-6 col-md-3">
          <div class="card-box">
            <h6>Prepaid</h6>
            <h5 id="prepaid">60,000 TK</h5>
          </div>
        </div>
      </div>

      <div class="row gx-4 gy-2 mt-3">
        <div class="col col-12 col-md-6 col-lg-4">
          <div class="card-box">
            <div class="row gx-2 mb-4">
              <div class="col">
                <h5 class="text-start">Vendor Refund</h5>
              </div>
              <div class="col text-end text-primary me-3">
                <?php echo number_format($vendor_refunded) . " TK" ?>
              </div>

            </div>
            <div class="row gx-1 border-bottom pb-2 mt-2">
              <div class="col col-6">
                Refund in Process
              </div>
              <div class="col col-2 text-secondary">
                45
              </div>
              <div class="col col-3 text-secondary">
                60,000 TK
              </div>
              <div class="col col-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 w-75" viewBox="0 0 20 20" fill="gray">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </div>
            </div>
            <div class="row gx-1 border-bottom pb-2 mt-2">
              <div class="col col-6">
                Refund Unsettled
              </div>
              <div class="col col-2 text-secondary">
                45
              </div>
              <div class="col col-3 text-secondary">
                60,000 TK
              </div>
              <div class="col col-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 w-75" viewBox="0 0 20 20" fill="gray">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </div>
            </div>
            <div class="row gx-1 border-bottom pb-2 mt-2">
              <div class="col col-6">
                Refund Settled
              </div>
              <div class="col col-2 text-secondary">
                45
              </div>
              <div class="col col-3 text-secondary">
                60,000 TK
              </div>
              <div class="col col-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 w-75" viewBox="0 0 20 20" fill="gray">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </div>
            </div>
            <div class="row gx-1 border-bottom pb-2 mt-2">
              <div class="col col-6">
                Refund not in Process
              </div>
              <div class="col col-2 text-secondary">
                45
              </div>
              <div class="col col-3 text-secondary">
                60,000 TK
              </div>
              <div class="col col-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 w-75" viewBox="0 0 20 20" fill="gray">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-12 col-md-6 col-lg-4">
          <div class="card-box">
            <div class="row gx-2 mb-4">
              <div class="col">
                <h5 class="text-start">Client Refund</h5>
              </div>
              <div class="col text-end text-primary me-3">
                <?php echo number_format($client_refunded) . " Tk" ?>
              </div>

            </div>
            <div class="row gx-1 border-bottom pb-2 mt-2">
              <div class="col col-6">
                Refund in Process
              </div>
              <div class="col col-2 text-secondary">
                45
              </div>
              <div class="col col-3 text-secondary">
                60,000 TK
              </div>
              <div class="col col-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 w-75" viewBox="0 0 20 20" fill="gray">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </div>
            </div>
            <div class="row gx-1 border-bottom pb-2 mt-2">
              <div class="col col-6">
                Refund Unsettled
              </div>
              <div class="col col-2 text-secondary">
                45
              </div>
              <div class="col col-3 text-secondary">
                60,000 TK
              </div>
              <div class="col col-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 w-75" viewBox="0 0 20 20" fill="gray">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </div>
            </div>
            <div class="row gx-1 border-bottom pb-2 mt-2">
              <div class="col col-6">
                Refund Settled
              </div>
              <div class="col col-2 text-secondary">
                45
              </div>
              <div class="col col-3 text-secondary">
                60,000 TK
              </div>
              <div class="col col-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 w-75" viewBox="0 0 20 20" fill="gray">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </div>
            </div>
            <div class="row gx-1 border-bottom pb-2 mt-2">
              <div class="col col-6">
                Refund not in Process
              </div>
              <div class="col col-2 text-secondary">
                45
              </div>
              <div class="col col-3 text-secondary">
                60,000 TK
              </div>
              <div class="col col-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 w-75" viewBox="0 0 20 20" fill="gray">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-12 col-md-6 col-lg-4">
          <div class="card-box">
            <div class="row gx-2 mb-4">
              <div class="col">
                <h5 class="text-start">Unsettled Transaction</h5>
              </div>
              <div class="col text-end text-primary me-3">
                5896315 TK
              </div>

            </div>
            <div class="row gx-1 border-bottom pb-2 mt-2">
              <div class="col col-6">
                Refund in Process
              </div>
              <div class="col col-2 text-secondary">
                45
              </div>
              <div class="col col-3 text-secondary">
                60,000 TK
              </div>
              <div class="col col-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 w-75" viewBox="0 0 20 20" fill="gray">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </div>
            </div>
            <div class="row gx-1 border-bottom pb-2 mt-2">
              <div class="col col-6">
                Refund Unsettled
              </div>
              <div class="col col-2 text-secondary">
                45
              </div>
              <div class="col col-3 text-secondary">
                60,000 TK
              </div>
              <div class="col col-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 w-75" viewBox="0 0 20 20" fill="gray">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </div>
            </div>
            <div class="row gx-1 border-bottom pb-2 mt-2">
              <div class="col col-6">
                Refund Settled
              </div>
              <div class="col col-2 text-secondary">
                45
              </div>
              <div class="col col-3 text-secondary">
                60,000 TK
              </div>
              <div class="col col-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 w-75" viewBox="0 0 20 20" fill="gray">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </div>
            </div>
            <div class="row gx-1 border-bottom pb-2 mt-2">
              <div class="col col-6">
                Refund not in Process
              </div>
              <div class="col col-2 text-secondary">
                45
              </div>
              <div class="col col-3 text-secondary">
                60,000 TK
              </div>
              <div class="col col-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 w-75" viewBox="0 0 20 20" fill="gray">
                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- External JavaScript -->
  <script src="script.js"></script>

  <!-- DataTable -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

  <script>
    $(document).ready(function() {
      $('.info-table').DataTable();
    });
  </script>


</body>

</html>