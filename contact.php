<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Pandomi Tech Innovations</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            line-height: 1.6;
        }

        .container {
            width: 85%;
            margin: auto;
            overflow: hidden;
        }

        /* Header Styles */
        header {
            background-color: #242f4b;
            color: #fff;
            padding: 1rem 0;
        }

        header h1 {
            margin: 0;
            font-size: 1.75rem;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: #fff !important;
            padding: 0.5rem 1rem;
            font-size: 1rem;
        }

        .navbar-nav .nav-link:hover {
            color: #b52233 !important;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 0.25rem;
        }

        /* Contact Section Styles */
        .contact {
            padding: 4rem 0;
            background-color: #f9f9f9;
        }

        .contact h2 {
            margin-bottom: 2rem;
            color: #242f4b;
            font-size: 2rem;
            text-align: center;
        }

        .contact p {
            font-size: 1.25rem;
            color: #555;
            text-align: center;
            max-width: 800px;
            margin: auto;
        }

        .contact a {
            color: #b52233;
            text-decoration: none;
        }

        .contact a:hover {
            text-decoration: underline;
        }

        /* Footer Styles */
        footer {
            background-color: #b52233;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
        }

        footer p {
            margin: 0;
        }

        footer a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Pandomi Tech Innovations</h1>
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <section class="contact">
            <div class="container">
                <h2>Contact Us</h2>
                <p>Email: <a href="mailto:info@pandomitech.com">info@pandomitech.com</a></p>
                <p>Phone: <a href="tel:+123456789">+123 456 789</a></p>

                <!-- Updated Contact Form -->
                <form class="row g-3 mt-4 needs-validation" novalidate>
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                        <div class="invalid-feedback">
                            Please provide your name.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                        <div class="invalid-feedback">
                            Please provide a valid email.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" class="form-control" id="phone" placeholder="Your Phone Number" required>
                        <div class="invalid-feedback">
                            Please provide a phone number.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" placeholder="Subject" required>
                        <div class="invalid-feedback">
                            Please provide a subject.
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Your Message" required></textarea>
                        <div class="invalid-feedback">
                            Please provide a message.
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Pandomi Tech Innovations</p>
            <p><a href="https://wa.me/0758882563">Developed by Pandomi Tech Innovations</a></p>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- Form Validation Script -->
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>
</html>
