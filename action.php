<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Autocomplete - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/mootools/1.6.0/mootools-core.min.js"></script>
<style>
	p {
    margin: 1cm 1cm 1cm 1cm;
    color: "white";
    font-size: 20px;
  }
  body {
     font-family: verdana;
     text-align: center;
	}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}
li {
    float: left;
}
li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-family: Verdana;
}
li a:hover {
    background-color: #111;
}
button {
    padding:1px 15px; 
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 15px;
    border-radius: 15px; 
}
</style>

<script>
    function myFunction(){
      window.location.href = "col.html";
    }
</script>



</head>
<body> 
<ul>
  <li><a href="http://nootter.com.s3-website-us-east-1.amazonaws.com/">Home</a></li>
  <li><a href="#about">About</a></li>
  <li><a href="https://s3.amazonaws.com/nootter.com/organizer.html">Organizer</a></li>
  <li><a href="https://s3.amazonaws.com/nootter.com/map.html">Map</a></li>
  <li><a class="active" href="https://s3.amazonaws.com/nootter.com/col.html">COL</a></li>
  <li><a href="#interviewtips/suggestions">Inteview Tips</a></li>
</ul>

<style>
     { margin: 0; padding: 0; }
    html { 
        background-image: url("bground.jpeg");
        background-size: cover;
        background-color: #696969;
    } 
    }
</style>

<p>
<?php 

