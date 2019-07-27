<!DOCTYPE html>
<html>
<head>
    <title>deore.in</title>
    <meta charset="utf-8" name="viewport"  content= "width=device-width, initial-scale=0.8"> 
    
    <style type="text/css">
        * { 
            font-family: "Bookman", "URW Bookman L", serif;
        }
        
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
            width: 90%;
            margin-left: 5%;
            margin-right: 5%;
        }
        
        #wrap {
            min-height: 100%;
            padding: 12px;
        }
        
        #main {
            overflow: auto;
            padding-bottom: 96;
            /* must be same height as the footer */
        }
        .menu a,.footer a {
            padding:5px;
        }
        .menu a:link,.menu a:visited,.footer a:link,.footer a:visited {
            color: rgb(0, 89, 255);
        }
        .menu a:hover,.footer a:hover {
            color: rgb(0, 0, 160);
        }
        #header {
            color: rgb(0,0,0);
            text-align: center;
        }
        #header .strg {
            color: rgb(28, 28, 48);
        }
        .subheader {
            color: rgb(128, 128, 128);
            font-size: 0.9em;
            margin-top: -12px;
        }
        
        .footer {
            position: relative;
            margin-top: -80px;
            /* negative value of footer height */
            height: 64px;
            padding: 12px;
            clear: both;
            text-align: right;
            
        }
        input, textarea {
            font-size: 1.1em;
            margin: 10px 0px 10px 0px;
        }
        #content {
            min-height: 90%;
        }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-63832735-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        
        gtag('config', 'UA-63832735-2');
    </script>
    
    
</head>
<body onload="showHome();">
    <div id="wrap">
        <div id="main">
            <div id="header">
                <h1>deore.in</h1>
                <div class="subheader">aerospace, robots!</div> 
            </div>
            <div class="menu">
                <hr />
                <a href="#" onclick="showHome();">home</a>
                <a href="#" onclick="showProject();">projects</a>
                <a href="#" onclick="showContact();">contact</a> 
                <hr />
            </div>
            <div id="content">
                
                <!-- ---------------------------------------------- -->
                
                <div id="home">
                    <p>Hi, I parked this domain because I had too! this is under construction now and will be updating everything soon.</p>
                </div>
                
                <div id="project">
                    <p>Had all those projects on siroi.co.in, now there is mess with that domain, somehow was able to recover some archived simulations.</p>
                    3D Inverse Kinematics <a href="/docs/FABRIKSpaceRobotics.pdf">report</a>
                    <hr>
                    <?php echo "Simulations <br />";
                    $path = "apps"; 
                    $dh = opendir($path); 
                    $i=1; 
                    echo "<ol>";
                        while (($file = readdir($dh)) !== false) { 
                            if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
                                echo "<li> <a href='$path/$file'>$file</a> </li> "; 
                                $i++; 
                            } 
                        }
                        echo "</ol>";
                        closedir($dh);
                        ?> 
                        <a href="apps.php">Some working simulations</a>
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                    </div>
                    
                    <!-- ---------------------------------------------- -->
                    
                    <div id="contact">
                        If you're human contact me  <br> <Img src="img/email.png" /> <br> the form below is for bots and scrapers!
                        <form>
                            Name <br  />
                            <input type="text" style="width:250px"><br  />
                            Email <br  />
                            <input type="text"  style="width:250px"><br  />
                            Message <br  />
                            <textarea rows="4" cols="50"></textarea><br  />
                            <input type="button" value="Submit">
                        </form>
                    </div>
                    <!-- ---------------------------------------------- -->
                    
                </div>
            </div>        
        </div>        
        <div class="footer">  
            <hr />
            <span style="text-align: left; float: left;">
                <a href="https://github.com/siddharthdeore/">github</a> - 
                <a href="https://www.linkedin.com/in/siddharth-deore/">linkedin</a> -
                <a href="#home">CV </a>
            </span>
            <span style="text-align: right; float: right;">
                &copy; deore.in
            </span>
        </div>
        
        <script language="javascript">
            var d1=document.getElementById("home");
            var d3=document.getElementById("project");
            var d4=document.getElementById("contact");
            document.addEventListener("DOMContentLoaded", function (event) {
                var element = document.getElementById('container');
                var height = element.offsetHeight;
                if (height < screen.height) {
                    document.getElementById("footer").classList.add('stikybottom');
                }
            }, false);
            clearAll();
            function showHome(){
                clearAll();
                d1.style.display  = 'block';
            } 
            function showProject(){
                clearAll();
                d3.style.display  = 'block';
            } 
            function showContact(){
                clearAll();
                d4.style.display  = 'block';
            } 
            function clearAll() {
                d1.style.display  = 'none';
                d3.style.display  = 'none';
                d4.style.display  = 'none';
                
            }
        </script>
    </body>
    
    </html>