console.log("sonsEfeitos funcionando")

console.log(effectAtivado)

var buttonEffect = document.getElementById("volumeteste")

var effectSons = document.querySelectorAll("sonsEfeitos")

somErro = document.querySelector("#somErro")
somAcerto = document.querySelector("#somAcerto")

var effectAtivado = true

buttonEffect.addEventListener("click", function(){

	console.log("funcionou")

	if(effectAtivado == true){
		somAcerto.volume = 0
		somErro.volume = 0
		document.querySelector("#volumeSom")
    	.classList.toggle("fade")
		document.querySelector("#volumeMuted")
    	.classList.toggle("fade")
		effectAtivado = false
		}else{
			somAcerto.volume = 1
			somErro.volume = 1
			document.querySelector("#volumeSom")
			.classList.toggle("fade")
			document.querySelector("#volumeMuted")
			.classList.toggle("fade")
			effectAtivado = true
		}
})