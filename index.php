<?php
$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');
if (isset($_POST['send'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

    if(mysqli_num_rows($select_message)>0){
        $message[]='message sent already!';
    }else{
        mysqli_query($conn, "INSERT INTO `contact_form`(name,email,number,message) VALUES('$name','$email', '$number', '$msg')") or die('query failed');
        $message[]='message sent successfully!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>

<body>

    

    <?php
    if(isset($message)){
        foreach($message as $message){
            echo '<div class="message" data-aos="zoom-out">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>';
        }
    }
    ?>


    <!-----------------header------------->
    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#home" class="logo">Raman Singh</a>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="follow">
            <a href="https://www.facebook.com/profile.php?id=100011317872683&mibextid=ZbWKwL" target="_blank"><i class="fa-brands fa-facebook"  style="color: #000000;"></i></a>
            <a href="https://www.linkedin.com/in/raman-singh-5b13b5228" target="_blank"><i class="fa-brands fa-linkedin" style="color: #000000;"></i></a>
            <a href="https://www.instagram.com/vikki_singh_rajput_/" target="_blank"><i class="fa-brands fa-instagram" style="color: #000000;"></i></a>
        </div>
    </header>

    <!-----------------home------------->
    <section class="home" id="home">

        <div class="image" data-aos="fade-right">
            <img src="img/dewali1.jpeg" alt="">
        </div>

        <div class="content">
            <h3 data-aos="fade-up">Hello! I'm Raman Singh</h3>
            <span data-aos="fade-up">Web Designer & Developer</span>
            <p data-aos="fade-up">Full stack web development involves designing, developing,
                and maintaining both the front-end and back-end
                components of web applications. As a full stack developer, I
                have expertise in languages and frameworks such as HTML,
                CSS, JavaScript, and popular back-end technologies. My skills
                encompass a wide range of technologies, allowing me to
                create dynamic, user-friendly, and scalable web solutions.</p>
            <a href="#about" class="btn" data-aos="fade-up">About me</a>
        </div>

    </section>

    <!-----------------about------------->

    <section class="about" id="about">
        <h1 class="heading" data-aos="fade-up"> <span>Biography</span></h1>

        <div class="biography">
            <p data-aos="fade-up">Hello, I'm Raman Singh, a passionate full-stack web developer. With a keen eye for user interface design and a robust understanding of back-end technologies, I thrive on creating seamless and engaging web experiences. My journey in web development has equipped me with proficiency in languages such as HTML, CSS, JavaScript.

                In addition to technical skills, my experience with version control, deployment processes, and collaboration tools like Git makes me adept at working in agile development environments. I believe in the power of continuous learning and staying ahead in the ever-evolving world of web technologies.

                Let's build something incredible together – a digital world where form meets function seamlessly. I'm excited about the endless possibilities that web development offers, and I look forward to bringing my skills and passion to your next project.
            </p>


            <div class="bio">
                <h3 data-aos="zoom-in"> <span> E-mail id: </span>aakarsh8738990354@gmail.com</h3>
                <h3 data-aos="zoom-in"> <span> Name: </span>Raman Singh</h3>
                <h3 data-aos="zoom-in"> <span> Address: </span>Lucknow (Uttar Pradesh), India</h3>
                <h3 data-aos="zoom-in"> <span> Phone no.: </span>+91 8707031994, +91 9598073781</h3>
                <h3 data-aos="zoom-in"> <span> Age: </span>20 years</h3>
                <!-- <h3> <span> experience: </span>1+ years</h3> -->
            </div>
            <a href="https://drive.google.com/file/d/1NNwreD-Jxt_HAtyAF0nHkwCVrl65xPT7/view" class="btn" target="_blank" data-aos="fade-up">Download CV</a>
        </div>

        <div class="skills" data-aos="fade-up">
            <h1 class="heading"> <span>skills</span></h1>

            <div class="progress">
                <div class="bar" data-aos="fade-left">
                    <h3> <span>HTML</span> <span>90%</span></h3>
                </div>
                <div class="bar" data-aos="fade-right">
                    <h3> <span>CSS</span> <span>85%</span></h3>
                </div>
                <div class="bar" data-aos="fade-left">
                    <h3> <span>Bootstrap</span> <span>85%</span></h3>
                </div>
                <div class="bar" data-aos="fade-right">
                    <h3> <span>JavaScript</span> <span>75%</span></h3>
                </div>
                <div class="bar" data-aos="fade-left">
                    <h3> <span>jQuery</span> <span>75%</span></h3>
                </div>
                <div class="bar" data-aos="fade-right">
                    <h3> <span>PHP</span> <span>80%</span></h3>
                </div>
                <div class="bar" data-aos="fade-left">
                    <h3> <span>SQL</span> <span>75%</span></h3>
                </div>
                <div class="bar" data-aos="fade-right">
                    <h3> <span>MySQL</span> <span>70%</span></h3>
                </div>
                <div class="bar" data-aos="fade-left">
                    <h3> <span>WordPress</span> <span>80%</span></h3>
                </div>
                <div class="bar" data-aos="fade-right">
                    <h3> <span>Advance Excel</span> <span>70%</span></h3>
                </div>
                <div class="bar" data-aos="fade-left">
                    <h3> <span>UI Design</span> <span>65%</span></h3>
                </div>
            </div>

            <div class="edu-exp">
                <h1 class="heading" data-aos="fade-up" data-aos="fade-right"> <span>Education</span></h1>

                <div class="row">
                    <div class="box-container">
                        <!-- <h3 class="title">Education</h3> -->
                        <div class="box" data-aos="fade-right">
                            <h3>Full stack Web development</h3>
                            <span><b>Institute Name:</b> Gnet Computer training Institute neelmatha Lucknow, Uttar Pradesh<br>
                                <b>Duration:</b> 2022 - 2023</span>
                            <p>I pursued a comprehensive education in full stack web development as part of my Diploma in Full stack Web development. This program equipped me with a solid foundation in both front-end and back-end technologies, enabling me to design and implement end-to-end solutions for web applications.Received a Full Stack Web Development Certification, affirming my expertise in the field.</p>
                        </div>
                        <div class="box" data-aos="fade-right">
                            <h3>ITI - Mechanic Motor Vehicle</h3>
                            <span><b>College Name:</b> GR09001476-Government ITI, Aliganj, Lucknow, Uttar Pradesh<br>
                                <b>Duration:</b> 2020 - 2022</span>
                            <p>I successfully completed the Mechanic Motor Vehicle program at Government ITI college Aliganj, Lucknow, a comprehensive training that equipped me with the essential skills and knowledge required in the automotive industry.</p>
                        </div>
                        <div class="box" data-aos="fade-right">
                            <h3>Intermediate - Science branch (PCM) UP Board</h3>
                            <span><b>School Name:</b> Maa Sri V IC V NGR Nilmatha Lucknow, Uttar Pradesh<br>
                                <b>Duration:</b> 2019 - 2020</span>
                            <p>I pursued a comprehensive education in full stack web development as part of my Diploma in Full stack Web development. This program equipped me with a solid foundation in both front-end and back-end technologies, enabling me to design and implement end-to-end solutions for web applications.</p>
                        </div>
                        <div class="box" data-aos="fade-right">
                            <h3>High School - UP Board</h3>
                            <span><b>School Name:</b> Maa Sri V IC V NGR Nilmatha Lucknow, Uttar Pradesh<br>
                                <b>Duration:</b> 2018 - 2019</span>
                            <p>During my high school years, I actively engaged in technical and vocational education, gaining practical skills alongside traditional academic studies.Received recognition for outstanding performance in technical subjects during high school.
                                Secured first place in the school's robotics competition for innovative design and functionality.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-----------------Services------------->

    <section class="services" id="services">
        <h3 class="heading" data-aos="fade-up" data-aos="zoom-in"> <span>Services</span></h3>
        <div class="box-container">
            <div class="box" data-aos="zoom-in">
                <i class='fas fa-code'></i>
                <h3>Web Development</h3>
                <p>Empower your online presence with our comprehensive web development services. We specialize in crafting dynamic, user-centric websites tailored to meet your unique business needs. Our expert team covers every aspect of the development lifecycle, ensuring a seamless and visually striking online experience for your audience.</p>
            </div>
            <div class="box" data-aos="zoom-in">
                <i class='fas fa-paint-brush'></i>
                <h3>Graphic design</h3>
                <p>Transform your ideas into visually stunning creations with our expert graphic design services. We bring artistry and innovation to every project, crafting designs that captivate your audience and elevate your brand.</p>
            </div>
            <div class="box" data-aos="zoom-in">
                <i class='fab fa-bootstrap'></i>
                <h3>Bootstrap</h3>
                <p>Empower your web development projects with our Bootstrap integration and customization services. Bootstrap, an open-source front-end framework, offers a powerful foundation for building responsive and visually appealing websites and web applications.We leverage Bootstrap to enhance the aesthetics, functionality, and responsiveness of your digital presence.</p>
            </div>
            <div class="box" data-aos="zoom-in">
                <i class='fab fa-wordpress'></i>
                <h3>WordPress</h3>
                <p>Unlock the full potential of your online presence with our comprehensive WordPress services. As a leading provider of WordPress development and management, we specialize in creating dynamic, user-friendly websites that empower businesses and individuals to thrive in the digital landscape.</p>
            </div>
            <div class="box" data-aos="zoom-in">
                <i class="fa-solid fa-wand-magic-sparkles" style="color: #000000;"></i>
                <h3>UI Design</h3>
                <p>We specialize in creating visually stunning and intuitively designed user interfaces that elevate your digital presence. Our UI design services are crafted to enhance user engagement, streamline navigation, and deliver a seamless and delightful experience across web and mobile platforms.</p>
            </div>
            <div class="box" data-aos="zoom-in">
                <i class="fa-solid fa-file-excel" style="color: #000000;"></i>
                <h3>Advance Excel</h3>
                <p>Unlock the full potential of your data with our Advanced Excel services. Excel is more than just a spreadsheet tool; it's a powerful platform for data analysis, visualization, and business intelligence. Our team of Excel experts is dedicated to helping you harness the advanced features of Excel for enhanced decision-making and operational efficiency.</p>
            </div>
        </div>
    </section>

    <!-----------------Portfolio------------->

    <section class="portfolio" id="portfolio">
        <h3 class="heading" data-aos="fade-up"><span>Portfolio</span></h3>

        <div class="box-container">
            <div class="box" data-aos="zoom-in">
                <img src="img/img1.png" alt="">
                <h3>Random emoji generator</h3>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="img/img2.png" alt="">
                <h3>Chef website landing page</h3>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="img/img3.png" alt="">
                <h3>Hotel Booking Website</h3>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="img/img4.png" alt="">
                <h3>Grocery store landing page</h3>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="img/img5.png" alt="">
                <h3>MBA Chai Wala landing page</h3>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="img/img6.png" alt="">
                <h3>Education Website landing page</h3>
            </div>
        </div>
    </section>


    <!----------------- contact---------------------- -->
    <section class="contact" id="contact">
        <h3 class="heading" data-aos="fade-up"><span>Contact Me</span></h3>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="flex">
                <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
                <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
            </div>
            <input data-aos="fade-up" type="text" min="0" name="number" placeholder="enter your number" class="box" required>
            <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
            <input data-aos="zoom-in" type="submit" value="send message" name="send" class="btn">
        </form>
        <div class="box-container">
            <div class="box" data-aos="zoom-in">
            <i class="fa-brands fa-whatsapp" style="color: #000000;"></i>
                <h3>whatsapp number</h3>
                <p>+91 8707031994</p>
            </div>
            <div class="box" data-aos="zoom-in">
                <i class="fas fa-envelope"></i>
                <h3>E-mail Id</h3>
                <p>aakarsh8738990354@gmail.com</p>
            </div>
            <div class="box" data-aos="zoom-in">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Address</h3>
                <p>Lucknow (Uttar Pradesh) - 226002, India</p>
            </div>
        </div>
    </section>


    <div class="credit"> &copy; Copyright @ <?php echo date('Y') ?> by <span>Raman Singh</span></div>


</body>
<script src="script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>
    AOS.init({
        duration:800,
        delay:300
    });
</script>

</html>