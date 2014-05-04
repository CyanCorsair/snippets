<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PHP contact form for Krabby patties</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

  <style>
  input {
  	  width:301px;
  	  background:none repeat scroll 0 0 #ECECEE;
  	  color:#000;
  	  font-weight:normal;
  	  
  	  margin:5px 0;
  	  padding:8px;
  	  
  	  border:1px solid #E0E0E0;
  	  border-radius:2px 2px 2px 2px;
  }
  
  textarea {
  	  width:650px;
  	  background:none repeat scroll 0 0 #ECECEE;
  	  color:#000;
  	  font-weight:normal;
  	  
  	  margin:5px 0;
  	  margin-bottom:15px !important;
  	  padding:8px;
  	  
  	  border:1px solid #E0E0E0;
  	  border-radius:2px 2px 2px 2px; 
  	  resize:none;
  }
  
  select {
  	  background:none repeat scroll 0 0 #ECECEE;
  	  border:1px solid #E0E0E0;
  	  border-radius:2px 2px 2px 2px;
  	  
  	  font-size:13px;
  	  padding-top:7px;
  	  text-indent:0px;
  	  
  	  margin:5px 0;
  	  padding:8px;
  	  
  	  width:317px;
  	  height:34px;
  	  font-weight:normal;
  	  font-family:'MelbourneRegular', Arial, sans-serif; 
  }
  
  #send-btn {
  	  background:url("http://krabiexperience.com/wp-content/themes/welcome_inn-parent/images/buttons_bg.gif") no-repeat scroll 0 0 transparent;
  	  font-size:16px;
  	 
  	  margin-top:20px;
  	  padding-top:7px;
  	  padding-right:2px;
  	  text-indent:0px;
  	  
  	  width:93px;
  	  font-weight:normal;
  	  font-family:'MelbourneRegular', Arial, sans-serif;
  }
  
  #send-btn:hover {cursor:pointer;}
  
  #passen-submitno {
  	  background:none repeat scroll 0 0 #BBBBBB;
  	  border:0px solid #E0E0E0;
  	  border-radius:2px 2px 2px 2px;
  	  
  	  font-size:13px;
  	  padding-top:7px;
  	  text-indent:0px;
  	  
  	  width:54px;
  	  font-weight:normal;
  	  font-family:'MelbourneRegular', Arial, sans-serif;
  	  -webkit-transition:background 2s;
  	  transition:background 2s;
  }
  
  #passen-submitno:hover {
  	  background:none repeat scroll 0 0 #DDDDDD;
  	  cursor:pointer;
  }
  
  #reserv-form {
  	width:670px;
  	margin:0 auto;
  	position:relative;
  	
  	font-family:'Arial', 'Helvetica', sans-serif;
  	font-size:13px;
  }

  #name-mail {
  	width:100%;
  	height:3rem;
  	margin-bottom:30px;
  	display:inline-block;
  }

  .namefield {
  	float:left;
  }

  .email {
  	float:right;
  }

  #checkin-out {
  	width:100%;
  	height:3rem;
  	margin-bottom:30px;
  	display:inline-block;
  }

  .checkin {
  	float:left;
  }

  .checkout {
  	float:right;
  }

  #hotel-room {
  	width:100%;
  	height:3rem;
  	display:inline-block;
  }

  .hotel {
  	float:left;
  }

  #hotel-type {
  	float:left;
  }

  .roomtype {
  	float:right;
  	display:none;
  }

  #room-type {
  	float:right;
  }

  .namefield-two, .email-two, .phone, .passport {
  	display:inline-block;
  }
  
  .namefield-two, .phone {
  	float:left;
  }
  
  .email-two, .passport {
  	float:right;
  }
  
  .luggage {
  	  clear:both;
  }

  .message {
  	clear:both;
  }

  .attention {
  	margin-top:25px;
  	width:60%;
  	float:left;

  }

  .attn-img {
  	float:left;
  	margin-top:25px;
  	padding-right:25px;
  }

  #send-btn {
  	float:right;
  }

  #plane-ticket-form {
  	display:none;
  }

  #formfoot {
  	display:inline-block;
  	width:100%;
  	height:5rem;
  	border-top:1px dotted #000;
  	border-bottom: 1px dotted #000;
  }
  
  #error {
  	  width:100%;
  	  margin:0 auto;
  	  position:relative;
  	  border:1px solid black;
  	  text-align:center;
  	  display:none;
  }
  
  #ticketchecker {
  	  margin-top:30px;
  	  clear:both;
  }
  </style>
