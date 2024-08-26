<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="bg-light py-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div id="menu-toggle" class="menu-toggle">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="https://res.cloudinary.com/demo/image/upload/v1629824638/sample.jpg" alt="Logo" class="img-fluid">
                
                </a>

                
                
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About Me</a></li>
                        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#clients">Clients</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="#pages">Pages</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <form id="uploadForm">
  <input type="file" name="file" id="fileInput" required />
  <button type="submit">Upload</button>
</form>

<div id="statusMessage"></div>

    <script>
        document.getElementById('uploadForm').addEventListener('submit', function (event) {
  event.preventDefault();  // Prevent the default form submission

  // Get the file input element and the selected file
  const fileInput = document.getElementById('fileInput');
  const file = fileInput.files[0];

  // Ensure a file is selected before proceeding
  if (!file) {
    document.getElementById('statusMessage').innerText = 'Please select a file first!';
    return;
  }

  // Update UI to show that the file is being uploaded
  document.getElementById('statusMessage').innerText = 'Uploading...';

  const formData = new FormData();
  formData.append('file', file);
  formData.append('categorization', 'google_tagging:en:fr:es');
  formData.append('auto_tagging', '0.6');
  formData.append('timestamp', '173719931');
  formData.append('api_key', '436464676');
  formData.append('signature', 'a781d61f86a6f818af');

  fetch('https://api.cloudinary.com/v1_1/demo/image/upload', {
    method: 'POST',
    body: formData
  })
  .then(response => response.json())
  .then(data => {
    // Handle success
    document.getElementById('statusMessage').innerText = 'Upload successful!';
    console.log(data);  // You can handle the response here, e.g., show the image URL
  })
  .catch(error => {
    // Handle errors
    document.getElementById('statusMessage').innerText = 'Upload failed! Please try again.';
    console.error('Error:', error);
  });
});

    </script>
    
    
    
    <section id="home" class="hero d-flex align-items-center">
        <div class="container text-center">
            <div class="social-links mb-3">
                <a href="#"><i class="fab fa-facebook-f mx-2"></i></a>
                <a href="#"><i class="fab fa-twitter mx-2"></i></a>
                <a href="#"><i class="fab fa-pinterest-p mx-2"></i></a>
                <a href="#"><i class="fab fa-slack mx-2"></i></a>
                <a href="#"><i class="fab fa-instagram mx-2"></i></a>
            </div>
            <h1>We Are</h1>
            <p>Stack Developer</p>
            <div class="scroll-down mt-4">
                <a href="#services"><i class="fas fa-chevron-down"></i></a>
            </div>
        </div>
    </section>
    <section id="services" class="py-5">
        <div class="container text-center">
            <h2>Services</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="service-item mb-4">
                        <img src="https://res.cloudinary.com/demo/image/upload/v1629824638/sample.jpg" alt="Web Design" class="img-fluid mb-3">
                        <h3>Web Design</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item mb-4">
                        <img src="https://res.cloudinary.com/demo/image/upload/v1629824638/sample.jpg" alt="Graphic Design" class="img-fluid mb-3">
                        <h3>Graphic Design</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item mb-4">
                        <img src="https://res.cloudinary.com/demo/image/upload/v1629824638/sample.jpg" alt="SEO" class="img-fluid mb-3">
                        <h3>SEO</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="about" class="py-5 bg-light">
        <div class="container text-center">
            <h2>About Me</h2>
            <p>Short bio about yourself.</p>
        </div>
    </section>
    <section id="skills" class="py-5">
        <div class="container text-center">
            <h2>Skills</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="skill-item mb-4">
                        <h3>HTML</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="skill-item mb-4">
                        <h3>CSS</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="skill-item mb-4">
                        <h3>JavaScript</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="portfolio" class="py-5 bg-light">
        <div class="container text-center">
            <h2>Portfolio</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="portfolio-item mb-4">
                        <h3>Project 1</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-item mb-4">
                        <h3>Project 2</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="portfolio-item mb-4">
                        <h3>Project 3</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="clients" class="py-5">
        <div class="container text-center">
            <h2>Clients</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="client-item mb-4">
                        <h3>Client 1</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="client-item mb-4">
                        <h3>Client 2</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="client-item mb-4">
                        <h3>Client 3</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Contact</h2>
            <form id="contact-form" class="mt-4">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </section>
    <footer class="bg-dark text-white py-3 text-center">
        <p>&copy; 2024 Jonathan Doe. All rights reserved.</p>
    </footer>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script src="scripts.js"></script>
</body>
</html>

{{-- css --}}
<style>



body, html {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}
.menu-toggle {
    position: fixed;
    top: 20px; /* Adjust as needed */
    left: 20px; /* Adjust as needed */
    cursor: pointer;
    z-index: 1000; /* Ensure it's above other elements */
}
.navbar-brand img {
    width: 200px; /* example width */
    height: 100px; /* example height */
}


.bar {
    width: 30px;
    height: 3px;
    background-color: #333;
    margin: 5px 0;
    transition: transform 0.3s, opacity 0.3s;
}
/* Hide menu toggle button by default */
.menu-toggle {
    display: none;
}

/* Show menu toggle button on smaller screens */
@media (max-width: 992px) {
    .menu-toggle {
        display: block;
    }
}

