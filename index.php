<!DOCTYPE html>
<html>
<head>
<title></title>
    <meta charset="utf-8">
    <meta name="theme-color" content="#2a2e31" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <style type="text/css">
            body{
                font-family: 'Righteous', cursive;
                color:#707070;
                }
                html {
                  box-sizing: border-box;
                }
                *,
                *:before,
                *:after {
                  box-sizing: inherit;
                }
                .cf:before,
                .cf:after {
                  display: table;
                  content: ' ';
                }
                .cf:after {
                  clear: both;
                }
                .cf {
                  *zoom: 1;
                }
                body {
                  font-family: 'Roboto', Arial, sans-serif;
                  margin: 0;
                  color: #555;
                  background-color: #f5f7fa;
                }
                img {
                  max-width: 100%;
                  height: auto;
                }
                figure {
                  margin: 0;
                  padding: 10px;
                }
                figure a {
                  display: block;
                }
                mark {
                  padding: 0 5px;
                  background-color: #ddd;
                }
                ::backdrop {
                  background-color: rgba(0, 0, 0, 0.5);
                }
                .btn {
                  padding: 10px 15px;
                  cursor: pointer;
                  color: #555;
                  border-width: 1px;
                  border-style: solid;
                  border-radius: 3px;
                  background-color: #f3f3f3;
                }
                .btn.disabled {
                  cursor: not-allowed;
                  color: #ddd;
                  border-color: #ddd;
                }
                .btn-group {
                  padding: 15px 20px;
                  text-align: right;
                  background-color: #f5f6f8;
                }
                .btn-primary {
                  color: #fff;
                  border-color: #0066c0;
                  background-color: #0074d9;
                }
                .btn-primary:hover {
                  background-color: #0066c0;
                }
                .btn-danger {
                  color: #fff;
                  border-color: #ab3326;
                  background-color: #c0392b;
                }
                .btn-danger:hover {
                  background-color: #ab3326;
                }
                .btn-cancel {
                  color: #999;
                  border-color: #ddd;
                }
                .btn-cancel:hover {
                  background-color: #e6e6e6;
                }
                .site-header {
                  text-align: center;
                  background-color: #196e76;
                }
                .site-header h1,
                .site-header a {
                  padding: 15px;
                  text-transform: uppercase;
                  color: #fff;
                }
                .site-header h1 {
                  font-size: 18px;
                  margin: 0;
                }
                .site-header a {
                  font-size: 14px;
                  font-weight: 300;
                  display: block;
                  text-decoration: none;
                  background-color: #10474c;
                }
                .boxed-group {
                  width: 90%;
                  max-width: 680px;
                  margin-top: 50px;
                  margin-right: auto;
                  margin-left: auto;
                }
                .boxed-group h3,
                .boxed-group h4 {
                  font-weight: 400;
                  margin: 0;
                }
                .boxed-group h3 {
                  padding: 12px 20px;
                  color: #fff;
                  border-top-left-radius: 5px;
                  border-top-right-radius: 5px;
                  background-color: #434a54;
                }
                .boxed-group h4 {
                  font-size: 18px;
                  color: #555;
                }
                .boxed-group section {
                  padding: 30px 20px;
                }
                .boxed-group section:first-child {
                  border-bottom: 1px solid #e6e9ed;
                }
                .boxed-group section:only-of-type,
                .boxed-group section:only-child {
                  border-bottom: 0;
                }
                .boxed-group .boxed-group-inner {
                  font-size: 14px;
                  font-weight: 300;
                  color: #aaa;
                  border-width: 0 1px 1px;
                  border-style: solid;
                  border-color: #e6e9ed;
                  border-bottom-right-radius: 5px;
                  border-bottom-left-radius: 5px;
                  background-color: #fff;
                }
                .boxed-group .btn {
                  float: right;
                  margin-left: 20px;
                }
                .site-dialog {
                  overflow: hidden;
                  width: 95%;
                  max-width: 500px;
                  padding: 0;
                  border-width: 0;
                  border-radius: 5px;
                  background: transparent;
                  box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.3);
                }
                .site-dialog h1 {
                  font-size: 16px;
                  font-weight: normal;
                  margin: 0;
                  color: #fff;
                }
                .site-dialog p {
                  font-size: 14px;
                }
                .site-dialog .dialog-header {
                  padding: 12px 20px;
                  background-color: #434a54;
                }
                .site-dialog .dialog-content {
                  padding: 30px 20px;
                  color: #555;
                  background-color: #fff;
                }
                .site-dialog .dialog-content p:last-of-type,
                .site-dialog .dialog-content p:only-child {
                  margin-top: 0;
                  margin-bottom: 0;
                }
    
    
        * {
            font-family: Verdana, Arial, sans-serif;
          }
          a:link {
            color:#000;
            text-decoration: none;
          }
          a:visited {
            color:#000;
          }
          a:hover {
            color:#33F;
          }
          .button {
            background: -webkit-linear-gradient(top,#008dfd 0,#0370ea 100%);
            border: 1px solid #076bd2;
            border-radius: 3px;
            color: #fff;
            display: none;
            font-size: 13px;
            font-weight: bold;
            line-height: 1.3;
            padding: 8px 25px;
            text-align: center;
            text-shadow: 1px 1px 1px #076bd2;
            letter-spacing: normal;
          }
          .select::-webkit-scrollbar{
          background-color:white;
          width:2px;   
          }
          .center {
            padding: 10px;
            text-align: center;
          }
          .final {
            color: black;
            padding-right: 3px; 
          }
          .interim {
            color: gray;
          }
          .info {
            font-size: 14px;
            text-align: center;
            color: #777;
            display: none;
          }
          .right {
            float: right;
          }
          .sidebyside {
            display: inline-block;
            width: 45%;
            min-height: 40px;
            text-align: left;
            vertical-align: top;
          }
          #headline {
            font-size: 40px;
            font-weight: 300;
          }
          #info {
            font-size: 20px;
            text-align: center;
            color: #777;
            visibility: hidden;
          }
          #results {
            font-size: 14px;
            font-weight: bold;
            border: 1px solid #ddd;
            padding: 15px;
            text-align: left;
            min-height: 150px;
          }
          #start_button {
            border: 0;
            background-color:transparent;
            padding: 0;
          }
        </style>
