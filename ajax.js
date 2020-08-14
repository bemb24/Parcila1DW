function send(){
    var nit = document.getElementById('nit').value;
    var dpi = document.getElementById('dpi').value;
    var last1 = document.getElementById("last1").value;
    var nac = document.getElementById("nac").value;
    var cel = document.getElementById("cel").value;
    var tC = document.getElementById("tC").value;
    var mail = document.getElementById("mail").value;
    var dir = document.getElementById("dir").value;
    var dn = document.getElementById("dn").value;
    var etb = document.getElementById("etb").value;
    var aI = document.getElementById("aI").value;
    var aF = document.getElementById("aF").value;
    var name1 = document.getElementById("name1").value;
    var name2 = document.getElementById("name2").value;
    var last2 = document.getElementById("last2").value;
    var M = document.getElementById("M").value;
    var F = document.getElementById("F").value;
    var estC = document.getElementById("estC").value;
    var live = document.getElementById("live").value;
    var rel = document.getElementById("rel").value;
    var c1 = document.getElementById("c1").value;
    var c2 = document.getElementById("c2").value;
    var c3 = document.getElementById("c3").value;
    var c4 = document.getElementById("c4").value;
    var nl = document.getElementById("ml").value;
    var exp = document.getElementById("exp").value;
    var c5s = document.getElementById("c5s").value;
    var c5n = document.getElementById("c5n").value;
    var c6s = document.getElementById("c6s").value;
    var c6n = document.getElementById("c6n").value;
    var c7s = document.getElementById("c7s").value;
    var c7n = document.getElementById("c7n").value;
    var c8s = document.getElementById("c8s").value;
    var c8n = document.getElementById("c8n").value;
    var c9s = document.getElementById("c9s").value;
    var c9n = document.getElementById("c9n").value;
    var rs = document.getElementById("rs").value;
    var FormControlFile1 = document.getElementById("FormControlFile1").value;
    var Fcheck = document.getElementById("Fcheck").value;
    
    $.ajax({
        type: 'post',
        url: 'send.php',
        data: nit, pdi, last1, nac, cel, tC, mail, dir, dn, etb, aI, aF, name1, name2, last2, M, F, estC, live, rel, c1, c2, c3, c4, nl,
        exp, c5s, c5n, c6s, c6n, c7s, c7n, c8s, c8n, c9s, c9n, rs, FormControlFile1, Fcheck,
        success: function(resp){
            $("#rst").html(rst);
        }
    });

    return false;
}