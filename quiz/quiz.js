window.onload = function(){
    let testTime = 60*4;
    startTimer(testTime);
    setTimeout(autoSubmitForm, testTime*1000+1000);
};

var currentTab = 0;
var questionAnswered = 0;
var questionBookmarked = 0;
listQuestionsBox();
showTab(currentTab);

var answeredArray;
function onSubmit(){
    answeredArray = $('form').serializeArray();
    let boolstr = confirm("Do you confirm to submit the test?");
    quizResult()
    if (boolstr){
        if ((marksObtained/numberOfQuestions)*100<50){
            alert("Your test has been submitted successfully.\nYour score is : "+marksObtained+"/"+numberOfQuestions+"\nYour good is still to come. Try Again!\nRegards\nAbhinav Gurukul")
        }
        else if ((marksObtained/numberOfQuestions)*100<70){
            alert("Your test has been submitted successfully.\nYour score is : "+marksObtained+"/"+numberOfQuestions+"\nYou are going Good. Go for better!\nRegards\nAbhinav Gurukul")
        }
        else {
            alert("Your test has been submitted successfully.\nYour score is : "+marksObtained+"/"+numberOfQuestions+"\nExcellent. You are going to make us proud one day!\nRegards\nAbhinav Gurukul")
        }
        alert(strAns)
        // location.reload()
    }
}

function autoSubmitForm(){
    answeredArray = $('form').serializeArray();
    quizResult()
    if ((marksObtained/numberOfQuestions)*100<50){
        alert("Your test has been submitted automatically.\nYour score is : "+marksObtained+"/"+numberOfQuestions+"\nYour good is still to come. Try Again!\nRegards\nAbhinav Gurukul")
      }
      else if ((marksObtained/numberOfQuestions)*100<70){
        alert("Your test has been submitted automatically.\nYour score is : "+marksObtained+"/"+numberOfQuestions+"\nYou are going Good. Go for better!\nRegards\nAbhinav Gurukul")
      }
      else {
        alert("Your test has been submitted automatically.\nYour score is : "+marksObtained+"/"+numberOfQuestions+"\nExcellent. You are going to make us proud one day!\nRegards\nAbhinav Gurukul")
      }
      alert(strAns)
    location.reload()
}

function showTab(n){

    let x = document.getElementsByClassName("hidden-tab");
    x[n].style.display = "block";
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").style.display = "none";
    } else {
        document.getElementById("nextBtn").style.display = "inline";
    }

    questionNumber();

}

function nextTab(){
    let x = document.getElementsByClassName("hidden-tab");
    x[currentTab].style.display = null;
    currentTab++;
    showTab(currentTab);
    getQuestionBoxElement();
}

function prevTab(){
    let x = document.getElementsByClassName("hidden-tab");
    x[currentTab].style.display = null;
    currentTab--;
    showTab(currentTab);
    getQuestionBoxElement();
}

function getQuestionBoxElement(){

    let eHiddenTab = document.getElementsByClassName("hidden-tab");
    let eQuestionList = document.getElementById("questionsList");

    for (i=0; i<(eHiddenTab.length); i++){
        if (eQuestionList.children[i].innerHTML == (currentTab+1)){
            let t = eQuestionList.children[i];
            bookmarkStatus(t);
            break;
        }
    }
}

function questionNumber(){

    let x = document.getElementsByClassName("hidden-tab");

    p = document.getElementsByName("questionAllCount");
    p[0].innerHTML = x.length;
    p[1].innerHTML = x.length;
    
    q = document.getElementsByName("questionNumber");
    q[0].innerHTML = currentTab+1;
    q[1].innerHTML = currentTab+1;
    
    r = document.getElementsByName("questionAll");
    r[0].innerHTML = 'Total Questions ('+x.length+')';
    r[1].innerHTML = 'Total Questions ('+x.length+')';

    s = document.getElementsByName("questionAnswered");
    s[0].innerHTML = 'Answered Ques. ('+questionAnswered+')';
    s[1].innerHTML = 'Answered Ques. ('+questionAnswered+')';

    t = document.getElementsByName("questionBookmarked");
    t[0].innerHTML = 'Bookmarked Ques. ('+questionBookmarked+')';
    t[1].innerHTML = 'Bookmarked Ques. ('+questionBookmarked+')';

    u = document.getElementsByName("questionUnanswered");
    u[0].innerHTML = 'Unanswered Ques. ('+(x.length - questionAnswered)+')';
    u[1].innerHTML = 'Unanswered Ques. ('+(x.length - questionAnswered)+')';
}

function clearAns(){
    let radionum = currentTab+1;
    let radioname = 'input[name="btnradio'+radionum+'"]:checked'
    document.querySelector(radioname).checked = false;
    answerStatus()
}

