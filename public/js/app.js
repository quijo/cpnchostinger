const menu = document.getElementById('menu')
const toggleMenu = document.getElementById('menu-list')
const arrow = document.getElementById('arrow-left')
const about = document.getElementById('about')
const dropdown = document.getElementById('dropdown')
const bodyclicked = document.getElementsByTagName('body')





menu.addEventListener('click',function(){
    toggleMenu.classList.toggle('menu-active');


})
about.addEventListener('click',function(){

    dropdown.classList.toggle("dropdown-active")


})


function hide(){
    toggleMenu.classList.toggle('menu-active')
    arrow.classList.toggle('active')


}

function redirect(){
    window.location='https://cpnc.globalnaz.com';
    window.open();


}


document.addEventListener('mouse', function(event) {



});

