function calc(){


//hide form and display result
var form = document.getElementById("form-hide");
var show = document.getElementById("result");
form.style.display = 'none'
show.style.display = 'block';

//calculate
var age=parseInt(document.getElementById('rangeInput').value);
var height=parseInt(document.getElementById('rangeInputtwo').value);
var hair=parseInt(document.querySelector('input[name="hair"]:checked').value);
var hairl=parseInt(document.querySelector('input[name="hairl"]:checked').value);
var eye=parseInt(document.querySelector('input[name="eye"]:checked').value);
var body=parseInt(document.querySelector('input[name="body"]:checked').value);


var showtotal= ((age) + (height) - (hair) + (hairl) - (eye) +(body));
document.getElementById('result').innerHTML=showtotal;

}