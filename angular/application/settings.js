// LOAD FROM API :)
let user = {}
user.session = {}
user.session.token = 'some-obscure-id';
user.first_name = 'Jody';
user.last_name = 'Fitzpatrick';
user.email = 'jody.lee.fitzpatrick@outlook.com';
user.address = {}


// GET THE REQUESTED DATA
let request = {}
request.current = {}
request.current.app = "brandplan";
request.current.action = 'createNew';
request.current.params = {"extra":"data"}
request.history = []  // so we can implement back button?

// API VERSION
let api = {}
api.domain = 'https://api.nicheincomeguide.com';
api.version = 'v1';
api.full_path = api.domain + '/api/' + api.version + '/';
appEndPoint = api.full_path; // legacy


// set cookie
// setCookie('appUserSessionToken', 'e01338cc07b7547d52ed04da2cc047c4665bc409', 3)
// GET SESSION DETAILS
var appUserSessionToken = 'e01338cc07b7547d52ed04da2cc047c4665bc409'; // getCookie('appUserSessionToken');

$(document).ready(function () {
    console.log('Set Authentication Token');
    $.ajaxSetup({
        headers: {
            'authorization': "Token " + appUserSessionToken
        }
    });
});