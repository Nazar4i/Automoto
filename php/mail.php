 <?php
/* Устанавливаем e-mail адресата */
$myemail = "karpynnv@gmail.com";
/* Проверяем правильно ли записан e-mail */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("<br /> Е-mail адрес не существует");
}
/* Создаем новую переменную, присвоив ей значение */
$message_to_myemail = "Здравствуйте!
Вашей контактной формой было отправлено сообщение!
Имя отправителя: $your_name
E-mail: $your_email
Телефон: $your_phone
Страна: $your_country
Конец";
/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $yourname;
mail($myemail, $tema, $message_to_myemail, $from);
?>


