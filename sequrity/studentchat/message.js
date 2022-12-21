const form=document.querySelector(".alert "),
error_txt=form.querySelector(".err");
form.onsubmit=(e)=>{
    e.preventDefault();
}


loginBtn.onclick=()=>{


//lets ajax start
let xhr=new XMLHttpRequest();
xhr.open("POST","stfoul.php",true);

xhr.onload = ()=>{
    if(xhr.readyState===XMLHttpRequest.DONE)
    {
        if(xhr.status===200){
            let data=xhr.response;
           if(data=="new"){
            error_txt.textContent=data;
            error_txt.style.display="block";


           }
           else{
location.href="index.php";

           }
        }
    }

}

/// i gonna to send form data
let formData =new FormData(form);

xhr.send(formData);

}