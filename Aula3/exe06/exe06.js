const Bem = 'Bem', 
      MaisouMenos = 'MaisouMenos', 
      Mal = 'Mal';

function muda(){
    const lista  = document.getElementById('lista').value; 
    const mensagemDiv = document.getElementById('mensagemDiv'); 
    const p = document.createElement('p');
    
    if (lista === 'Bem') {
        mensagemDiv.style.width = '300px'; 
        mensagemDiv.style.height = '300px'; 
        mensagemDiv.style.backgroundColor = 'green'; 
        mensagemDiv.style.color = 'white'; 
        p.innerText = 'Que Bom'; 
        mensagemDiv.appendChild(p);


    } else if (lista === 'MaisouMenos'){
        mensagemDiv.style.width = '400px'; 
        mensagemDiv.style.height = '600px'; 
        mensagemDiv.style.backgrounColor = 'blue'; 
        mensagemDiv.style.color = 'yellow'; 
        mensagemDiv.style.border = '5px solid green'; 
        p.innerText = 'Vai melhorar'; 
        mensagemDiv.appendChild(p);

    } else if (lista === 'Mal'){
        mensagemDiv.style.backgroundColor = 'red'; 
        mensagemDiv.style.color = 'white'; 
        p.innerText = 'Procure Ajuda'; 
        alert('Para psicólogos ligue:(47) 9999 - 9999');
        mensagemDiv.appendChild(p);
    }
}