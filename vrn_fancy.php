<?php
	$vrn = "";
	if(isset($_POST['submit_data']))
	{
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

	$number_type= $_POST['number_type'];
	#echo "Number Type: $number_type";
	$fancy_num_type = $_POST['discountselection'];
	#echo "Fancy number type: $fancy_num_type";
	#$a = "andhra pradesh";
	$a = $_POST['state_name'];
	$s = strtolower($a);
	$state_replace = str_replace(' ', '', $s);
	$state_name = $States[$state_replace];  	#AP
	#echo "State name: $state_name\n";
	#$b = "eastgodavari";
	$b = $_POST['district_name'];
	$district_lower = strtolower($b);
	$dist_replace= str_replace(' ', '', $district_lower);
	$dist_name = $$state_name[$dist_replace];
	#echo "District name: $dist_name";
	
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
	
	function general_number()
	{
		$random_vehicle_number = rand(0, 9999);
		if ($random_vehicle_number < 1000 || $random_vehicle_number < 100 || $random_vehicle_number < 10)
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
		return $random_vehicle_number;
	}
	
	function years_series($fancy_num_type)
	{
		#To generate 1xxx series, 11xx series, 111x series numbers
		if ($fancy_num_type == '1s' || $fancy_num_type == '2s' || $fancy_num_type == '3s' || $fancy_num_type == '4s' || $fancy_num_type == '5s' || $fancy_num_type == '6s' || $fancy_num_type == '7s' || $fancy_num_type == '8s' || $fancy_num_type == '9s' || $fancy_num_type == '11s' || $fancy_num_type == '22s' || $fancy_num_type == '33s' || $fancy_num_type == '44s' || $fancy_num_type == '55s' || $fancy_num_type == '66s' || $fancy_num_type == '77s' || $fancy_num_type == '88s' || $fancy_num_type == '99s' || $fancy_num_type == '111s' || $fancy_num_type == '222s' || $fancy_num_type == '333s' || $fancy_num_type == '444s' || $fancy_num_type == '555s' || $fancy_num_type == '666s' || $fancy_num_type == '777s' || $fancy_num_type == '888s' || $fancy_num_type == '999s')
		{
			$nmbr_str = str_split($fancy_num_type);
			if (strlen($fancy_num_type) == 2)
			{
				$yr_series = $nmbr_str[0] . $nmbr_str[0] . $nmbr_str[0] . $nmbr_str[0];
				return $yr_series;
			}
			elseif(strlen($fancy_num_type) == 3)
			{
				$last_nmbr = rand(10, 99);
				$yr_series = $nmbr_str[0] . $nmbr_str[1] . $last_nmbr;
				return $yr_series;
			}
			elseif(strlen($fancy_num_type) == 4)
			{
				$last_nmbr = rand(0, 9);
				$yr_series = $nmbr_str[0] . $nmbr_str[1] . $nmbr_str[2] . $last_nmbr;
				return $yr_series;
			}
		}
		
		#To generate year series numbers
		if ($fancy_num_type == "yr")
		{	
			$yr_series = rand(1900, 2099);
			return $yr_series;
		}	
		
		#To generate 2 sequence series numbers. Ex: 12, 56, 89, 01, 45 etc
		if ($fancy_num_type == "2sq")
		{
			$two_sq_series = rand(0,8);
			$second_nmbr = $two_sq_series + 1;
			$next_nmbr = rand(10, 99);
			$yr_series = $two_sq_series . $second_nmbr . $next_nmbr;
			return $yr_series;
		}	
		
		#To generate 3 sequence series numbers. Ex: 123, 567, 890, 012, 456 etc
		if ($fancy_num_type == "3sq")
		{
			$two_sq_series = rand(0,8);
			$second_nmbr = $two_sq_series + 1;
			$third_nmbr = $second_nmbr + 1;
			$len_check = $two_sq_series . $second_nmbr . $third_nmbr;
			if (strlen($len_check) <4)
			{
				$next_nmbr = rand(0, 9);
				$yr_series = $two_sq_series . $second_nmbr . $third_nmbr . $next_nmbr;
				return $yr_series;
			}
			else
			{
				$yr_series = $two_sq_series . $second_nmbr . $third_nmbr;
				return $yr_series;
			}
		}	
		
		#To generate 4 sequence series numbers. Ex: 1234, 5678, 8901, 0123, 4567 etc
		if ($fancy_num_type == "4sq")
		{
			$two_sq_series = rand(0,8);
			$second_nmbr = $two_sq_series + 1;
			$third_nmbr = $second_nmbr + 1;
			$len_check = $two_sq_series . $second_nmbr . $third_nmbr;
			if ($third_nmbr == 9)
			{
				$yr_series = $two_sq_series . $second_nmbr. $third_nmbr . 0;
				return $yr_series;
			}
			if (strlen($len_check) <4)
			{
				$fourth_nmbr = $third_nmbr + 1;
				$yr_series = $two_sq_series . $second_nmbr. $third_nmbr . $fourth_nmbr;
				return $yr_series;
			}
			else
			{
				$yr_series = $two_sq_series . $second_nmbr. $third_nmbr;
				return $yr_series;
			}
		}	
		else
		{
			# Return null if no condition matches
			$yr_series = "NULL";
			return $yr_series;
		}
	}	
	function vrn_status_check($vrn_data)
	{
		$conn = mysqli_connect("localhost", "root", "", "numbers");        
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. " . mysqlI_connect_error());
		}
		$status_check = mysqli_query($conn,"SELECT COUNT(*) as count FROM vrn_data WHERE vehicle_number='$vrn_data'");
		$row =  mysqli_fetch_assoc($status_check);
		return $row['count'];
	}
	
	function insert_vehicle_numbers($state_name, $district_name, $vehicle_number)
	{
		$conn = mysqli_connect("localhost", "root", "", "numbers");        
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
		$sql = "INSERT INTO `vrn_data` (`state`, `district`, `vehicle_number`) VALUES ('$state_name', '$district_name', '$vehicle_number')";
		if (mysqli_query($conn, $sql)){
           echo ""; 
		} else{
			echo "ERROR: Hush! Sorry $sql." . mysqli_error($conn);
		}
          
        // Close connection
        mysqli_close($conn);
	}
	
	#Calling general type function based on user selection
	if ($number_type == 'general')
	{
		$vrn_number = general_number();
	}
	if ($number_type == 'fancy')
	{
		$vrn_number = years_series($fancy_num_type);
	}
	$vrn = $state_name ." ". $dist_name ." ". $vehicle_str ." ". $vrn_number;
	$nmbr_sts_check = vrn_status_check($vrn);
	while ($nmbr_sts_check > 0)
	{
		if ($number_type == 'general')
		{
			$vrn_number = general_number();	
		}
		elseif ($number_type == 'fancy')
		{
			$vrn_number = years_series($fancy_num_type);
		}
		$vrn = $state_name ." ". $dist_name ." ". $vehicle_str ." ". $vrn_number;
		$nmbr_sts_check = vrn_status_check($vrn);
	}
	insert_vehicle_numbers($a, $b, $vrn);
	}
	}
