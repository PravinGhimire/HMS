<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Site metas -->
    <title>About Us - SajiloStay</title>
    <meta name="description" content="Learn more about SajiloStay, our mission, our values, and meet our dedicated team.">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <style>
            body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
        }

        .about-banner {
            position: relative;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/hotel1.jpg') center/cover;
            height: 45vh; /* Adjust the height as needed */
    color: #fff;
    display: flex;
    align-items: flex-end; /* Aligns the content at the bottom */
    justify-content: center;
    text-align: center;
    padding-bottom: 20px; /* Add padding to create some space from the bottom */
}

.about-banner h1 {
    font-size: 2.5rem;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 2px;
}

        .about-section {
            padding: 80px 0;
            background-color: #fff;
        }

        .about-title {
            font-size: 2.5rem;
            color: #333;
            text-align: center;
            margin-bottom: 40px;
            font-weight: bold;
            position: relative;
        }

        .about-title::after {
            content: "";
            width: 50px;
            height: 4px;
            background-color: #007bff;
            display: block;
            margin: 20px auto;
        }

        .about-content {
            display: flex;
            align-items: center;
            gap: 50px;
            margin-bottom: 50px;
        }

        .about-text {
            max-width: 600px;
        }

        .about-text p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #666;
        }

        .staff-section {
            background-color: #f8f9fa;
            padding: 80px 0;
            text-align: center;
        }

        .staff-title {
            font-size: 2.5rem;
            margin-bottom: 40px;
            color: #333;
        }

        .staff-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s;
            padding: 30px;
            text-align: center;
            position: relative;
        }

        .staff-card:hover {
            transform: translateY(-10px);
        }

        .staff-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
            object-fit: cover;
            box-shadow: 0 0 15px rgba(0, 123, 255, 0.5);
        }

        .staff-name {
            font-size: 1.3rem;
            font-weight: bold;
            color: #333;
        }

        .staff-position {
            font-size: 1rem;
            color: #666;
            margin-bottom: 15px;
        }

        .staff-socials {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .staff-socials a {
            font-size: 1.5rem;
            color: #007bff;
            transition: color 0.3s;
        }

        .staff-socials a:hover {
            color: #0056b3;
        }

        /* Animate section when scrolling */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s ease-out;
        }

        .animate-on-scroll.show {
            opacity: 1;
            transform: translateY(0);
        }

        .container-fluid {
            padding: 0 60px;
        }

        @media (max-width: 768px) {
            .about-content {
                flex-direction: column;
            }
        }
        .stats-section {
    background-color: #f8f9fa;
}

.stats-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
}

/* .stats-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
} */

.stat-item {
    text-align: center;
    padding: 18px;
}

.stats-count {
    font-size: 2.5rem;
    font-weight: bold;
    color: #007bff;
    margin: 10px 0;
}

.stats-label {
    font-size: 1.2rem;
    color: #666;
}

.stats-card i {
    color: #007bff;
}


    </style>
</head>

<body>
    <!-- Header -->
    <header>
        @include('header')
    </header>

    <!-- About Banner -->
    <section class="about-banner">
        <h1>About SajiloStay</h1>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <h2 class="about-title">Our Story</h2>
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text animate-on-scroll">
                        <p>Welcome to SajiloStay, your perfect escape in the city. Our hotel offers a blend of modern comfort and traditional warmth, ensuring every guest experiences the utmost relaxation. Located in a prime area, our hotel is surrounded by cultural landmarks, trendy restaurants, and scenic spots.</p>
                        <p>At SajiloStay, we believe in delivering personalized services, making sure every guest feels at home. Our beautifully designed rooms and premium amenities cater to travelers of all kinds, ensuring an unforgettable stay.</p>
                        <a href="/about" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="images/about.jpg" alt="SajiloStay Interior" class="img-fluid animate-on-scroll" />
                </div>
            </div>
        </div>
    </section>

    <!-- Staff Section -->
    <section class="staff-section">
        <div class="container">
            <h2 class="staff-title">Meet Our Team</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="staff-card animate-on-scroll">
                        <img src="images/manager.jpg" alt="Staff 1" class="staff-photo">
                        <h3 class="staff-name">Hari</h3>
                        <p class="staff-position">General Manager</p>
                        <div class="staff-socials">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="staff-card animate-on-scroll">
                        <img src="images/staff2.jpg" alt="Staff 2" class="staff-photo">
                        <h3 class="staff-name">Rita </h3>
                        <p class="staff-position">Head of Guest Services</p>
                        <div class="staff-socials">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="staff-card animate-on-scroll">
                        <img src="images/staff1.jpg" alt="Staff 3" class="staff-photo">
                        <h3 class="staff-name">Ram</h3>
                        <p class="staff-position">Executive Chef</p>
                        <div class="staff-socials">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Stats Section -->
<section class="stats-section py-5 bg-light">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <div class="stats-card bg-white py-4 rounded shadow-sm d-flex justify-content-around align-items-center">
                    <div class="stat-item">
                        <i class="fas fa-calendar-check fa-3x mb-2"></i>
                        <h3 class="stats-count" id="bookings-count">150</h3>
                        <p class="stats-label">Bookings</p>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-globe fa-3x mb-2"></i>
                        <h3 class="stats-count" id="site-visits-count">500</h3>
                        <p class="stats-label">Site Visits</p>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-comments fa-3x mb-2"></i>
                        <h3 class="stats-count" id="feedbacks-count">40</h3>
                        <p class="stats-label">Feedbacks</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




    <!-- Footer -->
    <footer>
        @include('footer')
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script>
        // Scroll animation function
        window.addEventListener('scroll', function () {
            const elements = document.querySelectorAll('.animate-on-scroll');
            const windowHeight = window.innerHeight;

            elements.forEach(function (el) {
                const position = el.getBoundingClientRect().top;

                if (position < windowHeight - 100) {
                    el.classList.add('show');
                }
            });
        });
        // Function to animate counting effect
    function animateCount(id, endValue) {
        const element = document.getElementById(id);
        let startValue = 0;
        const duration = 2000; // Animation duration in milliseconds
        const stepTime = Math.abs(Math.floor(duration / endValue));
        
        const timer = setInterval(() => {
            startValue += 1;
            element.textContent = startValue;
            if (startValue >= endValue) {
                clearInterval(timer);
                element.textContent = endValue; // Ensure the final value is set
            }
        }, stepTime);
    }

    // Example values, replace with dynamic data as needed
    window.addEventListener('load', () => {
        animateCount('bookings-count', 150);
        animateCount('site-visits-count', 499);
        animateCount('feedbacks-count', 40);
    });
    </script>
</body>

</html>
