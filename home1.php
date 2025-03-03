<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgeWell - Elderly Care Platform</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
        }
        .wrapper {
            width: 90%;
            margin: 0 auto;
        }
        header {
            width: 100%;
            height: 100px;
            background-color: #32be8f;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }
        .logo {
            width: 30%;
            float: left;
            line-height: 100px;
            color: white;
            font-size: 24px;
            font-weight: bold;
        }
        nav {
            float: right;
            line-height: 100px;
        }
        nav a {
            text-decoration: none;
            font-family: "Poppins";
            letter-spacing: 2px;
            font-size: 20px;
            color: white;
            padding: 36px 10px;
            margin: 0 1px;
        }
        nav a:hover {
            color: #333333;
        }
        .banner-area {
            position: relative;
            background-size: cover;
            background-position: center;
            height: 550px;
            width: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            margin-top: 100px;
        }
        .banner-area img {
            width: 100%;
            height: 550px;
            object-fit: cover;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(71, 70, 70, 0.556);
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 2rem;
            font-weight: bold;
        }
        .services-section {
            padding: 50px 0;
            background-color: #f4f4f4;
        }
        .services-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .service-card {
            width: 30%;
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .service-card i {
            font-size: 3rem;
            color: #32be8f;
            margin-bottom: 20px;
        }
        .service-card h3 {
            margin-bottom: 15px;
            color: #32be8f;
        }
        /* Search Bar Styling */
        .search-bar {
            text-align: center;
            margin-top: 20px;
            position: relative;
        }
        .search-bar select, .search-bar button {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 20px;
            outline: none;
        }
        .search-bar select {
            width: 60%;
            max-width: 400px;
            margin-right: 10px;
        }
        .search-bar button {
            background-color: #32be8f;
            color: white;
            border: none;
            cursor: pointer;
        }
        .search-bar button:hover {
            background-color: #28a476;
        }
        /* Google Map Container */
        #map {
            width: 100%;
            height: 500px;
            margin-top: 20px;
        }
        .footer {
            background-color: #32be8f;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
        about-section {
            height: 600px; 
            padding: 50px;
            background-color: #f2f2f2;
            text-align: center;
            line-height: 100px;
         }
         .about-section h2{
            font-size: 2.5rem;
            line-height: 60px;
            font-size: 35px;
         }
         .about-section p{
            font-size: 1.5rem;
            line-height: 50px;
            font-size: 20px;
         }
         .overlay {
           position: absolute; 
           top: 0;
           left: 0;
           width: 100%;
           height: 550px;
           background-color:rgba(71, 70, 70, 0.556);
           z-index: 1;
         }
         .banner-area h2 {
           padding-top: 150px;
           position: relative; 
           color: white; 
           text-align: center;
           font-family: 'Poppins', sans-serif;
         }
         .banner-area .button {
           margin-top: 25px;
           position: relative; 
           z-index: 2; 
           background-color: #32be8f; 
           text-align: center;
           color:white ;
           outline: none;
           border-radius: 5px;
           width:150px;
           height:50px;
           font-weight: bold ;
           font-size: large;
           border-color: #32be8f;
         }
         .banner-area .button:hover{
            color:black;
            background-color: #38d39f;
         }
         section {
  position: relative;
  z-index: 3;
  padding-top: 20px;
  padding-bottom: 50px;
}
.container {
  max-width: 1080px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 20px;
  padding-right: 20px;
}
.section-header {
  margin-bottom: 50px;
  text-align: center;
}
.section-header h2 {
  color:#32be8f ;
  font-weight: bold;
  font-size: 3em;
  margin-bottom: 20px;
}
.section-header p {
  color: black;
}
.row  {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
}
.contact-info {
  width: 50%;
}
.contact-info-item {
  display: flex;
  margin-bottom: 30px;
}
.contact-info-icon {
  height: 70px;
  width: 70px;
  background-color: #fff;
  text-align: center;
  border-radius: 50%;
}
.contact-info-icon i {
  font-size: 30px;
  line-height: 70px;
}
.contact-info-content {
  margin-left: 20px;
}
.contact-info-content h4 {
  color: #32be8f;
  font-size: 1.4em;
  margin-bottom: 5px;
  padding-top: 18px;
}
.contact-info-content p {
  color: black;
  font-size: 1em;
}
.contact-form {
  background-color: #fff;
  padding: 40px;
  width: 45%;
  padding-bottom: 20px;
  padding-top: 20px;
}
.contact-form h2 {
  font-weight: bold;
  font-size: 2em;
  margin-bottom: 10px;
  color: black;
}
.contact-form .input-box {
  position: relative;
  width: 100%;
  margin-top: 10px;
}
.contact-form .input-box input,
.contact-form .input-box textarea{
  width: 100%;
  padding: 5px 0;
  font-size: 16px;
  margin: 10px 0;
  border: none;
  border-bottom: 2px solid black;
  outline: none;
  resize: none;
}
.contact-form .input-box span {
  position: absolute;
  left: 0;
  padding: 5px 0;
  font-size: 16px;
  margin: 10px 0;
  pointer-events: none;
  transition: 0.5s;
  color: #32be8f;
}
.contact-form .input-box input:focus ~ span,
.contact-form .input-box textarea:focus ~ span{
  color: black;
  font-size: 12px;
  transform: translateY(-20px);
  font-family: "Poppins";
}
.contact-form .input-box input[type="submit"]
{
  width: 100%;
  background: #32be8f;
  color: #FFF;
  border: none;
  cursor: pointer;
  padding: 10px;
  font-size: 18px;
  border: 1px solid #32be8f;
  transition: 0.5s;
  font-family: "Poppins";
  border-radius: 30px;
}
.contact-form .input-box input[type="submit"]:hover
{
  background: #FFF;
  color: black;
  font-family: "Poppins";
}
.dropdown {
            position: relative;
            display: inline-block;
         }
         .dropdown-content {
            display: none;
            position: absolute;
            background-color: #38d39f;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            padding: 0;
            width: 300px;
            z-index: 1000;
         }
         .dropdown-content a {
            color: white;
            padding: 0 4px;
            text-decoration: none;
            display: block;
            text-align: left;
            line-height: 2.5;
            font-size: 17px;
         }
         .dropdown-content a:hover {
            color: #333333;
         }
         .dropdown:hover .dropdown-content {
            display: block;
         }
    </style>
</head>
<body>
    <header>
        <div class="wrapper">
            <div class="logo">
                AgeWell
            </div>
            <nav>
                <a href="#home">Home</a>
                <a href="#services">Services</a>
                <a href="#about">About</a>
                <a href="#contactus">Contact Us</a>
                <a href="profile.php">My Profile</a>
                <a href="logout.php">Logout</a>
            </nav>
        </div>
    </header>

    <div class="banner-area" id="home">
        <img src="img/b1.jpg" alt="Banner 1">
        <div class="overlay">
            Welcome to AgeWell!!
        </div>
    </div>

    <section id="services" class="services-section">
        <div class="wrapper">
            <h2 style="text-align: center; color:#32be8f; margin-bottom: 30px;">Our Services</h2>
            <div class="services-container">
                <div class="service-card">
                    <i class="fas fa-hands-helping"></i>
                    <a style="color:#38d39f; text-decoration:none;" href="caregiver.html">Care-giving Services</a>
                    <p>Personalized care support including home assistance, medical companionship, and daily activity help. Our trained professionals ensure compassionate and reliable care tailored to individual needs.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-stethoscope"></i>
                    <a style="color:#38d39f; text-decoration:none;" href="personalcare.html">Medical Services</a>
                    <p>Comprehensive medical support including telehealth consultations, medication management, healthcare coordination, and regular health check-ups. We prioritize your health and well-being.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-users"></i>
                    <a style="color:#38d39f; text-decoration:none;" href="companion.html">Social Services</a>
                    <p>Combat loneliness through community engagement. Join social groups, participate in virtual and in-person activities, connect with peers, and enjoy workshops designed for seniors.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-book-reader"></i>
                    <a style="color:#38d39f; text-decoration:none;" href="menheaquiz.html">Mental Health Support</a>
                    <p>Take a depression test now to check which category you fall into, so that you can improve yourself with our help.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-heartbeat"></i>
                    <a style="color:#38d39f; text-decoration:none;"  href="relart.html">Related Articles</a>
                    <p>Access counseling services, mental health resources, stress management workshops, and support groups. We provide holistic mental wellness support for seniors.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-hand-holding-heart"></i>
                    <a style="color:#38d39f; text-decoration:none;" href="personalcare.html">Personal Care Services</a>
                    <p>Our AI assistant will provide you solutions for your described condition. Contact nearby hospitals if the condition is severe.</p>
                </div>
            </div>
            <div class="search-bar">
                <select id="service-dropdown">
                    <option value="">Select a Service...</option>
                    <option value="Caregiving">Caregiving Services</option>
                    <option value="Medical">Medical Services</option>
                    <option value="Social">Social Services</option>
                    <option value="Mental Health">Mental Health Support</option>
                    <option value="Emergency">Emergency Response</option>
                    <option value="Family">Family Connection</option>
                </select>
                <button onclick="locateNearbyServices()">Locate Services Nearby</button>
            </div>
            <div id="map"></div>
                <div class="content-area">
                    <div class="wrapper">
                        <div class="about-section" id="about">
                            <br>
                            <br>
                            <h2 style="text-align: center; color:#32be8f;">About AgeWell</h2>
                            <p style="text-align: center; color:black;">AgeWell is a platform designed to support the elderly with caregiving services <br>
                                medical services and social connections for the elderly, <br> addressing loneliness and support needs. <br>
                                The platform is designed with simplicity and usability in mind, ensuring that elderly individuals <br>
                                can easily navigate, access caregiving services, find nearby medical resources, <br>
                                join social groups, and connect with others who share similar experiences. <br>
                                Whether you are seeking caregiving help, looking for medical support, <br>
                                or simply wanting to meet new friends, AgeWell is here to assist.</p>
                        </div>
                        <div id="contactus" class="contactus-section">
                            <br>
                            <br>
                            <section>
                               <div class="section-header">
                                 <div class="container">
                                   <h2>Contact Us</h2>
                                   <p>If you have any queries or issues with this site, reach out to us.</p>
                                 </div>
                               </div>
                               <div class="container">
                                 <div class="row">                             
                                   <div class="contact-info">                               
                                     <div class="contact-info-item">
                                       <div class="contact-info-icon">
                                         <i class="fas fa-phone"></i>
                                       </div>                                   
                                       <div class="contact-info-content">
                                         <h4>Phone</h4>
                                         <p>571-457-2321</p>
                                       </div>
                                     </div>                                 
                                     <div class="contact-info-item">
                                       <div class="contact-info-icon">
                                         <i class="fas fa-envelope"></i>
                                       </div>                                   
                                       <div class="contact-info-content">
                                         <h4>Email</h4>
                                        <p>agewell@gmail.com</p>
                                       </div>
                                     </div>
                                   </div>                              
                                   <div class="contact-form">
                                     <form action="" id="contact-form">
                                       <h2>Send Message</h2>
                                       <div class="input-box">
                                         <input type="text" required="true" name="">
                                         <span>Full Name</span>
                                       </div>                                  
                                       <div class="input-box">
                                         <input type="email" required="true" name="">
                                         <span>Email</span>
                                       </div>                                   
                                       <div class="input-box">
                                         <textarea required="true" name=""></textarea>
                                         <span>Type your Message...</span>
                                       </div>
                                       <div class="input-box">
                                         <input type="submit" value="Send" name="">
                                       </div>
                                     </form>
                                   </div>
                                 </div>
                               </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="wrapper">
            <p>&copy; 2024 AgeWell.</p>
        </div>
    </footer>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&libraries=places&callback=initMap" async defer></script>
    <script>
        let map;
        function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: -34.397, lng: 150.644 }, // Default location
                zoom: 12,
            });
        }
        function locateNearbyServices() {
            const selectedService = document.getElementById("service-dropdown").value;
            if (!selectedService) {
                alert("Please select a service to locate nearby.");
                return;
            }
            const request = {
                location: map.getCenter(),
                radius: '5000', // Radius in meters
                keyword: selectedService
            };
            const service = new google.maps.places.PlacesService(map);
            service.nearbySearch(request, (results, status) => {
                if (status === google.maps.places.PlacesServiceStatus.OK) {
                    results.forEach(place => {
                        const marker = new google.maps.Marker({
                            position: place.geometry.location,
                            map: map,
                            title: place.name
                        });
                    });
                } else {
                    alert("No nearby services found.");
                }
            });
        }
    </script>
</body>
</html>
