<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <div class="lernard-window-fixed">
        <div class="lernard-form">

        <div class="lernard-form-body">
            <form action="" method="post">
                <div class="lernard-form-close-button">
                    <img src="images/close.png" alt="">
                </div>
                <div class="lernard-form-title">Заполните заявку на консультацию</div>
                <div class="lernard-form-description">Наш специалист свяжется с Вами и ответит на любые вопросы</div>
                <div class="lernard-form-inputs">
                    <input class='smooth-textfield string-textfield' name='your-name' type="text" placeholder="Имя">
                    <input class='smooth-textfield string-textfield' name='phone' type="tel" placeholder="Телефон">
                    <textarea class='smooth-textfield large-textfield' name='your-questions' id="" cols="30" rows="10" placeholder="Напишите, какой у вас вопрос?"></textarea>
                </div>
                <button class='lernard-form-sumbit' type='submit'>Получить консультацию</button>
                <div class="lernard-form-personal-data">
                    Я соглашаюсь на <b>обработку персональных данных</b>
                </div>
            </form>
        </div>
    </div>
    </div>
    
    <script src='js/jquery.js'></script>
    <script src='js/script.js'></script>
</body>
</html>