// display error messae on php page
function printError(elemId, msg) {
    document.getElementById(elemId).innerHTML = msg;
}

// function to validate that the form inputs are correct
function validateForm() {
    var fullName = document.appForm.fullName.value;
    var age = document.appForm.age.value;
    var idNumber = document.appForm.value;
    var experience = document.appForm.value;
    var location = document.appForm.value;

    var nameValid = true;
    var ageValid = true;
    var idNumberValid = true;
    var experienceValid = true;
    var locationValid = true;

    // clear out any errors before the form is resubmitted
    printError("fullNameErr", "");
    printError("ageErr", "");
    printError("idNumberErr", "");
    printError("experienceErr", "");
    printError("locationErr", "");

    // check if user entered valid info
    if (fullName == "") {
        printError("fullNameErr", "Please enter your name.");
        nameValid = false;
    }

    if (age == "") {
        printError("ageErr", "Please enter your age.");
        ageValid = false;
    }

    if (idNumber == "") {
        printError("idNumberErr", "Please enter your ID number.");
        idNumberValid = false;
    }

    if (experience == "") {
        printError("experienceErr", "Please enter your experience.");
        experienceValid = false;
    }

    if (location == "") {
        printError("locationErr", "Please enter your location.");
        locationValid = false;
    }

    if (!nameValid || !ageValid || !idNumberValid || !experienceValid || !locationValid) {
        return false;
    }
}