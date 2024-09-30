<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Contact Form</title>
</head>
<body>
    <div class="wrapper">
        <header>send us a message</header>
        <form action="#">
            <div class="dbl-field">
                <div class="field">
                    <input required name="name" type="text" placeholder="Enter your name">
                    <i class="fas fa-user"></i>
                </div>
                <div class="field">
                    <input required name="email" type="email" placeholder="Enter your email">
                    <i class="fas fa-envelope"></i>
                </div>
            </div>
            <div class="dbl-field">
                <div class="field">
                    <input required name="phone" type="number" placeholder="Enter your phone">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <div class="field">
                    <input required name="website" type="url" placeholder="Enter your website">
                    <i class="fas fa-globe"></i>
                </div>
            </div>
            <div class="message">
                <textarea required name="message" placeholder="Write your message"></textarea>
                <i class="material-icons">message</i>
            </div>
            <div class="button-area">
                <button type="submit">Send Message</button>
                <span>Sending your message...</span>
            </div>
        </form>

    </div>

    <script src="./script.js"></script>
</body>
</html>