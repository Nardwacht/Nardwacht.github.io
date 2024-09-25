window.onload = init;
let languageCounter = 0;

function init() {
    rotateMessage();
    setInterval(rotateMessage, 1000); // Change message every 2 seconds
}

const greetings = [
    [
        'Goedemorgen',
        'Goedemiddag',
        'Goedenavond'
    ],
    [
        'Good morning',
        'Good afternoon',
        'Good evening'
    ],
    [
        'Guten Morgen',
        'Guten Mittag',
        'Guten Abend'
    ],
    [
        'Bonjour',
        'Bonjour',
        'Bonsoir'
    ]
];

let messageIndex = 0;

function rotateMessage() {
    const date = new Date();
    let timeOfDayCounter = 0;
    let message = "";
    const hours = date.getHours();
    if (hours < 7) timeOfDayCounter = 2;
    if (hours >= 7 && hours <= 12) timeOfDayCounter = 0;
    if (hours > 12 && hours <= 18) timeOfDayCounter = 1;
    if (hours > 18) timeOfDayCounter = 2;
    document.getElementById('welcomeMessage').textContent = greetings[languageCounter][timeOfDayCounter] + "!";
    //messageIndex = (messageIndex + 1) % messages.length;
    languageCounter == 3 ? languageCounter = 0 : languageCounter++;
}

function setGradient(){}