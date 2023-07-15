<!-- HTML form to collect a user's data -->

<!DOCTYPE html>
<html>

<head>
    <title>iWorQ Sample Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <div class="form-group">
        <label for="name">Full name</label>
        <input type="text" class="form-control border-black" id="name" placeholder="i.e. John Doe">
    </div>
    <br>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="text" class="form-control border-black" id="email" placeholder="email@gmail.com">
    </div>
    <br>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control border-black" id="message" rows="4"></textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-info border-black mb-2">Submit</button>
</body>

</html>