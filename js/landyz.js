function enviarInformacoesDosContatos(){
    var nome = document.getElementById('txt-nome').value
    var sobrenome = document.getElementById('txt-sobrenome').value
    var email = document.getElementById('txt-email').value
    var assunto = document.getElementById('txt-assunto').value
    var msg = document.getElementById('txt-msg').value
    if(nome.length == 0 || sobrenome.length == 0 || email.length == 0 || assunto.length == 0 || msg.length == 0){
        swal({icon:"error",title:"Preencha todos os campos"})
    }else{
        $.post('php/salva_msg.php', {
        nome : nome,
        sobrenome : sobrenome,
        email : email,
        assunto : assunto,
        msg : msg
        },function(resposta){     
            if(resposta == "success"){
                swal({ title: "A sua mensagem foi enviada com sucesso",  icon: "success" }).then(() => window.location.reload());
            }else{
                swal({ title:"Houve algum erro incomum", icon: "error"});
            }
        })
    }
}


function Cadastrar() {
    var nome = document.getElementById('tx-nome').value
    var email = document.getElementById('tx-email').value
    var senha = document.getElementById('tx-senha').value
    if (nome.length == 0 || email.length == 0 || senha.length == 0) {
        swal({ icon: "error", title: "Preencha todos os campos" })
    } else {
        $.post('php/cadastro.php',{
            nome : nome,
            email : email,
            senha : senha
        },function(resposta){
            if(resposta == "success"){
                swal({title:"Cadastro efetuado com sucesso",icon:"success"}).then(() => window.location.reload());
            }else if(resposta == "existente"){
                swal({ title: "Um usuario com o mesmo email ja existe", icon: "info" })
            }else{
                swal({ title: "Houve um erro incomum", icon: "error" })
            }
        })
    }
}

function login(){
    var email = document.getElementById('txt-email').value
    var senha = document.getElementById('txt-senha').value
    if (email.length == 0 || senha.length == 0){
        swal({ icon: "error", title: "Preencha todos os campos" })
    } else {
        $.post('php/login.php', {
            email : email,
            senha : senha
        },function(resposta){
            if(resposta == "success"){
                swal({title:"Login efetuado com sucesso",icon:"success"}).then(() => window.location.href='comprar.php');
            }else if(resposta == 'usuario_ou_senha_incorreto'){
                swal({ title: "Usuario ou Senha incorreto", icon: "error" })
            }
        })
    }
}

//Lotes
function mudarTipo(){
    var tipo = $("#tipo").val();
    if(tipo == "tipo"){
        mostrarLotes('venda');
        mostrarLotesNoMapa('venda')
    }else if(tipo == "venda"){
        mostrarLotes('venda');
        mostrarLotesNoMapa('venda')
    }else if(tipo == "aluguer"){
        mostrarLotes('aluguer');
        mostrarLotesNoMapa('aluguer')
    }
};
function mostrarLotes(tipo) {
    var lotes = L.layerGroup().addTo(map);
    $.post('php/lotes.php', {
        tipo: tipo
    }, (resultados) => {
        $('.block-container').html('');
        for (var i = 0; i < resultados.length; i++) {
            $('.block-container').append(`
            <div class='block-card'>
            <div class='block-card-image'>
                <img src="Imagem/bathroom4-1.jpg" width='100%' height="200px">
            </div>
            <div class="block-card-info">
                <label for="">Dados do lote: ${resultados[i].dados_do_lote}</label><br>
                <label for="">Metros  quadrados: ${resultados[i].metros_quadrados}</label><br>
                <label for="">Venda ou Aluguer: ${resultados[i].venda_ou_aluguer}</label><br>
            </div>
            <dv class="block-card-buttons">
                <button>Entrar em contato <i class="material-icons">call</i></button>
            </div>   
            </div>
        `);
        }
    })
}

//Mapa
function mostrarLotesNoMapa(tipo){
    var lotes = L.layerGroup().addTo(map);
    $.post('php/lotes.php', {
        tipo : tipo
    },(resultados) =>{
        for(var i=0; i < resultados.length; i++){
            L.marker([resultados[i].latitude,resultados[i].longitude]).bindPopup(`
            <div>
                <div class='block-card-image'>
                <img src="Imagem/bathroom4-1.jpg" width='100%' height="200px">
                </div>
                <label>Dados do Lote : ${resultados[i].dados_do_lote} </label><br>
                <label>Metros Quadrados : ${resultados[i].metros_quadrados} </label><br>
                <label>Venda ou Aluguer : ${resultados[i].venda_ou_aluguer} </label><br>
            </div>
            `).addTo(lotes);
        }
    })
}