<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <script>
  /*
  //---Типы данных---//
  
   let hello="ПРИВЕТ МИР";
   hello=15;
  document.write(hello);
  let number = 15;//число
  let string = "текст";//строка
  let booleanTrue = true;//...значение
  let booleanFalse = false;
  let array = [5, true, "hello"];//массив
  let object = {text: "hello", number: 15}
  let unde // имеет тип данных undefined
  let a = null// Ничего/"Пусто"/"Значение неизвестно"
  console.log(string);
  */
  // ---Преобразование типов---//
  /*alert("4" - 3);*/
  
  //-----операторы-----//
 /*let a = "15"
  let result = +"5" + +a;
  alert (result);*/
  
 /*let contur = 1;
  let a = ++contur;или ??? let a = contur++;
  alert(a);
  alert(contur);*/ 
  
//---умножение---//
 /* let a = 3;
  a *= 5;
  alert(a);*/
  
  //---прибавление---//
 /* let a = 3;
  a += 5;
  alert(a);*/
  
  //---сложение---//
  /*let a = 3; b = 4;
  alert(a+b);*/
  //---операторы сравнения---//
  
  /*let a = 5; b = 10;
  alert(a<b);*/
  //-сравнение строк (по нахождению букв в алфавите)-//
 /*let cat = "cat";
  let bat = "bat";
  alert(cat<bat)*/ 
  
  //--- Prompt---//
  
  /*let age = prompt("скольо вам лет ?", 18);
  alert (age);
  */
  
  /*let a = +prompt("введите первое число");
  let b = +prompt("введите второе число");
  let sum = a + b;
  alert ("результат:" + sum);*/
  
  //---Confirm---//
 /*let ageCheck = confirm("Вам есть 18 лет ?");
  alert (ageCheck);*/ 
  
