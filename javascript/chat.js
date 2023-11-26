let form = document.querySelector(".typing-area");
let inputfield = form.querySelector(".txt-msg");
let sendbtn = form.querySelector("button");
let chatarea = document.querySelector(".chat-area");


console.log(form);
console.log(inputfield);
console.log(sendbtn);

form.onsubmit = (e)=>{
    e.preventDefault();
}

sendbtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    console.log("ldaldal");
    xhr.open("POST", "php/insert-chat.php",true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status===200){
                let data = xhr.response;
                inputfield.value = "";
                console.log(data);
        }
        
    }
}
let formData = new FormData(form);
xhr.send(formData);
console.log("link");
}


setInterval(()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/get-chat.php",true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200 )//200 = succes de la requete http ,400 404 501 etcc sont des messages d'erreur
            {
                let data = xhr.response;
                    
                        chatarea.innerHTML = data;
                console.log(data);
            }
        }
    }
    let formData = new FormData(form);
xhr.send(formData);
},500);
