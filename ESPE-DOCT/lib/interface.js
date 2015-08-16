var marqueurs;

effaceMarqueurs = function() {
	//alert(marqueurs.length);
	for (var i=0;i<marqueurs.length;i++) {
		marqueurs[i].setMap(null);
	}
}

$( window ).load(function() {
  $( document ).tooltip();
  marqueurs = []; 
  // Run code
  //alert('jQuery found ;)');
  $('#ville1').keyup(function () { 
      $( "#results" ).html("");
      ville1 = $('#ville1').val();
      $.ajax({
	      method: 'post',
	      data: { action: 'list_city', secret: 'MrT', ville: ville1},
          url: "ajax.php",
          cache: false
      })
      .done(function( code ) {
          $( "#listeVille1" ).html( code );
		  $(".city_item").click(function(){
			  txt = $('#'+this.id).html();
			  $('#ville1').val(txt);
			  $( "#listeVille1" ).html('');
			  
		  });
      }); 
  });
  
  $('#ville2').keyup(function () {
      $( "#results" ).html("");  
      ville2 = $('#ville2').val();
      $.ajax({
	      method: 'post',
	      data: { action: 'list_city', secret: 'MrT', ville: ville2},
          url: "ajax.php",
          cache: false
      })
      .done(function( code ) {
          $( "#listeVille2" ).html( code );
		  $(".city_item").click(function(){
			  txt = $('#'+this.id).html();
			  $('#ville2').val(txt);
			  $( "#listeVille2" ).html('');
			  
		  });
      }); 
  });

  $('#btn_submit').click(function () {
      $( "#results2" ).html('');
      ville1 = $('#ville1').val();
	  ville2 = $('#ville2').val();
	  $.ajax({
	      method: 'post',
	      data: { action: 'calc_dist', secret: 'MrT', ville1: ville1, ville2: ville2},
          url: "ajax.php",
          cache: false
      })
	  .done(function( code ) {
	      //code doit retourner les longitudes et latitudes des 2 villes en JSON ainsi que la distance
          
		  res = JSON.parse(code);
		  $( "#results" ).html(res['distance']+ ' Km');
		  var lat = res['ville1']['latitude'];
		  var longit= res['ville1']['longitude'];
		  var title= res['ville1']['nom'];
		  effaceMarqueurs();
		  marqueurs.push(new google.maps.Marker({
              position: new google.maps.LatLng((lat*360)/(2*Math.PI),(longit*360)/(2*Math.PI)),
              map: carte,
			  title: title
          }));
		  
		  var lat = res['ville2']['latitude'];
		  var longit= res['ville2']['longitude'];
		  var title= res['ville2']['nom'];
		  marqueurs.push(new google.maps.Marker({
              position: new google.maps.LatLng((lat*360)/(2*Math.PI),(longit*360)/(2*Math.PI)),
              map: carte,
			  title: title
          }));
		  
	  });
  });
  
  $('#btn_city_near').click(function () {
      $( "#results" ).html('');
      $( "#results2" ).html('');
	  effaceMarqueurs();
      ville1 = $('#ville1').val();
	  dist_max = $('#dist_max').val();
	  $.ajax({
	      method: 'post',
	      data: { action: 'find_city_max_dist', secret: 'MrT', ville1: ville1, dist_max: dist_max},
          url: "ajax.php",
          cache: false
      })
	  .done(function(code) {
	      //$( "#results2" ).html(code);
		  res = JSON.parse(code);
		  //alert(res['code'].length);
		  
		  
          for (var i=0;i<res['code'].length;i++) {
		       lat = res['code'][i]['latitude'];
			   longit = res['code'][i]['longitude'];
		       title = res['code'][i]['nom'];
			   marqueurs.push(new google.maps.Marker({
                  position: new google.maps.LatLng((lat*360)/(2*Math.PI),(longit*360)/(2*Math.PI)),
                  map: carte,
				  title: title
               }));
		 }
	  });
  });
  
});