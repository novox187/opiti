var simplemaps_worldmap_mapdata = {

	main_settings:{
		//General settings
		width: 'responsive', //or 'responsive'
		background_color: '#FFFFFF',	
		background_transparent: 'yes',
		border_color: '#ffffff',
		popups: 'detect', //on_click, on_hover, or detect
	
		//State defaults
		state_description:   'Proximamente',
		state_color: '#2c2d2e',
		state_hover_color: '#2c2d2e',
		state_url: '',
		border_size: 1,		
		all_states_inactive: 'no',
		all_states_zoomable: 'no',		
		
		//Location defaults
		location_description:  'Ecuador',
		location_color: '#f41',
		location_opacity: .3,
		location_hover_opacity: 1,
		location_url: '',
		location_size: 5,
		location_type: 'image', // circle, square, image
		location_image_url:'https://opiti.online/public/img/rusia/clip.png',
		location_image_source: '', //name of image in the map_images folder		
		location_border_color: '#FFFFFF',
		location_border: 5,
		location_hover_border: 2.5,				
		all_locations_inactive: 'no',
		all_locations_hidden: 'no',
		
		//Labels
		label_color: '#d5ddec',	
		label_hover_color: '#d5ddec',		
		label_size: 22,
		label_font: 'Arial',
		hide_labels: 'no',
		
		//Zoom settings
		zoom: 'no', //use default regions
		all_states_zoomable: 'yes',
		back_image: 'no', //Use image instead of arrow for back zoom				
		initial_back: 'no', //Show back button when zoomed out and do this JavaScript upon click		
		initial_zoom: -1,  //-1 is zoomed out, 0 is for the first continent etc	
		initial_zoom_solo: 'no', //hide adjacent states when starting map zoomed in
		region_opacity: 1,
		region_hover_opacity: .6,
		zoom_out_incrementally: 'yes',  // if no, map will zoom all the way out on click
		zoom_percentage: .99,
		zoom_time: .5, //time to zoom between regions in seconds
		
		//Popup settings
		popup_color: 'white',
		popup_opacity: .9,
		popup_shadow: 1,
		popup_corners: 5,
		popup_font: '12px/1.5 Verdana, Arial, Helvetica, sans-serif',
		popup_nocss: 'no', //use your own css	
		
		//Advanced settings
		div: 'map',
		auto_load: 'yes',		
		url_new_tab: 'yes', 
		images_directory: 'default', //e.g. 'map_images/'
		fade_time:  .1, //time to fade out		
		link_text: 'View Website'  //Text mobile browsers will see for links	
	},

	state_specific: {
		"AF":{
			name: "Afghanistan",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"AO":{
			name: "Angola",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"AL":{
			name: "Albania",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"AE":{
			name: "United Arab Emirates",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"AR":{
			name: "Argentina",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"AM":{
			name: "Armenia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"AU":{
			name: "Australia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"AT":{
			name: "Austria",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"AZ":{
			name: "Azerbaijan",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"BI":{
			name: "Burundi",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"BE":{
			name: "Belgium",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"BJ":{
			name: "Benin",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"BF":{
			name: "Burkina Faso",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"BD":{
			name: "Bangladesh",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"BG":{
			name: "Bulgaria",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"BH":{
			name: "Bahrain",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},    
		"BA":{
			name: "Bosnia and Herzegovina",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"BY":{
			name: "Belarus",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"BZ":{
			name: "Belize",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"BO":{
			name: "Bolivia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"BR":{
			name: "Brazil",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"BN":{
			name: "Brunei Darussalam",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"BT":{
			name: "Bhutan",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"BW":{
			name: "Botswana",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"CF":{
			name: "Central African Republic",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"CA":{
			name: "Canada",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"CH":{
			name: "Switzerland",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"CL":{
			name: "Chile",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"CN":{
			name: "China",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"CI":{
			name: "Côte d'Ivoire",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"CM":{
			name: "Cameroon",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"CD":{
			name: "Democratic Republic of the Congo",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"CG":{
			name: "Republic of Congo",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"CO":{
			name: "Colombia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"CR":{
			name: "Costa Rica",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"CU":{
			name: "Cuba",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"CZ":{
			name: "Czech Republic",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"DE":{
			name: "Germany",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"DJ":{
			name: "Djibouti",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"DK":{
			name: "Denmark",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"DO":{
			name: "Dominican Republic",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"DZ":{
			name: "Algeria",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"EC":{
			name: "Ecuador",
			description: "Punto de partida",
			color: "#f41",
			hover_color: "#2c2d2e",
			url: "default"
		},
		"EG":{
			name: "Egypt",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"ER":{
			name: "Eritrea",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"EE":{
			name: "Estonia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"ET":{
			name: "Ethiopia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"FI":{
			name: "Finland",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"FJ":{
			name: "Fiji",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"GA":{
			name: "Gabon",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"GB":{
			name: "United Kingdom",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"GE":{
			name: "Georgia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"GH":{
			name: "Ghana",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"GN":{
			name: "Guinea",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"GM":{
			name: "The Gambia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"GW":{
			name: "Guinea-Bissau",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"GQ":{
			name: "Equatorial Guinea",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"GR":{
			name: "Greece",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"GL":{
			name: "Greenland",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"GT":{
			name: "Guatemala",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"GY":{
			name: "Guyana",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"HN":{
			name: "Honduras",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"HR":{
			name: "Croatia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"HT":{
			name: "Haiti",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"HU":{
			name: "Hungary",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"ID":{
			name: "Indonesia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"IN":{
			name: "India",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"IE":{
			name: "Ireland",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"IR":{
			name: "Iran",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"IQ":{
			name: "Iraq",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"IS":{
			name: "Iceland",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"IL":{
			name: "Israel",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"IT":{
			name: "Italy",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"JM":{
			name: "Jamaica",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"JO":{
			name: "Jordan",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"JP":{
			name: "Japan",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"KZ":{
			name: "Kazakhstan",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"KE":{
			name: "Kenya",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"KG":{
			name: "Kyrgyzstan",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"KH":{
			name: "Cambodia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"KR":{
			name: "Republic of Korea",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"XK":{
			name: "Kosovo",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"KW":{
			name: "Kuwait",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"LA":{
			name: "Lao PDR",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"LB":{
			name: "Lebanon",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"LR":{
			name: "Liberia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"LY":{
			name: "Libya",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"LK":{
			name: "Sri Lanka",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"LS":{
			name: "Lesotho",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"LT":{
			name: "Lithuania",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"LU":{
			name: "Luxembourg",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"LV":{
			name: "Latvia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"MA":{
			name: "Morocco",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"MD":{
			name: "Moldova",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"MG":{
			name: "Madagascar",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"MX":{
			name: "Mexico",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"MK":{
			name: "Macedonia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"ML":{
			name: "Mali",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"MM":{
			name: "Myanmar",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"ME":{
			name: "Montenegro",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"MN":{
			name: "Mongolia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"MZ":{
			name: "Mozambique",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"MR":{
			name: "Mauritania",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"MW":{
			name: "Malawi",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"MY":{
			name: "Malaysia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"NA":{
			name: "Namibia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"NE":{
			name: "Niger",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"NG":{
			name: "Nigeria",
			description: "default",
			color: "default",
			hover_color: "#f41",
			url: "default",
			/* zoomable:'no' */
		},
		"NI":{
			name: "Nicaragua",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"NL":{
			name: "Netherlands",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"NO":{
			name: "Norway",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"NP":{
			name: "Nepal",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"NZ":{
			name: "New Zealand",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"OM":{
			name: "Oman",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"PK":{
			name: "Pakistan",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"PA":{
			name: "Panama",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"PE":{
			name: "Peru",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"PH":{
			name: "Philippines",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"PG":{
			name: "Papua New Guinea",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"PL":{
			name: "Poland",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"KP":{
			name: "Dem. Rep. Korea",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"PT":{
			name: "Portugal",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"PY":{
			name: "Paraguay",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"PS":{
			name: "Palestine",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"QA":{
			name: "Qatar",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"RO":{
			name: "Romania",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"RU":{
			name: "Rusia",
			description: "Haz click </br> Viaja a tu destino de forma digital",
			color: "#f41",
			hover_color: "#2c2d2e",
			url: "#descripcion",
			/* zoomable:'no' */
		},
		"RW":{
			name: "Rwanda",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"EH":{
			name: "Western Sahara",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"SA":{
			name: "Saudi Arabia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"SD":{
			name: "Sudan",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"SS":{
			name: "South Sudan",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"SN":{
			name: "Senegal",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"SL":{
			name: "Sierra Leone",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"SV":{
			name: "El Salvador",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"RS":{
			name: "Serbia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"SR":{
			name: "Suriname",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"SK":{
			name: "Slovakia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"SI":{
			name: "Slovenia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"SE":{
			name: "Sweden",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"SZ":{
			name: "Swaziland",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"SY":{
			name: "Syria",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"TD":{
			name: "Chad",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"TG":{
			name: "Togo",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"TH":{
			name: "Thailand",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"TJ":{
			name: "Tajikistan",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"TM":{
			name: "Turkmenistan",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"TL":{
			name: "Timor-Leste",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"TN":{
			name: "Tunisia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"TR":{
			name: "Turkey",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"TW":{
			name: "Taiwan",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"TZ":{
			name: "Tanzania",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"UG":{
			name: "Uganda",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"UA":{
			name: "Ukraine",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"UY":{
			name: "Uruguay",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"US":{
			name: "United States",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"UZ":{
			name: "Uzbekistan",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"VE":{
			name: "Venezuela",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"VN":{
			name: "Vietnam",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"VU":{
			name: "Vanuatu",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"YE":{
			name: "Yemen",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"ZA":{
			name: "South Africa",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"ZM":{
			name: "Zambia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"ZW":{
			name: "Zimbabwe",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"SO":{
			name: "Somalia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"GF":{
			name: "France",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"FR":{
			name: "France",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"ES":{
			name: "Spain",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"AW":{
			name: "Aruba",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"AI":{
			name: "Anguilla",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"AD":{
			name: "Andorra",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"AG":{
			name: "Antigua and Barbuda",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"BS":{
			name: "Bahamas",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"BM":{
			name: "Bermuda",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"BB":{
			name: "Barbados",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"KM":{
			name: "Comoros",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"CV":{
			name: "Cape Verde",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"KY":{
			name: "Cayman Islands",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"DM":{
			name: "Dominica",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"FK":{
			name: "Falkland Islands",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"FO":{
			name: "Faeroe Islands",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"GD":{
			name: "Grenada",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"HK":{
			name: "Hong Kong",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"KN":{
			name: "Saint Kitts and Nevis",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"LC":{
			name: "Saint Lucia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"LI":{
			name: "Liechtenstein",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"MF":{
			name: "Saint Martin (French)",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"MV":{
			name: "Maldives",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"MT":{
			name: "Malta",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"MS":{
			name: "Montserrat",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"MU":{
			name: "Mauritius",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"NC":{
			name: "New Caledonia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"NR":{
			name: "Nauru",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"PN":{
			name: "Pitcairn Islands",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"PR":{
			name: "Puerto Rico",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"PF":{
			name: "French Polynesia",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"SG":{
			name: "Singapore",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"SB":{
			name: "Solomon Islands",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"ST":{
			name: "São Tomé and Principe",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"SX":{
			name: "Saint Martin (Dutch)",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"SC":{
			name: "Seychelles",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"TC":{
			name: "Turks and Caicos Islands",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"TO":{
			name: "Tonga",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"TT":{
			name: "Trinidad and Tobago",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"VC":{
			name: "Saint Vincent and the Grenadines",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"VG":{
			name: "British Virgin Islands",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"VI":{
			name: "United States Virgin Islands",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"CY":{
			name: "Cyprus",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"RE":{
			name: "Reunion (France)",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"YT":{
			name: "Mayotte (France)",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"MQ":{
			name: "Martinique (France)",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"GP":{
			name: "Guadeloupe (France)",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"CW":{
			name: "Curaco (Netherlands)",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		},
		"IC":{
			name: "Canary Islands (Spain)",
			description: "default",
			color: "default",
			hover_color: "default",
			url: "default",
			zoomable:'no'
		}
	},
	
	
	locations:{ 
		ec: { 
			name: 'Ecuador',
			lat: '-1.100',
			lng: '-78.333333333',
			color: 'default',
			description: 'Punto de partida',
			size:8,
			url: 'default'
			
		},
		ru: { 
			name: 'Rusia',
			lat: '65.100',
			lng: '95.333333333',
			color: 'default',
			description: 'Viaja a tu destino de forma digital',
			size:20,
			url: 'default'
		}
	}


}	//end of simplemaps_worldmap_mapdata


