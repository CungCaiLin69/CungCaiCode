<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CungCaiCode | Be a Programming Hero</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
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
        <script src="https://kit.fontawesome.com/ded7dcde89.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/pythonz.css') }}">
    </head>
    <body>
        @include('partials.sidebar')
        <div id="py-page">
            <section id="intro">
                <h1>🐍 Python Introduction</h1>
                <h2>What is Python?</h2>
                <p>
                    Python is a <span class="tooltip" data-tooltip="Easy to read and write">high-level</span>, 
                    <span class="tooltip" data-tooltip="Code is executed line by line">interpreted</span> programming language created by 
                    <strong>Guido van Rossum</strong> and released in <strong>1991</strong>. It's designed with simplicity and readability in mind.
                </p>
                <h3>🚀 What can you build with Python?</h3>
                <ul>
                    <li><strong>Web Applications</strong> - Django, Flask, FastAPI</li>
                    <li><strong>Data Science & AI</strong> - NumPy, Pandas, TensorFlow</li>
                    <li><strong>Automation Scripts</strong> - Task automation and scripting</li>
                    <li><strong>Desktop Applications</strong> - Tkinter, PyQt</li>
                    <li><strong>Games</strong> - Pygame, Panda3D</li>
                    <li><strong>Network Programming</strong> - Socket programming, APIs</li>
                </ul>
                <h3>✨ Why Choose Python?</h3>
                <ul>
                    <li><strong>Simple Syntax</strong> - Reads like English, easy to learn</li>
                    <li><strong>Cross-Platform</strong> - Runs on Windows, Mac, Linux</li>
                    <li><strong>Huge Community</strong> - Extensive libraries and support</li>
                    <li><strong>Rapid Development</strong> - Quick prototyping and development</li>
                    <li><strong>Versatile</strong> - Object-oriented, functional, procedural</li>
                </ul>
                <h4>🎯 Your First Python Code</h4>
                <div class="code-block">
                    <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                    <code><span class="keyword">print</span>(<span class="string">"Hello, World!"</span>)</code>
                </div>
                <button class="try-it-btn" onclick="runCode()">
                <i class="fas fa-play"></i> Try it now
                </button>
            </section>
            <section id="started">
                <h1>🔧 Getting Started</h1>
                <h2>Installing Python</h2>
                <p>
                    Most computers come with Python pre-installed. Let's check if you have Python on your system.
                </p>
                <h3>Windows Users</h3>
                <div class="code-block">
                    <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                    <code>C:\Users\YourName> <span class="keyword">python --version</span></code>
                </div>
                <h3>Mac/Linux Users</h3>
                <div class="code-block">
                    <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                    <code>$ <span class="keyword">python3 --version</span></code>
                </div>
                <div class="success-message">
                    <i class="fas fa-info-circle"></i>
                    <strong>Don't have Python?</strong> Download it from <a href="https://python.org" style="color: var(--accent-yellow);">python.org</a>
                </div>
                <h2>Running Your First Program</h2>
                <p>Create a file called <code>hello.py</code> and add this code:</p>
                <div class="code-block">
                    <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                    <code><span class="keyword">print</span>(<span class="string">"Welcome to Python programming!"</span>)</code>
                </div>
                <p>Run it from your terminal:</p>
                <div class="code-block">
                    <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                    <code>$ <span class="keyword">python hello.py</span>
                    <span class="output">Welcome to Python programming!</span></code>
                </div>
                <h3>Interactive Python Shell</h3>
                <p>For quick testing, use Python's interactive mode:</p>
                <div class="code-block">
                    <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                    <code>$ <span class="keyword">python</span>
                    Python 3.9.0 (default, Oct  6 2020, 20:47:39)
                    [GCC 7.3.0] :: Anaconda, Inc. on linux
                    Type "help", "copyright", "credits" or "license" for more information.
                    >>> <span class="keyword">print</span>(<span class="string">"Hello, Interactive Python!"</span>)
                    <span class="output">Hello, Interactive Python!</span>
                    >>> <span class="keyword">exit()</span></code>
                </div>
            </section>
            <section id="syntax">
                <h1>📝 Python Syntax</h1>
                <h2>The Beauty of Python Syntax</h2>
                <p>Python's syntax is clean, readable, and intuitive. Let's explore the fundamentals:</p>
                <h3>Indentation Matters!</h3>
                <p>Unlike other languages that use <code>{}</code>, Python uses <strong>indentation</strong> to define code blocks:</p>
                <div class="code-block">
                    <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                    <code><span class="keyword">if</span> 5 > 2:
                    <span class="keyword">print</span>(<span class="string">"Five is greater than two!"</span>)  <span class="comment"># 4 spaces indentation</span></code>
                </div>
                <div class="error-message">
                    <i class="fas fa-exclamation-triangle"></i>
                    <strong>Syntax Error:</strong> Missing indentation will cause an error!
                </div>
                <div class="code-block">
                    <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                    <code><span class="comment"># This will cause an error:</span>
                    <span class="keyword">if</span> 5 > 2:
                    <span class="keyword">print</span>(<span class="string">"This is wrong!"</span>)  <span class="comment"># No indentation = Error!</span></code>
                </div>
                <h3>Variables - No Declaration Needed!</h3>
                <p>Python creates variables when you assign values to them:</p>
                <div class="code-block">
                    <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                    <code><span class="comment"># Numbers</span>
                    x = 42
                    pi = 3.14159
                    <span class="comment"># Strings</span>
                    name = <span class="string">"Alice"</span>
                    message = <span class="string">"Welcome to Python!"</span>
                    <span class="comment"># Booleans</span>
                    is_learning = <span class="keyword">True</span>
                    is_difficult = <span class="keyword">False</span></code>
                </div>
                <h3>Comments - Document Your Code</h3>
                <div class="code-block">
                    <button class="copy-btn" onclick="copyCode(this)">Copy</button>
                    <code><span class="comment"># Single line comment</span>
                    <span class="keyword">print</span>(<span class="string">"Hello World"</span>)  <span class="comment"># Inline comment</span>
                    <span class="comment">"""
                    Multi-line comment
                    for longer explanations
                    """</span></code>
                </div>
                <button class="try-it-btn" onclick="runCode()">
                <i class="fas fa-code"></i> Practice Syntax
                </button>
            </section>
            <div class="section-nav">
                <a href="#intro" class="nav-btn">
                <i class="fas fa-arrow-left"></i>
                Previous: Introduction
                </a>
                <a href="#variables" class="nav-btn">
                Next: Variables
                <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>