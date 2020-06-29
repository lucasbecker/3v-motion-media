var scene = document.getElementById('scene');
var parallax = new Parallax(scene);


var scene2 = document.getElementById('scene2');
var parallax2 = new Parallax(scene2);

AOS.init();

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