function pegaValor(){
   let n1 = document.getElementById('n1').value;
   let n2 = document.getElementById('n2').value;

    funcaoValida(n1,n2);
}

function funcaoValida(n1, n2){
   if(isNaN(n1) ||n1 =='', isNaN(n2) || n2 == ''){
    window.alert("informe valores numéricos");
    return
   }

   let somav = parseInt(n1) + parseInt(n2); 
   window.alert("soma:"+somav);
}