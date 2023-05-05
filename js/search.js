function joinEconomyDiv() {
    var economy = document.getElementById("economy");
    var main = document.getElementById("main");
    var addEcoDiv = document.getElementById("addEcoDiv");
    var business = document.getElementById("business");
    var businessDown = document.getElementById("business-down");
    var businessUp = document.getElementById("business-up");
    var economyDown = document.getElementById("economy-down");
    var economyUp = document.getElementById("economy-up");

    if (addEcoDiv.style.display === "none" && addBuiDiv.style.display === "none") { 
        addEcoDiv.style.display = "block";
        main.style.borderRadius = "20px 20px 20px 0";
        economy.style.height = "220px";
        business.style.borderRadius = "0 20px 0 0";
        economyDown.style.display = "none";
        economyUp.style.display = "block";

    }
    else if(addEcoDiv.style.display == "none" && addBuiDiv.style.display == "block")
    {
        addBuiDiv.style.display = "none";
        business.style.height = "190px";
        main.style.borderRadius = "20px";
        business.style.borderRadius = "0 20px 20px 0";
        businessDown.style.display = "block";
        businessUp.style.display = "none";

        addEcoDiv.style.display = "block";
        main.style.borderRadius = "20px 20px 20px 0";
        economy.style.height = "220px";
        business.style.borderRadius = "0 20px 0 0";
        economyDown.style.display = "none";
        economyUp.style.display = "block";

        fare3Head.classList.remove('search-fare-select-color');
        fare2Head.classList.remove('search-fare-select-color');
        fare1Head.classList.remove('search-fare-select-color');
        fare4Head.classList.remove('search-fare-select-color');
        details.classList.remove('search-economy-detail-height');
        contiBut.classList.remove('search-fare-details-continue-dis');
    }
    else
    {
        addEcoDiv.style.display = "none";
        economy.style.height = "190px";
        main.style.borderRadius = "20px";
        business.style.borderRadius = "0 20px 20px 0";
        economyDown.style.display = "block";
        economyUp.style.display = "none";

        fare3Head.classList.remove('search-fare-select-color');
        fare2Head.classList.remove('search-fare-select-color');
        fare1Head.classList.remove('search-fare-select-color');
        fare4Head.classList.remove('search-fare-select-color');
        details.classList.remove('search-economy-detail-height');
        contiBut.classList.remove('search-fare-details-continue-dis');
    }
}

function joinBuisnessDiv() {
    var economy = document.getElementById("economy");
    var main = document.getElementById("main");
    var addBuiDiv = document.getElementById("addBuiDiv");
    var addEcoDiv = document.getElementById("addEcoDiv");
    var business = document.getElementById("business");
    var economyDown = document.getElementById("economy-down");
    var economyUp = document.getElementById("economy-up");
    var businessDown = document.getElementById("business-down");
    var businessUp = document.getElementById("business-up");

    if (addBuiDiv.style.display == "none" && addEcoDiv.style.display == "none") { 
        addBuiDiv.style.display = "block";
        addBuiDiv.style.color = "white";
        main.style.borderRadius = "20px 20px 20px 0";
        business.style.height = "220px";
        business.style.borderRadius = "0 20px 0 0";
        businessDown.style.display = "none";
        businessUp.style.display = "block";

    }
    else if(addBuiDiv.style.display == "none" && addEcoDiv.style.display == "block")
    {
        addEcoDiv.style.display = "none";
        economy.style.height = "190px";
        main.style.borderRadius = "20px";
        business.style.borderRadius = "0 20px 20px 0";
        economyDown.style.display = "block";
        economyUp.style.display = "none";

        addBuiDiv.style.display = "block";
        main.style.borderRadius = "20px 20px 20px 0";
        business.style.height = "220px";
        business.style.borderRadius = "0 20px 0 0";
        businessDown.style.display = "none";
        businessUp.style.display = "block";

        farebis2Head.classList.remove('search-fare-select-color');
        detailsbis.classList.remove('search-buisness-detail-height');
        contibisBut.classList.remove('search-fare-details-continue-dis');
        farebis1Head.classList.remove('search-fare-select-color');

    }
    else
    {
        addBuiDiv.style.display = "none";
        business.style.height = "190px";
        main.style.borderRadius = "20px";
        business.style.borderRadius = "0 20px 20px 0";
        businessDown.style.display = "block";
        businessUp.style.display = "none";

        farebis2Head.classList.remove('search-fare-select-color');
        detailsbis.classList.remove('search-buisness-detail-height');
        contibisBut.classList.remove('search-fare-details-continue-dis');
        farebis1Head.classList.remove('search-fare-select-color');
    }
}

