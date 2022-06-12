var sair = document.querySelector("#sairButton") 
var menu = document.querySelector("#menuButton")


function teste(){
    var logout = confirm("Quer fazer logout?");

    if(logout == true){
        location.href = "..\PHP\logout.php";
    }
}

function teste2(){
    var menuir = confirm("Quer voltar para o menu?");

    if(menuir == true){
        location.href = "../HTML/start.html";
    }
}