<?php if(!isset($_SESSION)) {session_start();}  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> BBMS Track Report </title>

<link rel="icon" type="image/png" href="./Images/logo.jpg">

<link href="StyleSheet.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!--slider-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>
</head>
<body>


<?php include('topbar.php'); ?>
    <center>
   <div style="width:1000px; height:700px; box-shadow:-10px 10px 5px #CCC">
       <div style="width:200px; float:left;">
       <?php include('left.php'); ?>
       </div>
       <div style="width:800px;float:left">
        <div style="height:500px; width:700px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
        <table class="table"> 
  <thead>
    <tr>
      <th scope="col"><strong> S.N </strong></th>
      <th scope="col"> <storng> Blood Group </storng> </th>
      <th scope="col"> <storng> No of Bag </storng> </th>
      <th scope="col"> <strong> Donor Name </strong> </th>
      <th scope="col"> <strong> Receiver Name </strong> </th>
      <th scope="col"> <strong> Hospital Name </strong> </th>
      <th scope="col"> <strong> Date(Send) </strong> </th>
      <th scope="col"> <strong> Date(Receied) </strong> </th>
      <th scope="col"> <strong> Expired Date </strong> </th>
   </tr>
   
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>A + VE</td>
      <td> 2 </td>
      <td> Sagar Timalsena </td>
      <td> Sagar Shrestha </td>
      <td> B&B Hospital </td>
      <td> 12/12/2018 </td>
      <td> 12/16/2018 </td>
      <td> 12/30/2018 </td>
    </tr>
    <tr>
       <th scope="row">2</th>
      <td>B + VE</td>
      <td>1</td>
      <td> Shyam Baral </td>
      <td> Asish Khadka </td>
      <td> Sumeru Hospital </td>
      <td> 12/1/2018 </td>
      <td> 12/6/2018 </td>
      <td> 12/30/2018 </td>
    </tr>
    <tr>
         <th scope="row">3</th>
         <td> O - VE</td>
         <td>1</td>
         <td> Sagar Timalsena </td>
         <td> Sajal Shrestha </td>
         <td> B&B Hospital </td>
         <td> 12/12/2018 </td>
         <td> 12/16/2018 </td>
         <td> 12/30/2018 </td>
    </tr>
    
  </tbody>
</table>
<footer>
  <p>   <strong>
            "Nobody can do everything, but everyone can do something."
        </strong>
    
   </p>
</footer>
			
	</div>
       </div>

   </div>
    </center>
</body>
</html>