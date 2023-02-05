<!DOCTYPE html>
<html>
<head>
<meta name="author" content="Romain Sumalde">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Personal Website</title>

<link rel="stylesheet" href="styles.css">
<link rel="icon" type="logo" href="Images/Minimalist Logo.png">
<script src="https://kit.fontawesome.com/48931abacc.js" crossorigin="anonymous"></script>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<!-- PHP Section -->
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    <!-- Header Section -->
    <div id="header"> 
        <div class="container">
            <nav>
                <img src="Images/Minimalist Logo1.png" class="logo">
                <ul id="sidemenu">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <i class="fa-solid fa-circle-xmark" onclick="closeMenu()"></i>
                </ul>
                <i class="fa-solid fa-bars" onclick="openMenu()"></i>
            </nav>
            <div class="header-text">
                <span class="text first-text">I'm a</span>
                <span class="text sec-text">Programmer</span>
                <h1>Hi, I'm <span>Romain</span><br>Sumalde</h1>
            </div>
        </div>
    </div>
    <!--About Section-->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="Images/picture.png" alt="picture">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">About Me</h1>
                    <p>Hello! My name is Romain Gerard C. Sumalde. I graduated in Software Development Strand from iACADEMY, Makati City. 
                   Besides programming I have an immense interest in gaming, cycling, video editing and photography.</p>
                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                        <p class="tab-links" onclick="opentab('experience')">Experience</p>
                        <p class="tab-links" onclick="opentab('education')">Education</p>
                    </div>
                    <div class="tab-contents active-tab" id="skills">
                        <ul>
                            <li><span>DaVinci Resolve</span><br>Video Editor</li>
                            <li><span>Full Stack Developer</span><br>Programmer</li>
                            <li><span>Photography</span><br>iPhone Photography</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="experience">
                        <ul>
                            <li><span>2019 - 2021</span><br>C++, C#, and Java</li>
                            <li><span>2020 - 2022</span><br>DaVinci Resolve</li>
                            <li><span>2022 - Present</span><br>Python, Java, Web Dev, and Mobile Prog</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="education">
                        <ul>
                            <li><span>2018 - 2019</span><br>San Isidro Catholic School</li>
                            <li><span>2019 - 2021</span><br>iACADEMY</li>
                            <li><span>2021 - Present</span><br>Asia Pacific College</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services -->
    <div id="services">
        <div class="container">
            <h1 class="sub-title">My Services</h1>
            <div class="service-list">
                <div>
                    <i class="fa-solid fa-code"></i>
                    <h2>Programming</h2>
                    <p>With my knowledge on C++, C#, Java, and Python. I am confident that I can help you with your project in programming.</p>
                </div>
                <div>
                    <i class="fa-solid fa-crop-simple"></i>
                    <h2>Video Editing</h2>
                    <p>After learning how to use DaVinci Resolve I can edit videos for gaming montage, cinematic, and other types of editing</p>
                </div>
                <div>
                    <i class="fa-solid fa-camera-retro"></i>
                    <h2>Photography</h2>
                    <p>My hobby for photography just started this year so I am not yet confident with my photography skills.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio -->
    <div id="portfolio">
        <div class="container">
            <h1 class="sub-title">My Work</h1>
            <!-- Pictures Grid -->
            <div class="work-list">
                <div class="work">
                    <img src="Images/background.jpg">
                </div>
                <div class="work">
                    <img src="Images/background.jpg">
                </div>
                <div class="work">
                    <img src="Images/background.jpg">
                </div>
            </div>
            <!-- Videos Grid -->
            <div class="work-list">
                <div class="work">
                    <img src="Images/background.jpg">
                </div>
                <div class="work">
                    <img src="Images/background.jpg">
                </div>
                <div class="work">
                    <img src="Images/background.jpg">
                </div>
            </div>
        </div>
    </div>
    <!-- Contact -->
        <div id="contact">
            <div class="container">
                <div class="row">
                    <div class="contact-left">
                        <h1 class="sub-title">Contact Me</h1>
                        <p><i class="fa-solid fa-square-envelope"></i> rcsumalde@student.apc.edu.ph</p>
                        <p><i class="fa-solid fa-square-phone"></i> 0945-154-1323</p>
                        <div class="social-icons">
                            <a href=""><i class="fa-brands fa-facebook"></i></a>
                            <a href=""><i class="fa-brands fa-github"></i></a>
                            <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="contact-right">
                        <form name="submit-to-google-sheet">
                            <input type="text" name="Name" placeholder="Your Name" required>
                            <input type="email" name="Email" placeholder="Your Email" required>
                            <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                            <button type="submit" class="btn btn2">Submit</button>
                        </form>
                        <h2>PHP Form Validation Example</h2>
                        <p><span class="error">* required field</span></p>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                            Name: <input type="text" name="name" value="<?php echo $name;?>">
                            <span class="error">* <?php echo $nameErr;?></span>
                            <br><br>
                            E-mail: <input type="text" name="email" value="<?php echo $email;?>">
                            <span class="error">* <?php echo $emailErr;?></span>
                            <br><br>
                            Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
                            <button type="submit" class="btn btn2">Submit</button>
                        </form>

                        <?php
                            echo "<h2>Your Input:</h2>";
                            echo $name;
                            echo "<br>";
                            echo $email;
                            echo "<br>";
                            echo $comment;
                        ?>
                        <span id="msg"></span>
                    </div>
                </div>
            </div>
        </div>

    <!-- JavaScript -->
    <script>
        // JavaScript lesson 18.9 Arrow Function
        // Moving Text
        const text = document.querySelector(".sec-text");
        const textLoad = () => {
            setTimeout(() => {
                text.textContent = "Programmer";
            }, 0);
            setTimeout(() => {
                text.textContent = "Video Editor";
            }, 4000);
            setTimeout(() => {
                text.textContent = "Photographer";
            }, 8000);
        }
        textLoad();
        setInterval(textLoad, 12000);
        
        // JavaScript lesson 10.3 For of Loop
        // Change Tab on About Me
        var tablinks = document.getElementsByClassName("tab-links");
        var tabcontents = document.getElementsByClassName("tab-contents");
        function opentab(tabname){
            
            for(tablink of tablinks){
                tablink.classList.remove("active-link");
            }
            for(tabcontent of tabcontents){
                tabcontent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");
        }

        // JavaScript lesson 23 Window 
        // Side Menu
        var side = document.getElementById("sidemenu");
        function openMenu(){
            side.style.right = "0";
        }
        function closeMenu(){
            side.style.right = "-200px";
        }

        // JavaScript lesson 24 Web API
        // Google sheet
        const scriptURL = 'https://script.google.com/macros/s/AKfycbz66qz66GEof0s-zvhGYCRYmPHnzC_aqWIWMjLS_NbiY2VGc9G9bG1vbQAnSHkgVsHSRg/exec'
        const form = document.forms['submit-to-google-sheet']
        const msg = document.getElementById("msg")
        
        // JavaScript lesson 15.1 Errors
        // Message Pop Up
        form.addEventListener('submit', e => {
            e.preventDefault()
            fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => {
                    msg.innerHTML = "Message sent successfully"
                    setTimeout(function() {
                        msg.innerHTML = ""
                    }, 3000)
                    form.reset()
                })
                .catch(error => console.error('Error!', error.message))
        })
    </script>
</body>
</html>