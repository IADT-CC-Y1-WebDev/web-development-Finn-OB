

let submitBtn = document.getElementById('submit_btn');
let bookForm = document.getElementById('book_form');
let errorSummaryTop = document.getElementById('error_summary_top');

let titleInput = document.getElementById('title');
let authorInput = document.getElementById('author');
let publisherInput = document.getElementById('publisher_id');
let yearInput = document.getElementById('year');
let isbnInput = document.getElementById('isbn');
let descriptionInput = document.getElementById('description');
let formatInput = document.getElementsByName('format_ids[]');
let imageInput = document.getElementById('cover');

let titleError = document.getElementById('title_error');
let authorError = document.getElementById('author_error');
let publisherError = document.getElementById('publisher_error');
let yearError = document.getElementById('year_error');
let isbnError = document.getElementById('isbn_error');
let descriptionError = document.getElementById('description_error');
let formatError = document.getElementById('format_error');
let imageError = document.getElementById('cover_error');

let errors = {};

submitBtn.addEventListener('click', onSubmitForm);

function addError(fieldName, message) {
    errors[fieldName] = message;
}

function showErrorSummaryTop() {
    const messages = Object.values(errors);
    if (messages.length === 0) {
        errorSummaryTop.style.display = 'none';
        errorSummaryTop.innerHTML = '';
        return;
    }
    errorSummaryTop.innerHTML =
        '<strong>Please fix the following:</strong><ul>' +
        messages
            .map(function (m) {
                return '<li>' + m + '</li>';
            })
            .join('') +
        '</ul>';
    errorSummaryTop.style.display = 'block';
}

function showFieldErrors() {
    titleError.innerHTML = errors.title || '';
    authorError.innerHTML = errors.author || '';
    publisherError.innerHTML = errors.publisher || '';
    yearError.innerHTML = errors.year || '';
    isbnError.innerHTML = errors.isbn || '';
    descriptionError.innerHTML = errors.description || '';
    formatError.innerHTML = errors.format || '';
    imageError.innerHTML = errors.image || '';
}

function isRequired(value) {
    return String(value).trim() !== '';
}

function isMinLength(value, min) {
    return String(value).trim().length >= min;
}

function isMaxLength(value, max) {
    return String(value).trim().length <= max;
}

function onSubmitForm(evt) {
    evt.preventDefault();

    errors = {};

    let titleMin = titleInput.dataset.minlength || 3;
    let titleMax = titleInput.dataset.maxlength || 255; 
    let descMin = 10;      

    if(!isRequired(titleInput.value)){
        addError('title', 'Title is required');
    } else if(!isMinLength(titleInput.value, 3)){
        addError('title', 'Title must be at least 3 characters.');
    } else if(!isMaxLength(titleInput.value, 255)){
        addError('title', 'Title must not exceed 255 characters.');
    }


    if(!isRequired(authorInput.value)){
        addError('author', 'Author is required');
    }


    if(!isRequired(publisherInput.value)){
        addError('publisher', 'Publisher is required');
    }

    if(!isRequired(yearInput.value)){
        addError('year', 'Year is required');
    }
    if(!isRequired(isbnInput.value)){
        addError('isbn', 'ISBN is required');
    }


    if(!isRequired(descriptionInput.value)){
        addError('description', 'Description is required');
    }else if(!isMinLength(descriptionInput.value, descMin)){
        addError('description', `Description must be at least ${descMin} characters`);
    }

    
    let formatSelected = false;
    for(let i = 0; i < formatInput.length; i++){
        if(formatInput[i].checked){
            formatSelected = true;
            break;
        }
    }

    if(!formatSelected){
        addError('format', 'You must select atleast one format');
    }

    if(!imageInput.files || imageInput.files.length === 0){
        addError('image', 'Image is required');
    }

    showFieldErrors();

    showErrorSummaryTop();
    
    if(Object.keys(errors).length === 0){
        bookForm.submit();
    }
}