</head>
<body>
<form id="reserv-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validatePassengers()" method="POST">
<div id="error"></div>
<div id="name-mail">
	<p class="namefield">Navn:<br/>
	<input type="text" name="name" class="main-name"></p> 

	<p class="email">E-mail: <br/>
	<input type="text" name="email" class="main-mail"></p>
	</div>

	<div id="checkin-out">
	<p class="checkin">Vælg check-in dato: <br/>
	<input type="text" class="date-checkin" name="checkin" id="txtFromDate"></p>

	<p class="checkout">Vælg check-ud dato:<br/>
	 <input type="text" class="date-checkout" name="checkout" id="txtToDate"></p>
	</div>

	<div id="hotel-room">
	<p class="hotel">Hotel:<br/>
	<select id="hotel-type" name="hotelchoice" size="1" onchange="checkFormVal();">
	3
	<option value="hotel1">Hotel 1</option>
	4
	<option value="hotel2">Hotel 2</option>
	5
	<option value="hotel3">Hotel 3</option>
	6
	<option value="hotel4">Hotel 4</option>
	7
	</select>
	</p>

	<p class="roomtype">Værelsestype:<br/>
	<select id="room-type" name="roomchoice" size="1">
	<option value="single">Single</option>
	<option value="double">Double</option>
	<option value="3pers">3-person</option>
	<option value="4pers">4-person</option>
	</select>
	</p>
</div>

<p>Ønsker du også flybillet til ud- og hjemrejse? <input id="ticketchecker" type="checkbox" name="tickets" onchange="checkIfTickets();"></p>

<div id="plane-ticket-form">
<p id="passenger_no">Antal rejsende:<br/>
	<input type="text" name="passengers" id="passenform">
	<input id="passen-submitno" type="button" value="OK" onclick="passengerCheck()">
	</p>

	<div id="checkin-out-two">
	<p class="checkin">Vælg udrejse dato: <br/>
	<input type="text" class="date-depart" name="departure" id="leaveFromDate"></p>

	<p class="checkout">Vælg hjemrejse dato:<br/>
	 <input type="text" class="date-return" name="return" id="returnToDate"></p>
	</div>
</div>

<p class="message">Besked:<br/>
<textarea name="message" rows="10"></textarea></p>

<div id="formfoot">
	<img class="attn-img" src="http://krabiexperience.com/wp-content/themes/welcome_inn-parent/images/icon_warning.gif" alt="Attention!">
	<p class="attention">
	Vær opmærksom på at dette ikke er en endelig reservation, men blot en forespørgsel. Vi kontakter dig snarrest med en bekræftelse.</p>
	<input id="send-btn" type="submit" value="Send">
</div>
</form>
  <script>
  $(document).ready(function(){
    $("#txtFromDate").datepicker({
        numberOfMonths: 2,
        onSelect: function(selected) {
          $("#txtToDate").datepicker("option","minDate", selected)
        }
    });
    $("#txtToDate").datepicker({ 
        numberOfMonths: 2,
        onSelect: function(selected) {
           $("#txtFromDate").datepicker("option","maxDate", selected)
        }
    });
    
    $("#leaveFromDate").datepicker({
        numberOfMonths: 2,
        onSelect: function(selected) {
          $("#returnToDate").datepicker("option","minDate", selected)
        }
    });
    $("#returnToDate").datepicker({ 
        numberOfMonths: 2,
        onSelect: function(selected) {
           $("#leaveFromDate").datepicker("option","maxDate", selected)
        }
    });
});
  </script>

<script>
function passengerCheck(){
	var count = parseInt(document.getElementById("passenform").value);
	$('.passengerform').remove();
	for(var i = count; i > 0; i--) {
		$("<div class=\"passengerform\"><p class=\"namefield-two\">Navn:<br/><input class=\"passenger-name\" type=\"text\" name=\"passengerArray[]\"></p> <p class=\"email-two\">E-mail: <br/><input class=\"passenger-email\" type=\"text\" name=\"passengerArray[]\"></p><p class=\"phone\">Telefonnummer: <br/><input class=\"passenger-phone\" type=\"text\" name=\"passengerArray[]\"></p><p class=\"passport\">Pasnummer: <br/><input class=\"passenger-pass\" type=\"text\" name=\"passengerArray[]\"></p><p class=\"luggage\">Din bagage:<br/><select id=\"passenger-baggage\" name=\"passengerArray[]\" size=\"1\"><option value=\"small\">Single</option><option value=\"medium\">Double</option><option value=\"big\">3-person</option><option value=\"biggiesmalls\">4-person</option></select></div>").insertAfter("#passenger_no");
	}
}

