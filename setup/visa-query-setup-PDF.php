<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Document</title>

  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

  <style>
    table,
    th,
    td {
      /* border: 1px solid black; */
    }
  </style>
</head>

<?php
include('./../config.php');

$sql = "SELECT * FROM visa_query_setup WHERE `country` = '" . $_POST["to"] . "' AND `visa_document_type` = 'Sticker Visa' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
?>

    <body style="font-family: 'Poppins', sans-serif;">
      <button onclick="window.print(); " class="bg-blue-900 text-white p-3 m-3">Print This Document</button>

      <div class="container mx-auto text-sm" id="pdf">
        <p class="text-right">
          KA 11/2, Jagannathpur, Bashundhara Road,<br>
          Above Standard Chartered Bank, Dhaka 1229<br>
          +8801774 975 164, 09639 205 205<br>
          support@flyfarint.com
        </p>

        <div class="my-3">

          <div>
            <table class="w-full  table-fixed my-3">
              <tr>
                <td class="font-bold underline">Passenger Details</h2>
                </td>
              </tr>
              <tr>
                <td>Client Name</td>
                <td>: <?php echo $_POST["clientName"] ?></td>
                <td>General VQ No</td>
                <td>: VQ012589</td>
              </tr>
              <tr>
                <td>Phone Number</td>
                <td>: <?php echo "+88 0" . $_POST["phoneNumber"] ?></td>

                <td>QUE Person</td>
                <td>: <?php echo $_POST["clientName"] ?></td>
              </tr>
              <tr>
              <tr>
                <td colspan="2"></td>
                <td>Date and Time</td>
                <td>: <?php echo date("d M Y  h:m A") ?></td>
              </tr>
              <tr>
                <td>Inquiry Country Name</td>
                <td class="">: <?php echo $row["country"]; ?></td>
              </tr>
              <tr>
                <td>Visa Type</td>
                <td>: <?php echo $row["visa_type"]; ?></td>
              </tr>
              <tr>
                <td>Entry Type</td>
                <td>: <?php echo $row["entry_type"]; ?></td>
              </tr>
              <tr>
                <td>Duration</td>
                <td>: <?php echo $row["visa_duration"]; ?> Days</td>
              </tr>
              <tr>
                <td>Visa Document Type</td>
                <td>: <?php echo $row["visa_document_type"]; ?></td>
              </tr>
            </table>

            <table class="my-3 table-fixed w-1/2">
              <tr>
                <td>
                  <h1 class="font-bold underline">Cost Detail</h1>
                </td>
              </tr>
              <tr>
                <td>Embassy Fee</td>
                <td>: <?php echo number_format($row["embassy_fee"]); ?> Taka</td>
              </tr>
              <tr>
                <td>Embassy Agent Fee</td>
                <td>: <?php echo number_format($row["embassy_agent_fee"]); ?> Taka</td>
              </tr>
              <tr>
                <td>Our Service Charge</td>
                <td>: <?php echo number_format($row["service_charge"]); ?> Taka</td>
              </tr>
              <tr class="border-t">
                <td>Total Cost</td>
                <td>: <?php echo number_format($row["embassy_fee"] + $row["embassy_agent_fee"] + $row["service_charge"]) ?> Taka</td>
              </tr>
            </table>

            <table class="w-3/6 table-fixed my-3">
              <tr>
                <td class="underline font-bold">Processing Time</td>
              </tr>
              <tr>
                <td>Our Processing Time:</td>
                <td>: <?php echo number_format($row["office_processing_time"]); ?> Days</td>
              </tr>
              <tr>
                <td>Embassy Processing Time:</td>
                <td>: <?php echo number_format($row["embassy_processing_time"]); ?> Days</td>
              </tr>
            </table>

            <table class="w-1/2 table-fixed my-3">
              <tr>
                <td class="text-base font-bold">Documents</td>
              </tr>
              <tr>
                <td class="font-bold underline">Passport</td>
              </tr>
              <tr>
                <td>Minimum Validity</td>
                <td>: <?php echo number_format($row["minimum_validity"]); ?> Months</td>
              </tr>
              <tr>
                <td>Minimum Blank Page</td>
                <td>: <?php echo number_format($row["minimum_blank_page"]); ?> Pages</td>
              </tr>
            </table>


            <?php
            if ($row["national_ID_card"] === "yes") {
              echo '<div class="my-3">';
              echo '<h1 class="underline font-bold">National ID Card</h1>';
              echo '<p>Need a copy of your National ID card for proof of residence.</p>';
              echo '</div>';
            }

            if ($row["utility_bill"] === "yes") {
              echo '<div class="my-3">';
              echo '<h1 class="underline font-bold">Utility Bill</h1>';
              echo '<p>Need a copy of your utility bill such as electricity, telephone, gas, or water bill (not older than 6 months)</p>';
              echo '</div>';
            }
            ?>

            <div class="my-3">
              <h1 class="underline font-bold">Photo Requirement</h1>
              <p>One <?php echo $row["photo_width"] . " " . $row["photo_unit"]; ?> x <?php echo $row["photo_height"]  . " " .  $row["photo_unit"]; ?> sized recent color photograph (not less than 3 months old) depicting a full face with white background.</p>
            </div>

            <?php
            if ($row["professional_document_details"]) {
              echo '<div class="my-3">';
              echo '<h1 class="underline font-bold">Professional Document</h1>';
              echo '<p>' . $row["professional_document_details"] . '</p>';
              echo "</div>";
            }
            ?>



            <h2 class="underline font-bold">Others Document</h2>
            <h3 class="underline font-bold">Financial Document</h3>

            <p>Proof of Financial soundness: International travel card like SBI Travel
              card / updated bank statement (last 3 month) / endorsement* of foreign currency
              equivalent to US$150/- per applicant ( Endorsement* should not be older than 1 (one) month
              at the time of submission), International credit card with running year endorsement in the passport.</p>

            <!-- Note for Client -->
            <div>
              <h2>Note for Client</h2>
              <textarea rows="5" class="border shadow w-1/3"></textarea>
            </div>
          </div>

          <!-- T&C -->
          <div class="my-3">
            <h1>Terms and Condition</h1>
            <ul class="list-disc">
              <li>This Given Sales Quotation is valid for 15 minutes to accept. After that price may change at any time.</li>
              <li>No discount is applicable after accepting this quotation.</li>
            </ul>
          </div>
        </div>
      </div>
      </div>

    </body>
<?php
  }
}
?>

</html>