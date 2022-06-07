var soundtrack2 = document.getElementById( 'trilhaSonora' );

soundtrack2.volume = 0

soundtrack2.play()

var botaotrilha = document.getElementById("trilhaBotao")

var musicAtivado = false

botaotrilha.addEventListener("click", function(){

	if(musicAtivado == false){
	soundtrack2.play()
	soundtrack2.volume = 1
	console.log("funcionou")
	musicAtivado = true
	}else{
		soundtrack2.volume = 0
		musicAtivado = false
	}	
})