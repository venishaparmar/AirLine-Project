<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Flights</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/search.css">

</head>

<body>
    <header>
        <?php include 'nav.php' ?>
        <nav class="search_menu_bar">
            <div class="search-fromTo">
                Delhi - Mumbai
            </div>
            <div class="search-depDate">
                <div class="search-lable-depart">
                    Depart
                </div>
                <div class="search-lable-date">
                    Wed, 31 May
                </div>
            </div>
            <div class="search-div-passanger">
                <div class="search-lable-passanger">
                    Passangers
                </div>
                <div class="search-lable-num-pass">
                    2
                </div>
            </div>
            <div class="search-div-yourbook">
                <div class="search-icon-yourbook">
                    <i class="fa fa-shopping-cart fa-3x" aria-hidden="true"></i>
                </div>
                <p id="yourBooking">Your Booking
                </p>
            </div>
        </nav>
    </header>


    <div class="search-date-day">
        Wednesday, 31 May 2023
    </div>


    <section>
        <div class="search-flight-list-1" id="main">
            <div class="search-list-detail">
                <div class="search-list-time">
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
                <div class="search-duration">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    Duration 2h 15min
                </div>
                <div class="search-airline">
                    <i class="fa fa-plane" aria-hidden="true"></i>
                    Operated by JLV Airline

                </div>
            </div>

            <div class="search-class">
                <div class="search-economy" id="economy" onclick="joinEconomyDiv()">
                    <div class="search-class-label">
                        <p class="search-bold">Economy</p>
                        <p class="search-normal">from</p>
                        <p class="search-bold">INR <br>5316 <br></p>
                        <p class="search-normal">per passanger</p>
                        <div class="search-arrow-down">
                            <i id="economy-down" class="fa fa-angle-down fa-4x" style="color: white;" aria-hidden="true"></i>
                            <i id="economy-up" class="fa fa-angle-up fa-4x" style="color: white; display: none;" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="search-business" id="business" onclick="joinBuisnessDiv()">
                    <div class="search-class-label">
                        <p class="search-bold">Business</p>
                        <p class="search-normal">from</p>
                        <p class="search-bold">INR <br>22151 <br></p>
                        <p class="search-normal">per passanger</p>
                        <div class="search-arrow-down">
                            <i id="business-down" class="fa fa-angle-down fa-4x" style="color: white;" aria-hidden="true"></i>
                            <i id="business-up" class="fa fa-angle-up fa-4x" style="color: white; display: none;" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-economy-detail" id="addEcoDiv">
            <div class="search-details-main-lable">
                Select a Fare
            </div>
            <div class="search-fare-1">
                <div class="search-fare-1-head">
                    <div class="search-fare-head-lable">
                        <p class="search-fare-head-normal" style="display: inline;">INR</p>
                        <p class="search-fare-head-bold" style="display: inline;">5,316</p>
                        <p class="search-fare-head-normal">WEB SPECIAL</p>
                        <p class="search-fare-head-normal">ECONOMY</p>
                    </div>
                </div>
                <div class="search-fare-details">
                    <i class="fa fa-briefcase fa-2x" style="color:rgb(32, 5, 79)" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">Check-In Baggage</p>
                    <p class="search-fare-details-normal">25kg</p>
                    <i class="fa fa-cutlery fa-2x" style="color:rgb(32, 5, 79); padding-top:8%;" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">Meals</p>
                    <p class="search-fare-details-normal">Complimentary</p>
                    <img src="../images/car-seat.png" alt="" style="width:18px; height:20px;margin-top:8% ;">
                    <p class="search-fare-details-bold" style="display: inline;">Seat Selection</p>
                    <p class="search-fare-details-normal">Free for limited seats</p>
                    <img src="../images/perfect.png" alt="" style="width:18px; height:22px;margin-top:8%; ">
                    <p class="search-fare-details-bold" style="display: inline;">Preferred Seat</p>
                    <p class="search-fare-details-bold" style="display: inline; padding-left: 17%;">Selection </p>
                    <p class="search-fare-details-normal">Chargeable from INR 200</p>
                    <img src="../images/point.png" alt="" style="width:18px; height:18px; margin-top:8%; ">
                    <p class="search-fare-details-bold" style="display: inline;">Earn Points</p>
                    <p class="search-fare-details-normal">35% of Base Points</p>
                    <i class="fa fa-money fa-2x" style="color:rgb(32, 5, 79); padding-top:8%;" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">Change Fee</p>
                    <p class="search-fare-details-normal" style="padding-left: 19%;">INR 3000 See Fare Rule</p>
                    <i class="fa fa-database fa-2x" style="color:rgb(32, 5, 79); padding-top:8%;" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">Cancel & Refund</p>
                    <p class="search-fare-details-normal" style="padding-left: 19%;">INR 4000 See Fare Rule</p>
                    <i class="fa fa-exclamation-circle fa-2x" style="color:rgb(32, 5, 79); padding-top: 8%;" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">NoShow Fee</p>
                    <p class="search-fare-details-normal" style="padding-left: 19%;">Base Fare Non-Refundable</p>
                    <i class="fa fa-exclamation-circle fa-2x" style="color:rgb(32, 5, 79); padding-top: 8%;" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">NoShow Window</p>
                    <p class="search-fare-details-normal" style="padding-left: 19%;">24 Hours before Departure</p>
                </div>
            </div>
            <div class="search-fare-2">
                <div class="search-fare-2-head">
                    <div class="search-fare-head-lable">
                        <p class="search-fare-head-normal" style="display: inline;">INR</p>
                        <p class="search-fare-head-bold" style="display: inline;">5,954</p>
                        <p class="search-fare-head-normal">SUPER VALUE</p>
                        <p class="search-fare-head-normal">ECONOMY</p>
                    </div>
                </div>
                <div class="search-fare-details">
                    <i class="fa fa-briefcase fa-2x" style="color:rgb(32, 5, 79)" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">Check-In Baggage</p>
                    <p class="search-fare-details-normal">25kg</p>
                    <i class="fa fa-cutlery fa-2x" style="color:rgb(32, 5, 79); padding-top:8%;" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">Meals</p>
                    <p class="search-fare-details-normal">Complimentary</p>
                    <img src="../images/car-seat.png" alt="" style="width:18px; height:20px;margin-top:8% ;">
                    <p class="search-fare-details-bold" style="display: inline;">Seat Selection</p>
                    <p class="search-fare-details-normal">Free for limited seats</p>
                    <img src="../images/perfect.png" alt="" style="width:18px; height:22px;margin-top:8%; ">
                    <p class="search-fare-details-bold" style="display: inline;">Preferred Seat</p>
                    <p class="search-fare-details-bold" style="display: inline; padding-left: 17%;">Selection </p>
                    <p class="search-fare-details-normal">Chargeable from INR 200</p>
                    <img src="../images/point.png" alt="" style="width:18px; height:18px; margin-top:8%; ">
                    <p class="search-fare-details-bold" style="display: inline;">Earn Points</p>
                    <p class="search-fare-details-normal">35% to 60% of Base Points</p>
                    <i class="fa fa-money fa-2x" style="color:rgb(32, 5, 79); padding-top:8%;" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">Change Fee</p>
                    <p class="search-fare-details-normal" style="padding-left: 19%;">INR 2000 See Fare Rule</p>
                    <i class="fa fa-database fa-2x" style="color:rgb(32, 5, 79); padding-top:8%;" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">Cancel & Refund</p>
                    <p class="search-fare-details-normal" style="padding-left: 19%;">INR 3000 See Fare Rule</p>
                    <i class="fa fa-exclamation-circle fa-2x" style="color:rgb(32, 5, 79); padding-top: 8%;" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">NoShow Fee</p>
                    <p class="search-fare-details-normal" style="padding-left: 19%;">Base Fare Non-Refundable</p>
                    <i class="fa fa-exclamation-circle fa-2x" style="color:rgb(32, 5, 79); padding-top: 8%;" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">NoShow Window</p>
                    <p class="search-fare-details-normal" style="padding-left: 19%;">2 Hours before Departure</p>
                </div>
            </div>
            <div class="search-fare-3">
                <div class="search-fare-3-head">
                    <div class="search-fare-head-lable">
                        <p class="search-fare-head-normal" style="display: inline;">INR</p>
                        <p class="search-fare-head-bold" style="display: inline;">10,154</p>
                        <p class="search-fare-head-normal">FLEXI SAVE</p>
                        <p class="search-fare-head-normal">ECONOMY</p>
                    </div>
                </div>
                <div class="search-fare-details">
                    <i class="fa fa-briefcase fa-2x" style="color:rgb(32, 5, 79)" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">Check-In Baggage</p>
                    <p class="search-fare-details-normal">25kg</p>
                    <i class="fa fa-cutlery fa-2x" style="color:rgb(32, 5, 79); padding-top:8%;" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">Meals</p>
                    <p class="search-fare-details-normal">Complimentary</p>
                    <img src="../images/car-seat.png" alt="" style="width:18px; height:20px;margin-top:8% ;">
                    <p class="search-fare-details-bold" style="display: inline;">Seat Selection</p>
                    <p class="search-fare-details-normal">Free for limited seats</p>
                    <img src="../images/perfect.png" alt="" style="width:18px; height:22px;margin-top:8%; ">
                    <p class="search-fare-details-bold" style="display: inline;">Preferred Seat</p>
                    <p class="search-fare-details-bold" style="display: inline; padding-left: 17%;">Selection </p>
                    <p class="search-fare-details-normal">Chargeable from INR 200</p>
                    <img src="../images/point.png" alt="" style="width:18px; height:18px; margin-top:8%; ">
                    <p class="search-fare-details-bold" style="display: inline;">Earn Points</p>
                    <p class="search-fare-details-normal">60% to 100% of Base Points</p>
                    <i class="fa fa-money fa-2x" style="color:rgb(32, 5, 79); padding-top:8%;" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">Change Fee</p>
                    <p class="search-fare-details-normal" style="padding-left: 19%;">> 72Hrs = NIL, 2-72Hrs = INR1000, < 2Hrs=No Show *See Fare Rule</p>
                            <i class="fa fa-database fa-2x" style="color:rgb(32, 5, 79); padding-top:8%;" aria-hidden="true"></i>
                            <p class="search-fare-details-bold" style="display: inline;">Cancel & Refund</p>
                            <p class="search-fare-details-normal" style="padding-left: 19%;">> 72Hrs = INR1500, 2-72Hrs = INR3000, < 2Hrs=No Show *See Fare Rule</p>
                                    <i class="fa fa-exclamation-circle fa-2x" style="color:rgb(32, 5, 79); padding-top: 8%;" aria-hidden="true"></i>
                                    <p class="search-fare-details-bold" style="display: inline;">NoShow Fee</p>
                                    <p class="search-fare-details-normal" style="padding-left: 19%;">INR 6000 *See Fare Rule</p>
                                    <i class="fa fa-exclamation-circle fa-2x" style="color:rgb(32, 5, 79); padding-top: 8%;" aria-hidden="true"></i>
                                    <p class="search-fare-details-bold" style="display: inline;">NoShow Window</p>
                                    <p class="search-fare-details-normal" style="padding-left: 19%;">2 Hours before Departure</p>
                </div>
            </div>
            <div class="search-fare-4">
                <div class="search-fare-4-head">
                    <div class="search-fare-head-lable">
                        <p class="search-fare-head-normal" style="display: inline;">INR</p>
                        <p class="search-fare-head-bold" style="display: inline;">12,561</p>
                        <p class="search-fare-head-normal">FLEXIBLE</p>
                        <p class="search-fare-head-normal">ECONOMY</p>
                    </div>
                </div>
                <div class="search-fare-details">
                    <i class="fa fa-briefcase fa-2x" style="color:rgb(32, 5, 79)" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">Check-In Baggage</p>
                    <p class="search-fare-details-normal">25kg</p>
                    <i class="fa fa-cutlery fa-2x" style="color:rgb(32, 5, 79); padding-top:8%;" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">Meals</p>
                    <p class="search-fare-details-normal">Complimentary</p>
                    <img src="../images/car-seat.png" alt="" style="width:18px; height:20px;margin-top:8% ;">
                    <p class="search-fare-details-bold" style="display: inline;">Seat Selection</p>
                    <p class="search-fare-details-normal">Free for limited seats</p>
                    <img src="../images/perfect.png" alt="" style="width:18px; height:22px;margin-top:8%; ">
                    <p class="search-fare-details-bold" style="display: inline;">Preferred Seat</p>
                    <p class="search-fare-details-bold" style="display: inline; padding-left: 17%;">Selection </p>
                    <p class="search-fare-details-normal">Chargeable from INR 200</p>
                    <img src="../images/point.png" alt="" style="width:18px; height:18px; margin-top:8%; ">
                    <p class="search-fare-details-bold" style="display: inline;">Earn Points</p>
                    <p class="search-fare-details-normal">100% of Base Points</p>
                    <i class="fa fa-money fa-2x" style="color:rgb(32, 5, 79); padding-top:8%;" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">Change Fee</p>
                    <p class="search-fare-details-normal" style="padding-left: 19%;">NIL *See Fare Rule</p>
                    <i class="fa fa-database fa-2x" style="color:rgb(32, 5, 79); padding-top:8%;" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">Cancel & Refund</p>
                    <p class="search-fare-details-normal" style="padding-left: 19%;">> 72Hrs = NIL, 2-72Hrs = INR1500, < 2Hrs=No Show *See Fare Rule</p>
                            <i class="fa fa-exclamation-circle fa-2x" style="color:rgb(32, 5, 79); padding-top: 8%;" aria-hidden="true"></i>
                            <p class="search-fare-details-bold" style="display: inline;">NoShow Fee</p>
                            <p class="search-fare-details-normal" style="padding-left: 19%;">INR 4000 See Fare Rule</p>
                            <i class="fa fa-exclamation-circle fa-2x" style="color:rgb(32, 5, 79); padding-top: 8%;" aria-hidden="true"></i>
                            <p class="search-fare-details-bold" style="display: inline;">NoShow Window</p>
                            <p class="search-fare-details-normal" style="padding-left: 19%;">2 Hours before Departure</p>
                </div>
            </div>
            <div class="search-fare-details-div">
                <button class="search-fare-details-continue"><a href="billFlight.php"> Continue </a></button>
            </div>
        </div>
        <div class="search-buisness-detail" id="addBuiDiv">
            <div class="search-details-main-lable">
                Select a Fare
            </div>
            <div class="search-fare-bis-1">
                <div class="search-bis-fare-1-head">
                    <div class="search-fare-head-lable">
                        <p class="search-fare-head-normal" style="display: inline;">INR</p>
                        <p class="search-fare-head-bold" style="display: inline;">22,151</p>
                        <p class="search-fare-head-normal">WEB SPECIAL</p>
                        <p class="search-fare-head-normal">BUISNESS</p>
                    </div>
                </div>
                <div class="search-fare-details">
                    <i class="fa fa-briefcase fa-2x" style="color:rgb(32, 5, 79)" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">Check-In Baggage</p>
                    <p class="search-fare-details-normal">35kg</p>
                    <i class="fa fa-cutlery fa-2x" style="color:rgb(32, 5, 79); padding-top:8%;" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">Meals</p>
                    <p class="search-fare-details-normal">Complimentary</p>
                    <img src="../images/car-seat.png" alt="" style="width:18px; height:20px;margin-top:8% ;">
                    <p class="search-fare-details-bold" style="display: inline;">Seat Selection</p>
                    <p class="search-fare-details-normal">Complimentary</p>
                    <img src="../images/perfect.png" alt="" style="width:18px; height:22px;margin-top:8%; ">
                    <p class="search-fare-details-bold" style="display: inline;">Preferred Seat</p>
                    <p class="search-fare-details-bold" style="display: inline; padding-left: 17%;">Complimentary</p>
                    <img src="../images/point.png" alt="" style="width:18px; height:18px; margin-top:8%; ">
                    <p class="search-fare-details-bold" style="display: inline;">Earn Points</p>
                    <p class="search-fare-details-normal">150% of Base Points</p>
                    <i class="fa fa-money fa-2x" style="color:rgb(32, 5, 79); padding-top:8%;" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">Change Fee</p>
                    <p class="search-fare-details-normal" style="padding-left: 19%;">INR 4000 *See Fare Rule</p>
                    <i class="fa fa-database fa-2x" style="color:rgb(32, 5, 79); padding-top:8%;" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">Cancel & Refund</p>
                    <p class="search-fare-details-normal" style="padding-left: 19%;">INR 5000 See Fare Rule</p>
                    <i class="fa fa-exclamation-circle fa-2x" style="color:rgb(32, 5, 79); padding-top: 8%;" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">NoShow Fee</p>
                    <p class="search-fare-details-normal" style="padding-left: 19%;">Base Fare Non-Refundable</p>
                    <i class="fa fa-exclamation-circle fa-2x" style="color:rgb(32, 5, 79); padding-top: 8%;" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">NoShow Window</p>
                    <p class="search-fare-details-normal" style="padding-left: 19%;">24 Hours before Departure</p>
                </div>
            </div>

            <div class="search-fare-bis-2">
                <div class="search-bis-fare-2-head">
                    <div class="search-fare-head-lable">
                        <p class="search-fare-head-normal" style="display: inline;">INR</p>
                        <p class="search-fare-head-bold" style="display: inline;">22,151</p>
                        <p class="search-fare-head-normal">WEB SPECIAL</p>
                        <p class="search-fare-head-normal">BUISNESS</p>
                    </div>
                </div>
                <div class="search-fare-details">
                    <i class="fa fa-briefcase fa-2x" style="color:rgb(32, 5, 79)" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">Check-In Baggage</p>
                    <p class="search-fare-details-normal">35kg</p>
                    <i class="fa fa-cutlery fa-2x" style="color:rgb(32, 5, 79); padding-top:8%;" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">Meals</p>
                    <p class="search-fare-details-normal">Complimentary</p>
                    <img src="../images/car-seat.png" alt="" style="width:18px; height:20px;margin-top:8% ;">
                    <p class="search-fare-details-bold" style="display: inline;">Seat Selection</p>
                    <p class="search-fare-details-normal">Complimentary</p>
                    <img src="../images/perfect.png" alt="" style="width:18px; height:22px;margin-top:8%; ">
                    <p class="search-fare-details-bold" style="display: inline;">Preferred Seat</p>
                    <p class="search-fare-details-bold" style="display: inline; padding-left: 17%;">Complimentary</p>
                    <img src="../images/point.png" alt="" style="width:18px; height:18px; margin-top:8%; ">
                    <p class="search-fare-details-bold" style="display: inline;">Earn Points</p>
                    <p class="search-fare-details-normal">150% of Base Points</p>
                    <i class="fa fa-money fa-2x" style="color:rgb(32, 5, 79); padding-top:8%;" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">Change Fee</p>
                    <p class="search-fare-details-normal" style="padding-left: 19%;">INR 4000 *See Fare Rule</p>
                    <i class="fa fa-database fa-2x" style="color:rgb(32, 5, 79); padding-top:8%;" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">Cancel & Refund</p>
                    <p class="search-fare-details-normal" style="padding-left: 19%;">INR 5000 See Fare Rule</p>
                    <i class="fa fa-exclamation-circle fa-2x" style="color:rgb(32, 5, 79); padding-top: 8%;" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">NoShow Fee</p>
                    <p class="search-fare-details-normal" style="padding-left: 19%;">Base Fare Non-Refundable</p>
                    <i class="fa fa-exclamation-circle fa-2x" style="color:rgb(32, 5, 79); padding-top: 8%;" aria-hidden="true"></i>
                    <p class="search-fare-details-bold" style="display: inline;">NoShow Window</p>
                    <p class="search-fare-details-normal" style="padding-left: 19%;">24 Hours before Departure</p>
                </div>
            </div>
            <div class="search-fare-detailsbis-div">
                <button class="search-fare-details-continue"> <a href="billFlight.php"> Continue </a></button>
            </div>
        </div>
    </section>
    <div class="search-flight-list-2">
        <div class="search-list-detail">
            <div class="search-list-time">
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
            <div class="search-duration">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                Duration 2h 15min
            </div>
            <div class="search-airline">
                <i class="fa fa-plane" aria-hidden="true"></i>
                Operated by JLV Airline
            </div>
        </div>

        <div class="search-class">
            <div class="search-economy" id="economy" onclick="joinEconomyDiv()">
                <div class="search-class-label">
                    <p class="search-bold">Economy</p>
                    <p class="search-normal">from</p>
                    <p class="search-bold">INR <br>5316 <br></p>
                    <p class="search-normal">per passanger</p>
                    <div class="search-arrow-down">
                        <i id="economy-down" class="fa fa-angle-down fa-4x" style="color: white;" aria-hidden="true"></i>
                        <i id="economy-up" class="fa fa-angle-up fa-4x" style="color: white; display: none;" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="search-business" id="business" onclick="joinBuisnessDiv()">
                <div class="search-class-label">
                    <p class="search-bold">Business</p>
                    <p class="search-normal">from</p>
                    <p class="search-bold">INR <br>22151 <br></p>
                    <p class="search-normal">per passanger</p>
                    <div class="search-arrow-down">
                        <i id="business-down" class="fa fa-angle-down fa-4x" style="color: white;" aria-hidden="true"></i>
                        <i id="business-up" class="fa fa-angle-up fa-4x" style="color: white; display: none;" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="search-flight-list-1">

    </div>


    <script src="../js/search.js"></script>
</body>

</html>