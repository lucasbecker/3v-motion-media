/* PARALLAX HAMBUGUER */
var scene = document.getElementById('scene');
var parallax = new Parallax(scene);

/* PARALLAX PIZZA */
var scene2 = document.getElementById('scene2');
var parallax2 = new Parallax(scene2);

/* Entrada animda das DIVs */
AOS.init();

/* Função para iniciar e fechar POP-UP */
function iniciaPopUp(modalID, iframeID){
    const modal = document.getElementById(modalID);
    const iframe = document.getElementById(iframeID);
    if(modal){
        modal.classList.add('exibe');
        modal.addEventListener('click', (e) => {
            if(e.target.id == modalID || e.target.className == 'fechar'){
                modal.classList.remove('exibe');
                iframe.src = iframe.src;
            }
        });
    }
}

document.querySelector('#cardapioAnimado').addEventListener('click', () => {
    iniciaPopUp('modal-exemplo', 'exemplo1');
})

document.querySelector('#cardapioInterativo').addEventListener('click', () => {
    iniciaPopUp('modal-exemplo2', 'exemplo2');
})

document.querySelector('#chamadaAnimada').addEventListener('click', () => {
    iniciaPopUp('modal-exemplo3', 'exemplo3');
})

var videosCardapioAnimado = [
    'https://www.youtube.com/embed/56-K8onpnq0', 
    'https://www.youtube.com/embed/KgE_LNxaWeA', 
    'https://www.youtube.com/embed/aXL3C7Ox1No'
];

var videosCardapioInterativo = [
    'https://www.youtube.com/embed/2PL8_nV3k2s', 
    'https://www.youtube.com/embed/ZUybjChBNq4', 
    'https://www.youtube.com/embed/khBhkADH7RE'
];

var videosChamadaAnimada = [
    'https://www.youtube.com/embed/BHBztcITmJY', 
    'https://www.youtube.com/embed/3pcq48Tgd9g', 
    'https://www.youtube.com/embed/JAzDkE7qFlc'
];

/* Botões dos POP-UPs */
// MELHORAR SE POSSIVEL
document.getElementById('button-11').addEventListener('click', () => {
    document.getElementById('exemplo1').src = videosCardapioAnimado[0];
})
document.getElementById('button-12').addEventListener('click', () => {
    document.getElementById('exemplo1').src = videosCardapioAnimado[1];
})
document.getElementById('button-13').addEventListener('click', () => {
    document.getElementById('exemplo1').src = videosCardapioAnimado[2];
})

document.getElementById('button-21').addEventListener('click', () => {
    document.getElementById('exemplo2').src = videosCardapioInterativo[0];
})
document.getElementById('button-22').addEventListener('click', () => {
    document.getElementById('exemplo2').src = videosCardapioInterativo[1];
})
document.getElementById('button-23').addEventListener('click', () => {
    document.getElementById('exemplo2').src = videosCardapioInterativo[2];
})

document.getElementById('button-31').addEventListener('click', () => {
    document.getElementById('exemplo3').src = videosChamadaAnimada[0];
})
document.getElementById('button-32').addEventListener('click', () => {
    document.getElementById('exemplo3').src = videosChamadaAnimada[1];
})
document.getElementById('button-33').addEventListener('click', () => {
    document.getElementById('exemplo3').src = videosChamadaAnimada[2];
})
