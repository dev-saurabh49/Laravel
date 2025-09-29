@include('pages.header')

  <style>
    .contact-main {
  max-width: 600px;
  margin: 3rem auto;
  padding: 2rem;
  background: #fff;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(13, 71, 161, 0.09);
}

.contact-main form {
  display: flex;
  flex-direction: column;
}

.contact-main label {
  margin-top: 1rem;
  font-weight: bold;
  color: #0d47a1;
}

.contact-main input,
.contact-main textarea {
  margin-top: 0.5rem;
  padding: 0.7rem;
  border: 1px solid #ccc;
  border-radius: 6px;
  font-size: 1rem;
}

.contact-main button {
  margin-top: 1.5rem;
  padding: 0.75rem;
  background: #ffc107;
  border: none;
  border-radius: 20px;
  color: #0d47a1;
  font-weight: bold;
  font-size: 1rem;
  cursor: pointer;
  transition: background 0.3s;
}

.contact-main button:hover {
  background: #ffa000;
}

  </style>



  <main class="contact-main">
    <h1>Contact Us</h1>
    <form action="#" method="post" id="contactForm">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" required placeholder="Your full name" />

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required placeholder="Your email address" />

      <label for="message">Message</label>
      <textarea id="message" name="message" rows="5" required placeholder="Your message"></textarea>

      <button type="submit">Send Message</button>
    </form>
  @include('pages.footer')