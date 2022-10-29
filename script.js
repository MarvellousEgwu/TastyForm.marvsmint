  //Converts checkboxes to radio button
  const hasCheckbox = document.querySelectorAll('.has-checkbox')

  for (let i = 0; i < hasCheckbox.length; i++) {
      hasCheckbox[i].addEventListener('click', (e) => {
        checkboxes = hasCheckbox[i].querySelectorAll('input[type="checkbox"]');
          for (const checkbox of checkboxes) {
              checkbox.checked = false
          }

          const clickedCheckbox = [...checkboxes].find(c => c === e.target)
          clickedCheckbox.checked = true
      })
  }

  const textDepended = document.getElementsByClassName('text-depended');

  for (let i = 0; i < textDepended.length; i++) {
      textDepended[i].addEventListener('click', (e) => {
          checkboxValue = document.getElementById('text' + i);
          checkboxValue.focus();
          checkboxValue.onblur = e => {
            textDepended[i].value = checkboxValue.value;
          }
      })
  }

const clearValues = document.getElementsByClassName('clear-values');

for (let i = 0; i < clearValues.length; i++) {
    clearValues[i].addEventListener('click', (e) => {
        checkboxValue = document.getElementById('text' + i);
        checkboxValue.value = "";
        document.getElementsByClassName('text-depended')[i].value = "";
    })
}

const textValues = document.getElementsByClassName('text-value');

for (let i = 0; i < textValues.length; i++) {
    textValues[i].addEventListener('input', (e) => {
        textDepended[i].checked = true;
        textValues[i].onblur = e => {
            textDepended[i].value = textValues[i].value;
        }
    })
}

//The form name/id will be used in accessing the form data. Here it is 'data'
const quest1 = data['leef'];
const quest3 = data['gezins'];
const quest4 = data['burger'];
const quest5 = data['text0'];
const quest21 = data['text3'];
const quest22 = data['text4'];
const quest7 = data['gewi'];
const quest8 = data['lengte'];
const quest20 = data['text2'];



function processAge() {
    let valid = false;

    const age = quest1.value.trim();

    if (!isRequired(age)) {
        showError(quest1, 'Age cannot be blank.');
    } else if (!isAgeValid(age)) {
        showError(quest1, 'Age is not valid.')
    } else {
        showSuccess(quest1);
        valid = true;
    }
    return valid;
}

function processNumber(elem) {
    let valid = false;

    const number = elem.value.trim();

    if (!isRequired(number)) {
        showError(elem, 'Values cannot be blank.');
    } else if (!isNumberValid(number, elem)) {
        showError(elem, 'Values cannot be letters.')
    } else if (elem == quest3 && (number > 10 || number < 1)) {
        showError(elem, 'Values are between 1 and 10.')
    } else {
        showSuccess(elem);
        valid = true;
    }
    return valid;
}

function processLetter(elem) {
    let valid = false;

    const letters = elem.value.trim();

    if (!isRequired(letters)) {
        showError(elem, 'Values cannot be blank.');
    } else if (!isLetterValid(letters)) {
        showError(elem, 'Values cannot be number.')
    } else {
        showSuccess(elem);
        valid = true;
    }
    return valid;
}


const showError = (input, message) => {
    // get the form-field element
    const formField = input.parentElement;
    // add the error class
    formField.classList.remove('success');
    formField.classList.add('error');

    // show the error message
    const error = formField.querySelector('small');
    error.textContent = message;
};

const showSuccess = (input) => {
    // get the form-field element
    const formField = input.parentElement;

    // remove the error class
    formField.classList.remove('error');
    formField.classList.add('success');

    // hide the error message
    const error = formField.querySelector('small');
    error.textContent = '';
}

function isAgeValid(age) {
    const re = new RegExp(/^[^0a-zA-Z-][0-9]{0,1}$/);
    return re.test(age);
}

function isLetterValid(letter) {
    const re = new RegExp(/^[^0-9]+[\b]*$/);
    return re.test(letter);
}

function isNumberValid(number, elem) {
    const re = new RegExp(/^[^0a-zA-Z-][0-9]{0,2}$/);
    textResult = re.test(number);
    return textResult;
}

const isRequired = value => value === '' ? false : true;

const isPasswordSecure = (password) => {
    const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    return re.test(password);
};

const debounce = (fn, delay = 500) => {
    let timeoutId;
    return (...args) => {
        // cancel the previous timer
        if (timeoutId) {
            clearTimeout(timeoutId);
        }
        // setup a new timer
        timeoutId = setTimeout(() => {
            fn.apply(null, args)
        }, delay);
    };
};
//
data.addEventListener('input', debounce(function (e) {
    switch (e.target.id) {
        case 'leef':
            processAge();
            break;
        case 'gezins':
            processNumber(quest3);
            break;
        case 'burger':
            processLetter(quest4);
            break;
        case 'text0':
            processLetter(quest5);
            break;
        case 'text3':
            processLetter(quest21);
            break;
        case 'text4':
            processLetter(quest22);
            break;
        case 'gewi':
            processNumber(quest7);
            break;
        case 'lengte':
            processNumber(quest8);
            break;
        case 'text2':
            processNumber(quest20);
            break;
    }

}));

document.getElementById('lust9').onclick = e => {
    let toBeBlurred = document.querySelectorAll('.blur-9');
    for (let i = 0; i < toBeBlurred.length; i++) {

        checkboxes = toBeBlurred[i].getElementsByTagName('input');
            for (const checkbox of checkboxes) {
                checkbox.disabled = true;
            }
        }
}

document.getElementById('lustn9').onclick = e => {
    let toBeBlurred = document.querySelectorAll('.blur-9');
    for (let i = 0; i < toBeBlurred.length; i++) {

        checkboxes = toBeBlurred[i].getElementsByTagName('input');
        for (const checkbox of checkboxes) {
            checkbox.disabled = false;
        }
    }
}

document.getElementById('zat11').onclick = e => {
    let toBeBlurred = document.querySelectorAll('.blur-11');
    for (let i = 0; i < toBeBlurred.length; i++) {

        checkboxes = toBeBlurred[i].getElementsByTagName('input');
        for (const checkbox of checkboxes) {
            checkbox.disabled = true;
        }
    }
}

document.getElementById('zatn11').onclick = e => {
    let toBeBlurred = document.querySelectorAll('.blur-11');
    for (let i = 0; i < toBeBlurred.length; i++) {

        checkboxes = toBeBlurred[i].getElementsByTagName('input');
        for (const checkbox of checkboxes) {
            checkbox.disabled = false;
        }
    }
}

function checkIfChecked(elem) {
    if (elem.checked == true) {
        return true;
    } else {
        return false;
    }
}

const formIds = [];

data.addEventListener('submit', function (e) {
    // prevent the form from submitting
    e.preventDefault();

    // submit to the server if the form is valid
    if (processAge() && processNumber(quest3) && processNumber(quest7) && processNumber(quest8) && processLetter(quest4)) {
        //if (true) {
            const allInputs = document.querySelectorAll('input');
            for (let i = 0; i < allInputs.length; i++) {
                if (checkIfChecked(allInputs[i])) {
                    formIds[allInputs[i].id.replaceAll(/[a-zA-Z]*/g, '')] = allInputs[i].id;
                }
            }

            data['formid'].value = formIds;
            data.submit();
    } else {
        document.getElementById('form-error').innerHTML = 'An error occurred while trying to view the next page. Please fill in the form more carefully.'
    }
});
