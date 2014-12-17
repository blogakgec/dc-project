<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="stylesheets/style.css" type="text/css" />
        <title>Home</title>
    </head>
    <body>
        <div id="big_wrapper">
            <div id="header">
                <h1 id="head_text">AKGEC LATE ENTRY SYSTEM</h1>
            
            </div>
            <div id="clock_box">
                <p id="clock">8:08 PM</p>
            </div>
        
            <div id="search">
            <div id="search_box">
            <p id="message">the alert message will be displayed here</p>
            <form method="post" action="process.php">
                <input type="text" placeholder="Enter student no" name="st_no" id="box1" >
                <input type="submit" value="Search" id="box2">
                
            </form>
            </div>
            <div id="footer">
                <img src="images/silogo.png" width="60px" height="60px" id="image" />
                <p id="footer_text">Powered by Software Incubator</p>
                
            </div>
            
            </div>
        
        </div>
    </body>

</html>