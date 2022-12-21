const form=document.querySelector(".signupsg form"),
signupBtns=form.querySelector(".buttonsg input"),
error_txt=form.querySelector(".er_text");
form.onsubmit=(e)=>{
    e.preventDefault();
}


signupBtns.onclick=()=>{


//lets ajax start
let xhr=new XMLHttpRequest();
xhr.open("POST","adsigndbg.php",true);

xhr.onload = ()=>{
    if(xhr.readyState===XMLHttpRequest.DONE)
    {
        if(xhr.status===200){
            let data=xhr.response;
           if(data=="success"){

            location.href="insertPc.php";    
        }
        else if(data=="good"){

            location.href="index.php";    
        }
        else if(data=="control"){

            location.href="index.php";    
        }
        else if(data=="true"){

            location.href="index.php";    
        }
        
           else{
error_txt.textContent=data;
error_txt.style.display="block";

           }
        }
    }

}

/// i gonna to send form data
let formData =new FormData(form);

xhr.send(formData);

}