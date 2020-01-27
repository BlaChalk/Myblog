require('./bootstrap');

$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

deletePost = function (id) {
    let result = confirm('Do you want to delete this Post?');
    if (result){
        let actionURL = '/posts/'+id;
        $.post(actionURL, {_method: 'delete'}).done(function () {
            location.href = '/posts/admin';
        })
    }
}
