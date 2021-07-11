<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spectrum</title>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@200&family=Merienda:wght@700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Libre+Barcode+128+Text&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Bangers&family=Libre+Barcode+128+Text&family=Timmana&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap" rel="stylesheet">
    <style>
        .logout{
            text-decoration: none;
            text-transform: uppercase;
            background: rgba(225, 225, 225, 0.1);
            padding: 16px;
            border-radius: 10px;
            transition-timing-function: ease-out;
            color: seashell;
            font-weight: bold;
            transition: all 0.2s;
            box-shadow: 5px 5px 20px rgba(0, 0,0 , 0.5);
        }
        .logout:hover{
            color:rgb(105, 71, 8);
            transition: all 0.2s;
            background-color:wheat;
            font-weight:800px;
        }
    </style>
</head>

<body>
    <header>
        <img src="Assets\mozclub logo.png" alt="Spectrum Logo" class="logo">
        <nav>
            <ul class="nav-area">
                <li><a href="#">Home</a></li>
                <li><a href="#Aboutus">About Us</a></li>
                <li><a href="#Projects">Projects</a></li>
                <li><a href="#Contact">Connect</a></li>
            </ul>
        </nav>
       <a href="logout.php" class="logout">Logout</a>
    </header>

    <div class="card">
        <div class="content">
            <h2>Spectrum</h2>
            <p>Technical society of College Of Engineering And Technology, Bhubaneswar, a place for all technical
                enthusiasts to learn, discover and innovate new things in the field of Technology and Design.</p>
            <a href="#Aboutus">Know More</a>
        </div>
        <img src="Assets\spectrum.png" alt="Spectrum banner" class="Spectrum">

        <div class="quote">
            <p>"There's no scarcity of opportunity to make a living at what you love. There is only a scarcity of
                resolve to make it happen."</p>
        </div>
    </div>


    <div class="aboutus" id="Aboutus">
        <h1>ABOUT US</h1>
        <hr>
        <p>SPECTRUM ,Technical society of COLLEGE OF ENGINEERING AND TECHNOLOGY, BHUBANESWAR,a place for all technical
            enthusiasts to learn, discover and innovate new things in the field of Technology and Design. The name of
            the club " SPECTRUM ", a contribution of our alumni of 2015 batch, is particularly used to describe the
            characteristic colors of visible light after passing through a prism, similarly students of CET consist of
            different skills within them and Spectrum acts like a prism, Spectrum recognises their skills helps them to
            strengthen it.<br><br>

            This club was established by " Bikram Keshari Panda (2015 batch) ".Spectrum got its recognition in the year
            2016 and got its workspace, funding and other facilities. Primarily this was his idea to have an electronics
            society in our college but with the efforts of other members we established two other wings - Software and
            Design.The other seniors who had their valuable contribution for this initiative were: Ankit Mishra,
            Zighnesh Biswal, Abhishek Dash, Avinash Nayak, Tapan Kumar Pal, Krutikesh Sahoo, Abhilash Das.</p>
        <div class="photo1">
            <img src="Assets\Software.png" alt="software image">
        </div>

        <div class="photo2">
            <img src="Assets\Hardware.png" alt="Hardware photo">
        </div>

        <div class="photo3">
            <img src="Assets\design.png" alt="Design image">
        </div>



    </div>
    <div class="wing">
        <h1 class="Wing_heading">OUR WINGS</h1>

        <div class="container">

            <div class="plates">
                <div class="plate_content">
                    <h1>SPECTRUM</h1>
                    <h2>Software</h2>
                    <ul>
                        <li>Competative Programming</li>
                        <li>Web development</li>
                        <li>App development</li>
                        <li>Machine learning</li>
                    </ul>
                    <a href="#Projects">Know More</a>
                </div>
            </div>
            <div class="plates">
                <div class="plate_content">
                    <h1>SPECTRUM</h1>
                    <h2>Hardware</h2>
                    <ul>
                        <li> VLSI</li>
                        <li>Embedded System</li>
                        <li>PCB Design</li>
                    </ul>
                    <a href="#Projects">Know More</a>
                </div>
            </div>
            <div class="plates">
                <div class="plate_content">
                    <h1>SPECTRUM</h1>
                    <h2>Design</h2>
                    <ul>
                        <li>UI/UX Poster Designing</li>
                        <li>Poster Designing</li>
                    </ul>
                    <a href="#Projects">Know More</a>
                </div>
            </div>
        </div>
    </div>


    <div class="project" id="Projects">
        <div class="project_heading">
            <h1>PROJECTS</h1>
            <h3>Hover over the image to know more</h3>
        </div>
        <div class="box">
            <span style="--i:1">
                <h2>BHAAVNA</h2>
                <img src="Assets\Bhaavana.jpg" alt="">
                <p>Device helps physically imapired people to understand the emotions of the person they are talking to
                </p>
            </span>
            <span style="--i:2">
                <h2>SPECTRUM</h2>
                <img src="Assets\project image 1.jpg" alt="">
                <p>These are some of our projects.</p>
            </span>
            <span style="--i:3">
                <h2>SMART TOILET </h2>
                <img src="Assets\Smart Toilet.jpg" alt="">
                <p>A semi automated toilet that is designed for the elderly people and the patients.</p>
            </span>
            <span style="--i:4">
                <h2>SUPPLY BOT</h2>
                <img src="Assets\Supply Bot.jpg" alt="">
                <p>Robots help to deliver food and medicine aid in flood scenarios to the affected people in remote
                    areas.</p>
            </span>
            <span style="--i:5">
                <h2>FRIENDLY-MEDICO</h2>
                <img src="Assets\friendly_medico.jpg" alt="">
                <p>In this pandemic not everyone of us have the courage to go to hospitals ,this app will take some
                    short health details and keep it in a database.</p>
            </span>
            <span style="--i:6">
                <h2>ULTRASONIC RBHS</h2><img src="Assets\Ultrasonic sensor.jpg" alt="">
                <p>It is a noiseless horn system for the vehicles to communicate with each other using ultrasonic waves.
                </p>
            </span>
            <span style="--i:7">
                <h2>SPECTRUM</h2><img src="Assets\project image 2.jpeg" alt="">
                <p>These are some of our projects.</p>
            </span>
            <span style="--i:8">
                <h2>SUMMARIZER</h2>
                <img src="Assets\Exytractive text Summarization.jpg" alt="">
                <p>A simple python program which can find the most important sentences in a paragraph and can summarize
                    them.</p>
            </span>
        </div>
    </div>
    <div class="contacts" id="Contact">
        <h1 class="Contact_h">CONNECT</h1>
        <div class="bucket">
            <div class="followCard">
                <div class="followCard_content">
                    <a href="https://www.instagram.com/spectrum.cetb/?hl=en" target="_Rahul"><img
                            src="Assets\icons8-instagram-96.png" alt="Instagram"></a>
                    <h3>Instagram</h3>
                </div>
            </div>
            <div class="followCard">
                <div class="followCard_content">
                    <a href="https://www.facebook.com/spCETrum" target="_Rahul"><img src="Assets\icons8-facebook-90.png"
                            alt="Facebook"></a>
                    <h3>Facebook</h3>
                </div>
            </div>
            <div class="followCard">
                <div class="followCard_content">
                    <a href="https://github.com/Spectrum-CETB" target="_Rahul"><img
                            src="Assets\icons8-github-90 (1).png" alt="Github"></a>
                    <h3>Github</h3>
                </div>
            </div>
            <div class="followCard">
                <div class="followCard_content">
                    <a href="https://www.linkedin.com/in/spectrum-cet-3b71431b1/" target="_Rahul"><img
                            src="Assets\icons8-linkedin-90.png" alt="Linked In"></a>
                    <h3>Linked In</h3>
                </div>
            </div>

        </div>
    </div>

</body>

</html>