</head>

<body>
  <div class="site-content cf">
  <div class="boxed-group dangerzone">

    <h3>Hoşgeldin</h3>

    <div class="boxed-group-inner">
      <section>
         <div id="info">
            <p id="info_speak_now">Konuşmaya Başlayabilirsin</p>
            <br>
            
            <p id="info_no_speech">Konuşma bulunamadı. Mikrofon ayarlarınızı değiştirmeniz gerekebilir.</p>
            
            <p id="info_no_microphone" style="display:none">Mikrofon bulunamadı. Bir mikrofonun kurulu olduğundan ve mikrofon ayarlarının doğru yapılandırıldığından emin olun.</p>
            
            <p id="info_allow">Mikrofonunuzu etkinleştirmek için yukarıdaki İzin Ver düğmesini tıklayın.</p>
            
            <p id="info_denied">Mikrofon kullanma izni engellenmiştir.</p>
            
            <p id="info_blocked">Sistemi Kullanabilmek için ayarlardan mikrofon kullanımına izin vermeniz gerekiyor.</p>
            
            <p id="info_upgrade">Sistem bu tarayıcı tarafından desteklenmiyor. v25 veya daha yeni bir Chrome sürümüne geçin.</p>
        </div>
<p id="p1" style="font-size: 20px;color: black;"></p>
<div class="right"><button id="start_button" onclick="startButton(event)"><img alt="Start" id="start_img" src="mic.gif" /></button></div>

<div id="results"><span class="final" id="final_span"></span> <span class="interim" id="interim_span"></span>

<p>&nbsp;</p>
</div>

<div class="center">

<div class="sidebyside">

<div id="div_language">
    <select class="select" id="select_language" onchange="updateCountry()" style="background-color: #434a54;color: #f5f7fa;-webkit-border-radius: 10px 10px 10px 10px;-webkit-border-after-color: #434a54;-webkit-border-end-color: #434a54;"></select>
    <select id="select_dialect"></select>
</div>
</div>
<script type="text/javascript" src="jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="jquery.zweatherfeed.min.js"></script>	
<script src='//vws.responsivevoice.com/v/e?key=ZLhykUXq'></script>

<script>
var langs =
[['Afrikaans',       ['af-ZA']],
 ['Bahasa Indonesia',['id-ID']],
 ['Bahasa Melayu',   ['ms-MY']],
 ['Català',          ['ca-ES']],
 ['Ceština',         ['cs-CZ']],
 ['Deutsch',         ['de-DE']],
 ['Türkçe',          ['tr-TR']],
 ['English',         ['en-AU', 'Australia'],
                     ['en-CA', 'Canada'],
                     ['en-IN', 'India'],
                     ['en-NZ', 'New Zealand'],
                     ['en-ZA', 'South Africa'],
                     ['en-GB', 'United Kingdom'],
                     ['en-US', 'United States']],
 ['Lingua latina',   ['la']]];
