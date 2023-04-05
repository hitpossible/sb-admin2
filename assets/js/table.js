$(() => {
    let table = new DataTable('#tblProduct');

    getProductDetails();

    let tableAjax2 = $('#tblProduct3').DataTable({
        ajax: {
            url: base_url('Dashboard/getProductAll'),
            dataSrc: '',
        },
        columns: [
            {
                data: 'id',
            },
            {
                data: 'name',
            },
            {
                data: 'qty',
                render: function(row) {
                    return `${row} บาท`;
                }
            },
            {
                data: null,
                render: function(row) {
                    return `<button class="btn btn-danger btnDel" type="button" data-id="${row.id}">Delete</button>`;
                }
            }
        ],
    })

    $('#refreshButton').click(function() {
        tableAjax2.ajax.reload();
    })

    // $('.btnDel').click(function() {
    //     let id = $(this).attr('data-id');
    // })

    $(document).on('click', '.btnDel', function() {
        let id = $(this).attr('data-id');

        // send id with ajax to controller delete        
    })
   
})

function getProductDetails () {
    $.ajax({
        url: base_url('Dashboard/getProductAll'),
        type: "GET", // GET, POST
        dataType: "json",
        success: function(result) {
            let html = '';

            result.forEach(element => {
                html += `<tr>
                            <td>${element.id}</td>
                            <td>${element.name}</td>
                            <td>${element.qty}</td>
                        </tr>`;
            });

            $('#tblProduct2 tbody').html(html);


            let table2 = new DataTable('#tblProduct2');

        }
    })
}