function listQuestionsBox(){
    let x = document.getElementsByClassName("hidden-tab");
    let str = ``;
    for (i=1; i<x.length+1; i++){
        str+= `<button class="btn border-2 col-2 px-0 mb-2 rounded-1 btn-outline-success" onclick="getDirectQuestion(`+i+`, this)">`+i+`</button>\n`;
    }
    document.getElementById("questionsList").innerHTML=str;
}

function getDirectQuestion(n, thisButtonElement){
    let x = document.getElementsByClassName("hidden-tab");
    x[currentTab].style.display = null;
    currentTab = n-1;
    showTab(currentTab);
    bookmarkStatus(thisButtonElement);
}

function bookmarkStatus(thisButtonElement){

    let y = document.getElementsByName("bookmark");

    if (thisButtonElement.classList.contains("text-warning")){
        for(i=0; i<y.length; i++){
            y[i].classList.remove("bi-bookmark-plus");
            y[i].classList.add("bi-bookmark-check");
            y[i].innerText = ' Bookmarked';
        }
    }
    else{ for(i=0; i<y.length; i++){
            y[i].classList.remove("bi-bookmark-check");
            y[i].classList.add("bi-bookmark-plus");
            y[i].innerText = ' Bookmark';
        }

    }
}

function answerStatus(){
    setTimeout(function(){
        let eHiddenTab = document.getElementsByClassName("hidden-tab");
        let eQuestionList = document.getElementById("questionsList");

        for (i=0; i<(eHiddenTab.length); i++){
            if (document.getElementById("questionsList").children[i].innerHTML == (currentTab+1)){
                let radionum = (currentTab+1);
                let radioname = 'input[name="btnradio'+radionum+'"]:checked';
                if(document.querySelectorAll(radioname).length > 0){
                    eQuestionList.children[i].classList.remove("btn-outline-success");
                    eQuestionList.children[i].classList.add("btn-success");
                    break;
                }
                else{
                    eQuestionList.children[i].classList.remove("btn-success");
                    eQuestionList.children[i].classList.add("btn-outline-success");
                }
            }
        }
        questionAnsweredFn();
    }, -1000);
}

function questionAnsweredFn(){

    let eHiddenTab = document.getElementsByClassName("hidden-tab");
    let eQuestionList = document.getElementById("questionsList");
    questionAnswered = 0;
    for (i=1; i<(eHiddenTab.length+1); i++){
        let radioname = 'input[name="btnradio'+i+'"]:checked';
        if(document.querySelectorAll(radioname).length > 0){
            questionAnswered++;
        }
    }
    questionNumber()
}

function startTimer(duration) {
    let start = Date.now(),
    diff,
    minutes,
    seconds;
    function timer() {
        // get the number of seconds that have elapsed since 
        // startTimer() was called
        diff = duration - (((Date.now() - start) / 1000) | 0);
        
        // does the same job as parseInt truncates the float
        minutes = (diff / 60) | 0;
        seconds = (diff % 60) | 0;
        
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;
        
        document.getElementById("time1").textContent = minutes + ":" + seconds;
        document.getElementById("time2").textContent = minutes + ":" + seconds;
        
        if (diff <= 0) {
            // add one second so that the count down starts at the full duration
            // example 05:00 not 04:59
            start = Date.now() + 1000;
        }
    };
    // we don't want to wait a full second before the timer starts
    timer();
    setInterval(timer, 1000); 
}

function bookmark(x){
    
    let eBookmark = document.getElementsByName("bookmark");
    
    if (x.classList.contains("bi-bookmark-plus")){
        for(i=0; i<eBookmark.length; i++){
            eBookmark[i].classList.remove("bi-bookmark-plus");
            eBookmark[i].classList.add("bi-bookmark-check");
            eBookmark[i].innerText = ' Bookmarked';
            doBookmarkQuestionBox();
        }
        questionBookmarked++
    }
    
    else {
        for(i=0; i<eBookmark.length; i++){
            eBookmark[i].classList.remove("bi-bookmark-check");
            eBookmark[i].classList.add("bi-bookmark-plus");
            eBookmark[i].innerText = ' Bookmark';
            unBookmarkQuestionBox();
        }
        questionBookmarked--
    }
    questionNumber()
}

function doBookmarkQuestionBox(){
    setTimeout(function(){
        let eHiddenTab = document.getElementsByClassName("hidden-tab");
        let eQuestionList = document.getElementById("questionsList");
        for (i=0; i<(eHiddenTab.length); i++){
            if (eQuestionList.children[i].innerHTML == (currentTab+1)){
                eQuestionList.children[i].classList.add("text-warning")
            }
        }
    }, -1000);
}

function unBookmarkQuestionBox(){
    setTimeout(function(){
        let eHiddenTab = document.getElementsByClassName("hidden-tab");
        let eQuestionList = document.getElementById("questionsList");
        for (i=0; i<(eHiddenTab.length); i++){
            if (eQuestionList.children[i].innerHTML == (currentTab+1)){
                eQuestionList.children[i].classList.remove("text-warning")
            }
        }
    }, -1000);
}