for (var i = 0; i < langs.length; i++) {
  select_language.options[i] = new Option(langs[i][0], i);
}
select_language.selectedIndex = 6;
updateCountry();
select_dialect.selectedIndex = 6;
showInfo('info_start');
function updateCountry() {
  for (var i = select_dialect.options.length - 1; i >= 0; i--) {
    select_dialect.remove(i);
  }
  var list = langs[select_language.selectedIndex];
  for (var i = 1; i < list.length; i++) {
    select_dialect.options.add(new Option(list[i][1], list[i][0]));
  }
  select_dialect.style.visibility = list[1].length == 1 ? 'hidden' : 'visible';
}
var final_transcript = '';
var recognizing = false;
var ignore_onend;
var start_timestamp;
if (!('webkitSpeechRecognition' in window)) {
  upgrade();
} else {
  start_button.style.display = 'inline-block';
  var recognition = new webkitSpeechRecognition();
  recognition.continuous = true;
  recognition.interimResults = true;
  recognition.onstart = function() {
    responsiveVoice.setDefaultVoice("Turkish Female");
    recognizing = true;
    showInfo('info_speak_now');
    start_img.src = 'mic-animate.gif';
  }
  recognition.onerror = function(event) {
    if (event.error == 'no-speech') {
      start_img.src = 'mic.gif';
      showInfo('info_no_speech');
      ignore_onend = true;
    }
    if (event.error == 'audio-capture') {
      start_img.src = 'mic.gif';
      showInfo('info_no_microphone');
      ignore_onend = true;
    }
    if (event.error == 'not-allowed') {
      if (event.timeStamp - start_timestamp < 100) {
        showInfo('info_blocked');
      } else {
        showInfo('info_denied');
      }
      ignore_onend = true;
    }
  }
  recognition.onend = function() {
    recognizing = false;
    if (ignore_onend) {
      return;
    }
    start_img.src = 'mic.gif';
    if (!final_transcript) {
      showInfo('info_start');
      return;
    }
    showInfo('');
    if (window.getSelection) {
      window.getSelection().removeAllRanges();
      var range = document.createRange();
      range.selectNode(document.getElementById('final_span'));
      window.getSelection().addRange(range);
    }
  }
  recognition.onresult = function(event) {
    var interim_transcript = '';
    for (var i = event.resultIndex; i < event.results.length; i++)
    {

      if (event.results[i].isFinal) {
        final_transcript += event.results[i][0].transcript;

      }
      else {
        interim_transcript += event.results[i][0].transcript;
      }
     
if(event.results[i][0].transcript.toLowerCase()=="merhaba")
{
  recognition.stop();
  responsiveVoice.setDefaultVoice("Turkish Female");
  responsiveVoice.speak("Merhabalar");
}     
if(event.results[i][0].transcript.toLowerCase()=="Merhaba")
{
  recognition.stop();
  responsiveVoice.setDefaultVoice("Turkish Female");
  responsiveVoice.speak("Merhabalar");
}
else if(event.results[i][0].transcript.toLowerCase()=="ne haber")
{
  recognition.stop();
  responsiveVoice.setDefaultVoice("Turkish Female");
  recognition.stop();
  responsiveVoice.speak("İyiyim senden naber?");
  recognition.stop();
}
else if(event.results[i][0].transcript.toLowerCase()=="haber")
{
  recognition.stop();
  responsiveVoice.setDefaultVoice("Turkish Female");
  recognition.stop();
  responsiveVoice.speak("İyiyim senden naber?");
  recognition.stop();
}
else if(event.results[i][0].transcript.toLowerCase()=="saat kaç")
{
    var tarih=new Date();
    var yil=tarih.getFullYear();
    var ay=tarih.getMonth();
    var gun=tarih.getDay();
    var saat=tarih.getHours();
    var dakika=tarih.getMinutes();
    var saniye=tarih.getSeconds();
    recognition.stop();
    responsiveVoice.setDefaultVoice("Turkish Female");
    recognition.stop();
    responsiveVoice.speak(saat+"'i"+dakika+" geçiyor");
    recognition.stop();
    document.getElementById("p1").innerHTML = (saat+":"+dakika);
  
}
else if(event.results[i][0].transcript.toLowerCase()=="kapan")
{
  recognition.stop();
  responsiveVoice.setDefaultVoice("Turkish Female");
  recognition.stop();
  responsiveVoice.speak("görüşürüz");
  recognition.stop();
   window.close();
}
    }
    final_transcript = capitalize(final_transcript);
    final_span.innerHTML = linebreak(final_transcript);
    interim_span.innerHTML = linebreak(interim_transcript);
    if (final_transcript || interim_transcript) {
      showButtons('inline-block');
    }
  }
}

function upgrade() {
  start_button.style.visibility = 'hidden';
  showInfo('info_upgrade');
}
var two_line = /\n\n/g;
var one_line = /\n/g;
function linebreak(s) {
  return s.replace(two_line, '<p></p>').replace(one_line, '<br>');
}
var first_char = /\S/;
function capitalize(s) {
  return s.replace(first_char, function(m) { return m.toUpperCase(); });
}
function startButton(event) {
  if (recognizing) {
    recognition.stop();
    return;
  }
  final_transcript = '';
  recognition.lang = select_dialect.value;
  recognition.start();
  ignore_onend = false;
  final_span.innerHTML = '';
  interim_span.innerHTML = '';
  start_img.src = 'mic-slash.gif';
  showInfo('info_allow');
  start_timestamp = event.timeStamp;
}
function showInfo(s) {
  if (s) {
    for (var child = info.firstChild; child; child = child.nextSibling) {
      if (child.style) {
        child.style.display = child.id == s ? 'inline' : 'none';
      }
    }
    info.style.visibility = 'visible';
  } else {
    info.style.visibility = 'hidden';
  }
}
var current_style;
function showButtons(style) {
  if (style == current_style) {
    return;
  }
  current_style = style;
}
</script>
</div>

</body>
</html>