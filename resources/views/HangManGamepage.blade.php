<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script type="text/javascript">
		var wordsArray = ["programming", "code", "computer", "javascript", "html", "computerscience", "bananas", "papasmurf", "java"];
		var answer = "";
		var temp = "";
		var maskedAnswer = "";
		var guessCount = 8;
		
		
		function selectLetter(l){  
			temp = answer;
			var index = temp.indexOf(l);
			hideButton(l);
			console.log(index);
			console.log(temp);
			if (index != -1)
			{
			while(temp.indexOf(l) != -1){  //Loop and replace all instances of l in the temp
				temp = temp.replaceAt(index,"$");
				maskedAnswer = maskedAnswer.replaceAt(index,l);
				var index = temp.indexOf(l);
			}	
			console.log(maskedAnswer);
			document.getElementById("displaymask").innerHTML = maskedAnswer;
		
			if(maskedAnswer.indexOf("#") == -1){   //If there are no more # in the mask. You have won
				document.getElementById("displayGuessCount").innerHTML = "You have won! The word was ";
				}
				return;
				} else {
				console.log("The letter is not in the word");
				guessCount--;

				if(guessCount > 0){
					console.log("guessCount " + guessCount);
					document.getElementById("displayGuessCount").innerHTML = "Guesses left: " + guessCount;
		
				} else {
					//You lose, Inform user
					guessCount = 0; //Don't let guessCount become negative
					document.getElementById("displayGuessCount").innerHTML = "Guesses left: " + guessCount + " , Game Over, The answer was...";
					document.getElementById("displaymask").innerHTML = answer;
				} 
				drawStickMan(guessCount);   //Update the display of the stickman
			}
		}
		
		function drawStickMan(l){    //Draw lines based on what guess number the user is
			var canvas = document.getElementById("canvas");
			if (canvas.getContext("2d")) { // Check HTML5 canvas support
			context = canvas.getContext("2d"); // get Canvas Context object
			context.fillStyle = "black";
			if(guessCount == 7){
				//draw rope
				context.beginPath();
				context.moveTo(200, 0);
				context.lineTo(200, 30);	
				context.stroke();
			} 
			if(guessCount == 6){
				//draw second rope
				context.beginPath();
				context.moveTo(200, 30);
				context.lineTo(200, 60);	
				context.stroke();
			} 
			if(guessCount == 5){
				//draw head
				context.beginPath();
				context.arc(200, 70, 30, 0, Math.PI * 2, true);
				context.fill();
			}
			if(guessCount == 4){
				//draw body
				context.beginPath();
				context.moveTo(200, 100);
				context.lineTo(200, 150);	
				context.stroke();
			}
			if(guessCount == 3){
				//draw arm
				context.beginPath();
				context.moveTo(200, 125);
				context.lineTo(150, 130);
				context.stroke();
			}
			if(guessCount == 2){
				//draw arm
				context.beginPath();
				context.moveTo(200, 125);
				context.lineTo(250, 130);
				context.stroke();
			}
			if(guessCount == 1){
				//draw leg
				context.beginPath();
				context.moveTo(200, 150);
				context.lineTo(170, 210);
				context.stroke();	
			} 
			if(guessCount == 0){
				//draw leg
				context.beginPath();
				context.moveTo(200, 150);
				context.lineTo(230, 210);
				context.stroke();
			}
			}
		}
		
		function hideButton(l)   //Hide button l
		{
			document.getElementById(l).style.visibility="hidden";
		}

		function pickWord()   //pick a random word from the wordArray, then mask it
		{
			answer = wordsArray[Math.round(Math.random() * (wordsArray.length - 1))]; //pick our word from the array
			console.log(answer);
			mask();
		}

		function mask(){  //Create a masked version of the answer with the same length of the answer
			for (i = 0; i < answer.length; i++)
		{
		maskedAnswer += "#";
		}
		console.log(maskedAnswer);
		document.getElementById("displaymask").innerHTML = maskedAnswer;
		}

		String.prototype.replaceAt=function(index, character) {    //split string at index, insert, then join 
			return this.substr(0, index) + character + this.substr(index+character.length);
		}
	</script>
