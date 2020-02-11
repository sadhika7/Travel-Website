var fortunes = document.getElementById("fortune");
var luckyNum = document.getElementById("luckyNum");

var randomNum = Math.floor(Math.random() * 110) + 1;
var luckyNumber = "";

for(var i = 0; i < 5; i++) {
  var randomNum2	= Math.floor(Math.random() * 69) + 1;
  var luckyNumber =  luckyNumber + randomNum2.toString() + " ";
}
var fortune = firebase.firestore().collection("fortunes").doc(randomNum.toString());
fortune.get().then(doc => {
  luckyNum.textContent = "Lucky Numbers: " + luckyNumber;
  fortunes.textContent = "Fortune Message: " + doc.data().quote;
});
