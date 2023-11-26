
let errormsg = document.querySelector(".error-msg");
let Firstnameinput = document.getElementById("Firstnameinput");
let Lastnameinput = document.getElementById("Lastnameinput");
let togglebtn = document.querySelector(".password button");
let passwordinput = document.querySelector(".password input[type='password']");
let emailinput = document.getElementById("emailinput");
let form = document.querySelector(".signup form");
let continuebtn = form.querySelector(".Continue"); 
// let continuebtn = form.querySelector(".");


// continuebtn.onclick = ()=>{
    //     console.log("helloeworld");
    // }
    console.log(form);
    console.log(continuebtn);


form.onsubmit = (e)=>{
    e.preventDefault();
    console.log("dada");
}
continuebtn.onclick = (e)=>{

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "php/signup.php",true);
            xhr.onload = ()=>{
                if(xhr.readyState === XMLHttpRequest.DONE){
                    if(xhr.status===200){
                        let data = xhr.response;
                        if(data == "success"){
                            location.href = "users.php";
                        }else{
                            // errormsg.style.display = "block";

                            errormsg.style.display = "flex";
                            errormsg.style.justifyContent = "center";
                            errormsg.style.alignItems = "center";
                            errormsg.textContent = data;
                        };
                    console.log(data);
                }
                
            }
        }
        let formData = new FormData(form);
        xhr.send(formData);
        console.log("link");
    }
