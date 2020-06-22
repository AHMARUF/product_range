<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Slider - Range slider</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <style type="text/css">
    table{
     border-collapse: collapse;
     margin: 10px;
    }
    table, th, td{
     border:1px solid #000;
     padding: 10px;
    }
    th, tr:nth-child(odd){
      background: #e6eeff;
    }
     th, tr:nth-child(even){
      background: #e6f2ff;
    }
    .ui-slider{
      width: 800px;
      padding-left: 10px;
      background: #ccddff;
    }
  </style>
  <script>
  /*$( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 75, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  } );*/

 

 var delails={
      "printer cable":4,
      "computer speaker":10,
      "computer speaker2d":15,
      "USB microphpne":19,
      "Headset ":24,
      "memory card ":29,
      "USB hub ":36,
      "Security key ":40,
      "printer ":45,
      "Webcan":50,

    };


$(document).ready(function() {
   
    $('#slider').slider({max:50, range:true, values:[15, 30],
      change: function(event, ui){
        getDetails(ui.values[0], ui.values[1]);
      }
    });
    var current = $("#slider").slider("option", "values");
    getDetails(current[0], current[1]);
  });
  function getDetails(minimum, maximun) {
    $("#range").text("$" + minimum + " - $" + maximun);
    var result = "<table><tr><th>product Name</th><th> price (in $)</th></tr>";
    for(var item in delails){
      if (delails[item] >= minimum && delails[item]<= maximun) 
      {
        result+= "<tr><td>"+item+ "</td><td>"+ delails[item] + "</td></tr>";
      }
    }
    result+= "</table>";
    $("#output").html(result);
  }
  </script>
</head>
<body>
 
<!--  <p>
  <label for="amount">Price range:</label>
  <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
</p>
 
<div id="slider-range"></div>  -->
 <br>


 <b>Price Range:</b><span id="range" style="font-weight: bold;"></span><br><br>
 <div id="slider"></div>
 <div id="output"></div>
 
</body>
</html>