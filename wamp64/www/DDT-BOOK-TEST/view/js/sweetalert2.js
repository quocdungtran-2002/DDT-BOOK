// $('#login').on('click', function(e){
//     e.preventDefault();
//     const href= $(this).attr('href')
//     Swal.fire({
//         position: 'top-end',
//         icon: 'success',
//         title: 'Đăng nhập thành công',
//         showConfirmButton: false,
//         timer: 1500
//     }).then((result) =>{
//         if (result.value){
//             document.location.href = href;
//         }
//     })
// })

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
//             window.location.href = '../index.php';
//         }
//     });
// });


// $('#logout').on('click', function (e) {
//     e.preventDefault();
//     const href = $(this).attr('href');
//     Swal.fire({
//         position: 'top-end',
//         icon: 'success',
//         title: 'Đăng xuất thành công',
//         showConfirmButton: false,
//         timer: 1500
//     }).then((result) => {
//         if (result.dismiss === Swal.DismissReason.timer) {
//             // Điều hướng sau khi đóng SweetAlert
//             window.location.href = '../index.php';
//         }
//     });
// });