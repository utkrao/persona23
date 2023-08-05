

<?php

$con = mysqli_connect('localhost','exlpuuxq_personanew','exlpuuxq_personanew');
$query1="SELECT `Name`, `Phone`, `Email`, `College`, `Event`, `Tid`, `Tstamp` FROM `backuppayment`";
mysqli_select_db($con, 'exlpuuxq_personanew');
$result1 = mysqli_query($con,$query1);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <script src = "table2excel.js"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel Page</title>

    <!-- CSS Styles Link -->
    <link rel="stylesheet" href="admin.css" />
    <link rel="shortcut icon" href="./images/persona-image.png" type="image/x-icon" />
    <!-- Font Styles Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <style>
      * {
    margin: 0;
    padding: 0;
}

nav {
    height: 10vh;
    background-color: #291F64;
    padding: 0 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: inherit;
}

.logo img {
    width: 80px;
    margin: 0 30px 0 0;
}

.mit-logo {
    width: 100px !important;
}

.login-logout-btn {
    color: #fff;
    background-color: transparent;
    border: 0;
    /* border: 2px solid #FF5C00; */
    height: max-content;
    padding: 6px 20px;
    cursor: pointer;
    font-weight: 600;
    font-size: 16px;
    border-radius: 33px;
}

.login-logout-btn:hover {
    color: #6d6d6d;
}

.panel-details {
    font-family: 'Inter';
    padding: 100px;
}

.event-selection {
    display: flex;
}

.showdata-button {
    background: #0085FF;
    color: #FFFFFF;
    font-size: 15px;
    font-weight: 700;
    border-radius: 5px;
    padding: 7px 70px;
}

select {
    color: #9e9e9e;
    font-size: 15px;
    border-radius: 5px;
    padding: 7px 500px 7px 5px;
    margin-right: 20px;
}

option:not(:first-of-type) {
    color: black;
}

option:first-of-type {
    display: none;
}

/* TABLE */

table,
tr,
th,
td {
    border: 1px solid black;
    border-collapse: collapse;
}

table {
    width: 100%;
}

th {
    font-weight: 500;
    font-size: 15px;
    padding: 10px 15px;
}

td {
    font-weight: 400;
    font-size: 13px;
    padding: 10px 15px;
}

.details-table {
    margin: 40px 0;
}

.table-head {
    background-color: #00B027;
    color: #FFFFFF;
    text-align: justify;
    padding: 50px;
}

.table-details {
    background-color: #F9F9F9;
}

.export-btn {
    background: #E7E7E7;
    color: #646464;
    font-size: 15px;
    font-weight: 700;
    border-radius: 5px;
    padding: 9px 70px;
}

@media (max-width: 1200px) {

    .event-selection {
        display: block;
    }

    select {
        margin: 20px 0;
        padding-right: 400px;
    }

    .panel-details {
        padding: 80px 30px;
    }
}
    </style>
   

    <div class="panel-details">
      <div class="event-selection">
        <div class="event-dropdown">
          <select>
            <option class="event-name">Select Event Name</option>
            <option class="event-name">Event 1</option>
            <option class="event-name">Event 2</option>
            <option class="event-name">Event 3</option>
            <option class="event-name">Event 4</option>
            <option class="event-name">Event 5</option>
          </select>
        </div>
        <a class="showdata-button">Show Data</a>
      </div>

      <div class="details-table">
        <table id="personatable">
          <tr class="table-head">
            
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>College</th>
            <th>Event</th>
            <th>Payment Id</th>
            <th>Time Stamp</th>
          </tr>

          <?php
          while($row=mysqli_fetch_assoc($result1))
          {
          ?>
          <tr>
            <td><?php echo $row['Name']?></td>
            <td><?php echo $row['Phone']?></td>
            <td><?php echo $row['Email']?></td>
            <td><?php echo $row['College']?></td>
            <td><?php echo $row['Event']?></td>
            <td><?php echo $row['Tid']?></td>
            <td><?php echo $row['Tstamp']?></td>              
          </tr>
        <?php
        }
        ?> 
    
          
        </table>
      </div>

      <button id = "excel"> <h2>Export to Excel </h2></button>
      
    </div>


    <script>
        document.getElementById('excel').addEventListener('click',function(){
            var table2excel = new Table2Excel();
            table2excel.export(document.querySelectorAll("#personatable"));
         });
    </script>




    <script>
            function myFunction() {
              var x = document.getElementById("myTopnav");
              if (x.className === "topnav") {
                x.className += " responsive";
              } else {
                x.className = "topnav";
              }
            }
    </script>
    
</body>
</html>
