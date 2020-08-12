
app.config(function($routeProvider) {
    $routeProvider
        .when("/niche/list/", {
            templateUrl : "application/modules/niche/views/list.html",
            controller: "NicheList"
        }).when("/niche/create/", {
            templateUrl : "application/modules/niche/views/create.html",
            controller: "NicheCreate"
        }).when("/niche/created/", {
        templateUrl : "application/modules/niche/views/created.html",
        controller: "NicheCreated"
    });;
});


/*
        .when("/niche/create/", {
            templateUrl : "app/components/niche/create.html",
            controller: "NicheCreate"
        })
        .when("/niche/analyze/", {
            templateUrl : "app/components/niche/analyze.html",
            controller: "NicheAnalyzer"
        })
        .when("/blue", {
            templateUrl : "blue.htm"
        }); */