
<div class="container">
<div class="left_container">

<div class="left_element">

   <a href="insertpc.php" ><i class="fas fa-laptop" style="color:#1e3f;"></i> Register Laptop</a>
   <a href="clothadd.php"><i class="fas fa-tshirt" style="color:#f2a104;"> </i>  Register Cloths</a>
   <a href="viewresult.php" ><i class="fas fa-eye" style="color:green;"></i> View All data</a>

   <a href="gcdel.php"><i class="fas fa-trash" style="color:#8a1404;"></i>    Delete record</a>
   <a href="studentREcord.php"><i class="fas fa-users" style="color:#f1145b;"> </i> Student Record</a>
   <a href="studentResource.php"><i class="fas fa-search" style="color:#f3cd05;"></i> Search Resource </a>
   <a href="#"><i class="fas fa-user" style="color:green;"> </i>Update Profile </a>

   <a onclick="loves()"><i class="fas fa-key" style="color:green;"> </i> Log Out</a>
   
<div class="sweet_alert">
<div class="another">
   <p>do you want to log out ?</p>
   <div class="try">
   <a href="logout.php">yes</a>
   <a  href="" onclick="loves()" style="background:#3eb650">no</a>
</div>
</div>
</div>
</div>
</div>
<style>

   .sweet_alert {
display:none;
      margin-top:14px;
      background:#fff;
      width:270px;
      height:140px;
      border-radius:30px;
   }.another{
      margin:8px;
      padding:8px;
   }
   .fun{
      display:block;
   }
   .another p{
      padding:2px;
      border-radius:20px;
      margin-top:20px;
      text-align:center;
      border:2px solid #3775c2;
      font-weight:700;
   }.try{
      display:flex;
      justify-content:space-between;
      padding:8px;
      margin-top:8px;
      text-align:center;

   }
    .try a{
       text-transform:capitalize;
      border-radius:50%;
      width:auto;
      background:red;
      color:#fff;
      padding:8px;
      outline:none;
      border:none;
      margin:5px;
   }
   button{
      cursor:pointer;
      background:#3775c2;
      color:#fff;
      outline:none;
      border:none;
      padding:7px;
      margin-left:-5px;
      border-radius:3px;
      font-weight:700;
      margin-top:40px;
   }
   
   .left_container{

      background-color:#32064a;
   }
  .left_element{ background-color:#32064a;
  }
   .left_element a{
      text-transform:capitalize;
      
   }
  .left_element a:hover{
            color:#fff;
            padding:7px;
            background-color:#3778c2;
            transition: 0.4s ease-in;
            
            }

</style>

<script>
var testmoney=document.querySelector(".sweet_alert");
function loves(){
   testmoney.classList.toggle("fun");
}

   </script>
