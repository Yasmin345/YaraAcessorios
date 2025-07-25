const botao = document.getElementById('botao');
const msg = document.getElementById('msg');
const msg2 = document.getElementById('msg2');
const container = document.getElementById('container')
const botao2 = document.getElementById('botao2');

botao.addEventListener('click',function(e){
    e.preventDefault();
    msg.innerText = 'te amo'
    botao.style.display = 'none'
    botao2.style.display = 'flex'
    container.style.backgroundColor = 'pink'
})


// para fazer o menu hamburguer é parecida a logica

const form = document.getElementById('form');

form.addEventListener('submit',function(e){
    e.preventDefault();
    fetch('http://localhost/')
})