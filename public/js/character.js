

//caimbra math - font

function selectCharacter(id) {

    let selectCharacter = document.getElementById(id).value;
    let url = "http://localhost:8000/";
    let finalUrl = document.getElementById('selectedCharacterImg').src = url + selectCharacter;

    document.getElementById('checkedImg').value = selectCharacter;

}



