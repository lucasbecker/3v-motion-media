// CONTADOR REGRESSIVO
// new Date(ano, mês, dia, hora, minuto, segundo, milissegundo); 
var dataFinal = new Date(2020, 7, 7, 23, 59).getTime();
var dataInicial = new Date(2020, 6, 20).getTime();
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

    if(atual <= dataFinal){
        document.getElementById('promo').style.display = 'inline';
        document.getElementById('off').style.display = 'inline';
        document.getElementById('pop').style.display = 'none';
        document.getElementById('span-risco').style.textDecoration = 'line-through';
        document.getElementById('span-risco').style.textDecorationColor = '#a8391c';
        document.getElementById('span-promo1').style.display = 'inline';
        document.getElementById('span-promo2').style.display = 'inline';
        document.getElementById('span-parcela-promo').style.display = 'inline';
        document.getElementById('span-parcela-normal').style.display = 'none';
        document.getElementById('btn-promo').style.display = 'inline';
        document.getElementById('btn-real').style.display = 'none';
        document.getElementById('marketing').style.display = 'block';
    }
}

setInterval( () => {
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
},1000);

document.querySelector('#encontrou-sim').addEventListener('click', () => {
    $('#collapseNao').collapse('hide');
    setTimeout( ()=> {
        $('#collapseSim').collapse('show');
    }, 400);
})

document.querySelector('#encontrou-nao').addEventListener('click', () => {
    $('#collapseSim').collapse('hide');
    setTimeout( ()=> {
        $('#collapseNao').collapse('show');
    }, 400);
})

//const btnForm = document.querySelector("#botao-enviar");
const form = document.querySelector(".mark-form");
const div = document.querySelector(".mark-div");

/*btnForm.addEventListener("click", event => {
    event.preventDefault();

    form.classList.add("form-hide");

    
    const fields = document.querySelectorAll("input, area");

    fields.forEach(field =>{
        if(field.value == "") form.classList.add("validate-error");
    });

    const formError = document.querySelector(".validate-error");
    if(formError){
        formError.classList.remove("validate-error");
    }else{
        form.classList.add("form-hide");
    }
    
});*/

form.addEventListener("animationstart", event => {
    if(event.animationName === "down"){
       document.querySelector("body").style.overflow = "hidden";
    }
});

form.addEventListener("animationend", event => {
    if(event.animationName === "down"){
        form.style.display = "none";
        div.style.display = "none";
        document.querySelector("body").style.overflow= "none";   
    }
});

$(document).ready(function () {
    $('#form-marketing').submit(function() {
        var dados = $('#form-marketing').serialize();
        $.ajax({
            type : 'POST',
            url  : 'enviar-marketing.php',
            data : dados,
            dataType: 'json',
            success :  function(response){
                $('#feedback').css('display', 'block')
                    .removeClass()
                    .addClass(response.tipo)
                    .html('')
                    .html('<p>' + response.mensagem + '</p>');
            }
        });
        //$('.mark-div').addClass('form-hide');
        $('.mark-form').addClass('form-hide');
        return false;
    });
});
