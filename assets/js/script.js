// Dark Mode
const darkButton = document.getElementById('darkButton');

const body = document.body;

darkButton.addEventListener('click', function(){

    body.classList.toggle('dark-mode');

});

// Notifikasi Pesanan
const pesanBtn = document.querySelectorAll('.pesanBtn');

pesanBtn.forEach(function(button){

    button.addEventListener('click', function(){

        alert('Pesanan berhasil ditambahkan');

    });

});

// Form Validation
const form = document.getElementById('contactForm');

form.addEventListener('submit', function(e){

    e.preventDefault();

    const nama = document.getElementById('nama').value.trim();

    if(nama === ''){
        alert('Nama tidak boleh kosong');

    } else {
        alert('Pesan berhasil dikirim');
        form.reset();

    }

    

});