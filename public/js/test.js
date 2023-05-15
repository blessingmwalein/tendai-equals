// Get the console element and command input
var consoleLog = document.getElementById("console-log");
var commandInput = document.getElementById("command-input");

// Define a function to log messages to the console
function logToConsole(message) {
    consoleLog.innerHTML += message + "<br>";

    // Scroll to the bottom of the console
    consoleLog.scrollTop = consoleLog.scrollHeight;
}

// Handle command input
function handleCommand() {
    var command = commandInput.value;

    // Clear the command input
    commandInput.value = "";

    // Output the command to the console
    //   logToConsole('<span class="prompt">></span> ' + 'Testing in progress...');
    logToConsole('<span class="prompt">$</span> ' + command);

    // Handle the command (replace this with your desired functionality)
    // For example, you can implement different commands using conditionals or call external APIs for command execution.
    console.log(command);
    //create counter for number of times test is run
    var counter = 0;
    if (command === "test") {
        setInterval(() => {
            var randomNumber = generateRandomNumber();
            logToConsole(
                '<span class="prompt">></span> ' +
                    "Test number #" +
                    randomNumber
            );
            //increment counter
            if (counter === 16) {
                counter = 0;
                //clear console
                consoleLog.innerHTML = "";
            }
            counter++;
        }, 2000);
    } else {
        logToConsole("Command not recognized: " + command);
    }
}

if (commandInput) {
    commandInput.addEventListener("keydown", function (event) {
        if (event.key === "Enter") {
            handleCommand();
        }
    });
}
// Event listener for command input

//function generate random number of 4 digits
function generateRandomNumber() {
    var randomNumber = Math.floor(Math.random() * 10000);
    return randomNumber;
}
