var date = new Date()
var horario = date.getHours()
    if(horario>=0&&horario<=12){
      document.getElementById("saudacoes").innerHTML = "Bom dia"
    }else if(horario>=13&&horario<=18){
      document.getElementById("saudacoes").innerHTML = "Boa tarde"
    }else{
      document.getElementById("saudacoes").innerHTML = "Boa noite"
    }