$cities = array('Anniston-Calhoun AL', 'Akron OH', 'Albany GA', 'Albany NY', 'Alexandria LA', 'Amarillo TX', 'Americus GA', 'Ames IA', 'Anchorage AK', 'Anderson SC', 'Appleton WI', 'Ardmore OK', 'Arlington TX', 'Asheville NC', 'Ashland OH', 'Atlanta GA', 'Auburn-Opelika AL', 'Augusta-Aiken GA-SC', 'Austin TX', 'Bakersfield CA', 'Baltimore MD', 'Baton Rouge LA', 'Beaufort SC', 'Beaumont TX', 'Bellingham WA', 'Bergen-Passaic NJ', 'Bethesda-Gaithersburg-Frederick MD', 'Binghamton NY', 'Birmingham AL', 'Bismarck-Mandan ND', 'Blacksburg VA', 'Boise ID', 'Boston MA', 'Bowling Green KY', 'Bozeman MT', 'Bradenton FL', 'Brazoria County TX', 'Brownsville TX', 'Buffalo NY', 'Burlington IA', 'Burlington NC', 'Burlington-Chittenden Co VT', 'Camden SC', 'Cape Coral-Fort Myers FL', 'Carlsbad NM', 'Cedar City UT', 'Cedar Rapids IA', 'Champaign-Urbana IL', 'Chapel Hill NC', 'Charleston WV', 'Charleston-N Charleston SC', 'Charlotte NC', 'Charlottesville VA', 'Chattanooga TN', 'Cheyenne WY', 'Chicago IL', 'Cincinnati OH', 'Clarksburg WV', 'Clarksville TN', 'Cleveland OH', 'Cleveland TN', 'Colorado Springs CO', 'Columbia MO', 'Columbia SC', 'Columbus OH', 'Conroe TX', 'Conway AR', 'Cookeville TN', 'Corpus Christi TX', 'Covington KY', 'Dallas TX', 'Danville IL', 'Dare County NC', 'Davenport-Moline-Rock Is IA-IL', 'Dayton OH', 'Decatur IL', 'Decatur-Hartselle AL', 'Denver CO', 'Des Moines IA', 'Detroit MI', 'Dodge City KS', 'Dothan AL', 'Douglas GA', 'Dover DE', 'Dubuque IA', 'Durham NC', 'Dutchess  NY', 'Dyersburg TN', 'Eau Claire WI', 'Edmond OK', 'El Paso TX', 'Elkhart-Goshen IN', 'Enid OK', 'Erie PA', 'Eugene OR', 'Evansville IN', 'Everett WA', 'Fairbanks AK', 'Fargo-Moorhead ND-MN', 'Farmington NM', 'Fayetteville AR', 'Fayetteville NC', 'Findlay OH', 'Fitchburg-Leominster MA', 'Flagstaff AZ', 'Florence AL', 'Fort Lauderdale FL', 'Fort Smith AR', 'Fort Wayne-Allen County IN', 'Fort Worth TX', 'Framingham-Natick MA', 'Fresno CA', 'Gainesville FL', 'Galesburg IL', 'Garden City KS', 'Glens Falls NY', 'Glenwood Springs CO', 'Grand Junction CO', 'Grand Rapids MI', 'Green Bay WI', 'Greenville NC', 'Greenville SC', 'Gunnison CO', 'Hammond LA', 'Hampton Roads-SE Virginia VA', 'Harlingen TX', 'Harrisburg PA', 'Harrisonburg VA', 'Hartford CT', 'Hastings NE', 'Hattiesburg MS', 'Hays KS', 'Hickory NC', 'Hilton Head Island SC', 'Honolulu HI', 'Hot Springs AR', 'Houston TX', 'Huntsville AL', 'Hutchinson KS', 'Idaho Falls ID', 'Indiana County PA', 'Indianapolis IN', 'Iowa City IA', 'Ithaca NY', 'Jackson MS', 'Jackson-Madison County TN', 'Jacksonville FL', 'Jacksonville NC', 'Janesville WI', 'Jefferson City MO', 'Johnson City TN', 'Johnstown PA', 'Joliet-Will County IL', 'Jonesboro AR', 'Joplin MO', 'Juneau AK', 'Kalamazoo MI', 'Kalispell MT', 'Kansas City MO-KS', 'Kennewick-Richland-Pasco WA', 'Kinston NC', 'Knoxville TN', 'Kodiak AK', 'Lafayette IN', 'Lafayette LA', 'Lake Charles LA', 'Lake Havasu City AZ', 'Lancaster PA', 'Laramie WY', 'Las Cruces NM', 'Las Vegas NV', 'Lawrence KS', 'Lawton OK', 'Lexington KY', 'Lexington-Buena Vista-Rockbridge VA', 'Lima OH', 'Little Rock AR', 'Logan UT', 'Los Alamos NM', 'Los Angeles-Long Beach CA', 'Louisville KY', 'Loveland CO', 'Lubbock TX', 'Lufkin TX', 'Lynchburg VA', 'Manchester NH', 'Manhattan KS', 'Mankato MN', 'Marietta GA', 'Marion-McDowell County NC', 'Marshfield WI', 'Martinsburg-Berkeley County WV', 'Martinsville-Henry County VA', 'Mason City IA', 'McAllen TX', 'Memphis TN', 'Miami-Dade County FL', 'Middlesex-Monmouth NJ', 'Midland TX', 'Milwaukee-Waukesha WI', 'Minneapolis MN', 'Minot ND', 'Missoula MT', 'Mobile AL', 'Monroe LA', 'Montgomery AL', 'Morgantown WV', 'Morristown TN', 'Muncie IN', 'Murfreesboro-Smyrna TN', 'Muskogee OK', 'Myrtle Beach SC', 'Nacogdoches TX', 'Nashville-Franklin TN', 'Nassau County NY', 'New Haven CT', 'Brooklyn NY', 'Manhattan NY', 'Queens NY', 'Newark-Elizabeth NJ', 'Norman OK', 'Oakland CA', 'Odessa TX', 'Oklahoma City OK', 'Olympia WA', 'Omaha NE', 'Orange County CA', 'Orlando FL', 'Paducah KY', 'Palm Springs CA', 'Panama City FL', 'Paris TX', 'Pascagoula MS', 'Peoria IL', 'Philadelphia PA', 'Phoenix AZ', 'Pittsburgh PA', 'Pittsfield MA', 'Plano TX', 'Plattsburgh NY', 'Ponca City OK', 'Portland ME', 'Portland OR', 'Prescott-Prescott Valley AZ', 'Providence RI', 'Pryor Creek OK', 'Pueblo CO', 'Quincy IL', 'Raleigh NC', 'Reno-Sparks NV', 'Richmond IN', 'Richmond VA', 'Rio Rancho NM', 'Riverside City CA', 'Roanoke VA', 'Rochester MN', 'Rochester NY', 'Rockford IL', 'Roswell NM', 'Round Rock TX', 'Sacramento CA', 'Salina KS', 'Salt Lake City UT', 'San Angelo TX', 'San Antonio TX', 'San Diego CA', 'San Francisco CA', 'San Jose CA', 'San Marcos TX', 'Sarasota FL', 'Savannah GA', 'Seattle WA', 'Seguin TX', 'Sheboygan WI', 'Shreveport-Bossier City LA', 'Sierra Vista AZ', 'Sioux Falls SD', 'Slidell Tammany Parish LA', 'South Bend IN', 'Spokane WA', 'Springfield IL', 'Springfield MO', 'St. Cloud MN', 'St. George UT', 'St. Joseph MO', 'St. Louis MO-IL', 'St. Paul MN', 'Stamford CT', 'Staunton-Augusta County VA', 'Stillwater OK', 'Sumter SC', 'Syracuse NY', 'Tacoma WA', 'Tampa FL', 'Temple TX', 'Thomasville-Lexington NC', 'Topeka KS', 'Troy-Miami County OH', 'Truckee-Nevada County CA', 'Tucson AZ', 'Tulsa OK', 'Tupelo MS', 'Tuscaloosa AL', 'Twin Falls ID', 'Tyler TX', 'Valdosta GA', 'Vancouver WA', 'Vero Beach-Indian River FL', 'Waco TX', 'Washington-Arlington-Alexandria DC-VA', 'Waterloo-Cedar Falls IA', 'Wausau WI', 'Weatherford TX', 'Wichita Falls TX', 'Wichita KS', 'Williamsport-Lycoming Co PA', 'Wilmington DE', 'Wilmington NC', 'Winchester VA-WV', 'Winston-Salem NC', 'Wooster OH', 'Yakima WA', 'York County PA', 'Youngstown-Warren OH', 'Yuma AZ'

);
$monies = array(91.2, 100.2, 90.1, 108.1, 95.1, 89.5, 88.3, 96.8, 128.4, 91.8, 93.3, 87.3, 99.3, 101.1, 88.5, 95.6, 98.9, 93.2, 95.5, 103.4, 119.4, 96.1, 105.2, 95.7, 113, 131.3, 130.5, 98.4, 90.8, 95.3, 95, 97.2, 132.5, 90.7, 102, 95.8, 89.3, 85.8, 95.8, 97, 94.6, 120.5, 97.4, 112.3, 95.4, 88.7, 92, 96.9, 113, 92.7, 98.3, 93.2, 107, 91.1, 100.5, 116.9, 93.8, 95, 93, 101, 93.4, 92.8, 91.8, 100.4, 92, 91.4, 86.6, 85.7, 90.8, 87.8, 91.9, 91.1, 107.3, 96.8, 91.4, 91.4, 89.2, 103.2, 90.9, 99.4, 89.3, 89.8, 88.6, 99.7, 95.9, 96.6, 120.4, 88.6, 93.7, 91.6, 90.4, 94, 93.6, 92.1, 109.8, 96.2, 111.3, 137.4, 92.7, 97, 92.1, 95.2, 94.3, 103.3, 114.9, 90.2, 115.7, 86.1, 94.4, 91.1, 134.5, 117.3, 99.8, 93, 89.7, 112.3, 124, 98.3, 90.7, 95.1, 98.5, 90.3, 110, 95.9, 111.7, 82.8, 99.7, 97, 121.8, 93.4, 91.9, 89.4, 92.9, 107.3, 165.7, 93.8, 92.2, 91.2, 94, 90.6, 93.3, 87.2, 96.2, 102.8, 96.9, 90.2, 92.9, 96.5, 96.2, 92.9, 86.7, 92.9, 102.2, 88.9, 88.8, 136.5, 91.2, 98.8, 97.8, 92.6, 93.8, 89.4, 128.7, 98.2, 99.2, 97.4, 111.8, 106.8, 97, 100.6, 101.9, 94.6, 93.8, 92.8, 93.7, 93.1, 96.5, 95.6, 109.7, 136.4, 87.7, 91, 89.1, 92.4, 95.1, 116.8, 95, 93, 94.8, 92.1, 94.2, 89.6, 87.1, 89.1, 85, 88.2, 106, 124.8, 93.2, 101.9, 111, 99.9, 99.4, 92.7, 92.7, 99.2, 100.6, 90.9, 91, 88.2, 86, 95.2, 92.5, 88.9, 145.7, 122.1, 181.7, 216.7, 159, 129.7, 94.4, 139.1, 90.9, 91.7, 104.1, 88.3, 146.4, 97.8, 87.3, 121.8, 99.4, 88.9, 92.3, 96.3, 126.5, 100.7, 91.5, 110.6, 97.4, 100.1, 90, 116.5, 111.3, 103.7, 123.3, 84.5, 85.6, 95.5, 98.2, 101.1, 90.8, 104.5, 95.1, 112.5, 94.1, 99.2, 100, 92.4, 95.9, 89.7, 116.2, 86.9, 94.6, 92.4, 95.7, 132.3, 164, 156.1, 94.8, 101.5, 93.5, 121.4, 90.7, 101.4, 95.3, 97.9, 94.1, 92.1, 91.9, 93.9, 85.8, 88, 98.3, 95.9, 92.3, 90.4, 110, 146.9, 96.2, 90.1, 96.3, 101.5, 109.5, 92.4, 87.4, 89.2, 91.8, 95.4, 146.9, 96.5, 88.4, 88.1, 94.6, 91.5, 96.3, 94.1, 94.8, 107, 88.9, 140.1, 91.7, 96.5, 91.4, 86.5, 91.8, 100.7, 105.2, 98.8, 102.3, 92.4, 92.6, 95.8, 102.1, 90.4, 101.2);

