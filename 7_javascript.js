function validate()
{
    var email=document.getElementById("email").value;
    var pattern= /^[^ ]+@[^ ]+\.[a-z]{2,3}$/ ;

    if(email.match(pattern))
    {
        alert("Subscribed Successful");
        form.classlist.add("valid");
        form.classlist.remove("Invalid")
        return false;
    }

    else
    {
        alert("Subscribed Failed");
        form.classlist.remove("valid")
        form.classlist.add("Invalid");
    }
}