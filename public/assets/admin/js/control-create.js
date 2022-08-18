(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#create_form').submit(function (e) {
        e.preventDefault();
        let parentId=$('input[name="pId"]').val();
        let data=new FormData(this);
        data.append('id',parentId)
        $.ajax({
             method: 'POST',
             url: $('#create_form').attr('action'),
             enctype: 'multipart/form-data',
             data: data,
             dataType:'JSON',
             processData: false,  // tell jQuery not to process the data
             contentType: false
         }).done(function (response) {
             //console.log(response);
             let imageUrl=window.location.origin+'/assets/admin/media/svg/icons/Files/image_back.png';
             Swal.fire({
                 title:'Ok',
                 text:response.message,
                 icon:'success',
                 showCancelButton: true,
                 confirmButtonColor: '#2778c4',
                 cancelButtonColor: '#2778c4',
                 confirmButtonText: 'Geri Dön',
                 cancelButtonText:'Ok'
             }).then((result) => {
                 if (result.isConfirmed) {

                 }
             })
             $('#file').val('');
             $('#file2').val('');
             $('#file3').val('');
             $('.image-input-wrapper').css('background-image','url(' + imageUrl + ')');
             $('#create_form')[0].reset();
         }).fail(function (error) {
             if (error.responseText!==""){
                 let err=JSON.parse(error.responseText);
                 //console.log(err);
                 $('input[name="name"]').focus();
                 Swal.fire({
                     title:'Üzgünüm',
                     text:err.errors.name,
                     icon:'error',
                     timer:2500
                 });
             }

         })
    })
})();
