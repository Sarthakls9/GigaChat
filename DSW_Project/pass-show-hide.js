function togglepass(){
    let pass=document.getElementById("pass-input");
    if(pass.type ==="password"){
        pass.type="text";
    }
    else{
        pass.type="password";
    }
}

function emailcheck(){
    let email=document.getElementById("email-input");
    var mailformat = /^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;
}