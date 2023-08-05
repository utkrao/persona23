<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="../images/persona-image.png" />
    <title>Total Payable || MIT Persona Fest - 2023</title>
    <link rel="stylesheet" href="total_payable.css">
  </head>
  <body>
  <style>
      @import url("https://fonts.googleapis.com/css2?family=Inter&family=Raleway:wght@500&display=swap");

      * {
          margin: 0;
          padding: 0;
      }
      .warn h1
      {
        font-family:"bahnschrift";
        color:red;
      }
      ul
      {
        margin-left:20px;
      }
      input[type=text] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
      }
      .card-container {
          height: 100vh;
          display: flex;
          justify-content: center;
          align-items: center;
      }
      input[type=submit] {
        width: 100%;
        background-color: navy;
        color: white;
        padding: 14px 20px;
        margin-top: -10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      input[type=submit]:hover {
        background-color: purple;
      }
      .card {
          height: max-content;
          padding: 40px 20px;
          width: 20rem;
          background: #FFFFFF;
          box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.5);
          border-radius: 25px;
          backdrop-filter: blur(10px);
          margin-top:50px;
      }

      .events {
          font-size: 14px;
          color: #696969;
          margin: 8px 0;
          font-family: 'Inter';
          font-style: normal;
          font-weight: 500;
      }

      .payable-text {
          font-family: 'Inter';
          font-style: normal;
          font-weight: 500;
          font-size: 16px;
          line-height: 30px;
          text-align: center;
          letter-spacing: 0.015em;
          margin-top: 20px;
          color: #696969;
      }

      .payable-text span {
          font-weight: 900;
      }

      .total-amount {
          font-family: 'Inter';
          font-style: normal;
          font-weight: 900;
          font-size: 30px;
          line-height: 45px;
          text-align: center;
          letter-spacing: 0.015em;
          color: #0EB400;
      }

      .pay-btn {
          width: inherit;
          font-size: 16px;
          padding: 12px 0;
          margin-top: 8px;
          font-family: 'Inter';
          font-style: normal;
          font-weight: 500;
          background: rgba(41, 31, 100, 0.9);
          color: #fff;
          border: 0;
          border-radius: 8px;
          cursor: pointer;

      }

      .pay-btn span {
          font-weight: 900;
      }

      .pay-btn:hover {
          color: #cecece;
      }

    </style>
    
    <h2></h2>


    <form action="pgRedirect.php" method="POST">
        <diiv class="warn">
          <h1 style="font-size:18px;width:50%;margin-left:25%;text-align:center;margin-top:30px;"><b>NOTE: PLEASE DO NOT REFRESH THIS PAGE!</b> <br>IF YOU WISH TO ADD MORE EVENTS GO BACK AND <b>REFRESH PAGE AND THEN SELECT, BEFORE CLICKING ON SUBMIT</b></h1>
        </div>
        <div class="card-container">
          <div class="card">
          <p class="events">YOU HAVE APPLIED FOR UNPAID EVENTS ( IF ANY SELECTED )</p>
              <br>
              <hr>
              <br>
              <ul>
            <?php
            $Get_costed_events = $_SESSION['checkout_cost_events'];
            foreach($Get_costed_events as $itemed)
            {
            ?>
            
              <li><p class="events">Your Paid Event:<b> <?php echo $itemed;?></b></p></li>
            <?php
            }
            ?>
            </ul>
            <br>
            <hr>
            <br>
            
            <br>
            <p class="total-amount" style="padding-bottom:20px;"><?php $gettotal = $_SESSION['checkout_sum'];
                                          echo $gettotal?></p>

            <input type="submit" value="PROCEED" name="PROCEED">
          </div>
        </div>
    </form>
  </body>
</html>