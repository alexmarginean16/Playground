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

var question = [["Care din urmatoarele limbaje este folosit pentru applicatii de iOS?", "F#", "Java", "Swift", "ReactJS", 3],
               ["Care din urmatoarele limbaje a aparut in 2005", "F#", "C++", "C", "C#", 1],
               ["Care a fost primul limbaj de programare", "assembly language", "C++", "NodeJS", "Objective-C", 1],
               ["Cine este fondatorul facebook?",  "Bill Gates", "Steve Jobs", "Tim cook", "Mark Zuckerberg", 4],
               ["Care din urmatoarele limbaje sunt folosite pentru a creea baze de date?", "SQL", "PHP", "Javascript", "C#", 1]];


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
      mainBody.innerHTML = "<h3>"+"Scorul tau este:"+ score+"/5"+"</h3>"+"<p>"+"Raspunsuri:"+ "</p>"+"<p>"+"1) Swift"+ "</p>"+ "<p>"+ "2) F#"+ "</p>"+ "<p>"+ "3) assembly language"+ "</p>"+ "<p>"+ "4) Mark Zuckerberg"+ "</p>"+ "<p>"+ "5) SQL"+ "</p>";
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
