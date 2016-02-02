<html>
<head>
<style type="text/css">
body{
    text-align:center;
    margin:0 auto;
}
.main{
    border: 2px solid;
    width: 450px;
    margin: 0 auto;
}
.display{
    border: 2px solid;
    width: 450px;
    margin: 0 auto;
}
.tabledisplay{
    width: 350px;
    margin: 0 auto;
}
.icon{
    width: 100px;
    height: 100px;
}
    .inputtable{
        width:310px;
        margin-top: 10px;
        margin-left: 10px;
    }

</style>
    <script type="text/javascript">

        function deletediv(){
            var div=document.getElementById("resultdiv");
            if(div!=null){
                div.parentNode.removeChild(div);
            }
        }

        function submitForm(){

            var street=document.getElementsByName("street")[0].value;
            var city=document.getElementsByName("city")[0].value;
            var states=document.getElementsByName("states")[0].value;

            var matchreg=/^\s*$/;

            var err="";
            if((street=="")||(matchreg.test(street)))
            { err=err+"Please enter value of Street Address"+"\n";}
            if((city=="")||(matchreg.test(city)))
            { err=err+"Please enter value of City"+"\n";}
            if(states=="")
            { err=err+"Please select State"+"\n";}

            if(err!="")
            {alert(err);return false;}

            if((city!="")&&(states!=""))
            {document.getElementsByName("foreform").submit();}
        }

        function clearInput(){
            document.getElementsByName("street")[0].value="";
            document.getElementsByName("city")[0].value="";
            document.getElementsByName("states")[0].value="";
            document.getElementsByName("temp")[0].checked=true;
            deletediv();
        }


        </script>
