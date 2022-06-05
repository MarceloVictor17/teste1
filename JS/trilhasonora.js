var music = document.getElementById( 'music' );
var sound = document.getElementById( 'sound' );
var soundtrack = document.getElementById( 'soundtrack' );
var musicIsOn = false;
music.addEventListener( 'click', soundtrackTurn );
// sound.addEventListener( 'click' );
function soundtrackTurn () {
	this.classList.toggle( 'is-on' );

	if ( musicIsOn == false ) {
		soundtrack.play();
		musicIsOn = true;
	} else {
		soundtrack.pause();
		musicIsOn = false;
	}
}


var cipher = document.getElementById( 'cipher' );
cipher.addEventListener( 'click', () => {
	cipher.classList.add( 'animation' );
	animation = setTimeout( () => {
		cipher.classList.remove( 'animation' );
	}, 6000 );
} );

// var buttonHome = document.getElementById( 'buttonHome' ).addEventListener( 'click', appearScreens );
var buttonSettings = document.getElementById( 'buttonSettings' ).addEventListener( 'click', appearScreens );
var buttonCredits = document.getElementById( 'buttonCredits' ).addEventListener( 'click', appearScreens );
var buttonFeedBack = document.getElementById( 'buttonFeedBack' ).addEventListener( 'click', appearScreens );
var buttonExtra = document.getElementById( 'buttonExtra' ).addEventListener( 'click', appearScreens );

function appearScreens () {
	id = turnButtonInSection(this.getAttribute( 'id' ))
	// alert('djadj')
	var session = document.getElementById( id );
	console.log( session )
	session.style.opacity = '1';
	// id.
}

function turnButtonInSection(id){
	id = id.replace( 'button', '' );
	fistLetterOriginal = id.charAt( 0 )
	fistLetterAuterated = id.charAt( 0 ).toLowerCase();
	id = id.replace( fistLetterOriginal, fistLetterAuterated );
	return id;
}