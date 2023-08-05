<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Successfull</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    />
    <script
      src="https://code.jquery.com/jquery-3.6.3.js"
      integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
      crossorigin="anonymous"
    ></script>
    <link rel="icon" type="image/x-icon" href="../images/persona-image.png" />
    <link rel="stylesheet" href="checkout.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  </head>

  <body>
    <div class="successfull">
      <div class="successfull-elements-top">
        <h1>YOU HAVE SUCCESSFULLY REGISTERED</h1>
        <h4>Below are the details of the events you registered</h4>
      </div>
      <div class="successfull-elements-bottom">
        <div class="user-details">
          <h1>Applicant Name -<span><?php $sname = $_SESSION['G_Name'];
          echo $sname;?></span></h1>
          <h1>Applicant Email -<span><?php $semail = $_SESSION['G_Email'];
          echo $semail;?></span></h1>
          <h1>Applicant Phone -<span><?php $sphone = $_SESSION['G_Phone'];
          echo $sphone;?></span></h1>
        </div>

        <?php
        $get_IDs_UCE = $_SESSION['G_uncost_events_ids'];
        foreach($get_IDs_UCE as $uc_event_ids)
        {
        ?>
        <div class="user-event-details">
          <h1 class="event-heading"></h1>
          <h1 class="registration-id">
            Unique Registration Id -
            <span><?php echo $uc_event_ids;?></span>
          </h1>
        </div>
        <?php
        }
        ?>
        <div class="save-pdf-button">
          <button onclick="downloadPDF()" class="save-pdf">Save PDF</button>
        </div>
      </div>
    </div>

    <script>
      function downloadPDF() {
        var pdf = new jsPDF("p", "pt", "letter");
        // source can be HTML-formatted string, or a reference
        // to an actual DOM element from which the text will be scraped.
        var source = window.document.getElementsByTagName("body")[0];

        // we support special element handlers. Register them with jQuery-style
        // ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
        // There is no support for any other type of selectors
        // (class, of compound) at this time.
        var specialElementHandlers = {
          // element with id of "bypass" - jQuery style selector
          "#bypassme": function (element, renderer) {
            // true = "handled elsewhere, bypass text extraction"
            return true;
          },
        };
        var margins = {
          top: 80,
          bottom: 60,
          left: 40,
          width: 522,
        };
        // all coords and widths are in jsPDF instance's declared units
        // 'inches' in this case
        pdf.fromHTML(
          source, // HTML string or DOM elem ref.
          margins.left, // x coord
          margins.top,
          {
            // y coord
            width: margins.width, // max width of content on PDF
            elementHandlers: specialElementHandlers,
          },

          function (dispose) {
            // dispose: object with X, Y of the last line add to the PDF
            // this allow the insertion of new lines after html
            pdf.save("Payment.pdf");
          },
          margins
        );
      }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
  </body>
</html>