//---Условие---//
 /* let currentYear = +prompt("Какой сейчас год ?");
  if (currentYear == 2020) {
    alert("Вы угадали");
  } else {
    alert("Вы не угадали");}*/
    
   /*let currentYear = +prompt("Какой сейчас год ?");
    if (currentYear == 2020) {
    alert("Вы угадали");
    } else if (currentYear == 2019){
    alert("Это прошлый год");
    } else {
    alert("Вы не угадали");}
    
    {alert("На улице минус ?");}*/
    
   
    /*let a = +prompt("Введите число от 5 до 10");
    if (a >= 5 && a <= 10 ) {
    alert("Вы ввели верное число");
    } else { 
    alert("Вы ввели не верное число");
    } 
    let b = +prompt("Введите число от 10 до 20");
    if (b == 10 || a == 20 ) {
     alert("Вы ввели верное число");
    } else { 
    alert("Вы ввели не верное число");
    }   
    let c = +prompt("Введите число от 5 до 10  или Введите число от 20 до 30");
    if ( (c >= 5 &&  c <= 10 ) || ( c >= 20 && c <= 30) )
    { alert("Вы ввели верное число");
    } else { 
    alert("Вы ввели не верное число");
    }*/
    
     //--- с отправкой на другую страницу---//
    /*let a = +prompt("Введите число от 5 до 10");
    if (a >= 5 && a <= 10 ) {
    alert("Вы ввели верное число");
    } else { 
    alert("Вы ввели не верное число");
    } 
    let b = +prompt("Введите число от 10 до 20");
    if (b == 10 || a == 20 ) {
     alert("Вы ввели верное число");
    } else { 
    alert("Вы ввели не верное число");
    }   
    let c = +prompt("Введите число от 5 до 10  или Введите число от 20 до 30");
    if ( (c >= 5 &&  c <= 10 ) || ( c >= 20 && c <= 30) )
    { alert("Вы ввели верное число");
    }
    else { 
    alert("Вы ввели не верное число");
    }
    window.location.href = "https://yandex.ru/images/search?text=%D0%B2%D1%8B%20%D0%BF%D1%80%D0%BE%D0%B8%D0%B3%D1%80%D0%B0%D0%BB%D0%B8&stype=image&lr=213&source=wiz";*/
    
    //---выбор сайта, если ничего не выбрано скинет на бинг---// 
    /*let search = prompt("На какой поисковик вы хотите перейти (google, ya, mail, rambler, duck")
    switch (search) {
   case "google":
     window.open("https://google.com","_blank");
     break;
   case "ya":
     window.open("https://ya.ru","_blank");
     break; 
    case "mail":
     window.open("https://mail.com","_blank");
     break;  
    case "rambler":
     window.open("https://rambler.com","_blank");
     break; 
    case "duck":
     window.open("https://duck.com","_blank");
     break;
    default:
      window.open("https://bing.com","_blank");
    } */
 
    //---Циклы---//
   /* let i = 0;
    while (i < 10) { 
      i++;
      console.log(i);
    }*/
    
    /*let i = 15;
    do {
     i++;
     console.log(i);
    } while (i < 10);*/
    
    /*let num = 0;
    for (let i = 0; num < 10; i++) {
      num += 2;
      console.log(num, i);*/
    
   /* let num = 0;
    for (let i = 0; num < 10; i++) {
      num += 2;
      console.log(num, i);
      if(num == 6)  
        break;
    }*/
   //---
   /*  for (let i = 0; i < 10; i++) {
     if (i%2 == 0) {
       continue;
     } 
       console.log(i);
    }
    */
    //--- тоже что и выше только с четными---//
    /*for (let i = 0; i < 10; i++) {
     if (i%2 != 0) {
       continue;
     } 
       console.log(i);
       }*/
       
       //---1,22,333,4444,55555---//
      /* for (let i = 1; i <= 5; i++) {
       let string = "";
       for (let j = 0; j < i; j++) {
        string  += i;
       }
      console.log(string);
    }
    */ 
      
   //--- ПРОГРАММА В ПРОГРАММЕ тема: "функции"---//
   //---дублирует введенный текст
   /*let text = prompt("Введите текст");
   showMessage(text);
   function showMessage(message) {
     
    alert(message);
  }*/
  /* let text = prompt("Введите текст");
  let text2 = prompt("Введите другой текст");
  showMessage(text, text2);
  function showMessage(message1,message2) {
    let fulltext = message1 + "\n" + message2;
    alert(fulltext);
  }*/
  
  //---открывает вкладки с постоянным обновлением вопроса return... дает рекурсию---//
  /*searchForYear();
  
  function searchForYear() {
    let inputYear = prompt("Укажите год о котором хотите узнать подробнее !");
  
  openWikiTab(inputYear)
  return searchForYear()
  }
  function openWikiTab (year) {
    let link = "https://ru.wikipedia.org/wiki/"
    + year;
  window.open(link,"_blank")  
  }
 */
 //--- функции округления
  //let a = 5.56;
  //a = Math.floor(a);//округление вниз
  // a = Math.ceil(a);//округление вверх
  // a = Math.round(a);//округление по мат. правилам
  //a = a.toFixed(2);// мат. округление (когда много чисел после запятой, 2- сколько чисел после запятой)
  //alert(a);
  
  
  /*let randomNum = Math.random()*10;
     console.log (randomNum);*/
     
