<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Assignment_3.2.css">
        <title>Mars Countdown</title>
    </head>

    <body>
        <header>
            <?php include_once "menu.php"?>
            <h1>Countdown for Takeoff to Mars</h1>
        </header>

        <main>
            <div>Time Left: </div>
            <div id="countdown"></div>
            <!--Display message variable-->
            <div id="message"></div>
        </main>

        <?php

        // date we will launch
            $launchDate = strtotime('October 31st, 2026 12:00:00');
            // convert the string into a date data value
            $formattedDate = date("F d, Y H:i:s", $launchDate);

            echo "formattedDate=".$formattedDate;
        ?>

        <script>
            // retrieve the launch date
            let countdownTimer = new Date("<?php echo "$formattedDate"; ?>").getTime();

            // runs every second to have a live countdown
            let intervalid = setInterval(() => {
                let currentTime = new Date().getTime();

                console.log("currentTime=" + currentTime);
                console.log("countdownTimer=" + countdownTimer);

                // difference between launch date time and current time
                let timeDiff = countdownTimer - currentTime;

                console.log("timeDiff=" + timeDiff);

                // variables to hold each time increment
                const MS_IN_A_SECOND = 1000;
                const MS_IN_A_MINUTE = MS_IN_A_SECOND * 60;
                const MS_IN_AN_HOUR = MS_IN_A_MINUTE * 60;
                const MS_IN_A_DAY = MS_IN_AN_HOUR *24;

                // calculate days
                let days = Math.floor(timeDiff / MS_IN_A_DAY);
                // display days
                console.log("days=" + days);
                // calculate hours
                let hours = Math.floor((timeDiff % MS_IN_A_DAY) / MS_IN_AN_HOUR);
                // display hours
                console.log("hours=" + hours)
                // calculate minutes
                let minutes = Math.floor((timeDiff % MS_IN_AN_HOUR) / MS_IN_A_MINUTE);
                // displa minutesw
                console.log("minutes=" + minutes);
                // calculate seconds
                let seconds = Math.floor((timeDiff % MS_IN_A_MINUTE) / MS_IN_A_SECOND);
                // displat seconds
                console.log("seconds=" + seconds);
                // format time left
                document.getElementById("countdown").textContent = days + " Days: " + hours + " Hours: " + minutes + " Minutes: " + seconds + " Seconds: ";

                // descriptive messages based on amount of time left
                let descMessage = "";

                if(seconds < 0) {
                    descMessage = "Oops, you missed the launch! See you in 8 years!";
                }
                else if(days < 2) {
                    descMessage = "Head to the launch pad!";
                }
                else if(days < 7) {
                    descMessage = "Pack your bags!";
                }
                else {
                    descMessage = "Launch is coming soon!";
                }
                // update message variable
                document.getElementById("message").textContent = descMessage;
            }, 1000);
        </script>
    </body>
</html>