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

var question = [["Cum se traduce propozitia 'I saw beautiful flowers in San Francisco' in limba romana?", "Florile sunt din San Francisco", "Florile din San Francisco ma fascineaza", "In San Francisco sunt flori frumoase", "Am vazut flori frumoase in San Francisco", 4],
               ["Care este forma de trecut a verbului 'to eat'", "ate", "eaten", "aeten", "eating", 1],
               ["Cum se formeaza tipul 'Past Simple'", "S + V(la frm 3)", "S + V", "S + V(la trecut)", "S + to be(la trecut) + V-ing", 3],
               ["Cum se spune 'Parbriz' in engleza?",  "Windshield", "glass", "carglass", "tow truck", 1],
               ["Ce ii lipseste propozitiei 'She wears thin socks every day.'", ".", "es", ",", "nimic", 4]];


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
      mainBody.innerHTML = "<h3>"+"Scorul tau este:"+ score+"/5"+"</h3>"+"<p>"+"Raspunsuri:"+ "</p>"+"<p>"+"1) Am vazut flori frumoase in San Francisco"+ "</p>"+ "<p>"+ "2) ate"+ "</p>"+ "<p>"+ "3) S + V(la trecut)"+ "</p>"+ "<p>"+ "4) Windshield"+ "</p>"+ "<p>"+ "5) nimic"+ "</p>";
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
