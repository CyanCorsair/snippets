<?php
/*
Template Name: Medlemmer
*/
?>
<?php get_header(); ?>
<h1 id="headline-medlemmer">- MEDLEMSLISTE -</h1>
<section id="content-medlemmer">
	<div id="information">
		<img class="medlem_header_img" src="http://bakziehost.com/oves/wordpress/wp-content/uploads/2014/03/top_banner.jpg" alt="Vores medlemmer">
		<h1 class="medlems_headtext">Medlemsliste</h1>
		<div id="par_one">Udover de medlemsfordele, der er beskrevet under ”Bliv medlem”, har du som medlem adgang til nogle serviceydelser, 
		der kræver at du først logger dig ind enten på forsiden eller herunder. 
		Du logger ind med din mailadresse i første linje og et kodeord i den anden linje. 
		Kodeordet som skiftes jævnligt finder du på side 3 i medlemsbladet.
		<p id="par_two">Når du er logget ind kan du bl.a. hente<br/><br/>
		•	MEDLEMLISTE med oplysninger om bl.a. navn og adresse, race og M3-status på foreningens medlemmer<br/><br/>
		•	Referat fra generalforsamlingen<br/><br/>
		Kan du som medlem ikke logge dig ind, kan det skyldes, at vi ikke har din mailadresse. Kontakt: Birte Rasmussen, <a href="mailto:fynskefaareavlere@gmail.com">fynskefaareavlere@gmail.com</a>, tlf. 7594 3088.
		</p>
		</div>
		<?php if (!is_user_logged_in()){ echo '<p id="par_three">
		<span class="bliv-medlem-text">Bliv medlem</span><br/><br/>Som medlem af FYNSKE FÅREAVLERE får du bl.a. vort medlemsblad 4 gange årligt, 
		mulighed for at annoncere gratis fra medlem til medlem, tilbud om kurser etc.<br/><a class="medlem-read-btn" href="http://fynskefaareavlere.dk/om-os/"><img src="'; bloginfo('stylesheet_directory'); echo '/images/laes_mere.png"></a> <br/><br/>
		Det er nemt at blive medlem af FYNSKE FÅREAVLERE. Du skal blot udfylde felterne i nedenstående boks og trykke send. 
		Du vil herefter modtage vort seneste medlemsblad, foreningens vedtægter og faktura på kontingentet, som p.t. er kr. 175 pr. år.
		<br/>
		<a class="medlem-bliv-btn" id="medlem_tilmeld" href="#"><img src="'; bloginfo('stylesheet_directory'); echo '/images/bliv_medlem.png"></a></p>';
		}
		?>
	</div>
	<?php if (is_user_logged_in()){
	echo
	'<div id="member_table_container">';
			$xml_feed_url = 'https://www.foreninglet.dk/webservices/memberlist?club_id=1290&webservice_key=59accac96c&version=5';
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $xml_feed_url);
			curl_setopt($ch, CURLOPT_HEADER, false);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$xml = curl_exec($ch);
			curl_close($ch);
			
			function produce_XML_tree($rawXML) {
				libxml_use_internal_errors(true);
				try {
					$xmlTree = new SimpleXMLElement($rawXML);
				} catch (Exception $e) {
					$error_message = 'SimpleXMLElement threw an exception.';
					foreach(libxml_get_errors() as $error_line) {
						$error_message .= "\t" . $error_line->message;
					}
					trigger_error($error_message);
					return false;
					}
				return $xmlTree;
				}
			$feed = produce_XML_tree($xml);	
			
			function clean_xml($text, $length = 0) {
				$html = html_entity_decode($text, ENT_QUOTES, 'UTF-8');
				$text = strip_tags($html);
				if ($length > 0 && strlen($text) > $length) {
					$cut_point = strrpos(substr($text, 0, $length), ' ');
					$text = substr($text, 0, $cut_point) . '...';
				}
				$text = htmlentities($text, ENT_QUOTES, 'UTF-8');
				return $text;
			}
			
			foreach($feed->Member as $member){
				echo '<dl class="member_table">';
					if (strlen($member->FirstName) > 0){
						$safeFN = clean_xml($member->FirstName);
						echo '<li>Fornavn: '.$safeFN.'</li>';
					}
					if (strlen($member->LastName) > 0){
						$safeLN = clean_xml($member->LastName);
						echo '<li>Efternavn: '.$safeLN.'</li>';
					}
					if (strlen($member->Address) > 0){
						$safeADI = clean_xml($member->Address);
						echo '<li>Adresse: '.$safeADI.'</li>';
					}
					if (strlen($member->Address2) > 0){
						$safeADII = clean_xml($member->Address2);
						echo '<li>Adresse 2: '.$safeADII.'</li>';
					}
					if (strlen($member->Zip) > 0){
						$safeZip = clean_xml($member->Zip);
						echo '<li>Zip: '.$safeZip.'</li>';
					}
					if (strlen($member->City) > 0){
						$safeCity = clean_xml($member->City);
						echo '<li>By: '.$safeCity.'</li>';
					}
					if (strlen($member->Email) > 0){
						$safeEm = clean_xml($member->Email);
						echo '<li>Email: '.$safeEm.'</li>';
					}
					if (strlen($member->Phone) > 0){
						$safePh = clean_xml($member->Phone);
						echo '<li>Telefon nr.: '.$safePh.'</li>';
					}
					if (strlen($member->Mobile) > 0){
						$safeMo = clean_xml($member->Mobile);
						echo '<li>Mobil nr.: '.$safeMo.'</li>';
					}
					if (strlen($member->MemberField2) > 0){
						$safeMF2 = clean_xml($member->MemberField2);
						echo '<li>Race: '.$safeMF2.'</li>';
					}
					if (strlen($member->MemberField3) > 0){
						$safeMF3 = clean_xml($member->MemberField3);
						echo '<li>Maedistatus: '.$safeMF3.'</li>';
					}
					if (strlen($member->MemberField4) > 0){
						$safeMF4 = clean_xml($member->MemberField4);
						echo '<li>Antal dyr: '.$safeMF4.'</li>';
					}
				echo '</dl>';
				echo '<hr>';
			}
	echo '</div>';
	} else {
	echo '<div id="log_in">
		<p class="medlem_text_big">Medlemsliste</p>
		<p class="medlem_text_small">Log ind for et se vores medlemmer</p>
		<a style="padding-top:1rem;*padding-top:1em;display:block;position:relative;left:50%;margin-left:-74px" href="http://fynskefaareavlere.dk/wp-login.php"><p class="button-primary"></p></a>
	</div>';} 
?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

<style>
#copyright{
	display:none;
}
</style>