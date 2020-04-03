//$(".box").on("click", () => alert("Нажали на квадрат"));
let box = $ (".box");
//box[0].style.background =  "red";// в красный перекрасить квадрат
//console.log(box);
$(box).click(() => {
  $(box).hide()
        .show(4000)// при нажатии квадрат исчезнет и появится через 4000 мили сек//
        .fadeOut(1000)//спрятать
        .delay(1000)//пропадает
        .fadeIn(300)
        .delay(1000)//пропадает
        .animate({
          "min-width" : "450px",//
          "min-height" : "250px",//
          "opacity" : "30px",//прозрачность // расширяется
        }, 400,   callback);//=> alert("Анимация завершилась")); ------один из вариантов завершения  после 444, ниже второй// 
});

/*function callback() {
  alert("Анимация завершена") 
 }*/ //второй вариант завершения

function callback() {
   $(box).css({
           "background" : "red",
           "box-shadow" : "15px 15px 25px rgba(0,0,0,0,8)",
           "opacity" : "100px",
          }) // последний перекрасится в красный
          .attr({
            "src" : "somewhere.com",
            "href" : "anotherlink.com",
            "cost" : "150",
          })
          .addClass("one withborder")
          .html("<p>Текст в коробке</p>")// текст внутри
  
}







