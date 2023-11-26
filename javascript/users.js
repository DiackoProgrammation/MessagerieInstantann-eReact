let searchbar = document.querySelector(".searchbar");
let searchbtn = document.querySelector(".searchbtn");
let userslist = document.querySelector(".users-list");
console.log("helo");




let searchTerm = searchbar.value ;


searchbar.onkeyup = () =>{
    let searchTerm = searchbar.value ;
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/search.php",true);
    console.log("link");
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
           if(xhr.status === 200){
            let data = xhr.response;
            console.log(data);
            userslist.innerHTML = data;

           }
        }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("searchTerm=" + searchTerm);
}

console.log("hello");
setInterval(()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "php/utilisateurs.php",true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200 ){
                let data = xhr.response;
                    if(searchbar.value === ""){
                           console.log("set");
                        userslist.innerHTML = data;
                    }
                
            }
        }
    }
    xhr.send();
},500);

