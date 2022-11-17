// header = MENU RESPONSIVO

let show = true;

const menuHamburguer = document.querySelector(".hamburguer")
const menuSand = menuHamburguer.querySelector(".sand")

menuSand.addEventListener("click", () =>{

    //IMPEDE A ROLAGEM DA PÁGINA APÓS O CLICK NO MENU
    document.body.style.overflow = show ? "hidden" : "initial"
    //document.barra.style.display = show ? "none" : "block"

    menuHamburguer.classList.toggle("click", show)
    show = !show;
})

// toda a página = BOTÃO VOLTAR AO TOPO
//código adaptado de Mauro Alexandre
var voltarTopo = function() {
    window.scrollTo(0, 0);
};