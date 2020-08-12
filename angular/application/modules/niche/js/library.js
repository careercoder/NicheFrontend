function getNicheList(){


    $('#nicheListTable').DataTable({
        "serverSide": true,
        "processing": true,
        "ajax": {
            'beforeSend': function (request) {
                request.setRequestHeader('authorization', 'Token ' + appUserSessionToken);
            },

            "url": appEndPoint + "niche/",
            "dataSrc": "data"

        },
        "columns": [
            {"data": "name"},
            {"data": "domain"},
            {
                "mRender": function (data, type, row) {
                    return '<div class="text-right">' +
                        '<a class="btn btn-success" href="/{% url "niche_edit_view" %}?id=' + row.id + '">Edit</a> ' +
                        '<a class="btn btn-info" href="/?niche_selection=' + row.id + '">Make Active</a> ' +
                        '<button class="btn btn-primary getBrandPlanList" id="" href="" data-niche-id="' + row.id + '">Brand Plans</button>' +
                        '</div>';
                }
            }
        ]
    });

}