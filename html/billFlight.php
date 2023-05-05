<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Flights</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/search.css">

</head>

<body>
    <header>
        <?php include 'nav.php' ?>
        <nav class="search_menu_bar">

        </nav>
    </header>

    <div class="bill-main-lable">
        Your Flight
    </div>


    <div class="bill-details-div" id="main">
        <div class="bill-from-to">
            <p class="bill-detail-div-bold">Delhi to Bangkok</p>
            <p class="bill-detail-div-normal">Wednesday, 31 May 2023</p>
        </div>
        <div class="bill-time">
            <div class="search-list-start-time">
                <div class="search-lable-start-time">
                    07:00
                </div>
                <div class="search-lable-start-city">
                    Delhi
                </div>

            </div>
            <div class="search-list-end-time">
                <div class="search-lable-end-time">
                    09:00
                </div>
                <div class="search-lable-end-city">
                    Mumbai
                </div>
            </div>
        </div>
        <div class="bill-detail-lable">
            <div class="bill-duration">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                Duration 2h 15min
            </div>
            <div class="bill-airline">
                <i class="fa fa-plane" aria-hidden="true"></i>
                Operated by JLV Airline
            </div>
        </div>
    </div>
    <div class="bill-final">
        <p class="bill-text-bold">Booking Total: INR 45,156</p>
        <button class="bill-continue"><a href="passenger.php"> Fill passanger detail </a></button>
    </div>
</body>