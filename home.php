
<?php
require_once "config/session.php";

?>
 

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8" >
<title>HOME | Chemical Lab Systems</title>
<link rel="stylesheet" type="text/css" href="css/css1.css">

</head>
<style type="text/css">
  .container
  {
    
    width: 60%;
    margin: auto;
    height: auto;
    overflow: auto;
    margin-top: 40px;
    margin-left: 50px;
    min-width: 1000px;
    
  }
  .gallery
  {
    margin:  40px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    position: relative;
    border: 1px solid   #ccc;
    float: left;
    width: 350px;
    border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;

  }
  .gallery:hover{
    box-shadow: 0 0 11px rgba(33,33,33,.2);
    opacity: 0.7; 
  }
   .gallery img
   {
    width: 100%;
    height: 300px;
   }
   .desc
   {
    padding: 15px;
    text-align: center;
    background: #fff;
   }

   .left-container
   {

    float: left;
    width: 15%;
    height: auto;
    background-color: #fff;
    
    position: absolute;
    padding: 20px;
    margin-top: 90px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

   }
   a{
    text-decoration: none;
   }

   

</style>
<body>
<div >
  <a href="a.php">Click</a>
</div>
<nav class="menu">
   <ul>
     <li><a href='home.php'>HOME</a></li>
     <li><a href='equipments.php'>EQUIPMENT</a></li>
     <li><a href='acids.php'>ACIDS</a></li>
     <li><a href='indicators.php'>INDICATORS</a></li> 
     <li><a href='salts.php'>SALTS</a></li>
     
 </ul>
  <form class="search-form">
   <button>ABOUT</button>
   </form>
</nav>

<div class="left-container">
<a href="add_acid_form.php">
  <div style="background-color: #090; color:#fff; text-align: center;padding: 8px; margin-bottom:   10px; margin-top: 10px;">
    ADD ACID
  </div>
</a>
  <a href="add_salt_form.php">
  <div style="background-color: #090; color:#fff; text-align: center;padding: 8px; margin-bottom:   10px; margin-top: 10px;">
    ADD SALT
  </div>
</a>
<a href="add_indicator_form.php">
  <div style="background-color: #090; color:#fff; text-align: center;padding: 8px; margin-bottom:   10px; margin-top: 10px;">
    ADD INDICATOR
  </div>
</a>

<a href="add_equipment_form.php">
  <div style="background-color: #090; color:#fff; text-align: center;padding: 8px; margin-bottom:   10px; margin-top: 10px; margin-bottom: 30px;">
    ADD EQUIPMENT
  </div>
</a>

<div >
  <a href="logout.php">
 <div  style="background-color: #090; color:#fff; text-align: center;padding: 8px; margin-bottom: 10px; margin-top: 60px; border:none; border-radius: 4px; width: 30% ; margin: auto;">
    LOGOUT
  </div>
  </a>

</div>
</div>



<div class="container">
  <div class="gallery">
    <a href="acids.php">
    <img src="images/acids.jpeg">
     <div class="desc">
      <label>ACIDS</label>
     </div>
     </a>
 </div> 
  <div class="gallery">
    <a href="indicators.php">
    <img src="images/indicator.jpg">
     <div class="desc">
      <label>INDICATORS</label>
     </div>
     </a>
 </div> 
  <div class="gallery">
    <a href="salts.php">
    <img src="images/salts.jpg">
     <div class="desc">
      <label>SALTS</label>
     </div>
     </a>
 </div> 
  <div class="gallery">
    <a href="equipments.php">
    <img src="images/Equipment.jpeg">
     <div class="desc">
      <label>EQUIPMENTS</label>
     </div>
     </a>
 </div> 
</div>
   </body>
</html>