//--- перезагружаются числа от 0 до
  /*let randomNum = Math.floor (Math.random()*10);
    console.log (randomNum);*/
    
 /*let randomNum = getRandomIntInclusive (11, 200);
  console.log (randomNum);
  function getRandomIntInclusive(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min; //Максимум и минимум включаются "ЭТО 0-200 И ВЫШЕ СЛУЧАЙНЫЙ ГЕНЕРАТОР"*/ 
    
  /*let balance = "100.53rub"
  console.log (parseInt(balance));//целые числа
  console.log (parseFloat(balance));//не целые числа
 */
 
 
  //--- СТРОКИ
  
   /* let name = "Вася";
   let temp = "+3";
   let greeting = "Привет" + name + "!Температура на улице:" + temp;
   alert(greeting )*/
 
 
    //let name = "Вася";
    //let temp = "+3";
    //let greeting = "Привет" + name + "!Температура на улице:" + temp;//
 
     /*????есть ошибка -обратные кавычки let greeting = `Привет ${name} ! Температура не улице:
     ${temp};
     alert(greeting);`*/
     
     
  //Длинна строки
   //
  /*let message = "съешь ещё этих мягких французских булок, да выпей чаю";
  
  console.log(message.length);*/
  
  // -ь- мягки знак  
  /*let message = "съешь ещё этих мягких французских булок, да выпей чаю";
  
  console.log(message[4]); */
  
  /*let message = "съешь ещё этих мягких французских булок, да выпей чаю";
  
  message = message.toUpperCase();
  message = message.toUpperCase();
  console.log(message);*/
  
  //--- мягких на 15 позиции
  /*let message = "съешь ещё этих мягких французских булок, да выпей чаю";
  let wordChek = message.indexOf("мягких ",0);
  console.log(wordChek);*/
  
  // слово которого нет в фразе, выдаст минус один -1//
  /*let message = "съешь ещё этих мягких французских булок, да выпей чаю";
  let wordChek = message.indexOf("здесь ",0);
  console.log(wordChek);*/
  
  //-true правда или нет-//
  /*let message = "Съешь ещё этих мягких французских булок, да выпей чаю";
  message = message.toLowerCase();
  let wordChek = message.includes("съешь",0);
  console.log(wordChek);*/
  
  //false неправда, поскольку начинает искать с 15//
  /*let message = "Съешь ещё этих мягких французских булок, да выпей чаю";
  message = message.toLowerCase();
  let wordChek = message.includes("съешь",15);
  console.log(wordChek);*/
  
  //начинается на http//
  /*let link = "http//yandex.ru";
  let linkChek = link.startsWith("http");
  console.log(linkChek);*/
  
  //заканчивается на.ru//
  /*let link = "http://yandex.ru";
  let linkCheck = link.endsWith(".ru");
  console.log(linkCheck);*/
  
  //будет начало с 10
  /*let message = "Съешь ещё этих мягких французских булок, да выпей чаю";
  let subMessage = message.slice(10)
  console.log(subMessage);*/
  
  
  //??? по трем нижним
  /*let message = "Съешь ещё этих мягких французских булок, да выпей чаю";
  let subMessage = message[0].toUpperCase() + message.slice(1);
  console.log(message);*/
  
  
  /*let message = "Съешь ещё этих мягких французских булок, да выпей чаю";
  let subMessage = message.slice(-5,-2);
  console.log(message);*/
  
  
  /*let message = "Съешь ещё этих мягких французских булок, да выпей чаю";
  let subMessage = message.slice(15,6);
  console.log(message);*/
  
  //когда неправильно введено имя, уберет пробелы//
  /*let name = "   иван   "
  console.log(name);
  name = name.trim();
  console.log(name);*/
  
  //------МАССИВЫ--------//
  
  /* let fruits = ["Яблоко", "Апельсин", "Слива", true, 15, [ "Мама","Папа"]];
  console.log(fruits);*/
  
  //вытащит из массива мама и папа
   /*let fruits = ["Яблоко", "Апельсин", "Слива", true, 15, [ "Мама","Папа"]];
  console.log(fruits[5]);*/
  
  //вытащит папа
  /*let fruits = ["Яблоко", "Апельсин", "Слива", true, 15, [ "Мама","Папа"]];
  console.log(fruits[5][1]);*/
  
  //длинна массива 6
  /*let fruits = ["Яблоко", "Апельсин", "Слива", true, 15, [ "Мама","Папа"]];
  console.log(fruits.length);*/
  
  //буква к в слове яблоко
  /*let fruits = ["Яблоко", "Апельсин", "Слива", true, 15, [ "Мама","Папа"]];
  console.log(fruits[0][4]);*/
  
  /* let fruits = [
    "Яблоко",
    "Апельсин",
    "Слива",
    ];
  console.log(fruits);*/
  
  // добавить груша
  /*let fruits = ["Яблоко","Апельсин","Слива",];
  fruits[3] = "Груша"
  console.log(fruits);*/
  
  //добавить груша в конец
  /*let fruits = ["Яблоко","Апельсин","Слива",];
  fruits[fruits.length] = "Груша"
  console.log(fruits);*/
  
  // тоже добавить в конец
  /*let fruits = ["Яблоко","Апельсин","Слива",];
  fruits.push("Груша");
  console.log(fruits);*/
  
  //уберет грушу
  /*let fruits = ["Яблоко","Апельсин","Слива",];
   //fruits[fruits.length] = "Груша"
  fruits.push("Груша");
  fruits.pop();
  console.log(fruits);*/
  
  //уберет сливу
  /* let fruits = ["Яблоко","Апельсин","Слива",];
   //fruits[fruits.length] = "Груша"
  fruits.pop(); 
  fruits.push("Груша");
  console.log(fruits);*/
  
  //добавление груши в начало
  /* let fruits = ["Яблоко","Апельсин","Слива",];
   fruits.unshift("Груша"); 
  console.log(fruits);*/
  
  //уберет яблоко, добавит грушу//
  /* let fruits = ["Яблоко","Апельсин","Слива",];
  fruits.shift();
  fruits.unshift("Груша"); 
  console.log(fruits);*/
  
  /* let fruits = ["Яблоко","Апельсин","Слива",];
  for (let i = 0; i < fruits.length; i++) {
  console.log(fruits[i]); 
  }*/
  //в столбик
  /* let fruits = ["Яблоко","Апельсин","Слива",];
  for (let i = 0; i < fruits.length; i++) {
  console.log(fruits[i]); 
  }*/
  
  //удаление яблоко, груша, апельсин длинный вариант
  //let fruits = ["Яблоко","Апельсин","Слива",];
  
  //fruits.shift(0);
  //fruits.shift(1);
  //fruits.shift(2);
  //console.log(fruits);
  
  //в столбик с добавлением !
  /*let fruits = ["Яблоко","Апельсин","Слива",];
  for ( let i = 0; i < fruits.length; i++) {
  (fruits[i] += "!"); 
  console.log(fruits[i]);
  }
  console.log(fruitsi);*/
  
  /*let fruits = ["Яблоко","Апельсин","Слива",];
  for ( let i = 0; i < fruits.length; i++) {
   (fruits[i] += "!"); 
   console.log(fruits[i]);
  }
  console.log(fruitsi);*/
  
  /*let fruits = ["Яблоко","Апельсин","Слива",];
  for ( elem of fruits) {
    elem += "!"
    console.log(elem);
  }
  console.log(fruits);*/
  
  // МНОГОМЕРНЫЕ МАССИВЫ МАТРИЦА
  
  //удалить сливу (скакого,сколько)
  /*
  let fruits = ["Яблоко","Апельсин","Слива","Манго", "Ананас"];
  fruits.splice(2,1)
  console.log(fruits);*/
  
  //останется только яблоко и апельсин//
  /*let fruits = ["Яблоко","Апельсин","Слива","Манго", "Ананас"];
  fruits.splice(2,3)
  console.log(fruits);*/
  
  //убрать 3 последних и заменить другими//
  /*let fruits = ["Яблоко","Апельсин","Слива","Манго", "Ананас"];
  fruits.splice(2,3,"Личи","Арбуз","Кокос")
  console.log(fruits);*/
  
   //вырезал -splice апельсин слива ананас//
  /*let fruits = ["Яблоко","Апельсин","Слива","Манго", "Ананас"];
  let cart = fruits.splice(1,3);
  console.log(fruits);*/
  
