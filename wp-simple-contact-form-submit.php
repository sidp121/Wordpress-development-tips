<?php get_header(); ?>
<style>

.container {
  max-width: 400px;
  width: 100%;
  margin: 0 auto;
  position: relative;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  background: #F9F9F9;
  padding: 25px;
  margin: 150px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #4CAF50;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#contact button[type="submit"]:hover {
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.copyright {
  text-align: center;
}

#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}
</style>
<?php 

$fullname = '';
$email = '';
$phone = '';
$url = '';
$message = '';

if (!empty($_POST['fullname'])) {
    $fullname = $_POST['fullname'];
}
if (!empty($_POST['email'])) {
    $email = $_POST['email'];
}
if (!empty($_POST['phone'])) {
    $phone = $_POST['phone'];
}
if (!empty($_POST['url'])) {
    $url = $_POST['url'];
}
if (!empty($_POST['message'])) {
    $message = $_POST['message'];
}

// Output the form data
echo "<h1>Full Name: " . $fullname . "</h1>";
echo "<h1>Email: " . $email . "</h1>";
echo "<h1>Phone: " . $phone . "</h1>";
echo "<h1>URL: " . $url . "</h1>";
echo "<h1>Message: " . $message . "</h1>";


       $body = 'Full Name: ' . $fullname . '<br>';
       $body .= 'Email: ' . $email . '<br>';
       $body .= 'Phone: ' . $phone . '<br>';
       $body .= 'URL: ' . $url . '<br>';
       $body .= 'Message: ' . $message . '<br>';   
                      
        $subject  = 'Test Form!';
        $headers  = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: trustfluence-reviews.ch <sandro@trustfluence.ch>" . "\r\n";
        $headers .= "Reply-To: sandro@trustfluence.ch\r\n";
        $send = wp_mail($email, $subject, $body, $headers );
        if($send == true ){
            echo 'successfull send email';
        }

?>

<div class="container">  
  <form id="contact" action="" method="post">
    <h3>Contact Form</h3>
    <fieldset>
      <input placeholder="Your name" type="text" name="fullname">
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" name="email">
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" name="phone">
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site (optional)" type="url" name="url">
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your message here...." name="message"></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit">Submit</button>
    </fieldset>
    
  </form>
</div>




<?php get_footer(); ?>
