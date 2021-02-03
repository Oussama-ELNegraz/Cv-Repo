var option = document.querySelectorAll("#opt1 .option");
var option1 = document.querySelectorAll("#opt .option1");
var prog = document.querySelectorAll(".pr");
var nav = document.getElementById("nav");
var contt = document.getElementById("contt");
var men = document.getElementById("im");
var menu = document.getElementById("menu");


men.onclick = ()=>{
        menu.classList.toggle("display1");
    };


var x = Array("profil","skills","gallery","features","contact");
var i =0;

window.addEventListener('click', function(e){   
    if (!menu.contains(e.target) &&
     menu.classList.contains("display1") && 
     e.target != men
     )
    menu.classList.remove("display1");
  });


function scrolll(elemntt){
    elemntt.forEach(span => {
    span.addEventListener("click",(e) => {
        e.preventDefault();
        document.querySelector(e.target.dataset.scroll).scrollIntoView({
            behavior: 'smooth'
          });
          menu.classList.remove("display1");
    });
});
}

scrolll(option1);
scrolll(option);


prog.forEach(span => {
    span.style.width = span.dataset.progress;
});

var lan = document.getElementById("lan");
var lang = document.getElementById("lang");
lan.onclick = () =>{
    lang.classList.toggle("display");
}