$indexone = array_search($_GET["cityone"], $cities);
$indextwo = array_search($_GET["citytwo"], $cities);
echo "<br>";  
echo "<br>"; 

echo "Considering cost of living and salary, your purchasing power in ", $_GET["cityone"], " is $", round($_GET["moneyone"] / $monies[$indexone] * 100, 2), ", while your purchasing power in ", $_GET["citytwo"], " is $", round($_GET["moneytwo"] / $monies[$indextwo] * 100, 2),  ".";


if (round($_GET["moneyone"] / $monies[$indexone] * 100, 2) > round($_GET["moneytwo"] / $monies[$indextwo] * 100, 2)) {
	echo "  Thus you can purchase more in ", $_GET["cityone"], ".<br>";
} else {
	echo "  Thus you can purchase more in ", $_GET["citytwo"], ".<br>";
}
echo "<br>";  
echo "<br>";  

if ($_GET["funOption"] == "Burritos") {
	if (round($_GET["moneyone"] / $monies[$indexone] * 100, 2) > round($_GET["moneytwo"] / $monies[$indextwo] * 100, 2)) {
		echo "  Fun fact: You can purchase ", round((($_GET["moneyone"] / $monies[$indexone] * 100) / 6.5) - (($_GET["moneytwo"] / $monies[$indextwo] * 100) / 6.5), 0), " more burritos in ", $_GET["cityone"], " each year.";
	} else {
		echo "  Fun fact: You can purchase ", round((($_GET["moneytwo"] / $monies[$indextwo] * 100) / 6.5) - (($_GET["moneyone"] / $monies[$indexone] * 100) / 6.5), 0), " more burritos in ", $_GET["citytwo"], " each year.";
	}
} else if ($_GET["funOption"] == "iPhone") {
	if (round($_GET["moneyone"] / $monies[$indexone] * 100, 2) > round($_GET["moneytwo"] / $monies[$indextwo] * 100, 2)) {
		echo "  Fun fact: You can purchase ", round((($_GET["moneyone"] / $monies[$indexone] * 100) / 999) - (($_GET["moneytwo"] / $monies[$indextwo] * 100) / 999), 1), " more iPhone Xs in ", $_GET["cityone"], " each year.";
	} else {
		echo "  Fun fact: You can purchase ", round((($_GET["moneytwo"] / $monies[$indextwo] * 100) / 999) - (($_GET["moneyone"] / $monies[$indexone] * 100) / 999), 1), " more iPhone Xs in ", $_GET["citytwo"], " each year.";
	}
} else if ($_GET["funOption"] == "Frap") {
	if (round($_GET["moneyone"] / $monies[$indexone] * 100, 2) > round($_GET["moneytwo"] / $monies[$indextwo] * 100, 2)) {
		echo "  Fun fact: You can purchase ", round((($_GET["moneyone"] / $monies[$indexone] * 100) / 4.95) - (($_GET["moneytwo"] / $monies[$indextwo] * 100) / 4.95), 0), " more venti Starbucks frappuccinos in ", $_GET["cityone"], " each year.";
	} else {
		echo "  Fun fact: You can purchase ", round((($_GET["moneytwo"] / $monies[$indextwo] * 100) / 4.95) - (($_GET["moneyone"] / $monies[$indexone] * 100) / 4.95), 0), " more venti Starbucks frappuccinos in ", $_GET["citytwo"], " each year.";
	}
} else if ($_GET["funOption"] == "Oculus") {
	if (round($_GET["moneyone"] / $monies[$indexone] * 100, 2) > round($_GET["moneytwo"] / $monies[$indextwo] * 100, 2)) {
		echo "  Fun fact: You can purchase ", round((($_GET["moneyone"] / $monies[$indexone] * 100) / 500) - (($_GET["moneytwo"] / $monies[$indextwo] * 100) / 500), 1), " more Oculus Rifts in ", $_GET["cityone"], " each year.";
	} else {
		echo "  Fun fact: You can purchase ", round((($_GET["moneytwo"] / $monies[$indextwo] * 100) / 500) - (($_GET["moneyone"] / $monies[$indexone] * 100) / 500), 1), " more Oculus Rifts in ", $_GET["citytwo"], " each year.";
	}
}


?>
</p>

<button onclick="myFunction()"> Return To Previous Page </button>

<img class="otter" src= "otter3.png">
<style type="text/css">
 .otter {
   position: absolute;
   right: 0px;
   bottom: 0px;
}


</style>

</body>
</html>