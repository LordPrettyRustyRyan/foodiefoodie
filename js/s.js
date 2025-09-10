        const ingredientsData = {
    'A': ['Apple', 'Avocado', 'Almond'],
    'B': ['Banana', 'Blueberry', 'Broccoli'],
    'C': ['Carrot', 'Cucumber', 'Cheese', 'Cherries', 'Chia Seeds', 'Chicken', 'Chicken Breasts', 'Chicken Legs', 'Chicken Thighs', 'Chicken Wings', 'Chocolate', 'Coconut', 'Corn Flour'],
    'F': ['Fish', 'Flax Seeds'],
    'M': ['Mangos', 'Mushroom'],
    'O': ['Oat Flour', 'Oats'],
    'P': ['Peaches', 'Peanuts', 'Pears', 'Pineapples', 'Plums', 'Pomegranates'],
    'Q': ['Quinoa'],
    'R': ['Raspberry', 'Rice'],
    'S': ['Sausage', 'Seafood', 'Shellfish'],
    'W': ['White Rice Flour']
        };

        const alphabetContainer = document.getElementById('alphabetButtons');
        const ingredientsContainer = document.getElementById('ingredientsContainer');
        const alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.split('');

        alphabet.forEach(letter => {
            const button = document.createElement('button');
            button.textContent = letter;
            if (!ingredientsData[letter]) {
                button.classList.add('disabled');
            } else {
                button.addEventListener('click', () => {
                    document.getElementById(`section-${letter}`).scrollIntoView({ behavior: 'smooth' });
                });
            }
            alphabetContainer.appendChild(button);
        });

for (let letter in ingredientsData) {
    const section = document.createElement('div');
    section.id = `section-${letter}`;
    section.innerHTML = `<h2>${letter}</h2>`;

    const ingredientsList = document.createElement('div');
    ingredientsList.classList.add('ingredients-list');

    ingredientsData[letter].forEach(ingredient => {
        const link = document.createElement('a');
        link.href = `#`;
        link.textContent = ingredient;
        ingredientsList.appendChild(link);
    });

    section.appendChild(ingredientsList);
    ingredientsContainer.appendChild(section);
}
