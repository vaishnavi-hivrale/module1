
function login_validation()
{
    if(document.loginfrm.em.value == "")
    {
        alert('Email is required');
        document.loginfrm.em.focus();
        return false;
    }

    if(document.loginfrm.psw.value == "")
    {
        alert('password is required');
        document.loginfrm.psw.focus();
        return false;
    }
}