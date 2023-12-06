<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CungCaiCode | Be a Programming Hero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ded7dcde89.js" crossorigin="anonymous"></script>
 	<script defer type="text/javascript" src="js/lab.js"></script>
 	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
	<script defer type="text/javascript" src="js/saveFile.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/split.js/1.0.0/split.min.js" integrity="sha512-tTsZnBXEzNdEaqUO9Ok8fUofS73xieiBa54pD/sxOSvayIgItM9MmEM0CnUjA13LDnJT22sfwmjf20+Bo2174g==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lab.css') }}">
</head>
<body>
    @include('partials.navbar')

    <div class="editor">
        <div class="container split">
            <!-- Text area for Html Code  -->
            <textarea id="htmlCode"  placeholder="Type HTML code here" spellcheck="false" oninput="update(0)" onkeydown="if(event.keyCode===9){var v=this.value,s=this.selectionStart,e=this.selectionEnd;this.value=v.substring(0, s)+'\t'+v.substring(e);this.selectionStart=this.selectionEnd=s+1;return false;}if(event.keyCode==8){update(1);}"></textarea>
            <!-- Text area for Css Code  -->
            <textarea id="cssCode"  placeholder="Type CSS code here" spellcheck="false" oninput="update(0)" onkeydown="if(event.keyCode===9){var v=this.value,s=this.selectionStart,e=this.selectionEnd;this.value=v.substring(0, s)+'\t'+v.substring(e);this.selectionStart=this.selectionEnd=s+1;return false;}if(event.keyCode==8){update(1);}"></textarea>
            <!-- Text area for Javascript Code  -->
            <textarea id="javascriptCode" spellcheck="false" placeholder="Type JavaScript code here" oninput="update(0)" onkeydown="if(event.keyCode===9){var v=this.value,s=this.selectionStart,e=this.selectionEnd;this.value=v.substring(0, s)+'\t'+v.substring(e);this.selectionStart=this.selectionEnd=s+1;return false;}if(event.keyCode==8){update(1);}"></textarea>
        </div>
    
        <div class="iframe-container split">
            <iframe id="viewer"></iframe>
        </div>
    </div>

</body>
</html>