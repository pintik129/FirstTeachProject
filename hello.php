<!DOCTYPE html>
<html>
 <head>
   <title>Главная страница</title>
   <meta charset="utf-8">
 </head>
 <body>
Здравствуй, мой дорогой друг, <?php echo $_GET["name"]; //Имя, введеное пользователем?>!<br>
Это здорово, что ты живешь в таком городе, как <?php echo $_GET["city"]; ?>!<br>
И ты выглядишь слишком молодо для своих <?php echo $_GET["age"]; ?>! <br>
Улыбайся всегда, прямо как и сейчас!
<p><img src="https://memepedia.ru/wp-content/uploads/2019/12/screenshot_22-1.png" alt="Тут должен быть улыбающийся котик"></p>
<!-- Изображение кота -->

</body>
</html>
