const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const ajax = document.querySelector('.ajax');

// Hilangkan tombol cari
tombolCari.style.display = 'none';

//Event ketika kita menuliskan keyword
keyword.addEventListener('keyup', function () {
   // //ajax
   // fetch
   fetch('ajax/ajax_cari.php?keyword=' + keyword.value)
      .then((response) => response.text())
      .then((response) => (ajax.innerHTML = response));


});

// preview image untuk tambah dan ubah
function previewImage() {
   const cover = document.querySelector('.cover');
   const imgPreview = document.querySelector('.img-preview');

   const oFReader = new FileReader();
   oFReader.readAsDataURL(cover.files[0]);

   oFReader.onload = function (oFREvent) {
      imgPreview.src = oFREvent.target.result;
   };
}