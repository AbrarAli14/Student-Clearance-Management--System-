const form=document.querySelector(".signup form"),
loginBtn=form.querySelector(".button input"),
error_txt=form.querySelector(".er_text");
form.onsubmit=(e)=>{
    e.preventDefault();
}


loginBtn.onclick=()=>{


//lets ajax start
let xhr=new XMLHttpRequest();
xhr.open("POST","logindb.php",true);

xhr.onload = ()=>{
    if(xhr.readyState===XMLHttpRequest.DONE)
    {
        if(xhr.status===200){
            let data=xhr.response;
            if(data==="success"){

                location.href="adsignupg.php";    
            }else if(data==="good"){
                location.href="index.php"; 
            }
           else if(data==="rec"){


            location.href="studentrecordadmin.php"; 
           }
           else if(data==="false"){
            location.href="login.php"; 
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