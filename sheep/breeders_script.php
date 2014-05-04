<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	
	require('../../../wp-load.php');
	global $wpdb;
	
	//Flush breeders table
	$wpdb->query("DELETE FROM oves_breeders") or die("Query failed due to: ".mysql_error());
	
	//Fetch XML data. Requires allow_fopen_url on server to be set to 'Allow'.
	$url = "https://www.foreninglet.dk/webservices/memberlist?club_id=1290&webservice_key=59accac96c&version=5";
	$xml = simplexml_load_file($url);
	
	/*Insert data from XML into breeders table*/
	$query = "INSERT INTO oves_breeders (MemberId,MemberCode,FirstName,LastName,
	Address,Address2,Zip,City,CountryCode,Email,Birthday,Gender,Phone,Mobile,EnrollmentDate,
	DeliveryMethod,PbsAgreementNumber,Note,Password,Saldo,SaldoDueDate,MemberField1,
	MemberField2,MemberField3,MemberField4,MemberField5,MemberField6,MemberField7,MemberField8,
	MemberField9,MemberField10) VALUES ";
	foreach($xml->Member as $member){
		$query .= sprintf(
			"\n('%s','%s','%s','%s','%s','%s','%d','%s','%d','%s','%s','%s','%d','%d','%s','%d','%s','%s','%s',
			'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s'),",
			$member->MemberId,
			$member->MemberCode,
			$member->FirstName,
			$member->LastName,
			$member->Address,
			$member->Address2,
			$member->Zip,
			$member->City,
			$member->CountryCode,
			$member->Email,
			$member->Birthday,
			$member->Gender,
			$member->Phone,
			$member->Mobile,
			$member->EnrollmentDate,
			$member->DeliveryMethod,
			$member->PbsAgreementNumber,
			$member->Note,
			$member->Password,
			$member->Saldo,
			$member->SaldoDueDate,
			$member->MemberField1,
			$member->MemberField2,
			$member->MemberField3,
			$member->MemberField4,
			$member->MemberField5,
			$member->MemberField6,
			$member->MemberField7,
			$member->MemberField8,
			$member->MemberField9,
			$member->MemberField10
		);
	}
	
	$query = rtrim($query, ',') . ';';
	$wpdb->query($query) or die ( "Query failed due to: ".mysql_error());
			
	//Clean users table.
	$wpdb->query("DELETE FROM oves_users WHERE ID != 1");
	
	//Reset ID.
	$wpdb->query("ALTER TABLE oves_users DROP COLUMN ID");
	$wpdb->query("ALTER TABLE  `oves_users` ADD  `ID` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST;
				") or die ("ID refresh failed: ".mysql_error());
	
	$new_pass = wp_hash_password("LAM13");
				
	//Re-insert. Change to REPLACE?
	$insert_names = $wpdb->query("
			INSERT INTO oves_users
			(user_login,user_nicename,user_email,user_registered,display_name)
			SELECT Email,FirstName,Email,EnrollmentDate,FirstName
			FROM oves_breeders
			") or die ("Insert failed: ".mysql_error());
			$set_pass = $wpdb->query("UPDATE oves_users
			SET user_pass = '" . $new_pass .
			"' WHERE ID != 1") or die ("Password creation failed: ".mysql_error());
?>
