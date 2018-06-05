$(document).ready(function() {

  var $content = $('.append');
  var $loader = $('#load_more');

  var ppp = 5;
  var offset = 1;

  var recent  = 'fetch_recent';
  var popular = 'fetch_popular';
  var growth  = 'fetch_growth';

  function ajax_test() {
    $.ajax({
      url: ajaxurl,
      type: 'post',
      data: {
        'offset': 0,
        'action': 'fetch_recent'
      },
      success: function(data) {
        $('.append').append(data + 'hej');
        // console.log(data);
        // alert('success');
      }
    });
  }

  ajax_test();


});
