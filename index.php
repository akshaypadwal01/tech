<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Home </title>
        <meta name="description" content="">


        
        <meta name="viewport" content="width=device-width, initial-scale=1">



        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" class="stylesheet">
        <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="header">
        <a href="#default" class="logo"> <img src="image/Exam logo.jpg" alt="Exam Logo">Tech Quizer</a>
        <div class="header-right">
            <!-- Toggle button for mobile -->
            <button class="toggle-button" onclick="toggleMenu()"><i class="fas fa-bars"></i></button>
            <!-- Navigation links -->
            <div class="header-links" id="header-links">
                <a class="active" href="index.php">Home</a>
                <a class="active" href="about.php">About us</a>
                <a class="active" href="main.php">Sign up</a>
                <a class="active" href="main.php">login</a>
            </div>
        </div>
    </div>


    <section class="hero-section">
        <div class="hero-content">
            <a href="main.php">
                <button>Let's Start</button>
            </a>
        </div>
      </section>


<h2 id="features">How Exam Work</h2>

    <div class="features">
        
        <div class="feat feats" id="createAccount">
            
            <img src="image/account.jpg" alt="">
            <h2>Create your Account</h2>
            <p>Your own customized onlineexam platform at your-name.onlineexam.in with your logo and colors, where your Admins and candidates will login.</p>
        </div>
        <div class="feat feats" id="content">
            <img src="image/content.jpg" alt="">
            <h2>Add your Content</h2>
            <p>Easily add and edit Question Papers, create Online Exams, optionally create candidate accounts to facilitate conducting online exams.
            </p>
        </div>
        <div class="feat feats" id="onlineexam">
            <img src="image/exam.jpg" alt="">
            <h2>Conduct Online Exams</h2>
            <p>Schedule exams and monitor them in realtime to see how many and who is taking the exam with various other metrics.</p>
        </div>
        <div class="feat feats" id="viewResults">
            <img src="image/result.webp" alt="">
            <h2>View Results & Analytics</h2>
            <p>After exam window is closed, scores and analytics for all candidates are visible to the Admin & candidates.</p>
        </div>
      </div>

<!-- 1 -->
      <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closePopup()">&times;</span>
            <h2>Description for Create New Account</h2>
            <p>1. Registration Form: Users usually start by visiting the  platform's website and navigating to the registration page. 
                <br>
                    
                
               2.  Personal Information: The registration form typically asks for basic personal information, such as:
                <br>
                <ul>
                    
                <li>Full name</li>
                <li>Email address</li>
                <li>Password (to create an account)</li>
                <li>Date of birth</li>
                <li>Contact information (optional)</li></ul><br>
               3.  Verification: After filling out the registration form, users may need to verify their email address or phone number to confirm their identity.
                
                
                   
            </p>
            
        </div>
    </div>

<!-- 2 -->
<div id="popup1" class="popup">
    <div class="popup-content">
        <span class="close" onclick="closePopup1()">&times;</span>
        <h2>Description for Add Content</h2>
        <!-- Add more information here -->
        <p>Welcome to our exam portal! Our platform provides a comprehensive solution for conducting online exams efficiently and securely. Whether you're an educational institution, a corporate organization.
            <br><br>
            With our platform, you can create and customize exams tailored to your specific requirements. From multiple-choice questions to essay-type answers, our flexible question formats accommodate various testing needs. 
           
        </p>
    </div>
</div>

<!-- 3 -->
<div id="popup2" class="popup">
    <div class="popup-content">
        <span class="close" onclick="closePopup2()">&times;</span>
        <h2>Description to conduct online Exam</h2>
        <!-- Add more information here -->
        <p>User Registration: Implement a secure user Registration system where students can log in with their credentials. 
            <br><br>
            Exam Creation and Management: Provide a user-friendly interface for administrators to create and manage exams. This includes defining exam details such as title, instructions and question formats.
            <br><br>
            Question Bank: Create a repository of questions categorized by subject, topic, difficulty level, etc. 
            <br><br>
            Question Types: Support different types of questions such as multiple-choice, true/false, fill-in-the-blank. </p>
    </div>
