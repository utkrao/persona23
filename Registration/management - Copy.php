<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'persona2023');


if(isset($_POST['send']))
{
    $Namee = $_POST['Name'];
    $Emaill = $_POST['Email'];
    $Phonee = $_POST['Phone'];
    $Collegee = $_POST['College'];

    $_SESSION['G_Name'] = $Namee;
    $_SESSION['G_Email'] = $Emaill;
    $_SESSION['G_Phone'] = $Phonee;
    $_SESSION['G_College'] = $Collegee;

    $brands = $_POST['datafinal'];
    $eco = explode(",",$brands);

    // echo $Name."<br>";
    // echo $Email."<br>";
    // echo $Phone."<br>";
    // echo $College."<br>";

    $Uncost_Events = array();
    $Uncost_Events_Order_Ids = array();

    $Cost_Events = array();
    $Cost_Events_Price = array();
    $cost_Events_Order_Ids = array();

    foreach($eco as $item)
    {
       echo $item;
       $query1="SELECT * FROM costs WHERE event='$item'";
       $result1 = mysqli_query($con,$query1);
       while($row=mysqli_fetch_assoc($result1))
       {
            $price = $row['cost'];
            echo $price;
            if($price==0)
            {
                $unique_Id = uniqid();
                $myDate = date("d-m-y h:i:s");
                array_push($Uncost_Events,$item);
                echo $unique_Id;
                $reg ="INSERT INTO participants (`UniqueId`,`Name`,`Email`,`Phone`,`College`,`Event`,`Time`) VALUES ('$unique_Id','$Namee','$Emaill','$Phonee','$Collegee','$item','$myDate')";
                if(mysqli_query($con ,$reg))
                {
                    echo "Success";
                }
                else
                {
                    echo "Failed";
                }  
            }
            else
            {
                 array_push($Cost_Events,$item);
                 array_push($Cost_Events_Price,$price);
            }
       }
       
       
    }
    $sum = array_sum($Cost_Events_Price);
    if($sum!=0)
    {
        $_SESSION['checkout_sum'] = $sum;
        header('location:checkout.php');
    }
    else
    {
        header('location:success.php');
    }
}
?>