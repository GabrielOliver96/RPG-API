

//caimbra math - font

function addAntecedenteInput() {
    /*
    let newInput = document.createElement('div', 'class="row"');
    newInput.innerHTML = '<div class="row">'
                            +'<div class="col-lg-9">'
                                +'<input type="text" name="antecedente[]" class="form-control bg-dark text-white mt-1" placeholder="Antecedente">'
                            +'</div>'
                            +'<div class="col-lg-3">'
                                +'<input type="text" name="pontos[]" class="form-control bg-dark text-white mt-1" placeholder="Pontos">'
                            +'</div>'
                        +'</div>';

    document.getElementById('antecente').appendChild(newInput);
    */
}
/*
function removeAntecedenteInput() {

    let antecedenteInput = document.getElementById('')
    let newInput = document.createElement("div");
    newInput.innerHTML = '<div class="row">'
                            +'<div class="col-lg-9">'
                                +'<input type="text" name="antecedente[]" class="form-control bg-dark text-white mt-1" placeholder="Antecedente">'
                            +'</div>'
                            +'<div class="col-lg-3">'
                                +'<input type="text" name="pontos[]" class="form-control bg-dark text-white mt-1" placeholder="Pontos">'
                            +'</div>'
                        +'</div>';
                        
    document.getElementById('antecente').appendChild(newInput);
}*/

function selectCharacter(id) {

    let selectCharacter = document.getElementById(id).value;
    let url = "http://localhost:8000/";
    let finalUrl = document.getElementById('selectedCharacterImg').src = url + selectCharacter;

    document.getElementById('checkedImg').value = selectCharacter;

}


function humanityCalculation(){

    let consciencia = document.getElementById('consciencia/conviccao').value;
    let autocontrole = document.getElementById('autocontrole/instintos').value;
    let exibir = document.getElementById('humanity');

    if(consciencia && autocontrole){

        let soma = parseInt(consciencia) + parseInt(autocontrole);
        exibir.innerHTML = soma;
    }else if(consciencia){

        exibir.innerHTML = parseInt(consciencia);
    }else if(autocontrole){

        exibir.innerHTML = parseInt(autocontrole);
    }else{

        exibir.innerHTML = 0;
    }

}


function bloodPointsCalculation(){

    let geracao = document.getElementById('geracao').value;
    let bloodPoints = 0;
    
    if(geracao == 14){
        
        bloodPoints = 8;
        document.getElementById('inputBloodPoints').value = bloodPoints;
    }else if(geracao == 13){

        bloodPoints = 10;
        document.getElementById('inputBloodPoints').value = bloodPoints;
    }else if(geracao == 12){

        bloodPoints = 11;
        document.getElementById('inputBloodPoints').value = bloodPoints;
    }else if(geracao == 11){

        bloodPoints = 12;
        document.getElementById('inputBloodPoints').value = bloodPoints;
    }else if(geracao == 10){

        bloodPoints = 13;
        document.getElementById('inputBloodPoints').value = bloodPoints;
    }

    let exibir = document.getElementById('bloodPoints');

    exibir.innerHTML = bloodPoints;
    
}


function selectCla(){

    let claInput = document.getElementById('cla').value;
    let firstDiscipline = document.getElementById('firstDiscipline');
    let secondDiscipline = document.getElementById('secondDiscipline');
    let thirdDiscipline = document.getElementById('thirdDiscipline');

    if(claInput === 'Assamita'){

        firstDiscipline.value = 'Rapidez';
        secondDiscipline.value = 'Ofuscação';
        thirdDiscipline.value = 'Quietus';
   
    }else if(claInput === 'Brujah'){
        
        firstDiscipline.value = 'Rapidez';
        secondDiscipline.value = 'Potência';
        thirdDiscipline.value = 'Presença';

    }else if(claInput === 'Tremere'){
        
        firstDiscipline.value = 'Auspícius';
        secondDiscipline.value = 'Dominação';
        thirdDiscipline.value = 'Taumaturgia';

    }else{

        firstDiscipline.value = '';
        secondDiscipline.value = '';
        thirdDiscipline.value = '';

    }
    
    
    document.getElementById('disciplina').appendChild(newInput);
    
}


function willpowerCalculation(){

    let coragem = document.getElementById('coragem').value;
    let exibir = document.getElementById('willpower');

    exibir.innerHTML = coragem;
    
}


function hitPointControl(favClick){

    
    console.log(favClick);

    if(favClick.value == ''){

        favClick.value = '/';

    }else if(favClick.value == '/'){

        favClick.value = 'X';

    }else{

        favClick.value = '';
    };

    //let pv = document.addEventListener("click", function(){
        //console.log(pv);

        /*
        if(pv.innerHTML == ''){

            pv.innerHTML = '/';

        }else if(pv.innerHTML == '/'){

            pv.innerHTML = 'X';
        }else{

            pv.innerHTML = '';
        };
    });*/
    

}


function showFiles(){

    

}







