/**
 * Created by Yuliia on 22.10.2017.
 */

function showQuestion(question, numberOfQuestion) {
    showElement(numberOfQuestion, question.question, 'h1');
    showElement(numberOfQuestion, question.true, 'li');
    showElement(numberOfQuestion, question.false1, 'li');
    showElement(numberOfQuestion, question.false2, 'li');
    showElement(numberOfQuestion, question.false3, 'li');
}

let questionDiv = document.getElementById('question-container');

function showElement(numberOfQuestion, content, element, id) {
    let htmlElement = "<" + element + " id=\"" + id + "\" data-numberofquestion=\"" + numberOfQuestion + "\">" + content + "</" + element + ">"; // HTML string

    let e = document.createElement('div');
    e.innerHTML = htmlElement;

    while (e.firstChild) {
        questionDiv.appendChild(e.firstChild);
    }
}

$('#question-container').on('click', '> li', function () {
    let answer = this.innerHTML;
    let numberOfQuestion = this.dataset.numberofquestion;

    $.ajax({
        url: "check-question",
        type: "post",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            "answer": answer,
            "number_of_question": numberOfQuestion,
        },
        success: function (response) {
            checkAnswer(response);
        }
    });
});


$('#btn-next').click(function () {
    loadQuestion();
});

function checkAnswer(answer) {
    if (answer === "true") {
        console.log("GOOD!");
    } else {
        console.log("Wrong");
    }
    loadQuestion();
}

function nextQuestion() {
    console.log("Next question");
    questionDiv.innerHTML = "";
}

function finishQuiz() {
    console.log("Quiz is over");

}

$(function () {
    $.ajax({
        url: "get-quiz",
        type: "get",
        data: {
            quiz_name: 'Maderfucking'
        },
        success: function (response) {
            createQuiz(response);
        },
        error: function (xhr) {
            //Do Something to handle error
        }
    });
});

let quiz;
let numberOfQuestions;
let x;

function createQuiz(quiz) {
    this.quiz = quiz;
    numberOfQuestions = quiz.length;

    x = 0;
    loadQuestion();
}

function loadQuestion() {
    if (x !== 0) {
        nextQuestion();
    }

    showQuestion(this.quiz[x], x);

    x++;
    console.log(numberOfQuestions, x);
    if (x === numberOfQuestions) {
        finishQuiz();
    }
}

