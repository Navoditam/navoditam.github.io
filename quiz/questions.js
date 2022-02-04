var answerArray = [];
var randomIntArr = [];
var str = "";
var numberOfQuestions = 10;
randomInts(numberOfQuestions, questionArray.length);

function randomInts(quantity, max){
  while(randomIntArr.length < quantity){
    var candidateInt = Math.floor(Math.random() * max);
    if(randomIntArr.indexOf(candidateInt) === -1) randomIntArr.push(candidateInt)
  }
}

loadQuestions()

function loadQuestions(){

  for (let i=0; i<randomIntArr.length; i++){

    let j = i+1;
    i = randomIntArr[i];

    str+= `<div class="border border-secondary m-2 hidden-tab">
      <p class="border bg-info bg-opacity-25 p-3 m-2 fst-italic">This is reference Text.</p>

      <p class="border bg-secondary bg-opacity-25 p-3 m-2 fw-bold">`+questionArray[i][0]+`</p>

      <div class="m-2 pt-3">
        <div class="row m-0 p-0 justify-content-around">

          <div class="col-lg-6 mb-3">
            <input type="radio" class="btn-check" name="btnradio`+j+`" id="btnradio1`+j+`" autocomplete="off" value="1">
            <label class="btn btn-outline-success d-flex no-shadow" for="btnradio1`+j+`" onclick="answerStatus()">`+questionArray[i][1]+`</label>
          </div>


          <div class="col-lg-6 mb-3">
            <input type="radio" class="btn-check" name="btnradio`+j+`" id="btnradio2`+j+`" autocomplete="off" value="2">
            <label class="btn btn-outline-success d-flex no-shadow" for="btnradio2`+j+`" onclick="answerStatus()">`+questionArray[i][2]+`</label>
          </div>

          <div class="col-lg-6 mb-3">
            <input type="radio" class="btn-check" name="btnradio`+j+`" id="btnradio3`+j+`" autocomplete="off" value="3">
            <label class="btn btn-outline-success d-flex no-shadow" for="btnradio3`+j+`" onclick="answerStatus()">`+questionArray[i][3]+`</label>
          </div>

          <div class="col-lg-6 mb-3">
            <input type="radio" class="btn-check" name="btnradio`+j+`" id="btnradio4`+j+`" autocomplete="off" value="4">
            <label class="btn btn-outline-success d-flex no-shadow" for="btnradio4`+j+`" onclick="answerStatus()">`+questionArray[i][4]+`</label>
          </div>

        </div>
      </div>
    
    </div>`

    let answerArrayElement = {};
    answerArrayElement['name'] = `btnradio`+j;
    answerArrayElement['value'] = questionArray[i][5];
    answerArray[j-1] = answerArrayElement;
    i = j-1;
    
  }
  document.getElementById("quiz").innerHTML = str;
}

var marksObtained = 0;
var strAns = "CORRECTED ANSWER(S)\n";

function quizResult(){
  for (let i=0; i<answerArray.length; i++){
    for (let j=0; j<answeredArray.length; j++){
        if (answerArray[i].name == answeredArray[j].name){
          if (answerArray[i].value == answeredArray[j].value){
            marksObtained++
          }
          else {
            let x = randomIntArr[i]
            let ques = questionArray[x][0];
            let ans =  questionArray[x][answerArray[i].value]
            strAns+=("QN"+(i+1)+": "+ques+"\nANS: "+ans+"\n")
          }
        }
        else{
          let x = randomIntArr[i]
            let ques = questionArray[x][0];
            let ans =  questionArray[x][answerArray[i].value]
            strAns+=("QUE"+(i+1)+": "+ques+"\nANS: "+ans+"\n")
          }
        }
      } 
    console.log(strAns);
}

