<html>
    <style>
        .top-buttons {
            list-style: none;
            display: flex;
            justify-content: left;
            padding: 0;
            margin-top: 30px;
        }
        .top-buttons li {
            margin: 0 15px;
            padding: 3px 15px;
            background-color: rgba(0, 0, 0, 0.5);
            border: 2px solid white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.7);
            font-family: 'Orbitron', sans-serif;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        .top-buttons li:hover {
            background-color: rgba(25, 128, 255, 0.485);
            transform: scale(1.1);
        }

        .top-buttons a {
            text-decoration: none;
            color: inherit;
            display: block;
        }
    </style>
    
<body>
<ul class="top-buttons">
        <li><a href="../index.html">Home</a></li>
    </ul>
Welcome <?php echo $_GET["givenname"]; ?>!<br>
Student Number: <?php echo $_GET["studentId"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?><br><br>
<h2>Full Name</h2>
LAST NAME: <?php echo $_GET["lastname"]; ?><br>
GIVEN NAME: <?php echo $_GET["givenname"]; ?><br>
MIDDLE NAME: <?php echo $_GET["middlename"]; ?><br><br>
<h2>Other INFO</h2>
Age: <?php echo $_GET["age"]; ?><br>
YEAR LEVEL and COURSE: <?php echo $_GET["yrlvlcs"]; ?><br>
SECTION: <?php echo $_GET["section"]; ?><br>
</body>
</html>