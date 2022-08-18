function edit(id) {
    let imageUrl=window.location.origin+'/assets/admin/media/svg/icons/Files/image_back.png';
    $.ajax({
        type: 'GET',
        url: window.location.origin+'/admin/control/1/edit',
        data: {id: id}
    }).done(function (response) {
        console.log(response);

        $("input[name='name']").val(response.data.category_language.name);
        $("input[name='seo_title']").val(response.data.category_language.seo_title);
        $("input[name='seo_description']").val(response.data.category_language.seo_description);
        $("input[name='seo_keywords']").val(response.data.category_language.seo_keywords);
        $("input[name='sorted']").val(response.data.sorted);
        $("input[name='url']").val(response.data.category_language.url);
        $("textarea[name='description']").val(response.data.category_language.description);
        CKEDITOR.instances['contents'].setData(response.data.category_language.contents);
        $('#file').parent().parent().find("div").css('background-image', 'url(' + response.data.file!==null? response.data.file:imageUrl + ')');
        $('#file2').parent().parent().find("div").css('background-image', 'url(' + response.data.file2!==null? response.data.file2:imageUrl + ')');
        $('#file3').parent().parent().find("div").css('background-image', 'url(' + response.data.file3!==null? response.data.file3:imageUrl + ')');
        $('#edit_form').attr('action', window.location.origin + '/admin/control/' + id);
        $('#file').attr('value', response.data.file);
        $('#file2').attr('value', response.data.file2);
        $('#file3').attr('value', response.data.file3);
    }).fail(function (err) {
        console.log(err);
    })
    $('#editmodal').modal('show');

}

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$('#edit_form').submit(function (e) {
    e.preventDefault();
    let file = $('#file').attr('value');
    let file2 = $('#file2').attr('value');
    let file3 = $('#file3').attr('value');
    let contents = CKEDITOR.instances['contents'].getData();
    //CKEDITOR.instances['contents'].setData(contents);
    const data = new FormData(this);
    data.append("file", file);
    data.append("file2", file2);
    data.append("file3", file3);
    data.append("contents", contents);
    $.ajax({
        method: 'POST',
        url: $('#edit_form').attr('action'),
        enctype: 'multipart/form-data',
        data: data,
        dataType: 'JSON',
        processData: false,  // tell jQuery not to process the data
        contentType: false
    }).done(function (response) {
        $('#editmodal').modal('hide');
        Swal.fire({
            title: 'Ok',
            text: response.message,
            icon: 'success',
            timer: 2500
        })
    }).fail(function (error) {
        console.log(error);
    })
})
function deleteCategory(id) {
    $.ajax({
        method: 'DELETE',
        url: window.location.origin+"/admin/control/1",
        data: {id: id}
    }).done(function (response) {

        Swal.fire({
            title: 'Ok',
            text: response.message,
            icon: 'success',
            timer: 2500
        })
        setTimeout(window.location.reload(), 6000);
    }).fail(function (err) {
        console.log(err)
    })
}

function changeStatus(id) {
    let status;
    if ($('#status' + id).is(':checked')) {
        status = 0;
        $('#status' + id).prop('checked',false);
    } else {
        status = 1;
        $('#status' + id).prop('checked',true);
    }
    $.ajax({
        type: 'get',
        url: window.location.origin+'/admin/control/1',
        data: {id: id, status: status}
    }).done(function (response) {
        console.log(response);
    }).fail(function (error) {
        console.log(error);
    });

}
