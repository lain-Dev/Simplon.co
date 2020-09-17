//Fonction choix User:
const getUserChoice = (userInput) =>{
    //mettre caractère en Minuscule:
    userInput = userInput.toLowerCase();
    if (userInput === 'rock'){
      return 'rock';
    } else if(userInput === 'paper'){
      return 'paper';
     }else if(userInput === 'scissors'){
      return 'scissors';
    }else if(userInput === 'bomb'){
      return 'bomb';
    } else{
      console.log('Error !');
    }
  };
  //Test function call valid and invalid input and see resultat
  //userInput = 'rock';
  //console.log('choix user: '+getUserChoice());
  
  
  //Fonction choix Ordi:
  const getComputerChoice = () =>{
    
    randomNumber = Math.floor(Math.random() * 3);
    if(randomNumber == 0){
        return 'rock';
    }else if(randomNumber == 1){
        return 'paper';
    }else if(randomNumber == 2){
        return 'scissors';
      }
  };
  
    //test call function Computer:
  //console.log('choix computer: ' +getComputerChoice());
  
  //fonction Déterminer Winner:
  const determineWinner = (userChoice, computerChoice) =>{
    
    if(userChoice === computerChoice){
      return alert('Match Null :D');
    }
    if(userChoice === 'bomb'){
      return alert('Tricheur tu as gagné!');
    }
    if(userChoice === 'rock'){
      if(computerChoice === 'paper'){
        return alert('Computer Win!');
      }else{
        return alert('You Win!');
      }
    }
    if(userChoice === 'paper'){
      if(computerChoice === 'scissors'){
        return alert('Computer Win!');
      }else{
        return alert('You Win!');
      }
    }
    if(userChoice == 'scissors'){
      if(computerChoice === 'rock'){
        return alert('Computer Win!');
      }else{
        return alert('You Win!');
      }
    }
  };
  
  //teste fonction winner:
  //console.log(determineWinner());
  
  //fonction start game
  const playGame = () =>{
    const  userChoice = getUserChoice('paper');
    const computerChoice = getComputerChoice();
    console.log('votre choix : ' +userChoice);
    console.log('Choix ordinateur: ' +computerChoice);
    console.log(determineWinner(userChoice, computerChoice));
  };
  
  playGame();