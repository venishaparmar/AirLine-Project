function joinEconomyDiv() {
    var economy = document.getElementById("economy");
    var main = document.getElementById("main");
    var addEcoDiv = document.getElementById("addEcoDiv");
    var business = document.getElementById("business");
    var businessDown = document.getElementById("business-down");
    var businessUp = document.getElementById("business-up");
    var economyDown = document.getElementById("economy-down");
    var economyUp = document.getElementById("economy-up");

    if (addEcoDiv.style.display == "none" && addBuiDiv.style.display == "none") { 
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
    }
    else
    {
        addEcoDiv.style.display = "none";
        economy.style.height = "190px";
        main.style.borderRadius = "20px";
        business.style.borderRadius = "0 20px 20px 0";
        economyDown.style.display = "block";
        economyUp.style.display = "none";
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

    }
    else
    {
        addBuiDiv.style.display = "none";
        business.style.height = "190px";
        main.style.borderRadius = "20px";
        business.style.borderRadius = "0 20px 20px 0";
        businessDown.style.display = "block";
        businessUp.style.display = "none";
    }
}