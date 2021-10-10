<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chat</title>
    <link rel="stylesheet" href="./css/app.css">
</head>
<body>

<div class="app-connect">
        <div class="header-connect">
            <h1>Discussion group</h1>
            <h3>Connect</h3>
        </div>
        <div id="connect"></div>
    </div>

    <div class="app-chat">

        

        <header>
            <h3>Chat window</h3>
            <input type="text" name="username" id="username" placeholder="Username" />
        </header>

        <div id="messages"></div>

        <form id="message_form">
            <input type="text" name="message" id="message_input" placeholder="Write a message" />
            <button type="submit" id="message_send" class="btn-foued">Send Message</button>
        </form>

    </div>

    
    <script src="./js/app.js"></script>
</body>
</html>