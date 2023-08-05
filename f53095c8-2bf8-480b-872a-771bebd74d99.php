

<?php

$con = mysqli_connect('localhost','root','');
$query1="SELECT p.UniqueId as UniqueID , p.Name as Full_Name , p.Email as Email ,p.Phone as Phone_No, p.College as College , p.Event as EventCode , c.Event_name as Event_Name , c.cost as Cost , c.host_clg as Host_College, p.Txnid as Transaction_Id , p.Time as Time_Stamp FROM participants p INNER JOIN costs c on p.Event = c.event";
mysqli_select_db($con, 'persona2023');
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
          <form method="POST">
          <select name="sec_college">
            <option class="event-name">Select Host college Name</option>
            <option value="SOC">SOC 1</option>
            <option value="SOE-AERO">SOE-AERO </option>
            <option value="SOE-CIVIL">SOE-CIVIL </option>
            <option value="SOE-ECE">SOE-ECE </option>
            <option value="SOE-MECH">SOE-MECH </option>
            <option value="SOE-BIO">SOE-BIO </option>
            <option value="FOOD-TECH">FOOD-TECH </option>
            <option value="ARCH">ARCH </option>
            <option value="MANET">MANET </option>
            <option value="MANAGEMENT">MANAGEMENT </option>
            <option value="DESIGN">DESIGN </option>
            <option value="FINE-ART">FINE-ART </option>
            <option value="FILM">FILM </option>
            <option value="ISBJ">ISBJ </option>
            <option value="VEDIC">VEDIC </option>
            <option value="RESEARCH">RESEARCH </option>
          </select>
        </div>
        <a class="showdata-button"><input type = "submit" value = "SHOW" name="showdata"></a>
      </div>
      </form>

      
      <div class="details-table">
        <table id="personatable">
          <tr class="table-head">
            <th>Unique ID</th>
            <th>Participant</th>
            <th>Email</th>
            <th>College</th>
            <th>Code</th>
            <th>Event Name</th>
            <th>Cost</th>
            <th>Hosts</th>
            <th>Payment Id</th>
          </tr>

          <?php
          if(isset($_POST['showdata'])) 
          {
              $con = mysqli_connect('localhost','root','');
              $COLLEGE= $_POST['sec_college'];
              $query1="SELECT p.UniqueId as UniqueID , p.Name as Full_Name , p.Email as Email ,p.Phone as Phone_No, p.College as College , p.Event as EventCode , c.Event_name as Event_Name , c.cost as Cost , c.host_clg as Host_College, p.Txnid as Transaction_Id , p.Time as Time_Stamp FROM participants p INNER JOIN costs c on p.Event = c.event";
              mysqli_select_db($con, 'persona2023');
              $result1 = mysqli_query($con,$query1);
              while($row=mysqli_fetch_assoc($result1))
                {
                ?>
                <tr>
                  <td><?php echo $row['UniqueId']?></td>
                  <td><?php echo $row['Full_Name']?></td>
                  <td><?php echo $row['Email']?></td>
                  <td><?php echo $row['College']?></td>
                  <td><?php echo $row['EventCode']?></td>
                  <td><?php echo $row['Event_Name']?></td>
                  <td><?php echo $row['Cost']?></td>
                  <td><?php echo $row['Host_College']?></td>
                  <td><?php echo $row['Transaction_Id']?></td>
                  
                  
                </tr>
              <?php
              }
              
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
