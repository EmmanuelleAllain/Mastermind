
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
    inputColors.innerHTML += "<input value='red'>";
    }
});

yellow.addEventListener('click', function(){
    if(input.length < 4) {
    inputColors.innerHTML += "<input value='yellow'>";
    }
});

orange.addEventListener('click', function(){
    if(input.length < 4) {
    inputColors.innerHTML += "<input value='orange'>";
    }
});

green.addEventListener('click', function(){
    if(input.length < 4) {
    inputColors.innerHTML += "<input value='green'>";
    }
});

purple.addEventListener('click', function(){
    if(input.length < 4) {
    inputColors.innerHTML += "<input value='purple'>";
    }
});

blue.addEventListener('click', function(){
    if(input.length < 4) {
    inputColors.innerHTML += "<input value='blue'>";
    }
});