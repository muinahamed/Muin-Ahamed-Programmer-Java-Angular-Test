// first page 
function isEmpty() {
    var check = true;
    var inputs = document.getElementsByTagName("input");
    for (input of inputs) {
        if (input.type === "text" && !input.value) check = false;
        if (input.type === "email" && !input.value) check = false;
        if (input.type === "checkbox" && !input.checked) check = false
    }
    var country = document.getElementById("country-option").value;
    if (check && country != "Your Country")
        document.getElementById("next-btn1").disabled = false;
    else document.getElementById("next-btn1").disabled = true;
}

// second page 
function isEmpty2() {
    var filled = true;
    var inputs = document.getElementsByTagName("input");
    for (input of inputs) {
        if (input.type === "text" && !input.value) filled = false;
        if (input.type === "password" && !input.value) filled = false;
    }
    if (filled)
        document.getElementById("next-btn2").disabled = false;
    else document.getElementById("next-btn2").disabled = true;
}

