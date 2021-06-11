 // this functions toggles the upload button to be disabled and enabled 



 //starts here ---------------------------_>



function toggleButton(InputID, ButtonID){

    if($('#'+InputID).val() ==""){
      $('#'+ButtonID).prop('disabled',true);
      }
      else {
        $('#'+ButtonID).prop('disabled',false);
      }

}

  //ends here <-------------------------------------
 

//   ===================================================================================


// this is for the progress bar of the file upload process

//starts here ---------------------------_>


  maProgressBar = $('#progressbar');


  $('.allUploadForms').ajaxForm({
  
  beforeSend: function() {
  
  var percentVal = '0%';
  maProgressBar.width(percentVal);
  maProgressBar.html(percentVal);
  },

  uploadProgress: function(event, position, total, percentComplete) {
  window.location.hash = '#';
  var percentVal = percentComplete + '%';
  maProgressBar.width(percentVal)
  maProgressBar.html(percentVal);
  },

  success: function(response){
    $("#upload_msg").text(response.msg);
    $("#upload_msg").fadeIn('fast').delay(1000).fadeOut('fast');
    maProgressBar.width(0)
    maProgressBar.html('0%');
  },

  error: function(response){
    $("#upload_msg").text(response.error);
    $("#upload_msg").fadeIn('fast').delay(1000).fadeOut('fast');
    maProgressBar.width(0)
    maProgressBar.html('0%');
  },

  

  });

  //ends here <-------------------------------------





//   ===================================================================================


  // this is for the delete Modal popup

//starts here ---------------------------_>
 
            function getDeleteModal(elementID,msg){
            $("#exampleModalLabel").html(msg);
            var hr = $("#"+elementID).attr("href");

           $("#modalAnchor").attr('href',hr);
          
          
            }

//ends here <-------------------------------------




//toggle add item button


function revealAddItem(){

    if( document.getElementById("addItem").style.display=="none"){
      document.getElementById("addItem").style.display="block";
      document.getElementById("addItemButton").innerHTML='<i class="fas fa-arrow-up fa-sm text-white-50"></i> Add Item';
    }
    else{
    document.getElementById("addItem").style.display="none";
      document.getElementById("addItemButton").innerHTML='<i class="fas fa-arrow-down fa-sm text-white-50"></i> Add Item';

    }
    
}


//toggle add item button


function showEdit(editButtonID,editDivID,infoID,saveButtonID){
  var x = document.getElementsByClassName(editDivID);
  var y = document.getElementsByClassName(infoID);
  var i;
  for (i = 0; i < x.length; i++) {
    if( x[i].style.display=="none"){
      x[i].style.display="block";
      document.getElementById(editButtonID).style.display="none";
      document.getElementById(saveButtonID).style.display="block";
    }
    
  
  }
  var j;
  for (j = 0; j < y.length; j++) {
    if( y[j].style.display!="none"){
      y[j].style.display="none";
    }
  
  }
 
}
