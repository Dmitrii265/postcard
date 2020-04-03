//1. Задача. Создайте переменные c=15 и d=2. Просуммируйте их, а результат присвойте переменной result. Выведите на экран значение переменной result.// 

/*var c = 15, d = 2;
var result = c + d;
alert(result);*/

//2. Задача. Создайте массив arr с элементами 1, 2, 3, 4, 5 двумя различными способами.// 

//1 способ//
/*var arr = [1, 2, 3, 4, 5];*/

//2 способ//
/*var arr = [];
arr[0] = 1;
arr[1] = 2;
arr[2] = 3;
arr[3] = 4;
arr[4] = 5;*/

//3. Задача. Если переменная a больше нуля, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при a, равном 1, 0, -3.// 

/*var a = 1;
if (a > 0) {
alert('Верно');
} else {
alert('Неверно');
}

var a = 0;
if (a > 0) {
alert('Верно');
} else {
alert('Неверно');
}

var a = -3;
if (a > 0) {
alert('Верно');
} else {
alert('Неверно');
} */

//4. Задача. Выведите столбец чисел от 1 до 100.// 

/*for (var i = 1; i <= 100; i++) {
	document.write(i + '<br>');
}*/

//5. Задача. Найдите квадратный корень из 379. Результат округлите до целых, до десятых, до сотых.//

/*var sqr = Math.sqrt(379);
alert('Округляем до целых - ' + Math.round(sqr));
alert('Округляем до десятых - ' + sqr.toFixed(1));
alert('Округляем до сотых - ' + sqr.toFixed(2));*/

//6. Задача. Дана строка 'JS'. Сделайте из нее строку 'js'.//

/*let str = 'JS';
console.log(str.toLowerCase());*/

//7. Задача. Дан массив [1, 2, 3]. Добавьте ему в конец элементы 4, 5, 6.// 

/*var arr = [1,2,3];
arr.push(4,5,6);
console.log(arr);
alert(arr);*/

//8. Задача. Дана строка. Сделайте заглавным первый символ этой строки не используя цикл. Найдите два решения.//

// №1//
/*var str = 'я сдаю зачет';
var newStr = str.slice(0,1).toUpperCase() + str.slice(1);
alert(newStr);*/

//№2//

/*var str = 'я сдаю зачет';
var arr = str.split('');
arr[0] = arr[0].toUpperCase();
str = arr.join('');
console.log(str);
//№3//
var str = 'я сдаю зачет';
str = str[0].toUpperCase() + str.substr(1);
console.log(str);*/

//9. Задача. Сделайте функцию, которая принимает параметром число от 1 до 7, а возвращает день недели на русском языке.// 

/*var fDay = function (day) {
switch(day){
case 1: return "понедельник";
case 2: return "втоник";
case 3: return "среда";
case 4: return "четверг";
case 5: return "пятница";
case 6: return "суббота";
case 7: return "воскресение";
default: return "Вы ввели некорректное число";
}
}
document.write(fDay(1)); */

/*10. Задача. Дано число, например 31. Проверьте, что это число не делится ни на одно другое 
число кроме себя самого и единицы. То есть в нашем случае нужно проверить, что число 31 
не делится на все числа от 2 до 30. Если число не делится - выведите 'false', а если делится - 
выведите 'true'. */
/*var num = 31;

function isSimple(num){
for(var i = 2; i < num; i++){
if(num % i == 0){
return 'false';
} else {
return 'true';

}
}
}
alert(isSimple(num));*/

//11. Задача. Сделайте функцию, которая параметрами принимает 2 числа. Если их сумма больше 10 - пусть функция вернет true, а если нет - false. //

/*function func(a, b) {
return a + b > 10;
}
alert(func(6, 5));*/

/*12. Задача. С помощью двух вложенных циклов нарисуйте следующую пирамидку: 
1 
22 
333 
4444 
55555 
666666 
7777777
88888888 
999999999 
*/
/*for (let i = 1; i <= 9; i++) {
	for (let j = 1; j <= i; j++) {
		document.write(i);
	}
	
	document.write('<br>');
}*/

//13. Задача. Дан массив с числами. Не используя метода reverse переверните его элементы в обратном порядке// 
/*var arr = [1, 2, 3, 4, 5, 6];
var newArr = [];
for (var i=arr.length-1; i>=0; i--) {
newArr.push(arr[i]);
}
console.log(newArr)*/

//14. Задача. Найдите все года от 1 до 2019, сумма цифр которых равна 13. //
/*var sum = 13;
for (var i = 1; i <= 2019; i++) {
    sum += i;
}//
//15. Задача. Дана строка вида 'var_text_hello'. Сделайте из него текст 'varTextHello'. //

/*var str = 'var_text_hello'; 
var arr = str.split('_'); 
var newArr = []; 

for (i = 1; i < arr.length; i++) { 
arr[0].toLowerCase(); 
newArr.push(firstSymUp(arr[i])); 
}*/ 

/*function firstSymUp(word) { 
var res = word.slice(0,1).toUpperCase() + word.slice(1); 
return res; 
} 

document.write(arr[0] + newArr.join(''));*/

//16. Задача. Дан массив с числами. Выведите последовательно его элементы используя рекурсию и не используя цикл.// 

/*var arr = [1, 2, 3, 4, 5];
elemArrRecursion(arr);

function elemArrRecursion(arr) {
document.write(arr.shift() + "<br>");
if (arr.length > 0) {
elemArrRecursion(arr);
}
}*/

//17. Задача. Заполните массив числами от 1 до 10 с помощью цикла. //

/*var arr = [];

for(i = 1; i <= 10;i++) {
  arr.push(i);
}
document.write(arr);*/

//18. Задача. Выведите на экран текущий год.//

/*alert(new Date().getFullYear());*/

//19. Задача. Даны картинки. Привяжите к каждой картинке событие, чтобы по клику на картинкуалертом выводился ее src. //

/*var elems = document.getElementsByTagName('img');

for (var i = 0; i < elems.length; i++) {
elems[i].onclick = func;
}

function func() {
alert(this.getAttribute('src'));
}*/

//20. Задача. Дана кнопка. По нажатию на эту кнопку прокрутите окно браузера до самого низа. //

/*let elem = document.querySelector('body');
let sub = document.querySelector('input');

sub.addEventListener('click', function () {
window.scrollTo(0, elem.scrollHeight);
});*/





