<?php
	$vrn = "";
	if(isset($_POST['submit_data']))
	{
	$States = array("andamanandnicobar"=> 'AN', "andhrapradesh"=> 'AP', "arunachalpradesh"=> 'AR', "assam"=> 'AS',"bihar"=> 'BR', "chandigarh"=> 'CH', "dadraandnagarhaveli"=> 'DN', 
                  "damananddiu"=> 'DD', "delhi"=> 'DL',"goa"=> 'GA', "gujarat"=> 'GJ', "haryana"=> 'HR', "himachalpradesh"=> 'HP', "jammuandkashmir"=> 'JK',"karnataka"=> 'KA',"kerala"=> 'KL',
		  "lakshadweep"=> 'LD', "madhyapradesh"=> 'MP', "maharashtra"=> 'MH',"manipur"=> 'MN', "meghalaya"=> 'ML', "mizoram"=> 'MZ', "nagaland"=> 'NL',"odisa"=> 'OR',"jharkhand"=>'JH',
		  "pondicherry"=> 'PY', "punjab"=> 'PN', "rajasthan"=> 'RJ', "sikkim"=> 'SK', "tamilNadu"=> 'TN',"tripura"=> 'TR', "uttarpradesh"=> 'UP', "westbengal"=> 'WB',"uttarakhand"=>'UK');
	$AN = array("portblair"=>1,"andaman"=>1,"carnicobar"=>2,"nicobar"=>2);
	$AP = array("adilabad"=> 1, "ananthapur"=> 2, "chittoor"=> 3, "kadapa"=> 4, "eastgodavari"=> array(5, 6), "guntur"=> array(7,8),"hyderabad"=> array(9, 10, 11, 12, 13, 14),
	      "karimnagar"=> 15, "krishna"=> array(16, 17, 18, 19), "khammam"=> 20,"kurnool"=> 21, "mahaboobnagar"=> 22, "medak"=> 23, "nalgonda"=> 24, "nizamabad"=> 25, "nellore"=> 26,
	      "prakasam"=> 27, "rangareddy"=> array(28, 29), "srikakulam"=> 30, "visakhapatnam"=> array(31, 32, 33, 34),"vizianagaram"=> 35, "warangal"=> 36, "westgodavari"=> array(37, 38));
        $AR = array("itanagar"=> array(1,2), "pasighat"=> 9, "anini"=> 10, "tawang"=> 3, "lohit"=> 11, "bomdila"=> 4, "changlang"=> 12,"seppa"=> 5, "khonsa"=> 13, "ziro"=> 6,
	      "yingkiong"=> 14, "daporijo"=> 7, "kurungkumey"=> 15, "along"=> 8,"roing"=> 16);
        $AS = array("guwahati"=> 1, "kamrup"=>1, "nagaon"=>2, "jorhat"=> 3, "sibsagar"=> 4, "golaghat"=> 5, "dibrugarh"=> 6,"lakhimpur"=> 7,"dimahasao"=>8,"karbianglong"=>9,"karimganj"=>10,
	      "cachar"=>11, "sonitpur"=>12, "darrang"=>13, "nalbari"=>14, "barpeta"=>15,"kokrajhar"=>16, "dhubri"=>17, "goalpara"=>18, "bongaigaon"=>19,"assamstatetransportcorporation"=>20,
	      "astc"=>20,"marigaon"=>21, "dhemaji"=>22, "tinsukia"=>23, "hailakandi"=>24, "kamruprural"=>25,"chirang"=>26,"udalguri"=>27,"baksa"=>28,"assam"=>29,
	      "assampolicevehicles"=>array(30,31));
        $BR = array("patna"=> 1,"sitamarhi"=> 30,"gaya"=> 2,"vaishali"=>31,"bhojpur"=>3,"madhubani"=>32,"chapra"=>4,"samastipur"=>33,"motihari"=>5,"khagaria"=>34,"muzaffarpur"=>6,
	      "kishanganj"=>37,"darbhanga"=>7,"araria"=>38,"munger"=>8,"katihar"=>39,"begusarai"=>9,"madhepura"=>43,"bhagalpur"=>10,"buxar"=>44,"purnea"=>11,"bhabua"=>45,"saharsa"=>19,
	      "jamui"=>46,"nalanda"=>21,"supaul"=>50,"bettiah"=>22,"banka"=>51,"dehri"=>24,"sheikhpura"=>52,"jehanabad"=>25,"lakhisarai"=>53,"aurangabad"=>26,"sheohar"=> 55, "nawada"=> 27,
	      "arwal"=> 56,"gopalganj"=> 28, "rohtas"=> 57, "siwan"=> 29);
        $CH = array("chandigarh"=>array(1,3,4),"commercialvehicles"=>2);
    	$DN = array("dadraandnagarhaveli"=>9);
    	$DD = array("diu"=>2,"daman"=>3);
    	$DL = array("northdelhi"=>1,"newdelhi"=>2,"southdelhi"=>3,"janakpuriwest"=>4,"northeastdelhi"=>5,"centraldelhi"=>6,"eastdelhi"=>7,"northwestdelhi"=>8,"southwestdelhi"=>9,
	      "westdelhi"=>10,"rohini"=>11,"vasantvihar"=>12,"surajmalvihar"=>13,"sonipat"=>14,"gurgaon"=>15,"faridabad"=>16,"noida"=>17,"ghaziabad"=>18);
    	$GA = array("panajinorthgoa"=>1,"margao"=>2,"mapusa"=>3,"bicholim"=>4,"ponda"=>5,"vasco"=>6,"panaji"=>7,"margao"=>8,"quepem"=>9,"canacona"=>10,"pernem"=>11,"dharbandora"=>12);
    	$GJ = array("ahmedabad"=>1,"bardoli"=>19,"dahod"=>20,"mehsana"=>2,"navsari"=>21,"rajkot"=>3,"rajpipla"=>22,"bhavnagar"=>4,"anand"=>23,"surat"=>5,"patan"=>24,"vadodara"=>6,
	      "porbander"=>25,"nadiad"=>7,"vyara"=>26,"palanpur"=>8,"ahmedabadeast"=>27,"himmatnagar"=>9,"surat"=>28,"pal"=>28,"jamnagar"=>10,"vadodara"=>29,"darjipura"=>29,"junagadh"=>11,
	      "ahvadang"=>30,"bhuj"=>12,"modasa"=>31,"arvalli"=>31,"surendranagar"=>13,"veraval"=>32,"girsomnath"=>32,"amreli"=>14,"botad"=>33,"valsad"=>15,"chhotaUdepur"=>34,"bharuch"=>16,
	      "mahisagar"=>35,"lunawada"=>35,"godhra"=>17,"morbi"=>36,"gandhinagar"=>18,"khambhaliya"=>37,"bavla"=>38);
    	$JK = array("srinagar"=>1,"poonch"=>12,"jammu"=>2,"pulwama"=>13,"anantnag"=>3,"udhampur"=>14,"budgam"=>4,"bandipora"=>15,"baramulla"=>5,"ganderbal"=>16,"doda"=>6,"kishtwar"=>17,
	      "kargil"=>7,"kulgam"=>18,"kathua"=>8,"ramban"=>19,"kupwara"=>9,"reasi"=>20,"leh"=>10,"samba"=>21,"rajouri"=>11,"shopian"=>22);
    	$OR = array("balasore"=>1,"bhubaneswar"=>2,"balangir"=>3,"chandikhole"=>4,"cuttack"=>5,"dhenkanal"=>6,"ganjam"=>7,"kalahandi"=>8,"keonjhar"=>9,"koraput"=>10,"mayurbhanj"=>11,
	      "phulabani"=>12,"puri"=>13,"rourkela"=>14,"sambalpur"=>15,"sundergarh"=>16,"baragarh"=>17,"rayagada"=>18,"angul"=>19,"gajapati"=>20,"jagatsinghpur"=>21,"bhadrak"=>22,
	      "jharsuguda"=>23,"nabarangpur"=>24," nayagarh"=>25,"nuapada"=>26," boudh"=>27,"debagarh"=>28,"kendrapada"=>29," malkangiri"=>30,"sonepur"=>31,"bhanjanagar"=>32,
	      "bhubaneswar"=>33,"jajpur"=>34,"talcher"=>35);
        $KL = array("thiruvananthapuram"=>1,"kollam"=>2,"pathanamthitta"=>3,"alappuzha"=>4,"kottayam"=>5,"idukki"=>6,"ernakulam"=>7,"thrissur"=>8,"palakkad"=>9,"malappuram"=>10,
	      "kozhikode"=>11,"wayanad"=>12,"kannur"=>13,"kasargode"=>14,"kerala"=>15,"attingal"=>16,"muvattupuzha"=>17,"vadakara"=>18,"parassala"=>19,"neyyattinkara"=>20,"nedumangad"=>21,
	      "kazhakkoottam"=>22,"karunagapally"=>23,"kottarakara"=>24,"punalur"=>25,"adoor"=>26,"thiruvalla"=>27,"mallappally"=>28,"kayamkulam"=>29,"chengannur"=>30,"mavelikara"=>31,
	      "cherthala"=>32,"changanassery"=>33,"kanjirappally"=>34,"pala"=>35,"vaikom"=>36,"vandiperiyar"=>37,"thodupuzha"=>38,"thripunithura"=>39,"perumbavoor"=>40,"aluva"=>41,
	      "northparavur"=>42,"mattancherry"=>43,"kothamangalam"=>44,"irinjalakuda"=>45,"guruvayur"=>46,"kodungallur"=>47,"wadakkancherry"=>48,"alathur"=>49,"mannarghat"=>50,
	      "ottappalam"=>51,"pattambi"=>52,"perinthalmanna"=>53,"ponnani"=>54,"tirur"=>55,"koyilandi"=>56,"koduvally"=>57,"thalassery"=>58,"taliparamba"=>59,"kanhangad"=>60,
	      "kunnathur"=>61,"ranni"=>62,"angamaly"=>63,"chalakkudy"=>64,"thirurangadi"=>65,"kuttanadu"=>66,"uzhavoor"=>67,"devikulam"=>68,"udumbanchola"=>69);
        $KA = array("bengalurucentral"=>1,"bengaluruwest"=>2,"bengalurueast"=>3,"bengalurunorth"=>4,"bengalurusouth"=>5,"tumakuru"=>6,"kolar"=>7,"kgf"=>8,"mysuruwest"=>9,
	      "chamarajanagar"=>10,"mandya"=>11,"madikeri"=>12,"hassan"=>13,"sagar"=>14,"chitradurga"=>15,"shivamogga"=>16,"davanagere"=>17,"chikkamagaluru"=>18,"mangaluru"=>19,"udupi"=>20,
	      "puttur"=>21,"belagavi"=>22,"chikkodi"=>23,"bailahongal"=>24,"dharwad"=>25,"gadag"=>26,"haveri"=>27,"vijayapura"=>28,"bagalkote"=>29,"karwar"=>30,"sirsi"=>31,"kalaburgi"=>32,
	      "yadagiri"=>33,"bellari"=>34,"hosapete"=>35,"raichur"=>36,"koppal"=>37,"bidar"=>38,"bhalki"=>39,"chickballapura"=>40,"jnanabharathi"=>41,"ramanagar"=>42,"devanahalli"=>43,
	      "tiptur"=>44,"hunsur"=>45,"sakaleshpura"=>46,"honnavar"=>47,"jamkhandi"=>48,"gokak"=>49,"yelahanka"=>50,"electroniccity"=>51,"nelamangala"=>52,"krishnarajapuram"=>53,
	      "nagamangala"=>54,"mysurseast"=>55,"basavakalyana"=>56,"arstu"=>57,"banashankari"=>58,"chandapura"=>59,"rtnagar"=>60,"marathalli"=>61,"surathkal"=>62,"dakshinakannada"=>62,
	      "dharwdeast"=>63,"madhugiri"=>64,"tumakuru"=>64,"dandeliuttara"=>65,"kannada"=>65,"tarikerechikkamagaluru"=>66,"chintamani"=>67,"chikkaballapur"=>67,"ranibennurhaveri"=>68,
	      "ramadurgabelagavi"=>69,"bantwaladakshinakannada"=>70);
        $HR = array("ambala"=>array(1,37,85),"yamunanagar"=>2,"panchkula"=>array(3,68),"naraingarh"=>4,"karnal"=>5,"panipat"=>array(6,67),"kurukshetra"=>array(7,65),"kaithal"=>8,"guhla"=>9,
	      "sonepat"=>array(10,69),"gohana"=>11,"rohtak"=>12,"bahadurgarh"=>13,"jhajjar"=>14,"meham"=>15,"bhiwani"=>16,"siwani"=>16,"loharu"=>18,"charkhidadri"=>array(19,84),
	      "hisar"=>array(20,39),"hansi"=>21,"fatehabad"=>22,"tohana"=>23,"sirsa"=>24,"dabwali"=>25,"gurgaon"=>26,"nuh"=>27,"ferozpurjhirka"=>28,"ballabgarh"=>29,"palwal"=>array(30,73),
	      "jind"=>31,"narwana"=>32,"safidon"=>33,"mohindegarh"=>34,"narnaul"=>array(35,66,86),"rewari"=>36,"faridabad"=>38,"assandh"=>40,"pehowa"=>41,"ganaur"=>42,"kosli"=>43,
	      "ellenabad"=>44,"chandigarh"=>70,"bilsapur"=>71,"gurgaonsouth"=>72,"mewat"=>74,"indri"=>75,"pataudi"=>76,"beri"=>77,"sahabad"=>78,"kharkoda"=>79,"barwala"=>80,"bawal"=>81,
	      "kanina"=>82,"kalayat"=>83,"badkhal"=>87,"badhra"=>88,"uchana"=>90,"gharaunda"=>91,"radaur"=>92,"punhana"=>93,"kalanwali"=>94,"sampla"=>95);
        $HP = array("bilasput"=>array(24,69),"ghumarwin"=>23,"jhandutta"=>89,"nainadevijiatswarghat"=>91,"bharmaur"=>46,"chowari"=>57,"churah"=>44,"chamba"=>array(48,73),"dalhousie"=>47,
	      "pangi"=>45,"salooni"=>81,"barsar"=>21,"bhoranj"=>74,"hamirpur"=>array(22,67),"nadaun"=>55,"sujanpur"=>84,"bajinath"=>53,"dharamshala"=>39,"dehara"=>36,"jawali"=>array(54,83),
	      "jaisinghpur"=>56,"kangra"=>40,"nurpur"=>38,"palampur"=>37,"fatehpur"=>88,"shahpur"=>90,"nagrotabagwan"=>94,"kangra"=>68,"dheera"=>96,"indora"=>97,"nichar"=>26,"kalpa"=>25,
	      "pooh"=>27,"anni"=>35,"banjar"=>49,"kullu"=>array(34,66),"manali"=>58,"keylong"=>42,"kaza"=>41,"udaipur"=>43,"gohar"=>32,"jogindernagar"=>29,"karsog"=>30,"mandisadar"=>33,
	      "padhar"=>76,"sarkaghat"=>28,"sundernagar"=>31,"dharampur"=>86,"balh"=>82,"thunag"=>87,"mandi"=>65,"chopal"=>8,"dodrakawar"=>77,"rampur"=>6,"rohru"=>10,"shimlaurban"=>3,
	      "shimlarural"=>51,"theog"=>9,"kumarsain"=>95,"shimla"=>array(63,62),"rampur"=>92,"nahan"=>18,"paontasahib"=>17,"rajgarh"=>16,"sangarh"=>79,"shillai"=>85,"sirmaur"=>71,
	      "pachhad"=>16,"arki"=>11,"kandaghat"=>13,"nalagarh"=>array(12,93),"solan"=>array(14,64),"parwano"=>15,"amb"=>19,"una"=>array(20,72),"bangana"=>78,"haroli"=>80,"garget"=>19);
        $JH = array("ranchi"=>1,"hazaribagh"=>2,"daltonganj"=>3,"dumka"=>4,"jamshedpur"=>5,"chaibasa"=>6,"gumla"=>7,"lohardaga"=>8,"bokarosteelcity"=>9,"dhanbad"=>10,"giridih"=>11,
	      "koderma"=>12,"chatra"=>13,"garhwa"=>14,"deoghar"=>15,"pakur"=>16,"godda"=>17,"sahibganj"=>18,"latehar"=>19,"simdega"=>20,"jamtara"=>21,"saraikelakharsawan"=>22,"khunti"=>23,
	      "ramgarh"=>24);
        $PY = array("puducherry"=>1,"karaikal"=>2,"mahe"=>3,"yanam"=>4,"oulgaret"=>5);
        $LD = array("kavaratti"=>1,"agatti"=>2,"amini"=>3,"androth"=>4,"kadmat"=>5,"kiltan"=>6,"chetlat"=>7,"kalpeni"=>8,"minicoy"=>9);
        $MN = array("imphaleast"=>1,"churachandpur"=>2,"kangpokpi"=>3,"thoubal"=>4,"bishnupur"=>5,"imphalwest"=>6,"ukhrul"=>7);
    	$ML = array("meghalaya"=>array(1,2,3),"jaintiahills"=>4,"shillong"=>5,"westkhasihills"=>6,"eastgarohills"=>7,"westgarohills"=>8,"southgarohills"=>9,"ribhoi"=>10);
        $MZ = array("aizawl"=>1,"lunglei"=>2,"saiha"=>3,"champhai"=>4,"kolasib"=>5,"serchhip"=>6,"lawngtlai"=>7,"mamit"=>8);
        $UK = array("almora"=>1,"bageshwar"=>2,"champawat"=>3,"nainital"=>4,"pithoragarh"=>5,"udhamsinghnagar"=>6,"dehradun"=>7,"haridwar"=>8,"tehri"=>9,"uttarkashi"=>10,"chamoli"=>11,
	      "pauri"=>12,"rudraprayag"=>13,"rishikesh"=>14,"kotdwar"=>15,"vikasnagar"=>16,"roorkee"=>17,"kashipur"=>18,"ramnagar"=>19,"ranikhet"=>20);
    	$TR = array("agartala"=>1,"kailashahar"=>2,"udaipura"=>3,"dharmanagar"=>4,"ambassa"=>5);

	$TN = array("chennaicentral(ayanavaram)"=>1,"chennainorthwest(annanagar)"=>2,"chennainortheast(tondiarpet)"=>3,"chennaieast(royapuram)"=>4,"chennainorth(kolathur)"=>5,"chennaisoutheast(mandavelli)"=>6,"chennaisouth (thiruvanmiyur)"=>7,"chennaiwest(k.k.nagar)"=>9,"chennaisouthest(virugambakkam)"=>10,"tambaram"=>11,"poonamallee"=>12,"ambattur"=>13,"sholinganallur"=>14,"ulundurpet"=>15,"kallakurichi"=>15,"tindivanam">16,"redhills"=>18,"gummidipoondi"=>18,"chengalpattu"=>19,"madurantakam"=>19,"tiruvallur"=>20, "thiruttani"=>20,"kanchipuram"=>21, "sriperumbudur"=>21,"meenambakkam">22,"vellore"=>23, "gudiyatham"=>23,"krishnagiri"=>24,"thiruvannamalai"=>25,"arani"=>25,"namakkalnorth"=>28,"rasipuram"=>28,"dharmapuri"=>29,"palacode"=>29, "harur"=>29,"salemwest"=>30,"omalur"=>30,"cuddalore"=>31,"panruti"=>31,"villupuram"=>32,"erodeeast"=>33,"thiruchengode"=>34,"gobichettipalayam"=>36, "bhavani"=>36,"satyamangalam"=>36,"coimbatoresouth"=>37,"sulur"=>37,"coimbatorenorth"=>38,"tirupurnorth"=>39,"avinashi"=>39,"mettupalavalparai"=>41,"tirupursouth"=>42, "kangeyam"=>42,"udagamandalam"=>43,"gudalur"=>43,"tiruchirapalliwest"=>45, "manapparai"=>45,"perambalur"=>46,"karur"=>47, "aravakurichi"=>47, "kulithalai"=>47,"srirangam"=>48, "musiri"=>48, "thuraiyur"=>48,"thanjavur"=>49, "pattukottai"=>49,"tiruvarur"=>50, "mannargudi"=>50,"nagapattinam"=>51,"sankagiri"=>52,"mettur"=>52,"salemeast"=>54,"pudukottai"=>55,"iluppur"=>55,"aranthangi"=>55,"perundurai"=>56,"dindigul"=>57, "oddanchatram"=>57, "vedasandur"=>57, "batlagundu"=>57, "palani"=>57,"maduraisouth"=>58,"tirumangalam"=>58,"madurainorth"=>59,"vadipatti"=>59, "melur"=>59,"theni"=>60, "uthamapalayam"=>60,"ariyalur"=>61,"sivagangai"=>63,"karaikudi”=>63,”maduraicentral”=>64,”ramanathapuram"=>65,"paramakudi”=>65,”coimbatorecentral”=>66,”virudhunagar"=>67,"aruppukkottai"=>67,"kumbakonam"=>68,"thoothukudi"=>69,"kovilpatti”=>69,”hosur”=>70,”tirunelveli"=>72,"valliyur”=>72,“ranipet"=>73,"arakkonam"=>73,"arcot"=>3,"nagercoil"=>74,"marthandam"=>75,"kanyakumari"=>75,"tenkasi"=>76,"ambasamudram"=>76,"attur"=>77, "vazhapadi"=>77,"dharapuram"=>78,"udumalpet"=>78,"sankarankovil"=>79,"tiruchirapallieast"=>81,"thirerumbur"=>81,"mayi"=>82,"sirkazhi"=>82,"vaniyambadi"=>83, "tirupattur"=>83,"srivilliputhur"=>84, "sivakasi"=>84,"kundrathur"=>85,"manapakkam"=>85,"erodewest"=>86,"namakkalsouth"=>88, "paramathivellore"=>88,"salemsouth"=>90,"chidambaram"=>91,"virudhachalam"=>91,"neyveli"=>91,"thiruchendur"=>92,"coimbatorewest"=>99);
		

	
	$RJ = array("ajmer"=>1,"alwar"=>2,"banswara"=>3,"barmer"=>4,"bharatpur"=>5,"bhilwara"=>6,"bikaner"=>7,"bundi"=>8,"chittorgarh"=>9,"churu"=>10,"dholpur"=>11,"dungarpur"=>12," sriganganagar"=>13,"jaipur(south)"=>14,"jaisalmer"=>15,"jalore"=>16,"jhalawar"=>17,"jhunjhunu"=>18,"jodhpur"=>19,"kota"=>20,"nagaur"=>21,"pali"=>22,"sikar"=>23,"sirohi"=>24,"sawaimadhopur"=>25,"tonk"=>26,"udaipur"=>27,"baran"=>28,"dausa"=>29,"rajsamand"=>30,"hanumangarh"=>31,"kotputli"=>32,"ramganjmandi"=>33,"karauli"=>34,"pratapgarh"=>35,"beawar"=>36,"didwana"=>37,"aburoad"=>38,"balotra"=>39,"bhiwadi"=>40,"chomu"=>41,"kishangarh"=>42,"phalodi"=>43,"sujangarh"=>44,"jaipur(north)"=>45);

	
	$MP = array("madhyapradesh"=>array(1,2,3),"bhopal"=>4,"hoshangabad"=>5,"morena"=>6,"gwalior"=>7,"guna"=>8,"indore"=>9,"khargone"=>10,"dhar"=>11,"khandwa"=>12,"ujjain"=>13,"mandsaur"=>14,"sagar"=>15,"chhatarpur"=>16,"rewa"=>17,"shahdol"=>18,"satna"=>19,"jabalpur"=>20,"katni"=>21,"seoni"=>22,"raipur"=>23,"durg"=>24,"jagdalpur"=>25,"bilaspur"=>26,"ambikapur"=>27,"chhindwara"=>28,"rajnandgaon"=>29,"bhind"=>30,"sheopur"=>31,"datia"=>32,"shivpuri"=>33,"damoh"=>34,"panna"=>35,"tikamgarh"=>36,"sehore"=>37,"raisen"=>38,"rajgarh"=>39,"vidisha"=>40,"dewas"=>41,"shajapur"=>42,"ratlam"=>43,"neemuch"=>44,"jhabua"=>45,"barwani"=>46,"harda"=>47,"betul"=>48,"narsinghpur"=>49,"balaghat"=>50,"mandla"=>51,"dindori"=>52,"sidhi"=>53,"umaria"=>54,"anuppur"=>65,"singrauli"=>66,"ashoknagar"=>67,"burhanpur"=>68,"alirajpur"=>69);
	
	$WB =array("kolkata"=>array(1,2,3,4,5,6),"kolkatasaltlake"=>8,"howrah"=>array(11,12),"howrahuluberia"=>array(13,14),"hooghly"=>array(12,16,17),"chandannagar"=>18,"alliporesouth"=> 24,"parganas"=>array(19,20,22),"barrackpore"=>array(23,24),"barasat"=>array(25,26),"tamulk"=>array(29,30),"contai"=>array(31,32),"midnapur"=>array(33,34),"asanol"=>array(37,38,44,44,44,44,44),"durgapur"=>array(39,40),"burdwan"=>array(41,42),"kalna"=>44,"bolpur"=>48,"nadia"=>array(51,52),"birbhum"=>array(53,54),"purulia"=>array(55,56),"murshidabad"=>array(57,58,94),"raiganj"=>array(59,60),"balurghat"=>array(61,62),"coochbehar"=>array(63,64),"malda"=>array(65,66),"bankura"=>array(67,68),"alipurduar"=>array(69,70),"jalpaiguri"=>array(71,72),"siliguri"=>array(73,74),"darjeeling"=>array(76,77),"kalimpong"=>array(78,79),"raghunathpur"=>82,"kalyani"=>array(89,90),"islampur"=>array(91,92),"jahangirpur"=>94,"baruipur"=>96);


	$UP =array("saharanpur"=>11,"muzaffarnagar"=>12,"bulandshahr"=>13,"ghaziabad"=>14,"meerut"=>15,"noida"=>16,"bagput"=>17,"greaternoida"=>18,"shamli"=>19,"bijnor"=>20,"moradabad"=>21,"rampur"=>22,"jytibaphulenagar"=>23,"badaun"=>24,"bareilly"=>25,"pilibhit"=>26,"shahjahanpur"=>27,"ayodhya"=>28,"yusuf"=>29,"hardoi"=>30,"kheri"=>31,"lucknow"=>32,"raebareli"=>33,"sitapur"=>34,"unnao"=>35,"amethidistrict"=>36,"hapur"=>37,"sambal"=>38,"bahraich"=>40,"barabanki"=>41,"faizabad"=>42,"gonda"=>43,"sultanpur"=>44,"ambedkarnagar"=>45,"sharswati"=>46,"balrampur"=>47,"azamgarh"=>50,"basti"=>51,"deoria"=>52,"gorakhpur"=>53,"mau"=>54,"siddharth nagar"=>55,"mahrajganj"=>56,"padrauna"=>57,"sant kabir nagar"=>58,"ballia"=>60,"ghaziapur"=>61,"jaunpur"=>62,"mirzapur"=>63,"sonbhadra"=>64,"varanasi"=>65,"bhadohi"=>66,"chandauli"=>67,"allahabad"=>70,"fatehpur"=>71,"pratapgarh"=>72,"kaushambi"=>73,"kannauj"=>74,"etawah"=>75,"farrukhabad"=>76,"kanpurdehat(rural)"=>77,"kanpur"=>78,"auraiya"=>79,"agra"=>80,"aligarh"=>81,"etah"=>82,"irozabad"=>83,"manipuri"=>84,"mathura"=>85,"mahamayanagar"=>86,"kanshiramnagar"=>87,"banda">90,"hamirpur"=>91,"jalaun"=>92,"jhansi"=>93);
	$NL =array("kohima"=>1,"mokokchung"=>2,"tuensang"=>3,"mon"=>4,"wokha"=>5,"zunheboto"=>6,"dimapur"=>7,"phek"=>8);
	$PN =array("chandigarh"=>1,"amritsar"=>2,"bathinda"=>3,"faridkot"=>4,"ferozepur"=>5,"gurdaspur"=>6,"hoshiarpur"=>7,"jalandhar"=>8,"kapurthala"=>9,"ludhiana"=>10,"patiala"=>11,"ropar"=>12,"sangrur"=>13,"ajnala"=>14,"abohar"=>15,"anandpursahib"=>16,"bababakala"=>17,"batala"=>18,"barnala"=>19,"balachaur"=>20,"dasuya"=>21,"fazilka"=>22,"fatehgarhsahib"=>23,"garhshankar"=>24,"jagraon"=>25,"khanna"=>26,"kharar"=>27,"malerkotla"=>28,"moga"=>29,"muktsar"=>30,"mansa"=>31,"nawanshahr"=>32,"nakodar"=>33,"nabha"=>34,"patiala"=>array(34,39,42),"pathankot"=>35,"phagwara"=>36,"phillaur"=>37,"patti"=>38,"rajpur"=>39,"rampuraphul"=>40,"sultanpurlodhi"=>41,"samana"=>42,"samrala"=>43,"sunam"=>44,"talwandisabo"=>45,"tarntaran"=>46,"zira"=>47,"amloh"=>48,"khamano"=>49,"budhlada"=>50,"jhunir"=>51,"bassipathana"=>52,"malout"=>53,"mukerian"=>54,"payal"=>55,"raikot"=>56,"bhulath"=>57,"derababananak"=>58,"dhuri"=>59,"gidderbaha"=>60,"jalalabad"=>61,"jaitu"=>62,"khadoorsahib"=>63,"moonak"=>64,"mohali"=>65,"nihalsingwala"=>66,"shahkot"=>67,"dharkalan"=>68,"baghapurana"=>69,"derabassi"=>70,"chamkaursahib"=>71,"patran"=>72,"tappamandi"=>73,"nangal"=>74,"lehra"=>75,"ahmedgarh"=>76);
	$MH =array("mumbai(central)"=>1,"mumbai(west)"=>2,"mumbai(east)"=>array(3,49),"thane"=>4,"kalyan"=>5,"penraigad"=>6,"sindhudrug"=>7,"ratnagiri"=>8,"kolhapur"=>9,"sangli"=>10,"satara"=>11,"pune"=>12,"solapur"=>13,"pimpri"=>14,"nashik"=>15,"ahmednagar"=>16,"shrirampur"=>17,"dhule"=>18,"jalgaon"=>19,"aurangabad"=>20,"jalna"=>21,"parbhani"=>22,"beed"=>23,"latur"=>24,"osmanabad"=>25,"nanded"=>26,"amravati"=>27,"buldhana"=>28,"yavatmal"=>29,"akola"=>30,"nagpur_urban"=>31,"wardha"=>32,"gadchiroli"=>33,"chandrapur"=>34,"gondia"=>35,"bhandara"=>36,"washim"=>37,"hingoli"=>38,"nandurbar"=>39,"nagpur(rural)"=>40,"malegaon"=>41,"baramati"=>42,"vashi(navimumbai)"=>43,"ambajogai"=>44,"akluj"=>45,"panvel"=>46,"borivali"=>47,"vasai"=>48,"karad"=>50);






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
	$vrn_number = general_number();	
	$vrn = $state_name ." ". $dist_name ." ". $vehicle_str ." ". $vrn_number;
	$nmbr_sts_check = vrn_status_check($vrn);
	while ($nmbr_sts_check > 0)
	{
		$vrn_number = general_number();	
		$vrn = $state_name ." ". $dist_name ." ". $vehicle_str ." ". $vrn_number;
		$nmbr_sts_check = vrn_status_check($vrn);
	}
	insert_vehicle_numbers($a, $b, $vrn);
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
			unitLists["Andaman and Nicobar"]  = ["Portblair","Andaman","Carnicobar","Nicobar"];
			unitLists["Andhra Pradesh"] = ["Adilabad","Ananthapur","Chittoor","Kadapa","East godavari","Guntur","Hyderabad","Karimnagar","Krishna","Khammam","Kurnool","Mahaboobnagar","Medak","Nalgonda", "Nizamabad","Nellore", "Prakasam","Rangareddy","Srikakulam","Visakhapatnam","Vizianagaram", "Warangal","West godavari"];
			unitLists["Arunachal Pradesh"] = ["Itanagar","Pasighat","Anini", "Tawang","Lohit","Bomdila","Chang lang","Seppa","Khonsa","Ziro","Ying Kiong", "Daporijo", "Kurungkumey","Along","Roing"];
			unitLists["Assam"] = ["Guwahati","Kamrup", "Nagaon", "Jorhat","Sibsagar","Golaghat","Dibrugarh","Kakhimpur","Dimahasao", "Karbianglong", "Karimganj", "Cachar","Sonitpur","Darrang","Nalbari","Barpeta","Kokrajhar", "Dhubri", "Goalpara", "Bongaigaon","Assam State Transport Corporation","ASTC","Marigaon","Dhemaji","Tinsukia", "Hailakandi","Kamruprural","Chirang","Udalguri","Baksa","Assam","Assam Police Vehicles"];
			unitLists["Bihar"] = ["Patna","Sitamarhi","Gaya","Vaishali","Bhojpur","Madhubani","Chapra","Samastipur","Motihari","Khagaria","Muzaffarpur","Kishanganj","Darbhanga","Araria","Munger","Katihar","Begusarai","Madhepura","Bhagalpur","Buxar","Purnea","Bhabua","Saharsa","Jamui","Nalanda","Supaul","Bettiah","Anka","Dehri","Sheikhpura","Jehanabad","Lakhisarai","Aurangabad","Sheohar","Nawada","Arwal","Gopalganj","Rohtas","Siwan"];
			unitLists["Chandigarh"] = ["Chandigarh","Commercial Vehicles"];
			unitLists["Dadra and Nagar Haveli"] = ["Dadra and Nagar Haveli"];
			unitLists["Daman and Diu"] = ["Diu","Daman"];
			unitLists["Delhi"] = ["North Delhi",  "New Delhi",  "South Delhi",  "Janakpuri West",  "North East Delhi", "Central Delhi", "East Delhi", "North West Delhi", "South West Delhi", "West Delhi", "Rohini", "Vasant Vihar","Surajmal Vihar", "Sonipat", "Gurgaon", "Faridabad", "Noida", "Ghaziabad"];
			unitLists["Goa"] = ["Panaji North Goa",  "Margao",  "Mapusa",  "Bicholim",  "Ponda", "Vasco", "Panaji", "Margao",  "Quepem", "Canacona", "Pernem",  "Dharbandora"];
			unitLists["Gujarat"] = ["Ahmedabad",  "Bardoli", "Dahod",  "Mehsana",  "Navsari", "Rajkot", "Rajpipla", "Bhavnagar",  "Bnand","Surat","Patan","Vadodara","Porbander","Nadiad","Vyara","Palanpur","Ahmedabad East","Himmat Nagar","Surat","Pal","Jamnagar","Vadodara","Darjipura","Junagadh","Ahvadang","Bhuj","Modasa","Arvalli","Surendra Nagar","Veraval","Girsomnath","Amreli","Botad","Valsad","Chhotaudepur","Bharuch","Mahisagar","Lunawada","Godhra","Morbi","Gandhi Nagar","Khambhaliya","Bavla"];
    			unitLists["Jammu and Kashmir"] = ["Srinagar","Poonch","Jammu","Pulwama","Anantnag","Udhampur","Budgam","Bandipora","Baramulla","Ganderbal","Doda","Kishtwar","Kargil","Kulgam","Kathua","Ramban","Kupwara","Reasi","Leh","Samba","Rajouri","Shopian"];
   		 	unitLists["Odisa"]=[" Balasore","Bhubaneswar","Balangir","Chandikhole","Cuttack","Dhenkanal"," Ganjam"," Kalahandi","Keonjhar","Koraput","Mayurbhanj","Phulabani","Puri","Rourkela","Sambalpur","Sundergarh"," Baragarh","Rayagada","Angul","Gajapati","Jagatsinghpur","Bhadrak","Jharsuguda","Nabarangpur"," Nayagarh","Nuapada","Boudh","Debagarh","Kendrapada"," Malkangiri","Sonepur","Bhanjanagar","Bhubaneswar-Ii","Jajpur","Talcher"];
			unitLists["Kerala"] = ["Thiruvananthapuram","Kollam","Pathanamthitta","Alappuzha","Kottayam","Idukki","Ernakulam","Thrissur","Palakkad","Malappuram","Kozhikode","Wayanad","Kannur","Kasargode","Kerala","Attingal","Muvattupuzha","Vadakara","Parassala","Neyyattinkara","Nedumangad","Kazhakkoottam","Karunagapally","Kottarakara","Punalur","Adoor","Thiruvalla","Mallappally","Kayamkulam","Chengannur","Mavelikara","Cherthala","Changanassery","Kanjirappally","Pala","Vaikom","Vandiperiyar","Thodupuzha","Thripunithura","Perumbavoor","Aluva","Northparavur","Mattancherry","Kothamangalam","Irinjalakuda","Guruvayur","Kodungallur","Wadakkancherry","Alathur","Mannarghat","Ottappalam","Pattambi","Perinthalmanna","Ponnani","Tirur","Koyilandi","Koduvally","Thalassery","Taliparamba","Kanhangad","Kunnathur","Ranni","Angamaly","Chalakkudy","Thirurangadi","Kuttanadu", "Uzhavoor","Devikulam","Udumbanchola"];
			unitLists["Karnataka"]=["Bengaluru(Central)","Bengaluru(West)","Bengaluru(East)","Bengaluru(North)","Bengaluru(South)","Tumakuru","Kolar","K G F","Mysuru(West)","Chamarajanagar","Mandya","Madikeri","Hassan","Sagar","Chitradurga","Shivamogga","Davanagere","Chikkamagaluru","Mangaluru","Udupi","Puttur","Belagavi","Chikkodi","Bailahongal","Dharwad","Gadag","Haveri","Vijayapura","Bagalkote","Karwar","Sirsi","Kalaburgi","Yadagiri","Bellari","Hosapete","Raichur","Koppal","Bidar","Bhalki","Chickballapura","Jnanabharathi","Ramanagar","Devanahalli","Tiptur","Hunsur","Sakaleshpura","Honnavar","Jamkhandi","Gokak","Yelahanka","Electronic city","Nelamangala","Krishnarajapuram","Nagamangala","Mysurs(east)","Basavakalyana","A/R&STU","Banashankari","Chandapura","R.T.Nagar","Marathalli","Surathkal","Dakshinakannada","Dharwad(east)","Madhugiri","Tumakuru","Dandeli uttara","Kannada","Tarikere chikkamagaluru","Chintamani","Chikkaballapur","Ranibennur haveri","Ramadurga belagavi","Bantwala dakshina kannada"];
    			unitLists["Haryana"]=["Ambala","Yamunanagar","Panchkula","Naraingarh","Karnal","Panipat","Kurukshetra","Kaithal","Guhla","Sonepat","Gohana","Rohtak","Bahadurgarh","Jhajjar","Meham","Bhiwani","Siwani","Loharu","Charkhidadri","Hisar","Hansi","Fatehabad","Tohana","Sirsa","Dabwali","Gurgaon","Nuh","Ferozpurjhirka","Ballabgarh","Palwal","Jind","Narwana","Safidon","Mohindegarh","Narnaul","Rewari","Faridabad","Assandh","Pehowa","Ganaur","Kosli","Ellenabad","Chandigarh","Bilsapur","Gurgaonsouth","Mewat","Indri","Pataudi","Beri","Sahabad","Kharkoda","Barwala","Bawal","Kanina","Kalayat","Badkhal","Badhra","Uchana","Gharaunda","Radaur","Punhana","Kalanwali","Sampla"];
    			unitLists["Himachal Pradesh"]=["Bilasput","Ghumarwin","Jhandutta","Naina Devijiatswar Ghat","Bharmaur","Chowari","Churah","Chamba","Dalhousie","Pangi","Salooni","Barsar","Bhoranj","Hamirpur","Nadaun","Sujanpur","Bajinath","Dharamshala","Dehara","Jawali","Jaisinghpur","Kangra","Nurpur","Palampur","Fatehpur","Shahpur","Nagrotabagwan","Kangra","Dheera","Indora","Nichar","Kalpa","Pooh","Anni","Banjar","Kullu","Manali","Keylong","Kaza","Udaipur","Gohar","Joginder Nagar","Karsog","Mandisadar","Padhar","Sarkaghat","Sundernagar","Dharampur","Balh","Thunag","Mandi","Chopal","Dodrakawar","Rampur","Rohru","Shimlaurban","Shimlarural","Theog","Kumarsain","Shimla","Rampur","Nahan","Paontasahib","Rajgarh","Sangarh","Shillai","Sirmaur","Pachhad","Arki","Kandaghat","Nalagarh","Solan","Parwano","Amb","Una","Bangana","Haroli","Garget"];
    			unitLists["Jharkhand"]=["Ranchi","Hazaribagh","Daltonganj","Dumka","Jamshedpur","Chaibasa","Gumla","Lohardaga","Bokaro Steel City","Dhanbad","Giridih","Koderma","Chatra","Garhwa","Deoghar", "Pakur","Godda","Sahibganj","Latehar","Simdega","Jamtara","Saraikelakharsawan","Khunti","Ramgarh"];
			unitLists["Pondicherry"]=["Puducherry","Karaikal","Mahe","Yanam","Oulgaret"];
			unitLists["Lakshadweep"]=["Kavaratti","Agatti","Amini","Androth","Kadmat","Kiltan","Chetlat","Kalpeni","Minicoy"];
			unitLists["Manipur"]=["Imphal East","Churachandpur","Kangpokpi","Thoubal","Bishnupur","Imphal West","Ukhrul"];
			unitLists["Meghalaya"]=["Meghalaya","Jaintia Hills","Shillong","West Khasi Hills","East Garo Hills","West Garo Hills","South Garo Hills","Ri-Bhoi"];
			unitLists["Mizoram"]=["Aizawl","Lunglei","Saiha","Champhai","Kolasib","Serchhip","Lawngtlai","Mamit"];
			unitLists["Uttarakhand"]=["Almora","Bageshwar","Champawat","Nainital","Pithoragarh","Udham Singh Nagar","Dehradun","Haridwar","Tehri","Uttarkashi","Chamoli","Pauri","Rudraprayag","Rishikesh","Kotdwar","Vikasnagar","Roorkee","Kashipur","Ramnagar","Ranikhet"];
			unitLists["Tripura"]=["Agartala","Kailashahar","Udaipura","Dharmanagar","Ambassa"];

			unitLists["Tamil Nadu"] = ["Ariyalur","Chengalpattu","Chennai","Coimbatore","Cuddalore","Dharmapuri","Dindigul","Erode","Kallakurichi","Kanchipuram","Kanyakumari","Karur","Krishnagiri","Madurai","Nagapattinam","Namakkal","Nilgiris","Perambalur","Pudukkottai","Ramanathapuram","Ranipet","Salem","Sivaganga","Tenkasi","Thanjavur","Theni","Thoothukudi (Tuticorin)","Tiruchirappalli","Tirunelveli","Tirupathur","Tiruppur","Tiruvallur","Tiruvannamalai","Tiruvarur","Vellore","Viluppuram","Virudhunagar"];

			unitLists["Sikkim"] = ["East Sikkim","North Sikkim","South Sikkim","West Sikkim"];

			unitLists["Rajasthan"]=["Ajmer","Alwar","Banswara","Baran","Barmer","Bharatpur","Bhilwara","Bikaner","Bundi","Chittorgarh","Churu","Dausa","Dholpur","Dungarpur","Hanumangarh","Jaipur","Jaisalmer","Jalore","Jhalawar","Jhunjhunu","Jodhpur","Karauli","Kota","Nagaur","Pali","Pratapgarh","Rajsamand","Sawai Madhopur","Sikar","Sirohi","Sri Ganganagar","Tonk","Udaipur"];

			unitLists["Madhya Pradesh"]=["Agar Malwa","Alirajpur","Anuppur","Ashoknagar","Balaghat","Barwani","Betul","Bhind","Bhopal","Burhanpur","Chhatarpur","Chhindwara","Damoh","Datia","Dewas","Dhar","Dindori","Guna","Gwalior","Harda","Hoshangabad","Indore","Jabalpur","Jhabua","Katni","Khandwa","Khargone","Mandla","Mandsaur","Morena","Narsinghpur","Neemuch","Panna","Raisen","Rajgarh","Ratlam","Rewa","Sagar","Satna","Sehore","Seoni","Shahdol","Shajapur","Sheopur","Shivpuri","Sidhi","Singrauli","Tikamgarh","Ujjain","Umaria","Vidisha"];
			
			unitLists["West Bengal"]=["Kolkata","Kolkata Salt Lake","Howrah","Howrah Uluberia","Hooghly","Chandannagar","Allipore","South 24 Parganas","Barrackpore","Barasat","Tamulk","Contai","Midnapur","Asanol","Durgapur","Burdwan","Kalna","Bolpur","Nadia","Birbhum","Purulia","Murshidabad","Raiganj","Balurghat","Cooch Behar","Malda","Bankura","Alipurduar","Jalpaiguri","Siliguri","Darjeeling","Kalimpong","Raghunathpur","Kalyani","Islampur","Jahangirpur","Baruipur"];
			
			
			unitLists["Uttar Pradesh"]=["Saharanpur","Muzaffarnagar","Bulandshahr","Ghaziabad","Meerut","Noida","Bagput","Greater Noida","Shamli","Bijnor","Moradabad","Rampur","Jytiba Phule Nagar","Badaun","Bareilly","Pilibhit","Shahjahanpur","Ayodhya","Yusuf","Hardoi","Kheri","Lucknow","Raebareli","Sitapur","Unnao","Amethi District","Hapur","Sambal","Bahraich","Barabanki","Faizabad","Gonda","Sultanpur","Ambedkar Nagar","Sharswati","Balrampur","Azamgarh","Basti","Deoria","Gorakhpur","Mau","Siddharth Nagar","Mahrajganj","Padrauna","Sant Kabir Nagar","Ballia","Ghaziapur","Jaunpur","Mirzapur","Sonbhadra","Varanasi","Bhadohi","Chandauli","Allahabad","Fatehpur","Pratapgarh","Kaushambi","Kannauj","Etawah","Farrukhabad","Kanpur Dehat(rural)","Kanpur","Auraiya","Agra","Aligarh","Etah","Firozabad","Manipuri","Mathura","Mahamaya Nagar","Kanshiram Nagar","Banda","Hamirpur","Jalaun","Jhansi"];
			
			unitLists["Nagaland"]=["Kohima","Mokokchung","Tuensang","Mon","Wokha","Zunheboto","Dimapur","Phek"];


			unitLists["Punjab"]=["Chandigarh","Amritsar","Bathinda","Faridkot","Ferozepur","Gurdaspur","Hoshiarpur","Jalandhar","Kapurthala","Ludhiana","Patiala","Ropar","Sangrur","Ajnala","Abohar","Anandpur Sahib","Baba Bakala","Batala","Barnala","Balachaur","Dasuya","Fazilka","Fatehgarh Sahib","Garhshankar","Jagraon","Khanna","Kharar","Malerkotla","Moga","Muktsar","Mansa","Nawanshahr","Nakodar","Nabha","Patiala","Pathankot","Phagwara","Phillaur","Patti","Rajpur","Rampura Phul","Sultanpur Lodhi","Samana","Samrala","Sunam","Talwandi Sabo","Tarn Taran","Zira","Amloh","Khamano","Budhlada","Jhunir","Bassi Pathana","Malout","Mukerian","Payal","Raikot","Bhulath","Dera Baba Nanak","Dhuri","Gidderbaha","Jalalabad","Jaitu","Khadoor Sahib","Moonak","Mohali","Nihal Sing Wala","Shahkot","Dhar Kalan","Bagha Purana","Dera Bassi","Chamkaur Sahib","Patran","Tappa Mandi","Nangal","Lehra","Ahmedgarh"];



			unitLists["Maharashtra"]=["Mumbai Central","Mumbai West","Mumbai East","Thane","Kalyan","Pen Raigad","Sindhudrug","Ratnagiri","Kolhapur","Sangli","Satara","Pune","Solapur","Pimpri","Nashik","Ahmednagar","Shrirampur","Dhule","Jalgaon","Aurangabad","Jalna","Parbhani","Beed","Latur","Osmanabad","Nanded","Amravati","Buldhana","Yavatmal","Akola","Nagpur Urban","Wardha","Gadchiroli","Chandrapur","Gondia","Bhandara","Washim","Hingoli","Nandurbar","Nagpur Rural","Malegaon","Baramati","Vashi(Navi Mumbai)","Ambajogai","Akluj","Panvel","Borivali","Vasai","Karad"];



 






			
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
					<option value="Andaman and Nicobar">Andaman and Nicobar</option>
					<option value="Andhra Pradesh">Andhra Pradesh</option>
					<option value="Arunachal Pradesh">Arunachal Pradesh</option>
					<option value="Assam">Assam</option>
					<option value="Bihar">Bihar</option>
					<option value="Chandigarh">Chandigarh</option>
					<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
					<option value="Daman and Diu">Daman and Diu</option>
					<option value="Delhi">Delhi</option>
					<option value="Goa">Goa</option>					
					<option value="Gujarat">Gujarat</option> 
					<option value="Jammu and Kashmir">Jammu and Kashmir</option>
					<option value="Odisa">Odisa</option>
					<option value="Kerala">Kerala</option>
					<option value="Karnataka">Karnataka</option>
					<option value="Haryana">Haryana</option>
					<option value="Himachal Pradesh">Himachal Pradesh</option>
					<option value="Jharkhand">Jharkhand</option>
					<option value="Pondicherry">Pondicherry</option>
					<option value="Lakshadweep">Lakshadweep</option>
					<option value="Manipur">Manipur</option>
					<option value="Meghalaya">Meghalaya</option>
					<option value="Mizoram">Mizoram</option>
					<option value="Uttarakhand">Uttarakhand</option>
					<option value="Tripura">Tripura</option>
					<option value="Tamil Nadu">Tamil Nadu</option>
					<option value="Sikkim">Sikkim</option>
					<option value="Rajasthan">Rajasthan</option>
					<option value="Madhya Pradesh">Madhya Pradesh</option>
					<option value="West Bengal">West Bengal</option>
					<option value="Uttar Pradesh">Uttar Pradesh</option>
					<option value="Nagaland">Nagaland</option>
					<option value="Punjab">Punjab</option>
					<option value="Maharashtra">Maharashtra</option>


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
				echo "Vehicle Number : $vrn\n";
				
			}
	?>
		</p>
		</form>
	</body>
</html>