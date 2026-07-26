<!-- Form -->
<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
    </head>

    <body>

        <h2>User Information Form</h2>

        <form method="post" action="result.php">

            Name:
            <input type="text" name="name"><br><br>

            Gender:
            <input type="radio" name="gender" value="Male"> Male
            <input type="radio" name="gender" value="Female"> Female
            <br><br>

            Hobbies:
            <input type="checkbox" name="hobbies[]" value="Reading"> Reading
            <input type="checkbox" name="hobbies[]" value="Sports"> Sports
            <input type="checkbox" name="hobbies[]" value="Music"> Music
            <br><br>

            Country:
            <select name="country">
                <option value="Nepal">Nepal</option>
                <option value="India">India</option>
                <option value="USA">USA</option>
            </select>
            <br><br>

            <input type="submit" name="submit" value="Submit">

        </form>

        <hr>

    </body>
</html>