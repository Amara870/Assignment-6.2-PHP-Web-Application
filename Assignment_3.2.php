<!DOCTYPE html>
<html>
    <head>
        <!--Meta data-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Meta title-->
        <title>Assignment 2.2</title>
        <!--Stylesheet-->
        <link rel="stylesheet" href="Assignment_3.2.css">
        <!--Javascript file-->
        <script src="Validator.js" defer></script>
    </head>
    <body>
        <!--Main title-->
        <header>
            <h1>Outer Space Adventure</h1>
            <nav>
                <a href="Countdown.php">Timer</a>
            </nav>
        </header>

        <main>
            <!--Description-->
            <h2>Travel with us!</h2>

            <!--Pilot hire form-->
            <form name="appForm" onsubmit="return validateForm();" action="#" method="post">
                <!--Name field-->
                <div class="row">
                    <label>Full Name</label>
                    <input type="text" name="fullName">
                    <div class="error" id="fullNameErr"></div>
                </div>

                <!--Age field-->
                <div class="row">
                    <label>Age</label>
                    <input type="text" name="age">
                    <div class="error" id="ageErr"></div>
                </div>

                <!--ID number field-->
                <div class="row">
                    <label>ID Number</label>
                    <input type="text" name="idNumber">
                    <div class="error" id="idNumberErr"></div>
                </div>

                <!--Years of Experience field-->
                <div class="row">
                    <label>Years of Experience</label>
                    <input type="text" name="experience">
                    <div class="error" id="experienceErr"></div>
                </div>

                <!--Location field-->
                <div class="row">
                    <label>Where are you from?</label>
                    <input type="text" name="location">
                    <div class="error" id="locationErr"></div>
                </div>

                <div class="row">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </main>
    </body>
</html>