/**
 * Created by Yuliia on 22.10.2017.
 */
var btn = document.getElementById("btntest");

btn.addEventListener("click", function () {

    var ourRequest = new XMLHttpRequest();
    ourRequest.open('GET', 'https://learnwebcode.github.io/json-example/animals-1.json');
    ourRequest.onload = function () {
        var ourData = JSON.parse(ourRequest.responseText);
        renderHTML(ourData);
    };
    ourRequest.send();
    pageCounter++;
    if (pageCounter > 3) {
        btn.class.add("hide-me");
    }
    console.log("string");
});


