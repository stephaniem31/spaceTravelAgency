function extraire() {
    character = message.substring(I, I=I+1) ;
    if ( character == "-" &&  message.substr(I, 5) == "stop-" ) {
         character = "" ;
         I = I + 5;
         }
    titleSentence.innerHTML += character;
    if ( I < message.length ) setTimeout(extraire, 100);
    }
I = 0 ;

message = "We Make Your Dream Come True";

extraire();