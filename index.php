    <?php
    // Verwerk contactformulier als het verzonden is
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'includes/contact-form.php';
    }

    // Berichten voor gebruiker indien nodig
    $message = '';
    $messageType = '';

    if (isset($_GET['status'])) {
        if ($_GET['status'] == 'success') {
            $message = 'Bedankt voor je bericht! We nemen zo snel mogelijk contact met je op.';
            $messageType = 'success';
        } else if ($_GET['status'] == 'error') {
            $message = isset($_GET['errors']) ? $_GET['errors'] : 'Er is iets misgegaan. Probeer het later opnieuw.';
            $messageType = 'error';
        }
    }

    // Include header
    include 'includes/header.php';
    ?>

    <!-- Hier komt ALLES van je originele HTML, precies zoals het was -->
    <!-- Hero -->
    <section class="hero" id="home">
        <img src="images/1.jpg" alt="Personal Training" class="hero__background" loading="eager">
        <div class="hero__overlay"></div>
        <div class="container">
            <div class="hero__content">
                <div class="hero__tag">Voor moeders, door een moeder</div>
                <h1 class="hero__title">Jouw Doel<br>Mijn Missie</h1>
                <p class="hero__description">Persoonlijke begeleiding bij het bereiken van jouw fitnessdoelen met professionele training op maat</p>
                <div class="btn-group">
                    <a href="#contact" class="btn btn--primary">Gratis Intakegesprek</a>
                    <a href="#services" class="btn btn--outline btn--white">Bekijk Diensten</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="section section--light" id="about">
        <div class="container">
            <div class="section__header">
                <span class="section__pretitle">Leer me kennen</span>
                <h2 class="section__title">Over Mij</h2>
                <p class="section__description">Als moeder begrijp ik jouw uitdagingen en help ik je om sport in je drukke leven te integreren</p>
            </div>
            <div class="grid grid--2">
                <div class="about__image fade-in">
                    <img src="images/overmama.jpg" alt="Iwona Personal Trainer" class="image--full" loading="lazy">
                </div>
                <div class="fade-in">
                    <h3 class="about__title">Jouw coach in een druk leven</h3>
                    <p class="about__text">Als moeder van vier kinderen en met een jarenlange carrière in loondienst weet ik als geen ander hoe hectisch het leven kan zijn. Toch heb ik altijd tijd gevonden om te blijven sporten, omdat ik geloof dat zelfzorg geen luxe is, maar een noodzaak.</p>
                    <p class="about__text">Met mijn Personal Training-opleiding bij Start2Move en meerdere groepsleslicenties, waaronder XCORE, BRN en Functional Strength Training, help ik vrouwen – vooral moeders – om hun leefstijl structureel te verbeteren. Geen excuses, geen loze beloftes, maar een helder plan dat werkt in het echte leven.</p>
                    <p class="about__text">Tegenwoordig zijn er oma's die fitter zijn dan moeders. Daar wil ik verandering in brengen. Niet alleen om er goed uit te zien, maar om gezond, sterk en energiek ouder te worden. Voor jezelf én voor je gezin.</p>
                    <div class="features">
                        <div class="feature">
                            <div class="feature__icon">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <div>
                                <h4 class="feature__title">Personal Training Certificaat</h4>
                                <p class="feature__description">Professionele opleiding Start2Move</p>
                            </div>
                        </div>
                        <div class="feature">
                            <div class="feature__icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div>
                                <h4 class="feature__title">Groepslesinstructeur</h4>
                                <p class="feature__description">XCORE, BRN, Functional Training</p>
                            </div>
                        </div>
                        <div class="feature">
                            <div class="feature__icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div>
                                <h4 class="feature__title">Blessurepreventie Specialist</h4>
                                <p class="feature__description">WRAK Link Training</p>
                            </div>
                        </div>
                        <div class="feature">
                            <div class="feature__icon">
                                <i class="fas fa-apple-alt"></i>
                            </div>
                            <div>
                                <h4 class="feature__title">Voedingskennis</h4>
                                <p class="feature__description">Specialisatie in sportvoeding</p>
                            </div>
                        </div>
                    </div>
                    <a href="#contact" class="btn btn--primary mt-32">Maak Kennis</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="section section--gray" id="services">
        <div class="container">
            <div class="section__header">
                <span class="section__pretitle">Wat ik aanbied</span>
                <h2 class="section__title">Mijn Diensten</h2>
                <p class="section__description">Gepersonaliseerde training en begeleiding afgestemd op jouw behoeften en doelen</p>
            </div>
            
            <div class="tabs">
                <button class="tab active" data-tab="all">Alle Diensten</button>
                <button class="tab" data-tab="personal">Personal Training</button>
                <button class="tab" data-tab="group">Groepslessen</button>
            </div>
            
            <div class="services">
                <div class="card service fade-in" data-category="personal">
                    <div class="service__image">
                        <img src="images/personal.jpg" alt="Personal Training" loading="lazy">
                        <div class="service__icon">
                            <i class="fas fa-dumbbell"></i>
                        </div>
                    </div>
                    <div class="service__content">
                        <h3 class="service__title">Personal Training</h3>
                        <p class="service__description">Volledig gepersonaliseerde trainingsschema's, afgestemd op jouw doelen en mogelijkheden als drukke moeder.</p>
                        <ul class="service__list">
                            <li class="service__list-item">1-op-1 begeleiding op maat</li>
                            <li class="service__list-item">Flexibele planning rond gezinstijd</li>
                            <li class="service__list-item">Blessurepreventie</li>
                            <li class="service__list-item">Ook mogelijk met kinderen erbij</li>
                        </ul>
                        <a href="#contact" class="btn btn--primary">Meer Info</a>
                    </div>
                </div>
                
                <div class="card service fade-in" data-category="personal">
                    <div class="service__image">
                        <img src="images/2.jpg" alt="21-Dagen Programma" loading="lazy">
                        <div class="service__icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                    </div>
                    <div class="service__content">
                        <h3 class="service__title">21-Dagen Programma</h3>
                        <p class="service__description">Start met 21 dagen keihard werken aan je gewoontes – ik begeleid je van start tot finish voor blijvende resultaten.</p>
                        <ul class="service__list">
                            <li class="service__list-item">Dagelijkse begeleiding & motivatie</li>
                            <li class="service__list-item">Voedings- en beweegplan op maat</li>
                            <li class="service__list-item">Focus op gewoontevorming</li>
                            <li class="service__list-item">Perfecte kickstart voor verandering</li>
                        </ul>
                        <a href="#contact" class="btn btn--primary">Meer Info</a>
                    </div>
                </div>
                
                <div class="card service fade-in" data-category="group">
                    <div class="service__image">
                        <img src="images/group.jpg" alt="Groepslessen" loading="lazy">
                        <div class="service__icon">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <div class="service__content">
                        <h3 class="service__title">Groepslessen</h3>
                        <p class="service__description">Energieke groepslessen zoals HIIT, BBB, XCORE, BRN en Functional Strength Training voor alle niveaus.</p>
                        <ul class="service__list">
                            <li class="service__list-item">Motiverende groepssfeer</li>
                            <li class="service__list-item">Voor alle fitnessniveaus</li>
                            <li class="service__list-item">Vaste momenten voor je routine</li>
                            <li class="service__list-item">Effectieve full-body workouts</li>
                        </ul>
                        <a href="#contact" class="btn btn--primary">Meer Info</a>
                    </div>
                </div>
                
                <div class="card service fade-in" data-category="personal">
                    <div class="service__image">
                        <img src="images/nutrition.jpg" alt="Voedingsadvies" loading="lazy">
                        <div class="service__icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                    </div>
                    <div class="service__content">
                        <h3 class="service__title">Voedingsadvies</h3>
                        <p class="service__description">Praktische voedingsplannen die passen bij een druk gezinsleven - zonder ingewikkelde diëten of speciale maaltijden.</p>
                        <ul class="service__list">
                            <li class="service__list-item">Gezinsgerichte voedingstips</li>
                            <li class="service__list-item">Realistische eetpatronen</li>
                            <li class="service__list-item">Boodschappenlijsten & recepten</li>
                            <li class="service__list-item">Energiebalans voor drukke dagen</li>
                        </ul>
                        <a href="#contact" class="btn btn--primary">Meer Info</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section class="section section--light" id="pricing">
        <div class="container">
            <div class="section__header">
                <span class="section__pretitle">Investering in jezelf</span>
                <h2 class="section__title">Tarieven</h2>
                <p class="section__description">Kies het pakket dat het beste bij jouw doelen en mogelijkheden past</p>
            </div>
            
            <div class="pricing">
                <div class="card price-card fade-in">
                    <div class="price-card__header">
                        <div class="price-card__icon">
                            <i class="fas fa-user-friends"></i>
                        </div>
                        <h3 class="price-card__title">Basis</h3>
                        <p class="price-card__subtitle">Voor een vliegende start</p>
                        <div class="price-card__price">€55</div>
                        <p class="price-card__period">per sessie</p>
                    </div>
                    <div class="price-card__body">
                        <ul class="price-card__features">
                            <li class="price-card__feature"><i class="fas fa-check"></i> 1 Personal Training Sessie</li>
                            <li class="price-card__feature"><i class="fas fa-check"></i> Persoonlijke begeleiding</li>
                            <li class="price-card__feature"><i class="fas fa-check"></i> Trainingsschema voor thuis</li>
                            <li class="price-card__feature"><i class="fas fa-check"></i> Flexibele planning</li>
                        </ul>
                        <a href="#contact" class="btn btn--primary btn--block">Reserveer Nu</a>
                    </div>
                </div>
                
                <div class="card price-card price-card--popular fade-in">
                    <div class="popular-badge">Populair</div>
                    <div class="price-card__header">
                        <div class="price-card__icon">
                            <i class="fas fa-fire"></i>
                        </div>
                        <h3 class="price-card__title">Populair</h3>
                        <p class="price-card__subtitle">Voor optimale resultaten</p>
                        <div class="price-card__price">€250</div>
                        <p class="price-card__period">5 sessies</p>
                    </div>
                    <div class="price-card__body">
                        <ul class="price-card__features">
                            <li class="price-card__feature"><i class="fas fa-check"></i> 5 Personal Training Sessies</li>
                            <li class="price-card__feature"><i class="fas fa-check"></i> Persoonlijke begeleiding</li>
                            <li class="price-card__feature"><i class="fas fa-check"></i> Trainingsschema voor thuis</li>
                            <li class="price-card__feature"><i class="fas fa-check"></i> Basis voedingsadvies</li>
                            <li class="price-card__feature"><i class="fas fa-check"></i> Gratis intake gesprek</li>
                        </ul>
                        <a href="#contact" class="btn btn--primary btn--block">Reserveer Nu</a>
                    </div>
                </div>
                
                <div class="card price-card fade-in">
                    <div class="price-card__header">
                        <div class="price-card__icon">
                            <i class="fas fa-crown"></i>
                        </div>
                        <h3 class="price-card__title">Premium</h3>
                        <p class="price-card__subtitle">Voor blijvende verandering</p>
                        <div class="price-card__price">€500</div>
                        <p class="price-card__period">10 sessies + extras</p>
                    </div>
                    <div class="price-card__body">
                        <ul class="price-card__features">
                            <li class="price-card__feature"><i class="fas fa-check"></i> 10 Personal Training Sessies</li>
                            <li class="price-card__feature"><i class="fas fa-check"></i> Persoonlijke begeleiding</li>
                            <li class="price-card__feature"><i class="fas fa-check"></i> Uitgebreid trainingsschema</li>
                            <li class="price-card__feature"><i class="fas fa-check"></i> Volledig voedingsplan</li>
                            <li class="price-card__feature"><i class="fas fa-check"></i> Gratis intake gesprek</li>
                            <li class="price-card__feature"><i class="fas fa-check"></i> Doorlopende ondersteuning</li>
                        </ul>
                        <a href="#contact" class="btn btn--primary btn--block">Reserveer Nu</a>
                    </div>
                </div>
            </div>
            
            <div class="policy fade-in mt-64">
                <h3 class="policy__title">Belangrijk om te weten</h3>
                <div class="policy__grid">
                    <div class="policy__item">
                        <div class="policy__icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="policy__content">
                            <h4>Annuleringsbeleid</h4>
                            <p>Afspraken dienen minimaal 48 uur van tevoren te worden afgezegd. Bij latere annulering wordt de volledige sessie in rekening gebracht.</p>
                        </div>
                    </div>
                    <div class="policy__item">
                        <div class="policy__icon">
                            <i class="fas fa-baby"></i>
                        </div>
                        <div class="policy__content">
                            <h4>Kinderen Welkom</h4>
                            <p>Bij persoonlijke training is het mogelijk om je kind(eren) mee te nemen. Er is een speciale speelhoek aanwezig.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="section section--gray" id="testimonials">
        <div class="container">
            <div class="section__header">
                <span class="section__pretitle">Succesverhalen</span>
                <h2 class="section__title">Wat Klanten Zeggen</h2>
                <p class="section__description">Lees de ervaringen van anderen en ontdek hoe ik hen heb geholpen hun doelen te bereiken</p>
            </div>
            <div class="testimonials">
                <div class="card testimonial fade-in">
                    <p class="testimonial__text">"Iwona heeft mij geholpen weer plezier te vinden in sporten. Haar persoonlijke aanpak en motivatie hebben echt het verschil gemaakt. Na jaren niet sporten, was ik bang dat ik het niet zou kunnen. Maar dankzij haar persoonlijke aanpak en motivatie heb ik inmiddels 10 kilo verloren en voel ik me sterker dan ooit!"</p>
                    <div class="testimonial__author">
                        <div class="testimonial__avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <div class="testimonial__name">Linda</div>
                            <div class="testimonial__role">HIIT & BBB Klant</div>
                        </div>
                    </div>
                </div>
                <div class="card testimonial fade-in">
                    <p class="testimonial__text">"De groepslessen van Iwona zijn intensief maar super leuk! Ze zorgt dat iedereen op zijn eigen niveau kan trainen. Ik kijk elke week uit naar de lessen en heb al enorme vooruitgang geboekt in mijn conditie en kracht."</p>
                    <div class="testimonial__author">
                        <div class="testimonial__avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <div class="testimonial__name">Mark</div>
                            <div class="testimonial__role">Groepslessen Klant</div>
                        </div>
                    </div>
                </div>
                <div class="card testimonial fade-in">
                    <p class="testimonial__text">"Als werkende moeder had ik weinig tijd voor sport. Iwona heeft een schema gemaakt dat perfect in mijn leven past. Resultaat: 10 kilo lichter! Ze begrijpt als geen ander hoe je training kunt inpassen in een drukke agenda zonder compromissen te sluiten op resultaat."</p>
                    <div class="testimonial__author">
                        <div class="testimonial__avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <div class="testimonial__name">Sophie</div>
                            <div class="testimonial__role">Personal Training Klant</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta">
        <div class="container">
            <div class="cta__content">
                <h2 class="cta__title">Klaar om te starten?</h2>
                <p class="cta__description">Jouw kinderen verdienen een moeder die barst van de energie – en jij verdient het om je sterk te voelen in je eigen lichaam. Begin vandaag nog aan jouw reis naar een fitter en gezonder leven.</p>
                <div class="btn-group">
                    <a href="#contact" class="btn btn--secondary btn--lg">Plan Je Gratis Intake</a>
                    <a href="#pricing" class="btn btn--outline btn--white btn--lg">Bekijk Tarieven</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="section section--light" id="contact">
        <div class="container">
            <div class="section__header">
                <span class="section__pretitle">Laten we verbinden</span>
                <h2 class="section__title">Neem Contact Op</h2>
                <p class="section__description">Heb je vragen of wil je een afspraak maken? Ik sta voor je klaar!</p>
            </div>
            <div class="contact">
                <div class="contact__info fade-in">
                    <h3 class="contact__title">Contactgegevens</h3>
                    <div class="contact__list">
                        <div class="contact__item">
                            <div class="contact__icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <span class="contact__label">Adres</span>
                                <span class="contact__value">Berkendreef 13, 5165AT Waspik</span>
                            </div>
                        </div>
                        <div class="contact__item">
                            <div class="contact__icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <span class="contact__label">TheLocalGym Hilvarenbeek</span>
                                <span class="contact__value">Slibbroek 8, 5081 NS Hilvarenbeek</span>
                            </div>
                        </div>
                        <div class="contact__item">
                            <div class="contact__icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <span class="contact__label">Telefoon</span>
                                <span class="contact__value">06-19175990</span>
                            </div>
                        </div>
                        <div class="contact__item">
                            <div class="contact__icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <span class="contact__label">Email</span>
                                <span class="contact__value">yvonnekjagi@hotmail.com</span>
                            </div>
                        </div>
                        <div class="contact__item">
                            <div class="contact__icon">
                                <i class="fas fa-building"></i>
                            </div>
                            <div>
                                <span class="contact__label">KvK & BTW-nr</span>
                                <span class="contact__value">KvK: 96512229<br>BTW-nr: NL004887238B66</span>
                            </div>
                        </div>
                    </div>
                    <div class="contact__social">
                        <h4 class="contact__social-title font-semibold">Volg mij</h4>
                        <div class="social">
                            <a href="#" class="social__link" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social__link" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social__link" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                <div class="contact__form fade-in">
                    <form id="contactForm" method="POST" action="index.php#contact">
                        <div class="form__group">
                            <label class="form__label" for="name">Naam</label>
                            <input type="text" id="name" name="name" class="form__control" placeholder="Jouw naam" required>
                        </div>
                        <div class="form__group">
                            <label class="form__label" for="email">Email</label>
                            <input type="email" id="email" name="email" class="form__control" placeholder="jouw@email.nl" required>
                        </div>
                        <div class="form__group">
                            <label class="form__label" for="phone">Telefoonnummer</label>
                            <input type="tel" id="phone" name="phone" class="form__control" placeholder="06 12345678">
                        </div>
                        <div class="form__group">
                            <label class="form__label" for="subject">Interesse In</label>
                            <select id="subject" name="subject" class="form__control" required>
                                <option value="" selected disabled>Maak een keuze</option>
                                <option value="Personal Training">Personal Training</option>
                                <option value="Groepslessen">Groepslessen</option>
                                <option value="21-Dagen Programma">21-Dagen Programma</option>
                                <option value="Voedingsadvies">Voedingsadvies</option>
                                <option value="Anders">Anders</option>
                            </select>
                        </div>
                        <div class="form__group">
                            <label class="form__label" for="message">Jouw Bericht</label>
                            <textarea id="message" name="message" class="form__control form__control--textarea" placeholder="Vertel me over jouw situatie en doelen..." required></textarea>
                        </div>
                        <div class="form__note">
                            <p><strong>Annuleringsbeleid:</strong> Afspraken dienen minimaal 48 uur van tevoren te worden afgezegd. Bij latere annulering wordt de volledige sessie in rekening gebracht.</p>
                        </div>
                        <div class="mt-32">
                            <button type="submit" class="btn btn--primary btn--block">Verstuur Bericht</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>