// Lấy các phần tử cần thiết
var openPopupButton = document.getElementById('open-popup');
var closePopupButton = document.getElementById('close-popup');
var userPopup = document.getElementById('user-popup');

// Khi nhấn vào liên kết để hiển thị popup
openPopupButton.addEventListener('click', function () {
    userPopup.style.display = 'block';
});

// Khi nhấn vào nút "X" để đóng popup
closePopupButton.addEventListener('click', function () {
    userPopup.style.display = 'none';
});

// Đóng popup khi nhấn bất kỳ nơi nào bên ngoài popup
window.addEventListener('click', function (event) {
    if (event.target == userPopup) {
        userPopup.style.display = 'none';
    }
});


const forms = document.querySelector(".forms"),
      pwShowHide = document.querySelectorAll(".eye-icon"),
      links = document.querySelectorAll(".link");

pwShowHide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", () => {
        let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");
        
        pwFields.forEach(password => {
            if(password.type === "password"){
                password.type = "text";
                eyeIcon.classList.replace("bx-hide", "bx-show");
                return;
            }
            password.type = "password";
            eyeIcon.classList.replace("bx-show", "bx-hide");
        })
        
    })
})   


links.forEach(link => {
    link.addEventListener("click", e => {
       e.preventDefault(); //preventing form submit
       forms.classList.toggle("show-signup");
    })
})


// $('#login').on('click', function (e) {
//     e.preventDefault();
//     const href = $(this).attr('href');
//     Swal.fire({
//         position: 'top-end',
//         icon: 'success',
//         title: 'Đăng nhập thành công',
//         showConfirmButton: false,
//         timer: 1500
//     }).then((result) => {
//         if (result.dismiss === Swal.DismissReason.timer) {
//             // Điều hướng sau khi đóng SweetAlert
//             window.location.href = '../index.php';
//         }
//     });
// });


