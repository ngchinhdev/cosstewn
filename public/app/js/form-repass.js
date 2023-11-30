const email = document.querySelector("input[name=email]");
const password = document.querySelector("input[name=pass]");
const repass = document.querySelector("input[name=repass]");
const enterMailForm = document.querySelector("form.form-forgot");
const enterNewPassForm = document.querySelector("form.form-change-pass");

function isError(input, message) {
    let siblingElem = input.nextElementSibling;
    input.classList.add("error");
    input.classList.add("placeHD");
    input.classList.remove("success");
    siblingElem.classList.add("error");
    siblingElem.innerText = message;
}

function isSuccess(input) {
    let siblingElem = input.nextElementSibling;
    input.classList.remove("error");
    input.classList.remove("placeHD");
    input.classList.add("success");
    siblingElem.classList.remove("error");
    siblingElem.innerText = "";
}

function checkEmail(input) {
    let isTrue = true;
    let emailReg = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (input.value === '') {
        isError(input, '(*) Vui lòng nhập email!');
        return false
    } else if (!emailReg.test(input.value)) {
        isError(input, "(*) Email không hợp lệ!");
        isTrue = false;
    } else {
        isSuccess(input);
    }
    return isTrue;
}

function checkPassword(input) {
    let isTrue = true;
    if (input.value === '') {
        isError(input, '(*) Vui lòng nhập mật khẩu!');
        return false
    } else if (input.value.length < 5) {
        isError(input, '(*) Vui lòng nhập nhiều hơn 5 ký tự!');
        isTrue = false;
    } else {
        isSuccess(input);
    }
    return isTrue;
}

function checkCfPassword(pw, cfpw) {
    let isTrue = true;
    if (cfpw.value === '') {
        isError(cfpw, '(*) Vui lòng xác nhận mật khẩu!');
        return false
    } else if (pw.value !== cfpw.value) {
        isError(cfpw, '(*) Mật khẩu không trùng khớp!');
        isTrue = false;
    } else {
        isSuccess(cfpw);
    }
    return isTrue;
}

enterMailForm && enterMailForm.addEventListener('submit', function(e) {
    if (!(checkEmail(email))) {
        e.preventDefault();
        checkEmail(email);
    }
});

enterNewPassForm && enterNewPassForm.addEventListener('submit', function(e) {
    if (!(checkPassword(password) && checkCfPassword(password, repass))) {
        e.preventDefault();
        checkPassword(password);
        checkCfPassword(password, repass);
    }
});


