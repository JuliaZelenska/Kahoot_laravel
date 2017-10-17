function finishQuiz() {
    event.preventDefault();
    $('#checkbox_last_question').prop("checked", true);
    $('#send_question').submit();
}
