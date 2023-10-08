<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Website</title>
    <meta name="description" content="My First PHP Website">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>My PHP Website</h1>
    </header>
    
    <main>
        <button id="showDateButton">Show Date</button>
        <p id="dateDisplay"></p>
    </main>

    <script>
        document.getElementById('showDateButton').addEventListener('click', function() {
            const currentDate = new Date();
            const dateDisplay = document.getElementById('dateDisplay');
            dateDisplay.textContent = 'Current Date: ' + currentDate.toDateString();
        });
    </script>
</body>
</html>
