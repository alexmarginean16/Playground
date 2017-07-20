/*
function populate() {
  if(quiz.isEnded()) {
    //showScores();
  }
  else {
    // show question
    var element = document.getElementById("question");
    element.innerHTML = quiz.getQuestionIndex().text;
  }
}

var questions = [
  new Questions("Cat face 24 + 3?", ["42", "27", "31", "12"], "27"),
  new Questions("Cat face 6 * 8", ["2", "24", "26", "48"], "48"),
  new Questions("Cat este x daca : 2 * x = 14 ?", ["43", "2", "7", "77"], "7"),
  new Questions("Ce triunghi are toate laturile egale?", ["oarecare", "echilateral", "isoscel", "dreptunghic"], "echilateral")
];

var quiz = new Quiz(questions);

populate();
*/

var question = [["Cat face 24 + 3?", "42", "27", "31", "12 cm", 2],
               ["Cat face 6 * 8?", "2", "24", "26", "48", 4],
               ["Cat este x daca : 2x = 14?", "43", "2", "7", "77", 3],
               ["Care din urmatoarele triunghiuri au toate laturile egale?",  "oarecare", "echilateral", "isoscel", "dreptunghic", 2],
               ["Care este formula teoremei lui Pitagora (T.P.)", "ip^2 = c1^2 + c2^2", "ip^2 = c1^2 * c2^2", "h = (c1 * c2) / ip", "ip = h + c2", 1]];

var nrintrebare = 1;
var score = 0;
var quesNum = 0;

function displayQuiz(){

var quest = document.getElementById("question");
quest.innerHTML = question[quesNum][0];

var intreb = document.getElementById("intrebb");
intreb.innerHTML = "Intrebarea " +  (quesNum + 1) + " din 5";

  for(j=1; j<=4; j++){
     var opt = document.getElementById("choice"+j);
     opt.innerHTML = question[quesNum][j];
 }

}

(function () {
    displayQuiz();
})();

function validat(item){

    if(item === "choice"+question[quesNum][5]){
      score++;
    }

    if(item === "btn"+question[quesNum][5]){
      score++;
    }

    if(quesNum === 4){
      var mainBody = document.getElementById("quiz");
      mainBody.innerHTML = "<h3>"+"Scorul tau este:"+ score+"/5"+"</h3>"+"<p>"+"Raspunsuri:"+ "</p>"+"<p>"+"1) 24 + 3 = 27"+ "</p>"+ "<p>"+ "2) 6 * 8 = 48"+ "</p>"+ "<p>"+ "3) 2x = 14 => x = 14/2; x = 7"+ "</p>"+ "<p>"+ "4) Triunghiul cu toate laturile egale se numeste triunghi echilateral"+ "</p>"+ "<p>"+ "5) Formula Teoremei lui Pitagora este: ip^2 = c1^2 + c2^2."+ "</p>" + "<h3>"+ "Ai primit 5 banuti pentru participare :)"+ "</h3>";
    }

    quesNum++;
}

var theParent = document.getElementById("buttons");
theParent.addEventListener("click", listenMe, false);

function listenMe(e) {
    if (e.target !== e.currentTarget) {
        var clickedItem = e.target.id;
        validat(clickedItem);
    }
    e.stopPropagation();
    if(quesNum < 5){
    displayQuiz();}
}
