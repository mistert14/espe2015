var carte;


$( window ).load(function() {

    	 //CAEN LAT:0.858431 LONG: -0.00628319
	 var latlng = new google.maps.LatLng((0.858431*360)/(2*Math.PI), (-0.00628319*360)/(2*Math.PI));
                //objet contenant des propriétés avec des identificateurs prédéfinis dans Google Maps permettant
                //de définir des options d'affichage de notre carte
     var options = {
                    center: latlng,
                    zoom: 10,
                    mapTypeId: google.maps.MapTypeId.HYBRID
     };
                
                //constructeur de la carte qui prend en paramêtre le conteneur HTML
                //dans lequel la carte doit s'afficher et les options
     carte = new google.maps.Map(document.getElementById("carte"), options);
	 
	//création du marqueur
    //ajouterMarqueur(0.858431,-0.00628319);
  
});