<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="manifest" href="{{ asset('storage/images/site.webmanifest') }}" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <title>Barangay Management System</title>
</head>
<body>
  <header>
    <img src="{{asset('storage/images/capture.png')}}" alt="barangay-logo">
    <ul class="contents">
      <a href="#about-section">ABOUT</a>
      <a href="#contact-section">CONTACTS</a>
      <a href="#FAQ">FAQ</a>
      <a id = "login-show">LOGIN</a>
      <div id="login-modal">
        <div class="modal">
          <div class="top-form">
            <div class="close-modal">
              &#10006;
            </div>
          </div>
          <div class="login-form">
            <div class="userlogin-logo">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#281eb8" d="M399 384.2C376.9 345.8 335.4 320 288 320l-64 0c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z"/></svg>
          </div>
            <h3>Please Login to access your account.</h3>
            <form action="">
              <input type="text" class="form-control" placeholder="Jose_Delacruz">
              <input type="password" class="form-control" placeholder="Password">
              <button type="button" class="submit-btn">Login</button>
              <div>
                <a href="">Forgot password?</a>
              </div>
            </form>
          </div>
        </div>
      </div>

      <script>
        $(function(){
          $('#login-show').click(function(){
            $('#login-modal').fadeIn().css("display", "flex");
          });
          $('.close-modal').click(function(){
            $('#login-modal').fadeOut();
          });
        });
      </script>


    </ul>
  </header>
  




  <section class="intro" id="intro">
    <img src="{{asset('storage/images/people.jpg')}}" alt="">
    <div>
      <h1> BARANGAY STA. ROSA </h1>
      <h4>Barangay Management System Makes Things Easier,<br> Connects Everyone, and Helps Your Community Succeed.</h4>
      <a class= "about" href="#about-section"><h3>ABOUT US<h3></a>
    </div>
  </section>  



  <section class="about-section" id="about-section">
      <div class="about-image">
          <img src="{{asset('storage/images/about.jpg')}}" alt="">
      </div>
      <div class="about-barangay">
          <p class="paragraph" style="color: rgb(3, 80, 173);" >Making Barangays Better
            <h1 style="color: rgb(3, 80, 173);">
              Introducing the Barangay Management System
            </h1>
            <p>
              The Barangay Management System (BMS) is a big plan to make barangays in the<br>
              Philippines work better. It helps barangay leaders manage things like records and <br>
              services in a faster and fairer way. The goal is to make life better for people living in <br>
              barangays by making sure things run smoothly and everyone gets what they need. <br>
              <br>
              With the BMS, barangays can do things faster and make sure everyone gets what <br>
              they need on time. Our hope is to make barangays happy, busy, and good places for <br>
              everyone to live in.
            </p>
          </p>
      </div>
  </section>


  <section class="components" id="compoenents">
      <div class="components-bms">
          <p>
            The Barangay Management System includes various essential elements and initiatives.
          </p>
          <div class="svg">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#74C0FC" d="M160 80c0-26.5 21.5-48 48-48l32 0c26.5 0 48 21.5 48 48l0 352c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48l0-352zM0 272c0-26.5 21.5-48 48-48l32 0c26.5 0 48 21.5 48 48l0 160c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48L0 272zM368 96l32 0c26.5 0 48 21.5 48 48l0 288c0 26.5-21.5 48-48 48l-32 0c-26.5 0-48-21.5-48-48l0-288c0-26.5 21.5-48 48-48z"/></svg>
            </div>
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#74C0FC" d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192l42.7 0c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0L21.3 320C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7l42.7 0C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3l-213.3 0zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352l117.3 0C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7l-330.7 0c-14.7 0-26.7-11.9-26.7-26.7z"/></svg>
            </div>
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#74C0FC" d="M427.2 203c0-112.1-90.9-203-203-203C112.1-.2 21.2 90.6 21 202.6A202.9 202.9 0 0 0 161.5 396v101.7a14.3 14.3 0 0 0 14.3 14.3h96.4a14.3 14.3 0 0 0 14.3-14.3V396.1A203.2 203.2 0 0 0 427.2 203zm-271.6 0c0-90.8 137.3-90.8 137.3 0-.1 89.9-137.3 91-137.3 0z"/></svg>
              <div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#74C0FC" d="M544 248l0 3.3 69.7-69.7c21.9-21.9 21.9-57.3 0-79.2L535.6 24.4c-21.9-21.9-57.3-21.9-79.2 0L416.3 64.5c-2.7-.3-5.5-.5-8.3-.5L296 64c-37.1 0-67.6 28-71.6 64l-.4 0 0 120c0 22.1 17.9 40 40 40s40-17.9 40-40l0-72c0 0 0-.1 0-.1l0-15.9 16 0 136 0c0 0 0 0 .1 0l7.9 0c44.2 0 80 35.8 80 80l0 8zM336 192l0 56c0 39.8-32.2 72-72 72s-72-32.2-72-72l0-118.6c-35.9 6.2-65.8 32.3-76 68.2L99.5 255.2 26.3 328.4c-21.9 21.9-21.9 57.3 0 79.2l78.1 78.1c21.9 21.9 57.3 21.9 79.2 0l37.7-37.7c.9 0 1.8 .1 2.7 .1l160 0c26.5 0 48-21.5 48-48c0-5.6-1-11-2.7-16l2.7 0c26.5 0 48-21.5 48-48c0-12.8-5-24.4-13.2-33c25.7-5 45.1-27.6 45.2-54.8l0-.4c-.1-30.8-25.1-55.8-56-55.8c0 0 0 0 0 0l-120 0z"/></svg>
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#74C0FC" d="M160 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l50.7 0L9.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L256 109.3l0 50.7c0 17.7 14.3 32 32 32s32-14.3 32-32l0-128c0-17.7-14.3-32-32-32L160 0zM576 80a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM448 208a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM400 384a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm48 80a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zm128 0a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM272 384a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm48 80a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM144 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zM576 336a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zm-48-80a48 48 0 1 0 0-96 48 48 0 1 0 0 96z"/></svg>
                </div>
              </div>
            </div>
          </div>

          <div class="keys">        
              <div class="one">
                Digitalization
              </div>
              <div class="two">
                Community<br>Participation
              </div>
              <div class="three">
                Resource<br>Management
              </div>
              <div class="four">
                Capacity<br>building
              </div>
              <div class="five">
                Monotoring and<br>evaluation
              </div>   
          </div>
      </div>
  </section>



  <section class="FAQ" id="FAQ">
      <div class="faq-container">
        <p>
          <h1>FAQs</h1>
          <p>
            Have questions? Here you'll find the anwers most valued by<br>
            our partners long with the acces to step-by-step explanations <br>
            and support
          </p>
        </p>
        <img src="{{asset('storage/images/faq.jpg')}}" alt="">
      </div>
      <div class="div-logic"></div>
      <div class="faq-container2">
        <!-- FAQ 1 -->
        <div class="faq-item">
          <div class="faq-question" onclick="toggleAnswer('answer1')">
            <strong>1. How do I know if my information is safely stored in the Barangay Management System?</strong>
          </div>
          <div class="faq-answer" id="answer1">
            Your personal information in the Barangay Management System is stored securely with robust encryption protocols to protect it from unauthorized access. The system complies with data privacy laws, including the <strong>Data Privacy Act of 2012</strong>, ensuring that your data is only accessible by authorized personnel. Additionally, all user transactions and sensitive data are protected by firewalls and other security measures. Regular audits are conducted to ensure the integrity and safety of the information stored in the system.
          </div>
        </div>
    

        <div class="faq-item">
          <div class="faq-question" onclick="toggleAnswer('answer2')">
            <strong>2. What should I do if I encounter an error while using the Barangay Management System?</strong>
          </div>
          <div class="faq-answer" id="answer2">
            If you encounter an error while using the Barangay Management System, first try the following troubleshooting steps:
            <ul>
              <li><strong>Refresh your browser</strong> or <strong>clear your cache</strong> to resolve minor glitches.</li>
              <li><strong>Check your internet connection</strong> to ensure you have a stable connection.</li>
              <li>If the issue persists, please contact our technical support team by clicking the "Support" or "Contact Us" button on the website or mobile app. You can also call our office at <strong>[Barangay office number]</strong> or email us at <strong>[support email address]</strong> for assistance.</li>
            </ul>
          </div>
        </div>
    

        <div class="faq-item">
          <div class="faq-question" onclick="toggleAnswer('answer3')">
            <strong>3. Can I access the Barangay Management System from home or do I need to visit the barangay office?</strong>
          </div>
          <div class="faq-answer" id="answer3">
            Yes, the Barangay Management System is <strong>accessible online</strong>. You can access it from your home or any location with an internet connection. Simply visit our website or use the mobile app to log in and access available services such as requesting certificates, updating records, and more. However, for certain services that require physical documentation (e.g., notarized forms), you may still need to visit the barangay office in person.
          </div>
        </div>
      </div>
      <div class="div-logic2"></div>
  </section>



  <section class="banner" id="banner">
        <img src="{{asset('storage/images/banner.png')}}" alt="">
        <div>
          <h1>
            STA. Rosa Barangay Management System
          </h1>
          <p>
            It’s all about making things easier, clearer, and better for everyone in your community.
          </p>
        </div>
      
  </section>


  <footer id="contact-section">
    <div class="icons">
      <div class="anada-logic">
      <a class="fb" href="">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#74C0FC" d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/></svg>
      </a>
      <a class="insta" href="">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#ce09c7" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
      </a>
      <a class="yt" href="">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#fa0000" d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/></svg>
      </a>
    </div>
       </div>
    <div class="links">
      <ul>
        <a class="link-1" href="">Home</a>
        <a class="link-2" href="">About</a>
        <a class="link-3" href="">Feature</a>
        <a class="link-4" href="">Benefits</a>
      </ul>
      </div>

      <p class="copyright">&copy Copyright 2025. Barangay Management System | All rights reserved.</p>


  </footer>
</body>

<script>
  function toggleAnswer(id) {
    const answer = document.getElementById(id);
    const allAnswers = document.querySelectorAll('.faq-answer');
    allAnswers.forEach((ans) => {
      if (ans !== answer) {
        ans.classList.remove('show');
      }
    });
    answer.classList.toggle('show');
  }

  $(function(){
      $('#login-show').click(function(){
        $('#login-modal').fadeIn().css("display","flex");
      });
    });
        
    $(function(){
      $('.close-modal').click(function(){
        $('#login-modal').fadeOut();
      });
    }); 

  
</script>





</html>