<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Contact Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <header id="main-header">
        <h1>Web Contact Form</h1>
    </header>

    <main>
        <form action="ticket.php" method="post">
            <label for="name">Name</label>
            <input class="user-input" type="text" name="name" id="user-name" required>
            <br><br>
            <label for="email">Email</label>
            <input class="user-input" type="email" name="email" id="email" required>
            <br><br>
            <label for="issue-type">Issue Type</label>
            <select class="user-input" name="issue-type" id="select-issue">
                <option value="Query" selected>Query</option>
                <option value="Feedback">Feedback</option>
                <option value="Complaint">Complaint</option>
                <option value="Other">Other</option>
            </select>
            <br><br>
            <label for="comments">Comments</label>
            <textarea class="user-input" name="comments"></textarea>
            <br><br>
            <input id="submit-button" type="submit" value="Submit">
        </form>
    </main>

    <footer id="main-footer">
        <p>Created with love by: Lord-of-the-Dance</p>
        <p>2021</p>
    </footer>

</body>
</html>