<?php
// Include the header and footer files
include "./layout/header.php";
?>
<h1 name="name" style="display:none;">ContactUs</h1>
<!-- Main content -->
<main>
    <div class="product">
        <div class="form contact">
        <h1 class="h1">Contact Us</h1>
            <!-- Contact information -->
        <div>
            <div class="contact-info">
                <h2>Contact Information</h2>
                <pre><p>Address: BikeDekho.con ,
         Gj-396105,India</p></pre>
                <p>Phone: 91040 45985</p>
                <p>Email: <a href="mailto:arfata701@gmail.com">BikeDekho@Gmail.com</a></p>
            </div>
        </div>
        <div>
            <div class="contact-container">
                
                <p>Get in touch with us</p>
                <!-- Contact form -->
                <div class="contact-form">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>

                        <label for="message">Message:</label>
                        <textarea id="message" name="message" required></textarea>

                        <button type="submit">Send</button>
                    </form>
                </div>

            </div>
        </div>
        </div>
    </div>
</main>

<?php
// Include the footer file
include "./layout/footer.php";
?>