<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<title>Home Page</title>
        <meta http-equiv="refresh"content="2; url = form_page.xhtml" />
        <link rel="stylesheet" href="home_page.css">
        
    </head>
    <body onload="load()" ononline="onFunction()" onoffline="offFunction()">
        <div class="heading_Block">
            <header class="main_heading">
                <h3>DATA SCIENCE CONSULTANCY</h3>
                <nav class="page_navigation">
                    <ul class="navgation_list">
						<li><a href="#">Home</a></li>
						<li><a href="#">Data Analetics</a></li>
						<li><a href="#">Machine Learning</a></li>
						<li><a href="#">Deep Learning</a></li>
                        <li><a href="form_page.xhtml">Sign Up</a></li>
                        <li><a href="login_page.xhtml">Login</a></li>
					</ul>
                </nav>


                <div onmouseover="mOver(this)" onmouseout="mOut(this)" 
                style="background-color:rgb(235, 153, 2);color:white;width:120px;height:20px;padding:20px;">
                Contact Us</div>
                
                <script>
                function mOver(obj) {
                  obj.innerHTML = "Call-77777777777"
                }
                
                function mOut(obj) {
                  obj.innerHTML = "Contact Us"
                }
                </script>
                



                <h1>Welcome To Data Science Consultancy</h1>
                <p class="heading_para">Get 1-on-1 coaching, virtual training, and talks to help you with your projects, assisgnment, professional work or consultancy on Data Science</p>
            </header>
            <div class="main_content">
                <div class="about">
                    <header><h2>About</h2></header>
                    <div class="about_body">
                        <p>We are Data Science Project Assistance and Solution Providers. We welcome students and working professionals alike who require immediate help/assistance or who are Data Science Enthusiasts and even experienced folks as well.</p>
                    </div>
                    <aside class="about_body">
                        <p>Data Science Consultancy (DSC) is established on 7th May, 2021 as an Assignment 'Data Science Consultancy'. We are a consultancy firm intending to provide Project Solutions and immediate assistance in the domain of Data Science to students (UG/PG) and working professionals alike.</p>
                    </aside>
                </div>
                <div class="services">
                    <header><h2>Services</h2></header>
                    <div class="services_body">
                        <div class="service">
                            <a href="#"><h4 class="service_heading">Machine Learning</h4></a>
                            <a href="#"><img src="Images/machine learning.jpg" class="ml_image" onerror="image1()">
                            <script>
                                function image1() {
                                  alert('The image could not be loaded.');
                                }
                            </script>
                        </a>
                            <p class="service_para">Welcome to the world of Machine Learning</p>
                        </div>
                        <div class="service">
                            <a href="#"><h4 class="service_heading">Deep Learning</h4></a>
                            <a href="#"><img src="Images/deep learning.jpg" class="dl_image" onerror="image2()">
                                <script>
                                    function image2() {
                                      alert('The image could not be loaded.');
                                    }
                                </script>
                            </a>
                            <p class="service_para">Dive deep in the world of Deep Learning</p>
                        </div>
                        <div class="service">
                            <a href="#"><h4 class="service_heading">Data Analytics</h4></a>
                            <a href="#"><img src="Images/data analytics.jpg" class="da_image" onerror="image3()">
                                <script>
                                    function image3() {
                                      alert('The image could not be loaded.');
                                    }
                                </script>
                            </a>
                            <p class="service_para">Become the most desired Data Analyst</p>
                        </div>
                    </div>

                </div>
                <div class="pricing">
                    <header><h2>Pricing</h2>
                        <p class="pricing_para">Our Pricing Plans</p>
                    </header>
                    <div class="pricing_body">
                        <div class="plan">
                            <div class="time">
                                <ul><li><h4>1 hour</h4></li></ul>
                            </div>
                            <div class="details">
                                <ul>
                                    <li class="price">25 USD</li>
                                    <li>Complete Project Solutions</li>
                                    <li>Chat Assistance</li>
                                    <li class="cut_line">1 on 1 Video Explanation</li>
                                </ul>
                            </div>
                        </div>
                        <div class="plan">
                            <div class="time">
                                <ul><li><h4>2 hour</h4></li></ul>
                            </div>
                            <div class="details">
                                <ul>
                                    <li class="price">50 USD</li>
                                    <li>Complete Project Solutions</li>
                                    <li>Chat Assistance</li>
                                    <li class="cut_line">1 on 1 Video Explanation</li>
                                </ul>
                            </div>
                        </div>
                        <div class="plan">
                            <div class="time">
                                <ul><li><h4>3 hour</h4></li></ul>
                            </div>
                            <div class="details">
                                <ul>
                                    <li class="price">150 USD</li>
                                    <li>Complete Project Solutions</li>
                                    <li>Chat Assistance</li>
                                    <li>1 on 1 Video Explanation</li>
                                </ul>
                            </div>
                        </div>
                        <div class="plan">
                            <div class="time">
                                <ul><li><h4>4 hour</h4></li></ul>
                            </div>
                            <div class="details">
                                <ul>
                                    <li class="price">300 USD</li>
                                    <li>Complete Project Solutions</li>
                                    <li>Chat Assistance</li>
                                    <li>1 on 1 Video Explanation</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <div class="footer">
                    <header>Data Science Consultancy</header>
                    <p>&copy;Copyright <span>Data Science Consultancy</span>. All Rights Reserved</p>
                </div>
            </footer>
        </div>
        <script>
            function load() {
              alert("This site uses cookies");
            }
            
            function onFunction() {
              alert ("Your browser is working online.");
            }
            
            function offFunction() {
              alert ("Your browser is working offline.");
            }
        </script>
            
    </body>
</html>