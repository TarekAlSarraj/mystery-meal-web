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


//select item for box


function selectItem(editButtonID,editDivID,infoID,saveButtonID,cardID){
  var x = document.getElementsByClassName(editDivID);
  var y = document.getElementsByClassName(infoID);
  var i;
  for (i = 0; i < x.length; i++) {
    if(document.getElementById(editButtonID).checked==true){
      x[i].style.display="block";

        document.getElementById(cardID).style.borderStyle="solid";
        document.getElementById(cardID).style.borderWidth="thick";
      document.getElementById(cardID).style.borderColor="#0A7C6E";
    }
    else{
      x[i].style.display="none";

    }


  }
  var j;
  for (j = 0; j < y.length; j++) {
    if( y[j].style.display!="none"){
      y[j].style.display="none";

    }
    if(document.getElementById(editButtonID).checked==false){
      y[j].style.display="block";
      document.getElementById(cardID).style.borderStyle="hidden";
    }

  }


}




function toggleCreateButton(){
  var checkboxes = document.querySelectorAll('input[name$="category[]"]');
  var checkedOne = Array.prototype.slice.call(checkboxes).some(x => x.checked);
  var itemscheckbox = document.querySelectorAll('input[name$="items[]"]');
  var hiddenInputs = document.getElementsByClassName('hiddenInputs');
  var count = 0;
  if(checkedOne==true){


    for(var i = 0; i < hiddenInputs.length; i++) {
      for (var j = 0; j < checkboxes.length; j++) {
          if(checkboxes[j].checked){
            if(checkboxes[j].value == hiddenInputs[i].value){
              document.getElementById('itemCard'+hiddenInputs[i].id).style.display="block";
              itemscheckbox[i].disabled=false;
              document.getElementById('createButton').disabled=false;
              document.getElementById('createErrormsg').style.display="none";

              break;
            }
          }
          else{
            document.getElementById('itemCard'+hiddenInputs[i].id).style.display="none";
          }


      }

    }

  }

  else{


      for(var i = 0; i < itemscheckbox.length; i++) {

      }

      for(var i = 0; i < hiddenInputs.length; i++) {
      document.getElementById('itemCard'+hiddenInputs[i].id).style.display="none";
      itemscheckbox[i].disabled=true;
      document.getElementById('createButton').disabled=true;
      document.getElementById('createErrormsg').style.display="block";

    }
  }
}



function statusJs(){
  if(document.getElementById('statusInput').style.display=="none"){
        document.getElementById('statusInput').style.display="block";
        document.getElementById('statusBadge').style.display="none";

  }
  else{
      document.getElementById('statusInput').style.display="none";
      document.getElementById('statusBadge').style.display="block";
  }

}
