//* Preview image untuk banner
function previewImage1() {
  document.getElementById("logoPrev").style.display = "block";
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("logoP").files[0]);

  oFReader.onload = function (oFREvent) {
    document.getElementById("logoPrev").src = oFREvent.target.result;
  };
}

function previewImage2() {
  document.getElementById("iconPrev").style.display = "block";
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("iconP").files[0]);

  oFReader.onload = function (oFREvent) {
    document.getElementById("iconPrev").src = oFREvent.target.result;
  };
}

function previewImageBG() {
  document.getElementById("fotoBgPrev").style.display = "block";
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("fotobg").files[0]);

  oFReader.onload = function (oFREvent) {
    document.getElementById("fotoBgPrev").src = oFREvent.target.result;
  };
}

//*Tentang Kami
function previewImageFL() {
  document.getElementById("fotoLayananPrev").style.display = "block";
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("fotoLayanan").files[0]);

  oFReader.onload = function (oFREvent) {
    document.getElementById("fotoLayananPrev").src = oFREvent.target.result;
  };
}

//*Promo
function previewImagePromo() {
  document.getElementById("promoPrev").style.display = "block";
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("promo").files[0]);

  oFReader.onload = function (oFREvent) {
    document.getElementById("promoPrev").src = oFREvent.target.result;
  };
}

//*Tambah Produk
function previewImageProdukT() {
  document.getElementById("gambarProdukPrev").style.display = "block";
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("gambarProduk").files[0]);

  oFReader.onload = function (oFREvent) {
    document.getElementById("gambarProdukPrev").src = oFREvent.target.result;
  };
}
//*Edit Produk
function previewImageProduk() {
  document.getElementById("fotoProdukPrev").style.display = "block";
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("fotoProduk").files[0]);

  oFReader.onload = function (oFREvent) {
    document.getElementById("fotoProdukPrev").src = oFREvent.target.result;
  };
}

//*Tambah Customer
function previewImageCustomerT() {
  document.getElementById("gambarcustomerPrev").style.display = "block";
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("gambarcustomer").files[0]);

  oFReader.onload = function (oFREvent) {
    document.getElementById("gambarcustomerPrev").src = oFREvent.target.result;
  };
}
//*Edit Customer
function previewImageCustomer() {
  document.getElementById("fotocustomerPrev").style.display = "block";
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("fotocustomer").files[0]);

  oFReader.onload = function (oFREvent) {
    document.getElementById("fotocustomerPrev").src = oFREvent.target.result;
  };
}

//*Layanan
function previewImageLayanan() {
  document.getElementById("gambarLayananPrev").style.display = "block";
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("gambarLayanan").files[0]);

  oFReader.onload = function (oFREvent) {
    document.getElementById("gambarLayananPrev").src = oFREvent.target.result;
  };
}

//*Testimoni
function previewImageTestimoni() {
  document.getElementById("gambarTestimoniPrev").style.display = "block";
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("gambarTestimoni").files[0]);

  oFReader.onload = function (oFREvent) {
    document.getElementById("gambarTestimoniPrev").src = oFREvent.target.result;
  };
}

//*Edit Testimoni
function previewImageEditTestimoni() {
  document.getElementById("gambarEditTestimoniPrev").style.display = "block";
  var oFReader = new FileReader();
  oFReader.readAsDataURL(
    document.getElementById("gambarEditTestimoni").files[0]
  );

  oFReader.onload = function (oFREvent) {
    document.getElementById("gambarEditTestimoniPrev").src =
      oFREvent.target.result;
  };
}

//*Hubungi Kami
function previewImageOutlet() {
  document.getElementById("fotoOutletPrev").style.display = "block";
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("fotoOutlet").files[0]);

  oFReader.onload = function (oFREvent) {
    document.getElementById("fotoOutletPrev").src = oFREvent.target.result;
  };
}
//*Edit Hubungi Kami
function previewEditImageOutlet() {
  document.getElementById("fotoOutletPrev1").style.display = "block";
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("fotoOutlet1").files[0]);

  oFReader.onload = function (oFREvent) {
    document.getElementById("fotoOutletPrev1").src = oFREvent.target.result;
  };
}
