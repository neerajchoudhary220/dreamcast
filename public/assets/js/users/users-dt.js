function dbTble() {
    
    user_dt_tbl = $("#user_data_table").DataTable({
        serverSide: true,
        stateSave: false,
        pageLength: 100,
        ajax: {
            url: user_dt_url,
            data: {
            },

            beforeSend: function () {
            },
        },
        columns: [
            {
                name: 'id',
                data: 'id',
            },
            {
            name: 'name',
            data: 'name',
        },
        {
            name:'phone_number',
            data:'phone_number',
        
        },
        {
            name:'email',
            data:'email',
        
        },
        
        {
            name:'role',
            data:'role',
            orderable:false,
        
        },
        // {
        //     name: 'action',
        //     data: 'action',
        //     orderable: false
        // },
        ],
        order: [0, 'desc'],
        drawCallback: function (settings, json) {
            $(".dltBtn").on("click",function(){
                const delete_url = $(this).attr('arial-label-link')
                deleteUser(delete_url)
               
            })
        },

    });
}

const deleteUser =(delete_url)=>{
    swal("Hello world!");
    swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        buttons: true,
        confirmButtonColor: 'success',
        cancelButtonColor: '#000',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        console.log(result);
        if (result) {
            $.ajax({
                url: delete_url,
                method: "delete",
                success: function (data) {
                    swal(`Deleted!`, data.message,`success`);
                    user_dt_tbl.destroy()
                    dbTble()
                }
            });
        }
    });
}

$(document).ready(function(){
    dbTble();
})