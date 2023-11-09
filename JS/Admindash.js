function OpenBloodbankDetails(){
    
   
    $('#openBloodbankDetails').modal('show');
    
        
}
function OpenHospitalDetails(){
    
   
    $('#openHospitalDetails').modal('show');
    
        
}

//function savePopup(){
//    
//   
//    $('#savePopup').modal('show');
//    
//}

//function deletePopup(){
//    
//    
//    $('#deletePopup').modal('show');
//    
//        
//}

function AddBloodbank(){
    
    
    $('#addBloodbank').modal('show');
    
        
}

function AddHospital(){
    
    $('#addHospital').modal('show');
        
}

function EditBloodbankDetails(){
    
    $('#editBloodbankDetails').modal('show'); 
        
}
function EditHospitalDetails(){
    
    $('#editHospitalDetails').modal('show'); 
        
}

function AddCampaign(){
    
    $('#AddCampaign').modal('show'); 
        
}

function editHospital(hospitalId){
   
    $.ajax({url: "../popups/EditHospital.php",
    method: 'post',
    data: {hospitalId: hospitalId},
    success: function (result) {

        $("#hoapitlEdit").html(result);
        

    }});
}

function VeiwHospital(hospitalId){
   console.log("clicked");
    $.ajax({url: "../popups/viewhospitalpopup.php",
    method: 'post',
    data: {hospitalId: hospitalId},
    success: function (result) {

        $("#hospitalVeiw").html(result);
        console.log(result);
        

    }});
}

function functionTestt(value) {


    $.ajax({url: "../services/locationService.php",
        method: 'post',
        data: {district: value},
        success: function (result) {

            $("#divisionDropDownp").html(result);
           

        }});
}
