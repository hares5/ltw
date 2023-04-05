const signupButton=document.getElementById("signup-form-sumbit");

const signupForm=document.getElementById("formheader");
signupButton.addEventListener("click",(e)=>{
    e.preventDefault();
    const email=signupForm.email.value;
const password=signupForm.password.value;
if(password.length<8){
    alert("la password è troppo breve");
        return false;
}
}
)