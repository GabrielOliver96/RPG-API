

//caimbra math - font

function selectCharacter(id) {

    let selectCharacter = document.getElementById(id).value;
    let url = "http://localhost:8000/";
    let finalUrl = document.getElementById('selectedCharacterImg').src = url + selectCharacter;

    document.getElementById('checkedImg').value = selectCharacter;

}



function lifeCalculation(){

    let vigor = document.getElementById('vigor').value;
    let exibir = document.getElementById('life');

    //console.log(vigor * 5);
    
    exibir.innerHTML = vigor * 5;
    
}

function energyCalculation(){

    let vigor = document.getElementById('vigor').value;
    let exibir = document.getElementById('energy');

    //console.log(vigor * 5);
    
    exibir.innerHTML = vigor * 3;
    
}

function sanityCalculation(){

    let consciencia = document.getElementById('consciencia').value;
    let autocontrole = document.getElementById('autocontrole').value;
    let exibir = document.getElementById('sanity');

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

    //console.log(vigor * 5);
    
    
}







