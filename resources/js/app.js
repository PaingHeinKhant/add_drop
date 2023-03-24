import './bootstrap';

// let btn = document.getElementById('btn');
// let inputui = document.getElementById('inputui');
// let i = 1;
//
//
// function run(){
//     console.log("helo")
// }
//
//
// btn.addEventListener("click", function (){
//     var b = i++;
//    inputui.innerHTML +=
//
//         `
//      <div class="my-2" id='body${b}' >
//             <input type="number" name="hello${b}" />
//             <input type="number" name="okpar${b}" />
//              <span class="mx-3">${b}</span>
//             <button class="btn btn-danger" onclick="this.parentElement.remove()" id="delBtn${b}">Delete</button>
//         </div>
//     `;
// })



const addButton = document.getElementById('addButton');
const inputContainer = document.getElementById('inputContainer');
const sumButton = document.getElementById('sumButton');
const sumDisplay = document.getElementById('sum');
let counter = 0;

addButton.addEventListener('click', function() {
    const inputHTML = `
    <div class="my-2" >
            <input type="text" name="${counter}" value="hello"/>
            <input type="number" name="${counter}" id="changes" class="input-field"/>
             <span class="mx-3">${counter}</span>
        </div>`;
    const deleteButtonHTML = `<button class="btn btn-danger">Delete</button>`;


    const wrapperDiv = document.createElement('div');
    wrapperDiv.innerHTML = inputHTML + deleteButtonHTML;
    const deleteButton = wrapperDiv.querySelector('button');
    deleteButton.addEventListener('click', function() {
        inputContainer.removeChild(wrapperDiv);
    });

    inputContainer.appendChild(wrapperDiv);
    counter++;

//     // Add event listener for input field
//     const inputField = inputContainer.lastElementChild.querySelector('.input-field');
//     inputField.addEventListener('input', updateSum);
//
//     // Add event listener for delete button
//     const deleteButtonElement = inputContainer.lastElementChild.querySelector('.delete-button');
//     deleteButtonElement.addEventListener('click', function(event) {
//         // Remove the input wrapper from the container
//         const wrapperDiv = event.target.closest('.input-wrapper');
//         inputContainer.removeChild(wrapperDiv);
//
//         // Recalculate the sum of the remaining input fields
//         updateSum();
//     });
// });
//
// function updateSum() {
//     // Calculate the total
//     let total = 0;
//     const inputFields = document.querySelectorAll('.input-field');
//     for (let i = 0; i < inputFields.length; i++) {
//         const value = parseFloat(inputFields[i].value);
//         if (!isNaN(value)) {
//             total += value;
//         }
//     }
//     // Display the total
//     sumDisplay.innerHTML = `Total: ${total}`;
});



// let changes = document.getElementById('changes');
// changes.addEventListener('keypress', function() {
//     // Iterate through each input field and calculate the total
//     const inputFields = document.querySelectorAll('.input-field');
//     let total = 0;
//     for (let i = 0; i < inputFields.length; i++) {
//         const value = parseFloat(inputFields[i].value);
//         if (!isNaN(value)) {
//             total += value;
//         }
//     }
//     // Display the total
//     sumDisplay.innerHTML = `Total: ${total}`;
// });


//
// const addButton = document.getElementById('addButton');
// const inputContainer = document.getElementById('inputContainer');
// const sumButton = document.getElementById('sumButton');
// const sumDisplay = document.getElementById('sum');
// let counter = 0;
//
// addButton.addEventListener('click', function() {
//     // Check the value of each input field already present
//     const inputs = inputContainer.getElementsByTagName('input');
//     let allValues = '';
//     for (let i = 0; i < inputs.length; i++) {
//         allValues += inputs[i].value;
//     }
//     if (allValues === '') {
//         allValues = '0';
//     }
//     // Add the new input field to the container
//     const newInput = `<input type="text" name="input-${counter}" class="input-field">`;
//     const deleteButton = `<button class="delete-button">Delete</button>`;
//     const wrapperDiv = `<div class="input-wrapper">${newInput}${deleteButton}</div>`;
//     inputContainer.insertAdjacentHTML('beforeend', wrapperDiv);
//
//     // Increment the counter
//     counter++;
// });
//
// sumButton.addEventListener('click', function() {
//     // Iterate through each input field and calculate the total
//     const inputFields = document.querySelectorAll('.input-field');
//     let total = 0;
//     for (let i = 0; i < inputFields.length; i++) {
//         const value = parseFloat(inputFields[i].value);
//         if (!isNaN(value)) {
//             total += value;
//         }
//     }
//     // Display the total
//     sumDisplay.innerHTML = `Total: ${total}`;
// });
//
// // Add event listener for delete button
// inputContainer.addEventListener('click', function(event) {
//     if (event.target.classList.contains('delete-button')) {
//         const wrapperDiv = event.target.closest('.input-wrapper');
//         inputContainer.removeChild(wrapperDiv);
//     }
// });









