<html>
<body>
<?php
	$States = array("andamanandnicobar"=> 'AN', "andhrapradesh"=> 'AP', "arunachalpradesh"=> 'AR', "assam"=> 'AS',
              "bihar"=> 'BR', "chandigarh"=> 'CH', "dadraandnagarhaveli"=> 'DN', "damananddiu"=> 'DD', "delhi"=> 'DL',
              "goa"=> 'GA', "gujarat"=> 'GJ', "haryana"=> 'HR', "himachalpradesh"=> 'HP', "jammuandkashmir"=> 'JK',
              "karnataka"=> 'KA', "kerala"=> 'KL', "lakshadweep"=> 'LD', "madhyapradesh"=> 'MP', "maharashtra"=> 'MH',
              "manipur"=> 'MN', "meghalaya"=> 'ML', "mizoram"=> 'MZ', "nagaland"=> 'NL', "orissa"=> 'OR',
              "pondicherry"=> 'PY', "punjab"=> 'PN', "rajasthan"=> 'RJ', "sikkim"=> 'SK', "tamilNadu"=> 'TN',
              "tripura"=> 'TR', "uttarpradesh"=> 'UP', "westbengal"=> 'WB');
	$AN = array("portblair"=>1,"andaman"=>1,"carnicobar"=>2,"nicobar"=>2);
	$AP = array("adilabad"=> 1, "ananthapur"=> 2, "chittoor"=> 3, "kadapa"=> 4, "eastgodavari"=> array(5, 6), "guntur"=> array(7,8),
          "hyderabad"=> array(9, 10, 11, 12, 13, 14), "karimnagar"=> 15, "krishna"=> array(16, 17, 18, 19), "khammam"=> 20,
          "kurnool"=> 21, "mahaboobnagar"=> 22, "medak"=> 23, "nalgonda"=> 24, "nizamabad"=> 25, "nellore"=> 26,
          "prakasam"=> 27, "rangareddy"=> array(28, 29), "srikakulam"=> 30, "visakhapatnam"=> array(31, 32, 33, 34),
          "vizianagaram"=> 35, "warangal"=> 36, "westgodavari"=> array(37, 38));
    $AR = array("itanagar"=> array(1,2), "pasighat"=> 9, "anini"=> 10, "tawang"=> 3, "lohit"=> 11, "bomdila"=> 4, "changlang"=> 12,
          "seppa"=> 5, "khonsa"=> 13, "ziro"=> 6, "yingkiong"=> 14, "daporijo"=> 7, "kurungkumey"=> 15, "along"=> 8,
          "roing"=> 16);
    $AS = array("guwahati"=> 1, "kamrup"=>1, "nagaon"=>2, "jorhat"=> 3, "sibsagar"=> 4, "golaghat"=> 5, "dibrugarh"=> 6, "lakhimpur"=> 7,
           "dimahasao"=>8, "karbianglong"=>9, "karimganj"=>10, "cachar"=>11, "sonitpur"=>12, "darrang"=>13, "nalbari"=>14, "barpeta"=>15,
           "kokrajhar"=>16, "dhubri"=>17, "goalpara"=>18, "bongaigaon"=>19, "assamstatetransportcorporation"=>20,"astc"=>20,
           "marigaon"=>21, "dhemaji"=>22, "tinsukia"=>23, "hailakandi"=>24, "kamruprural"=>25,  "chirang"=>26, "udalguri"=>27, "baksa"=>28,
            "assam"=>29, "assampolicevehicles"=>array(30,31));
    $BR = array("patna"=> 1,"sitamarhi"=> 30,"gaya"=> 2,"vaishali"=>31,"bhojpur"=>3,"madhubani"=>32,"chapra"=>4,"samastipur"=>33,"motihari"=>5,"khagaria"=>34,"muzaffarpur"=>6,"kishanganj"=>37,"darbhanga"=>7,"araria"=>38,"munger"=>8,"katihar"=>39,"begusarai"=>9,"madhepura"=>43,"bhagalpur"=>10,"buxar"=>44,"purnea"=>11,"bhabua"=>45,"saharsa"=>19,"jamui"=>46,"nalanda"=>21,"supaul"=>50,"bettiah"=>22,"banka"=>51,"dehri"=>24,"sheikhpura"=>52,"jehanabad"=>25,"lakhisarai"=>53,"aurangabad"=>26,"sheohar"=> 55, "nawada"=> 27, "arwal"=> 56, "gopalganj"=> 28, "rohtas"=> 57, "siwan"=> 29);
    $CH = array("chandigarh"=>array(1,3,4),"commercialvehicles"=>2);
    $DN = array("dadraandnagarhaveli"=>9);
    $DD = array("diu"=>2,"daman"=>3);
    $DL = array("northdelhi"=>1,"newdelhi"=>2,"southdelhi"=>3,"janakpuriwest"=>4,"northeastdelhi"=>5,"centraldelhi"=>6,"eastdelhi"=>7,"northwestdelhi"=>8,"southwestdelhi"=>9,"westdelhi"=>10,"rohini"=>11,"vasantvihar"=>12,"surajmalvihar"=>13,"sonipat"=>14,"gurgaon"=>15,"faridabad"=>16,"noida"=>17,"ghaziabad"=>18);
    $GA = array("panajinorthgoa"=>1,"margao"=>2,"mapusa"=>3,"bicholim"=>4,"ponda"=>5,"vasco"=>6,"panaji"=>7,"margao"=>8,"quepem"=>9,"canacona"=>10,"pernem"=>11,"dharbandora"=>12);
    $GJ = array("ahmedabad"=>1,"bardoli"=>19,"dahod"=>20,"mehsana"=>2,"navsari"=>21,"rajkot"=>3,"rajpipla"=>22,"bhavnagar"=>4,"anand"=>23,"surat"=>5,"patan"=>24,"vadodara"=>6,"porbander"=>25,"nadiad"=>7,"vyara"=>26,"palanpur"=>8,"ahmedabadeast"=>27,"himmatnagar"=>9,"surat"=>28,"pal"=>28,"jamnagar"=>10,"vadodara"=>29,"darjipura"=>29,"junagadh"=>11,"ahvadang"=>30,"bhuj"=>12,"modasa"=>31,"arvalli"=>31,"surendranagar"=>13,"veraval"=>32,"girsomnath"=>32,"amreli"=>14,"botad"=>33,"valsad"=>15,"chhotaUdepur"=>34,"bharuch"=>16,"mahisagar"=>35,"lunawada"=>35,"godhra"=>17,"morbi"=>36,"gandhinagar"=>18,"khambhaliya"=>37,"bavla"=>38);
    $JK = array("srinagar"=>1,"poonch"=>12,"jammu"=>2,"pulwama"=>13,"anantnag"=>3,"udhampur"=>14,"budgam"=>4,"bandipora"=>15,"baramulla"=>5,"ganderbal"=>16,"doda"=>6,"kishtwar"=>17,"kargil"=>7,"kulgam"=>18,"kathua"=>8,"ramban"=>19,"kupwara"=>9,"reasi"=>20,"leh"=>10,"samba"=>21,"rajouri"=>11,"shopian"=>22);

	#$a = "andhra pradesh";
	$a = $_REQUEST['state_name'];
	$s = strtolower($a);
	$state_replace = str_replace(' ', '', $s);
	$state_name = $States[$state_replace];  	#AP
	echo "State name: $state_name\n";
	#$b = "eastgodavari";
	$b = $_REQEUST['district_name'];
	$dist_replace= str_replace(' ', '', $b);
	$dist_name = $$state_name[$dist_replace];
	echo "District name: $dist_name";
	
	if (is_array($dist_name))
	{
		$arr_count = count($dist_name);
		#echo "Array count: $arr_count\n";
		$random_int = rand(0, $arr_count-1);
		#echo "Random number: $random_int\n";
		$dist_name = $dist_name[$random_int];
		if (strlen($dist_name) == 1)
		{
			$dist_name = "0".$dist_name;
		}
		#echo "Disctrict code: $dist_name\n";
	}
	else
	{
		if (strlen($dist_name) == 1)
		{
			$dist_name = "0".$dist_name;
		}
		#echo "Distric name: $dist_name\n";
	}
	$random_chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$vehicle_str = '';
	for($i=0; $i< 2; $i++)
	{
		$vehicle_str .= $random_chars[rand(0, 25)];
	}
	#echo "Random string: $vehicle_str\n";
	$random_vehicle_number = rand(0, 9999);
	if ($random_vehicle_number < 1000 || $random_vehicle_number < 1000 || $random_vehicle_number < 1000)
	{
		if (strlen($random_vehicle_number) == 3)
		{
			$random_vehicle_number = "0".$random_vehicle_number;
		}
		if (strlen($random_vehicle_number) == 2)
		{
			$random_vehicle_number = "00".$random_vehicle_number;
		}
		if (strlen($random_vehicle_number) == 1)
		{
			$random_vehicle_number = "000".$random_vehicle_number;
		}
	}
	#echo "Random vehicle number: $random_vehicle_number\n";
	$vrn = $state_name ." ". $dist_name ." ". $vehicle_str ." ". $random_vehicle_number;
	echo "Vehicle Number is: $vrn\n";
	
?>
</body>
</html>
