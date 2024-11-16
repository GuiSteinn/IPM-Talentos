function updateSoma() {
    const valor1 = parseFloat(document.getElementById("v1").value) || 0;
    const valor2 = parseFloat(document.getElementById("v2").value) || 0;

    const soma = valor1 + valor2;

    document.getElementById("soma").value = soma;
}

document.getElementById("v1").addEventListener('input', updateSoma);
document.getElementById("v2").addEventListener('input', updateSoma);
