/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */


function AddCampaign(){
    
    $('#AddCampaign').modal('show'); 
        
}

function EditCamp(campaignId){
    
    $.ajax({url: "../popups/EditCampaign.php",
    method: 'post',
    data: {campaignId : campaignId },
    success: function (result) {

        $("#campaignEdit").html(result);
    }});
        
}


function ViewChamp(){
    
    $('#ChampView').modal('show'); 
        
}