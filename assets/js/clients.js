const clients = [
    {name: 'INAT', image: 'client1.jpg', link: 'https://www.facebook.com/TheMissionTN/posts/pfbid02TdZCVs4p5XyqZ83ifoKGwvz7vmA5puUiHKMzBMiR6A8oqwoc7ThFCqNXvynUPry4l'},
    {name: 'FMT', image: 'client2.jpg', link: 'https://www.facebook.com/TheMissionTN/posts/pfbid02nLzgCBNq9BwX7wjHBASocZ6sqRqTqxZeERGvWuofb6hZiDYzNrSCHLeJCGMxe3wml?__cft__[0]=AZVbJC7vRiOHcU3h4Jmet3Wejb9wPVpBuEdZKsbsoN038sx2Glky-H4ovqMERDbFaB7TWV9GZUwpQrlEaCtUTEVO9pzWgZts0O-ncZCQbT5dxzKlpj0jHECCvB2N1_iz0KlD44-uA8C2SVEGuMqltoZkEGT1OZo_e8URCECtXSmhvVfODg0noDA0thcPyG_A7AiN-cvO3-kVegTg3-HdM4lg&__tn__=%2CO%2CP-R'},
    {name: 'Client Three', image: 'client3.jpg', link: 'client3-article.php'},
    {name: 'Client Four', image: 'client4.jpg', link: 'client4-article.php'}
];

let currentIndex = 0;

function loadClient(index) {
    const client = clients[index];
    const clientCard = document.getElementById('client-container');

    // Fade out the current card
    clientCard.style.opacity = 0;
    clientCard.style.transform = 'scale(0.95)';

    setTimeout(() => {
        // Update the card with new client data
        clientCard.innerHTML = `
            <a href="${client.link}" class="client-link">
                <img src="assets/img/clients/${client.image}" alt="${client.name}" class="img-fluid rounded mb-3">
                <div class="client-info p-3">
                    <h3 class="client-name">${client.name}</h3>
                    <p class="client-description">clicker pour savoir plus</p>
                </div>
            </a>
        `;

        // Fade in the new card
        clientCard.style.opacity = 1;
        clientCard.style.transform = 'scale(1)';
    }, 500); // Match the CSS transition duration
}

document.querySelector('.arrow-left').addEventListener('click', function(event) {
    event.preventDefault();
    if (currentIndex > 0) {
        currentIndex--;
        loadClient(currentIndex);
    }
});

document.querySelector('.arrow-right').addEventListener('click', function(event) {
    event.preventDefault();
    if (currentIndex < clients.length - 1) {
        currentIndex++;
        loadClient(currentIndex);
    }
});