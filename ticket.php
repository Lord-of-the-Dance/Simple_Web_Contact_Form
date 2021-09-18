<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Ticket</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <header id="main-header">
        <h1>Submitted Ticket</h1>
    </header>

    <main>
        <div id="detail-container">
            <?php 

            $name = $_POST["name"];
            $email = $_POST["email"];
            $issue = $_POST["issue-type"];
            $comments = $_POST["comments"];

            echo "
                <table>
                    <tbody>
                        <tr>
                            <td><strong>Name:</strong></td>
                            <td>$name</td>
                        </tr>
                        <tr>
                            <td><strong>Email:</strong></td>
                            <td>$email</td>
                        </tr>
                        <tr>
                            <td><strong>Issue:</strong></td>
                            <td>$issue</td>
                        </tr>
                        <tr>
                            <td><strong>Comments:</strong></td>
                            <td>$comments</td>
                        </tr>
                    </tbody>
                </table>
            ";

            ?>
        </div>
    </main>

    <footer id="main-footer">
        <p>Created with love by: Lord-of-the-Dance</p>
        <p>2021</p>
    </footer>

</body>
</html>