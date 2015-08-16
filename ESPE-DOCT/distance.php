<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<link rel="stylesheet" href="./styles/jquery-ui.css">	
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="./lib/jquery.min.js"></script>
<script src="./lib/jquery-ui.js"></script>
<script type="text/javascript" src="./lib/interface.js"></script>
<script type="text/javascript" src="./lib/gmaps/gmap.js"></script>
</head>
<body>
<A href="index.php"><H1>Outil distance</H1></A>
<br /><label for="ville1">VILLE1:</label>
<input id="ville1" value="..."></input>
<div id="listeVille1"></div>

<br /><label for="ville2">VILLE2:</label>
<input id="ville2" value="..."></input>
<div id="listeVille2"></div>

<br /><input type="button" id="btn_submit" value="Calcul dist."></input>
<br /><div id="results"></div>

<br />
<br /><label for="dist_max">DISTANCE MAXI (Km):</label>
<br /><input id="dist_max" value="20"></input>



<br /><input type="button" id="btn_city_near" value="Villes proches de Ville1"></input>
<br /><div id="carte" style="width: 800px; height: 600px"></div>

<br /><div id="results2"></div>

</body>
</html>