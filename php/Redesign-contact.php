<?php include 'Redesign-header.php'; ?>

<link rel="stylesheet" href="../css/Kontakt.css">

<div class="Contact-input">
    <form action="" method="POST">
        <label for="name"></label>
        <input class="name-input" id="name" name="name" required placeholder="Full name:">
        <div class="input-underline"></div><br><br>

        <label for="email"></label>
        <input class="email-input" type="email" id="email" name="email" required placeholder="Email address:">
        <div class="input-underline"></div><br><br>

        <label for="message"></label>
        <textarea class="message-input" id="message" name="message" required placeholder="Message:"></textarea>
        <div class="input-underline"></div><br><br>

        <button type="submit" class="submit-button">Contact me</button>
    </form>

    <p class="Contact-input-title">Contact</p>
    <p class="Contact-me-email">Morris.sprokholt12@gmail.com</p>
    <p class="Based-in-input-title">Based in</p>
    <p class="Based-information">Schagen,<br>Noord-Holland</p>

    <div class="social-icons">
        <a href="#" class="fa fa-github"></a>
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-linkedin"></a>
    </div>

    <img src="../images/Contact-mini-ferrari.png" alt="Red-Ferrari">

</div>

<h1 class="Contact-title">Contact</h1>

<img src="../images/Side-ferrari.PNG" alt="Side-ferrari" class="side-image">

<?php include 'Redesign.footer.php'; ?>