</head>
<body>
<br />
<h2>Forecast Search</h2>
<div class="main">
<form id="foreForm" action="forecast.php" name="foreform" method="POST">
<table border="0" class="inputtable">
<tr><td width="110px">Street Address:*</td><td><input style="width:170px" type="text" name="street" value="<?php echo isset($_POST["street"])?$_POST["street"]:"" ?>"></td></tr>
<tr><td>City:*</td><td><input style="width:170px" type="text" name="city" value="<?php echo isset($_POST["city"])?$_POST["city"]:"" ?>"></td></tr>
<tr><td>State:*</td><td><select name="states">
    <option value="" selected="selected">Select your state...</option>
    <option value="AL" <?php if(isset($_POST["states"])&&$_POST["states"]=="AL") echo "selected"; ?>>Alabama</option>
    <option value="AK" <?php if(isset($_POST["states"])&&$_POST["states"]=="AK") echo "selected"; ?>>Alaska</option>
    <option value="AZ" <?php if(isset($_POST["states"])&&$_POST["states"]=="AZ") echo "selected"; ?>>Arizona</option>
    <option value="AR" <?php if(isset($_POST["states"])&&$_POST["states"]=="AR") echo "selected"; ?>>Arkansas</option>
    <option value="CA" <?php if(isset($_POST["states"])&&$_POST["states"]=="CA") echo "selected"; ?>>California</option>
    <option value="CO" <?php if(isset($_POST["states"])&&$_POST["states"]=="CO") echo "selected"; ?>>Colorado</option>
    <option value="CT" <?php if(isset($_POST["states"])&&$_POST["states"]=="CT") echo "selected"; ?>>Connecticut</option>
    <option value="DE" <?php if(isset($_POST["states"])&&$_POST["states"]=="DE") echo "selected"; ?>>Delaware</option>
    <option value="DC" <?php if(isset($_POST["states"])&&$_POST["states"]=="DC") echo "selected"; ?>>District Of Columbia</option>
    <option value="FL" <?php if(isset($_POST["states"])&&$_POST["states"]=="FL") echo "selected"; ?>>Florida</option>
    <option value="GA" <?php if(isset($_POST["states"])&&$_POST["states"]=="GA") echo "selected"; ?>>Georgia</option>
    <option value="HI" <?php if(isset($_POST["states"])&&$_POST["states"]=="HI") echo "selected"; ?>>Hawaii</option>
    <option value="ID" <?php if(isset($_POST["states"])&&$_POST["states"]=="ID") echo "selected"; ?>>Idaho</option>
    <option value="IL" <?php if(isset($_POST["states"])&&$_POST["states"]=="IL") echo "selected"; ?>>Illinois</option>
    <option value="IN" <?php if(isset($_POST["states"])&&$_POST["states"]=="IN") echo "selected"; ?>>Indiana</option>
    <option value="IA" <?php if(isset($_POST["states"])&&$_POST["states"]=="IA") echo "selected"; ?>>Iowa</option>
    <option value="KS" <?php if(isset($_POST["states"])&&$_POST["states"]=="KS") echo "selected"; ?>>Kansas</option>
    <option value="KY" <?php if(isset($_POST["states"])&&$_POST["states"]=="KY") echo "selected"; ?>>Kentucky</option>
    <option value="LA" <?php if(isset($_POST["states"])&&$_POST["states"]=="LA") echo "selected"; ?>>Louisiana</option>
    <option value="ME" <?php if(isset($_POST["states"])&&$_POST["states"]=="ME") echo "selected"; ?>>Maine</option>
    <option value="MD" <?php if(isset($_POST["states"])&&$_POST["states"]=="MD") echo "selected"; ?>>Maryland</option>
    <option value="MA" <?php if(isset($_POST["states"])&&$_POST["states"]=="MA") echo "selected"; ?>>Massachusetts</option>
    <option value="MI" <?php if(isset($_POST["states"])&&$_POST["states"]=="MI") echo "selected"; ?>>Michigan</option>
    <option value="MN" <?php if(isset($_POST["states"])&&$_POST["states"]=="MN") echo "selected"; ?>>Minnesota</option>
    <option value="MS" <?php if(isset($_POST["states"])&&$_POST["states"]=="MS") echo "selected"; ?>>Mississippi</option>
    <option value="MO" <?php if(isset($_POST["states"])&&$_POST["states"]=="MO") echo "selected"; ?>>Missouri</option>
    <option value="MT" <?php if(isset($_POST["states"])&&$_POST["states"]=="MT") echo "selected"; ?>>Montana</option>
    <option value="NE" <?php if(isset($_POST["states"])&&$_POST["states"]=="NE") echo "selected"; ?>>Nebraska</option>
    <option value="NV" <?php if(isset($_POST["states"])&&$_POST["states"]=="NV") echo "selected"; ?>>Nevada</option>
    <option value="NH" <?php if(isset($_POST["states"])&&$_POST["states"]=="NH") echo "selected"; ?>>New Hampshire</option>
    <option value="NJ" <?php if(isset($_POST["states"])&&$_POST["states"]=="NJ") echo "selected"; ?>>New Jersey</option>
    <option value="NM" <?php if(isset($_POST["states"])&&$_POST["states"]=="NM") echo "selected"; ?>>New Mexico</option>
    <option value="NY" <?php if(isset($_POST["states"])&&$_POST["states"]=="NY") echo "selected"; ?>>New York</option>
    <option value="NC" <?php if(isset($_POST["states"])&&$_POST["states"]=="NC") echo "selected"; ?>>North Carolina</option>
    <option value="ND" <?php if(isset($_POST["states"])&&$_POST["states"]=="ND") echo "selected"; ?>>North Dakota</option>
    <option value="OH" <?php if(isset($_POST["states"])&&$_POST["states"]=="OH") echo "selected"; ?>>Ohio</option>
    <option value="OK" <?php if(isset($_POST["states"])&&$_POST["states"]=="OK") echo "selected"; ?>>Oklahoma</option>
    <option value="OR" <?php if(isset($_POST["states"])&&$_POST["states"]=="OR") echo "selected"; ?>>Oregon</option>
    <option value="PA" <?php if(isset($_POST["states"])&&$_POST["states"]=="PA") echo "selected"; ?>>Pennsylvania</option>
    <option value="RI" <?php if(isset($_POST["states"])&&$_POST["states"]=="RI") echo "selected"; ?>>Rhode Island</option>
    <option value="SC" <?php if(isset($_POST["states"])&&$_POST["states"]=="SC") echo "selected"; ?>>South Carolina</option>
    <option value="SD" <?php if(isset($_POST["states"])&&$_POST["states"]=="SD") echo "selected"; ?>>South Dakota</option>
    <option value="TN" <?php if(isset($_POST["states"])&&$_POST["states"]=="TN") echo "selected"; ?>>Tennessee</option>
    <option value="TX" <?php if(isset($_POST["states"])&&$_POST["states"]=="TX") echo "selected"; ?>>Texas</option>
    <option value="UT" <?php if(isset($_POST["states"])&&$_POST["states"]=="UT") echo "selected"; ?>>Utah</option>
    <option value="VT" <?php if(isset($_POST["states"])&&$_POST["states"]=="VT") echo "selected"; ?>>Vermont</option>
    <option value="VA" <?php if(isset($_POST["states"])&&$_POST["states"]=="VA") echo "selected"; ?>>Virginia</option>
    <option value="WA" <?php if(isset($_POST["states"])&&$_POST["states"]=="WA") echo "selected"; ?>>Washington</option>
    <option value="WV" <?php if(isset($_POST["states"])&&$_POST["states"]=="WV") echo "selected"; ?>>West Virginia</option>
    <option value="WI" <?php if(isset($_POST["states"])&&$_POST["states"]=="WI") echo "selected"; ?>>Wisconsin</option>
    <option value="WY" <?php if(isset($_POST["states"])&&$_POST["states"]=="WY") echo "selected"; ?>>Wyoming</option>
