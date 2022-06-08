console.log("deu certo sonsEfeitos")

var buttonEffect = document.getElementById("volumeteste")

var effectSons = document.querySelectorAll("sonsEfeitos")

var musicOn = document.querySelector("volumeSom")
var musicOffn = document.querySelector("volumeMuted")

var effectAtivado = true

buttonEffect.addEventListener("click", function(){

	console.log("funcionou")

	if(effectAtivado == true){
		effectSons.volume = 0
		effectAtivado = false
		document.querySelector("#volumeSom")
    	.classList.toggle("fade")
		document.querySelector("#volumeMuted")
    	.classList.toggle("fade")

		}else{
			effectSons.volume = 1
			effectAtivado = true
			document.querySelector("#volumeSom")
			.classList.toggle("fade")
			document.querySelector("#volumeMuted")
			.classList.toggle("fade")
		}
})