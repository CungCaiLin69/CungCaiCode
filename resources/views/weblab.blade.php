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
    <script defer type="text/javascript" src="js/saveFile.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/split.js/1.0.0/split.min.js" integrity="sha512-tTsZnBXEzNdEaqUO9Ok8fUofS73xieiBa54pD/sxOSvayIgItM9MmEM0CnUjA13LDnJT22sfwmjf20+Bo2174g==" crossorigin="anonymous"></script>
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/weblab.css') }}">
</head>
<body>
    @include('partials.navbar')

    <div class="editor-container">
        <div class="editor-controls">
            <div class="tab-buttons">
                <button class="tab-btn active" data-target="htmlCode">HTML</button>
                <button class="tab-btn" data-target="cssCode">CSS</button>
                <button class="tab-btn" data-target="javascriptCode">JavaScript</button>
            </div>
            <div class="action-buttons">
                <button id="run-btn" class="action-btn" title="Run Code (Ctrl+Enter)">
                    <i class="fas fa-play"></i> Run
                </button>
                <button id="reset-btn" class="action-btn" title="Reset Code">
                    <i class="fas fa-redo"></i>
                </button>
            </div>
        </div>

        <div class="editor">
            <div class="code-container split">
                <!-- Text area for Html Code -->
                <textarea id="htmlCode" class="code-editor active" placeholder="<!-- Type HTML code here -->" spellcheck="false" oninput="update(0)" onkeydown="if(event.keyCode===9){var v=this.value,s=this.selectionStart,e=this.selectionEnd;this.value=v.substring(0, s)+'\t'+v.substring(e);this.selectionStart=this.selectionEnd=s+1;return false;}if(event.keyCode==8){update(1);}"></textarea>
                <!-- Text area for Css Code -->
                <textarea id="cssCode" class="code-editor" placeholder="/* Type CSS code here */" spellcheck="false" oninput="update(0)" onkeydown="if(event.keyCode===9){var v=this.value,s=this.selectionStart,e=this.selectionEnd;this.value=v.substring(0, s)+'\t'+v.substring(e);this.selectionStart=this.selectionEnd=s+1;return false;}if(event.keyCode==8){update(1);}"></textarea>
                <!-- Text area for Javascript Code -->
                <textarea id="javascriptCode" class="code-editor" placeholder="// Type JavaScript code here" spellcheck="false" oninput="update(0)" onkeydown="if(event.keyCode===9){var v=this.value,s=this.selectionStart,e=this.selectionEnd;this.value=v.substring(0, s)+'\t'+v.substring(e);this.selectionStart=this.selectionEnd=s+1;return false;}if(event.keyCode==8){update(1);}"></textarea>
            </div>

            <div class="preview-container split">
                <div class="preview-header">
                    <h3>Preview</h3>
                    <div class="preview-actions">
                        <button id="fullscreen-btn" class="action-btn" title="Toggle Fullscreen">
                            <i class="fas fa-expand"></i>
                        </button>
                    </div>
                </div>
                <iframe id="viewer" title="Code Preview"></iframe>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('keydown', function(e) {
            if (e.ctrlKey && e.key === 'Enter') {
                document.getElementById('run-btn').click();
            }
        });

        const tabButtons = document.querySelectorAll('.tab-btn');
        const codeEditors = document.querySelectorAll('.code-editor');
        
        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                tabButtons.forEach(btn => btn.classList.remove('active'));
                codeEditors.forEach(editor => editor.classList.remove('active'));

                button.classList.add('active');
                const targetId = button.getAttribute('data-target');
                document.getElementById(targetId).classList.add('active');
            });
        });

        document.getElementById('run-btn').addEventListener('click', function() {
            update(0);
        });

        document.getElementById('reset-btn').addEventListener('click', function() {
            if (confirm('Are you sure you want to reset all code?')) {
                document.getElementById('htmlCode').value = '';
                document.getElementById('cssCode').value = '';
                document.getElementById('javascriptCode').value = '';
                update(0);
            }
        });

        document.getElementById('fullscreen-btn').addEventListener('click', function() {
            const iframe = document.getElementById('viewer');
            if (!document.fullscreenElement) {
                iframe.requestFullscreen().catch(err => {
                    alert(`Error attempting to enable fullscreen: ${err.message}`);
                });
            } else {
                document.exitFullscreen();
            }
        });
    </script>
</body>
</html>