var map;
//Instanciaremos ele mais tarde, que serÃ¡ o nosso google.maps.DirectionsRenderer
var directionsDisplay; 
var directionsService 	= new google.maps.DirectionsService();
var info 				= new google.maps.InfoWindow({maxWidth: 350});

var marker 				= new google.maps.Marker({

	title: 				'ALMEIDA CAVALCANTI',
	icon: 				'imgs/marker.png',
	position: 			new google.maps.LatLng('-8.047853', '-34.892744') // -8.047853, -34.892744

});		
 
function initialize() {

		directionsDisplay = new google.maps.DirectionsRenderer(); // Instanciando...
		var latlng = new google.maps.LatLng('-8.047853', '-34.892744');

		var options = {

			zoom: 16,
			center: marker.position,
			mapTypeId: google.maps.MapTypeId.ROADMAP

		};

		map = new google.maps.Map(document.getElementById("mapa"), options);

		marker.setMap(map);
			
		google.maps.event.addListener(marker, 'click', function() {
			info.setContent('<p class="maps"><strong>ALMEIDA CAVALCANTI</strong> <br>Av. Gov. Agamenon Magalhães, nº 2936, 14º andar, salas 1401/1402 <br>Espinheiro | Recife - PE | Fone/FAX 55 (81) 3040-1228</p>');
			info.open(map, marker);
		}); 

	   directionsDisplay.setMap(map); // Relacionamos o directionsDisplay com o mapa desejado

}
 
initialize();
 
$("#form-localizacao").submit(function(event) {

	event.preventDefault();

	if($("#txtEnderecoPartida").val() !== ""){

		info.close();
		marker.setMap(null);

		var enderecoPartida = $("#txtEnderecoPartida").val();

		var request = { // Novo objeto google.maps.DirectionsRequest, contendo:

			origin: enderecoPartida, // origem
			destination: marker.position, // destino
			travelMode: google.maps.TravelMode.DRIVING // meio de transporte, nesse caso, de carro

		};

		directionsService.route(request, function(result, status) {

			if (status == google.maps.DirectionsStatus.OK) { // Se deu tudo certo

				directionsDisplay.setDirections(result); // Renderizamos no mapa o resultado
				directionsDisplay.setMap(map);

			}

		});

	}

	return false;

});