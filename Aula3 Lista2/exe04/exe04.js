document.getElementById('gerar').addEventListener('click', () => {
    const quantidade = parseInt(document.getElementById('quantidade').value);

    if (isNaN(quantidade) || quantidade <= 0) {
        alert("Por favor, informe um número válido maior que zero.");
        return;
    }

    const container = document.getElementById('container');

    container.innerHTML = '';

    for (let i = 1; i <= quantidade; i++) {
        const div = document.createElement('div');
        div.className = 'generated-div';
        div.textContent = i;
        container.appendChild(div);
    }
});
