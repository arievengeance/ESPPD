<script>
    $(document).ready(function() {
        $('#modal').on('hidden.bs.modal', function() {
            $('#form-data')[0].reset()
            removeAlert()
        })

        $('.btn-edit').click(function() {
            $('.modal-title').text('Ubah Data')

            let pengaturanID = $(this).attr('data-id')

            $.ajax({
                    url: '<?= base_url('settings/umum/json') ?>',
                    data: {pengaturan_id: pengaturanID},
                    method: 'post',
                    dataType: 'json',
                    success: function(data){

                        console.log(data)
                        $('#pengaturan_id').val(data.pengaturan_id)
                        $('#bagian_id').val(data.bagian_id)

                        $('#pengaturan_nama_pemerintahan').val(data.pengaturan_nama_pemerintahan)
                        $('#provinsi').selectize()[0].selectize.setValue(data.pengaturan_provinsi)
                        $('#alamat_ttd').val(data.pengaturan_ibukota)
                        $('#alamat').val(data.pengaturan_alamat)
                        $('#telepon').val(data.pengaturan_alamat2)
                    },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Oops...',
                        text: 'Internal Server Error!',
                    })
                }
            });
            
            $('#submit').addClass('update').removeClass('save')
            $('#modal').modal('show')
        })
    });
    
</script>