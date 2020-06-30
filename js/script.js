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
    'https://www.youtube.com/embed/qqfMAf3IFE0', 
    'https://www.youtube.com/embed/I-RgNNaF8rw', 
    `https://www.youtube.com/embed/3_52H8bk9WQ`
];

var videosCardapioInterativo = [
    'https://www.youtube.com/embed/qqfMAf3IFE0', 
    'https://www.youtube.com/embed/I-RgNNaF8rw', 
    `https://www.youtube.com/embed/3_52H8bk9WQ`
];

var videosChamadaAnimada = [
    'https://www.youtube.com/embed/qqfMAf3IFE0', 
    'https://www.youtube.com/embed/I-RgNNaF8rw', 
    `https://www.youtube.com/embed/3_52H8bk9WQ`
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

// CONTADOR REGRESSIVO
// new Date(ano, mês, dia, hora, minuto, segundo, milissegundo);
var dataFinal = new Date(2020, 6, 3, 23, 59).getTime();
//var dataFinal = new Date(202, 5, 29).getTime();
var dataInicial = new Date(2020, 5, 28).getTime();
var dias, horas, minutos, segundos;

function barraProgresso(){
    var total = dataFinal - dataInicial;
    var atual = new Date().getTime();
    var percent = dataFinal - atual;
    var falta = (percent *100 ) / total;
    var progresso = 100 - falta;

    var barra = document.getElementById('barraProgresso');
    barra.style.width = (progresso.toFixed(0)-1) + '%';
    barra.innerHTML = (progresso.toFixed(0)-1) + '% do limite máximos de pacotes vendidos' ;

    if(atual >= dataFinal){
        document.getElementById('promo').style.display = 'none';
        document.getElementById('off').style.display = 'none';
        document.getElementById('span-risco').style.textDecoration = 'none';
        document.getElementById('span-promo').style.display = 'none';
        document.getElementById('span-parcela-promo').style.display = 'none';
        document.getElementById('span-parcela-normal').style.display = 'inline';
    }
}

function contagemRegressiva(){
    var dataAtual = new Date().getTime();

    segundos = (dataFinal - dataAtual)/1000;

    dias = parseInt(segundos/86400);
    segundos = segundos % 86400;

    horas = parseInt(segundos / 3600);
    segundos = segundos % 3600;

    minutos = parseInt(segundos / 60);

    document.getElementById('dias').innerHTML = ('00' + dias).slice(-2);
    document.getElementById('horas').innerHTML = ('00' + horas).slice(-2);
    document.getElementById('minutos').innerHTML = ('00' + minutos).slice(-2);
    barraProgresso();
}

setInterval(contagemRegressiva(), 1000);