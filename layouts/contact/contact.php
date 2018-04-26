<div class="contact">

	<h1>
		Contact Us
	</h1>

	<div class="contact__container">

		<div>
			<div class="contact__phone__container">
				<i class="material-icons">phone</i>

				<span class="contact__label">
					Phone:
				</span>

				<a href="tel:+17818904300" class="contact__link">781-890-4300</a><br/>

				<span class="contact__label">
				Fax:
				</span>

				<span class="contact__link">
					781-890-8287
				</span>
			</div>
		</div>

		<div>
			<i class="material-icons">location_on</i>
			<div class="contact__label">Location: </div>
				Advanced Visual Systems Inc.<br/>
				2 Burlington Woods Drive, Suite 100<br/>
				Burlington MA 01803
		</div>

		<div>
			<i class="material-icons">email</i>
			<span class="contact__label">Email: </span>
			<a class="contact__link" href="mailto:info@avs.com">info@avs.com</a>
		</div>

	</div>

	<!--<iframe
		width="100%"
		height="450"
		frameborder="0" style="border:0"
		src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAMdUbaQDc7O5lmB1Q6CgiivwiFqlVaaYM
		&q=Advanced+Visual_systems+MA" allowfullscreen>
	</iframe>-->

	<div id="map"></div>

	<script>
	  function initMap() {
		// Styles a map in night mode.
		var map = new google.maps.Map(document.getElementById('map'), {
		  center: {lat: 42.487796, lng: -71.197575},
		  zoom: 12,
		  styles: [
			{elementType: 'geometry', stylers: [{color: '#242f3e'}]},
			{elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
			{elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
			{
			  featureType: 'administrative.locality',
			  elementType: 'labels.text.fill',
			  stylers: [{color: '#d59563'}]
			},
			{
			  featureType: 'poi',
			  elementType: 'labels.text.fill',
			  stylers: [{color: '#d59563'}]
			},
			{
			  featureType: 'poi.park',
			  elementType: 'geometry',
			  stylers: [{color: '#263c3f'}]
			},
			{
			  featureType: 'poi.park',
			  elementType: 'labels.text.fill',
			  stylers: [{color: '#6b9a76'}]
			},
			{
			  featureType: 'road',
			  elementType: 'geometry',
			  stylers: [{color: '#38414e'}]
			},
			{
			  featureType: 'road',
			  elementType: 'geometry.stroke',
			  stylers: [{color: '#212a37'}]
			},
			{
			  featureType: 'road',
			  elementType: 'labels.text.fill',
			  stylers: [{color: '#9ca5b3'}]
			},
			{
			  featureType: 'road.highway',
			  elementType: 'geometry',
			  stylers: [{color: '#746855'}]
			},
			{
			  featureType: 'road.highway',
			  elementType: 'geometry.stroke',
			  stylers: [{color: '#1f2835'}]
			},
			{
			  featureType: 'road.highway',
			  elementType: 'labels.text.fill',
			  stylers: [{color: '#f3d19c'}]
			},
			{
			  featureType: 'transit',
			  elementType: 'geometry',
			  stylers: [{color: '#2f3948'}]
			},
			{
			  featureType: 'transit.station',
			  elementType: 'labels.text.fill',
			  stylers: [{color: '#d59563'}]
			},
			{
			  featureType: 'water',
			  elementType: 'geometry',
			  stylers: [{color: '#17263c'}]
			},
			{
			  featureType: 'water',
			  elementType: 'labels.text.fill',
			  stylers: [{color: '#515c6d'}]
			},
			{
			  featureType: 'water',
			  elementType: 'labels.text.stroke',
			  stylers: [{color: '#17263c'}]
			}
		  ]
		});
		var myLatlng = new google.maps.LatLng(42.487796,-71.197575);
		var marker = new google.maps.Marker({
			position: myLatlng,
			title:"Hello World!"
		});
		marker.setMap(map);
	  }
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMdUbaQDc7O5lmB1Q6CgiivwiFqlVaaYM&callback=initMap"
	async defer></script>

</div>
