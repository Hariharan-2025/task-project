<!DOCTYPE html>
<html>
<head>
  <title>My Single Page Site</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <section id="banner">
    <h1>Welcome to My Website</h1>
    <p>Simple one-page PHP site for the task.</p>
  </section>

  <section id="about">
    <h2>About Us</h2>
    <p>This is a small demo page built using PHP.</p>
  </section>

  <section id="contact">
    <h2>Contact Form</h2>

    <form action="contact.php" method="POST">
      <input name="name" placeholder="Your Name" required>
      <input name="email" placeholder="Email" required type="email">
      <textarea name="message" placeholder="Message" required></textarea>
      <button type="submit">Send</button>
    </form>

  </section>

  <footer>
    <p>© 2025 My Website</p>
  </footer>

</body>
</html>





-----index.php--------