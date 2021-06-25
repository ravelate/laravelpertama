const listInput = document.querySelector('.list-input');
const listButton = document.querySelector('.list-button');
const listFilm = document.querySelector('.film-list');
const listClear = document.querySelector('.clear-button');
var amount = 0;
document.getElementById('amount').innerHTML = amount;

listButton.addEventListener('click', addFilm);
listFilm.addEventListener('clic\k', deleteFilm);
listClear.addEventListener('click', clearFilm);

function addFilm(event) {
    if (amount >= 10){
        //PREVENTING FORM FROM SUBMITTING
        event.preventDefault();
        window.alert('You Reach Maximum Capacity!!!');
        listInput.value = "";
    }else{
        if (listInput.value === '') {
            //PREVENTING FORM FROM SUBMITTING
            event.preventDefault();
            window.alert('Text Field Cant Be Blank!!');
        } else {
            //PREVENTING FORM FROM SUBMITTING
            event.preventDefault();
            //FILM div
            const filmDiv = document.createElement('div');
            filmDiv.classList.add('film');
            filmDiv.setAttribute('id', 'film-id');
            //CREATE li
            const newFilm = document.createElement('li');
            newFilm.innerText = listInput.value;
            newFilm.classList.add('film-item');
            filmDiv.appendChild(newFilm);
            //DELETE BUTTON
            const deleteButton = document.createElement('button');
            deleteButton.innerHTML = '<i class="fas fa-trash"></i>';
            deleteButton.classList.add("delete-btn");
            filmDiv.appendChild(deleteButton);
            //APPEND to film-list
            listFilm.appendChild(filmDiv);
            //INCREASE TOTAL
            amount = amount + 1;
            document.getElementById('amount').innerHTML = amount;
            //CLEAR LIST INPUT VALUE
            window.alert('Add ' + listInput.value + ' Into List');
            listInput.value = "";
        }
    }
}
function deleteFilm(event) {
    const item = event.target;
    //DELETE LIST
    if (item.classList[0] === "delete-btn") {
        window.alert('List Deleted');
        const film = item.parentElement;
        //Animation
        film.classList.add("throw")
        film.addEventListener('transitionend', function () {
            film.remove();
        });
        //DECREASE TOTAL
        amount = amount - 1;
        document.getElementById('amount').innerHTML = amount;
    }
}

function clearFilm(){
    window.alert('All List Cleared');
    for(var i=0; i<amount; i++){
        document.getElementById('film-id').remove();
    }
    amount = 0;
    document.getElementById('amount').innerHTML = amount;
}