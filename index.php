<?php
$conn = new mysqli("localhost", "root", "", "pearl_global");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM destinations";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pearl Global Tours and Travel</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png"
                    alt="Pearl Global Tours and Travel Logo" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#destinations">Destinations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#packages">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#booking">Book Now</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="hero" class="text-light text-center d-flex align-items-center justify-content-center" style="
        background: url('assets/images/hero_bg.jpg') no-repeat center
          center/cover;
      ">
        <div></div>
        <div class="hero-content">
            <h1>Experience Uganda's Wonders with Pearl Global Tours & Travel</h1>
            <div class="hero-buttons mt-4">
                <a href="#booking" class="btn btn-primary me-2 text-uppercase">Book a Tour</a>
                <a href="#about" class="btn btn-outline-light text-uppercase">Learn More</a>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container text-center">
            <h3 class="text-center mb-5 text-dark">ABOUT US</h3>
            <div class="row align-items-center">
                <div class="col-md-12">
                    <p class="lead mb-5">
                        Welcome to Pearl Global Tours and Travel, where we invite you to embark on
                        a journey to explore the breathtaking landscapes and rich cultural
                        tapestry of Uganda. Nestled in the heart of East Africa, our
                        country is renowned for its stunning national parks, diverse
                        wildlife, and vibrant communities. Our mission is to provide
                        personalized, adventurous tours that not only create unforgettable
                        memories but also foster a deep connection between travelers and
                        the authentic beauty of our homeland. With a team of experienced
                        guides who are passionate about sharing their knowledge and love
                        for Uganda, we strive to deliver exceptional experiences tailored
                        to your interests. Whether you’re seeking thrilling wildlife
                        encounters, cultural immersions, or serene escapes into nature,
                        Pearl Global Tours and Travel is dedicated to curating the perfect
                        itinerary for you. Join us as we unveil the hidden gems of Uganda,
                        ensuring every moment is filled with joy, discovery, and
                        adventure.
                    </p>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-3 mb-4">
                    <div class="about-box p-4 shadow-sm rounded">
                        <i class="fas fa-map-marker-alt fa-3x text-primary mb-3"></i>
                        <h5>How it Began</h5>
                        <p>
                            We started with a deep passion for exploring Uganda, transforming that love into a mission
                            to share
                            these wonders.
                        </p>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="about-box p-4 shadow-sm rounded">
                        <i class="fas fa-globe fa-3x text-primary mb-3"></i>
                        <h5>Our Mission</h5>
                        <p>
                            To deliver unmatched travel experiences that immerse our guests
                            in the beauty and diversity of Uganda’s iconic destinations.
                        </p>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="about-box p-4 shadow-sm rounded">
                        <i class="fas fa-eye fa-3x text-primary mb-3"></i>
                        <h5>Vision</h5>
                        <p>
                            To lead the tourism industry in Uganda with sustainable,
                            eco-friendly practices while providing unforgettable
                            experiences.
                        </p>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="about-box p-4 shadow-sm rounded">
                        <i class="fas fa-heart fa-3x text-primary mb-3"></i>
                        <h5>Core Values</h5>
                        <p class="text-start">
                            We value;
                            <br />
                            <i class="fas fa-arrow-right text-primary"></i> Integrity
                            <br />
                            <i class="fas fa-arrow-right text-primary"></i> Sustainability
                            <br />
                            <i class="fas fa-arrow-right text-primary"></i> Client
                            satisfaction.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container text-center">
            <h3 class="text-center mb-5 text-dark">OUR SERVICES</h3>
            <div class="row text-center mt-4">
                <div class="col-md-3 mb-4">
                    <div class="service-card p-4 shadow-lg rounded">
                        <i class="fas fa-hiking fa-2x mb-3 text-primary"></i>
                        <h5>Guided Tours</h5>
                        <p>
                            Discover Uganda with our expert guides. Tailored tours ensure an
                            immersive experience in our stunning landscapes and vibrant
                            cultures.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="service-card p-4 shadow-lg rounded">
                        <i class="fas fa-camera fa-2x mb-3 text-primary"></i>
                        <h5>Photography Tours</h5>
                        <p>
                            Capture the breathtaking beauty of Uganda with professional
                            guidance. Perfect for all skill levels, enhance your photography
                            skills while exploring.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="service-card p-4 shadow-lg rounded">
                        <i class="fas fa-campground fa-2x mb-3 text-primary"></i>
                        <h5>Adventure Activities</h5>
                        <p>
                            Experience thrilling activities like white-water rafting and
                            zip-lining. Safe and fun adventures for nature lovers and
                            adrenaline seekers.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="service-card p-4 shadow-lg rounded">
                        <i class="fas fa-ship fa-2x mb-3 text-primary"></i>
                        <h5>Boat Safaris</h5>
                        <p>
                            Glide through Uganda’s waterways on unforgettable boat safaris.
                            Enjoy wildlife viewing while our guides share insights into the
                            local ecosystem.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="service-card p-4 shadow-lg rounded">
                        <i class="fas fa-tree fa-2x mb-3 text-primary"></i>
                        <h5>Cultural Experiences</h5>
                        <p>
                            Engage with local communities and learn about their traditions.
                            Participate in cultural ceremonies for a deeper understanding of
                            Ugandan life.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="service-card p-4 shadow-lg rounded">
                        <i class="fas fa-utensils fa-2x mb-3 text-primary"></i>
                        <h5>Culinary Tours</h5>
                        <p>
                            Savor Ugandan cuisine with our culinary tours. Explore local
                            markets, learn cooking methods, and indulge in the country’s
                            diverse flavors.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="service-card p-4 shadow-lg rounded">
                        <i class="fas fa-car fa-2x mb-3 text-primary"></i>
                        <h5>Car Hire Services</h5>
                        <p>
                            Rent a car for your adventures in Uganda. Choose from a variety
                            of vehicles that suit your travel needs and explore at your own
                            pace.
                        </p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="service-card p-4 shadow-lg rounded">
                        <i class="fas fa-mountain fa-2x mb-3 text-primary"></i>
                        <h5>Gorilla Trekking Safaris</h5>
                        <p>
                            Embark on a journey to see the majestic mountain gorillas in
                            their natural habitat. A once-in-a-lifetime experience for
                            wildlife lovers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="destinations">
        <div class="container">
            <h3 class="text-center">DESTINATIONS</h3>
            <div class="row mt-4">
                <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                <div class="col-md-3">
                    <div class="destination-card">
                        <img src="<?php echo $row['image']; ?>" class="img-fluid" alt="<?php echo $row['name']; ?>" />
                        <div class="overlay">
                            <?php echo $row['name']; ?>
                            <button class="btn btn-primary learn-more-btn" data-name="<?php echo $row['name']; ?>"
                                data-image="<?php echo $row['image']; ?>" data-about="<?php echo $row['about']; ?>"
                                data-activities="<?php echo $row['activities']; ?>">
                                Learn More
                            </button>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php else: ?>
                <p class="text-center">No destinations found.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <div class="modal fade" id="destinationModal" tabindex="-1" role="dialog" aria-labelledby="destinationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="destinationModalLabel"></h5>
                </div>
                <div class="modal-body">
                    <img src="" id="destinationImage" class="img-fluid mb-3" alt="">
                    <p id="destinationAbout"></p>
                    <h6>Activities:</h6>
                    <p id="destinationActivities"></p>
                </div>
                <div class="modal-footer">
                    <a href="index.php#booking"><button type="button" class="btn btn-primary">Book Now</button></a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    $(document).ready(function() {
        $('.learn-more-btn').on('click', function() {
            var name = $(this).data('name');
            var image = $(this).data('image');
            var about = $(this).data('about');
            var activities = $(this).data('activities');

            $('#destinationModalLabel').text(name);
            $('#destinationImage').attr('src', image);
            $('#destinationAbout').text(about);
            $('#destinationActivities').text(activities);

            $('#destinationModal').modal('show');
        });
    });
    </script>

    <?php
  $conn->close();
  ?>

    <section id="packages">
        <div class="container">
            <h3 class="text-center mb-5 text-dark">PACKAGES</h3>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="package-card p-4 shadow-sm rounded">
                        <h5>Primate Tracking Safari</h5>
                        <strong class="text-primary">Duration: 3 Days</strong>
                        <p>
                            Experience an immersive adventure with Uganda's diverse primate
                            species, including chimpanzees and colobus monkeys.
                        </p>
                        <p class="price">
                            Price: $1,000
                            <br />
                            <a href="#booking" class="btn btn-primary mt-3">Book Now</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="package-card p-4 shadow-sm rounded">
                        <h5>Murchison Falls Safari</h5>
                        <strong class="text-primary">Duration: 3 Days</strong>
                        <p>
                            Witness the power of Murchison Falls and experience a safari
                            teeming with diverse wildlife along the Nile River.
                        </p>
                        <p class="price">
                            Price: $1,200
                            <br />
                            <a href="#booking" class="btn btn-primary mt-3">Book Now</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="package-card p-4 shadow-sm rounded">
                        <h5>Gorilla Trekking Safari</h5>
                        <strong class="text-primary">Duration: 3 Days</strong>
                        <p>
                            Embark on an unforgettable journey into the dense forests to see
                            the majestic mountain gorillas in their natural habitat.
                        </p>
                        <p class="price">
                            Price: $1,500
                            <br />
                            <a href="#booking" class="btn btn-primary mt-3">Book Now</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="package-card p-4 shadow-sm rounded">
                        <h5>Gorilla and Golden Monkey Safari</h5>
                        <strong class="text-primary">Duration: 4 Days</strong>
                        <p>
                            Discover the beauty of Uganda as you trek to see both gorillas
                            and golden monkeys in this unique four-day safari.
                        </p>
                        <p class="price">
                            Price: $1,800
                            <br />
                            <a href="#booking" class="btn btn-primary mt-3">Book Now</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="package-card p-4 shadow-sm rounded">
                        <h5>Eastern - Northern Uganda Safari</h5>
                        <strong class="text-primary">Duration: 10 Days</strong>
                        <p>
                            Explore the scenic landscapes and rich culture of Eastern and
                            Northern Uganda, visiting remote and captivating wildlife areas.
                        </p>
                        <p class="price">
                            Price: $2,000
                            <br />
                            <a href="#booking" class="btn btn-primary mt-3">Book Now</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="package-card p-4 shadow-sm rounded">
                        <h5>Western Uganda Safari</h5>
                        <strong class="text-primary">Duration: 10 Days</strong>
                        <p>
                            Journey through Western Uganda to see the breathtaking
                            landscapes and vibrant wildlife, including visits to famous
                            national parks.
                        </p>
                        <p class="price">
                            Price: $2,000
                            <br />
                            <a href="#booking" class="btn btn-primary mt-3">Book Now</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="booking" class="text-light py-5">
        <h3 class="text-center mb-5 text-dark">BOOK YOUR ADVENTURE</h3>
        <div class="container">
            <h6 class="text-dark">
                Are you interested in one of our packages or a custom-tailored experience?</h6>
            <form action="booking.php" class="mt-4" method="POST">
                <div class="mb-4">
                    <label class="form-label text-black">Choose your safari</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="safari" onclick="toggleDestination(false)"
                            required />
                        <label class="form-check-label">3-Day Gorilla Trekking Safari</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="safari" onclick="toggleDestination(false)" />
                        <label class="form-check-label">3-Day Primate Safari</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="safari" onclick="toggleDestination(false)" />
                        <label class="form-check-label">3-Day Murchison Falls Safari</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="safari" onclick="toggleDestination(false)" />
                        <label class="form-check-label">4-Day Gorilla and Golden Monkey Safari</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="safari" onclick="toggleDestination(false)" />
                        <label class="form-check-label">10-Day Eastern and Northern Uganda Safari</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="safari" onclick="toggleDestination(false)" />
                        <label class="form-check-label">10-Day Western Uganda Safari</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="safari" onclick="toggleDestination(true)" />
                        <label class="form-check-label">Custom Tailored Safari</label>
                    </div>
                </div>

                <div id="destinationField" class="mb-3" style="display: none">
                    <select class="form-control">
                        <option value="" disabled selected>Select Destination</option>
                        <option value="Bwindi Impenetrable National Park">
                            Bwindi Impenetrable National Park
                        </option>
                        <option value="Kibale National Park">Kibale National Park</option>
                        <option value="Kidepo Valley National Park">
                            Kidepo Valley National Park
                        </option>
                        <option value="Lake Mburo National Park">
                            Lake Mburo National Park
                        </option>
                        <option value="Mgahinga Gorilla National Park">
                            Mgahinga Gorilla National Park
                        </option>
                        <option value="Murchison Falls National Park">
                            Murchison Falls National Park
                        </option>
                        <option value="Mount Elgon National Park">
                            Mount Elgon National Park
                        </option>
                        <option value="Pian Upe Wildlife Reserve">
                            Pian Upe Wildlife Reserve
                        </option>
                        <option value="Queen Elizabeth National Park">
                            Queen Elizabeth National Park
                        </option>
                        <option value="Rwenzori Mountains National Park">
                            Rwenzori Mountains National Park
                        </option>
                        <option value="Semuliki National Park">
                            Semuliki National Park
                        </option>
                        <option value="Toro Semliki Wildlife Reserve">
                            Toro Semliki Wildlife Reserve
                        </option>
                    </select>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="First Name" required />
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Last Name" required />
                    </div>
                </div>

                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Email" required />
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <input type="number" class="form-control" placeholder="Number of people traveling" required
                            min="1" />
                    </div>
                    <div class="col-md-6">
                        <input type="number" class="form-control" placeholder="Number of days" required min="1" />
                    </div>
                </div>

                <div class="mb-3">
                    <label for="date">Tour Start Date</label>
                    <input type="date" class="form-control" placeholder="Date of Travel" required />
                </div>

                <div class="mb-3">
                    <textarea class="form-control" rows="3" placeholder="Special Requests"></textarea>
                </div>

                <button type="submit" class="btn btn-primary mt-3 text-center w-100">
                    SUBMIT
                </button>
            </form>
        </div>
    </section>

    <script>
    function toggleDestination(show) {
        const destinationField = document.getElementById("destinationField");
        destinationField.style.display = show ? "block" : "none";
    }
    </script>

    <section id="contact" class="py-5 text-dark">
        <div class="container">
            <h3 class="text-center">CONTACT US</h3>
            <div class="row">
                  <div class="col-md-6" id="contactInfo">
                    <p>
                        <i class="fas fa-map-marker-alt"></i> Plot 19, Station Road,
                        Kampala, Uganda
                    </p>
                    <p>
                        <i class="fas fa-phone"></i>
                        <a href="tel:+256787584714" class="text-dark">+256 787 584 714</a>
                    </p>
                    <p>
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:support@pearlglobaltours.com" class="text-dark">support@pearlglobaltours.com</a>
                    </p>
                    Follow Us
                    <div class="social-icons">
                        <a href="https://www.facebook.com/PearlGlobalTours" target="_blank" class="text-dark me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/PearlGlobalTours" target="_blank" class="text-dark me-3"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/PearlGlobalTours" target="_blank" class="text-dark me-3"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.tiktok.com/PearlGlobalTours" target="_blank" class="text-dark"><i class="fab fa-tiktok"></i></a>
                    </div>
                  </div>

                <div class="col-md-6">
                    <form id="contactForm">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Your Name" required />
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required />
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" />
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" name="message" rows="4" placeholder="Your Message"
                                required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send Message</button>
                    </form>
                    <div id="confirmationMessage" class="mt-3"></div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#contactForm').on('submit', function(event) {
            event.preventDefault();

            $.ajax({
                url: 'contact.php',
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    $('#confirmationMessage').html(
                        response);
                    $('#contactForm')[0].reset();
                },
                error: function() {
                    $('#confirmationMessage').html(
                        '<div class="alert alert-danger">There was an error submitting the form. Please try again.</div>'
                    );
                }
            });
        });
    });
    </script>

    <footer class="footer bg-dark text-light position-relative">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#booking" class="text-light"><i class="fas fa-angle-right"></i> Book Now</a>
                        </li>
                        <li>
                            <a href="#contact" class="text-light"><i class="fas fa-angle-right"></i> Contact Us</a>
                        </li>
                        <li>
                            <a href="#destinations" class="text-light"><i class="fas fa-angle-right"></i>
                                Destinations</a>
                        </li>
                        <li>
                            <a href="#packages" class="text-light"><i class="fas fa-angle-right"></i> Packages</a>
                        </li>
                        <li>
                            <a href="#about" class="text-light"><i class="fas fa-angle-right"></i> About</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <h5>Support Links</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#faq" class="text-light"><i class="fas fa-angle-right"></i> Live Support</a>
                        </li>
                        <li>
                            <a href="#faq" class="text-light"><i class="fas fa-angle-right"></i> Frequently Asked
                                Questions</a>
                        </li>
                        <li>
                            <a href="#terms" class="text-light"><i class="fas fa-angle-right"></i> Terms of Service</a>
                        </li>
                        <li>
                            <a href="#privacy" class="text-light"><i class="fas fa-angle-right"></i> Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#support" class="text-light"><i class="fas fa-angle-right"></i> Cookie Policy</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <h5>Newsletter</h5>
                    <p>
                        Subscribe to stay updated on our latest adventures and special
                        offers.
                    </p>
                    <form>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Your Email" required />
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>

            <hr class="bg-secondary my-4" />

            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p>
                        &copy; <span id="year"></span> Pearl Global Tours and Travel. All Rights
                        Reserved.
                        <script>
                        document.getElementById("year").textContent =
                            new Date().getFullYear();
                        </script>
                    </p>
                </div>

                <div class="col-md-6 text-center text-md-end">
                    <a href="#top" class="btn btn-outline-light btn-sm rounded-pill">
                        Back to Top &nbsp; <i class="fas fa-arrow-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>