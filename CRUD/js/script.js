// Selecione o elemento que exibirá a mensagem
let msgPopup = document.getElementById('mensagem-popup');
let popup = document.getElementById("meuPopUp");
let popupConteudo = document.getElementById("conteudo");

// Obtenha o valor da variável "msg" na URL
let urlParams = new URLSearchParams(window.location.search);
let mensagem = urlParams.get('msg');

if(mensagem == "success_delete"){
    // Insira a mensagem no elemento HTML
    msgPopup.innerHTML = "Usuario deletado com sucesso!";

    popup.classList.add('ativo');
    popup.style.top = " 90%";
    popup.style.left = "82%";
    popupConteudo.style.backgroundColor = "#9de99d";
    popupConteudo.style.color = "#176817";

} else if(mensagem == "error_delete"){
    // Insira a mensagem no elemento HTML
    msgPopup.innerHTML = "Não foi possivel excluir o usuario, tente novamente!";

    popup.classList.add('ativo');
    popup.style.top = " 90.5%";
    popup.style.left = "73%";
    popupConteudo.style.backgroundColor = "#ff9090";
    popupConteudo.style.color = "#cc0000";
} else if(mensagem == "success_create"){
    // Insira a mensagem no elemento HTML
    msgPopup.innerHTML = "Usuario inserido com sucesso!";

    popup.classList.add('ativo');
    popup.style.top = " 90%";
    popup.style.left = "82%";
    popupConteudo.style.backgroundColor = "#9de99d";
    popupConteudo.style.color = "#176817";

} else if(mensagem == "error_create"){
    // Insira a mensagem no elemento HTML
    msgPopup.innerHTML = "Não foi possivel inserir o usuario, tente novamente!";

    popup.classList.add('ativo');
    popup.style.top = " 90.5%";
    popup.style.left = "73%";
    popupConteudo.style.backgroundColor = "#ff9090";
    popupConteudo.style.color = "#cc0000";
} else if(mensagem == "error_id"){
    // Insira a mensagem no elemento HTML
    msgPopup.innerHTML = "O usuário não foi localizado, tente novamente!";

    popup.classList.add('ativo');
    popup.style.top = " 90.5%";
    popup.style.left = "73%";
    popupConteudo.style.backgroundColor = "#ff9090";
    popupConteudo.style.color = "#cc0000";
} else if(mensagem == "success_alter"){
    // Insira a mensagem no elemento HTML
    msgPopup.innerHTML = "Usuario alterado com sucesso!";

    popup.classList.add('ativo');
    popup.style.top = " 90%";
    popup.style.left = "82%";
    popupConteudo.style.backgroundColor = "#9de99d";
    popupConteudo.style.color = "#176817";
} else if(mensagem == "error_alter"){
    // Insira a mensagem no elemento HTML
    msgPopup.innerHTML = "Não foi possivel alterar os dados do usuario, tente novamente!";

    popup.classList.add('ativo');
    popup.style.top = " 90.5%";
    popup.style.left = "69%";
    popupConteudo.style.backgroundColor = "#ff9090";
    popupConteudo.style.color = "#cc0000";
}

function fecharPopUp() {
    document.getElementById('meuPopUp').classList.remove('ativo');
}
