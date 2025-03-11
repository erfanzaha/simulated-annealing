<script>
$(document).on('submit', '#form-data', function(e) {
    e.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $.ajax({
        url: "<?= base_url('data-testing-proses') ?>",
        method: 'post',
        data: new FormData(this),
        dataType: "json",
        contentType: false,
        cache: false,
        processData: false,
        success: function(res) {
            if (res.status == 'oke') {
                swal({
                    title: res.title,
                    text: res.msg,
                    icon: res.icon,
                    closeOnClickOutside: false,
                    closeOnEsc: false
                     }).then((ok) => {
                    if (ok) {
                        $('#form-data').trigger("reset");
                    }
                });
            } else {
                swal({
                    title: 'Gagal',
                    text: "Data gagal disimpan",
                    icon: "error",
                    closeOnClickOutside: false,
                    closeOnEsc: false
                });
            }
        }
    });
});
</script>