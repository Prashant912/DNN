$(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('meta[name="_token"]').attr('content')
        }
    });
});



$(document).ready(function(){
    /////Id
    $("#location-add").submit(function(event){
        
        event.preventDefault();

        var description = $('textarea#description').val();
        var address = ($("input[name=address]").val());
        var id = ($("input[name=id]").val());
        var contact_number = ($("input[name=contact_number]").val());
        var fax = ($("input[name=fax]").val());
        var email = ($("input[name=email]").val());

 

        $.ajax({
        type:'post',
        url:appurl + '/admin/post-Location-form', // route('postlocationform')
        data:{'email' : email,'id' : id, 'address' : address,'contact_number':contact_number,'fax':fax,'description':description},
        cache:true,
        //dataType: 'JSON',
        error: function(xhr, status, error) {
          var err = JSON.parse(xhr.responseText)
          console.log(err.errors);
          $("#errors").html(err.message);
          $("#errors").show();
          $("#pk").hide();
          
        },
        success:function(res){
            $('#pk').html(res.message);
            $("#errors").hide();
            // alert('Records Sucessfuly Recorded');
            // window.location = 'add_member.php';
            // $('#houseid').val(hhouseid);    
        }
        });

    })

})



$(document).on("click","#submit_btn",function(e){
    e.preventDefault();
    var form = $("#data");
    var formData = new FormData(form[0]);


    $.ajax({
        url: appurl + '/admin/featured-videos-store',
        type: 'POST',
        data: formData,
        error: function(xhr, status, error) {
            var err = JSON.parse(xhr.responseText)
            $("#errors").html(xhr.responseText);
            $("#errors").show();
            $('#pks').hide();
            console.log(xhr);
        },

        success: function (res) {
            if(res.status == "success") {
                setTimeout(function() {
                     location.reload();
                    /*$('#pks').hide();
                    $('#name').val('')
                    $('#name1').val('')
                    $('#name2').val('')*/
                },2000)
                
            }
            $('#pks').show().html(res.message);
            $("#errors").hide();
            // console.log(data);
        },
        cache: false,
        contentType: false,
        processData: false
    });
});


$(document).ready(function(){

    $('#Featuredlist').DataTable({

        "processing": true,
        "serverSide": true,
        "ajax":appurl + '/admin/featuredListed',
        "columns": [

        {data: 'serial_no', name: 'serial_no'},
        {data: 'Video_title', name: 'Video_title'},
        {data: 'Video_link', name: 'Video_link'},
        {data: 'background_image_name', name: 'background_image_name'},
        {data: 'background_image_path', name: 'background_image_path'},
        {data: 'status', name: 'status'},
        {data: 'action', name: 'action'},

        ]
    });
});
/*

$(document).on("click",".editpk",function(e){
    e.preventDefault();
    var id = $(this).attr("id");
    //alert(id);
    $.ajax({
        url: appurl + '/admin/editfeaturedListed',
        type: 'GET',
        data: {
            id: id
        },

        success: function (res) {
            console.log(res);
            // if(res.status == "success") {
            //     setTimeout(function() {
            //          location.reload();
            //         $('#pks').hide();
            //         $('#name').val('')
            //         $('#name1').val('')
            //         $('#name2').val('')
            //     },2000)
                
            // }
            // $('#pks').show().html(res.message);
            // $("#errors").hide();
            // console.log(data);
        },
    });
});
*/

$(document).on("click", "#modalPOPId", function () {
var id = $(this).data('id');
    $.ajax({
        url: appurl + '/admin/editfeaturedListed',
        type: 'GET',
        data: "id="+id,  
        success:function(info){
            $('#constentShow').html(info);
        }
    });
});







