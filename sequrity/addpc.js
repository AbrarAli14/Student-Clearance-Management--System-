const form=document.querySelector(".logIn form"),
signupBtns=form.querySelector(".button input");
form.onsubmit=(e)=>{
    e.preventDefault();
}


signupBtns.onclick=()=>{


//lets ajax start
let xhr=new XMLHttpRequest();
xhr.open("POST","addpcdb.php",true);

xhr.onload = ()=>{
    if(xhr.readyState===XMLHttpRequest.DONE)
    {
        if(xhr.status===200){
            let data=xhr.response;
          console.log(data);
        }
    }

}

/// i gonna to send form data
let formData =new FormData(form);

xhr.send(formData);

}