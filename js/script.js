function redirecioneComHistorico() {
  // Faz um redirecionamento sem adicionar a página original ao histórico de navegação do browser.
  window.location.href = "modulos.html";
}

function redirecioneComHistorico2() {
  // Faz um redirecionamento sem adicionar a página original ao histórico de navegação do browser.
  window.location.href = "modulos.html";
}

function redirecioneComHistorico3() {
  // Faz um redirecionamento sem adicionar a página original ao histórico de navegação do browser.
  window.location.href = "modulos.html";
}

function bloqueado(){
alert("Tarefa bloqueada");
}

let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e)=>{
 let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
 arrowParent.classList.toggle("showMenu");
  });
}

let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".bx-menu");
console.log(sidebarBtn);
sidebarBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("close");
});

//Barra de progresso
$(document).ready(function(){
  $(".barra_prog").css("width", window.pageYOffset + "%");
  function map(currentA, maxA , maxB ){
    return (currentA * maxB) / maxA;
  }
  //on scroll event
  $(window).scroll(function(){
    var pageMaxY = $(document).height() - $(window).height();
    $(".barra_prog").css("width", map(window.pageYOffset, pageMaxY,100) + "%");
  });
});
