<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Making a webpage about my favorite candy">
    <meta name="robots" content="noindex, nofollow">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="icon" href="./Imgs/Digiseller.png">
    <title>Digiseller</title>
    <!-- JS CODE -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="./JS/JavaScript.js"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/7daddba741.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="./CSS/CSS.css">
    <link rel="stylesheet" href="./CSS/special-design.css">
</head>
<body>
    <script src="header.js"></script>
    <main>
        <section class="masthead">
            <div class="cover">
                <h1 class="masthead-title">Digiseller</h1>
                <h2>Online chat and learning platform for aspiring entrepreneurs and programmers</h2>
            </div>
        </section>
        <section class="gallery">
            <button onclick="back()">&lt;</button>
            <div class="content-gallery">
                <h1 class="whats-new">What's New</h1>
                <div class="content">
                    <div class="tab-item visible" id="content-item-1">
                        <div class="image-box">
                        <img src="./Imgs/seminar.jpg" alt="Seminar">
                        </div>
                        <div class="description">
                            <h1>First Free Monthly Seminar!</h1>
                            <p>
                                We’re happy to launch our first monthly free seminar! Open to all individuals, in-person or online. 
                                The first 300 participants are eligible for 
                                a 4-week free trial of our services, such as E-learning, ad and post tools, consultation, and more! <br><br>
                                For more details about the event, click the “Event” button below. To learn more about our services, click the “services” button.
                            </p>
                            <div class="btn">
                                <a href="#event">EVENT</a>
                                <a onclick="notExist()">SERVICES</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-item" id="content-item-2">
                        <div class="image-box">
                            <img src="./Imgs/E-learning.jpg" alt="E-Learning">
                        </div>
                        <div class="description">
                            <h1>E-Learning</h1>
                            <p>
                                Embark on your learning journey by joining our weekly classes led by experienced experts and professors. 
                                Alternatively, access our library of pre-made tutorial videos. Each video has implemented interactive follow-along 
                                tools for a more immersive experience. Learn at your own pace or join a group class with other peers. Digiseller 
                                offers flexible e-learning options tailored to your needs!
                            </p>
                        </div>
                    </div>
                    <div class="tab-item" id="content-item-3">
                        <div class="image-box">
                            <img src="./Imgs/ad-editor.jpg" alt="Ad Editor">
                        </div>
                        <div class="description">
                            <h1>post and Ad Editor Tools</h1>
                            <h2>Elevate your ads and posts with Digiseller’s post editor tools!</h2>
                            <p>
                                Access to tools such as:
                            </p>
                            <ul>
                                <li>Trend charts: real-time insights on frequent trends.</li>
                                <li>AI optimization: State-of-the-art tools for maximum engagement</li>
                                <li>Asset library: access high-quality assets for standout ads.</li>
                            </ul>
                            <p>
                                Revolutionize your marketing strategy with Digiseller today! <br>
                                For more information, click on the “services” button down below
                            </p>
                            <div class="btn">
                                <a onclick="notExist()">SERVICES</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-item" id="content-item-4">
                        <div class="image-box">
                        <img src="./Imgs/refferal.jpg" alt="Refferal">                  
                        </div>
                        <div class="description">
                            <h1>Refer a Friend!</h1>
                            <h2>Refer a friend and earn some credits!</h2>
                            <p><i class="fa-solid fa-link"></i>Get your unique referral link and crafted post</p><br>
                            <p><i class="fa-solid fa-sack-dollar"></i>Earn a $50 credit voucher per referral</p><br>
                            <p><i class="fa-solid fa-gift"></i>Unlock VIP and merch editor tools!</p>
                            <p>Share your link with everyone you know! Click below for more details!</p><br>
                            <div class="btn">
                                <a onclick="notExist()">LEARN MORE!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-container">
                    <input id="tab-1" type="radio" name="tabs" checked>
                    <input id="tab-2" type="radio" name="tabs">
                    <input id="tab-3" type="radio" name="tabs">
                    <input id="tab-4" type="radio" name="tabs">
                </div>
            </div>
            <button onclick="next()">&gt;</button>
        </section>
        <section class="empty-space-1">
            <div></div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#00F7FB" fill-opacity="1" d="M0,64L0,64L110.8,64L110.8,288L221.5,288L221.5,0L332.3,0L332.3,128L443.1,128L443.1,160L553.8,160L553.8,32L664.6,32L664.6,64L775.4,64L775.4,64L886.2,64L886.2,224L996.9,224L996.9,256L1107.7,256L1107.7,192L1218.5,192L1218.5,224L1329.2,224L1329.2,32L1440,32L1440,320L1329.2,320L1329.2,320L1218.5,320L1218.5,320L1107.7,320L1107.7,320L996.9,320L996.9,320L886.2,320L886.2,320L775.4,320L775.4,320L664.6,320L664.6,320L553.8,320L553.8,320L443.1,320L443.1,320L332.3,320L332.3,320L221.5,320L221.5,320L110.8,320L110.8,320L0,320L0,320Z"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0e0e0e" fill-opacity="1" d="M0,128L0,224L102.9,224L102.9,288L205.7,288L205.7,64L308.6,64L308.6,0L411.4,0L411.4,224L514.3,224L514.3,128L617.1,128L617.1,32L720,32L720,128L822.9,128L822.9,32L925.7,32L925.7,64L1028.6,64L1028.6,320L1131.4,320L1131.4,288L1234.3,288L1234.3,32L1337.1,32L1337.1,192L1440,192L1440,320L1337.1,320L1337.1,320L1234.3,320L1234.3,320L1131.4,320L1131.4,320L1028.6,320L1028.6,320L925.7,320L925.7,320L822.9,320L822.9,320L720,320L720,320L617.1,320L617.1,320L514.3,320L514.3,320L411.4,320L411.4,320L308.6,320L308.6,320L205.7,320L205.7,320L102.9,320L102.9,320L0,320L0,320Z"></path></svg>
        </section>
        <section id="about-us">
            <div class="image-box">
                <img src="./Imgs/consulting.jpg" alt="consulting">
            </div>
            <div class="description box-1">
                <h1>ABOUT US</h1>
                <p>Digiseller was founded upon the idea of helping small businesses or independent entrepreneurs and programmers search 
                    for success in their respective fields. Our goal stayed true ever since 2022 and will remain the same. <br><br>
                    Kayson Souksaly, the founder of Digiseller, faced numerous setbacks in his pursuit of entrepreneurship. Ventures and
                    ideas kept failing him with little to no result. Despite these challenges, he discovered a supportive community willing to 
                    lend a hand. Inspired by their help, he established Digiseller as a community willing to give in-depth help and advice to 
                    any business walking their road to success. <br><br>
                    Our team shares the same core values as the company. Committed to fostering innovation and growth within the online community. 
                    Headquartered at 102 Mapleview Dr, Barrie, ON 1T5 2D4, with plans for expansion into other regions across Canada, ensuring access 
                    to our services online and in-person.
                </p>
            </div>
            <div class="description box-2">
                <h1>OUR VISION</h1>
                <p>
                    At Digiseller, we’re dedicated to creating a welcoming community space for new entrepreneurs, programmers, and anyone 
                    seeking guidance. Our platform provides a range of tools and resources tailored to help you succeed in your brand. Such 
                    as step-by-step tutorials and personalized consultations to cutting-edge graphic and web design solutions, Digiseller is 
                    willing to provide any assistance in any of your endeavors. We aim to make you the best leader and version of yourself for your 
                    brand. Join now and let us venture with you on your journey to success!
                </p>
            </div>
            <div class="image-box">
                <img src="./Imgs/community.jpg" alt="community">
            </div>
        </section>
        <section class="empty-space-2">
            <div class="quote">
                <p>
                    "Digiseller envisions a nurturing environment where innovation and progress flourish unhindered by prejudice or bias—a true community where every voice is heard and valued. We strive to cultivate a space where diverse perspectives converge to drive positive change and transformative growth."</p>
                <h2>- Digiseller</h2>
            </div>
        </section>
        <section id="event">
            <div class="image-box">
                <img src="./Imgs/seminar-real-photo.jpg" alt="Photo of a seminar">
                <img src="./Imgs/webinar.jpg" alt="webinar">
            </div>
            <div class="description">
                <h1>EVENTS</h1>
                <p>
                    Digiseller is proud to announce its first free seminar from a recurring monthly program! 
                    The seminar will take place on September 30<sup>th</sup>, 2024, from 2 PM to 4 PM, and it will take 
                    place both online and in person at 3406 Innisfil Beach Rd. <br><br>
                    Seminar topics will include:
                </p>
                <ul>
                    <li>Finding your company niche</li>
                    <li>Attracting and maintaining an audience</li>
                    <li>Identifying local and global trends</li>
                    <li>And more!</li>
                </ul>
                <p>
                    Seminars are open to all! The first 300 participants will gain the chance to use Digiseller’s state-of-the-art tools! <br><br>
                    Tools include but are not limited to:
                </p>
                <ul>
                    <li>Access to E-learning tools and weekly community webinar</li>
                    <li>Community chat and group calls with peers and our team consultant</li>
                    <li>1 to 1 in-depth consultation with one of our team's experts</li>
                    <li>Graphic tools for creating ad posts, social media posts, and web design!</li>
                </ul>
                <p>Ready to learn? Click below and be the first to secure your access to these tools!</p>
                <div class="btn">
                    <a onclick="notExist()">PARTICIPATE</a>
                </div>
            </div>
        </section>
        <section class="empty-space-3">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00f7fb" fill-opacity="1" d="M0,256L0,160L160,160L160,224L320,224L320,192L480,192L480,224L640,224L640,64L800,64L800,128L960,128L960,288L1120,288L1120,192L1280,192L1280,32L1440,32L1440,0L1280,0L1280,0L1120,0L1120,0L960,0L960,0L800,0L800,0L640,0L640,0L480,0L480,0L320,0L320,0L160,0L160,0L0,0L0,0Z"></path></svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0e0e0e" fill-opacity="1" d="M0,96L0,160L102.9,160L102.9,256L205.7,256L205.7,160L308.6,160L308.6,96L411.4,96L411.4,128L514.3,128L514.3,128L617.1,128L617.1,192L720,192L720,160L822.9,160L822.9,256L925.7,256L925.7,32L1028.6,32L1028.6,64L1131.4,64L1131.4,320L1234.3,320L1234.3,224L1337.1,224L1337.1,224L1440,224L1440,0L1337.1,0L1337.1,0L1234.3,0L1234.3,0L1131.4,0L1131.4,0L1028.6,0L1028.6,0L925.7,0L925.7,0L822.9,0L822.9,0L720,0L720,0L617.1,0L617.1,0L514.3,0L514.3,0L411.4,0L411.4,0L308.6,0L308.6,0L205.7,0L205.7,0L102.9,0L102.9,0L0,0L0,0Z"></path></svg>    </section>
        <section id="contact-us">
            <div class="image-box">
            </div>
            <div class="contact-header">
                <h1 class="main-header">Contact Us</h1>
                <p><i class="fa-solid fa-phone"></i>(705)-335-4355</p>
                <p><i class="fa-solid fa-map-location-dot"></i>102 Mapleview Dr, Barrie, ON 1T5 2D4</p>
                <p>Operating Hours: 9:00AM-8:00PM Mon-Sat | Closed Sunday</p>
            </div>
            <div class="description">
                <form class="newsletter">
                    <div class="form-header">
                        <h1>Wanna Stay Updated?</h1>
                        <h2>Subscribe to our newsletter!</h2>
                    </div>
                    <label for="email">Email</label>
                    <input id="email-newsletter" type="email" placeholder="Your email...">
                    <input type="button" onclick="notExist()" value="SUBSCRIBE" class="btn-form">
                </form>
            </div>
            <div class="description">
                <form>
                    <div class="form-header"><h1>Have a question?</h1></div>
                    <label for="name">Name</label>
                    <input id="name" type="text" placeholder="Your name...">
                    <label for="email">Email</label>
                    <input id="email" type="email" placeholder="Your email...">
                    <label for="reason">Reason</label>
                    <input id="reason" type="text" placeholder="Reason">
                    <label for="message">Message</label>
                    <p class="text"><textarea id="message" placeholder="Your message..."></textarea></p>
                    <input type="submit" value="SEND" onclick="notExist()" class="btn-form">
                </form>
            </div>
        </section>
        <script src="advertisement.js"></script>
    </main>
    <script src="footer.js"></script>
</body>
</html>