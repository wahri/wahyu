<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="{{ asset('/assets/images/logo.ico') }}" type="image/x-icon">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

    <!--
    - #MAIN
  -->

    <main>

        <!--
      - #SIDEBAR
    -->

        <aside class="sidebar" data-sidebar>

            <div class="sidebar-info">

                <figure class="avatar-box">
                    <img src="./assets/images/wahyu.jpg" alt="Wahyu Nuzul Bahri" width="80">
                </figure>

                <div class="info-content">
                    <h1 class="name" title="Wahyu Nuzul Bahri">Wahyu Nuzul Bahri</h1>

                    <p class="title">Web developer</p>
                </div>

                <button class="info_more-btn" data-sidebar-btn>
                    <span>Show Contacts</span>

                    <ion-icon name="chevron-down"></ion-icon>
                </button>

            </div>

            <div class="sidebar-info_more">

                <div class="separator"></div>

                <ul class="contacts-list">

                    <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="mail-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Email</p>

                            <a href="mailto:wahyubahri1212@gmail.com" class="contact-link">wahyubahri1212@gmail.com</a>
                        </div>

                    </li>

                    {{-- <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="phone-portrait-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Phone</p>

                            <a href="tel:+923126537041" class="contact-link">(+92) 312-6537041</a>
                        </div>

                    </li> --}}

                    {{-- <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Birthday</p>

                            <time datetime="1982-06-23">July 13</time>
                        </div>

                    </li> --}}

                    {{-- <li class="contact-item">

                        <div class="icon-box">
                            <ion-icon name="location-outline"></ion-icon>
                        </div>

                        <div class="contact-info">
                            <p class="contact-title">Location</p>

                            <address>Multan, Punjab, Pakistan</address>
                        </div>

                    </li> --}}

                </ul>

                <div class="separator"></div>

                <ul class="social-list">

                    <li class="social-item">
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li class="social-item">
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li class="social-item">
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                </ul>

            </div>

        </aside>





        <!--
      - #main-content
    -->

        <div class="main-content">

            <!--
        - #NAVBAR
      -->

            <nav class="navbar">

                <ul class="navbar-list">

                    <li class="navbar-item">
                        <button class="navbar-link  active" data-nav-link>About</button>
                    </li>

                    <li class="navbar-item">
                        <button class="navbar-link" data-nav-link>Resume</button>
                    </li>

                    <li class="navbar-item">
                        <button class="navbar-link" data-nav-link>Portfolio</button>
                    </li>

                    <li class="navbar-item">
                        <button class="navbar-link" data-nav-link>Blog</button>
                    </li>

                    <li class="navbar-item">
                        <button class="navbar-link" data-nav-link>Contact</button>
                    </li>

                </ul>

            </nav>





            <!--
        - #ABOUT
      -->

            <article class="about  active" data-page="about">

                <header>
                    <h2 class="h2 article-title">About me</h2>
                </header>

                <section class="about-text">
                    <p>
                        I'm a passionate Programmer with 3+ years of experience developing many web-based system using
                        Laravel and Codeigniter, I also have experience build microservices using Golang to build
                        backend systems, I also have experience in Machine Learning.I am a person who likes to learn new
                        things especially about technology.
                    </p>
                </section>


                <!--
          - service
        -->

                <section class="service">

                    <h3 class="h3 service-title">What Skill I Have</h3>

                    <ul class="service-list">

                        <li class="service-item">

                            <div class="service-icon-box">
                                <img src="./assets/images/icon-dev.svg" alt="Web development icon" width="40" style="filter: invert(58%) sepia(66%) saturate(534%) hue-rotate(122deg) brightness(96%) contrast(81%);">
                            </div>

                            <div class="service-content-box">
                                <h4 class="h4 service-item-title">Backend Developer</h4>

                                <p class="service-item-text">
                                    High-quality development of sites at the professional level.
                                </p>
                            </div>

                        </li>
                        <li class="service-item">

                            <div class="service-icon-box">
                                <img src="./assets/images/icon-design.svg" alt="design icon" width="40" style="filter: invert(58%) sepia(66%) saturate(534%) hue-rotate(122deg) brightness(96%) contrast(81%);">
                            </div>

                            <div class="service-content-box">
                                <h4 class="h4 service-item-title">Frontend Developer</h4>

                                <p class="service-item-text">
                                    The most modern and high-quality design made at a professional level.
                                </p>
                            </div>

                        </li>


                        <li class="service-item">

                            <div class="service-icon-box">
                                <img src="./assets/images/ai.svg" alt="artificial intelligence icon" width="40" style="filter: invert(58%) sepia(66%) saturate(534%) hue-rotate(122deg) brightness(96%) contrast(81%);">
                            </div>

                            <div class="service-content-box">
                                <h4 class="h4 service-item-title">Machine Learning</h4>

                                <p class="service-item-text">
                                    Professional development of applications for iOS and Android.
                                </p>
                            </div>

                        </li>

                        <li class="service-item">

                            <div class="service-icon-box">
                                <img src="./assets/images/network.png" alt="camera icon" width="40">
                            </div>

                            <div class="service-content-box">
                                <h4 class="h4 service-item-title">Network Engineer</h4>

                                <p class="service-item-text">
                                    I make high-quality photos of any category at a professional level.
                                </p>
                            </div>

                        </li>

                    </ul>

                </section>


                <div class="modal-container" data-modal-container>

                    <div class="overlay" data-overlay></div>

                    <section class="testimonials-modal">

                        <button class="modal-close-btn" data-modal-close-btn>
                            <ion-icon name="close-outline"></ion-icon>
                        </button>

                        <div class="modal-img-wrapper">
                            <figure class="modal-avatar-box">
                                <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="80"
                                    data-modal-img>
                            </figure>

                            <img src="./assets/images/icon-quote.svg" alt="quote icon">
                        </div>

                        <div class="modal-content">

                            <h4 class="h3 modal-title" data-modal-title>Daniel lewis</h4>

                            <time datetime="2021-06-14">14 June, 2021</time>

                            <div data-modal-text>
                                <p>
                                    Richard was hired to create a corporate identity. We were very pleased with the work
                                    done. She has a
                                    lot of experience
                                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet,
                                    ullamcous cididt
                                    consectetur adipiscing
                                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                                </p>
                            </div>

                        </div>

                    </section>

                </div>


            </article>


            <article class="resume" data-page="resume">

                <header>
                    <h2 class="h2 article-title">Resume</h2>
                </header>

                <section class="timeline">

                    <div class="title-wrapper">
                        <div class="icon-box">
                            <ion-icon name="book-outline"></ion-icon>
                        </div>

                        <h3 class="h3">Education</h3>
                    </div>

                    <ol class="timeline-list">

                        <li class="timeline-item">

                            <h4 class="h4 timeline-item-title">Naeem Islamic Schools Multan</h4>

                            <span>2019 — 2020</span>

                            <p class="timeline-text">
                                Complete matriculation(matric) in Naeem Islamic Schools with computer science subjects.
                            </p>

                        </li>

                        <li class="timeline-item">

                            <h4 class="h4 timeline-item-title">Emerson University Multan</h4>

                            <span>2021 — 2022</span>

                            <p class="timeline-text">
                                Complete Inter(ICS) in Emerson University Multan with computer science subjects.
                            </p>

                        </li>

                    </ol>

                </section>

                <section class="timeline">

                    <div class="title-wrapper">
                        <div class="icon-box">
                            <ion-icon name="book-outline"></ion-icon>
                        </div>

                        <h3 class="h3">Experience</h3>
                    </div>

                    <ol class="timeline-list">

                        <li class="timeline-item">

                            <h4 class="h4 timeline-item-title">Full Stack Developer</h4>

                            <span>2021 — Present</span>

                            <p class="timeline-text">
                                Full Stack Developer at Sparkosol
                            </p>

                    </ol>

                </section>

                <section class="skill">

                    <h3 class="h3 skills-title">My skills</h3>

                    <ul class="skills-list content-card">

                        <li class="skills-item">

                            <div class="title-wrapper">
                                <h5 class="h5">Web design</h5>
                                <data value="80">80%</data>
                            </div>

                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: 80%;"></div>
                            </div>

                        </li>

                        <li class="skills-item">

                            <div class="title-wrapper">
                                <h5 class="h5">Graphic design</h5>
                                <data value="70">70%</data>
                            </div>

                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: 70%;"></div>
                            </div>

                        </li>

                        <li class="skills-item">

                            <div class="title-wrapper">
                                <h5 class="h5">Branding</h5>
                                <data value="90">90%</data>
                            </div>

                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: 90%;"></div>
                            </div>

                        </li>

                        <li class="skills-item">

                            <div class="title-wrapper">
                                <h5 class="h5">Web Development</h5>
                                <data value="50">50%</data>
                            </div>

                            <div class="skill-progress-bg">
                                <div class="skill-progress-fill" style="width: 100%;"></div>
                            </div>

                        </li>

                    </ul>

                </section>

            </article>

            <article class="portfolio" data-page="portfolio">

                <header>
                    <h2 class="h2 article-title">Portfolio</h2>
                </header>

                <section class="projects">

                    <ul class="filter-list">

                        <li class="filter-item">
                            <button class="active" data-filter-btn>All</button>
                        </li>

                        <li class="filter-item">
                            <button data-filter-btn>Web design</button>
                        </li>

                        <li class="filter-item">
                            <button data-filter-btn>Applications</button>
                        </li>

                        <li class="filter-item">
                            <button data-filter-btn>Web development</button>
                        </li>

                    </ul>

                    <div class="filter-select-box">

                        <button class="filter-select" data-select>

                            <div class="select-value" data-selecct-value>Select category</div>

                            <div class="select-icon">
                                <ion-icon name="chevron-down"></ion-icon>
                            </div>

                        </button>

                        <ul class="select-list">

                            <li class="select-item">
                                <button data-select-item>All</button>
                            </li>

                            <li class="select-item">
                                <button data-select-item>Web design</button>
                            </li>

                            <li class="select-item">
                                <button data-select-item>Applications</button>
                            </li>

                            <li class="select-item">
                                <button data-select-item>Web development</button>
                            </li>

                        </ul>

                    </div>

                    <ul class="project-list">

                        <li class="project-item  active" data-filter-item data-category="web development">
                            <a href="#">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/images/project-1.jpg" alt="finance" loading="lazy">
                                </figure>

                                <h3 class="project-title">Finance</h3>

                                <p class="project-category">Web development</p>

                            </a>
                        </li>

                        <li class="project-item  active" data-filter-item data-category="web development">
                            <a href="#">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/images/project-2.png" alt="orizon" loading="lazy">
                                </figure>

                                <h3 class="project-title">Orizon</h3>

                                <p class="project-category">Web development</p>

                            </a>
                        </li>

                        <li class="project-item  active" data-filter-item data-category="web design">
                            <a href="#">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/images/project-3.jpg" alt="fundo" loading="lazy">
                                </figure>

                                <h3 class="project-title">Fundo</h3>

                                <p class="project-category">Web design</p>

                            </a>
                        </li>

                        <li class="project-item  active" data-filter-item data-category="applications">
                            <a href="#">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/images/project-4.png" alt="brawlhalla" loading="lazy">
                                </figure>

                                <h3 class="project-title">Brawlhalla</h3>

                                <p class="project-category">Applications</p>

                            </a>
                        </li>

                        <li class="project-item  active" data-filter-item data-category="web design">
                            <a href="#">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/images/project-5.png" alt="dsm." loading="lazy">
                                </figure>

                                <h3 class="project-title">DSM.</h3>

                                <p class="project-category">Web design</p>

                            </a>
                        </li>

                        <li class="project-item  active" data-filter-item data-category="web design">
                            <a href="#">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/images/project-6.png" alt="metaspark" loading="lazy">
                                </figure>

                                <h3 class="project-title">MetaSpark</h3>

                                <p class="project-category">Web design</p>

                            </a>
                        </li>

                        <li class="project-item  active" data-filter-item data-category="web development">
                            <a href="#">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/images/project-7.png" alt="summary" loading="lazy">
                                </figure>

                                <h3 class="project-title">Summary</h3>

                                <p class="project-category">Web development</p>

                            </a>
                        </li>

                        <li class="project-item  active" data-filter-item data-category="applications">
                            <a href="#">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/images/project-8.jpg" alt="task manager" loading="lazy">
                                </figure>

                                <h3 class="project-title">Task Manager</h3>

                                <p class="project-category">Applications</p>

                            </a>
                        </li>

                        <li class="project-item  active" data-filter-item data-category="web development">
                            <a href="#">

                                <figure class="project-img">
                                    <div class="project-item-icon-box">
                                        <ion-icon name="eye-outline"></ion-icon>
                                    </div>

                                    <img src="./assets/images/project-9.png" alt="arrival" loading="lazy">
                                </figure>

                                <h3 class="project-title">Arrival</h3>

                                <p class="project-category">Web development</p>

                            </a>
                        </li>

                    </ul>

                </section>

            </article>


            <article class="blog" data-page="blog">

                <header>
                    <h2 class="h2 article-title">Blog</h2>
                </header>

                <section class="blog-posts">

                    <ul class="blog-posts-list">

                        <li class="blog-post-item">
                            <a href="#">

                                <figure class="blog-banner-box">
                                    <img src="./assets/images/blog-1.jpg" alt="Design conferences in 2022"
                                        loading="lazy">
                                </figure>

                                <div class="blog-content">

                                    <div class="blog-meta">
                                        <p class="blog-category">Design</p>

                                        <span class="dot"></span>

                                        <time datetime="2022-02-23">Fab 23, 2022</time>
                                    </div>

                                    <h3 class="h3 blog-item-title">Design conferences in 2022</h3>

                                    <p class="blog-text">
                                        Veritatis et quasi architecto beatae vitae dicta sunt, explicabo.
                                    </p>

                                </div>

                            </a>
                        </li>

                        <li class="blog-post-item">
                            <a href="#">

                                <figure class="blog-banner-box">
                                    <img src="./assets/images/blog-2.jpg" alt="Best fonts every designer"
                                        loading="lazy">
                                </figure>

                                <div class="blog-content">

                                    <div class="blog-meta">
                                        <p class="blog-category">Design</p>

                                        <span class="dot"></span>

                                        <time datetime="2022-02-23">Fab 23, 2022</time>
                                    </div>

                                    <h3 class="h3 blog-item-title">Best fonts every designer</h3>

                                    <p class="blog-text">
                                        Sed ut perspiciatis, nam libero tempore, cum soluta nobis est eligendi.
                                    </p>

                                </div>

                            </a>
                        </li>

                        <li class="blog-post-item">
                            <a href="#">

                                <figure class="blog-banner-box">
                                    <img src="./assets/images/blog-3.jpg" alt="Design digest #80" loading="lazy">
                                </figure>

                                <div class="blog-content">

                                    <div class="blog-meta">
                                        <p class="blog-category">Design</p>

                                        <span class="dot"></span>

                                        <time datetime="2022-02-23">Fab 23, 2022</time>
                                    </div>

                                    <h3 class="h3 blog-item-title">Design digest #80</h3>

                                    <p class="blog-text">
                                        Excepteur sint occaecat cupidatat no proident, quis nostrum exercitationem ullam
                                        corporis suscipit.
                                    </p>

                                </div>

                            </a>
                        </li>

                        <li class="blog-post-item">
                            <a href="#">

                                <figure class="blog-banner-box">
                                    <img src="./assets/images/blog-4.jpg" alt="UI interactions of the week"
                                        loading="lazy">
                                </figure>

                                <div class="blog-content">

                                    <div class="blog-meta">
                                        <p class="blog-category">Design</p>

                                        <span class="dot"></span>

                                        <time datetime="2022-02-23">Fab 23, 2022</time>
                                    </div>

                                    <h3 class="h3 blog-item-title">UI interactions of the week</h3>

                                    <p class="blog-text">
                                        Enim ad minim veniam, consectetur adipiscing elit, quis nostrud exercitation
                                        ullamco laboris nisi.
                                    </p>

                                </div>

                            </a>
                        </li>

                        <li class="blog-post-item">
                            <a href="#">

                                <figure class="blog-banner-box">
                                    <img src="./assets/images/blog-5.jpg" alt="The forgotten art of spacing"
                                        loading="lazy">
                                </figure>

                                <div class="blog-content">

                                    <div class="blog-meta">
                                        <p class="blog-category">Design</p>

                                        <span class="dot"></span>

                                        <time datetime="2022-02-23">Fab 23, 2022</time>
                                    </div>

                                    <h3 class="h3 blog-item-title">The forgotten art of spacing</h3>

                                    <p class="blog-text">
                                        Maxime placeat, sed do eiusmod tempor incididunt ut labore et dolore magna
                                        aliqua.
                                    </p>

                                </div>

                            </a>
                        </li>

                        <li class="blog-post-item">
                            <a href="#">

                                <figure class="blog-banner-box">
                                    <img src="./assets/images/blog-6.jpg" alt="Design digest #79" loading="lazy">
                                </figure>

                                <div class="blog-content">

                                    <div class="blog-meta">
                                        <p class="blog-category">Design</p>

                                        <span class="dot"></span>

                                        <time datetime="2022-02-23">Fab 23, 2022</time>
                                    </div>

                                    <h3 class="h3 blog-item-title">Design digest #79</h3>

                                    <p class="blog-text">
                                        Optio cumque nihil impedit uo minus quod maxime placeat, velit esse cillum.
                                    </p>

                                </div>

                            </a>
                        </li>

                    </ul>

                </section>

            </article>





            <!--
        - #CONTACT
      -->

            <article class="contact" data-page="contact">

                <header>
                    <h2 class="h2 article-title">Contact</h2>
                </header>

                {{-- <section class="mapbox" data-mapbox>
                    <figure>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d16641.434360938845!2d71.50554189603152!3d30.20071777828933!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3cc14515b7796c6d!2sSparko%20Sol!5e0!3m2!1sen!2s!4v1666431437225!5m2!1sen!2s"
                            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                </section> --}}

                <section class="contact-form">

                    <h3 class="h3 form-title">Contact Form</h3>

                    <form name="contactForm" action="https://formsubmit.co/wahyubahri1212@gmail.com" method="POST"
                        class="form" data-form>

                        <div class="input-wrapper">
                            <input type="text" name="name" class="form-input" placeholder="Full name" required
                                data-form-input>

                            <input type="email" name="email" class="form-input" placeholder="Email address"
                                required data-form-input>
                        </div>

                        <textarea name="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>

                        <button class="form-btn" type="submit" disabled data-form-btn>
                            <ion-icon name="paper-plane"></ion-icon>
                            <span>Send Message</span>
                        </button>

                    </form>

                </section>

            </article>

        </div>

    </main>






    <!--
    - custom js link
  -->
    <script src="{{ asset('/assets/js/script.js') }}"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
