const cores = [
    'aqua', 'black', 'brown', 'gold', 'grey', 
    'red', 'yellow', 'green', 'blue', 'magenta', 
    'tomato', 'orange', 'olive', 'navy'
];

function randomIndex(array) {
    return Math.floor(Math.random() * array.length);
}

document.getElementById('gerar').addEventListener('click', () => {
    const corFundo = cores[randomIndex(cores)];
    const corBorda = cores[randomIndex(cores)];

    const novaDiv = document.createElement('div');
    novaDiv.className = 'random-div';
    novaDiv.style.backgroundColor = corFundo;
    novaDiv.style.border = `2px solid ${corBorda}`;

    document.getElementById('container').appendChild(novaDiv);
});
