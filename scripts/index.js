const strengthBar = document.querySelector('.strength');
const barElements = strengthBar.querySelectorAll('div');
const input = document.querySelector('input');
const specialCharacters = /[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;

let passwordStrength = 0;
let password = input.value;
let length = password.length;
let upperCaseCount = 0;
let specialCount = 1;

const paintBar = (index,bounds) => {
    if (passwordStrength >= bounds) {
        barElements[index].style.backgroundColor = "var(--accent)";
    }
    else {
        barElements[index].style.backgroundColor = "white";
    }
}

const measureStrength = () => {
    password = input.value;
    length = password.length;
    upperCaseCount = 0;
    specialCount = 1;

    for (let i = 0; i < password.length; i++) {
        if (/[A-Z]/.test(password[i])) {
            upperCaseCount++;
        }

        if (specialCharacters.test(password[i])) {
            specialCount++;
        }
    }

    passwordStrength = (password.length + (upperCaseCount * 1.25)) * specialCount;
    paintBar(0, 25);
    paintBar(1, 75);
    paintBar(2, 100);
};

setInterval(() => measureStrength(), 100);
