let antesButton = document.getElementById('antes');
let depoisButton = document.getElementById('depois');
let content = document.querySelector('.content');
let items = content.querySelectorAll('.lista .item');
let indicador = document.querySelector('.indicadores');
let dots = indicador.querySelectorAll('ul li');

let ativo = 0;
let firstPosition = 0;
let lastPosition = items.length - 1;
let autoPlayInterval;

// Função para mover o slider para um slide específico
function moveToSlide(index) {
    ativo = index;
    SetSlider();
    items[ativo].classList.add('ativo');
}

// Função para atualizar a exibição do slider
function SetSlider() {
    let itemOld = content.querySelector('.lista .item.ativo');
    itemOld.classList.remove('ativo');

    let dotsOld = indicador.querySelector('ul li.ativo');
    dotsOld.classList.remove('ativo');
    dots[ativo].classList.add('ativo');

    indicador.querySelector('.numero').innerHTML = '0' + (ativo + 1);
}

// Função para atualizar o auto-play
function updateAutoPlay() {
    clearInterval(autoPlayInterval);
    autoPlayInterval = setInterval(() => depoisButton.click(), 5000);
}

// Configurações dos botões de navegação
antesButton.onclick = () => {
    ativo = ativo - 1 < firstPosition ? lastPosition : ativo - 1;
    moveToSlide(ativo);
};

depoisButton.onclick = () => {
    ativo = ativo + 1 > lastPosition ? 0 : ativo + 1;
    moveToSlide(ativo);
};

// Inicializa o auto-play e atualiza ao passar o mouse
updateAutoPlay();
content.addEventListener('mouseover', () => clearInterval(autoPlayInterval));
content.addEventListener('mouseleave', updateAutoPlay);

// Função para configurar a navegação pelos pontos (dots)
function addDotNavigation(dots) {
    dots.forEach((dot, index) => {
        dot.onclick = () => moveToSlide(index);
    });
}

addDotNavigation(dots);
