<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="./css/contact.css">
<head>
    <title>contactInfo</title>
</head>
    <body>
        <section class="contact">
            <div class="content">
                <h2>Contact Us</h2>
            </div>
            <div class="container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>Street-14, Lakeside,<br>Pokhara</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa-solid fa-phone"></i></div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>+977 61506301</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa-regular fa-envelope"></i></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>reception@hotelsarowar.com</p>
                        </div>
                    </div>

                </div>
                <div class="contact-form">
                    <form method="post" action="addqueries.php">
                        <h2>Send Message</h2>
                        <div class="inputBox">
                            <input type="text" name="name" id="name" required="reguired">
                            <span>Full Name</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="email" id="email" required="reguired">
                            <span>Email</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="phone" id="phone" required="reguired">
                            <span>Mobile No</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="message" id="message" style="width: 580px;height: 50px;" placeholder="Enter Your Queries">
                    
                        </div>
                        <div class="inputBox">
                            <input type="submit" name="" value="Send">
                    </form>
                </div>
            </div>
        </section>
         <div class="mapp">
            <h1 style="color: black;">Map</h1>
            <!-- <a target="_blank" href=""><img src="./img/map1.jpg"></a> -->
            <a target="_blank" href="https://www.google.com/maps/place/Hotel+Sarowar/@28.2091459,83.9570809,17.8z/data=!4m9!3m8!1s0x3995951e9cb03e75:0x4a427e142153b30c!5m2!4m1!1i2!8m2!3d28.209302!4d83.9582466!16s%2Fg%2F11cs6hdh85?authuser=0&entry=ttu"><img src="./img/map2.jpg"></a>
        </div>
    </body>
</html>