let soma = 0;

function getValor(event){
    let valor = parseInt(event.key)

    soma = soma  + valor;

    alert(soma);
}

document.getElementById("v1").addEventListener('keyup', (ev) => getValor(ev))
document.getElementById("v2").addEventListener('keyup', (ev) => getValor(ev))