function checkFormVal(){
	var hotel = document.getElementById("hotel-type");
	var hotelval = hotel.options[hotel.selectedIndex];
	if (hotelval.value == 'hotel2'){
		$(".roomtype").show();
	}
}

function checkIfTickets(){
	var ticket_checker = document.getElementById("ticketchecker");
	if (ticket_checker.checked){
		$("#plane-ticket-form").show();
		ticket_checker.value = "Yes";
	} else if (!ticket_checker.checked) {
		$("#plane-ticket-form").hide('slow');
	}
}

function validateEmail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
} 

function validatePassengers(){
	var truthCheck = true;
	var passengerData = new Array();
	var ticket_checker = document.getElementById("ticketchecker");
	
	var ck_email = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	
	if (ticket_checker.checked) {
		$('.passenger-name, .passenger-email, .passenger-phone, .passenger-pass, .main-name, .main-mail, .date-checkin, .date-checkout, .date-depart, .date-return').each(function(){
			if ($(this).hasClass('passenger-email') || $(this).hasClass('main-mail')){
				console.log("Running REGEX.");
				if (!validateEmail($(this).context.value)) {
				truthCheck = false; 
				}
			} else if ($(this).context.value == '') {
				truthCheck = false;
			} else {
				//Empty
			}
		});
	} else {
		$('.main-name, .main-mail, .date-checkin, .date-checkout').each(function(){
			if($(this).hasClass('main-mail')){
				if (!validateEmail($(this).context.value)) {
				truthCheck = false;
				}
			} else if ($(this).context.value == '') {
				truthCheck = false;
			} else {
				//Empty
			}
		});
	}
	
	if (truthCheck){
		$("#error").hide();
		return true;
	} else {
		$("#error").show();
		$("#error").html("<p>Der er fejl i indtastningen. Kontroller venligst at alle informationer er korrekte.</p>");
		return false;
	}
}
</script>
</body>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = sanitizeData($_POST['name']);
		$email = sanitizeData($_POST['email']);
		$checkin = sanitizeDates($_POST['checkin']);
		$checkout = sanitizeDates($_POST['checkout']);
		$hotel = sanitizeData($_POST['hotelchoice']);
		$room = sanitizeData($_POST['roomchoice']);

		$tickets = sanitizeData($_POST['tickets']);

		$departure = sanitizeDates($_POST['departure']);
		$return = sanitizeDates($_POST['return']);

		$message = sanitizeData($_POST['message']);

		$formcontent = "Reservation owners name: $name \n 
		Reservation owners email: $email \n
		Check-in: $checkin \n
		Check-out: $checkout \n
		Hotel: $hotel \n
		Room: $room \n
		";

		if ($tickets == "Yes") {
			$passengerArray = $_POST['passengerArray'];
			$passengerParser;
			$j = 1;
			$arrayLen = count($passengerArray);

			for ($i = 0; $i < $arrayLen; $i += 5) {
				$passengerParser = parsePassengers($i,$passengerArray, $j);
				$formcontent .= $passengerParser . "\n";
				$j++;
			}

			$formcontent .= "Departure date: $departure \n
			Return date: $return \n\n";
		}

		$formcontent .= "Message: $message";

		$recipient = "silest@live.com";

		$subject = "Booking for $name on $checkin";
		$mailheader = "From: $email \r\n";
		mail($recipient, $subject, $formcontent, $mailheader) or die ("Error!");
	}

	function parsePassengers($number,$arr,$j) {
		$passenger_name = "Passenger " . $j . " name: " . sanitizeData($arr[$number]) . "\n";
		$passenger_mail = "Passenger " . $j . " e-mail: " . sanitizeData($arr[$number+1]) . "\n";
		$passenger_phone = "Passenger " . $j . " telephone: " . sanitizeData($arr[$number+2]) . "\n";
		$passenger_pass = "Passenger " . $j . " passport: " . sanitizeData($arr[$number+3]) . "\n";
		$passenger_baggage = "Passenger " . $j . " baggage: " . sanitizeData($arr[$number+4]) . "\n";
		$passengerData = $passenger_name . $passenger_mail . $passenger_phone . $passenger_pass . $passenger_baggage;

		return $passengerData;
	}

	function sanitizeData($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	function sanitizeDates($data) {
		$data = trim($data);
		$data = htmlspecialchars($data);
		$pattern = "/";
		$cleaned = "-";
		$data = str_replace($pattern, $cleaned, $data);
		return $data;
	}
?>