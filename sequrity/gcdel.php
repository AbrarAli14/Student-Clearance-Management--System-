<?php
session_start();
if(!isset($_SESSION['un_id'])){

    header("location:login.php");
}
include_once('adminnav.php');

?>


<?php

include_once("container.php");






?>
<div class="right_container">

<h1 style="color:#fff">You Can simply delete all student data by using student graduation date</h1>
    <div class="search">
    <form action="db.php" method="post">
<input type="text" name="searid" placeholder="enter batch year here"></input>
<button type="submit" name="deltebtn"  style="font-weight:bold">Delete</button>

</form>









<style>
    .search button[type="submit"]{
        color:white;
        margin-top:12px;
        background:#fe3a9e;
        padding:8px;
        font-size:15px;
        border:none;
        text-align:center;
        outline:none;
        border-radius:6px;
        border-top-left-radius:0px;
        border-bottom-left-radius:0px;

        width:100px;
        cursor:pointer;
        margin-left:-105px;
        
}
.search input[type="text"]{
    margin-left:400px;
    padding:8px;
    font-size:15px;
    outline:none;
    border-radius:6px;
    border:0.5px solid #728ca3;
    width:300px;


}

    </style>

   

    </div>
    
    <script src="js/sweetalert.min.js"></script><script src="js/sweetalert.min.js"></script>
<?php
if(isset($_SESSION['status'])&& $_SESSION['status']!=''){
    ?><script>
    swal({
           title: "<?php echo $_SESSION['status'];?>",
            //text: "You clicked the button!",
            icon: "<?php echo $_SESSION['status_code'];?>",
             button: "Ok",
});
</script><?php
    unset($_SESSION['status']);

}
