var scene = document.getElementById('scene');
var parallax = new Parallax(scene);


var scene2 = document.getElementById('scene2');
var parallax2 = new Parallax(scene2);

AOS.init();

function iniciaPopUp(modalID){
    const modal = document.getElementById(modalID);
    if(modal){
        modal.classList.add('exibe');
        modal.addEventListener('click', (e) => {
            if(e.target.id == modalID || e.target.className == 'fechar'){
                modal.classList.remove('exibe');
            }
        });
    }
}

const player = document.querySelector('#cardapioAnimado');
player.addEventListener('click', () => {
    iniciaPopUp('modal-exemplo');
})
