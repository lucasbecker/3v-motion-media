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

const player = document.querySelector('#cardapioAnimado');
player.addEventListener('click', () => {
    iniciaPopUp('modal-exemplo', 'exemplo1');
})

const player2 = document.querySelector('#cardapioInterativo');
player2.addEventListener('click', () => {
    iniciaPopUp('modal-exemplo2', 'exemplo2');
})

const player3 = document.querySelector('#chamadaAnimada');
player3.addEventListener('click', () => {
    iniciaPopUp('modal-exemplo3', 'exemplo3');
})

/* Botões dos POP-UPs */
// MELHORAR SE POSSIVEL
document.getElementById('button-11').addEventListener('click', () => {
    document.getElementById('exemplo1').src = `https://www.youtube.com/embed/qqfMAf3IFE0`;
})
document.getElementById('button-12').addEventListener('click', () => {
    document.getElementById('exemplo1').src = `https://www.youtube.com/embed/I-RgNNaF8rw`;
})
document.getElementById('button-13').addEventListener('click', () => {
    document.getElementById('exemplo1').src = `https://www.youtube.com/embed/3_52H8bk9WQ`;
})

document.getElementById('button-21').addEventListener('click', () => {
    document.getElementById('exemplo2').src = `https://www.youtube.com/embed/qqfMAf3IFE0`;
})
document.getElementById('button-22').addEventListener('click', () => {
    document.getElementById('exemplo2').src = `https://www.youtube.com/embed/I-RgNNaF8rw`;
})
document.getElementById('button-23').addEventListener('click', () => {
    document.getElementById('exemplo2').src = `https://www.youtube.com/embed/3_52H8bk9WQ`;
})

document.getElementById('button-31').addEventListener('click', () => {
    document.getElementById('exemplo3').src = `https://www.youtube.com/embed/qqfMAf3IFE0`;
})
document.getElementById('button-32').addEventListener('click', () => {
    document.getElementById('exemplo3').src = `https://www.youtube.com/embed/I-RgNNaF8rw`;
})
document.getElementById('button-33').addEventListener('click', () => {
    document.getElementById('exemplo3').src = `https://www.youtube.com/embed/3_52H8bk9WQ`;
})

// CONTADOR REGRESSIVO
// new Date(ano, mês, dia, hora, minuto, segundo, milissegundo);
var dataFinal = new Date(2020,6,3).getTime();
var dataInicial = new Date(2020,5,29).getTime();
var dias, horas, minutos, segundos;

setInterval(() => {
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
}, 1000);


function barraProgresso(){
    var total = dataFinal - dataInicial;
    var atual = new Date().getTime();
    var percent = dataFinal - atual;
    var falta = (percent *100 ) / total;
    var progresso = 100 - falta;

    var barra = document.getElementById('barraProgresso');
    barra.style.width = progresso.toFixed(0) + '%';
    barra.innerHTML = progresso.toFixed(0) + '% do limite máximos de pacotes vendidos' ;
}

barraProgresso();