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
            <h1>Python Introduction</h1>

            <h2>What is Python?</h2>
            <p>
                Python is a popular programming language. It was created by Guido van Rossum, and released in 1991.
                <br>
                It is used for:
            </p>

            <ul>
                <li>web development (server-side)</li>
                <li>software development</li>
                <li>mathematics</li>
                <li>system scripting</li>
            </ul>

            <h3>What can Python do?</h3>
            <ul>
                <li>Python can be used on a server to create web applications.</li>
                <li>Python can be used alongside software to create workflows.</li>
                <li>Python can connect to database systems. It can also read and modify files.</li>
                <li>Python can be used to handle big data and perform complex mathematics.</li>
                <li>Python can be used for rapid prototyping, or for production-ready software development.</li>
            </ul>

            <h3>Why Python?</h3>
            <ul>
                <li>Python works on different platforms (Windows, Mac, Linux, Raspberry Pi, etc).</li>
                <li>Python has a simple syntax similar to the English language.</li>
                <li>Python has syntax that allows developers to write programs with fewer lines than some other programming languages.</li>
                <li>Python runs on an interpreter system, meaning that code can be executed as soon as it is written. This means that prototyping can be very quick.</li>
                <li>Python can be treated in a procedural way, an object-oriented way or a functional way.</li>
            </ul>

            <h3>Python Syntax compared to other programming languages</h3>
            <ul>
                <li>Python was designed for readability, and has some similarities to the English language with influence from mathematics.</li>
                <li>Python uses new lines to complete a command, as opposed to other programming languages which often use semicolons or parentheses.</li>
                <li>Python relies on indentation, using whitespace, to define scope; such as the scope of loops, functions and classes. Other programming languages often use curly-brackets for this purpose.</li>
            </ul>

            <h4>Example</h4>
            <code>print("Hello, World!")</code>
        </section>

        <hr>

        <section id="started">
            <h1>Python Getting Started</h1>

            <h2>Python Install</h2>
            <p>
                Many PCs and Macs will have python already installed.
                <br>
                To check if you have python installed on a Windows PC, search in the start bar for Python or run the following on the Command Line (cmd.exe):
            </p>
            <code>C:\Users\Your Name>python --version</code>

            <p>To check if you have python installed on a Linux or Mac, then on linux open the command line or on Mac open the Terminal and type:</p>
            <code>python --version</code>
            <p>If you find that you do not have Python installed on your computer, then you can download it for free from the following website: https://www.python.org/</p>

            <h2>Python Quickstart</h2>
            <p>
                Python is an interpreted programming language, this means that as a developer you write Python (.py) files in a text editor and then put those files into the python interpreter to be executed.
            </p>

            <p>The way to run a python file is like this on the command line:</p>
            <code>C:\Users\Your Name>python helloworld.py</code>

            <p>
                Where "helloworld.py" is the name of your python file.
                <br>
                Let's write our first Python file, called helloworld.py, which can be done in any text editor.
            </p>
            <code>print("Hello, World!")</code>

            <p>Simple as that. Save your file. Open your command line, navigate to the directory where you saved your file, and run:</p>
            <code>C:\Users\Your Name>python helloworld.py</code>

            <p>The output should read:</p>
            <code>Hello, World!</code>

            <p>Congratulations, you have written and executed your first Python program.</p>
            
            <h2>The Python Command Line</h2>
            <p>
                To test a short amount of code in python sometimes it is quickest and easiest not to write the code in a file. This is made possible because Python can be run as a command line itself.
                <br>
                Type the following on the Windows, Mac or Linux command line:
            </p>
            <code>C:\Users\Your Name>python</code>

            <p>Or, if the "python" command did not work, you can try "py":</p>
            <code>C:\Users\Your Name>py</code>

            <p>From there you can write any python, including our hello world example from earlier in the tutorial:</p>
            <code>
                C:\Users\Your Name>python
                Python 3.6.4 (v3.6.4:d48eceb, Dec 19 2017, 06:04:45) [MSC v.1900 32 bit (Intel)] on win32
                Type "help", "copyright", "credits" or "license" for more information.
                >>> print("Hello, World!")
            </code>

            <p>Which will write "Hello, World!" in the command line:</p>
            <code>
                C:\Users\Your Name>python
                Python 3.6.4 (v3.6.4:d48eceb, Dec 19 2017, 06:04:45) [MSC v.1900 32 bit (Intel)] on win32
                Type "help", "copyright", "credits" or "license" for more information.
                >>> print("Hello, World!")
                Hello, World!
            </code>

            <p>Whenever you are done in the python command line, you can simply type the following to quit the python command line interface:</p>
            <code>exit()</code>
        </section>

        <hr>

        <section id="syntax">
            <h1>Python Syntax</h1>

            <h2>Execute Python Syntax</h2>
            <p>As we learned in the previous page, Python syntax can be executed by writing directly in the Command Line:</p>
            <code>
                >>> print("Hello, World!")
                Hello, World!
            </code>

            <h2>Python indentation</h2>
            <p>
                Indentation refers to the spaces at the beginning of a code line.
                <br>
                Where in other programming languages the indentation in code is for readability only, the indentation in Python is very important.
                <br>
                Python uses indentation to indicate a block of code.
            </p>

            <h4>Example</h4>
            <code>
                if 5 > 2:
                print("Five is greater than two!")
            </code>

            <P>Python will give you an error if you skip the indentation:</P>
            <h4>Example</h4>
            <h5>Syntax Error:</h5>
            <code>
                if 5 > 2:
                print("Five is greater than two!")
            </code>

            <p>The number of spaces is up to you as a programmer, the most common use is four, but it has to be at least one.</p>
            <h4>Example</h4>
            <code>
                if 5 > 2:
                print("Five is greater than two!") 
                if 5 > 2:
                       print("Five is greater than two!")
            </code>

            <p>You have to use the same number of spaces in the same block of code, otherwise Python will give you an error:</p>
            <h4>Example</h4>
            <h5>Syntax Error:</h5>
            <code>
                if 5 > 2:
                print("Five is greater than two!")
                       print("Five is greater than two!")
            </code>

            <h2>Python Variables</h2>
            <p>In Python, variables are created when you assign a value to it:</p>
            <h4>Example</h4>
            <h5>Variables in Python:</h5>
            <code>
                x = 5
                y = "Hello, World!"
            </code>

            <p>
                Python has no command for declaring a variable. 
                <br>
                You will learn more about variables in the Python Variables chapter.
            </p>

            <h2>Comments</h2>
            <p>
                Python has commenting capability for the purpose of in-code documentation.
                <br>
                Comments start with a #, and Python will render the rest of the line as a comment:
            </p>
            <h4>Example</h4>
            <h5>Comments in Python:</h5>
            <code>
                #This is a comment.
                print("Hello, World!")
            </code>
        </section>

        <hr>

        <section id="comments">
            <h1>Python Comments</h1>

            <p>
                Comments can be used to explain Python code.
                <br>
                Comments can be used to make the code more readable.
                <br>
                Comments can be used to prevent execution when testing code.
            </p>

            <h2>Creating a Comment</h2>
            <p>Comments starts with a <code>#</code>, and Python will ignore them:</p>
            <h4>Example</h4>
            <code>
                #This is a comment
                print("Hello, World!")
            </code>

            <p>A comment does not have to be text that explains the code, it can also be used to prevent Python from executing code:</p>
            <h4>Example</h4>
            <code>
                #print("Hello, World!")
                print("Cheers, Mate!")
            </code>

            <h2>Multiline Comments</h2>
            <p>
                Python does not really have a syntax for multiline comments.
                <br>
                To add a multiline comment you could insert a <code>#</code> for each line:
            </p>
            <h4>Example</h4>
            <code>
                #This is a comment
                #written in
                #more than just one line
                print("Hello, World!")
            </code>

            <p>
                Or, not quite as intended, you can use a multiline string.
                <br>
                Since Python will ignore string literals that are not assigned to a variable, you can add a multiline string (triple quotes) in your code, and place your comment inside it:
            </p>
            <h4>Example</h4>
            <code>
                """
                This is a comment
                written in
                more than just one line
                """
                print("Hello, World!")
            </code>
            <p>As long as the string is not assigned to a variable, Python will read the code, but then ignore it, and you have made a multiline comment.</p>
        </section>

        <hr>

        <section id="variables">
            <h1>Python Variables</h1>

            <h2>Variables</h2>
            <p>Variables are containers for storing data values.</p>

            <h2>Creating Variables</h2>
            <p>
                Python has no command for declaring a variable.
                <br>
                A variable is created the moment you first assign a value to it.
            </p>
            <h4>Example</h4>
            <code>
                x = 5
                y = "John"
                print(x)
                print(y)
            </code>

            <p>Variables do not need to be declared with any particular type, and can even change type after they have been set.</p>
            <code>
                x = 4       # x is of type int
                x = "Sally" # x is now of type str
                print(x)
            </code>

            <h2>Casting</h2>
            <p>If you want to specify the data type of a variable, this can be done with casting.</p>
            <code>
                x = str(3)    # x will be '3'
                y = int(3)    # y will be 3
                z = float(3)  # z will be 3.0
            </code>

            <h2>Get The Type</h2>
            <p>You can get the data type of a variable with the type() function.</p>
            <code>
                x = 5
                y = "John"
                print(type(x))
                print(type(y))
            </code>
        </section>

        <hr>

        <section id="dataTypes">
            <h1>Python Data Types</h1>

            <h2>Built-in Data Types</h2>
            <p>
                In programming, data type is an important concept.
                <br>
                Variables can store data of different types, and different types can do different things.
                <br>
                Python has the following data types built-in by default, in these categories:
            </p>

            <ul>
                <li>Text Type:	<code>str</code></li>
                <li>Numeric Types:	<code>int, float, complex</code></li>
                <li>Sequence Types:	<code>list, tuple, range</code></li>
                <li>Mapping Type:	<code>dict</code></li>
                <li>Set Types:	<code>set, frozenset</code></li>
                <li>Boolean Type:	<code>bool</code></li>
                <li>Binary Types:	<code>bytes, bytearray, memoryview</code></li>
                <li>None Type:	<code>NoneType</code></li>
            </ul>

            <h2>Getting The Data Type</h2>
            <p>You can get the data type of any object by using the type() function:</p>
            <h4>Example</h4>
            <h5>Print the data type of the variable x:</h5>
            <code>
                x = 5
                print(type(x))
            </code>



        </section>

        <hr>

        <section id="numbers">
            <h1>Python Numbers</h1>
            <p>There are three numeric types in Python:</p>
            <ul>
                <li><code>int</code></li>
                <li><code>float</code></li>
                <li><code>complex</code></li>
            </ul>
            <p>Variables of numeric types are created when you assign a value to them:</p>
            <h4>Example</h4>
            <code>
                x = 1    # int
                y = 2.8  # float
                z = 1j   # complex
            </code>

            <p>To verify the type of any object in Python, use the type() function:</p>
            <h4>Example</h4>
            <code>
                print(type(x))
                print(type(y))
                print(type(z))
            </code>

            <h2>Type Conversion</h2>
            <p>You can convert from one type to another with the int(), float(), and complex() methods:</p>
            <h4>Example</h4>
            <h5>Convert from one type to another:</h5>
            <code>
                x = 1    # int
                y = 2.8  # float
                z = 1j   # complex
                
                #convert from int to float:
                a = float(x)
                
                #convert from float to int:
                b = int(y)
                
                #convert from int to complex:
                c = complex(x)
                
                print(a)
                print(b)
                print(c)
                
                print(type(a))
                print(type(b))
                print(type(c))
            </code>

            <h2>Random Number</h2>
            <p>Python does not have a random() function to make a random number, but Python has a built-in module called random that can be used to make random numbers:</p>
            <h4>Example</h4>
            <h5>Import the random module, and display a random number between 1 and 9:</h5>
            <code>
                import random

                print(random.randrange(1, 10))
            </code>
        </section>

        <hr>

        <section id="casting">
            <h1>Python Casting</h1>

            <h2>Specify a Variable Type</h2>
            <p>
                There may be times when you want to specify a type on to a variable. This can be done with casting. Python is an object-orientated language, and as such it uses classes to define data types, including its primitive types.
                <br>
                Casting in python is therefore done using constructor functions:
            </p>
            <ul>
                <li><code>int()</code> - constructs an integer number from an integer literal, a float literal (by removing all decimals), or a string literal (providing the string represents a whole number)</li>
                <li><code>float()</code> - constructs a float number from an integer literal, a float literal or a string literal (providing the string represents a float or an integer)</li>
                <li><code>str()</code> - constructs a string from a wide variety of data types, including strings, integer literals and float literals</li>
            </ul>
            <h4>Example</h4>
            <h5>Integers</h5>
            <code>
                x = int(1)   # x will be 1
                y = int(2.8) # y will be 2
                z = int("3") # z will be 3
            </code>

            <h4>Example</h4>
            <h5>Floats</h5>
            <code>
                x = float(1)     # x will be 1.0
                y = float(2.8)   # y will be 2.8
                z = float("3")   # z will be 3.0
                w = float("4.2") # w will be 4.2
            </code>

            <h4>Example</h4>
            <h5>Strings</h5>
            <code>
                x = str("s1") # x will be 's1'
                y = str(2)    # y will be '2'
                z = str(3.0)  # z will be '3.0'
            </code>
        </section>

        <hr>

        <section id="strings">
            <h1>Python Srings</h1>
            
            <h2>Strings</h2>
            <p>
                Strings in python are surrounded by either single quotation marks, or double quotation marks.
                <br>
                <code>'hello'</code> is the same as <code>"hello"</code>.
                <br>
                You can display a string literal with the <code>print()</code> function:
            </p>
            <h4>Example</h4>
            <code>
                print("Hello")
                print('Hello')
            </code>

            <h2>Assing String to a Variable</h2>
            <p>Assigning a string to a variable is done with the variable name followed by an equal sign and the string:</p>
            <h4>Example</h4>
            <code>
                a = "Hello"
                print(a)
            </code>

            <h2>Multiline Strings</h2>
            <p>You can assign a multiline string to a variable by using three quotes:</p>
            <h4>Example</h4>
            <h5>You can use three double quotes:</h5>
            <code>
                a = """Lorem ipsum dolor sit amet,
                consectetur adipiscing elit,
                sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua."""
                print(a)
            </code>
            
            <h2>Srings are Arrays</h2>
            <p>
                Like many other popular programming languages, strings in Python are arrays of bytes representing unicode characters.
                <br>
                However, Python does not have a character data type, a single character is simply a string with a length of 1.
                <br>
                Square brackets can be used to access elements of the string.
            </p>
            <h4>Example</h4>
            <h5>Get the character at position 1 (remember that the first character has the position 0):</h5>
            <code>
                a = "Hello, World!"
                print(a[1])
            </code>

            <h2>Looping Through a String</h2>
            <p>Since strings are arrays, we can loop through the characters in a string, with a for loop.</p>
            <h4>Example</h4>
            <h5>Loop through the letters in the word "banana":</h5>
            <code>
                for x in "banana":
                print(x)
            </code>

            <h2>String Length</h2>
            <p>To get the length of a string, use the len() function.</p>
            <h4>Example</h4>
            <h5>The <code>len()</code> function returns the length of a string:</h5>
            <code>
                a = "Hello, World!"
                print(len(a))
            </code>

            <h2>Check String</h2>
            <p>To check if a certain phrase or character is present in a string, we can use the keyword in.</p>
            <h4>Example</h4>
            <h5>Check if "free" is present in the following text:</h5>
            <code>
                txt = "The best things in life are free!"
                print("free" in txt)
            </code>

            <p>Use it in an if statement:</p>
            <h4>Example</h4>
            <h5>Print only if "free" is present:</h5>
            <code>
                txt = "The best things in life are free!"
                if "free" in txt:
                  print("Yes, 'free' is present.")
            </code>
        </section>

        <hr>

        <section id="booleans">
            <h1>Python Booleans</h1>
            <p>Booleans represent one of two values: True or False.</p>

            <h2>Boolean Values</h2>
            <p>
                In programming you often need to know if an expression is True or False.
                <br>
                You can evaluate any expression in Python, and get one of two answers, True or False.
                <br>
                When you compare two values, the expression is evaluated and Python returns the Boolean answer:
            </p>
            <h4>Example</h4>
            <code>
                print(10 > 9)
                print(10 == 9)
                print(10 < 9)
            </code>

            <p>When you run a condition in an if statement, Python returns True or False:</p>
            <h4>Example</h4>
            <h5>Print a message based on whether the condition is True or False:</h5>
            <code>
                a = 200
                b = 33
                
                if b > a:
                  print("b is greater than a")
                else:
                  print("b is not greater than a")
            </code>

            <h2>Evaluate Values and Variables</h2>
            <p>The bool() function allows you to evaluate any value, and give you True or False in return,</p>
            <h4>Example</h4>
            <h5>Evaluate a string and a number:</h5>
            <code>
                print(bool("Hello"))
                print(bool(15))
            </code>

            <h2>Most Values are True</h2>
            <p>
                Almost any value is evaluated to True if it has some sort of content.
                <br>
                Any string is True, except empty strings.
                <br>
                Any number is True, except 0.
                <br>
                Any list, tuple, set, and dictionary are True, except empty ones.
            </p>
            <h4>Example</h4>
            <h5>The following will return True:</h5>
            <code>
                bool("abc")
                bool(123)
                bool(["apple", "cherry", "banana"])
            </code>

            <h2>Some Values are False</h2>
            <p>
                In fact, there are not many values that evaluate to <code>False</code>, except empty values, such as <code>()</code>, <code>[]</code>, <code>{}</code>, <code>""</code>, the number <code>0</code>, and the value <code>None</code>. And of course the value <code>False</code> evaluates to <code>False</code>.
            </p>
            <h4>Example</h4>
            <h5>The following will return False:</h5>
            <code>
                bool(False)
                bool(None)
                bool(0)
                bool("")
                bool(())
                bool([])
                bool({})
            </code>

            <p>
                One more value, or object in this case, evaluates to <code>False</code>, and that is if you have an object that is made from a class with a <code>__len__</code> function that returns <code>0</code> or <code>False</code>:
            </p>
            <h4>Example</h4>
            <code>
                class myclass():
                def __len__(self):
                  return 0
              
                myobj = myclass()
                print(bool(myobj))
            </code>

            <h2>Functions can Return a Boolean</h2>
            <p>You can create functions that returns a Boolean Value:</p>
            <h4>Example</h4>
            <h5>Print the answer of a function:</h5>
            <code>
                def myFunction() :
                  return True
              
                print(myFunction())
            </code>

            <p>You can execute code based on the Boolean answer of a function:</p>
            <h4>Example</h4>
            <h5>Print "YES!" if the function returns True, otherwise print "NO!":</h5>
            <code>
                def myFunction() :
                  return True
              
                if myFunction():
                  print("YES!")
                else:
                  print("NO!")
            </code>

            <p>Python also has many built-in functions that return a boolean value, like the isinstance() function, which can be used to determine if an object is of a certain data type:</p>
            <h4>Example</h4>
            <h5>Check if an object is an integer or not:</h5>
            <code>
                x = 200
                print(isinstance(x, int))
            </code>
        </section>

        <hr>

        <section id="operators">

            <h1>Python Operators</h1>

            <h2>Python Operators</h2>
            <p>
                Operators are used to perform operations on variables and values.
                <br>
                In the example below, we use the <code>+</code> operator to add together two values:
            </p>
            <h4>Example</h4>
            <code>print(10 + 5)</code>

            <p>Python divides the operators in the following groups:</p>
            <ul>
                <li>Arithmetic operators</li>
                <li>Assignment operators</li>
                <li>Comparison operators</li>
                <li>Logical operators</li>
                <li>Identity operators</li>
                <li>Membership operators</li>
                <li>Bitwise operators</li>
            </ul>

            <h2>Operator Precedence</h2>
            <p>Operator precedence describes the order in which operations are performed.</p>
            <h4>Example</h4>
            <h5>Parentheses has the highest precedence, meaning that expressions inside parentheses must be evaluated first:</h5>
            <code>print((6 + 3) - (6 + 3))</code>

            <h4>Example</h4>
            <h5>Multiplication <code>*</code> has higher precedence than addition <code>+</code>, and therefor multiplications are evaluated before additions:</h5>
            <code>print(100 + 5 * 3)</code>

            <p>If two operators have the same precedence, the expression is evaluated from left to right.</p>
            <h4>Example</h4>
            <h5>Addition <code>+</code> and subtraction <code>-</code> has the same precedence, and therefor we evaluate the expression from left to right:</h5>
            <code>print(5 + 4 - 7 + 3)</code>
        </section>

        <hr>

        <section id="lists">
            <h1>Python 
                
            </h1>
            <code>mylist = ["apple", "banana", "cherry"]</code>

            <h2>List</h2>
            <p>
                
                 are used to store multiple items in a single variable.
                <br>
                
                 are one of 4 built-in data types in Python used to store collections of data, the other 3 are Tuple, Set, and Dictionary, all with different qualities and usage.
                <br>
                
                 are created using square brackets:
            </p>
            <h4>Example</h4>
            <h5>Create a List:</h5>
            <code>
                thislist = ["apple", "banana", "cherry"]
                print(thislist)
            </code>

            <h2>List Items</h2>
            <p>
                List items are ordered, changeable, and allow duplicate values.
                <br>
                List items are indexed, the first item has index [0], the second item has index [1] etc.
            </p>
            
            <h2>Ordered</h2>
            <p>
                When we say that 
                 are ordered, it means that the items have a defined order, and that order will not change.
                <br>
                If you add new items to a list, the new items will be placed at the end of the list.
            </p>

            <h2>Changeable</h2>
            <p>The list is changeable, meaning that we can change, add, and remove items in a list after it has been created.</p>

            <h2>Allow Duplicate</h2>
            <p>Since 
                 are indexed, 
                 can have items with the same value:</p>
            <h4>Example</h4>
            <h5>
                 allow duplicate values:</h5>
            <code>
                thislist = ["apple", "banana", "cherry", "apple", "cherry"]
                print(thislist)
            </code>

            <h2>List length</h2>
            <p>To determine how many items a list has, use the len() function:</p>
            <h4>Example</h4>
            <h5>Print the number of items in the list:</h5>
            <code>
                thislist = ["apple", "banana", "cherry"]
                print(len(thislist))
            </code>

            <h2>List Items - Data Types</h2>
            <p>List items can be of any data type:</p>
            <h4>Example</h4>
            <h5>String, int and boolean data types:</h5>
            <code>
                list1 = ["apple", "banana", "cherry"]
                list2 = [1, 5, 7, 9, 3]
                list3 = [True, False, False]
            </code>
            <p>A list can contain different data types:</p>
            <h4>Example</h4>
            <h5>A list with strings, integers and boolean values:</h5>
            <code>list1 = ["abc", 34, True, 40, "male"]</code>

            <h2>type()</h2>
            <p> From Python's perspective, 
                 are defined as objects with the data type 'list':</p>
            <code>class 'list'</code>
            <h4>Example</h4>
            <h5>What is the data type of a list?</h5>
            <code>
                mylist = ["apple", "banana", "cherry"]
                print(type(mylist))
            </code>

            <h2>Python Collections (Arrays)</h2>
            <p>There are four collection data types in the Python programming language:</p>
            <ul>
                <li>List is a collection which is ordered and changeable. Allows duplicate members.</li>
                <li>Tuple is a collection which is ordered and unchangeable. Allows duplicate members.</li>
                <li>Set is a collection which is unordered, unchangeable*, and unindexed. No duplicate members.</li>
                <li>Dictionary is a collection which is ordered** and changeable. No duplicate members.</li>
            </ul>
            <p>
                When choosing a collection type, it is useful to understand the properties of that type. Choosing the right type for a particular data set could mean retention of meaning, and, it could mean an increase in efficiency or security.
            </p>
        </section>

        <hr>

        <section id="tuples">
            <h1>Python Tuples</h1>

            <code>mytuple = ("apple", "banana", "cherry")</code>
            <h2>Tuple</h2>
            <p>
                Tuples are used to store multiple items in a single variable.
                <br>
                Tuple is one of 4 built-in data types in Python used to store collections of data, the other 3 are List, Set, and Dictionary, all with different qualities and usage.
                <br>
                A tuple is a collection which is ordered and unchangeable.
                <br>
                Tuples are written with round brackets.
            </p>
            <h4>Example</h4>
            <h5>Create a Tuple:</h5>
            <code>
                thistuple = ("apple", "banana", "cherry")
                print(thistuple)
            </code>

            <h2>Tuple Items</h2>
            <p>
                Tuple items are ordered, unchangeable, and allow duplicate values.
                <br>
                Tuple items are indexed, the first item has index <code>[0]</code>, the second item has index <code>[1]</code> etc.
            </p>

            <h2>Ordered</h2>
            <p>When we say that tuples are ordered, it means that the items have a defined order, and that order will not change.</p>

            <h2>Unchangeable</h2>
            <p>Tuples are unchangeable, meaning that we cannot change, add or remove items after the tuple has been created.</p>

            <h2>Allow Duplicates</h2>
            <p>Since tuples are indexed, they can have items with the same value:</p>
            <h4>Example</h4>
            <h5>Tuples allow duplicate values:</h5>
            <code>
                thistuple = ("apple", "banana", "cherry", "apple", "cherry")
                print(thistuple)
            </code>

            <h2>Tuple Length</h2>
            <p>To determine how many items a tuple has, use the <code>len()</code> function:</p>
            <h4>Example</h4>
            <h5>Print the number of items in the tuple:</h5>
            <code>
                thistuple = ("apple", "banana", "cherry")
                print(len(thistuple))
            </code>

            <h2>Create Tuple With One Item</h2>
            <p>
                To create a tuple with only one item, you have to add a comma after the item, otherwise Python will not recognize it as a tuple.
            </p>
            <h4>Example</h4>
            <h5>One item tuple, remember the comma:</h5>
            <code>
                thistuple = ("apple",)
                print(type(thistuple))
                
                #NOT a tuple
                thistuple = ("apple")
                print(type(thistuple))
            </code>

            <h2>Tuple Items - Data Types</h2>
            <p>Tuple items can be of any data type:</p>
            <h4>Example</h4>
            <h5>String, int and boolean data types:</h5>
            <code>
                tuple1 = ("apple", "banana", "cherry")
                tuple2 = (1, 5, 7, 9, 3)
                tuple3 = (True, False, False)
            </code>
            <p> A tuple with strings, integers and boolean values:</p>
            <code>tuple1 = ("abc", 34, True, 40, "male")</code>

            <h2>type()</h2>
            <p>From Python's perspective, tuples are defined as objects with the data type 'tuple':</p>
            <code>class 'tuple'</code>
            
            <h2>The tuple() Constructor</h2>
            <p>It is also possible to use the <code>tuple()</code> constructor to make a tuple.</p>
            <h4>Example</h4>
            <h5>Using the tuple() method to make a tuple:</h5>
            <code>
                thistuple = tuple(("apple", "banana", "cherry")) # note the double round-brackets
                print(thistuple)
            </code>

            <h2>Python Collections (Arrays)</h2>
            <p>There are four collection data types in the Python programming language:</p>
            <ul>
                <li>List is a collection which is ordered and changeable. Allows duplicate members.</li>
                <li>Tuple is a collection which is ordered and unchangeable. Allows duplicate members.</li>
                <li>Set is a collection which is unordered, unchangeable*, and unindexed. No duplicate members.</li>
                <li>Dictionary is a collection which is ordered** and changeable. No duplicate members.</li>
            </ul>
            <p>
                When choosing a collection type, it is useful to understand the properties of that type. Choosing the right type for a particular data set could mean retention of meaning, and, it could mean an increase in efficiency or security.
            </p>
        </section>
        
        <hr>

        <section id="sets">
            <h1>Python Sets</h1>

            <code>myset = {"apple", "banana", "cherry"}</code>
            <h2>Set</h2>
            <p>
                Sets are used to store multiple items in a single variable.
                <br>
                Set is one of 4 built-in data types in Python used to store collections of data, the other 3 are List, Tuple, and Dictionary, all with different qualities and usage.
                <br>
                A set is a collection which is unordered, unchangeable*, and unindexed.
            </p>
            <p>Sets are written with curly brackets.</p>
            <h4>Example</h4>
            <h5>Create a Set:</h5>
            <code>
                thisset = {"apple", "banana", "cherry"}
                print(thisset)
            </code>

            <h2>Set Items</h2>
            <p>Set items are unordered, unchangeable, and do not allow duplicate values.</p>

            <h2>Unordered</h2>
            <p>
                Unordered means that the items in a set do not have a defined order.
                <br>
                Set items can appear in a different order every time you use them, and cannot be referred to by index or key.
            </p>

            <h2>Unchangeable</h2>
            <p>Set items are unchangeable, meaning that we cannot change the items after the set has been created.</p>

            <h2>Duplicates Not Allowed</h2>
            <p>Sets cannot have two items with the same value.</p>
            <h4>Example</h4>
            <h5>Duplicate values will be ignored:</h5>
            <code>
                thisset = {"apple", "banana", "cherry", "apple"}

                print(thisset)
            </code>
            
            <h2>Get the Length of a Set</h2>
            <p>To determine how many items a set has, use the <code>len()</code> function.</p>
            <h4>Example</h4>
            <h5>Get the number of items in a set:</h5>
            <code>
                thisset = {"apple", "banana", "cherry"}

                print(len(thisset))
            </code>
            
            <h2>Set Items - Data Types</h2>
            <p>Set items can be of any data type:</p>
            <h4>Example</h4>
            <h5>String, int and boolean data types:</h5>
            <code>
                set1 = {"apple", "banana", "cherry"}
                set2 = {1, 5, 7, 9, 3}
                set3 = {True, False, False}
            </code>

            <p>A set can contain different data types:</p>
            <h4>Example</h4>
            <h5>A set with strings, integers and boolean values:</h5>
            <code>set1 = {"abc", 34, True, 40, "male"}</code>

            <h2>type()</h2>
            <p>From Python's perspective, sets are defined as objects with the data type 'set':</p>
            <code>class 'set'</code>

            <h2>The set() Constructor</h2>
            <p>It is also possible to use the set() constructor to make a set.</p>

            <h4>Example</h4>
            <h5>Using the set() constructor to make a set:</h5>
            <code>
                thisset = set(("apple", "banana", "cherry")) # note the double round-brackets
                print(thisset)
            </code>

            <h2>Python Collections (Arrays)</h2>
            <p>There are four collection data types in the Python programming language:</p>
            <ul>
                <li>List is a collection which is ordered and changeable. Allows duplicate members.</li>
                <li>Tuple is a collection which is ordered and unchangeable. Allows duplicate members.</li>
                <li>Set is a collection which is unordered, unchangeable*, and unindexed. No duplicate members.</li>
                <li>Dictionary is a collection which is ordered** and changeable. No duplicate members.</li>
            </ul>
            <p>
                When choosing a collection type, it is useful to understand the properties of that type. Choosing the right type for a particular data set could mean retention of meaning, and, it could mean an increase in efficiency or security.
            </p>
        </section>

        <hr>

        <section id="dictionaries">
            <h1>Python Dictionaries</h1>
            <code>
                thisdict = {
                    "brand": "Ford",
                    "model": "Mustang",
                    "year": 1964
                }
            </code>

            <h2>Dictionary</h2>
            <p>
                Dictionaries are used to store data values in key:value pairs.
                <br>
                A dictionary is a collection which is ordered*, changeable and do not allow duplicates.
                <br>
                Dictionaries are written with curly brackets, and have keys and values:
            </p>
            <h4>Example</h4>
            <h5>Create and print a dictionary:</h5>
            <code>
                thisdict = {
                    "brand": "Ford",
                    "model": "Mustang",
                    "year": 1964
                }
                print(thisdict)
            </code>

            <h2>Dictionary Items</h2>
            <p>
                Dictionary items are ordered, changeable, and does not allow duplicates.
                <br>
                Dictionary items are presented in key:value pairs, and can be referred to by using the key name.
            </p>
            <h4>Example</h4>
            <h5>Print the "brand" value of the dictionary:</h5>
            <code>
                thisdict = {
                    "brand": "Ford",
                    "model": "Mustang",
                    "year": 1964
                }
                print(thisdict["brand"])
            </code>

            <h2>Ordered or Unordered?</h2>
            <p>
                When we say that dictionaries are ordered, it means that the items have a defined order, and that order will not change.
                <br>
                Unordered means that the items does not have a defined order, you cannot refer to an item by using an index.
            </p>
            
            <h2>Changeable</h2>
            <p>Dictionaries are changeable, meaning that we can change, add or remove items after the dictionary has been created.</p>

            <h2>Duplicates Not Allowed</h2>
            <p>Dictionaries cannot have two items with the same key:</p>
            <h4>Example</h4>
            <h5>Duplicate values will overwrite existing values:</h5>
            <code>
                thisdict = {
                    "brand": "Ford",
                    "model": "Mustang",
                    "year": 1964,
                    "year": 2020
                  }
                  print(thisdict)
            </code>

            <h2>Dictionary Length</h2>
            <p>To determine how many items a dictionary has, use the <code>len()</code> function:</p>
            <h4>Example</h4>
            <h5>Print the number of items in the dictionary:</h5>
            <code>print(len(thisdict))</code>

            <h2>Dictionary Items - Data Types</h2>
            <p>The values in dictionary items can be of any data type:</p>
            <h4>Example</h4>
            <h5>String, int, boolean, and list data types:</h5>
            <code>
                thisdict = {
                    "brand": "Ford",
                    "electric": False,
                    "year": 1964,
                    "colors": ["red", "white", "blue"]
                }
            </code>

            <h2>type()</h2>
            <p>From Python's perspective, dictionaries are defined as objects with the data type 'dict':</p>
            <code>class 'dict'</code>
            <h4>Example</h4>
            <h5>Print the data type of a dictionary:</h5>
            <code>
                thisdict = {
                    "brand": "Ford",
                    "model": "Mustang",
                    "year": 1964
                }
                print(type(thisdict))
            </code>

            <h2>The dict() Constructor</h2>
            <p>It is also possible to use the <code>dict()</code> constructor to make a dictionary.</p>
            <h4>Example</h4>
            <h5>Using the dict() method to make a dictionary:</h5>
            <code>
                thisdict = dict(name = "John", age = 36, country = "Norway")
                print(thisdict)
            </code>

            <h2>Python Collections (Arrays)</h2>
            <p>There are four collection data types in the Python programming language:</p>
            <ul>
                <li>List is a collection which is ordered and changeable. Allows duplicate members.</li>
                <li>Tuple is a collection which is ordered and unchangeable. Allows duplicate members.</li>
                <li>Set is a collection which is unordered, unchangeable*, and unindexed. No duplicate members.</li>
                <li>Dictionary is a collection which is ordered** and changeable. No duplicate members.</li>
            </ul>
            <p>
                When choosing a collection type, it is useful to understand the properties of that type. Choosing the right type for a particular data set could mean retention of meaning, and, it could mean an increase in efficiency or security.
            </p>
        </section>

        <hr>

        <section id="ifelse">
            <h1>Python If ... Else</h1>

            <h2>Python Conditions and If statements</h2>
            <p>Python supports the usual logical conditions from mathematics:</p>
            <ul>
                <li>Equals: <code>a == b</code></li>
                <li>Not Equals: <code>a != b</code></li>
                <li>Greater than: <code>a > b</code></li>
                <li>Greater than or equal to: <code>a >= b</code></li>
            </ul>
            <p>
                These conditions can be used in several ways, most commonly in "if statements" and loops.
                <br>
                An "if statement" is written by using the <code>if</code> keyword.
            </p>
            <h4>Example</h4>
            <h5>If statement:</h5>
            <code>
                a = 33
                b = 200
                if b > a:
                  print("b is greater than a")
            </code>

            <p>
                In this example we use two variables, <code>a</code> and <code>b</code>, which are used as part of the if statement to test whether <code>b</code> is greater than <code>a</code>. As <code>a</code> is 33, and <code>b</code> is 200, we know that 200 is greater than 33, and so we print to screen that "b is greater than a".
            </p>

            <h2>Indentation</h2>
            <p>
                Python relies on indentation (whitespace at the beginning of a line) to define scope in the code. Other programming languages often use curly-brackets for this purpose.
            </p>
            <h4>Example</h4>
            <h5>If statement, without indentation (will raise an error):</h5>
            <code>
                a = 33
                b = 200
                if b > a:
                print("b is greater than a") # you will get an error
            </code>

            <h2>Elif</h2>
            <p>The <code>elif</code> keyword is Python's way of saying "if the previous conditions were not true, then try this condition".</p>
            <h4>Example</h4>
            <code>
                a = 33
                b = 33
                if b > a:
                  print("b is greater than a")
                elif a == b:
                  print("a and b are equal")
            </code>
            <p>
                In this example <code>a</code> is equal to <code>b</code>, so the first condition is not true, but the <code>elif</code> condition is true, so we print to screen that "a and b are equal".
            </p>
            
            <h2>Else</h2>
            <p>The else keyword catches anything which isn't caught by the preceding conditions.</p>
            <h4>Example</h4>
            <code>
                a = 200
                b = 33
                if b > a:
                  print("b is greater than a")
                elif a == b:
                  print("a and b are equal")
                else:
                  print("a is greater than b")
            </code>

            <p>
                In this example <code>a</code> is greater than <code>b</code>, so the first condition is not true, also the <code>elif</code>  condition is not true, so we go to the <code>else</code> condition and print to screen that "a is greater than b".
                <br>
                You can also have an <code>else</code> without the <code>elif</code>:
            </p>
            <h4>Example</h4>
            <code>
                a = 200
                b = 33
                if b > a:
                  print("b is greater than a")
                else:
                  print("b is not greater than a")
            </code>

            <h2>Short Hand If</h2>
            <p>If you have only one statement to execute, you can put it on the same line as the if statement.</p>
            <h4>Example</h4>
            <h5>One line if statement:</h5>
            <code>if a > b: print("a is greater than b")</code>

            <h2>Short Hand If ... Else</h2>
            <p>If you have only one statement to execute, one for if, and one for else, you can put it all on the same line:</p>
            <h4>Example</h4>
            <h5>One line if else statement:</h5>
            <code>
                a = 2
                b = 330
                print("A") if a > b else print("B")
            </code>

            <p>You can also have multiple else statements on the same line:</p>
            <h4>Example</h4>
            <h5>One line if else statement, with 3 conditions:</h5>
            <code>
                a = 330
                b = 330
                print("A") if a > b else print("=") if a == b else print("B")
            </code>

            <h2>And</h2>
            <p>The <code>and</code> keyword is a logical operator, and is used to combine conditional statements:</p>
            <h4>Example</h4>
            <h5>Test if <code>a</code> is greater than <code>b</code>, AND if <code>c</code> is greater than <code>a</code>:</h5>
            <code>
                a = 200
                b = 33
                c = 500
                if a > b and c > a:
                  print("Both conditions are True")                
            </code>

            <h2>Or</h2>
            <p>The or keyword is a logical operator, and is used to combine conditional statements:</p>
            <h4>Example</h4>
            <h5>Test if <code>a</code> is greater than <code>b</code>, OR if <code>a</code> is greater than <code>c</code>:</h5>
            <code>
                a = 200
                b = 33
                c = 500
                if a > b or a > c:
                  print("At least one of the conditions is True")                
            </code>

            <h2>Not</h2>
            <p>The not keyword is a logical operator, and is used to reverse the result of the conditional statement:</p>
            <h4>Example</h4>
            <h5>Test if <code>a</code> is NOT greater than <code>b</code>:</h5>
            <code>
                a = 33
                b = 200
                if not a > b:
                  print("a is NOT greater than b")                
            </code>

            <h2>Nested If</h2>
            <p>You can have if statements inside if statements, this is called nested if statements.</p>
            <h4>Example</h4>
            <code>
                x = 41

                if x > 10:
                  print("Above ten,")
                  if x > 20:
                    print("and also above 20!")
                  else:
                    print("but not above 20.")                
            </code>

            <h2>The pass Statement</h2>
            <p>
                <code>if</code> statements cannot be empty, but <code>if</code> you for some reason have an if statement with no content, put in the <code>pass</code> statement to avoid getting an error.
            </p>
            <h4>Example</h4>
            <code>
                a = 33
                b = 200
                
                if b > a:
                  pass
            </code>
        </section>

        <hr>

        <section id="whileLoops">
            <h1>Python While Loops</h1>

            <h2>Python Loops</h2>
            <p>Python has two primitive loop commands:</p>
            <ul>
                <li><code>while</code> loops</li>
                <li><code>for</code> loops</li>
            </ul>

            <h2>The while Loop</h2>
            <p>With the while loop we can execute a set of statements as long as a condition is true.</p>
            <p>
                The <code>while</code> loop requires relevant variables to be ready, in this example we need to define an indexing variable, <code>i</code>, which we set to 1.
            </p>

            <h2>The continue Statement</h2>
            <p>With the continue statement we can stop the current iteration, and continue with the next:</p>

            <h2>The else Statement</h2>
            <p>With the else statement we can run a block of code once when the condition no longer is true:</p>
        </section>

        <hr>

        <section id="forLoops">
            <h1>Python For Loops</h1>

            <h2>Python For Loops</h2>
            <p>
                A <code>for</code> loop is used for iterating over a sequence (that is either a list, a tuple, a dictionary, a set, or a string).
                <br>
                This is less like the <code>for</code> keyword in other programming languages, and works more like an iterator method as found in other object-orientated programming languages.
                <br>
                With the <code>for</code> loop we can execute a set of statements, once for each item in a list, tuple, set etc.
            </p>

            <h4>Example</h4>
            <h5>Print each fruit in a fruit list:</h5>
            <code>
                fruits = ["apple", "banana", "cherry"]
                for x in fruits:
                  print(x)               
            </code>
            <p>The <code>for</code> loop does not require an indexing variable to set beforehand.</p>

            <h2>Looping Through a String</h2>
            <p>Even strings are iterable objects, they contain a sequence of characters:</p>
            <h4>Example</h4>
            <h5>Loop through the letters in the word "banana":</h5>
            <code>
                for x in "banana":
                print(x)              
            </code>

            <h2>The break Statement</h2>
            <p>With the <code>break</code> statement we can stop the loop before it has looped through all the items:</p>
            <h4>Example</h4>
            <h5>Exit the loop when <code>x</code> is "banana":</h5>
            <code>
                fruits = ["apple", "banana", "cherry"]
                for x in fruits:
                  print(x)
                  if x == "banana":
                    break                
            </code>
            
            <h4>Example</h4>
            <h5>Exit the loop when <code>x</code> is "banana", but this time the break comes before the print:</h5>
            <code>
                fruits = ["apple", "banana", "cherry"]
                for x in fruits:
                  if x == "banana":
                    break
                  print(x)               
            </code>

            <h2>The continue Statement</h2>
            <p>With the <code>continue</code> statement we can stop the current iteration of the loop, and continue with the next:</p>
            <h4>Example</h4>
            <h5>Do not print banana:</h5>
            <code>
                fruits = ["apple", "banana", "cherry"]
                for x in fruits:
                  if x == "banana":
                    continue
                  print(x)                
            </code>

            <h2>The range() Function</h2>
            <p>
                To loop through a set of code a specified number of times, we can use the <code>range()</code> function,
                <br>
                The <code>range()</code> function returns a sequence of numbers, starting from 0 by default, and increments by 1 (by default), and ends at a specified number.
            </p>
            <h4>Example</h4>
            <h5>Using the range() function:</h5>
            <code>
                for x in range(6):
                print(x)               
            </code>
            <p>
                The <code>range()</code> function defaults to 0 as a starting value, however it is possible to specify the starting value by adding a parameter: <code>range(2, 6)</code>, which means values from 2 to 6 (but not including 6):
            </p>
            <h4>Example</h4>
            <h5>Using the start parameter:</h5>
            <code>
                for x in range(2, 6):
                print(x)               
            </code>
            <p>
                The <code>range()</code> function defaults to increment the sequence by 1, however it is possible to specify the increment value by adding a third parameter: <code>range(2, 30, 3)</code>:
            </p>
            <code>
                for x in range(2, 30, 3):
                print(x)             
            </code>

            <h2>Else in For Loop</h2>
            <p>The <code>else</code> keyword in a <code>for</code> loop specifies a block of code to be executed when the loop is finished:</p>
            <h4>Example</h4>
            <h5>Print all numbers from 0 to 5, and print a message when the loop has ended:</h5>
            <code>
                for x in range(6):
                  print(x)
                else:
                  print("Finally finished!")              
            </code>
            <h4>Example</h4>
            <h5>Break the loop when <code>x</code> is 3, and see what happens with the <code>else</code> block:</h5>
            <code>
                for x in range(6):
                if x == 3: break
                print(x)
              else:
                print("Finally finished!")               
            </code>

            <h2>Nested Loops</h2>
            <p>
                A nested loop is a loop inside a loop.
                <br>
                The "inner loop" will be executed one time for each iteration of the "outer loop":
            </p>
            <h4>Example</h4>
            <h5>Print each adjective for every fruit:</h5>
            <code>
                adj = ["red", "big", "tasty"]
                fruits = ["apple", "banana", "cherry"]
                
                for x in adj:
                  for y in fruits:
                    print(x, y)              
            </code>

            <h2>The pass Statement</h2>
            <p>
                <code>for</code> loops cannot be empty, but if you for some reason have a <code>for</code> loop with no content, put in the <code>for</code> statement to avoid getting an error.
            </p>
            <h4>Example</h4>
            <code>
                for x in [0, 1, 2]:
                pass               
            </code>
        </section>

        <hr>

        <section id="functions">
            <h1>Python Functions</h1>
            <p>
                A function is a block of code which only runs when it is called.
                <br>
                You can pass data, known as parameters, into a function.
                <br>
                A function can return data as a result.               
            </p>

            <h2>Creating a Function</h2>
            <p>In Python a function is defined using the <code>def</code> keyword:</p>
            <h4>Example</h4>
            <code>
                def my_function():
                print("Hello from a function")              
            </code>

            <h2>Calling a Function</h2>
            <p>To call a function, use the function name followed by parenthesis:</p>
            <h4>Example</h4>
            <code>
                def my_function():
                  print("Hello from a function")
              
                my_function()               
            </code>

            <h2>Arguments</h2>
            <p>
                Information can be passed into functions as arguments.
                <br>
                Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.
                <br>
                The following example has a function with one argument (fname). When the function is called, we pass along a first name, which is used inside the function to print the full name:               
            </p>
            <h4>Example</h4>
            <code>
                def my_function(fname):
                  print(fname + " Refsnes")
              
                my_function("Emil")
                my_function("Tobias")
                my_function("Linus")              
            </code>

            <h2>Parameters or Arguments?</h2>
            <p>The terms parameter and argument can be used for the same thing: information that are passed into a function.</p>

            <h2>Number of Arguments</h2>
            <p>
                By default, a function must be called with the correct number of arguments. Meaning that if your function expects 2 arguments, you have to call the function with 2 arguments, not more, and not less.
            </p>
            <h4>Example</h4>
            <h5>This function expects 2 arguments, and gets 2 arguments:</h5>
            <code>
                def my_function(fname, lname):
                  print(fname + " " + lname)
              
                my_function("Emil", "Refsnes")                
            </code>
            <p>If you try to call the function with 1 or 3 arguments, you will get an error:</p>
            <h4>Example</h4>
            <h5>This function expects 2 arguments, but gets only 1:</h5>
            <code>
                def my_function(fname, lname):
                  print(fname + " " + lname)
              
                my_function("Emil")               
            </code>

            <h2>Arbitrary Arguments, *args</h2>
            <p>
                If you do not know how many arguments that will be passed into your function, add a <code>*</code> before the parameter name in the function definition.
                <br>
                This way the function will receive a tuple of arguments, and can access the items accordingly:
            </p>
            <h4>Example</h4>
            <h5>If the number of arguments is unknown, add a <code>*</code> before the parameter name:</h5>
            <code>
                def my_function(*kids):
                  print("The youngest child is " + kids[2])
              
                my_function("Emil", "Tobias", "Linus")     
            </code>

            <h2>Keyword Arguments</h2>
            <p>
                You can also send arguments with the key = value syntax.
                <br>
                This way the order of the arguments does not matter.               
            </p>
            <h4>Example</h4>
            <code>
                def my_function(child3, child2, child1):
                  print("The youngest child is " + child3)
              
                my_function(child1 = "Emil", child2 = "Tobias", child3 = "Linus")              
            </code>

            <h2>Arbitrary Keyword Arguments, **kwargs</h2>
            <p>
                If you do not know how many keyword arguments that will be passed into your function, add two asterisk: <code>**</code> before the parameter name in the function definition.
                <br>
                This way the function will receive a dictionary of arguments, and can access the items accordingly:
            </p>
            <h4>Example</h4>
            <h5>If the number of keyword arguments is unknown, add a double <code>**</code> before the parameter name:</h5>
            <code>
                def my_function(**kid):
                  print("His last name is " + kid["lname"])
              
                my_function(fname = "Tobias", lname = "Refsnes")              
            </code>

            <h2>Default Parameter Value</h2>
            <p>
                The following example shows how to use a default parameter value.
                <br>
                If we call the function without argument, it uses the default value:
            </p>
            <h4>Example</h4>
            <code>
                def my_function(country = "Norway"):
                  print("I am from " + country)
              
                my_function("Sweden")
                my_function("India")
                my_function()
                my_function("Brazil")               
            </code>

            <h2>Passing a List as an Argument</h2>
            <p>
                You can send any data types of argument to a function (string, number, list, dictionary etc.), and it will be treated as the same data type inside the function.
                <br>
                E.g. if you send a List as an argument, it will still be a List when it reaches the function:
            </p>
            <h4>Example</h4>
            <code>
                def my_function(food):
                  for x in food:
                    print(x)
              
                fruits = ["apple", "banana", "cherry"]
              
                my_function(fruits)             
            </code>

            <h2>Return Values</h2>
            <p>To let a function return a value, use the <code>return</code> statement:</p>
            <h4>Example</h4>
            <code>
                def my_function(x):
                  return 5 * x
              
                print(my_function(3))
                print(my_function(5))
                print(my_function(9))              
            </code>

            <h2>The pass Statement</h2>
            <p>
                <code>function</code> definitions cannot be empty, but if you for some reason have a <code>function</code> definition with no content, put in the <code>pass</code> statement to avoid getting an error.
            </p>
            <h4>Example</h4>
            <code>
                def myfunction():
                  pass             
            </code>

            <h2>Recursion</h2>
            <p>
                Python also accepts function recursion, which means a defined function can call itself.
                <br>
                Recursion is a common mathematical and programming concept. It means that a function calls itself. This has the benefit of meaning that you can loop through data to reach a result.
                <br>
                The developer should be very careful with recursion as it can be quite easy to slip into writing a function which never terminates, or one that uses excess amounts of memory or processor power. However, when written correctly recursion can be a very efficient and mathematically-elegant approach to programming.
                <br>
                In this example, <code>tri_recursion()</code> is a function that we have defined to call itself ("recurse"). We use the <code>k</code> variable as the data, which decrements (<code>-1</code>) every time we recurse. The recursion ends when the condition is not greater than 0 (i.e. when it is 0).
                <br>
                To a new developer it can take some time to work out how exactly this works, best way to find out is by testing and modifying it.              
            </p>
            <h4>Example</h4>
            <h5>Recursion Example</h5>
            <code>
                def tri_recursion(k):
                  if(k > 0):
                    result = k + tri_recursion(k - 1)
                    print(result)
                  else:
                    result = 0
                  return result
              
                print("\n\nRecursion Example Results")
                tri_recursion(6)              
            </code>
        </section>

        <hr>

        <section id="lambdas">
            <h1>Python Lambda</h1>
            <p>
                A lambda function is a small anonymous function.
                <br>
                A lambda function can take any number of arguments, but can only have one expression.               
            </p>

            <h2>Syntax</h2>
            <p>The expression is executed and the result is returned:</p>
            <h4>Example</h4>
            <h5>Add 10 to argument <code>a</code>, and return the result:</h5>
            <code>
                x = lambda a : a + 10
                print(x(5))              
            </code>
            <p>Lambda functions can take any number of arguments:</p>
            <h4>Example</h4>
            <h5>Multiply argument <code>a</code> with argument <code>b</code> and return the result:</h5>
            <code>
                x = lambda a, b : a * b
                print(x(5, 6))               
            </code>

            <h4>Example</h4>
            <h5>Summarize argument <code>a</code>, <code>b</code>, and <code>c</code> and return the result:</h5>
            <code>
                x = lambda a, b, c : a + b + c
                print(x(5, 6, 2))              
            </code>

            <h2>Why Use Lambda Functions?</h2>
            <p>
                The power of lambda is better shown when you use them as an anonymous function inside another function.
                <br>
                Say you have a function definition that takes one argument, and that argument will be multiplied with an unknown number:             
            </p>
            <code>
                def myfunc(n):
                return lambda a : a * n               
            </code>
            <p>Use that function definition to make a function that always doubles the number you send in:</p>
            <h4>Example</h4>
            <code>
                def myfunc(n):
                  return lambda a : a * n
              
                mydoubler = myfunc(2)
              
                 print(mydoubler(11))               
            </code>
            <p>Or, use the same function definition to make a function that always triples the number you send in:</p>
            <h4>Example</h4>
            <code>
                def myfunc(n):
                  return lambda a : a * n
              
                mytripler = myfunc(3)
              
                 print(mytripler(11))              
            </code>
            <p>Or, use the same function definition to make both functions, in the same program:</p>
            <h4>Example</h4>
            <code>
                def myfunc(n):
                  return lambda a : a * n
              
                mydoubler = myfunc(2)
                mytripler = myfunc(3)
              
                print(mydoubler(11))
                print(mytripler(11))               
            </code>
        </section>

        <hr>

        <section id="arrays">
            <h1>Python Arrays</h1>

            <h2>Arrays</h2>
            <p>Arrays are used to store multiple values in one single variable:</p>
            <h4>Example</h4>
            <h5>Create an array containing car names:</h5>
            <code>cars = ["Ford", "Volvo", "BMW"]</code>

            <h2>What is an Array?</h2>
            <p>
                An array is a special variable, which can hold more than one value at a time.
                <br>
                If you have a list of items (a list of car names, for example), storing the cars in single variables could look like this:              
            </p>
            <code>
                car1 = "Ford"
                car2 = "Volvo"
                car3 = "BMW"             
            </code>
            <p>
                However, what if you want to loop through the cars and find a specific one? And what if you had not 3 cars, but 300?
                <br>
                The solution is an array!
                <br>
                An array can hold many values under a single name, and you can access the values by referring to an index number.               
            </p>

            <h2>Access the Elements of an Array</h2>
            <p>You refer to an array element by referring to the index number.</p>
            <h4>Example</h4>
            <h5>Get the value of the first array item:</h5>
            <code>x = cars[0]</code>
            <h4>Example</h4>
            <h5>Modify the value of the first array item:</h5>
            <code>cars[0] = "Toyota"</code>

            <h2>The Length of an Array</h2>
            <p>Use the <code>len()</code> method to return the length of an array (the number of elements in an array).</p>
            <h4>Example</h4>
            <h5>Return the number of elements in the <code>cars</code> array:</h5>
            <code>x = len(cars)</code>

            <h2>Looping Array Elements</h2>
            <p>You can use the <code>for in</code> loop to loop through all the elements of an array.</p>
            <h4>Example</h4>
            <h5>Print each item in the <code>cars</code> array:</h5>
            <code>
                for x in cars:
                  print(x)              
            </code>

            <h2>Adding Array Elements</h2>
            <p>You can use the <code>append()</code> method to add an element to an array.</p>
            <h4>Example</h4>
            <h5>Add one more element to the cars array:</h5>
            <code>cars.append("Honda")</code>

            <h2>Removing Array Elements</h2>
            <p>You can use the <code>pop()</code> method to remove an element from the array.</p>
            <h4>Example</h4>
            <h5>Delete the second element of the <code>cars</code> array:</h5>
            <code>cars.pop(1)</code>
            <p>You can also use the <code>remove()</code> method to remove an element from the array.</p>
            <h4>Example</h4>
            <h5>Delete the element that has the value "Volvo":</h5>
            <code>cars.remove("Volvo")</code>
        </section>

        <hr>

        <section id="classes-objects">
            <h1>Python Classes and Objects</h1>

            <h2>Python Classes/Objects</h2>
            <p>
                Python is an object oriented programming language.
                <br>
                Almost everything in Python is an object, with its properties and methods.
                <br>
                A Class is like an object constructor, or a "blueprint" for creating objects.
            </p>

            <h2>Create a Class</h2>
            <p>To create a class, use the keyword <code>class</code>:</p>
            <h4>Example</h4>
            <h5>Create a class named MyClass, with a property named x:</h5>
            <code>
                class MyClass:
                  x = 5              
            </code>

            <h2>Create Object</h2>
            <p>Now we can use the class named MyClass to create objects:</p>
            <h4>Example</h4>
            <h5>Create an object named p1, and print the value of x:</h5>
            <code>
                p1 = MyClass()
                print(p1.x)               
            </code>

            <h2>The __init__() Function</h2>
            <p>
                The examples above are classes and objects in their simplest form, and are not really useful in real life applications.
                <br>
                To understand the meaning of classes we have to understand the built-in __init__() function.
                <br>
                All classes have a function called __init__(), which is always executed when the class is being initiated.
                <br>
                Use the __init__() function to assign values to object properties, or other operations that are necessary to do when the object is being created:               
            </p>
            <h4>Example</h4>
            <h5>Create a class named Person, use the __init__() function to assign values for name and age:</h5>
            <code>
                class Person:
                  def __init__(self, name, age):
                    self.name = name
                    self.age = age
              
                p1 = Person("John", 36)
              
                print(p1.name)
                print(p1.age)              
            </code>

            <h2>The __str__() Function</h2>
            <p>
                The __str__() function controls what should be returned when the class object is represented as a string.
                <br>
                If the __str__() function is not set, the string representation of the object is returned:                              
            </p>
            <h4>Example</h4>
            <h5>The string representation of an object WITHOUT the __str__() function:</h5>
            <code>
                class Person:
                  def __init__(self, name, age):
                    self.name = name
                    self.age = age
              
                p1 = Person("John", 36)
              
                print(p1)             
            </code>
            <h4>Example</h4>
            <h5>The string representation of an object WITH the __str__() function:</h5>
            <code>
                class Person:
                  def __init__(self, name, age):
                    self.name = name
                    self.age = age
              
                  def __str__(self):
                    return f"{self.name}({self.age})"
              
                p1 = Person("John", 36)
              
                print(p1)              
            </code>

            <h2>Object Methods</h2>
            <p>
                Objects can also contain methods. Methods in objects are functions that belong to the object.
                <br>
                Let us create a method in the Person class:               
            </p>
            <h4>Example</h4>
            <h5>Insert a function that prints a greeting, and execute it on the p1 object:</h5>
            <code>
                class Person:
                  def __init__(self, name, age):
                    self.name = name
                    self.age = age
              
                  def myfunc(self):
                    print("Hello my name is " + self.name)
              
                p1 = Person("John", 36)
                p1.myfunc()               
            </code>

            <h2>The self Parameter</h2>
            <p>
                The <code>self</code> parameter is a reference to the current instance of the class, and is used to access variables that belongs to the class.
                <br>
                It does not have to be named <code>self</code> , you can call it whatever you like, but it has to be the first parameter of any function in the class:               
            </p>
            <h4>Example</h4>
            <h5>Use the words mysillyobject and abc instead of self:</h5>
            <code>
                class Person:
                  def __init__(mysillyobject, name, age):
                    mysillyobject.name = name
                    mysillyobject.age = age
              
                  def myfunc(abc):
                    print("Hello my name is " + abc.name)
              
                p1 = Person("John", 36)
                p1.myfunc()              
            </code>

            <h2>Modify Object Properties</h2>
            <p>You can modify properties on objects like this:</p>
            <h4>Example</h4>
            <h5>Set the age of p1 to 40:</h5>
            <code>p1.age = 40</code>

            <h2>Delete Object Properties</h2>
            <p>You can delete properties on objects by using the <code>del</code> keyword:</p>
            <h4>Example</h4>
            <h5>Delete the age property from the p1 object:</h5>
            <code>del p1.age</code>

            <h2>Delete Objects</h2>
            <p>You can delete objects by using the <code>del</code> keyword:</p>
            <h4>Example</h4>
            <h5>Delete the p1 object:</h5>
            <code>del p1</code>

            <h2>The pass Statement</h2>
            <p>
                <code>class</code> definitions cannot be empty, but if you for some reason have a <code>class</code> definition with no content, put in the <code>pass</code> statement to avoid getting an error.
            </p>
            <h4>Example</h4>
            <code>
                class Person:
                  pass              
            </code>
        </section>

        <hr>

        <section id="inheritances">
            <h1>Python Inheritance</h1>

            <h2>Python Inheritance</h2>
            <p>
                Inheritance allows us to define a class that inherits all the methods and properties from another class.
                <br>
                Parent class is the class being inherited from, also called base class.
                <br>
                Child class is the class that inherits from another class, also called derived class.               
            </p>

            <h2>Create a Parent Class</h2>
            <p>Any class can be a parent class, so the syntax is the same as creating any other class:</p>
            <h4>Example</h4>
            <h5>Create a class named <code>Person</code>, with <code>firstname</code> and <code>lastname</code> properties, and a <code>printname</code> method:</h5>
            <code>
                class Person:
                  def __init__(self, fname, lname):
                    self.firstname = fname
                    self.lastname = lname
              
                  def printname(self):
                    print(self.firstname, self.lastname)
              
                #Use the Person class to create an object, and then execute the printname method:
              
                x = Person("John", "Doe")
                x.printname()              
            </code>

            <h2>Create a Child Class</h2>
            <p>To create a class that inherits the functionality from another class, send the parent class as a parameter when creating the child class:</p>
            <h4>Example</h4>
            <h5>Create a class named <code>Student</code>, which will inherit the properties and methods from the <code>Person</code> class:</h5>
            <code>
                class Student(Person):
                  pass             
            </code>
            <p>Now the Student class has the same properties and methods as the Person class.</p>
            <h4>Example</h4>
            <h5>Use the <code>Student</code> class to create an object, and then execute the <code>printname</code> method:</h5>
            <code>
                x = Student("Mike", "Olsen")
                x.printname()             
            </code>

            <h2>Add the __init__() Function</h2>
            <p>
                So far we have created a child class that inherits the properties and methods from its parent.
                <br>
                We want to add the <code>__init__()</code> function to the child class (instead of the <code>pass</code> keyword).               
            </p>
            <h4>Example</h4>
            <h5>Add the <code>__init__()</code> function to the <code>Student</code> class:</h5>
            <code>
                class Student(Person):
                  def __init__(self, fname, lname):
                    #add properties etc.             
            </code>
            <p>
                When you add the <code>__init__()</code> function, the child class will no longer inherit the parent's <code>__init__()</code> function.
                <br>
                To keep the inheritance of the parent's <code>__init__()</code> function, add a call to the parent's <code>__init__()</code> function:
            </p>
            <h4>Example</h4>
            <code>
                class Student(Person):
                  def __init__(self, fname, lname):
                    Person.__init__(self, fname, lname)              
            </code>
            <p>
                Now we have successfully added the __init__() function, and kept the inheritance of the parent class, and we are ready to add functionality in the <code>__init__()</code> function.              
            </p>

            <h2>Use the super() Function</h2>
            <p>Python also has a <code>super()</code> function that will make the child class inherit all the methods and properties from its parent:</p>
            <h4>Example</h4>
            <code>
                class Student(Person):
                  def __init__(self, fname, lname):
                    super().__init__(fname, lname)             
            </code>
            <p>
                By using the <code>super()</code> function, you do not have to use the name of the parent element, it will automatically inherit the methods and properties from its parent.               
            </p>

            <h2>Add Properties</h2>
            <h4>Example</h4>
            <h5>Add a property called <code>graduationyear</code> to the <code>Student</code> class:</h5>
            <code>
                class Student(Person):
                  def __init__(self, fname, lname):
                    super().__init__(fname, lname)
                    self.graduationyear = 2019
            </code>
            <p>
                In the example below, the year <code>2019</code> should be a variable, and passed into the <code>Student</code> class when creating student objects. To do so, add another parameter in the __init__() function:
            </p>
            <h4>Example</h4>
            <h5>Add a <code>year</code> parameter, and pass the correct year when creating objects:</h5>
            <code>
                class Student(Person):
                  def __init__(self, fname, lname, year):
                    super().__init__(fname, lname)
                    self.graduationyear = year
              
                x = Student("Mike", "Olsen", 2019)              
            </code>

            <h2>Add Methods</h2>
            <h4>Example</h4>
            <h5>Add a method called <code>welcome</code> to the <code>Student</code> class:</h5>
            <code>
                class Student(Person):
                  def __init__(self, fname, lname, year):
                    super().__init__(fname, lname)
                    self.graduationyear = year
              
                  def welcome(self):
                    print("Welcome", self.firstname, self.lastname, "to the class of", self.graduationyear)              
            </code>
            <p>If you add a method in the child class with the same name as a function in the parent class, the inheritance of the parent method will be overridden.</p>
        </section>

        <hr>

        <section id="iterators">
            <h1>Python Iterators</h1>

            <h2>Python Iterators</h2>
            <p>
                An iterator is an object that contains a countable number of values.
                <br>
                An iterator is an object that can be iterated upon, meaning that you can traverse through all the values.
                <br>
                Technically, in Python, an iterator is an object which implements the iterator protocol, which consist of the methods <code>__iter__()</code> and <code>__next__()</code>.               
            </p>

            <h2>Iterator vs Iterable</h2>
            <p>
                Lists, tuples, dictionaries, and sets are all iterable objects. They are iterable containers which you can get an iterator from.
                <br>
                All these objects have a <code>__iter__()</code> method which is used to get an iterator:              
            </p>
            <h4>Example</h4>
            <h5>Return an iterator from a tuple, and print each value:</h5>
            <code>
                mytuple = ("apple", "banana", "cherry")
                myit = iter(mytuple)
                
                print(next(myit))
                print(next(myit))
                print(next(myit))              
            </code>
            <p>Even strings are iterable objects, and can return an iterator:</p>
            <h4>Example</h4>
            <h5>Strings are also iterable objects, containing a sequence of characters:</h5>
            <code>
                mystr = "banana"
                myit = iter(mystr)
                
                print(next(myit))
                print(next(myit))
                print(next(myit))
                print(next(myit))
                print(next(myit))
                print(next(myit))             
            </code>

            <h2>Looping Through an Iterator</h2>
            <p>We can also use a <code>for</code> loop to iterate through an iterable object:</p>
            <h4>Example</h4>
            <h5>Iterate the values of a tuple:</h5>
            <code>
                mytuple = ("apple", "banana", "cherry")

                for x in mytuple:
                  print(x)              
            </code>
            <h4>Example</h4>
            <h5>Iterate the characters of a string:</h5>
            <code>
                mystr = "banana"

                for x in mystr:
                  print(x)              
            </code>
            <p>The <code>for</code> loop actually creates an iterator object and executes the next() method for each loop.</p>

            <h2>Create an Iterator</h2>
            <p>
                To create an object/class as an iterator you have to implement the methods <code>__iter__()</code> and <code>__next__()</code> to your object.
                <br>
                As you have learned in the Python Classes/Objects chapter, all classes have a function called <code>__init__()</code>, which allows you to do some initializing when the object is being created.
                <br>
                The <code>__iter__()</code> method acts similar, you can do operations (initializing etc.), but must always return the iterator object itself.
                <br>
                The <code>__next__()</code> method also allows you to do operations, and must return the next item in the sequence.              
            </p>
            <h4>Example</h4>
            <h5>Create an iterator that returns numbers, starting with 1, and each sequence will increase by one (returning 1,2,3,4,5 etc.):</h5>
            <code>
                class MyNumbers:
                  def __iter__(self):
                    self.a = 1
                    return self
              
                def __next__(self):
                  x = self.a
                  self.a += 1
                  return x
              
              myclass = MyNumbers()
              myiter = iter(myclass)
              
              print(next(myiter))
              print(next(myiter))
              print(next(myiter))
              print(next(myiter))
              print(next(myiter))
            </code>

            <h2>StopIteration</h2>
            <p>
                The example above would continue forever if you had enough next() statements, or if it was used in a <code>for</code> loop.
                <br>
                To prevent the iteration from going on forever, we can use the <code>StopIteration</code> statement.
                <br>
                In the <code>__next__()</code> method, we can add a terminating condition to raise an error if the iteration is done a specified number of times:              
            </p>
        </section>

        <hr>

        <section id="polymorphisms">
            <h1>Python Polymorphism</h1>
            <p>The word "polymorphism" means "many forms", and in programming it refers to methods/functions/operators with the same name that can be executed on many objects or classes.</p>

            <h2>Function Polymorphism</h2>
            <p>An example of a Python function that can be used on different objects is the <code>len()</code> function.</p>
            <h3>String</h3>
            <p>For strings <code>len()</code> returns the number of characters:</p>
            <h4>Example</h4>
            <code>
                x = "Hello World!"

                print(len(x))             
            </code>
            <h3>Tuple</h3>
            <p>For tuples <code>len()</code> returns the number of items in the tuple:</p>
            <h4>Example</h4>
            <code>
                mytuple = ("apple", "banana", "cherry")

                print(len(mytuple))              
            </code>
            <h3>Dictionary</h3>
            <p>For dictionaries <code>len()</code> returns the number of key/value pairs in the dictionary:</p>
            <h4>Example</h4>
            <code>
                thisdict = {
                    "brand": "Ford",
                    "model": "Mustang",
                    "year": 1964
                }
                  
                print(len(thisdict))              
            </code>

            <h2>Class Polymorphism</h2>
            <p>
                Polymorphism is often used in Class methods, where we can have multiple classes with the same method name.
                <br>
                For example, say we have three classes: <code>Car</code>, <code>Boat</code>, and <code>Plane</code>, and they all have a method called <code>move()</code>:             
            </p>
            <h4>Example</h4>
            <h5>Different classes with the same method:</h5>
            <code>
                class Car:
                  def __init__(self, brand, model):
                    self.brand = brand
                    self.model = model
              
                  def move(self):
                    print("Drive!")
              
                class Boat:
                  def __init__(self, brand, model):
                    self.brand = brand
                    self.model = model
              
                  def move(self):
                    print("Sail!")
              
                class Plane:
                  def __init__(self, brand, model):
                    self.brand = brand
                    self.model = model
              
                  def move(self):
                    print("Fly!")
              
                car1 = Car("Ford", "Mustang")       #Create a Car class
                boat1 = Boat("Ibiza", "Touring 20") #Create a Boat class
                plane1 = Plane("Boeing", "747")     #Create a Plane class
              
                for x in (car1, boat1, plane1):
                  x.move()       
            </code>
            <p>Look at the for loop at the end. Because of polymorphism we can execute the same method for all three classes.</p>

            <h2>Inheritance Class Polymorphism</h2>
            <p>
                What about classes with child classes with the same name? Can we use polymorphism there?
                <br>
                Yes. If we use the example above and make a parent class called <code>Vehicle</code>, and make <code>Car</code>, <code>Boat</code>, <code>Plane</code> child classes of <code>Vehicle</code>, the child classes inherits the <code>Vehicle</code> methods, but can override them:               
            </p>
            <h4>Example</h4>
            <h5>Create a class called Vehicle and make <code>Car</code>, <code>Boat</code>, <code>Plane</code> child classes of <code>Vehicle</code>:</h5>
            <code>
                class Vehicle:
                  def __init__(self, brand, model):
                    self.brand = brand
                    self.model = model
              
                  def move(self):
                    print("Move!")
              
                class Car(Vehicle):
                  pass
              
                class Boat(Vehicle):
                  def move(self):
                    print("Sail!")
              
                class Plane(Vehicle):
                  def move(self):
                    print("Fly!")
              
                car1 = Car("Ford", "Mustang") #Create a Car object
                boat1 = Boat("Ibiza", "Touring 20") #Create a Boat object
                plane1 = Plane("Boeing", "747") #Create a Plane object
              
                for x in (car1, boat1, plane1):
                  print(x.brand)
                  print(x.model)
                  x.move()             
            </code>
            <p>
                Child classes inherits the properties and methods from the parent class.
                <br>
                In the example above you can see that the <code>Car</code> class is empty, but it inherits <code>brand</code>, <code>model</code>, and <code>move()</code> from <code>Vehicle</code>.
                <br>
                The <code>Boat</code> and <code>Plane</code> classes also inherit <code>brand</code>, <code>model</code>, and <code>move()</code> from <code>Vehicle</code>, but they both override the <code>move()</code> method.
                <br>
                Because of polymorphism we can execute the same method for all classes.               
            </p>
        </section>

        <hr>

        <section id="scopes">
            <h1>Python Scope</h1>
            <p>A variable is only available from inside the region it is created. This is called scope.</p>

            <h2>Local Scope</h2>
            <p>A variable created inside a function belongs to the local scope of that function, and can only be used inside that function.</p>
            <h4>Example</h4>
            <h5>A variable created inside a function is available inside that function:</h5>
            <code>
                def myfunc():
                  x = 300
                  print(x)
              
              myfunc()              
            </code>

            <h3>Function Inside Function</h3>
            <p>As explained in the example above, the variable <code>x</code> is not available outside the function, but it is available for any function inside the function:</p>
            <h4>Example</h4>
            <h5>The local variable can be accessed from a function within the function:</h5>
            <code>
                def myfunc():
                  x = 300
                  def myinnerfunc():
                    print(x)
                  myinnerfunc()
              
                 myfunc()              
            </code>

            <h2>Global Scope</h2>
            <p>
                A variable created in the main body of the Python code is a global variable and belongs to the global scope.
                <br>
                Global variables are available from within any scope, global and local.               
            </p>
            <h4>Example</h4>
            <h5>A variable created outside of a function is global and can be used by anyone:</h5>
            <code>
                x = 300

                def myfunc():
                  print(x)
                
                myfunc()
                
                print(x)             
            </code>

            <h3>Naming Variables</h3>
            <p>
                If you operate with the same variable name inside and outside of a function, Python will treat them as two separate variables, one available in the global scope (outside the function) and one available in the local scope (inside the function):               
            </p>
            <h4>Example</h4>
            <h5>The function will print the local <code>x</code>, and then the code will print the global <code>x</code>:</h5>
            <code>
                x = 300

                def myfunc():
                  x = 200
                  print(x)
                
                myfunc()
                
                print(x)               
            </code>

            <h2>Global Keyword</h2>
            <p>
                If you need to create a global variable, but are stuck in the local scope, you can use the <code>global</code> keyword.
                <br>
                The <code>global</code> keyword makes the variable global.              
            </p>
            <h4>Example</h4>
            <h5>If you use the <code>global</code> keyword, the variable belongs to the global scope:</h5>
            <code>
                def myfunc():
                  global x
                  x = 300
              
                myfunc()
              
                 print(x)              
            </code>
            <p>Also, use the <code>global</code> keyword if you want to make a change to a global variable inside a function.</p>
            <h4>Example</h4>
            <h5>To change the value of a global variable inside a function, refer to the variable by using the <code>global</code> keyword:</h5>
            <code>
                x = 300

                def myfunc():
                  global x
                  x = 200
                
                myfunc()
                
                print(x)              
            </code>
        </section>

        <hr>

        <section id="modules">
            <h1>Python Modules</h1>

            <h2>Python Modules</h2>
            <p>
                Consider a module to be the same as a code library.
                <br>
                A file containing a set of functions you want to include in your application.                
            </p>

            <h2>Create a Module</h2>
            <p>To create a module just save the code you want in a file with the file extension <code>.py</code>:</p>
            <h4>Example</h4>
            <h5>Save this code in a file named <code>mymodule.py</code></h5>
            <code>
                def greeting(name):
                  print("Hello, " + name)              
            </code>

            <h2>Use a Module</h2>
            <p>Now we can use the module we just created, by using the <code>import</code> statement:</p>
            <h4>Example</h4>
            <h5>Import the module named mymodule, and call the greeting function:</h5>
            <code>
                import mymodule

                mymodule.greeting("Jonathan")               
            </code>

            <h2>Variables in Module</h2>
            <p>The module can contain functions, as already described, but also variables of all types (arrays, dictionaries, objects etc):</p>
            <h4>Example</h4>
            <h5>Save this code in the file <code>mymodule.py</code></h5>
            <code>
                person1 = {
                    "name": "John",
                    "age": 36,
                    "country": "Norway"
                }              
            </code>
            <h4>Example</h4>
            <h5>Import the module named mymodule, and access the person1 dictionary:</h5>
            <code>
                import mymodule

                a = mymodule.person1["age"]
                print(a)               
            </code>

            <h2>Naming a Module</h2>
            <p>You can name the module file whatever you like, but it must have the file extension <code>.py</code></p>

            <h2>Re-naming a Module</h2>
            <p>You can create an alias when you import a module, by using the <code>as</code> keyword:</p>
            <h4>Example</h4>
            <h5>Create an alias for <code>mymodule</code> called <code>mx</code>:</h5>
            <code>
                import mymodule as mx

                a = mx.person1["age"]
                print(a)              
            </code>

            <h2>Built-in Modules</h2>
            <p>There are several built-in modules in Python, which you can import whenever you like.</p>
            <h4>Example</h4>
            <h5>Import and use the <code>platform</code> module:</h5>
            <code>
                import platform

                x = platform.system()
                print(x)             
            </code>

            <h2>Using the dir() Function</h2>
            <p>There is a built-in function to list all the function names (or variable names) in a module. The <code>dir()</code> function:</p>
            <h4>Example</h4>
            <h5>List all the defined names belonging to the platform module:</h5>
            <code>
                import platform

                x = dir(platform)
                print(x)               
            </code>

            <h2>Import From Module</h2>
            <p>You can choose to import only parts from a module, by using the <code>from</code> keyword.</p>
            <h4>Example</h4>
            <h5>The module named <code>mymodule</code> has one function and one dictionary:</h5>
            <code>
                def greeting(name):
                  print("Hello, " + name)
              
                person1 = {
                  "name": "John",
                  "age": 36,
                  "country": "Norway"
                }              
            </code>
            <h4>Example</h4>
            <h5>Import only the person1 dictionary from the module:</h5>
            <code>
                from mymodule import person1

                print (person1["age"])              
            </code>
        </section>

        <hr>

        <section id="dates">
            <h1>Python Datetime</h1>

            <h2>Python Dates</h2>
            <p>A date in Python is not a data type of its own, but we can import a module named <code>datetime</code> to work with dates as date objects.</p>
            <h4>Example</h4>
            <h5>Import the datetime module and display the current date:</h5>
            <code>
                import datetime

                x = datetime.datetime.now()
                print(x)             
            </code>

            <h2>Date Output</h2>
            <p>
                When we execute the code from the example above the result will be:
                <br>
                <code>2023-12-12 02:47:25.798177</code>
                The date contains year, month, day, hour, minute, second, and microsecond.
                <br>
                The <code>datetime</code> module has many methods to return information about the date object.
                <br>
                Here are a few examples, you will learn more about them later in this chapter:               
            </p>
            <h4>Example</h4>
            <h5>Return the year and name of weekday:</h5>
            <code>
                import datetime

                x = datetime.datetime.now()
                
                print(x.year)
                print(x.strftime("%A"))              
            </code>

            <h2>Creating Date Objects</h2>
            <p>
                To create a date, we can use the <code>datetime()</code> class (constructor) of the <code>datetime</code> module.

                The <code>datetime()</code> class requires three parameters to create a date: year, month, day.              
            </p>
            <h4>Example</h4>
            <h5>Create a date object:</h5>
            <code>
                import datetime

                x = datetime.datetime(2020, 5, 17)
                
                print(x)             
            </code>
            <p>
                The <code>datetime()</code> class also takes parameters for time and timezone (hour, minute, second, microsecond, tzone), but they are optional, and has a default value of <code>0</code>, (<code>None</code> for timezone).
            </p>

            <h2>The strftime() Method</h2>
            <p>
                The <code>datetime</code> object has a method for formatting date objects into readable strings.
                <br>
                The method is called <code>strftime()</code>, and takes one parameter, <code>format</code>, to specify the format of the returned string:             
            </p>
            <h4>Example</h4>
            <h5>Display the name of the month:</h5>
            <code>
                import datetime

                x = datetime.datetime(2018, 6, 1)
                
                print(x.strftime("%B"))             
            </code>
        </section>

        <hr>

        <section id="maths">
            <h1>Python Math</h1>
            <p>Python has a set of built-in math functions, including an extensive math module, that allows you to perform mathematical tasks on numbers.</p>

            <h2>Built-in Math Functions</h2>
            <p>The <code>min()</code> and <code>max()</code> functions can be used to find the lowest or highest value in an iterable:</p>
            <h4>Example</h4>
            <code>
                x = min(5, 10, 25)
                y = max(5, 10, 25)
                
                print(x)
                print(y)               
            </code>
            <p>The <code>abs()</code> function returns the absolute (positive) value of the specified number:</p>
            <h4>Example</h4>
            <h5>Return the value of 4 to the power of 3 (same as 4 * 4 * 4):</h5>
            <code>
                x = pow(4, 3)

                print(x)                
            </code>

            <h2>The Math Module</h2>
            <p>
                Python has also a built-in module called <code>math</code>, which extends the list of mathematical functions.
                <br>
                To use it, you must import the <code>math</code> module:              
            </p>
            <code>import math</code>
            <p>
                When you have imported the <code>math</code> module, you can start using methods and constants of the module.
                <br>
                The <code>math.sqrt()</code> method for example, returns the square root of a number:              
            </p>
            <h4>Example</h4>
            <code>
                import math

                x = math.sqrt(64)
                
                print(x)             
            </code>
            <p>
                The <code>math.ceil()</code> method rounds a number upwards to its nearest integer, and the <code>math.floor()</code> method rounds a number downwards to its nearest integer, and returns the result:
            </p>
            <h4>Example</h4>
            <code>
                import math

                x = math.ceil(1.4)
                y = math.floor(1.4)
                
                print(x) # returns 2
                print(y) # returns 1              
            </code>
            <p>The <code>math.pi</code> constant, returns the value of PI (3.14...):</p>
            <h4>Example</h4>
            <code>
                import math

                x = math.pi
                
                print(x)              
            </code>
        </section>

        <hr>

        <section id="jsons">
            <h1>Python JSON</h1>
            <p>
                JSON is a syntax for storing and exchanging data.
                <br>
                JSON is text, written with JavaScript object notation.               
            </p>

            <h2>JSON in Python</h2>
            <p>Python has a built-in package called <code>json</code>, which can be used to work with JSON data.</p>
            <h4>Example</h4>
            <h5>Import the json module:</h5>
            <code>import json</code>

            <h2>Parse JSON - Convert from JSON to Python</h2>
            <p>If you have a JSON string, you can parse it by using the <code>json.loads()</code> method.</p>
            <h4>Example</h4>
            <h5>Convert from JSON to Python:</h5>
            <code>
                import json

                # some JSON:
                x =  '{ "name":"John", "age":30, "city":"New York"}'
                
                # parse x:
                y = json.loads(x)
                
                # the result is a Python dictionary:
                print(y["age"])              
            </code>

            <h2>Convert from Python to JSON</h2>
            <p>If you have a Python object, you can convert it into a JSON string by using the <code>json.dumps()</code> method.</p>
            <h4>Example</h4>
            <h5>Convert from Python to JSON:</h5>
            <code>
                import json

                # a Python object (dict):
                x = {
                  "name": "John",
                  "age": 30,
                  "city": "New York"
                }
                
                # convert into JSON:
                y = json.dumps(x)
                
                # the result is a JSON string:
                print(y)               
            </code>
            <p>You can convert Python objects of the following types, into JSON strings:</p>
            <ul>
                <li>dict</li>
                <li>list</li>
                <li>tuple</li>
                <li>string</li>
                <li>int</li>
                <li>float</li>
                <li>True</li>
                <li>False</li>
                <li>None</li>
            </ul>
            <h4>Example</h4>
            <h5>Convert Python objects into JSON strings, and print the values:</h5>
            <code>
                import json

                print(json.dumps({"name": "John", "age": 30}))
                print(json.dumps(["apple", "bananas"]))
                print(json.dumps(("apple", "bananas")))
                print(json.dumps("hello"))
                print(json.dumps(42))
                print(json.dumps(31.76))
                print(json.dumps(True))
                print(json.dumps(False))
                print(json.dumps(None))              
            </code>

            <h4>Example</h4>
            <h5>Convert a Python object containing all the legal data types:</h5>
            <code>
                import json

                x = {
                  "name": "John",
                  "age": 30,
                  "married": True,
                  "divorced": False,
                  "children": ("Ann","Billy"),
                  "pets": None,
                  "cars": [
                    {"model": "BMW 230", "mpg": 27.5},
                    {"model": "Ford Edge", "mpg": 24.1}
                  ]
                }
                
                print(json.dumps(x))             
            </code>

            <h2>Format the Result</h2>
            <p>
                The example above prints a JSON string, but it is not very easy to read, with no indentations and line breaks.
                <br>
                The <code>json.dumps()</code> method has parameters to make it easier to read the result:              
            </p>
            <h4>Example</h4>
            <h5>Use the <code>indent</code> parameter to define the numbers of indents:</h5>
            <code>json.dumps(x, indent=4)</code>
            <p>
                You can also define the separators, default value is (", ", ": "), which means using a comma and a space to separate each object, and a colon and a space to separate keys from values:
            </p>
            <h4>Example</h4>
            <h5>Use the <code>separators</code> parameter to change the default separator:</h5>
            <code>json.dumps(x, indent=4, separators=(". ", " = "))</code>

            <h2>Order the Result</h2>
            <p>The <code>json.dumps()</code> method has parameters to order the keys in the result:</p>
            <h4>Example</h4>
            <h5>Use the <code>sort_keys</code> parameter to specify if the result should be sorted or not:</h5>
            <code>json.dumps(x, indent=4, sort_keys=True)</code>
        </section>

        <hr>

        <section id="regExs">
            <h1>Python RegEx</h1>
            <p>
                A RegEx, or Regular Expression, is a sequence of characters that forms a search pattern.
                <br>
                RegEx can be used to check if a string contains the specified search pattern.                
            </p>

            <h2>RegEx Module</h2>
            <p>
                Python has a built-in package called <code>re</code>, which can be used to work with Regular Expressions.
                <br>
                Import the <code>re</code> module:              
            </p>
            <code>import re</code>

            <h2>RegEx in Python</h2>
            <p>When you have imported the <code>re</code> module, you can start using regular expressions:</p>
            <h4>Example</h4>
            <h5>Search the string to see if it starts with "The" and ends with "Spain":</h5>
            <code>
                import re

                txt = "The rain in Spain"
                x = re.search("^The.*Spain$", txt)              
            </code>

            <h2>The findall() Function</h2>
            <p><code>The findall()</code> function returns a list containing all matches.</p>
            <h4>Example</h4>
            <h5>Print a list of all matches:</h5>
            <code>
                import re

                txt = "The rain in Spain"
                x = re.findall("ai", txt)
                print(x)              
            </code>
            <p>
                The list contains the matches in the order they are found.
                <br>
                If no matches are found, an empty list is returned:               
            </p>
            <h4>Example</h4>
            <h5>Return an empty list if no match was found:</h5>
            <code>
                import re

                txt = "The rain in Spain"
                x = re.findall("Portugal", txt)
                print(x)              
            </code>

            <h2>The search() Function</h2>
            <p>
                The <code>search()</code> function searches the string for a match, and returns a Match object if there is a match.
                <br>
                If there is more than one match, only the first occurrence of the match will be returned:             
            </p>
            <h4>Example</h4>
            <h5>Search for the first white-space character in the string:</h5>
            <code>
                import re

                txt = "The rain in Spain"
                x = re.search("\s", txt)
                
                print("The first white-space character is located in position:", x.start())             
            </code>
            <p>If no matches are found, the value <code>None</code> is returned:</p>
            <h4>Example</h4>
            <h5>Make a search that returns no match:</h5>
            <code>
                import re

                txt = "The rain in Spain"
                x = re.search("Portugal", txt)
                print(x)               
            </code>

            <h2>The split() Function</h2>
            <p>The <code>split()</code> function returns a list where the string has been split at each match:</p>
            <h4>Example</h4>
            <h5>Split at each white-space character:</h5>
            <code>
                import re

                txt = "The rain in Spain"
                x = re.split("\s", txt)
                print(x)             
            </code>
            <p>You can control the number of occurrences by specifying the <code>maxsplit</code> parameter:</p>
            <h4>Example</h4>
            <h5>Split the string only at the first occurrence:</h5>
            <code>
                import re

                txt = "The rain in Spain"
                x = re.split("\s", txt, 1)
                print(x)             
            </code>

            <h2>The sub() Function</h2>
            <p>The <code>sub()</code> function replaces the matches with the text of your choice:</p>
            <h4>Example</h4>
            <h5>Replace every white-space character with the number 9:</h5>
            <code>
                import re

                txt = "The rain in Spain"
                x = re.sub("\s", "9", txt)
                print(x)                
            </code>
            <p>You can control the number of replacements by specifying the count parameter:</p>
            <h4>Example</h4>
            <h5>Replace the first 2 occurrences:</h5>
            <code>
                import re

                txt = "The rain in Spain"
                x = re.sub("\s", "9", txt, 2)
                print(x)              
            </code>

            <h2>Match Object</h2>
            <p>A Match Object is an object containing information about the search and the result.</p>
            <h4>Example</h4>
            <h5>Do a search that will return a Match Object:</h5>
            <code>
                import re

                txt = "The rain in Spain"
                x = re.search("ai", txt)
                print(x) #this will print an object              
            </code>
            <p>The Match object has properties and methods used to retrieve information about the search, and the result:</p>
            <ul>
                <li><code>.span()</code> returns a tuple containing the start-, and end positions of the match.</li>
                <li><code>.string</code> returns the string passed into the function</li>
                <li><code>.group()</code> returns the part of the string where there was a match</li>
            </ul>
            <h4>Example</h4>
            <h5>
                Print the position (start- and end-position) of the first match occurrence.
                <br>
                The regular expression looks for any words that starts with an upper case "S":              
            </h5>
            <code>
                import re

                txt = "The rain in Spain"
                x = re.search(r"\bS\w+", txt)
                print(x.span())               
            </code>
            <h4>Example</h4>
            <h5>Print the string passed into the function:</h5>
            <code>
                import re

                txt = "The rain in Spain"
                x = re.search(r"\bS\w+", txt)
                print(x.string)               
            </code>
            <h4>Example</h4>
            <h5>
                Print the part of the string where there was a match.
                <br>
                The regular expression looks for any words that starts with an upper case "S":              
            </h5>
            <code>
                import re

                txt = "The rain in Spain"
                x = re.search(r"\bS\w+", txt)
                print(x.group())             
            </code>
        </section>

        <hr>

        <section id="pips">
            <h1>Python PIP</h1>

            <h2>What is PIP?</h2>
            <p>PIP is a package manager for Python packages, or modules if you like.</p>

            <h2>What is a Package?</h2>
            <p>
                A package contains all the files you need for a module.
                <br>
                Modules are Python code libraries you can include in your project.              
            </p>

            <h2>Check if PIP is Installed</h2>
            <p>Navigate your command line to the location of Python's script directory, and type the following:</p>
            <h4>Example</h4>
            <h5>Check PIP version:</h5>
            <code>C:\Users\Your Name\AppData\Local\Programs\Python\Python36-32\Scripts>pip --version</code>

            <h2>Install PIP</h2>
            <p>If you do not have PIP installed, you can download and install it from this page: https://pypi.org/project/pip/</p>

            <h2>Download a Package</h2>
            <p>
                Downloading a package is very easy.
                <br>
                Open the command line interface and tell PIP to download the package you want.
                <br>
                Navigate your command line to the location of Python's script directory, and type the following:              
            </p>
            <h4>Example</h4>
            <h5>Download a package named "camelcase":</h5>
            <code>C:\Users\Your Name\AppData\Local\Programs\Python\Python36-32\Scripts>pip install camelcase</code>
            <p>Now you have downloaded and installed your first package!</p>

            <h2>Using a Package</h2>
            <p>
                Once the package is installed, it is ready to use.
                <br>
                Import the "camelcase" package into your project.               
            </p>
            <h4>Example</h4>
            <h5>Import and use "camelcase":</h5>
            <code>
                import camelcase

                c = camelcase.CamelCase()
                
                txt = "hello world"
                
                print(c.hump(txt))             
            </code>

            <h2>Remove a Package</h2>
            <p>Use the <code>uninstall</code> command to remove a package:</p>
            <h4>Example</h4>
            <h5>Uninstall the package named "camelcase":</h5>
            <code>C:\Users\Your Name\AppData\Local\Programs\Python\Python36-32\Scripts>pip uninstall camelcase</code>
            <p>The PIP Package Manager will ask you to confirm that you want to remove the camelcase package:</p>
            <code>
                Uninstalling camelcase-02.1:
                  Would remove:
                    c:\users\Your Name\appdata\local\programs\python\python36-32\lib\site-packages\camelcase-0.2-py3.6.egg-info
                    c:\users\Your Name\appdata\local\programs\python\python36-32\lib\site-packages\camelcase\*
                  Proceed (y/n)?              
            </code>
            <p>Press <code>y</code> and the package will be removed.</p>

            <h2>List Packages</h2>
            <p>Use the <code>list</code> command to list all the packages installed on your system:</p>
            <h4>Example</h4>
            <h5>List installed packages:</h5>
            <code>C:\Users\Your Name\AppData\Local\Programs\Python\Python36-32\Scripts>pip list</code>
            <h5>Result:</h5>
            <code>
                Package         Version
                -----------------------
                camelcase       0.2
                mysql-connector 2.1.6
                pip             18.1
                pymongo         3.6.1
                setuptools      39.0.1              
            </code>
        </section>

        <hr>

        <section id="tryExcepts">
            <h1>Python Try Except</h1>
            <p>
                The <code>try</code> block lets you test a block of code for errors.
                <br>
                The <code>except</code> block lets you handle the error.
                <br>
                The <code>else</code> block lets you execute code when there is no error.
                <br>
                The <code>finally</code> block lets you execute code, regardless of the result of the try- and except blocks.               
            </p>

            <h2>Exception Handling</h2>
            <p>
                When an error occurs, or exception as we call it, Python will normally stop and generate an error message.
                <br>
                These exceptions can be handled using the <code>try</code> statement:              
            </p>
            <h4>Example</h4>
            <h5>The <code>try</code> block will generate an exception, because <code>x</code> is not defined:</h5>
            <code>
                try:
                  print(x)
                except:
                  print("An exception occurred")               
            </code>
            <p>
                Since the try block raises an error, the except block will be executed.
                <br>
                Without the try block, the program will crash and raise an error:               
            </p>
            <h4>Example</h4>
            <h5>This statement will raise an error, because x is not defined:</h5>
            <code>print(x)</code>

            <h2>Many Exceptions</h2>
            <p>You can define as many exception blocks as you want, e.g. if you want to execute a special block of code for a special kind of error:</p>
            <h4>Example</h4>
            <h5>Print one message if the try block raises a NameError and another for other errors:</h5>
            <code>
                try:
                  print(x)
                except NameError:
                  print("Variable x is not defined")
                except:
                  print("Something else went wrong")               
            </code>

            <h2>Else</h2>
            <p>You can use the <code>else</code> keyword to define a block of code to be executed if no errors were raised:</p>
            <h4>Example</h4>
            <h5>In this example, the <code>try</code> block does not generate any error:</h5>
            <code>
                try:
                  print("Hello")
                except:
                  print("Something went wrong")
                else:
                  print("Nothing went wrong")              
            </code>

            <h2>Finally</h2>
            <p>The <code>finally</code> block, if specified, will be executed regardless if the try block raises an error or not.</p>
            <h4>Example</h4>
            <code>
                try:
                  print(x)
                except:
                  print("Something went wrong")
                finally:
                  print("The 'try except' is finished")              
            </code>
            <p>This can be useful to close objects and clean up resources:</p>
            <h4>Example</h4>
            <h5>Try to open and write to a file that is not writable:</h5>
            <code>
                try:
                  f = open("demofile.txt")
                try:
                  f.write("Lorum Ipsum")
                except:
                  print("Something went wrong when writing to the file")
                finally:
                  f.close()
                except:
                  print("Something went wrong when opening the file")             
            </code>
            <p>The program can continue, without leaving the file object open.</p>

            <h2>Raise an exception</h2>
            <p>
                The <code>raise</code> keyword is used to raise an exception.
                <br>
                You can define what kind of error to raise, and the text to print to the user.              
            </p>
            <h4>Example</h4>
            <h5>Raise a TypeError if x is not an integer:</h5>
            <code>
                x = "hello"

                if not type(x) is int:
                  raise TypeError("Only integers are allowed")           
            </code>
        </section>

        <hr>

        <section id="userInputs">
            <h1>Python User Input</h1>

            <h2>User Input</h2>
            <p>
                Python allows for user input.
                <br>
                That means we are able to ask the user for input.
                <br>
                The method is a bit different in Python 3.6 than Python 2.7.
                <br>
                Python 3.6 uses the <code>input()</code> method.
                <br>
                Python 2.7 uses the <code>raw_input()</code> method.
                <br>
                The following example asks for the username, and when you entered the username, it gets printed on the screen:               
            </p>

            <h4>Python 3.6</h4>
            <code>
                username = input("Enter username:")
                print("Username is: " + username)              
            </code>

            <h4>Python 2.7</h4>
            <code>
                username = raw_input("Enter username:")
                print("Username is: " + username)             
            </code>
        </section>

        <hr>
        
        <section id="stringFormatting">
            <h1>Python String Formatting</h1>
            <p>To make sure a string will display as expected, we can format the result with the format() method.</p>

            <h2>String format()</h2>
            <p>
                The <code>format()</code> method allows you to format selected parts of a string.
                <br>
                Sometimes there are parts of a text that you do not control, maybe they come from a database, or user input?
                <br>
                To control such values, add placeholders (curly brackets <code>{}</code>) in the text, and run the values through the <code>format()</code> method:              
            </p>

            <h4>Example</h4>
            <h5>Add a placeholder where you want to display the price:</h5>
            <code>
                price = 49
                txt = "The price is {} dollars"
                print(txt.format(price))               
            </code>
            <p>You can add parameters inside the curly brackets to specify how to convert the value:</p>
            <h4>Example</h4>
            <h5>Format the price to be displayed as a number with two decimals:</h5>
            <code>txt = "The price is {:.2f} dollars"</code>
            
            <h2>Multiple Values</h2>
            <p>If you want to use more values, just add more values to the format() method:</p>
            <code>print(txt.format(price, itemno, count))</code>
            <p>And add more placeholders:</p>
            <h4>Example</h4>
            <code>
                quantity = 3
                itemno = 567
                price = 49
                myorder = "I want {} pieces of item number {} for {:.2f} dollars."
                print(myorder.format(quantity, itemno, price))             
            </code>

            <h2>Index Numbers</h2>
            <p>You can use index numbers (a number inside the curly brackets <code>{0}</code>) to be sure the values are placed in the correct placeholders:</p>
            <h4>Example</h4>
            <code>
                quantity = 3
                itemno = 567
                price = 49
                myorder = "I want {0} pieces of item number {1} for {2:.2f} dollars."
                print(myorder.format(quantity, itemno, price))              
            </code>
            <p>Also, if you want to refer to the same value more than once, use the index number:</p>
            <h4>Example</h4>
            <code>
                age = 36
                name = "John"
                txt = "His name is {1}. {1} is {0} years old."
                print(txt.format(age, name))               
            </code>

            <h2>Named Indexes</h2>
            <p>
                You can also use named indexes by entering a name inside the curly brackets <code>{carname}</code>, but then you must use names when you pass the parameter values <code>txt.format(carname = "Ford")</code>:
            </p>
            <h4>Example</h4>
            <code>
                myorder = "I have a {carname}, it is a {model}."
                print(myorder.format(carname = "Ford", model = "Mustang"))                
            </code>
        </section>
        
        <a class="next-btn" href="/learn/pyChallenge">Next</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>