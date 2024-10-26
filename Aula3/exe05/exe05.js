function addBotao(){
    let botao = document.getElementById("botao");
    let button = document.createElement('button'); 
    let teste = document.getElementById('teste');

    button.innerText = 'botao'
    teste.appendChild(button);
}