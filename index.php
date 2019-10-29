<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php Contact Form</title>
</head>
<body>
    <h1>Contact</h1>

     <form action="data/contact.php" method="post"> <!--php link -->
        <label for="name">name</label>
        <input id='name' name='name' type="text" placeholder='John Doe'>

        <label for="email">email</label>
        <input id='email' name='email' type="email" placeholder='doejohn@example.com'>
        
        <label for="subject">Subject</label>
        <input id='subject' name='subject' type="text" placeholder='Subject line'>

        <label for="message">Message</label>
        <textarea id='message' name='message'></textarea>

        <button type="submit">Submit</button>
    </form>
    
</body>
</html>