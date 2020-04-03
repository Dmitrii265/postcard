<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    * {
      padding: 0;
      margin: 0;
    }
    div.content p {
      font-weight: bold;
    }
    .content .links p {
      color: red;
    }
    
    .first+p+p {
      color: blue;
    }
    
    .content>p {
      font-size: 30px;
    }
    
    [order="second"] {
      color: green;
    }
    [order^="fi"] {
      text-decoration: underline;
    }
    [order$='d'] {
      font-family: Tahoma;
    }
    [order*="th"] {
      text-align: center;
    }
    [class~="par"] {
      margin-left: 55px;
    }
    
    .second.par {
      margin-left: 100px;
    }
  </style>
</head>
<body>
  <div class="content">
    <p class="first par" order="first">Первый параграф</p>
    <p order="second">Второй параграф</p>
    <p order="another">другой параграф</p>
    <div class="links">
      <p order="third" class="second par">Третий параграф</p>
      <a href="#">Читать далее</a>
    </div>
  </div>
</body>
</html>