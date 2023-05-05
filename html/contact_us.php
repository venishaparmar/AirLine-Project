<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/contact_us.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="wrap_flict">
        <?php include "nav.php" ?>
    </div>

    <div class="wrapper">
        <div class="wrapper___container">
            <div class="container__col">
                <div class="contact__title xs__screen">
                    <h3>Get in Touch</h3>
                    <p>We are here to help you! How can we help?</p>
                </div>
                <form class="contact__form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                    <div class="contact__form__item">
                        <label for="">Name</label>
                        <input type="text" name="name" placeholder="Enter your name " required />
                    </div>
                    <div class="contact__form__item">
                        <label for="">Email</label>
                        <input type="email" name="email" placeholder="Enter your email" required />
                    </div>
                    <div class="contact__form__item">
                        <label for="">Phone Number</label>
                        <input type="text" name="mobileno" placeholder="Enter your phone number" />
                    </div>
                    <div class="contact__form__item">
                        <label for="">Message</label>
                        <textarea name="message" rows="5" placeholder="Enter your message" required></textarea>
                    </div>
                    <button type="submit" class="contact__form__submit" name="submit">Send Message</button>
                </form>
            </div>
            <div class="container__col">
                <div class="contact__title xm__screen">
                    <h3>Get in Touch</h3>
                    <p>We are here to help you! How can we help?</p>
                </div>
                <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_ncztkceu.json" background="transparent" speed="1" loop autoplay></lottie-player>

                <div class="contact__info___list">
                    <div class="contact__info__list__items">
                        <i class='bx bxs-map'></i>
                        <p>Rajkot, India, 360001</p>
                    </div>
                    <div class="contact__info__list__items">
                        <i class='bx bxs-phone-call'></i>
                        <p><a href="tel:+919879735128">+91-9879735128</a></p>
                    </div>
                    <div class="contact__info__list__items">
                        <i class='bx bxs-envelope-open'></i>
                        <p><a href="mailto:bharmallubaina786@gmail.com">bharmallubaina786@gmail.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>