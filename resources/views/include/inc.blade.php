@section('inc')
<!-- Header -->
<header class="header">
    <div class="container">
        <div class="header__inner">

            <div class="user">
                <div class="user__avatar">
                    <img src="{{ URL('images/123.png')}}" alt="">
                </div>
                <div class="user__content">
                    <div class="user__name">
                    Taras<br>Dei
                    </div>
                    <div class="user__prof">Laravel &amp; backend developer</div>
                </div>
            </div>

            <nav class="nav" id="nav">
                <a class="nav__link" href="#">work</a>
                <a class="nav__link" href="#">about me</a>
                <a class="nav__link" href="#">blog</a>
                <a class="nav__link" href="#">contact</a>
            </nav>

            <button class="burger" type="button" id="navToggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                  </svg>
            </button>
        </div>
    </div>
</header>



<!-- Intro -->
<section class="intro">
    <div class="container">

        <div class="intro__inner">
            <div class="intro__content">
                <h2 class="intro__subtitle">Hello i'm</h2>
                <h1 class="intro__title">Taras Dei</h1>
                <div class="intro__text">Frontend &amp; Backend developer</div>

                <div class="social">
                    <a class="social__link" href="https://github.com/WyLfi43">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                          </svg>
                    </a>
                    <a class="social__link" href="https://t.me/W_y_L_f_i">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                          </svg>
                    </a>
                    <a class="social__link" href="Taras#7248">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16">
                            <path d="M13.545 2.907a13.227 13.227 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.19 12.19 0 0 0-3.658 0 8.258 8.258 0 0 0-.412-.833.051.051 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.041.041 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032c.001.014.01.028.021.037a13.276 13.276 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019c.308-.42.582-.863.818-1.329a.05.05 0 0 0-.01-.059.051.051 0 0 0-.018-.011 8.875 8.875 0 0 1-1.248-.595.05.05 0 0 1-.02-.066.051.051 0 0 1 .015-.019c.084-.063.168-.129.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.052.052 0 0 1 .053.007c.08.066.164.132.248.195a.051.051 0 0 1-.004.085 8.254 8.254 0 0 1-1.249.594.05.05 0 0 0-.03.03.052.052 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.235 13.235 0 0 0 4.001-2.02.049.049 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.034.034 0 0 0-.02-.019Zm-8.198 7.307c-.789 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612Zm5.316 0c-.788 0-1.438-.724-1.438-1.612 0-.889.637-1.613 1.438-1.613.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612Z"/>
                          </svg>
                    </a>
                    <a class="social__link" href="https://www.facebook.com/taras.dey.9/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                          </svg>
                    </a>
                    <a class="social__link" href="https://www.instagram.com/taras_789__/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                          </svg>
                    </a>
                </div>
                <a class="btn" href="#" data-modal="#modal_hire_me">HIRE ME</a>
                <a class="btn" type="button" data-modal="#modal_resume">SEE MY RESUME</a>
            

            <img class="intro__photo" src="images/2.png" alt="">
        </div><!-- /.intro__inner -->

    </div><!-- /.container -->
</section>



<!-- Works -->
<div class="works">
    <div class="container">

        <div class="works__nav">
            <a class="works__nav-link" href="#" data-filter="all">All</a>
            <a class="works__nav-link" href="#" data-filter="app">App</a>
            <a class="works__nav-link" href="#" data-filter="website">Websites</a>
            <a class="works__nav-link" href="#" data-filter="interaction">Interaction</a>
        </div>


        <div class="portfolio" id="portfolio">
            <div class="portfolio__col" data-cat="app">
                <div class="work" data-modal="#modal_project_1">
                    <img class="work__image" src="images/13.jpg" alt="">
                    <div class="work__content">
                        <div class="work__cat">category: app</div>
                        <div class="work__title">
                            Project title
                            <time class="work__date" datetime="2019-11-22 19:00">2022</time>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio__col" data-cat="website">
                <div class="work" data-modal="#modal_project_2">
                    <img class="work__image" src="images/13.jpg" alt="">
                    <div class="work__content">
                        <div class="work__cat">category: website</div>
                        <div class="work__title">
                            Project title
                            <time class="work__date" datetime="2019-11-22 19:00">2022</time>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio__col" data-cat="interaction">
                <div class="work">
                    <img class="work__image" src="images/13.jpg" alt="">
                    <div class="work__content">
                        <div class="work__cat">category: interaction</div>
                        <div class="work__title">
                            Project title
                            <time class="work__date" datetime="2019-11-22 19:00">2022</time>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio__col" data-cat="website">
                <div class="work">
                    <img class="work__image" src="images/13.jpg" alt="">
                    <div class="work__content">
                        <div class="work__cat">category: website</div>
                        <div class="work__title">
                            Project title
                            <time class="work__date" datetime="2019-11-22 19:00">2022</time>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio__col" data-cat="interaction">
                <div class="work">
                    <img class="work__image" src="images/13.jpg" alt="">
                    <div class="work__content">
                        <div class="work__cat">category: interaction</div>
                        <div class="work__title">
                            Project title
                            <time class="work__date" datetime="2019-11-22 19:00">2022</time>
                        </div>
                    </div>
                </div>
            </div>

            <div class="portfolio__col" data-cat="app">
                <div class="work">
                    <img class="work__image" src="images/13.jpg" alt="">
                    <div class="work__content">
                        <div class="work__cat">category: app</div>
                        <div class="work__title">
                            Project title
                            <time class="work__date" datetime="2019-11-22 19:00">2022</time>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.portfolio -->

        <div class="text-center">
            <a class="btn  btn--sm" href="#">LOAD MORE WORK</a>
        </div>

    </div><!-- /.container -->
</div><!-- /.works -->



<!-- About -->
<section class="about">
    <div class="container">

        <div class="about__inner">
            <div class="about__photo">
                <img src="images/taras.jpg">
            </div>

            <div class="about__content">
                <h3 class="about__title">about me</h3>
                <h2 class="about__bigtitle">WHO AM I</h2>
                <div class="about__text">
                    <p> Hello World! I`m Taras Dei, a Back-end Web Developer. I`m student at National Technical University in Lutsk. Now, I live in Poland. I love combining the worlds of logic and create web-sites to eye-catching and user-friendly web-sites.  </p>
                    <p> I also like to learn something new and improve myself. I like this work because I am free in my abilities and can create various interesting animations and combine different languages in one project.</p>
                </div>
                <a class="btn" href="#" data-modal="#modal_hire_me">HIRE ME</a>
                <button class="btn" type="button" data-modal="#modal_resume">SEE MY RESUME</button>
            </div><!-- /.about__content -->
        </div><!-- /.about__inner -->

    </div><!-- /.container -->
</section>