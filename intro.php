<?php include 'header.php'; ?>

<!-- css -->
<!-- <link rel='stylesheet' type='text/css' media='screen' href='css/intro.css'> -->

<body>
    <div class="container">
        <?php include 'sidebar.php'; ?>
        <div class="main">
            <div class="my-intro">
                <div class="about-me">
                    <h1>About Me</h1>
                    <p>I am Student and now I learning how actully websites are build.
                        I am intrested in Web Development.Now recently I started to learn Java and C#.</p>
                </div>
                <div class="intro-img">
                    <img src="images/img1.svg" alt="Test">
                </div>
            </div>
            <div class="my-skills">
                <h1>My Skills</h1>
                <div class="skill-container">
                    <label for="html">HTML :</label>
                    <meter id="html" min="0" max="100" low="35" high="65" optimum="95" value="95"></meter><br>
                    <label for="html">CSS :</label>
                    <meter id="html" min="0" max="100" low="35" high="65" optimum="95" value="90"></meter><br>
                    <label for="html">JavaScript :</label>
                    <meter id="html" min="0" max="100" low="35" high="65" optimum="95" value="80"></meter><br>
                    <label for="html">Python :</label>
                    <meter id="html" min="0" max="100" low="35" high="65" optimum="95" value="60"></meter><br>
                    <label for="html">PHP :</label>
                    <meter id="html" min="0" max="100" low="35" high="65" optimum="95" value="75"></meter><br>
                </div>
                <div class="sk-img">
                    <img src="images/skill.png" alt="skills">
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>