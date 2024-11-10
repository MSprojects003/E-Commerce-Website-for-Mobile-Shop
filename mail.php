<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>



<form action="https://formsubmit.co/moamedatheef@gmail.com" target="_blank" method="POST">
     <input type="text" name="name" required>
     <input type="email" name="email" required>
     <input type="number" name="number" required>
     
     <input type="hidden" name="_captcha" value="false">
     <input type="hidden" name="_next" value="http://localhost/Imobile.lk/thank_card.html">
     <button type="submit" onclick="thnk();">Send</button>
</form>
<script>

function thnk(){
     document.alert("thank you");
}
</script>


</body>
</html>