/* Initial position of bars */
.menu-toggle.open .bar:nth-child(1) {
    transform: translateY(8px) rotate(45deg);
}

.menu-toggle.open .bar:nth-child(2) {
    opacity: 0;
}

.menu-toggle.open .bar:nth-child(3) {
    transform: translateY(-8px) rotate(-45deg);
}




header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 50px;
    background-color: #fff;
}

.logo {
    font-size: 24px;
    font-weight: bold;
    color: #ff6347;
}

nav ul {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
}

nav ul li {
    margin-left: 20px;
}

nav ul li a {
    text-decoration: none;
    color: #000;
    font-weight: bold;
}

.hero {
    background: url('https://res.cloudinary.com/demo/image/upload/v1629824638/sample.jpg') no-repeat center center;
    background-size: cover;
    height: 100vh;
    color: white;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
}

.hero-content {
    z-index: 1;
}

.social-links {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
}

.social-links a {
    margin: 0 10px;
    color: #fff;
    font-size: 20px;
}

.hero h1 {
    font-size: 50px;
    margin: 0;
}

.hero p {
    font-size: 24px;
    margin: 10px 0;
    border: 2px solid #fff;
    padding: 10px 20px;
}

.scroll-down {
    position: absolute;
    bottom: 20px;
}

.scroll-down a {
    color: #ff6347;
    font-size: 24px;
    text-decoration: none;
}

section {
    padding: 60px 20px;
    text-align: center;
}

section h2 {
    font-size: 36px;
    margin-bottom: 20px;
}

.service-list, .skills-list, .portfolio-list, .clients-list {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.service-item, .skill-item, .portfolio-item, .client-item {
    background-color: #f4f4f4;
    padding: 20px;
    border-radius: 10px;
    width: 200px;
    text-align: center;
}

form {
    display: flex;
    flex-direction: column;
    gap: 10px;
    align-items: center;
}

form label {
    font-size: 18px;
}

form input, form textarea, form button {
    width: 100%;
    max-width: 500px;
    padding: 10px;
    font-size: 16px;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
}



/* styles.css */

/* Custom styling for toggler icon */
.navbar-toggler {
    border: none;
    background: transparent;
}

.navbar-toggler:focus {
    outline: none;
}

.navbar-toggler-icon {
    background-image: url('data:image/svg+xml;charset=utf8,<svg viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg"><path stroke="rgba(0, 0, 0, 0.5)" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"/></svg>');
}

/* Custom styling for expanded menu */
.navbar-collapse {
    background-color: #f8f9fa; /* Change as per your preference */
    border-radius: 5px;
    padding: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.navbar-nav .nav-link {
    color: #333; /* Change as per your preference */
}

.navbar-nav .nav-link:hover {
    color: #007bff; /* Change as per your preference */
}

/* Custom CSS */
.portfolio-items,
.client-logos {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.portfolio-item,
.client-logo {
    flex: 0 0 calc(33.333% - 30px);
    margin: 15px;
    text-align: center;
}

@media (max-width: 768px) {
    .portfolio-item,
    .client-logo {
        flex: 0 0 calc(50% - 30px);
    }
}

@media (max-width: 576px) {
    .portfolio-item,
    .client-logo {
        flex: 0 0 calc(100% - 30px);
    }
}
.custom-toggler {
    border: none;
    background: transparent;
    cursor: pointer;
    outline: none;
}

.custom-toggler .custom-toggler-icon {
    width: 24px;
    height: 2px;
    background-color: #333;
    display: block;
    position: relative;
    transition: background-color 0.3s ease;
}

.custom-toggler .custom-toggler-icon::before,
.custom-toggler .custom-toggler-icon::after {
    content: '';
    width: 24px;
    height: 2px;
    background-color: #333;
    position: absolute;
    transition: transform 0.3s ease;
}

.custom-toggler .custom-toggler-icon::before {
    top: -8px;
}

.custom-toggler .custom-toggler-icon::after {
    bottom: -8px;
}

.navbar-collapse.show + .custom-toggler .custom-toggler-icon {
    background-color: transparent;
}

.navbar-collapse.show + .custom-toggler .custom-toggler-icon::before {
    transform: rotate(45deg);
    top: 0;
}

.navbar-collapse.show + .custom-toggler .custom-toggler-icon::after {
    transform: rotate(-45deg);
    bottom: 0;
}



</style>

{{-- javascript --}}
<script>document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById('menu-toggle');
    const navbarNav = document.getElementById('navbarNav');

    menuToggle.addEventListener('mouseenter', function () {
        navbarNav.classList.add('show');
        menuToggle.classList.add('open');
    });

    navbarNav.addEventListener('mouseleave', function () {
        navbarNav.classList.remove('show');
        menuToggle.classList.remove('open');
    });
});
</script>
<script>
// Smooth scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Form validation
document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault();
    // Basic form validation
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const message = document.getElementById('message').value.trim();
    if (name && email && message) {
        alert('Form submitted successfully!');
        // Add your form submission code here
    } else {
        alert('Please fill out all fields.');
    }
});
</script>

<script>
    // scripts.js

document.addEventListener("DOMContentLoaded", function () {
    const navbarToggler = document.getElementById('navbar-toggler');
    const navbarNav = document.getElementById('navbarNav');

    navbarToggler.addEventListener('click', function () {
        navbarNav.classList.toggle('show');
    });
});

</script>

