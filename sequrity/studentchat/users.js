const searchBar=document.querySelector(".users .search input"),
searchBtn=document.querySelector(".users .search button"),
userlist=document.querySelector(".users  .user-list");

searchBtn.onclick=()=>{



    searchBar.classList.toggle("active");
    searchBar.focus();
    searchBtn.classList.toggle("active");



}

setInterval(() => {

    //lets ajax start
    let xhr=new XMLHttpRequest();
    xhr.open("GET","chatuser.php",true);

    xhr.onload = ()=>{
        if(xhr.readyState===XMLHttpRequest.DONE)
        {
            if(xhr.status===200){
                let data=xhr.response;
userlist.innerHTML=data;        }

    }
}
    xhr.send();
}, 500);