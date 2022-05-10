
const red = document.getElementById('red');
const yellow = document.getElementById('yellow');
const orange = document.getElementById('orange');
const green = document.getElementById('green');
const purple = document.getElementById('purple');
const blue = document.getElementById('blue');

const inputColors = document.getElementById('colors-choice');
let input = document.getElementsByTagName('input');

red.addEventListener('click', function(){  
    if(input.length < 4) {
    inputColors.innerHTML += "<input value='red'" + red.id + ">";
    }
});

yellow.addEventListener('click', function(){
    if(input.length < 4) {
    inputColors.innerHTML += "<input value='yellow'" + yellow.id + ">";
    }
});

orange.addEventListener('click', function(){
    if(input.length < 4) {
    inputColors.innerHTML += "<input value='orange'" + orange.id + ">";
    }
});

green.addEventListener('click', function(){
    if(input.length < 4) {
    inputColors.innerHTML += "<input value='green'" + green.id + ">";
    }
});

purple.addEventListener('click', function(){
    if(input.length < 4) {
    inputColors.innerHTML += "<input value='purple'" + purple.id + ">";
    }
});

blue.addEventListener('click', function(){
    if(input.length < 4) {
    inputColors.innerHTML += "<input value='blue'" + blue.id + ">";
    }
});