/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */





function EditDonor(donorId){

    console.log(donorId);
    
    $.ajax({url: "../popups/EditDonor.php",
    method: 'post',
    data: {donorId : donorId },
    success: function (result) {

        $("#DonorEdit").html(result);
    }});
        
}

