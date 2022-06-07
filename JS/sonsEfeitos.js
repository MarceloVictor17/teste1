var $button = document.querySelector("#botaoEfeito")

var $effectSons = document.querySelectorAll("sons")

var effectAtivado = true

button.addEventListener("click", function(){

	if(musicAtivado == true){
	$effectSons.volume = 0
	musicAtivado = false
	}else{
		$effectSons.volume = 1
		effectAtivado = true
	}	
})