let errormsg = document.querySelector(".error-msg");
let togglebtn = document.querySelector(".password button");
let passwordinput = document.querySelector(".password input[type='password']");
let emailinput = document.getElementById("emailinput");
let form = document.querySelector(".login form");
let continuebtn = form.querySelector(".Continue"); 
// let continuebtn = form.querySelector(".");







// continuebtn.onclick = ()=>{
    //     console.log("helloeworld");
    // }
    console.log(form);
    console.log(continuebtn);


form.onsubmit = (e)=>{
    e.preventDefault();
}
continuebtn.onclick = (e)=>{

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "php/login.php",true);
            console.log("Hello guyssss");
            xhr.onload = ()=>{
                if(xhr.readyState === XMLHttpRequest.DONE){
                    if(xhr.status===200){
                        let data = xhr.response;
                        if(data == "success"){
                            location.href = "users.php";
                        }else{
                            
                        };
                    console.log(data);
                }
                
            }
        }
        let formData = new FormData(form);
        xhr.send(formData);
        console.log("link");
    }