</select></td></tr>
<tr><td>Degree:*</td><td><input type="radio" name="temp" value="us" checked>Fahrenheit<input type="radio" name="temp" value="si"<?php if(isset($_POST["temp"])&&$_POST["temp"]=="si") echo "checked" ?>>Celsius</td></tr>
<tr><td></td><td><button name="submit" onclick="submitForm()">Search</button><button onclick="clearInput()">clear</button></td></tr>
<tr><td colspan="2"><i>* -Mandatory fields.</i></td></tr>
<tr><td></td><td align="center"><a href="http://forecast.io" target="_blank">Powered by Forecast.io</a></td></tr>
</table>
</form>
</div>

<br />
<br />
<br />


    <?php

    if(isset($_POST["submit"])) {

        if(($_POST["city"]=="")||($_POST["states"]==""))
        {return;}

        $geoUrl='';

        $address=$_POST["street"].",".$_POST["city"].",".$_POST["states"];
        $geoUrl="https://maps.googleapis.com/maps/api/geocode/xml?address=".urlencode($address)."&key=YOURGOOGLEAPIKEY";
        /*key is your google API key*/

        $geocodexml=new SimpleXMLElement(file_get_contents($geoUrl));

        $status=$geocodexml->status;
        
        /*This key is your forecast.io API key*/
        define("key", "YOURFOCASTIOKEY");

        $forecastUrl="";
        $lat="";
        $lng="";


        if($status=="OK"){
            $lat=$geocodexml->result->geometry->location->lat;
            $lng=$geocodexml->result->geometry->location->lng;
            $forecastUrl="https://api.forecast.io/forecast/".key."/".$lat.",".$lng."?units=".$_POST["temp"]."&exclude=flags";
            //echo $forecastUrl;
        }
        else {echo "Request from Google was Failed"; return;}

        $foreJson=file_get_contents($forecastUrl);
        $foreJson=utf8_encode($foreJson);
        $foreJson=json_decode($foreJson);

        if($foreJson){

            echo "<div id='resultdiv' class='display''><br />";

            $precipitation=$foreJson->currently->precipIntensity;
            $summary=$foreJson->currently->summary;
            $temperature=$foreJson->currently->temperature;
            $icon=$foreJson->currently->icon;
            $chanceofrain=$foreJson->currently->precipProbability;
            $windspeed=$foreJson->currently->windSpeed;
            $dewpoint=$foreJson->currently->dewPoint;
            $humidity=$foreJson->currently->humidity;
            $visibility=$foreJson->currently->visibility;
            $sunrise=$foreJson->daily->data[0]->sunriseTime;
            $sunset=$foreJson->daily->data[0]->sunsetTime;
            $timezone=$foreJson->timezone;


            //set summary
            echo "<h2 style='margin: 0;'>".$summary."</h2>";
            //set currently temperature
            if($_POST["temp"]=="us")
            {echo "<h2 style='margin: 0;'>".round($temperature,0)."&deg;F"."</h2>";}
            else if($_POST["temp"]=="si")
            {echo "<h2 style='margin: 0;'>".round($temperature,0)."&deg;C"."</h2>";}
            //set icons
            switch ($icon){
                case "clear-day":
                    echo "<img title='$icon' alt='$icon' class='icon' src=\"icon/clear.png\" />";
                    break;
                case "clear-night":
                    echo "<img title='$icon' alt='$icon' class='icon' src=\"icon/clear_night.png\" />";
                    break;
                case "rain":
                    echo "<img title='$icon' alt='$icon' class='icon' src=\"icon/rain.png\" />";
                    break;
                case "snow":
                    echo "<img title='$icon' alt='$icon' class='icon' src=\"icon/snow.png\" />";
                    break;
                case "sleet":
                    echo "<img title='$icon' alt='$icon' class='icon' src=\"icon/sleet.png\" />";
                    break;
                case "wind":
                    echo "<img title='$icon' alt='$icon' class='icon' src=\"icon/wind.png\" />";
                    break;
                case "fog":
                    echo "<img title='$icon' alt='$icon' class='icon' src=\"icon/fog.png\" />";
                    break;
                case "cloudy":
                    echo "<img title='$icon' alt='$icon' class='icon' src=\"icon/cloudy.png\" />";
                    break;
                case "partly-cloudy-day":
                    echo "<img title='$icon' alt='$icon' class='icon' src=\"icon/cloud_day.png\" />";
                    break;
                case "partly-cloudy-night":
                    echo "<img title='$icon' alt='$icon' class='icon' src=\"icon/cloud_night.png\" />";
                    break;
                default:
                    break;
            }

            echo "<br />";
            //set precipitation
            echo "<table class='tabledisplay'><tr><td>Precipitation:</td>";

            //us or si millimeter->inch
            if($_POST["temp"]=="si")
            {
                $precipitation=$precipitation*0.03937007874;
            }

            if($precipitation>=0&&$precipitation<0.002)
            {echo "<td>None</td></tr>";}
            else if($precipitation>=0.002&&$precipitation<0.017)
            {echo "<td>Very Light</td></tr>";}
            else if($precipitation>=0.017&&$precipitation<0.1)
            {echo "<td>Light</td></tr>";}
            else if($precipitation>=0.1&&$precipitation<0.4)
            {echo "<td>Moderate</td></tr>";}
            else if($precipitation>=0.4)
            {echo "<td>Heavy</td></tr>";}

            //set chance of rain
            $chance=$chanceofrain*100;
            echo "<tr><td>Chance of Rain:</td><td>$chance%</td></tr>";

            //set windspeed
            $windspeed=round($windspeed,0);
            if($_POST["temp"]=="us")
            {echo "<tr><td>Wind Speed:</td><td>$windspeed mph</td></tr>";}
            else if($_POST["temp"]=="si")
            {echo "<tr><td>Wind Speed:</td><td>$windspeed m/s</td></tr>";}

            //set dewpoint
            $dewpoint=round($dewpoint,0);
            if($_POST["temp"]=="us")
            {echo "<tr><td>Dew Point:</td><td>$dewpoint"."&deg;F"."</td></tr>";}
            else if($_POST["temp"]=="si")
            {echo "<tr><td>Dew Point:</td><td>$dewpoint"."&deg;C"."</td></tr>";}

            //set humidity
            $humidity=$humidity*100;
            echo "<tr><td>Humidity:</td><td>$humidity%</td></tr>";

            //set visibility
            $visibility=round($visibility,0);
            if($_POST["temp"]=="us")
            {echo "<tr><td>Visibility:</td><td>$visibility mi</td></tr>";}
            else if($_POST["temp"]=="si")
            {echo "<tr><td>Visibility:</td><td>$visibility km</td></tr>";}

            //set sunrise
            date_default_timezone_set($timezone);
            $sunrise=date("h:i A",$sunrise);
            echo "<tr><td>Sunrise:</td><td>$sunrise</td></tr>";
            //set sunset
            $sunset=date("h:i A",$sunset);
            echo "<tr><td>Sunrise:</td><td>$sunset</td></tr></table>";

            echo "<br /><br /><br /></div>";

        }
    }
    ?>

</body>
</html>