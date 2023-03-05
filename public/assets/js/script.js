$(document).on('click','#btn-edit', function() {
    $('.modal-body #id-pengguna').val($(this).data('pengguna_id'));
    $('.modal-body #pengguna_email').val($(this).data('pengguna_email'));
    $('.modal-body #pengguna_sandi').val($(this).data('pengguna_sandi'));
    $('.modal-body #kota_id').val($(this).data('kota_id'));
})