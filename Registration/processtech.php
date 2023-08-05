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
    echo $brands;
    $eco = explode(",",$brands);

    echo $Namee."<br>";
    echo $Emaill."<br>";
    echo $Phonee."<br>";
    echo $Collegee."<br>";

    $Uncost_Events = array();
    $Uncost_Events_Order_Ids = array();
    $Uncost_Events_success = array();

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
                $personaId = "Persona".$item.$unique_Id;
                array_push($Uncost_Events_Order_Ids,$personaId);
                $reg ="INSERT INTO participants (`UniqueId`,`Name`,`Email`,`Phone`,`College`,`Event`,`Time`) VALUES ('$unique_Id','$Namee','$Emaill','$Phonee','$Collegee','$item','$myDate')";
                if(mysqli_query($con ,$reg))
                {
                    echo "Success";
                    $success_UCE = "done";
                    array_push($Uncost_Events_success,$success_UCE);


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
    $_SESSION['G_cost_events'] = $Cost_Events;
    $sum = array_sum($Cost_Events_Price);
    if($sum!=0)
    {
        $_SESSION['checkout_sum'] = $sum;
        $_SESSION['UCE_SUCCESS'] = $Uncost_Events_success;
        header('location:checkout.php');
    }
    else
    {
        $_SESSION['G_uncost_events_ids']= $Uncost_Events_Order_Ids;
        header('location:success.php');
    }
}

if(isset($_POST['Confirm']))
{
    $UTR = $_POST['utrc'];
    $Get_cost_events = $_SESSION['G_cost_events'];
    
    $get_name = $_SESSION['G_Name'];
    $get_email = $_SESSION['G_Email'];
    $get_phone = $_SESSION['G_Phone'];
    $get_college = $_SESSION['G_College'];


    foreach($Get_cost_events as $c_event)
    {
        $unique_Id2 = uniqid();
        $myDate2 = date("d-m-y h:i:s");
        $con = mysqli_connect('localhost','root','');
        mysqli_select_db($con, 'persona2023');

        $reg22 ="INSERT INTO participants (`UniqueId`,`Name`,`Email`,`Phone`,`College`,`Event`,`Txnid`,`Time`) VALUES ('$unique_Id2','$get_name','$get_email','$get_phone','$get_college','$c_event','$UTR','$myDate2')";
        if(mysqli_query($con ,$reg22))
            {
                    echo "Success";
            }
        else
            {
                echo "Failed";
            }
    }
}
?>