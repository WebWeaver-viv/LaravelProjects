<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/contact.css">
</head>

<body>
    @include('common.header')
    <div class="contact-input-box">
        <div class="contact-heading-box">
            <span class="contact-heading">Contact Us</span>
        </div>
        <div class="contact-form-box">
            <form action="/submit-contact" method="POST" class="contact-form-main">
              @csrf
                <div class="contact-input">
                    <div class="contact-name-box">
                        <span class="full-name-s1">Full Name:</span>
                    </div>
                    <div class="input-s1-name">
                        <div class="contact-name-box">
                            <input type="text" class="contact-input-box-s1" name="first_name" id="first_name">
                            <span class="contact-name-s1">First Name</span>
                        </div>
                        <div class="contact-name-box">

                            <input type="text" class="contact-input-box-s1" name="last_name" id="last_name">
                            <span class="contact-name-s1">Last Name</span>
                        </div>
                    </div>
                    <div class="email-box">
                        <div class="contact-name-box">
                            <span class="full-name-s1">E-mail:</span>
                        </div>
                        <div class="contact-name-box">
                            <input type="text" class="contact-input-box-s1 email-input" name="email" id="email">
                            <span class="contact-name-s1">example@example.com</span>
                        </div>

        
                    </div>
                    <div class="message-box">
                        <div class="contact-name-box">
                            <span class="full-name-s1">Message:</span>
                        </div>
                        <div class="contact-name-box">
                            <input type="text" class="contact-message-box-s1" name="message" id="message">
                        </div>


                    </div>
                    <div class="contact-submit-btn">
                      <button class="contact-submit-btn-s1" type="submit" >Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

