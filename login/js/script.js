let signUp = document.getElementById("singUp");
let singIn = document.getElementById("singIn");
let nameInput = document.getElementById("nameInput");
let title = document.getElementById("title");

singIn.onclick = function() {
    nameInput.style.maxHeight = "0";
    title.innerHTML = "Iniciar Sesion";
    signUp.classList.add("disnable");
    singIn.classList.remove("disnable");
}

signUp.onclick = function() {
    nameInput.style.maxHeight = "60px";
    title.innerHTML = "Registro";
    signUp.classList.remove("disnable");
    singIn.classList.add("disnable");
}


let toggle = document.getElementById("toggle");
let label_toggle = document.getElementById("label_toggle");
toggle.addEventListener("change",(event)=>{
    let checked=event.target.checked;
    document.body.classList.toggle("dark");
    if (checked==true){
        label_toggle.innerHTML = '<i class="fa-sharp fa-solid fa-sun">';
        label_toggle.style.color="white"
    }else{
        label_toggle.innerHTML = '<i class="fa-sharp fa-solid fa-moon">';
        label_toggle.style.color="black"
    }

})