var fare4 = document.querySelector('.search-fare-4');
var fare4Head = document.querySelector('.search-fare-4-head');
var fare3 = document.querySelector('.search-fare-3');
var fare3Head = document.querySelector('.search-fare-3-head');
var fare2 = document.querySelector('.search-fare-2');
var fare2Head = document.querySelector('.search-fare-2-head');
var fare1 = document.querySelector('.search-fare-1');
var fare1Head = document.querySelector('.search-fare-1-head');
var details = document.querySelector('.search-economy-detail');
var contiBut = document.querySelector('.search-fare-details-div');

var farebis1 = document.querySelector('.search-fare-bis-1');
var farebis1Head = document.querySelector('.search-bis-fare-1-head');
var farebis2 = document.querySelector('.search-fare-bis-2');
var farebis2Head = document.querySelector('.search-bis-fare-2-head');
var detailsbis = document.querySelector('.search-buisness-detail');
var contibisBut = document.querySelector('.search-fare-detailsbis-div');

fare4.addEventListener('click', function() {
    fare4Head.classList.add('search-fare-select-color');
    details.classList.add('search-economy-detail-height');
    contiBut.classList.add('search-fare-details-continue-dis');
    fare3Head.classList.remove('search-fare-select-color');
    fare2Head.classList.remove('search-fare-select-color');
    fare1Head.classList.remove('search-fare-select-color');
});


fare3.addEventListener('click', function() {
    fare3Head.classList.add('search-fare-select-color');
    details.classList.add('search-economy-detail-height');
    contiBut.classList.add('search-fare-details-continue-dis');
    fare4Head.classList.remove('search-fare-select-color');
    fare2Head.classList.remove('search-fare-select-color');
    fare1Head.classList.remove('search-fare-select-color');
});


fare2.addEventListener('click', function() {
    fare2Head.classList.add('search-fare-select-color');
    details.classList.add('search-economy-detail-height');
    contiBut.classList.add('search-fare-details-continue-dis');
    fare4Head.classList.remove('search-fare-select-color');
    fare3Head.classList.remove('search-fare-select-color');
    fare1Head.classList.remove('search-fare-select-color');
});


fare1.addEventListener('click', function() {
    fare1Head.classList.add('search-fare-select-color');
    details.classList.add('search-economy-detail-height');
    contiBut.classList.add('search-fare-details-continue-dis');
    fare4Head.classList.remove('search-fare-select-color');
    fare3Head.classList.remove('search-fare-select-color');
    fare2Head.classList.remove('search-fare-select-color');
});

farebis1.addEventListener('click', function() {
    farebis1Head.classList.add('search-fare-select-color');
    detailsbis.classList.add('search-buisness-detail-height');
    contibisBut.classList.add('search-fare-details-continue-dis');
    farebis2Head.classList.remove('search-fare-select-color');
});

farebis2.addEventListener('click', function() {
    farebis2Head.classList.add('search-fare-select-color');
    detailsbis.classList.add('search-buisness-detail-height');
    contibisBut.classList.add('search-fare-details-continue-dis');
    farebis1Head.classList.remove('search-fare-select-color');
});