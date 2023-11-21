const inputPW = document.querySelector('.pw-hide input');
const btnToggle = document.querySelector('.btn-tgl');
btnToggle.addEventListener('click', () => {
    const isPass = inputPW.type === 'password';
    inputPW.type = isPass ? 'text' : 'password';
    isPass ? btnToggle.className = 'btn-tgl fa-sharp fa-solid fa-eye position-absolute end-0'
            : btnToggle.className = 'btn-tgl fa-sharp fa-solid fa-eye-slash position-absolute end-0';
})

// Check valid
const email = document.querySelector("input[name=email]");
const phoneNum = document.querySelector("input[name=phone]");
const nameInput = document.querySelector("input[name=name]");
const password = document.querySelector("tr.ls.db input[name=pass]");
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

function checkPassword(input) {
    let isTrue = true;
    if (input.value === '') {
        return false
    } else if (input.value.length < 5) {
        isTrue = false;
    }
    return isTrue;
}

form && form.addEventListener('submit', function(e) {
    if(e.submitter.id !== 'save') return;

    if(confirm("Bạn có chắc chắn muốn lưu thay đổi ?")) {
        if(password) {
            if (!(checkEmail(email) && checkPassword(password) && checkPhoneNumber(phoneNum) &&
                    checkName(nameInput))) {
                e.preventDefault();
                checkEmail(email);
                checkPassword(password);
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