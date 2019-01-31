var numberToGuess = determineNumber();
var timeID = setTimeout(endGame,15000);

let theButton = document.getElementById('mySubmit');
theButton.addEventListener('click', function(e){
    e.preventDefault();
    guessNumber();}, false);

function determineNumber(){
    //fill this in--this function just determines the random number to be guessed
}

function printAnswer(theAnswer){
    //fill this in--this function just prints "You are too high", "You are too low", "You win", or "You lose".  A clue--the variable: 'theAnswer' should equal: " are too high", " are too low", " win", " lose"
}
                                      
function guessNumber(){ 
       //this is an extended if then else statement
    };
    

    
function endGame(){
    //fill this in - this call printAnswer and disables the text field.        
}


    

