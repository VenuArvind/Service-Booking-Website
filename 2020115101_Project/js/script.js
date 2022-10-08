function ValidateEmail(inputText)
{
var mailformat =/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
if(inputText.value.match(mailformat))
{
    alert("Mail has been sent to "+ inputText.value); 
    location.reload();
    return true;
}
else
{
    alert("You have entered an invalid email address!Please enter a valid email address"); 
    location.reload();
    return false;
}
}
function ValidateEmail1(inputText)
{
var mailformat =/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
if(inputText.value.match(mailformat))
{

    return true;
}
else
{
    alert("You have entered an invalid email address!Please enter a valid email address"); 
    location.reload();
    return false;
}
}

function Validatesignup()
{
    var name1=document.myform.signame.value;
    var password1=document.myform.signpass;
    var password2=document.myform.signpass1;
    if (name1==null || name1==""){  
        alert("Name can't be blank");  
        window.location.reload();
        return false;   
    }else{
        ValidateEmail1(document.myform.signemail);
    }  
}

function ending(){
    alert('Payment has been successfully made');
    window.location.replace('logout.php');
}