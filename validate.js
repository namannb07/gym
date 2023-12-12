function error(id, error) {
    document.getElementById(id).innerHTML = error;
}


function validate() {
    var res = true;


    var firstname = document.form1.firstname.value;
    var lastname = document.form1.firstname.value;
    if (firstname.length <3) {
        error('firstname', '!');
        res = false;
    }
    if (lastname.length <5) {
        error('lastname', '!');
        res = false;
    }

   
    var email = document.form1.email.value;
    if (email.length < 9) {
        error('email', '!');
        res = false;
    }

    var age = document.form1.age.value;
    age = Number.parseInt(age);
    if (age < 1 || age > 100) {
        error('age', '!')
        res = false;
    }


    var contact = document.form1.contact.value;
    if (contact.length < 10) {
        error('contact', '!');
        res = false;
    }

    var gender = document.form1.gender.value;
    if (gender == '') {
        error('gender', '!');
        res = false;
    }

    if(res==false)
    {
        error('error','Enter valid information');
    }
    
    return res;
}

function generate() { 
    var minm = 100000; 
    var maxm = 999999;
    var userid = Math.floor(Math .random() * (maxm - minm + 1)) + minm;
    document.getElementById('userid').value = userid; 
} 