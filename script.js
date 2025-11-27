if (document.getElementById('drinks').classList.contains('hidden')) {
    showFood();
}


function showFood() {
    const foodBtn = document.getElementById('foodbtn');
    const drinksBtn = document.getElementById('drinksbtn');
    
    const foodSection = document.getElementById('food');
    const drinksSection = document.getElementById('drinks');

    foodSection.classList.remove('hidden');
    drinksSection.classList.add('hidden');

    // Update button styles
    foodBtn.classList.remove('text-white');
    foodBtn.classList.add('text-primaryColour', 'bg-white');
    drinksBtn.classList.remove('text-primaryColour', 'bg-white');
    drinksBtn.classList.add('text-white', 'bg-primaryColour');
}

function showDrinks() {
    const foodBtn = document.getElementById('foodbtn');
    const drinksBtn = document.getElementById('drinksbtn');
    
    const foodSection = document.getElementById('food');
    const drinksSection = document.getElementById('drinks');

    drinksSection.classList.remove('hidden');
    foodSection.classList.add('hidden');

    drinksBtn.classList.remove('text-white');
    drinksBtn.classList.add('text-primaryColour', 'bg-white');
    foodBtn.classList.remove('text-primaryColour', 'bg-white');
    foodBtn.classList.add('text-white', 'bg-primaryColour');
}
