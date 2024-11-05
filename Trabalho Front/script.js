let antesButton = document.getElementById('antes')
let depoisButton = document.getElementById('depois') 
let content = document.querySelector('.content') 
let items = content.querySelectorAll('.lista .item')
let indicador = document.querySelector('.indicadores') 
let dots = indicador.querySelectorAll('ul li') 

let ativo = 0
let firstPosition = 0 
let lastPosition = items.length - 1


antesButton.onclick = () => {
    let itemOld = content.querySelector('.lista .item.ativo')
    itemOld.classList.remove('ativo')
}

depoisButton.onclick = () => {
    console.log("Botão depois")
    
}