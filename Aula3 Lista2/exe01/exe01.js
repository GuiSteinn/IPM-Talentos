const v1 = 0, 
      v2 = 0;  

      function getValor(){
        let v1 = document.getElementById("v1").value; 
        let v2 = document.getElementById("v2").value;  

        valida(v1,v2);
      } 

      function valida(v1,v2){
        if (isNaN(v1) || v1 == " ", isNaN(v2) || v2 == " "){
            window.alert("informe valores numéricos");
            return
        }

        let somavalor = parseInt(v1) + parseInt(v2); 
        window.alert(somavalor);
      }