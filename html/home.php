<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php include "nav.php" ?>
    <div class="homepage">
        <div class="slidebar">
        </div>
        <div class="form-bar">
            <div class="form-nav">
                <div class="form-nav-item1"> <i class="fa-solid fa-plane-up"></i> Search Flight </div>
                <div class="form-nav-item2"> <i class="fa-solid fa-tag fa-rotate-90"></i> Booking </div>
                <div class="form-nav-item3"> <i class="fa-regular fa-square-check"></i> Check In </div>
                <div class="form-nav-item4"> <i class="fa-regular fa-clock"></i> Flight Status </div>
            </div>

            <div class="form-from-input">
                <input type="text" name="from" id="from" placeholder="From">
            </div>
            <div class="arrow-icon"> <i class="fa fa-arrow-right fa-3x" aria-hidden="true"></i></div>
            <div class="form-to-input">
                <input type="text" name="to" id="to" placeholder="To">
            </div>

            <div class="form-departing">
                <input placeholder="Departing Date" type="text" onfocus="(this.type = 'date')">
            </div>

            <div class="form-dropdown">
                <div class="form-passenger">Passenger:
                    <div class="custom-select">
                        <select class="passenger">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-submit">
                <button class="search-button"><a href="searchFlight.php"> Search</a></button>
            </div>
        </div>  
    </div>
    <div class="homepage-services">
        <h1> Plan your trip and travel with confidence. </h1>
        <h3>From booking services to help in travel plans, you can expect a lot along your journey.</h3>
        <div class="card-1">
            <div class="card-text-head">
                <h2>Flight Booking </h2>
            </div>
            <div class="card-img1"></div>
            <div class="card-body">
                <p class="card-text">Our airline offers easy and efficient booking for travelers to many destinations.</p>
            </div>
        </div>
        <div class="card-2">
            <div class="card-text-head">
                <h2>In-flight Services</h2>
            </div>
            <div class="card-img2"></div>
            <div class="card-body">
                <p class="card-text">We make flying comfortable with meals, entertainment, and comfortable seating.</p>
            </div>
        </div>
        <div class="card-3">
            <div class="card-text-head">
                <h2>Baggage</h2>
            </div>
            <div class="card-img3"></div>
            <div class="card-body">
                <p class="card-text">We handle baggage efficiently and safely to ensure it arrives in the same condition.</p>
            </div>
        </div>
        <div class="card-4">
            <div class="card-text-head">
                <h2>Safety and security</h2>
            </div>
            <div class="card-img4"></div>
            <div class="card-body">
                <h2 class="card-text">We follow strict safety protocols and use technology for passenger's safe travel.</h2>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script src="./js/slider.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/search.js"></script>

</body>

</html>