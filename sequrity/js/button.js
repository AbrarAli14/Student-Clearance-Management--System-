const passshowBtn=document.querySelector(".form input[type='password']");
togglegbtn=document.querySelector(".form .field i");

togglegbtn.onclick=()=>{



    if(passshowBtn.type=="password"){

        passshowBtn.type="text";
    }else

    {
        passshowBtn.type="password";
    }
}