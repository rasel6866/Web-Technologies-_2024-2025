document.addEventListener("DOMContentLoaded", function ()

 {
    let display = document.getElementById("display");
    let buttons = document.querySelectorAll(".buttons button");

    let currentInput = "";

    buttons.forEach(button => {
        button.addEventListener("click", function () {
            let value = this.innerHTML;

            if (value === "=") {
                
                    currentInput = eval(currentInput.replace("×", "*").replace("−", "-"));
                    display.value = currentInput;
            
            } else if (value === "AC") {
                currentInput = "";
                display.value = "";
            } else if (value === "+/-") {
                currentInput = currentInput ? -eval(currentInput) : "";
                display.value = currentInput;
            }
            else if (value === "x²") {
                currentInput = eval(currentInput) ** 2; 
                display.value = currentInput;
            } 
            else {
                currentInput += value;
                display.value = currentInput;
            }
        });
    });
});
