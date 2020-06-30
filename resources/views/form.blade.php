<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h4>Sign Up Form</h4>

    <form action="/welcome" method="POST">
        @csrf
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname">
        <br><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname">

        <p>Gender:</p>
        <input type="radio" id="male" name="gender" value="male"><label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female"><label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other"><label for="other">Other</label><br><br>

        <label for="nationality">Nationality:</label><br>
        <select id="nationality" name="nationality">
            <option value="indonesian">Indonesian</option>
            <option value="singaporean">Singaporean</option>
            <option value="malaysian">Malaysian</option>
            <option value="australian">Australian</option>
        </select>

        <p>Language Spoken</p>
        <input type="checkbox" id="lang1" name="indo" value="Indo"><label for="lang1">Bahasa Indonesia</label><br>
        <input type="checkbox" id="lang2" name="english" value="English"><label for="lang2">English</label><br>
        <input type="checkbox" id="lang3" name="other" value="Other"><label for="lang3">Other</label><br><br>

        <label for="bio">Bio</label><br>
        <textarea id="bio" name="bio" rows="8" cols="30"></textarea>
        <br>

        <input type="submit" value="Sign Up">
    </form>
</body>
</html>