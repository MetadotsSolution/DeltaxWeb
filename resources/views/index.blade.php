<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DelTax</title>
    <link rel="stylesheet" href={{ asset('css/styles.css') }}> 
    <link rel="stylesheet" href={{ asset('css/queries.css') }}>
    <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>
    <script defer src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"></script>
    <script defer src="{{ asset('js/script.js') }}"></script>
</head>
<body>
    <header class="header">
        <img class="logo" src="{{ asset('images/logo.svg') }}" alt="DelTax logo" />
        <nav class="main-nav">
          <ul class="main-nav-list">
            <li><a class="main-nav-link" href="#">Features</a></li>
            <li><a class="main-nav-link" href="#">Partners</a></li>
            <li><a class="main-nav-link" href="#">Contact Us</a></li>
            {{-- <li>
              <button class="" style="padding: 1.2rem 2.4rem;">
                <select name="" id="" class="">
                <option value=""><a href="#" class="main-nav-link">Register</a></option>
                <option value=""><a href="#" class="main-nav-link">Register</a></option>
                <option value=""><a href="#" class="main-nav-link">Register</a></option>
              </select>
              </button>
              
            </li> --}}
            <li><a class="main-nav-link nav-cta" href="#Register">Sign up</a></li>
            <li><a class="main-nav-link nav-cta" href="#Register">Sign In</a></li>
          </ul>
        </nav>
        <button class="btn-mobile-nav">
          <ion-icon class="icon-mobile-nav" name="menu-outline"></ion-icon>
          <ion-icon class="icon-mobile-nav" name="close-outline"></ion-icon>
        </button>
      </header>
      <main>
        <section class="section-hero">
          <div class="hero">
            <div class="hero-text-box">
              <h1 class="heading-primary">
                Pay your Taxes with the DELTAX App
              </h1>
              <p class="hero-description">
                The idea of DELTAX is to give the people of Delta State a platform
                where they can easily pay their taxes with a fast and secured App.
                DELTAX is a one of a kind App that anyone can easily navigate through
                to perform their civic responsibility.
              </p>
              <img src="{{ asset('images/android.png') }}" alt="" class="margin-right-sm">
              <img src="{{ asset('images/apple.png') }}" alt="">

              <div class="delivered-meals">
                <div class="delivered-imgs">
                  <img src="{{ asset('images/customer-1.jpg') }}" alt="Customer photo" />
                  <img src="{{ asset('images/customer-2.jpg') }}" alt="Customer photo" />
                  <img src="{{ asset('images/customer-3.jpg') }}" alt="Customer photo" />
                  <img src="{{ asset('images/customer-4.jpg') }}" alt="Customer photo" />
                  <img src="{{ asset('images/customer-5.jpg') }}" alt="Customer photo" />
                  <img src="{{ asset('images/customer-6.jpg') }}" alt="Customer photo" />
                </div>
                <p class="delivered-text">
                  <span> 250+</span> tax payment delivered!
                </p>
              </div>
              
            </div>
            <div class="hero-img-box">
              <img
                src="{{ asset('images/Vectary.png') }}"
                class="hero-img"
                alt="Illustration of a man and tax details"
              />
            </div>
          </div>
        </section>

        
            
  
         

        <section class="section-how" id="how">
          <div class="container">
            <span class="subheading">How it works</span>
            <h2 class="heading-secondary">
              The easiest way to pay tax
            </h2>
          </div>
  
          <div class="container grid grid--2-cols grid--center-v">
            <!-- STEP 01 -->
            <div class="step-text-box">
              <p class="step-number">01</p>
              <h3 class="heading-tertiary">
                Fast and Easy
              </h3>
              <p class="step-description">
                Deltax provides a faster and easy method
                of tax and lavy payment for Delta 
                state people.In economic terms, taxation transfers
               wealth from households or businesses to the government.
              </p>
            </div>
  
            <div class="step-img-box">
              <img
                src="{{ asset('images/screen.png') }}"
                class="step-img"
                alt="iPhone app
              preferences selection screen"
              />
            </div>
  
            <!-- STEP 02 -->
            <div class="step-img-box">
              <img
                src="{{ asset('images/3.png') }}"
                class="step-img"
                alt="iPhone app
                screen"
              />
            </div>
            <div class="step-text-box">
              <p class="step-number">02</p>
              <h3 class="heading-tertiary">Secured</h3>
              <p class="step-description">
                Taxes and levies paid through the Deltax platform 
                is safe, secured and free of irregularities.Most countries have a tax system in place, 
                in order to pay for public, common societal, or agreed
                 national needs and for the functions of government
              </p>
            </div>
  
            <!-- STEP 03 -->
            <div class="step-text-box">
              <p class="step-number">03</p>
              <h3 class="heading-tertiary">Accessible</h3>
              <p class="step-description">
                Deltax provides access to tax and levy records, there 
                by making the process transparent.Countries or subunits often also impose wealth taxes,
                 inheritance taxes, estate taxes,
                 gift taxes, property taxes, sales taxes, use taxes, payroll taxes, duties and/or tariffs.
              </p>
            </div>
            <div class="step-img-box">
              <img
                src="{{ asset('images/2.png') }}"
                class="step-img"
                alt="iPhone app
              "
              />
            </div>
          </div>
        </section>


        <!-- Testimonial Section -->

        {{-- <section class="section-testimonials" id="testimonials">
          <div class="testimonials-container">
            <span class="subheading">Testimonials</span>
            <h2 class="heading-secondary">Once you try it, you can't go back</h2>
  
            <div class="testimonials">
              <figure class="testimonial">
                <img
                  class="testimonial-img"
                  alt="Photo of customer Dave Bryson"
                  src="{{ asset('images/dave.jpg') }}"
                />
                <blockquote class="testimonial-text">
                  Inexpensive, healthy and great-tasting meals, without even
                  having to order manually! It feels truly magical.
                </blockquote>
                <p class="testimonial-name">&mdash; Dave Bryson</p>
              </figure>
  
              <figure class="testimonial">
                <img
                  class="testimonial-img"
                  alt="Photo of customer Ben Hadley"
                  src="{{ asset('images/dave.jpg') }}"
                />
                <blockquote class="testimonial-text">
                  The AI algorithm is crazy good, it chooses the right meals for
                  me every time. It's amazing not to worry about food anymore!
                </blockquote>
                <p class="testimonial-name">&mdash; Ben Hadley</p>
              </figure>
  
              <figure class="testimonial">
                <img
                  class="testimonial-img"
                  alt="Photo of customer Steve Miller"
                  src="{{ asset('images/steve.jpg') }}"
                />
                <blockquote class="testimonial-text">
                  Omnifood is a life saver! I just started a company, so there's
                  no time for cooking. I couldn't live without my daily meals now!
                </blockquote>
                <p class="testimonial-name">&mdash; Steve Miller</p>
              </figure>
  
              <figure class="testimonial">
                <img
                  class="testimonial-img"
                  alt="Photo of customer Hannah Smith"
                  src="{{ asset('images/hannah.jpg') }}"
                />
                <blockquote class="testimonial-text">
                  I got Omnifood for the whole family, and it frees up so much
                  time! Plus, everything is organic and vegan and without plastic.
                </blockquote>
                <p class="testimonial-name">&mdash; Hannah Smith</p>
              </figure>
            </div>
          </div>
  
          <div class="gallery">
            <figure class="gallery-item">
              <img
                src="{{ asset('images/sign-up.png') }}"
                alt="Photo of beautifully
              arranged food"
              />
              <!-- <figcaption>Caption</figcaption> -->
            </figure>
            <figure class="gallery-item">
              <img
                src="{{ asset('images/login.png') }}"
                alt="Photo of beautifully
              arranged food"
              />
            </figure>
            <figure class="gallery-item">
              <img
                src="{{ asset('images/splash.png') }}"
                alt="Photo of beautifully
              arranged food"
              />
            </figure>
            
          </div>
        </section> --}}

        <!--====================FAQS=============================-->
{{-- <section class="faqs">
<h2 class="sub-header">Frequently Asked Questions</h2>
<div class="faq">

  <div class="accordion">
    <div class="item">
      <p class="number">01</p>
      <p class="text">Who pays personal income tax?</p>
      <svg
      xmlns="http://www.w3.org/2000/svg"
      class="icon"
    fill="none"
    viewBox="0 0 24 24"
    stroke="currentColor"
    >
    <path
    stroke-linecap="round"
    stroke-linejoin="round"
      stroke-width="2"
      d="M19 9l-7 7-7-7"
      />
    </svg>
    <div class="hidden-box">
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
        Accusantium dolor at sequi obcaecati cupiditate. Voluptates
        repellendus cupiditate aperiam! Incidunt amet quo neque.
      </p>
   
  </div>
</div>
    <div class="item">
      <p class="number">02</p>
      <p class="text">How is the registration process like?</p>
      <svg
      xmlns="http://www.w3.org/2000/svg"
      class="icon"
      fill="none"
      viewBox="0 0 24 24"
      stroke="currentColor"
      >
      <path
      stroke-linecap="round"
      stroke-linejoin="round"
      stroke-width="2"
      d="M19 9l-7 7-7-7"
      />
    </svg>
    <div class="hidden-box">
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
        Accusantium dolor at sequi obcaecati cupiditate. Voluptates
        repellendus cupiditate aperiam! Incidunt amet quo neque.
      </p>
   
  </div>
</div>
    <div class="item">
      <p class="number">03</p>
      <p class="text">What are the details needed?</p>
      <svg
      xmlns="http://www.w3.org/2000/svg"
      class="icon"
      fill="none"
      viewBox="0 0 24 24"
      stroke="currentColor"
      >
      <path
      stroke-linecap="round"
      stroke-linejoin="round"
      stroke-width="2"
      d="M19 9l-7 7-7-7"
      />
    </svg>
    <div class="hidden-box">
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
        Accusantium dolor at sequi obcaecati cupiditate. Voluptates
        repellendus cupiditate aperiam! Incidunt amet quo neque.
      </p>
   
  </div>
</div>
</section> --}}
<!--===================End of FAQS===============-->

        <!-- Call To Action -->
        <section class="section-cta" id="cta">
          <div class="container">
            <div class="cta">
              <div class="cta-text-box">
                <h1 class="heading-primary" id="test">
                  Be part of DelTax
                </h1>
  
                <form class="cta-form" name="sign-up" netlify>
                 

                  <div>
                   <img src="{{ asset('images/apple.png') }}" alt="">
                  </div>
  
                  <div>
                   <img src="{{ asset('images/android.png') }}" alt="">
                  </div>
  
  
                  <!-- <input type="checkbox" />
                  <input type="number" /> -->
                </form>
                
              </div>

              <div
                class="cta-img-box"
                role="img"
                aria-label="Woman "
              ><img src="{{ asset('images/Vectary.png') }}" alt=""></div>
            </div>
          </div>
        </section>
      </main>

      <footer class="footer">
        <div class="container grid grid--footer">
          <div class="logo-col">
            <a href="#" class="footer-logo">
              <img class="logo" alt="Deltax logo" src="{{ asset('images/logo.svg') }}" />
            </a>
  
            <ul class="social-links">
              <li>
                <a class="footer-link" href="#"
                  ><ion-icon class="social-icon" name="logo-instagram"></ion-icon
                ></a>
              </li>
              <li>
                <a class="footer-link" href="#"
                  ><ion-icon class="social-icon" name="logo-facebook"></ion-icon
                ></a>
              </li>
              <li>
                <a class="footer-link" href="#"
                  ><ion-icon class="social-icon" name="logo-twitter"></ion-icon
                ></a>
              </li>
            </ul>
  
            <p class="copyright">
              Copyright &copy; <span class="year">2023</span> by Metadots, Inc.
              All rights reserved.
            </p>
          </div>
  
          <div class="address-col">
            <p class="footer-heading">Contact us</p>
            <address class="contacts">
              <p class="address">
                623 Harrison St., 2nd Floor, San Francisco, CA 94107
              </p>
              <p>
                <a class="footer-link" href="tel:415-201-6370">415-201-6370</a
                ><br />
                <a class="footer-link" href="mailto:hello@omnifood.com"
                  >metadots@ictyepprojects.com</a
                >
              </p>
            </address>
          </div>
  
          <nav class="nav-col">
            <p class="footer-heading">Account</p>
            <ul class="footer-nav">
              <li><a class="footer-link"  href="{{ route('registerIndividual') }}" target="_blank" id="Register">Register (Individual)</a></li>
              <li><a class="footer-link"  href="{{ route('registerCorperation') }}" target="_blank">Register (Corperation)</a></li>
              <li><a class="footer-link" href="{{ route('login') }}">Login (Individual)</a></li>
              <li><a class="footer-link" href="{{ route('loginCorperation') }}">Login (Corperation)</a></li>
              {{-- <li><a class="footer-link" href="#">iOS app</a></li>
              <li><a class="footer-link" href="#">Android app</a></li>
            </ul> --}}
          </nav>
  
          <nav class="nav-col">
            <p class="footer-heading">Company</p>
            <ul class="footer-nav">
              <li><a class="footer-link" href="#">About Deltax</a></li>
              <li><a class="footer-link" href="#">For Business</a></li>
              <li><a class="footer-link" href="#">Personal</a></li>
            </ul>
          </nav>
  
          <nav class="nav-col">
            <p class="footer-heading">Features</p>
            <ul class="footer-nav">
              <li><a class="footer-link" href="#">Pay Tax</a></li>
              <li><a class="footer-link" href="#">Tax Collector</a></li>
              <li><a class="footer-link" href="#">Self Service</a></li>
            </ul>
          </nav>
        </div>
      </footer>
</body>
</html>