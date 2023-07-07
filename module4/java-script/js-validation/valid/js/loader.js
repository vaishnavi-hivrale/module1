var info;
function jsload()
{
    info = setTimeout("show()", 3000);
}

function show()
{
    document.getElementById("loader").style="display:none";
    document.getElementById("content").style="display:block";
}
 