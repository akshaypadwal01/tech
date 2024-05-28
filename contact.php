<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link  rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" class="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

</head> 

<body>

    <!-------------------------- Header Area -------------------------->
    <div class="row header">
<div class="col-lg-6">
<span class="logo">Tech Quizer</span>
<a href="main.php" style="border-radius:0%" class="pull-right btn sub5 title3"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home</a>&nbsp;
</div></div>
    <!-------------------------- Contact Me -------------------------->

    <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <!-- <i class="fas fa-map-marker-alt"></i> -->
          <!-- <div class="topic">Address</div> -->
          <div class="text-one"> </div>
          <div class="text-two"> </div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+919975274620 </div>
          <div class="text-two"> </div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one"> akshayp8801@gmail.com</div>
          <div class="text-two"> </div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Contact us</div>
       
    <form action="https://api.web3forms.com/submit" method="POST">

      <!-- Replace with your Access Key -->
      <input type="hidden" name="access_key" value="d057dbf8-f367-4230-ac1e-d5ca38fa8e0c">
  
      <!-- Form Inputs. Each input must have a name="" attribute -->
      <div class="input-box">
      <input type="text" name="name" placeholder="Your name" required></div>
      <div class="input-box">
      <input type="email" name="email" placeholder="Your email" required>
      </div>
      <div class="input-box message-box">
      <textarea name="message"placeholder="Your message"  required></textarea>
      </div>
  
      <!-- hCaptcha Spam Protection -->
      <div class="h-captcha" data-captcha="true"></div>
      <div class="button">
      <button type="submit">Send now</button></div>

  </form>

  <a href="https://wa.me/7767993959?text=Hello%20there!" target="_blank">
       <button type="submit" class="whatsapp-btn">Chat with WhatsApp</button>
  
  <!-- Required for hCaptcha -->
  <script src="https://web3forms.com/client/script.js" async defer></script>
  
    </div>
  </div>
</body>
</html>