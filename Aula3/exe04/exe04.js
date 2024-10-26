let soma = 0;

document.getElementById('text').addEventListener("keyup", (ev) => {
    let valor = parseInt(ev.key) 

    soma = soma + valor;

    alert(soma);
})




