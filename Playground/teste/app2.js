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

var question = [["Care din urmatoarele structuri nu este o structura repetitiva?", "if", "while", "for", "do", 1],
               ["Cate elemente are tabbloul bidimensional a[12][4]?", "3", "48", "26", "9", 2],
               ["Daca avem o structura in C++ 'for(int i = 0;i < 8;i++)' , de cate ori se parcurge structura", "de 9 ori", "de 8 ori", "de 5 ori", "de 6 ori", 2],
               ["Pentru ce valori ale variabilei x(de tip intreg) se parcurge urmatoarea structura : if(x % 2 == 0),?",  "Cand x are o valoare impara", "Cand x are o valoare para", "Pentru orice valoare a lui x", "Pentru x = 0", 2],
               ["ce face algoritmul lui Euclid?", "Rezolva probleme", "Afla suma a doua numere", "Afla cmmmc", "Afla cmmdc dintre doua numere", 4]];


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
      mainBody.innerHTML = "<h3>"+"Scorul tau este:"+ score+"/5"+"</h3>"+"<p>"+"Raspunsuri:"+ "</p>"+"<p>"+"1) if"+ "</p>"+ "<p>"+ "2) 48"+ "</p>"+ "<p>"+ "3) de 8 ori"+ "</p>"+ "<p>"+ "4) Cand x are o valoare para"+ "</p>"+ "<p>"+ "5) Afla cmmdc a doua numere"+ "</p>";
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
