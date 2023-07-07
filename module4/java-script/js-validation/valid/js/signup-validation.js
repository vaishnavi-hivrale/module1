
function signup_validation()
{
    if(document.signup.fnm.value == "")
    {
        alert('First name is required');
        document.signup.fnm.focus();
        return false;
    }

    if(document.signup.lnm.value == "")
    {
        alert('Last name is required');
        document.signup.lnm.focus();
        return false;
    }

    /*    var radio = document.grtElementByName('gender');
        if(!(radioObject.radio[0].checked || radioObject.radio[1].checked[1].checked))
        {
            alert('please select gender');
            document.signup.chk.focus();
            return false;
        }
    */

    /*  if(signup.getElementByName('gender').ckecked==false && signup.getElementByName('gender').checked==false)
        {
            alert('please select gender');
            document.signup.gender.focus();
            return false;
        }
    */
   
    if(document.signup.cno.value == "")
    {
        alert('contact no. is required');
        document.signup.cno.focus();
        return false;
    }

    if(document.signup.adrs.value == "")
    {
        alert('Address is required');
        document.signup.adrs.focus();
        return false;
        
    }

    if(document.signup.em.value == "")
    {
        alert('Email is required');
        document.signup.em.focus();
        return false;
    }

    if(document.signup.psw.value == "")
    {
        alert('password is required')
        document.signup.psw.focus();
        return false;
    }

    if(document.signup.cpass.vaue =="")
    {
        alert('please enter confirm password');
        document.signup.cpass.focus();
        return false;
    }
}