let firstname = document.querySelector("#_name");
let surname = document.querySelector("#_surname");
let email = document.querySelector("#_Email");
let btnverify = document.querySelector("#_btnsubmit");

const VerifyInputs = () => {
 
    if(firstname.value.trim().length ==0)
    {
        alert("Please enter your name");
        return false;
    }
   

    else if(surname.value.trim().length == 0)
    {
        alert("Please enter your surname");
        return false;
    }
   

    else if(email.value.trim().length == 0)
    {
        alert("Please enter your Email");
        return false;
    }
    return true;
} 

function Result()
{
    if(VerifyInputs())
    {
        alert("Form has been submitted succesfully");
    }
}

btnverify.addEventListener("click",Result); 