const appVersion = '1.0.0';
// const appEndPoint = 'http://localhost:8000/api/v1/'; // https://api.nicheincomeguide.com/api/v1/';
const appEndPoint = 'https://api.nicheincomeguide.com/api/v1/';
/** Cookie Crisp - Set and Get Cookie Data **/
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}


/** Niche-Selection-Tool.js **/
$(document).ready(function () {
    console.log('Document is Ready');

    $.ajaxSetup({
        headers: {
            'authorization': "Token " + appUserSessionToken
        }
    });
});

function getNicheList(){

    $('#nicheListTable').DataTable({
        "serverSide": true,
        "processing": true,
        "ajax": {
            "url": appEndPoint + "niche/",
            "dataSrc": "data",
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
/* get active niche selection tool
$(document).ready(function(){
    $.ajax({
        url: appEndPoint + "niche/",
        type: 'GET',
        dataType: 'json',
        headers: {
            'authorization': 'Token ' + appUserSessionToken
        },
        cache: true,
        contentType: 'application/json; charset=utf-8',
        success: function (result) {
            $.each(result['data'], function (index, value) {
                if (activeNicheID == value['id']) {
                    isActiveNicheID = true;
                    console.log('Active niche.');
                } else {
                    isActiveNicheID = false;
                    console.log('Not active niche.');
                }
                $("#activeNicheSelection").append(new Option(value['name'], value['id']), isActiveNicheID);
                // add niches to the local database
                db.transaction(function (nx) {
                    console.log('Preparing for Log Transactions');
                    nx.executeSql("INSERT INTO niches (id, uuid, name) VALUES (null, value['id'], value['name'])");
                });
            });
            console.log('We got the data.');
        },
        error: function (error) {
            console.log('An Error Occured While Pulling Niches from the API');
        }
    });
}); */
/* create the niche */
$(document).on('submit', '#createNicheForm', function(e) {
    e.preventDefault(); // avoid to execute the actual submit of the form.
    var form = $(this);
    $.ajax({
        type: "POST",
        url: appEndPoint + "niche/",
        data: form.serialize(), // serializes the form's elements.
        success: function(data)
        {
            Swal.fire('Niche Created', 'Your Niche Was Created.', 'success');
            window.location = '#!/niche/created/';
        }
    });
});


/* start controllers */
app.controller('NicheList', ['$scope', '$log', function ($scope, $rootScope) {
    $scope.launch = getNicheList();
    $rootScope.app_title = 'Niche';
}]);
app.controller('NicheCreate', ['$scope', '$log', function ($scope, $rootScope) {
    $rootScope.app_title = 'Create';
}]);
app.controller('NicheCreated', ['$scope', '$log', function ($scope, $rootScope) {
    $rootScope.app_title = 'Created';
}]);
