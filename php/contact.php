<?php include 'header.php'; ?>
<main>
    <div class="form-container">
        <form action="" method="POST">
            <div class="input-container">
                <input
                    type="text"
                    class="name-input"
                    placeholder="Name"
                    aria-label="Name"
                    required
                >
                <div class="input-underline"></div>
            </div>

            <div class="input-container">
                <input
                    type="email"
                    class="email-input"
                    placeholder="Email"
                    aria-label="Email"
                    required
                    title="Please enter a valid email address"
                >
                <div class="input-underline"></div>
            </div>

            <div class="input-container">
                <textarea
                    class="message-input"
                    placeholder="Message"
                    aria-label="Message"
                ></textarea>
                <div class="input-underline"></div>
            </div>

            <button type="submit" class="submit-button">Submit</button>
        </form>

        <div class="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d38609.83659537355!2d4.746499111250977!3d52.784238235760746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5e52e7aa9ebf1%3A0x6d5ad67ab2b77a18!2sSchagen!5e0!3m2!1snl!2snl!4v1736325311261!5m2!1snl!2snl"
                width="450"
                height="300"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>

    <div class="contact-info">
        <p class="location">Schagen, Noord-Holland</p>
        <p>Morris.Sprokholt@student.vonknh.nl</p>
        <div class="email-underline"></div>
    </div>
</main>
<?php include 'footer.php'; ?>
