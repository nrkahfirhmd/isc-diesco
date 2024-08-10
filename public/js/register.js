function toNextSection(step) {
    $('.content-wrapper').removeClass('current');
    
    $(`[data-step="${step}"]`).addClass('current');
}

function moveToNext(currentField) {
    if (currentField.value.length >= currentField.maxLength) {
        const nextField = currentField.nextElementSibling;
        if (nextField) {
            nextField.focus();
        }
    }
}

function otpAlert() {
    $('.wrapper-alert').style.display = 'flex';

    setTimeout(() => {
        $('.wrapper-alert').style.display = 'flex';
    }, 5000);
}