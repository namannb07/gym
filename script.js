function home() {
    document.getElementById('ahome').style.color = "grey";
    document.getElementById('aprogram').style.color = "white";
    document.getElementById('aplan').style.color = "white";
    document.getElementById('agalary').style.color = "white";
    document.getElementById('acontact').style.color = "white";
}
function program() {
    document.getElementById('ahome').style.color = "white";
    document.getElementById('aprogram').style.color = "grey";
    document.getElementById('aplan').style.color = "white";
    document.getElementById('agalary').style.color = "white";
    document.getElementById('acontact').style.color = "white";
}
function plan() {
    document.getElementById('ahome').style.color = "white";
    document.getElementById('aprogram').style.color = "white";
    document.getElementById('aplan').style.color = "grey";
    document.getElementById('agalary').style.color = "white";
    document.getElementById('acontact').style.color = "white";
}
function galary() {
    document.getElementById('ahome').style.color = "white";
    document.getElementById('aprogram').style.color = "white";
    document.getElementById('aplan').style.color = "white";
    document.getElementById('agalary').style.color = "grey";
    document.getElementById('acontact').style.color = "white";
}
function about() {
    document.getElementById('ahome').style.color = "white";
    document.getElementById('aprogram').style.color = "white";
    document.getElementById('aplan').style.color = "white";
    document.getElementById('agalary').style.color = "white";
    document.getElementById('acontact').style.color = "grey";
}

function bmi() {
    var h = document.getElementById('height').value;
    var w = document.getElementById('weight').value;
    var bmi = w / (h / 100 * h / 100);
    var total = bmi.toFixed(2);


    if (bmi < 18.6){
          document.getElementById('result').innerHTML = `Under Weight😔 : <span>${total}</span>`;
    }

    else if (bmi >= 18.6 && bmi < 24.9){
          document.getElementById('result').innerHTML = `Normal😊 : <span>${total}</span>`;
    }

    else{
        document.getElementById('result').innerHTML = `Over Weight😡 : <span>${total}</span>`;
    }

            
}

