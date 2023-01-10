<?php
/*
 * Template Name: contacts
 */
get_header();
?>
        <section class="main">
           <div class="contacts df">
            <div class="contacts__item"> 
                <div class="contacts__title">
                    <span class="keytext">
                        <span data-lang="title-1">YOU CAN:</span>
                        <a class="contacts__link" href="mailto:ukr.tv.film@gmail.com" data-lang="title-2">
                            <span class="spec-violet">~</span>TEXT U<span class="spec-orange">$</span>
                        </a>
                    </span>
                </div>
                <div class="contacts__text">UKR.TV.FILM@GMAIL.COM</div>
            </div>
            <div class="contacts__item">
                <div class="contacts__title">
                    <span class="keytext">
                        <span data-lang="title-1">YOU CAN:</span> 
                        <a class="contacts__link" href="tel:+380506945679" data-lang="title-3">
                            <span class="spec-violet">~</span>C&commat;LL US
                        </a>
                    </span>
                </div>
                <div class="contacts__text">+380 50 694 56 79</div>
                <div class="contacts__text">+380 44 222 93 46</div>
            </div>
           </div>
           <div class="info">
            <div class="info__text">
                <span class="keytext" data-lang="text-1">OR YOU CAN JUST MEET US ON THE FUCKING AWESOME ROOF</span>
            </div>
            <div class="info__text" data-lang="text-2">KOZHUMIATSKA 16B ST, KYIV, UKRAINE</div>
            <div class="info__media" id="scroll-media">
                <img src="../media/roof.png" alt="roof">
                <div class="info__button df">
                    <div class="info__pic"><img src="../media/heart.png" alt="heart"></div>
                    <span id="dialog-open-button" data-lang="btn-1">Invite for a date</span>
                    <div class="info__pic"><img src="../media/heart.png" alt="heart"></div>
                </div>
            </div>
           </div>
           <div class="face">
            <svg viewBox="0 0 56 56" fill="none">
                <path d="M3.02702 36.3244V20.4325V19.6757H6.05405V12.1082H9.08108V9.08115H12.1081V6.05413H19.6757V3.0271H36.3243V6.05413H43.8919V9.08115H46.9189V12.1082H49.9459V19.6757H52.973V36.3244H49.9459V43.892H46.9189V46.919H43.8919V49.946H36.3243V52.973H19.6757V49.946H12.1081V46.919H9.08108V43.892H6.05405V36.3244H3.02702Z" fill="#FFFE54"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M36.3243 0H19.6757V3.02703L12.1081 3.02703V6.05405H9.08108L9.08108 9.08108H6.05405L6.05405 12.1081L3.02703 12.1081L3.02703 19.6757H0V36.3243H3.02703L3.02703 19.6757H6.05405V12.1081L9.08108 12.1081V9.08108L12.1081 9.08108V6.05405L19.6757 6.05405L19.6757 3.02703H36.3243V6.05405H43.8919V9.08108H46.9189V12.1081H49.9459V19.6757H52.973L52.973 36.3243L49.9459 36.3243V43.8919H46.9189V46.9189H43.8919V49.9459H36.3243V52.973H19.6757V49.9459H12.1081V46.9189H9.08108V43.8919H6.05406L6.05406 36.3243H3.02703L3.02703 43.8919H6.05406V46.9189H9.08108V49.9459H12.1081L12.1081 52.973H19.6757V56H36.3243L36.3243 52.973H43.8919V49.9459H46.9189V46.9189H49.9459V43.8919H52.973V36.3243L56 36.3243V19.6757L52.973 19.6757V12.1081H49.9459V9.08108H46.9189V6.05405H43.8919V3.02703H36.3243V0Z" fill="black"/>
                <rect x="15.1351" y="19.6758" width="6.05406" height="6.05405" fill="black"/>
                <rect x="34.8108" y="19.6758" width="6.05405" height="6.05405" fill="black"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M36.3243 43.8918L19.6757 43.8918L19.6757 40.8648L36.3243 40.8648L36.3243 43.8918ZM16.6487 37.8378L19.6757 37.8378L19.6757 40.8648L16.6487 40.8648L16.6487 37.8378ZM16.6487 37.8378L13.6216 37.8378L13.6216 34.8108L16.6487 34.8108L16.6487 37.8378ZM42.3784 37.8378L39.3514 37.8378L39.3514 34.8108L42.3784 34.8108L42.3784 37.8378ZM39.3514 37.8378L39.3514 40.8648L36.3243 40.8648L36.3243 37.8378L39.3514 37.8378Z" fill="black"/>
            </svg>
           </div>
           <div class="content" id="content"></div>
        </section>
        <!-- <footer class="footer footer--contacts">
            <div class="footer__body">
                <div class="footer__item"><a href="https://instagram.com/utc_film?igshid=YmMyMTA2M2Y=" class="footer__link">instagram</a></div>
                <div class="footer__item"><a href="https://facebook.com/utcfilmstudio" class="footer__link">facebook</a></div>
                <div class="footer__item"><a href="https://vimeo.com/utcfilm" class="footer__link">vimeo</a></div>
                <div class="footer__item"><a href="mailto:ukr.tv.film@gmail.com" class="footer__link">gmail</a></div>
            </div>
        </footer> -->
    </div>
    <div class="app-dialog" id="dialog">
        <div class="app-dialog__overlay">
          <div class="app-dialog__body">
            <div class="container">
                <!-- <div class="title">set up a meeting</div> -->
                <button id="close-button" data-lang="form-close">CLOSE</button>
            </div>
            <form name="data" method="post" data-lang="form-text">
                <span class="app-dialog__message">HELLO! MY NAME IS</span>
                <label for="fullname">
                    <div class="placeholder">input your full name</div>
                    <input type="text" name="fullname" id="fullname" required><span class="error"></span>.
                </label>
                <span class="app-dialog__message"> YOUR WORKS SINCERELY BURNED INTO MY SOUL, SO I WILL LEAVE MY EMAIL</span>
                <label for="email">
                    <div class="placeholder">input your email</div>
                    <input type="email" name="email" id="email" required><span class="error"></span>.
                </label>
                <span class="app-dialog__message"> AND PHONE NUMBER  HERE</span>
                <label for="phone">
                        <div class="placeholder">input your phone number</div>
                        <input type="tel" name="phone" id="phone" ><span class="error"></span>.
                    </label>
                    <span class="app-dialog__message">SO WE CAN SCHEDULE A MEETING WITH THE UTC TEAM, ONLINE OR ON YOUR FUCKING AWESOME ROOF, AND DISCUSS ANY QUESTIONS I MAY HAVE. I WILL BE FREE</span>
                    <label for="time">
                        <div class="placeholder">input date</div>
                        <input type="datetime-local" name="time" id="time" value="" required><span class="error"></span>.
                    </label>
                    <span class="app-dialog__message">I'M LOOKING FORWARD TO! (YOUR FUTURE FRIEND)</span>
                    <label for="button">
                        <input type="submit" value="Invite for a date" id="button">
                    </label>
                    <h2 id="message"></h2>
                    <span class="app-dialog__message"></span>
              </form>
          </div>
        </div>
    </div>
    <!-- <script src="../dist/contacts.js"></script> -->
    <?php get_footer(); ?>
</body>
</html>




