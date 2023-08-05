<?php
session_start();
$con = mysqli_connect('localhost','exlpuuxq_personanew','exlpuuxq_personanew');
mysqli_select_db($con, 'exlpuuxq_personanew');


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
    $Uncost_Events_success = array();

    $Cost_Events = array();
    

    $Cost_Events_Price = array();
    $cost_Events_Order_Ids = array();

    foreach($eco as $item)
    {
      
       $query1="SELECT * FROM costs WHERE event='$item'";
       $result1 = mysqli_query($con,$query1);
       while($row=mysqli_fetch_assoc($result1))
       {
            $price = $row['cost'];
           
            if($price==0)
            {
                $unique_Id = uniqid();
                $myDate = date("d-m-y h:i:s");
                array_push($Uncost_Events,$item);
                $personaId = "Persona".$item.$unique_Id;
                array_push($Uncost_Events_Order_Ids,$personaId);
                $FreeTr = 0;
                
                $con1 = mysqli_connect('localhost','exlpuuxq_personanew','exlpuuxq_personanew');
                mysqli_select_db($con1, 'exlpuuxq_personanew');
                
                $reg2 ="INSERT INTO participants (`UniqueId`,`Name`,`Email`,`Phone`,`College`,`Event`,`Txnid`,`Time`) VALUES ('$personaId','$Namee','$Emaill','$Phonee','$Collegee','$item','$FreeTr','$myDate')";
                if(mysqli_query($con1 ,$reg2))
                {
                   
                }
                else
                {
                
                }
            }
            else
            {
                 array_push($Cost_Events,$item);
                 array_push($Cost_Events_Price,$price);
            }
       }
       
       
    }
    $_SESSION['G_uncost_events_ids_topass'] = $Uncost_Events_Order_Ids;
    $_SESSION['G_cost_events'] = $Cost_Events;
    $sum = array_sum($Cost_Events_Price);

    $unique_Id4 = uniqid();
    $personaId3 = "Persona-".$unique_Id4;


    if($sum!=0)
    {
        $_SESSION['checkout_sum'] = $sum;
        $_SESSION['UCE_SUCCESS'] = $Uncost_Events_success;
        $_SESSION['checkout_cost_events'] = $Cost_Events;

        $_SESSION['order'] = $personaId3;

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
    $UTR = $_SESSION['order'];
    $Get_cost_events = $_SESSION['G_cost_events'];
    
    $get_name = $_SESSION['G_Name'];
    $get_email = $_SESSION['G_Email'];
    $get_phone = $_SESSION['G_Phone'];
    $get_college = $_SESSION['G_College'];

    $_SESSION['G_Name2'] = $get_name;
    $_SESSION['G_Email2'] = $get_email;
    $_SESSION['G_Phone2'] = $get_phone;
    $_SESSION['G_College2'] = $get_college;

    $cost_Event_Order_Ids = array();

    $get_ucv_ids = $_SESSION['G_uncost_events_ids_topass'];

    foreach($Get_cost_events as $c_event)
    {
        $unique_Id2 = uniqid();
        $myDate2 = date("d-m-y h:i:s");
        $con = mysqli_connect('localhost','exlpuuxq_personanew','exlpuuxq_personanew');
        mysqli_select_db($con, 'exlpuuxq_personanew');

        $personaId2 = "Persona".$c_event.$unique_Id2;
        array_push($cost_Event_Order_Ids,$personaId2);


        $reg22 ="INSERT INTO participants (`UniqueId`,`Name`,`Email`,`Phone`,`College`,`Event`,`Txnid`,`Time`) VALUES ('$personaId2','$get_name','$get_email','$get_phone','$get_college','$c_event','$UTR','$myDate2')";
        if(mysqli_query($con ,$reg22))
            {
                   
            }
        else
            {
                
            }
    }
    if(empty($get_ucv_ids))
    {
        $_SESSION['send_ids_success'] = $cost_Event_Order_Ids;
        header('location:success2.php');
    }
    else
    {
        $_SESSION['send_ids_success'] = array_merge($cost_Event_Order_Ids,$get_ucv_ids);
        header('location:success2.php');
    }
}
?>