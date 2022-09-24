function redirecioneComHistorico() {
  // Faz um redirecionamento sem adicionar a página original ao histórico de navegação do browser.
  window.location.href = "$";
}

function redirecioneComHistorico2() {
  // Faz um redirecionamento sem adicionar a página original ao histórico de navegação do browser.
  window.location.href = "$$";
}

function redirecioneComHistorico3() {
  // Faz um redirecionamento sem adicionar a página original ao histórico de navegação do browser.
  window.location.href = "$$$";
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
