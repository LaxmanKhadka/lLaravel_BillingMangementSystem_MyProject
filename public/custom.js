var rep;

function ajax(url,data,id=false, post_type='get', callback=false){
    if (id==false){
      id='pageload'; 

    } 
    $.ajaxSetup({
  headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
 
    $.ajax({
          method:post_type,
            url:url,
          data:data,
                      success:function(resp)
                      {
                          // sessionStorage.setItem("last_message_url", url);
                          // $('#new_message_box').hide();
                          // $('#messages_list_view').show();
                     rep=resp;
                    //  console.log(rep);
                          $("#"+id).html(resp);
                          $("#scroll_to_bottom").animate({ scrollTop: $('#test_scroll').height() }, 1000);
                          if(callback){
                                callback();
                          }

                          
                      },
                      error:function(e)
                      {
                          console.log(e);
                      }
                  });
  }

  
  function validateEmail(email)
  {
   const res = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
   return res.test(String(email).toLowerCase());
 }
 
 function validatePhone(a) {
    
  var filter = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
  if (filter.test(a)) {
      return true;
  }
  else {
      return false;
  }

  
}