</head>
<body onLoad="pickWord()">
	<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
		<a class="navbar-brand" href="#">HangMan by Adam Nagao</a>
	</nav>
	<div class="row" style="margin-top:10%">
		<div class="col-md-2"></div>
		<div class="col-md-6">
			<canvas id="canvas" width="400px" height="300px" ></canvas>
			<p id="displayGuessCount" style="font-size:22px;">Guesses left: 9</p>
			<p id="displaymask" style="font-size:22px;"></p>
		</div>
		<div class="col-md-4">
			<p style="font-weight:bold; font-size:18px;">
				<label>Choose a letter:</label>
				<br />
				<br />
				<a id = "a" href="javascript:selectLetter('a');"><input type="button" style="cursor:pointer; margin-left: 10px; font-size:18px; width: 10%;" value="A"></a>
				<a id = "b" href="javascript:selectLetter('b');"><input type="button" style="cursor:pointer; margin-left: 10px; font-size:18px; width: 10%;" value="B"></a>
				<a id = "c" href="javascript:selectLetter('c');"><input type="button" style="cursor:pointer; margin-left: 10px; font-size:18px; width: 10%;" value="C"></a>
				<a id = "d" href="javascript:selectLetter('d');"><input type="button" style="cursor:pointer; margin-left: 10px; font-size:18px; width: 10%;" value="D"></a>
				<a id = "e" href="javascript:selectLetter('e');"><input type="button" style="cursor:pointer; margin-left: 10px; font-size:18px; width: 10%;" value="E"></a>
				<a id = "f" href="javascript:selectLetter('f');"><input type="button" style="cursor:pointer; margin-left: 10px; font-size:18px; width: 10%;" value="F"></a>
				<br />
				<br />
				<a id = "g" href="javascript:selectLetter('g');"><input type="button" style="cursor:pointer; margin-left: 10px; font-size:18px; width: 10%;" value="G"></a>
				<a id = "h" href="javascript:selectLetter('h');"><input type="button" style="cursor:pointer; margin-left: 10px; font-size:18px; width: 10%;" value="H"></a>
				<a id = "i" href="javascript:selectLetter('i');"><input type="button" style="cursor:pointer; margin-left: 10px; font-size:18px; width: 10%;" value="I"></a>
				<a id = "j" href="javascript:selectLetter('j');"><input type="button" style="cursor:pointer; margin-left: 10px; font-size:18px; width: 10%;" value="J"></a>
				<a id = "k" href="javascript:selectLetter('k');"><input type="button" style="cursor:pointer; margin-left: 10px; font-size:18px; width: 10%;" value="K"></a>
				<a id = "l" href="javascript:selectLetter('l');"><input type="button" style="cursor:pointer; margin-left: 10px; font-size:18px; width: 10%;" value="L"></a>
				<br />
				<br />
				<a id = "m" href="javascript:selectLetter('m');"><input type="button" style="cursor:pointer; margin-left: 10px; font-size:18px; width: 10%;" value="M"></a>
				<a id = "n" href="javascript:selectLetter('n');"><input type="button" style="cursor:pointer; margin-left: 10px; font-size:18px; width: 10%;" value="N"></a>
				<a id = "o" href="javascript:selectLetter('o');"><input type="button" style="cursor:pointer; margin-left: 10px; font-size:18px; width: 10%;" value="O"></a>
				<a id = "p" href="javascript:selectLetter('p');"><input type="button" style="cursor:pointer; margin-left: 10px; font-size:18px; width: 10%;" value="P"></a>
				<a id = "q" href="javascript:selectLetter('q');"><input type="button" style="cursor:pointer; margin-left: 10px; font-size:18px; width: 10%;" value="Q"></a>
				<a id = "r" href="javascript:selectLetter('r');"><input type="button" style="cursor:pointer; margin-left: 10px; font-size:18px; width: 10%;" value="R"></a>
				<br />
				<br />
				<a id = "s" href="javascript:selectLetter('s');"><input type="button" style="cursor:pointer; margin-left: 10px; font-size:18px; width: 10%;" value="S"></a>
				<a id = "t" href="javascript:selectLetter('t');"><input type="button" style="cursor:pointer; margin-left: 10px; font-size:18px; width: 10%;" value="T"></a>
				<a id = "u" href="javascript:selectLetter('u');"><input type="button" style="cursor:pointer; margin-left: 10px; font-size:18px; width: 10%;" value="U"></a>
				<a id = "v" href="javascript:selectLetter('v');"><input type="button" style="cursor:pointer; margin-left: 10px; font-size:18px; width: 10%;" value="V"></a>
				<a id = "w" href="javascript:selectLetter('w');"><input type="button" style="cursor:pointer; margin-left: 10px; font-size:18px; width: 10%;" value="W"></a>
				<a id = "x" href="javascript:selectLetter('x');"><input type="button" style="cursor:pointer; margin-left: 10px; font-size:18px; width: 10%;" value="X"></a>
				<br />
				<br />
				<a id = "y" href="javascript:selectLetter('y');"><input type="button" style="cursor:pointer; margin-left: 10px; font-size:18px; width: 10%;" value="Y"></a>
				<a id = "z" href="javascript:selectLetter('z');"><input type="button" style="cursor:pointer; margin-left: 10px; font-size:18px; width: 10%;" value="Z"></a>
				<br />
				<br />
				<a href="hangmangame"><input class = "btn btn-primary" style="font-size:18px;" value="Play Again?"></a>
			</p>
		</div>
	</div>
	<body>