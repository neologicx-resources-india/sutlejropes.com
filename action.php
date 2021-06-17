<?php

if($_POST['sel1']=='International Enquiries'){
         $to= 'export@sutlejropes.com';
        }
     
        elseif($_POST['sel1']=='Domestic Enquiries')
        {
        $to = 'india@sutlejropes.com';
        }
        
        

$subject = "Contact Form";


$message = "
<html>
<head>
<title></title>
</head>
<body>



<table>
<tr>
<th style='text-align:justify'>Name : </th>
<th style='text-align:justify'>".$_POST['name']."</th>
</tr>

<tr>
<th style='text-align:justify'>Designation : </th>
<th style='text-align:justify'>".$_POST['designation']."</th>
</tr>

<tr>
<th style='text-align:justify'>Company Name : </th>
<th style='text-align:justify'>".$_POST['companyname']."</th>
</tr>

<tr>
<th style='text-align:justify'>Kind of Business : </th>
<th style='text-align:justify'>".$_POST['business']."</th>
</tr>

<tr>
<th style='text-align:justify'>Country Code : </th>
<th style='text-align:justify'>".$_POST['ccode']."</th>
</tr>

<tr>
<th style='text-align:justify'>Tel Number : </th>
<th style='text-align:justify'>".$_POST['tnumber']."</th>
</tr>


<tr>
<th style='text-align:justify'>Mobile Number : </th>
<th style='text-align:justify'>".$_POST['mnumber']."</th>
</tr>


<tr>
<th style='text-align:justify'>Email : </th>
<th style='text-align:justify'>".$_POST['email']."</th>
</tr>


<tr>
<th style='text-align:justify'>Select Enquiry Purpose : </th>
<th style='text-align:justify'>".$_POST['sel1']."</th>
</tr>

<tr>
<th style='text-align:justify'>Enquiry : </th>
<th style='text-align:justify'>".$_POST['enquiry']."</th>
</tr>







</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: ' . $_POST['email']; "\r\n";
if($_POST['email']!= '' && $_POST['name']!= ''){
    if(mail($to,$subject,$message,$headers)){
    $msg = "success";
    
    
    
    
    }
    else{
        $msgerror = "Fail";
    }
   
    
     header('Location: contact-us.php?msg='.$msg);
    

      
    
}



   

  ?>