// копировал -slice
 /* let fruits = ["Яблоко","Апельсин","Слива","Манго", "Ананас"];
  let cart = fruits.slice(1,3);
  console.log(fruits);*/
  
  //переложить фрукты ???
  /* let shelf1 = ["Яблоко","Апельсин","Слива"]
  let shelf2 = ["Манго","Ананас"];
  let fruits = shelf1.concat(shelf2); 
  console.log(fruits);
  console.log(shelf1);*/
  
  //переложить вторая полка пустая//
  /*let shelf1 = ["Яблоко","Апельсин","Слива"]
  let shelf2 = ["Манго","Ананас"];
  shelf1 = shelf1.concat(shelf2);
  shelf2 = []
  console.log(shelf1);
  console.log(shelf2);*/
  
  
  /* let online = ["Вася", "Петя", "Миша", "Сергей", "Анна"];
  let message = "Полозователи онлайн: ";
  for (let i = 0; i <online.length; i++) {
  message += online[i]+" , ";
  }
  message = message.slice(0,-2);
  console.log(message);*/
  
  //В столбик
  /* let fruits = ["Яблоко","Апельсин","Слива","Манго", "Ананас"];
  fruits.forEach(function(item, index, array) {
   console.log(item);
  }); */
  
  // В столбик  но как массив (добавлены кавычки[])
  /*let fruits = ["Яблоко","Апельсин","Слива","Манго", "Ананас"];
  fruits.forEach(function(item, index, array) {
   console.log([item, index, array]);
  }); */
   
  // Ниже 2 одинаковые функции, только в нижней запись короче//
  /* let fruits = ["Яблоко","Апельсин","Слива","Манго", "Ананас"];
  fruits.forEach(function(item, index, array) {
   console.log([item, index, array]);
  }); 
  // одинаковы верхнее и нижнее//
  fruits.forEach((item, index, array)=> {
   console.log([item, index, array]);
  }); */
  
  
  // ПОИСК В МАССИВЕ
  /*let fruits = ["Яблоко","Апельсин","Слива","Манго", "Ананас"];
  let fruitsSearch = fruits.indexOf("Слива");
  
   console.log( fruitsSearch);*/
   
  // не совсем понятно
  /*let fruits = ["Яблоко","Апельсин","Слива","Манго", "Ананас"];
  let fruitSearch = fruits.includes("Слива");
  
   console.log(fruitSearch);*/
  
  //перевернуть массив задом наперед//
  /*let fruits = ["Яблоко","Апельсин","Слива","Манго", "Ананас"];
  fruits.reverse();
  
   console.log(fruits);*/
   
  //массив в строку 
  /* let usersString = "Вася,Петя,Миша,Сергей,Анна";
   let users =  usersString.split(", ")
  console.log(users); */
  
  //Разделить  символом |
  /*let fruits = ["Яблоко","Апельсин","Слива","Манго", "Ананас"];
  let goodsList = fruits.join(" | ");
  console.log(goodsList);*/
  
  //ОБЪЕКТЫ//
  
  /* let user = {
   name: "Баклан",
   surname:"Бакланов",
   patronim:"Бакланович",
   dateBirth:"01.04.1990",
   likeBirds: true,
   birdsWatched:["Синички", "Вообушки", "Пингвины"],
   "bad habbits": "Пьет",
  }
   console.log(user["name"]);*/
   
 //Баклан Бакланович Бакланов//  
  /*let user = {
   name: "Баклан",
   surname:"Бакланов",
   patronim:"Бакланович",
   dateBirth:"01.04.1990",
   likeBirds: true,
   birdsWatched:["Синички", "Вообушки", "Пингвины"],
   "bad habbits": "Пьет",
  }
  // console.log(user["name"]);
    console.log(user.name);
  let fuiiName = `${user.name}  ${user.patronim}  ${user.surname}`;
   console.log(fuiiName);*/
   
  //Добавить Орлы// 
  /*let user = {
   name: "Баклан",
   surname:"Бакланов",
   patronim:"Бакланович",
   dateBirth:"01.04.1990",
   likeBirds: true,
   birdsWatched:["Синички", "Вообушки", "Пингвины"],
   "bad habbits": "Пьет",
   addBird(BirdName) {
    this.birdsWatched.push(BirdName);
   }
  }
  user.addBird("Орлы");
  
  console.log(user.birdsWatched);*/ 
  
  //ВАРИАНТЫ ПРЕДЫДУЩИХ ОКОНЧАНИЙ//
  // console.log(user["name"]);
  //  console.log(user.name);
  //let fuiiName = `${user.name}  ${user.patronim}  ${user.surname}`;
   //console.log(fuiiName);
  
  // 
   
  let user = {
   name: "Баклан",
   surname:"Бакланов",
   patronim:"Бакланович",
   dateBirth:"01.04.1990",
   likeBirds: true,
   birdsWatched:["Синички", "Вообушки", "Пингвины"],
   "bad habbits": "Пьет",
   addBird(BirdName) {
    this.birdsWatched.push(BirdName);
   }
  }
  user.addBird("Орлы");
  
  console.log(user.birdsWatched);
  
  
  
  
 </script>
  
 
</body>
</html>