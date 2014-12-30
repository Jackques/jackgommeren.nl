<!-- wat moet het allemaal kunnen?
1. vragen invoeren, 
1.1 vraag zelf
1.2 4 verschillende antwoorden, waarvan 1 het juiste
1.3  een beschrijving bij de vraag
1.4 uitleg waarom het goed of fout was

2. vragen stellen natuurlijk

3. vragen database kunnen inzien

4. vragen in categorien kunnen indelen
-->

<html>
<head>
  <title>jQuery Mobile page</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="quiz_vragen.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
<link rel="stylesheet" href="css/themes/default_theme.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
</head>

<body>
<div>
<div id="vraag_box"><h1>Waar staat PHP voor?</h1></div>

<form name="myform" action="http://www.mydomain.com/myformhandler.cgi" method="POST">
<input type="radio" name="group1" value="Milk"> Milk<br>
<input type="radio" name="group1" value="Butter" checked> Butter<br>

<div id="antwoord_box">
<div id="antwoord1">Preformatted Hypertext Processor</div>
<div id="antwoord2">Performed Hypertext Position</div>
<div id="antwoord3">Perfect Holistic Pearl</div>
<div id="antwoord4">Pioneering Hole Pandium</div>

<div id="beantwoord">Volgende vraag</div>
</div>
</div>

</body>
</html>