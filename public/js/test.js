var info = $('#info');
var button = $('#press');
var base_url = $('body').attr('data-base_url');
var password_input = $('#password');
var password = '';

button.click(function(){
    password = password_input.val();

    $.get(
        base_url + '/test/' + password,
        function(response){
            info.html(response);
        }
    );
});
