# WeatherForecast-Serverside
<h4>Description</h4>
<p>This is a webpage that allows you to search for weather information using the Google Geocode and Forecast.io APIs, and the results will be displayed in tabular format.
</p>
<div>
<h4>Search Form</h4>
<ul>
<li>A user first opens a page, called forecast.php, where he/she can enter an address (street, city, and state) and select the temperature unit (Fahrenheit, Celsius).</li>
<li>The form should include a forecast.io disclaimer, linking to ‘http://forecast.io/’.</li>
<li>If the user did not enter one of the data items, then an alert will be shown to let the user provide complete information. </li>
<li>Clear button is used for clearing the result area, all text fields, unselect the State value and reset the “Degree” field to its default value of Fahrenheit.</li>
<ul>
</div>
<div>
<h4>Google Geocode API</h4>
<p>Web service URL: <a href="http://maps.google.com/maps/api/geocode/xml?address=325 W Adams,Los Angeles,CA">http://maps.google.com/maps/api/geocode/xml?address=325 W Adams,Los Angeles,CA</a><p>
<p>The response of this URL is an XML-formatted object. One key piece of data returned is the latitude and longitude values for the given address. 
<h4>Forecast.io API</h4>
<p>For the given location such as, queries like below:<br>
<a href="https://api.forecast.io/forecast/YOUR_APIKEY/LATITUDE,LONGITUDE?units=units_v alue&exclude=flags">https://api.forecast.io/forecast/YOUR_APIKEY/LATITUDE,LONGITUDE?units=units_v alue&exclude=flags</a>
When constructing the Forecast.io web service API call, you should provide five parameters:<br>
<ul>
<li>The first parameter is your Forecast.io API key (a.k.a. the Dark Sky API key).</li>
<li>The second and the third parameter are the latitude and longitude values which are extracted from the XML-formatted data returned by the Google Geocode API.</li>
<li>The name of fourth parameter is units. The value of this parameter is either “us” or “si”. If the temperature is in degree Celsius, units=si and if the temperature is in degree Fahrenheit, units=us.</li>
<li>The name of the fifth parameter is exclude. The value of this parameter is “flags”.</li>
</ul>
The response from a query of the Forecast.io web service is a JSON-formatted object.<br />
</p>
</div>
