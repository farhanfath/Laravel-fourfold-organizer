var btn = document.getElementById('btnEmail');
var namaPengirim = document.getElementById('namaPengirim');
var linkemail = document.getElementById('linkemail');
var subject = document.getElementById('subject');
var message = document.getElementById('message');

btn.addEventListener('click', function(e){
  e.preventDefault();

  if (isFormValid()) {
    sendEmail();
  } else {  
    failedSent();
  }
})

function sendEmail() {
  const bodyMessage = `Nama : ${namaPengirim.value} <br> Email : ${linkemail.value} <br> message : ${message.value}`;
    Email.send({
      Host: "smtp.elasticemail.com",
      Username: "hanforlife3@gmail.com",
      Password: "438610C340BCCBF375B3B388FE7BC7B7C32F",
      To: 'hanforlife3@gmail.com',
      From: "hanforlife3@gmail.com",
      Subject: subject.value,
      Body: bodyMessage
    }).then(function () {
      // SweetAlert berhasil
      Swal.fire({
        html: "<h5 style='color:#cda45e; font-family: serif'>Thanks For Your Feedback</h5>",
        icon: "success",
        background: "#1a1814",
        confirmButtonColor: "#cda45e"
      }).then(function () {
        // Clearform
        clearForm();
      });
    });
  }

function clearForm() {
  document.getElementById("myForm").reset();
}

function isFormValid() {
  const isinama = document.getElementById('namaPengirim').value;
  const isiemail = document.getElementById('linkemail').value;
  const subject = document.getElementById('subject').value;
  const message = document.getElementById('message').value;
  
  if (isinama === '' || isiemail === '' || subject === '' || message === '') {
    return false;
  }
  return true;
}

function failedSent() {
  Swal.fire({
    icon: "error",
    html: "<h5 style='color:#cda45e; font-family: serif'>Harap Isi Semua Kolom</h5>",
    background: "#1a1814",
    showConfirmButton: false,
    timer: 1000
  });
}
