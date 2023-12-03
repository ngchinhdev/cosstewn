// Check valid
const email = document.querySelector("input[name=email]");
const phoneNum = document.querySelector("input[name=phone]");
const nameInput = document.querySelector("input[name=name]");
const form = document.querySelector("form.form_info");
const errorEl = document.querySelector('.error_el');

function checkName(input) {
    let isTrue = true;
    let nameReg = /-?\d+/;
    if (input.value === '') {
        return false
    } else if (nameReg.test(input.value.trim())) {
        isTrue = false;
    }
    return isTrue;
}

function checkPhoneNumber(input) {
    let isTrue = true;
    let phoneNumReg = /^0\d{9}$/;
    if (input.value && !phoneNumReg.test(input.value)) {
        isTrue = false;
    }
    return isTrue;
}

function checkEmail(input) {
    let isTrue = true;
    let emailReg = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (input.value === '') {
        return false
    } else if (!emailReg.test(input.value)) {
        isTrue = false;
    } 
    return isTrue;
}

$(document).on('change', '#file-avt', function(e) {
    $('.choose_img img').remove();

    let file = e.target.files[0];

    if (file) {
        let imgUrl = URL.createObjectURL(file);

        let img = document.createElement("img");
        img.className = 'rounded-circle';
        img.src = imgUrl;
        
        document.querySelector('.choose_img').insertAdjacentElement("afterbegin", img);
    }
});


form && form.addEventListener('submit', function(e) {
    if(e.submitter.id !== 'save') return;

    if(confirm("Bạn có chắc chắn muốn lưu thay đổi ?")) {
        if(password) {
            if (!(checkEmail(email) && checkPhoneNumber(phoneNum) &&
                    checkName(nameInput))) {
                e.preventDefault();
                checkEmail(email);
                checkPhoneNumber(phoneNum);
                checkName(nameInput);
                errorEl.textContent = "⛔ Vui lòng nhập chính xác thông tin!";
            } 
        } else {
            if (!(checkEmail(email) && checkPhoneNumber(phoneNum) &&
                    checkName(nameInput))) {
                e.preventDefault();
                checkEmail(email);
                checkPhoneNumber(phoneNum);
                checkName(nameInput);
                errorEl.textContent = "⛔ Vui lòng nhập chính xác thông tin!";
            } 
        }
    } else {
        e.preventDefault();
    }
});