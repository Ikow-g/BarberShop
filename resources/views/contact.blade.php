@extends('layouts.app')

@section('content')
      <!-- Contact us -->
      <section class="location">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.71096200142!2d112.64009271459857!3d-7.82038729436478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7d4b6aa5b34bf%3A0x1b4684ca99aa8076!2sWonosari%20Agro%20Tourism!5e0!3m2!1sen!2sid!4v1614712100802!5m2!1sen!2sid"
          width="100%"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
        ></iframe>
      </section>
  
      <section class="contact-us">
        <div class="row">
          <div class="contact-col">
            <div>
              <i class="fas fa-home"></i>
              <span>
                <h5>
                D'Barbershop
                </h5>
                <p>Malang, East Java, Indonesia</p>
              </span>
            </div>
            <div>
              <i class="fas fa-phone"></i>
              <span>
                <h5>0811-3637-198</h5>
                <p>Monday to Saturday, 10AM to 6PM</p>
              </span>
            </div>
            <div>
              <i class="fas fa-envelope"></i>
              <span>
                <h5>dbarbershop@gmail.com</h5>
                <p>Email us your query</p>
              </span>
            </div>
          </div>
  
          <div class="contact-col">
            <form action="form-handler.php" method="post">
              <input type="text" name="name" placeholder="Enter your name" required>
              <input type="email" name="email" placeholder="Enter email address" required>
              <input type="text" name="subject" placeholder="Enter your subject" required>
              <textarea name="message" id="" cols="30" rows="8" placeholder="Message"></textarea>
              <button type="submit" class="hero-btn red-btn">Send Message</button>
            </form>
          </div>
          <!-- <div class="contact-col">
            <form action="form-handler.php" method="post">
              <input type="text" name="name" placeholder="Enter your name" required>
              <input type="email" name="email" placeholder="Enter email address" required>
              <input type="text" name="subject" placeholder="Enter your subject" required>
              <textarea
                name="message"
                id=""
                cols="30"
                placeholder="Message"
                required
                rows="8"
              ></textarea>
              <button type="submit" class="hero-btn red-btn">Send Message</button>
            </form>
          </div> -->
        </div>
      </section>
@endsection