</div>

<!-- 4 -->
<div id="popup3" class="popup">
    <div class="popup-content">
        <span class="close" onclick="closePopup3()">&times;</span>
        <h2>Description for View Results & Analytics</h2>
        <!-- Add more information here -->
        <p>Results and Analytics: Provide detailed exam results to students, including overall scores, section-wise performance, and correct/incorrect answers.
             <br><br>
             Student Performance Feedback: The "View Result" feature allows students to access their exam results.
             <br><br>
             Analytics and Insights: Alongside individual results, analysis of overall exam performance.
             
             
             
            </div>
</div>

      <script src="js/home.js"></script>
 








      <section class="infinite-scroll">
        <h1 id="tests">Key Features</h1>
        <div class="scroller" data-duration="slow">
            <ul class="tag-list scroller__inner">
                <li class="slide" data-active>
                    <div class="tests">
                        <div class="img"><img src="image/device.jpg" alt="Member 1">
                        </div>
                        <p>  Use Any Device<br><br>
                          
                          Exams can be taken on all devices; desktops, laptops, phones & tablets.
                        </p>
                    </div>
                </li>
                <li class="slide">
                    <div class="tests">
                        <div class="img"><img src="image/Question.jpg" alt="Member 2">
                        </div>
                        <p>All Question Types
                          <br><br>
                          Question Support for MCQ , Numeric , Subjective & Coding (Java, Python, C++)
                        </p>
                    </div>
                </li>
                <li class="slide">
                    <div class="tests">
                        <div class="img"><img src="image/cloud.webp" alt="Member 3">
                        </div>
                        <p>Cloud-based
                          <br><br>
                          Any number of users can take Online Exams simultaneously, 1 Million+ Exams already taken.
                        </p>
                    </div>
                </li>
                <li class="slide">
                  <div class="tests">
                      <div class="img"><img src="image/Analytics.jpg" alt="Member 4">
                      </div>
                      <p>Analytics & Reports
                        <br><br>
                        Multi-page Analytics giving Subject, Topic & Time-wise detailed analytics.
                      </p>
                  </div>
              </li>
              <li class="slide">
                <div class="tests">
                    <div class="img"><img src="image/arrow.jpg" alt="Member 5">
                    </div>
                    <p>Simple Import
                      <br><br>
                      Question Papers in MS-Word are easily, quickly converted into Online Exams.
                    </p>
                </div>
            </li>
            </ul>
        </div>
    </section>






    <footer>
        <div class="foot">
            <div class="left-section">
                <img src="image/Exam logo.jpg" alt="Footer Logo" class="logo">
                <h1 class="heading1">Tech Quizer</h1>
            </div>
            <div class="footer-content">
                <div class="useful-links">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">AboutUs</a></li>
                        <li><a href="main.php">Sign up</a></li>
                        <li><a href="main.php">Login</a></li>
                    </ul>
                </div>
                
                <div class="contact-info">
                    <div class="info">
                        <p>Email: <span class="email">techquizer@gmail.com</span></p>
                        <p>Phone: <span class="phone">0241-2244500</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="copbut">
            <div class="copyright">
                <p>&copy; 2024 Fourise Software Solutions Pvt. Ltd.</p>
            </div>
            <div class="social-media-icons">
                <button type="button" class="social-icon"><img src="image/instagram.png" alt=""></button>
                <button type="button" class="social-icon"><img src="image/facebook.png" alt=""></button>
                <button type="button" class="social-icon"><img src="image/twitter.png" alt=""></button>
            </div>
        </div>
    </footer>
    

<script>
    function toggleMenu() {
    var headerLinks = document.getElementById("header-links");
    var header = document.querySelector('.header');
    header.classList.toggle('menu-open'); // Toggle menu-open class on header
    if (headerLinks.style.display === "block") {
        headerLinks.style.display = "none";
    } else {
        headerLinks.style.display = "block";
    }
}


</script>






</body>
</html>