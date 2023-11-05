<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SAROWAR HOTEL</title>
    
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="./css/style.css">

</head>
<body>

    <!-- header -->

<header class="header">
     <a href="#" class="logo"><i class="fa-solid fa-hotel"></i>HOTEL SAROWAR</a> 
    
<nav class="navbar">
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#room">Room</a>
    <a href="services.php">Services</a>
    <a href="gallery.php">Gallery</a>
    <a href="contact.php">contact</a>
    <a href="book.php" class="btn">book now</a>
</nav>

<div id="menu-btn"class="fa fa-bars"></div>


</header>

<!-- home -->
<section class="home" id="home">
    <div class="swiper-slide slide" style="background: url(img/hotel-sarowar.jpg) no-repeat;">
    </div>
</section>

<!-- end -->

<!-- about -->

<section class="about" id="about">
<div class="row">
    <div class="image">
        <img src="img/image4.jpg" alt="">
    </div>

    <div class="content">
    <h3>About us</h3>
    <p>This upscale Swiss International Hotel Sarowar-Pokhara is a 4-star property located about 20 minutes by foot from the style World Peace Pagoda Buddhist Monument. Boasting location next to Damside, the smoke free hotel offers 96 rooms together with a poolside bar onsite.</p>
    <p>Fewa Lake is nearly 25 minutes' walk away. The city centre of Pokhara can be reached in 25 minutes on foot. There is the expansive International Mountain Museum nearly 25 minutes' walk away, and Tourist Park a mere 0.8 km from this Pokhara hotel.</p>
    <p>The rooms of Swiss International Hotel Sarowar-Pokhara feature elegant furniture.</p>
    <p>A continental breakfast is also offered onsite. The hotel has a bar with a spacious terrace and a lounge. You may walk 5 minutes to Yarsa The Thakali Kitchen or eat by Caffe Italiano, located 100 metres away. Additional facilities at this Pokhara property include children's menu, a mini club and a wading pool for guests with children. There is a fitness room in the upscale accommodation.</p>
</div>
</div>

</section>


   <section class="room" id="room">
    <h1 class="heading">Our Room</h1>

    <div class="card-slider-container">
        <div class="card-slider">
            <div class="card">
                <div class="image">
                    <span class="price">$65/night</span>
                    <img src="img/Deluxe Twin Room.jpg" alt="Deluxe Twin Room">
                </div>
                <div class="content">
                    <h3>Deluxe Twin Room- 2 people / 26m<sup>2</sup></h3>
                    <p>The Deluxe Twin Room, starting at just $65 per night, provides a comfortable stay for two people in a spacious 26m² area with complimentary WiFi and other amenities.</p>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <span class="price">$65/night</span>
                    <img src="img/Deluxe Queen Room.jpg" alt="Deluxe Queen Room">
                </div>
                <div class="content">
                    <h3>Deluxe Queen Room- 2 people / 26m<sup>2</sup></h3>
                    <p>Embrace the comfort of our spacious 26m² Queen Bed room, designed for two guests, where you can enjoy complimentary WiFi at a budget-friendly starting price of just $65.</p>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <span class="price">$65/night</span>
                    <img src="img/Superior Twin Room.jpg" alt="Superior Twin Room">
                </div>
                <div class="content">
                    <h3>Superior Twin room- 2 people / 21m<sup>2</sup></h3>
                    <p>In our well-appointed Twins/Queen Bed room, priced at just $65, you'll find a comfortable and inviting space complemented by a wide range of amenities to enhance your stay.</p>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <span class="price">$65/night</span>
                    <img src="img/Superior Queen Room.jpg" alt="Superior Queen Room">
                </div>
                <div class="content">
                    <h3>Superior Queen Room- 2 people / 21m<sup>2</sup></h3>
                    <p>Relax in our Queen Bed room with additional amenities, including a minibar fridge, non-smoking environment, and a variety of in-room conveniences to enhance your stay.</p>
                </div>
            </div>
            <div class ="card">
                <div class="image">
                    <span class="price">$80/night</span>
                    <img src="img/Sarowar Select Room.jpg" alt="Sarowar Select Room">
                </div>
                <div class="content">
                    <h3>Sarowar Select Room- 2 people / 32m<sup>2</sup></h3>
                    <p>Our spacious 32m² room, priced from $80 for two people, offers a host of amenities, including a living area, flat-screen TV, and cozy comforts, to make your stay memorable.</p>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <span class="price">$80/night</span>
                    <img src="img/Phewa Suite Room.jpg" alt="Phewa Suite Room">
                </div>
                <div class="content">
                    <h3>Phewa Suite Room- 2 people / 37m<sup>2</sup></h3>
                    <p>Our spacious 37m² room, priced at $80, includes free WiFi and an array of amenities, cozy comforts, and a variety of in-room conveniences to enhance your stay.</p>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <span class="price">$100/night</span>
                    <img src="img/Presidential Suite.jpg" alt="Presidential Suite">
                </div>
                <div class="content">
                    <h3>Presidential Suite / 98m<sup>2</sup></h3>
                    <p>Our Presidential Suite, starting from $100, offers free WiFi and a wide range of amenities, including a living room area, sauna, kitchen, and dining table, to ensure a luxurious stay.</p>
            </div>
        </div>
    </div>

    <div class="navigation-buttons">
        <button class="prev-button" onclick="changeCard(-1)">Previous</button>
        <button class="next-button" onclick="changeCard(1)">Next</button>
    </div>
</section>

<script src="script.js"></script>

<section>
    <div class="view">
        <form action="addreview.php" method="post" onsubmit="return validateForm()">
            <fieldset>
            <label style="font-size: 18px;">Name:</label>
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <span class="error" id="nameError"></span><br>
            <label style="font-size: 18px;">Review:</label>
            <input type="text" name="review" id="review" placeholder="Enter your review" style="width: 500px;">
            <button type="submit">Submit</button>
            </fieldset>
        </form>
        <script>
            function validateForm(){
            name = document.getElementById('name').value;
            nameError = document.getElementById('nameError');
            if (!name) {
            nameError.textContent = 'Please enter your name.';
            } else {
                nameError.textContent = '';
            }
            return !(nameError.textContent);
        }
        </script>
    </div>
</section>
<section>
    <div class="gallery">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sarowar";

    // Create a connection to the existing database
    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve student data from the "review" table
    $sql = "SELECT name,review FROM review";
    $result = $conn->query($sql);

    if ($result !== false && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $name = $row['name'];
            $review = $row['review'];
    ?>
    <div class="review">
        <h1><?php echo $name; ?></h1>
        <p>Review: <?php echo $review; ?></p>
    </div>
    <?php
        }
    } else {
        echo "";
    }

    $conn->close();
    ?>
</div>
</section>
</body>

</html>