<html> 
<head> 
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" /> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 

<title>WCFCourier.com - Property tax rates across Iowa</title> 
<link rel="stylesheet" type="text/css" href="style.css">

<script type="text/javascript" src="/jquery/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="map.js"></script>

<script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>

<script type="text/javascript">
<!--
if (screen.width <= 699) {
document.location = "index_mobile.html";
}
//-->
<!--
if ((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {
   location.replace("index_mobile.html");
}
-->
</script>

</head>

<body onLoad="initialize();"> 
<table>
<tr>
<td><a href="http://wcfcourier.com"><img src="WCF_header.jpg" width="250px" height="41px" /></a></td>
<td>
 <div id="search" height="41px">
		<strong>Find your city: </strong>
        <input type="text" id="address" onKeyPress="searchKeyPress(event);" />
        <input type="button" id="btnSearch" Value="Search" onClick="zoomtoaddress();" />
	</div>
</td>
</tr>
</table>
<div id="map_canvas"></div>
        <div id="legend">
            
            <h1>Property tax rates across Iowa<br/></h1>
            
            <p>Cities are colored by their overall property tax rate per $1,000 of taxable property value:</p>
            
            <div class="colors">
            <strong>
			  <span class="less-than-twenty"></span>Less than $20<br/>
              <span class="more-than-twenty"></span>More than $20<br/>
              <span class="more-than-thirty"></span>More than $30<br/>
              <span class="more-than-forty"></span>More than $40<br/>
              <span class="more-than-fifty"></span>More than $50<br/>
             </strong>
            </div>
            
            <p>Select a city to see their overall property tax rate plus the city's portion of the property tax rate dating back to 2010.</p>
            
            <div id="credits">
                <br />- Data provided by the<br />
                <a href="http://www.dom.state.ia.us/" target="_blank">Iowa Department of Management</a>
            </div>
        </div>
<table>
<tr>
<td>
<div id="fb-root"></div>
<div class="fb-like" data-href="http://wcfcourier.com/app/special/taxes/" data-send="true" data-layout="button_count" data-width="150" data-show-faces="false"></div>
</td>
<td>
<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
</td>
</tr>
</table>
        <p id="note">Note: The overall property tax rate is the sum of all the taxing entities that apply to a property. 
        This includes the county, the city, any schools, etc. Rates may vary depending on which school district the property falls under.</p>
        <br />

        <div><strong>Where property taxes rates in Waterloo and Cedar Falls rank amongst Iowa's 15 most populous cities:</strong></div>
        
        <div>
        <object data=WaterlooTaxRates.html id="compare"> <embed src=WaterlooTaxRates.html id="compare"> </embed></object>
        </div>

</body> 
</html>