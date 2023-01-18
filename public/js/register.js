// Form Changing
const individualDetails = document.getElementById("individualDetails");
const businessDetails = document.getElementById("businessDetails");
const select = document.getElementById("select");

select.addEventListener("change", function (event) {
    if (event.target.value == 1) {
        console.log("individual");
        individualDetails.style.display = "block";
        businessDetails.style.display = "none";
    } else if (event.target.value == 2) {
        console.log("business");
        individualDetails.style.display = "none";
        businessDetails.style.display = "block";
    } else {
        individualDetails.style.display = "none";
        businessDetails.style.display = "none";
    }
});
