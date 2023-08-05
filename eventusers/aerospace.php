

<?php
session_start();
if($_SESSION['isLoggedIn']=1)
{
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
.hdr
{
  height:100px;
  background-color:navy;
}
.hdflx
{
  display:grid;
  grid-template-columns:50% 50%;
}
.expclass {
  background-color: navy; /* Green */
  border: none;
  color: white;
  padding: 8px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  margin-top:50px;
}
.hdflx img
{
  height:80px;
  margin-top:10px;
  margin-left:15%;
}
.hdflx h1
{
  font-size:20px;
  line-height:100px;
  font-family:"bahnschrift";
  color:white;
  float:right;
  margin-right:15%
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
input[type=password]{
        width: 90%;
        color: #9e9e9e;
    font-size: 15px;
    border-radius: 5px;
    margin-right: 20px;
    padding-top:7px;
    padding-bottom:7px;
    margin-top:20px;
    padding-left:7px;

        }
        input[type=name]{
        width: 90%;
        color: #9e9e9e;
    font-size: 15px;
    border-radius: 5px;
    margin-right: 20px;
    padding-top:7px;
    padding-bottom:7px;
    margin-top:20px;
    padding-left:7px;

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
    margin-top:-20px;
}

select {
    width:90%;
    color: #9e9e9e;
    font-size: 15px;
    border-radius: 5px;
    padding: 7px 400px 7px 5px;
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
    margin-top:20px;
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

@media (max-width: 600px) {

    .event-selection {
        display: block;
    }

    
select {
    width:90%;
    color: #9e9e9e;
    font-size: 15px;
    border-radius: 5px;
    padding: 7px 100px 7px 5px;
    margin-right: 20px;
}

    .panel-details {
        padding: 80px 30px;
    }
}
    </style>
    <div class="hdr">
      <div class="hdflx">
        <div class="contdiv"><img src="persona-image.png"></div>
        <div class="contdiv"><a href=""></a></div>
      </div>
    </div>

    <div class="panel-details">
      <div class="event-selection">
        <div class="event-dropdown">
          <form method="POST">
          
          <input type="name" name="sec_college" placeholder="Aerospace all events" required readonly>

          <input type="password" name="Password" placeholder="Enter password" required><br><br>
        </div>
        
      </div>
      

      <a class="showdata-button"><input type = "submit" value = "SHOW" name="showdata"></a><br><br>

      </form>
      <button id = "excel" class="expclass"> <h2>Export to Excel </h2></button>
      
      <div class="details-table" style="overflow-x:auto;">
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
            <th>Time Stamp</th>
          </tr>

          <?php
          if(isset($_POST['showdata'])) 
          {
              
              
                $con = mysqli_connect('localhost','exlpuuxq_personanew','exlpuuxq_personanew');
              
                $query1="SELECT p.UniqueId, p.Name, p.Email, p.Phone, p.College,p.Event,c.Event_name,c.cost,c.host_clg,p.Txnid,p.Time FROM participants p INNER JOIN costs c ON p.Event COLLATE utf8mb4_unicode_ci = c.event WHERE p.Event = 'B1'";
                mysqli_select_db($con, 'exlpuuxq_personanew');
                $result1 = mysqli_query($con,$query1);
                while($row=mysqli_fetch_assoc($result1))
                  {
                  ?>
                  <tr>
                    <td><?php echo $row['UniqueId']?></td>
                    <td><?php echo $row['Name']?></td>
                    <td><?php echo $row['Email']?></td>
                    <td><?php echo $row['College']?></td>
                    <td><?php echo $row['Event']?></td>
                    <td><?php echo $row['Event_name']?></td>
                    <td><?php echo $row['cost']?></td>
                    <td><?php echo $row['host_clg']?></td>
                    <td><?php echo $row['Txnid']?></td>
                    <td><?php echo $row['Time']?></td>
                    
                  </tr>
                <?php
                }
              
              else
              {
                echo "WRONG PASSWORD";
              }

                
              
            
          }
          ?> 
    
          
        </table>
      </div>

      
      
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
<?php
}
else{
  header('location:login.html');

}
?>