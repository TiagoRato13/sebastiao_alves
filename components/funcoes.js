function verMais(){
    let t_p = document.getElementById("texto_pequeno");
    let t_c = document.getElementById("texto_completo");
    let botao_vM = document.getElementById("botao-ver-mais");

    t_p.style.display = "none";
    t_c.style.display = "block";
    botao_vM.style.display = "none";
}

function botaoNav(){

    if(!nav_bar){
        botao_nav.classList.add("botao-nav-mobile-x");
        nav_bar = true;
    }
    else{
        botao_nav.classList.remove("botao-nav-mobile-x");
        nav_bar = false;
    }
}

function abrirNav(){
    setTimeout(activarNav, 500);
}

function activarNav(){
    $("#navbarDropdownMenuLink").dropdown('toggle');
}