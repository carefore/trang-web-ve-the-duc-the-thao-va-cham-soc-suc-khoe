$(document).ready(function() {
  $('#healthForm').submit(function(event) {
    event.preventDefault();

    var fullname = $('#fullname').val();
    var email = $('#email').val();
    var age = $('#age').val();

    // Gửi thông tin form đến server
    $.ajax({
      type: 'POST',
      url: 'process.php',
      data: {
        fullname: fullname,
        email: email,
        age: age
      },
      success: function(response) {
        alert('Thông tin của bạn đã được gửi thành công!');
        $('#healthForm')[0].reset(); // Xóa nội dung trong form sau khi gửi thành công
      },
      error: function() {
        alert('Có lỗi xảy ra. Vui lòng thử lại sau.');
      }
    });
  });
});
