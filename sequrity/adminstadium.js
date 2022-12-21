const  form=document.querySelector(".typing_area"),
inputField=form.querySelector(".input-field"),
sendBtn=form.querySelector("button"),
chatBox=document.querySelector(".chat-box");
form.onsubmit=(e)=>{
    e.preventDefault();
}


sendBtn.onclick=()=>{
    let xhr=new XMLHttpRequest();
    xhr.open("POST","admininsertmsg.php",true);
     xhr.onload = ()=>{
        if(xhr.readyState===XMLHttpRequest.DONE)
        {
            if(xhr.status===200){
               
             inputField.value= "";
             scrollToBottom();
        }

    }
     }
    /// i gonna to send form data
    let formData =new FormData(form);

    xhr.send(formData);

    }

    chatBox.onmouseenter = ()=>{
        chatBox.classList.add("active");
    }


    chatBox.onmouseleave = ()=>{
        chatBox.classList.remove("active");
    }
setInterval(() => {

    //lets ajax start
    let xhr=new XMLHttpRequest();
    xhr.open("post","admingetchat.php",true);

    xhr.onload = ()=>{
        if(xhr.readyState===XMLHttpRequest.DONE)
        {
            if(xhr.status===200){
                let data=xhr.response;
                chatBox.innerHTML=data;
                if(!chatBox.classList.contains("active")){
                scrollToBottom();
                }
       }

    }
}
let formData =new FormData(form);

xhr.send(formData);
}, 500);
function scrollToBottom(){
chatBox.scrollTop=chatBox.scrollHeight;


}