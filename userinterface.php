<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Anfaz</title>
  <link rel="stylesheet" href="usercss\user.css?v=<?php echo time();?>">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <script src=" https://smtpjs.com/v3/smtp.js"></script>

</head>
<body>
 
 
    <header class="header"> 
  <div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="#">NJ AGRICULTURE</a></div>
        <ul class="links">
          <li><a href="#home" >Home</a></li>
          <li><a href="#Contact" >FEEDBACK</a></li>

          <li><a href="#about" >QUERYSUBMISSION</a></li>
          </ul>
         

       
           

           
         

        

          
      </div>
      <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
      <form action="#" class="search-box">
        <input type="text" placeholder="Type Something to Search..." required>
        <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
      </form>
    </nav>
  </div>
</header>
 


<section id="home" >
  <div> 
    
    <div class="headingss">
     <div class="hero-content">
       <h2> Nurturing the Earth</h2>
       <br>
       <ul>
         <li> 
           Agriculture is the timeless art of nurturing the Earth. In the hands of a farmer, life begins anew with every sunrise. It's a profound connection to the land and a dedication to ensuring it thrives and provides for all. The roots of agriculture run deep, connecting us to our past and anchoring us in the future. It's a practice that weaves the wisdom of generations with the promise of tomorrow, creating a tapestry of sustenance and growth.
         
       </ul>
       <a href="logout.php" class="btnss">LOGOUT</a>
       
     
      
   
     </div>
     <div class="hero-image">
       <img class="pic" src="images\BG.jpg">
     </div>
   
    </div>
   </div>
</section>
<section id="about"> 
  <div class="about"> 
 

  <div class="aboutss">
    <div class="card">

       
       
      <p><b> PLEASE READ THE NOTESAND SUBMIT YOUR QUARY </b></p><br>
       
      <table   class="listss">
        
        <tr>
          <td style="text-align: justify;">
            Complete and Accurate Information: Provide complete and accurate information in your query. Double-check details like contact information to ensure the support team can reach you.<br>
          
            Clarity and Conciseness: Be clear and concise when describing your query. Avoid vague or overly complex language. Clearly state the issue or question.<br>
          
            Relevance: Ensure that your query is relevant to the platform or service. Queries that are unrelated may not receive a response.<br>
          
            Respectful and Courteous Language: Use respectful and courteous language when submitting a query. Avoid using offensive or inappropriate language.<br>
          
            No Spam or Abuse: Do not use query submission for spam or abusive purposes. Respect the intended use of the platform.<br>
          
            Attachments: If you need to include attachments, make sure they are relevant and in acceptable formats. Follow any specified guidelines for attachments.<br>
          
            Follow Submission Guidelines: If the platform has specific guidelines for query submission, follow them. This may include character limits, required fields, or specific formats.<br>
          
            One Query at a Time: Submit one query at a time. If you have multiple questions or issues, submit separate queries for each.<br>
          
     
          </td>
          
        </tr>
      </table>
       
      <a href="querysubmission.php" class="btnss">CLICK HERE TO SUBMIT THE QUARY</a>
       
    </div>
     
    </div>
  </div>
</div>

   
</section>


 
<section id="loan"  >
  <div> 
 
 <div class="headingss">
  <div class="hero-content">
    <h2> A Dance of Life</h2>
    <br>
    <ul>
      <li> 
         Agriculture is the poetry of the land, a symphony of seasons, and a dance of life. It's a harmonious blend of cycles, rhythms, and a profound connection to the natural world. In the world of agriculture, every day offers the opportunity to cultivate hope and reap the fruits of hard work. It's a journey that demands dedication and patience, ultimately leading to the sweet rewards of a bountiful harvest. Join us in celebrating the beauty and importance of agriculture, where the art of nurturing life flourishes.</li><br>
       

    </ul>
    
    
   

  </div>
  <div class="hero-image">
    <img class="pic" src="images\img8.avif">
  </div>

 </div>
</div>


</section>



<section id="Contact">
 
    <div class="contentss">
      <h1>FEEDBACK</h1>
      <p>GIVE SOME FEEDBACK ABOUT OUR SERVICE.</p>
    </div>
    <div class="containerss">  
      <div class="contactInfo">
        <div class="boxss">
      
             
      </div>
           <div class="contactForm">
            <form action="" onsubmit="sendemail(); reset(); return false;">
              <h2>send Message</h2>
              <div class="inputBoxss">
                <input type="text" name="" id="fname" required="required">
                <span>Full Name</span>
                </div>
                <div class="inputBoxss">
                <input type="email" id="email" required="required">
                <span>Email</span>
                </div>
                <div class="inputBoxss">
                <textarea required="required" id="help"></textarea>
                <span>GIVE YOUR FEEDBACK</span>
                </div>
                <div class="inputBoxss">
                <input type="submit" name="" value="send" >
                 
                </div>
            </form>
           </div>
    </div>
   
    




</section>
 


 
    <footer class="footer"> 
 
    <div class="footer-row">
      <div class="footer-col">
        <h4>Info</h4>
        <ul class="links">
          <li><a href="#home" class="active">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#loan">Loan</a></li>
          <li><a href="#Contact">Contact Us</a></li>
          <li><a href="#">LogIn</a></li>
          <li><a href="#">Register</a></li>
           
        </ul>
      </div>
      <div class="footer-col">
        <h4>RESOURCES</h4>
        <ul class="links">
          <li><a href="https://www.farmers.gov/#tools">Tools</a></li>
          <li><a href="https://www.usda.gov/topics/disaster-resource-center">Disaster Resource Center</a></li>
          <li><a href="https://portal.agcounts.usda.gov/portal/s/">Farm Surveys and Statistics</a></li>
          <li><a href="https://www.usda.gov/our-agency/initiatives/veterans">Veterans</a></li>
          <li><a href="https://www.usda.gov/">USDA.gov</a></li>
          <li><a href="https://www.whitehouse.gov/">WhiteHouse.gov</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Legal</h4>
        <ul class="links">
          <li><a href="https://www.usda.gov/accessibility-statement">Accessibility Statement</a></li>
          <li><a href="https://www.usda.gov/da">FOIAy</a></li>
          <li><a href="https://www.usda.gov/directives">Information Quality</a></li>
          <li><a href="https://www.usda.gov/non-discrimination-statement">Non-Discrimination Statement</a></li>
          <li><a href="https://www.usda.gov/privacy-policy">Privacy Policy</a></li>
           
        </ul>
      </div>
      <div class="footer-col">
        <h4>Newsletter</h4>
        <p>
          Stay updated on the latest news and stories from farmers.gov and other USDA topics.
        
        </p>
        <form action="#" onsubmit="sendemail(); reset(); return false;">
          <input type="text" id="email" placeholder="Your email" required>
          <button type="submit">SUBSCRIBE</button>
        </form>
        <div class="icons">
          <i class="fa-brands fa-facebook-f"></i>
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-linkedin"></i>
          <i class="fa-brands fa-instagram"></i>
        </div>
      </div>
    </div>
  </footer>
  
  <button id="scrollToTopButton" class="scroll-to-top-button"><i class="fa-regular fa-circle-up"></i></button>

 
<script>function sendemail(){
  Email.send({
    Host : "example",
    Username :"example",
    password :"example ",
    To : 'example@gmail.com ',
    From : document.getElementById('email').value,
    Subject : "New Contact from Enquiry",
    Body : "<br> Email : " +document.getElementById("email").value 
  }).then(
    message => alert("Thank you for your feedback about our service. If we have made any mistakes, we will work to improve them soon")
  );
  
}
</script>



   
</body>
</html>