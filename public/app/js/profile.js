const inputPW = document.querySelector('.pw-hide input');
const btnToggle = document.querySelector('.btn-tgl');
btnToggle.addEventListener('click', () => {
    const isPass = inputPW.type === 'password';
    inputPW.type = isPass ? 'text' : 'password';
    isPass ? btnToggle.className = 'btn-tgl fa-sharp fa-solid fa-eye position-absolute end-0'
            : btnToggle.className = 'btn-tgl fa-sharp fa-solid fa-eye-slash position-absolute end-0';
})