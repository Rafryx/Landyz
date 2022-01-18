function clicar() {
    var x = document.getElementById("pesquisa");
    var i = x.selectedIndex;    
    document.getElementById("aluga").innerHTML = x.options[i].text;
  }