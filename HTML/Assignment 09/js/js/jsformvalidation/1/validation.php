<html>

<head>
<title>Form Validation Example</title>

<script>
function ValidateContactForm()
{
    var name = ContactForm.Name;
    var email = ContactForm.Email;
    var phone = ContactForm.Telephone;
    var nocall = ContactForm.DoNotCall;
    var what = ContactForm.Subject;
    var comment = ContactForm.Comment;

    if (name.value == "")
    {
        window.alert("Please enter your name.");
        name.focus();
        return false;
    }
    
    if (email.value == "")
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }
    if (email.value.indexOf("@", 0) < 0)
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }
    if (email.value.indexOf(".", 0) < 0)
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }

    if ((nocall.checked == false) && (phone.value == ""))
    {
        window.alert("Please enter your telephone number.");
        phone.focus();
        return false;
    }

    if (what.selectedIndex < 1)
    {
        alert("Please tell us how we can help you.");
        what.focus();
        return false;
    }

    if (comment.value == "")
    {
        window.alert("Please provide a detailed description or comment.");
        comment.focus();
        return false;
    }
    return true;
}

function EnableDisable(chkbx)
{
    if(chkbx.checked == true)
    {
        ContactForm.Telephone.disabled = true;
    }
    else
    {
        ContactForm.Telephone.disabled = false;
    }
}
</script>
</head>

<body>
<div align="center">
<form method="post" action="success.html" name="ContactForm" onsubmit="return ValidateContactForm();">
<fieldset>
	<legend>Information:</legend>
    <p>Name: <input type="text" size="20" name="Name"></p>
    <p>E-mail:  <input type="text" size="20" name="Email"></p>
    <p>Phone: <input type="text" size="20" name="Telephone"><br>
        <input type="checkbox" name="DoNotCall" 
        onclick="EnableDisable(this);"> Please do not call me.</p>
    <p>For helpline:
        <select type="text" value="" name="Subject">
            <option>  </option>
            <option>Customer Service</option>
            <option>Question</option>
            <option>Comment</option>
            <option>Consultation</option>
            <option>Other</option>
        </select></p>
    <p>Comments:  <textarea cols="20" name="Comment">  </textarea></p>
    <p><input type="submit" value="Send" name="submit">
    <input type="reset" value="Reset" name="reset"></p>
</form>
</fieldset>
</div>
</body>
</html>