<!doctype html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <title>Моё портфолио Дмитрий</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
  <style>
    h1 {
      color: red;
      text-align: center;
      background-color: rgb(50,150,100);
    }
    h3 {
      color: red;
      text-align: center;
      background-color: rgb(100,150,250);
    }
  </style>
  </head>
  <body style="background-color:Turquoise">
    <h1> Дмитрий</h1>
      <h3>Обо мне</h3>
        <div>
      <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, dolore, facere nam quasi quibusdam tempore repellendus quis fugit aliquam alias illum id ut quidem vero fugiat pariatur ullam quod laborum.</span>
     <p class="about_text bold"><span>Id, doloremque, velit, exercitationem impedit laudantium officiis expedita rerum ea dolores sit laborum similique saepe quia quae odio dolorem libero quod omnis magnam voluptate at harum nemo vel ratione totam.</span>
      <p class="about_text bold"><span>Nesciunt, harum, rerum similique maxime enim iusto sunt alias iste! Pariatur, doloremque vero corrupti amet nihil tempora porro quaerat reprehenderit ipsa mollitia hic explicabo at quibusdam voluptas ratione sapiente perspiciatis.</span>
      <span>Tenetur, corrupti, deserunt, iure dignissimos asperiores eaque nihil at adipisci laboriosam nulla maxime expedita ipsam nisi odit alias. Soluta, dicta, deserunt voluptates ut mollitia officiis asperiores incidunt repudiandae quaerat et.</span>ipsum dolor sit amet, consectetur adipisicing elit. Sunt accusamus nisi explicabo. Tempore, cumque, accusantium modi quis maiores quas repellat placeat officiis sit necessitatibus ad nisi hic omnis dignissimos excepturi.</p>
      <img p class="about_image"src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTJd44Sjpby99qYd_8jiryQO5DxOufSVKRh3ouzKTL-lrm9wmpO" style="height:250px;"> МОЁ ФОТО
      <p><img src="https://zastavok.net/ts/games/1394657282.jpg" width="550" height="350" alt=""> ФОТО С ДРУЗЬЯМИ </p>
      <p><img p class="about_image"src="https://in-rating.ru/space/wp-content/uploads/2016/03/ACreed_109.jpg" style="height:500px;">МОЁ ФОТО
      
      </div> 
      <div>
        <h3>Я в социальных сетях</h3>
        <ol>
          <li><a href="https://vk.com" target=" blank">Вконтакте</a></li>
          <li><a href="https://ok.ru" target=" blank">Однокласники</a></li>
          <ol>Инстаграм</ol>
          <ol>Твиттер</ol>
        </ul>
      </div>
      <div>
        <h3>Мои работы</h3>
        <table border="1">
          <tr>
            <th>Тип сайта</th>
            <th>Количество</th>
          </tr>
          <tr>
            <td>Статический</td>
            <td>42</td>
            <td>;=)</td>
          </tr>
          <td rowspan="2">Адаптивный</td>
          <td colspan="2">42</td>
          </tr>
          <td>Итого</td>
          <td>54</td>
          </tr>
        </table>
      </div>
      <div>
        <h3>Оставиь заявку</h3>
        <form action="#">
          <input type="text" placeholder="Введите имя" required>
          <br>
          <input type="e-mail" placeholder="Ведите e-mail" required> 
          <br>
          <label>
          <input type="radio" name="sitetype">
          <span> Статичекий</span>
          </label>
          <input type="radio" id="adapt" name="sitetype" checked>
          <label for="">Адаптивный</label>
          <br>
          <label>
            <input type="checkbox">
            <span>Поддержка</span>
             <br>
          </label>
          <label>
            <input type="checkbox">
            <span>SEO</span>
             <br>
          </label>
          <p>Загрузить ваш макет</p>
          <input type="file">
          </label>
          <br>
          <textarea rows="7" placeholder="Ваш коментарий"></textarea>
          <br>
          <button>Кнопка</button>
          <input type="button">
          <input type="submit" value="Отправить">
          <input type="reset" value="Очистить">
        </form>
      </div>
  </body>
</html>