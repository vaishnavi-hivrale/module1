function cart_total()
{
    var p = document.getElementById("price").value;
    var q = document.getElementById("qty").value;

    var p1 = document.getElementById("price1").value;
    var q1 = document.getElementById("qty1").value;


    var t = p*q + p1*q1;

    document.getElementById("total").innerHTML = t;

    var gt = t + 60;

    document.getElementById("gtotal").innerHTML = gt;
}