?>

<html>	
	<head>
		<title>Vehicle Registration Number</title>
		<style>
		body 
			{
				
  				background-color:rgb(251,165,171);
				/* background-color: #3B9C9C; */
			}
			
		table {
			border-collapse: collapse;
			width: 45%;
			margin-left: auto;
			margin-right: auto;
		}

		th, td {
			padding: 8px;
			text-align: center;
			border-bottom: 1px solid #DDD;
			border: 1px solid black;
			border-collapse: collapse;
		}

		tr:hover {
			/*background-color: #D6EEEE; */
			background-color: #99C68E;
		}
		/* select { 
			text-indent: 20px; 
		} */
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script type="text/javascript">
			var unitLists = new Array(2) 
			unitLists["0"] = ["Select District"]; 			
			unitLists["Andhra Pradesh"] = ["Krishna","Guntur","Kadapa","Kurnool","Prakasam","Chittoor","Ananthapur"];
			unitLists["Bihar"] = ["111","222","333","444","555","666"];
 
 
 /* unitMenuChange() is called from the onchange event of a select element. 
 * param selectObj - the select object which fired the on change event. 
 */
			function unitMenuChange(selectObj) 
			{ 
    				var idx = selectObj.selectedIndex;
    				var which = selectObj.options[idx].value;
    				uList = unitLists[which];
    				var uc_selector = document.getElementById("uc_selector");
 
   			 	while (uc_selector.options.length > 0) 
				{ 
        				uc_selector.remove(0); 
    				}
    				var newOption;
    // create and add new options 
    				for (var i=0; i<uList.length; i++) 
				{
        				newOption = document.createElement("option"); 
        				newOption.value = uList[i];  
        				newOption.text=uList[i];
        				try 
					{ 
            					uc_selector.add(newOption); 
            				} 
        				catch (e) 
					{ 
            					uc_selector.appendChild(newOption);
            				} 
    				}
 			}
			</script>
			<script>
				$(document).ready(function(){     
				
				$('#discountselection').hide();
				
						$('#general').click(function(){
							$('#discountselection').hide();
						});
				
						$('#fancy').click(function(){
							$('#discountselection').show();
						});
				});
			</script>
	</head>
	<body>
		<br>
		<h2 align='center' style="color:black"> Vehicle Registration Number -Automated Number Generation</h2>
		<br>
		<form action="" method='POST'>
		<table>
		<tr style="background-color:#4CC417">
			<th>State</th>
			<th>District</th>
			<th>Number type</th>
		</tr>
		<tr>
    		<td><select name='state_name' style="width:150px;"  id="uc_selector_main" onchange="unitMenuChange(this);">
					<option value="0">Select State</option>
					<option value="Andhra Pradesh">Andhra Pradesh</option>
					<option value="Assam">Assam</option>
					<option value="Goa">Goa</option>
					<option value="Bihar">Bihar</option>
				</select>
			</td>
    		<td><select name='district_name' style="width:150px;" id="uc_selector">
    		<option value="0">Select District</option>
    		</select></td>
			<td>
				<input type='radio' id='general' name='number_type' value='general' checked>
				<label for='general'>General</label>
				<input type='radio' id='fancy' name='number_type' value='fancy'>
				<label for='fancy'>Fancy</label>
				<select name="discountselection" id="discountselection" style="max-width:100%;">
					<option value="" selected="selected">Select</option>
					<option value="1s">All 1s</option>
					<option value="2s">All 2s</option>
					<option value="3s">All 3s</option>
					<option value="4s">All 4s</option>
					<option value="5s">All 5s</option>
					<option value="6s">All 6s</option>
					<option value="7s">All 7s</option>
					<option value="8s">All 8s</option>
					<option value="9s">All 9s</option>
					<option value="11s">11xx series</option>
					<option value="22s">22xx series</option>
					<option value="33s">33xx series</option>
					<option value="44s">44xx series</option>
					<option value="55s">55xx series</option>
					<option value="66s">66xx series</option>
					<option value="77s">77xx series</option>
					<option value="88s">88xx series</option>
					<option value="99s">99xx series</option>
					<option value="111s">111x series</option>
					<option value="222s">222x series</option>
					<option value="333s">333x series</option>
					<option value="444s">444x series</option>
					<option value="555s">555x series</option>
					<option value="666s">666x series</option>
					<option value="777s">777x series</option>
					<option value="888s">888x series</option>
					<option value="999s">999x series</option>
					<option value="2sq">2s sequence</option>
					<option value="3sq">3s sequence</option>
					<option value="4sq">4s sequence</option>
					<option value="yr">Years</option>
				</select> 
			</td>
		</tr>
		<tr>
			<td colspan='3'><input align='center' type="submit" name='submit_data' value="Generate Number"></td>
		</tr>
		</table>
		<br>
		<p style="text-align:center">
		<?php 
			if ($vrn != "")
			{
				echo "Vehicle Number is: $vrn\n";
			}
		?>
		</p>
		</form>
	</body>
</html>
