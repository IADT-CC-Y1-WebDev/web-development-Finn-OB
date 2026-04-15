let cardsContainer = document.getElementById("cards");

function handleClicks(event){


    const card = event.target.closest('.card')
    if (!card){
        return;
    }

    const action = event.target.dataset.action;
    if(action === "select"){
        // console.log("You clicked ono a select button");
        toggleCardHighlight(card);
    }
    
    else if(action === "log"){
        // console.log("You clicked ono a log button");
        logCardTitle(card);
    }

}

function toggleCardHighlight(card){
    card.classList.toggle('selected')
}

function logCardTitle(card){
    console.log('Card title: ', card.dataset.title);
}

cardsContainer.addEventListener('click', handleClicks)