<!DOCTYPE html>
<html>

<head>

  <title></title>
  <meta charset="UTF-8" />
</head>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js"></script>

<!-- Fonts & Fonticons -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

<style type="text/css">
body {
  font-family: "Poppins", Arial, sans-serif;
}

</style>

<body>
  <div id="app"></div>
  <div id="cookieconsent"></div>



<script>
  window.cookieconsent.initialise({
    container: document.getElementById("cookieconsent"),
    palette:{
     popup: {background: "#686464"},
     button: {background: "#e0e0e0"},
    },
    revokable: true,
    onStatusChange: function(status) {
     console.log(this.hasConsented() ?
      'enable cookies' : 'disable cookies');
    },
    "position": "bottom-left",
    "theme": "classic",
    "domain": "privacyPolicy.php",
    "secure": true,
    "content": {
      "header": 'Cookies used on the website!',
      "message": 'This website uses cookies to improve your experience.',
      "dismiss": 'Got it!',
      "allow": 'Allow cookies',
      "deny": 'Decline',
      "link": 'Learn more',
      "href": 'privacyPolicy.php',
      "close": '&#x274c;',
      "policy": 'Cookie Policy',
      "target": '_blank',
      }
   });

</script>

<script type="text/javascript">
$.getJSON('mydata.json', function(data) {
    {
      "name": "parcel-sandbox",
      "version": "1.0.0",
      "description": "Simple Parcel Sandbox",
      "main": "index.php",
      "scripts": {
        "start": "parcel index.html --open",
        "build": "parcel build index.html"
      },
      "dependencies": {
        "cookieconsent": "3.1.1"
      },
      "devDependencies": {
        "@babel/core": "7.2.0",
        "parcel-bundler": "^1.6.1"
      }
    }
});
</script>

<script src="assets/js/jquery.min.js"></script>

<script type="text/javascript">
 document.getElementById("app").innerHTML = ``;
</script>

</body>

</html>
