function submit(){
const message =
  "We thank you for your request. Will contact you as soon as possible.";
document
  .getElementById("contact-form")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    alert(message);
  });
}
 

function extraire() {
     character = message1.substring(I, I=I+1) ;
     if ( character == "-" &&  message1.substr(I, 5) == "stop-" ) {
          character = "" ;
          I = I + 5;
          }
     titleSentence.innerHTML += character;
     if ( I < message1.length ) setTimeout(extraire, 151);
     }
I = 0 ;
message1 = "-stop-We Make-stop--stop--stop- Your Dream-stop--stop--stop- Come True";
extraire();

 