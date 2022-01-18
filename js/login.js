var fd = new FormData();
var xhr = new XMLHttpRequest();
var url = "../php/login.php";

var form_login = document.getElementById("form_login").addEventListener("submit",function(evento){
    evento.preventDefault();
    efetuarLogin();
});

function efetuarLogin(){
    var email = document.getElementById('txt-email').value
    var senha = document.getElementById('txt-senha').value
    if(email.length == 0 || senha.length == 0){
        swal({icon:"error",title:"Preencha todos os campos"})
    }else{
        fd.append('email', email);
        fd.append('senha',senha);
        xhr.open("POST",url,true);
        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4 && xhr.status == 200){
                if(xhr.responseText == "success"){
                    swal({ icon: "success", title: "Login efetuado com sucesso!" }).then(function(){
                        window.location.reload()
                    })
                }else{
                    swal({icon:"error",title:"Houve algum erro incomum"});
                }
            }
        }
        xhr.send(fd)        
    }
}