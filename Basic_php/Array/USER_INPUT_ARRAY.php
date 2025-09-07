<html>
    <head>
        <title>Arrays from User Input</title>
    </head>
 
    <body>
        <h2>How's your weather? </h2>
        <?php
            //If form not submitted, display form.
            if (!isset($_POST['submit']))
            {
        ?>
        <form method="post" action="userinputArray.php">
            <p>Please enter your information:</p>
            City: <input type="text" name="city" />
            Month: <input type="text" name="month" />
            Year: <input type="text" name="year" />
            <p>Please choose the kinds of weather you experienced from the list below.
            <br />Choose all that apply. </p>
            
            <input type="checkbox" name="weather[]" value="sunshine" />Sunshine<br />
            <input type="checkbox" name="weather[]" value="clouds" />Clouds<br />
            <input type="checkbox" name="weather[]" value="rain" />Rain<br />
            <input type="checkbox" name="weather[]" value="hail" />Hail<br />
            <input type="checkbox" name="weather[]" value="sleet" />Sleet<br />
            <input type="checkbox" name="weather[]" value="snow" />Snow<br />
            <input type="checkbox" name="weather[]" value="wind" />Wind<br />
            <input type="checkbox" name="weather[]" value="cold" />Cold<br />
            <input type="checkbox" name="weather[]" value="heat" />Heat<br />

            <input type="submit" name="submit" value="Go" />
        </form>
        <?php
                //If form submitted, process input.
            }
            else
            {
                //Retrieve the date and location information.
                $inputLocal = array(
                    $_POST['city'],
                    $_POST['month'],
                    $_POST['year']
                );
                echo "In $inputLocal[0] in the month of $inputLocal[1] $inputLocal[2], you
                observed the following weather:<br /> <ul>";
                
                //Save weather array into a variable.
                $weather = $_POST['weather'];
                
                //Iterate through the array to show what the user chose.
                foreach($weather as $w)
                {
                    echo "<li>$w</li>\n"; 
                }
                echo "</ul>"; 
            }
        ?>
    </body>
</html>