


window.onscroll = function(){myfunction()};

let nav = document.getElementById("nav");
const sticky = nav.offsetTop;

function myfunction (){
    if(window.pageYOffset >= sticky){
        nav.classList.add("sticky");
    }
    else{
        nav.classList.remove("sticky");
    }
}

function opennav(){
    document.getElementById("overlay").style.width = "50%";
}

function closenav(){
    document.getElementById("overlay").style.width = "0%";
}




function showpass(){

if(document.getElementById("passid").type === "password"){
    document.getElementById("passid").type = "text";
    document.getElementById("check").innerHTML = "Hide password";
}
   else{
    document.getElementById("passid").type = "password";
    document.getElementById("check").innerHTML = "Show password";
}
}

function show(){

    if(document.getElementById("passid3").type === "password"){
        document.getElementById("passid3").type = "text";
        document.getElementById("chec").innerHTML = "Hide password";
    }
       else{
        document.getElementById("passid3").type = "password";
        document.getElementById("chec").innerHTML = "Show password";
    }
    }

