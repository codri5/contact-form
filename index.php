<!DOCTYPE html>
<html lang='en-gb'>
<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' 
        integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
  <title>Contact Form</title>
</head>
<body>
    <div class='container'>
        <h4>Contact Us</h4>
        <form method='POST' action=''>
            <div class='form-group'>
                <label for='name'>Name</label>
                <input type='text' class='form-control' id='name' placeholder='Enter your name'>
            </div>
            <div class='form-group'>
                <label for='email'>Email address</label>
                <input type='email' class='form-control' id='email' placeholder='name@example.com'>
            </div>
            <div class='form-group'>
                <label for='textarea'>Message</label>
                <textarea class='form-control' id='textarea' rows='3' placeholder='Message'></textarea>
            </div>
            <button type='submit' class='btn btn-primary'>Send</button>
        </form>
    </div>
</body>
</html>