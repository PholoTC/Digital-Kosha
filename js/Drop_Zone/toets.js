/// <reference path="../../DropzoneJs_scripts/dropzone.js" />
/// <reference path="../../Scripts/angular.min.js" />
/// <reference path="../../Scripts/angular.js" />
/// <reference path="ng-dropzone.min.js" />
/// <reference path="ng-dropzone.js" />

Dropzone.autoDiscover = false;
var myNgApp = angular.module('UploadsApp', ['thatisuday.dropzone']);

myNgApp.config(function (dropzoneOpsProvider) {
    dropzoneOpsProvider.setOptions({
        url: '../../fileUploadHandler.ashx',
        acceptedFiles: 'image/jpeg, images/jpg, image/png',
        addRemoveLinks: true,
        dictDefaultMessage: 'Click to add or drop photos',
        dictRemoveFile: 'Remove photo',
        dictResponseError: 'Could not upload this photo'
    });
});

myNgApp.controller('drop1Controller', function ($scope, $timeout) {
    $scope.dzOptions = {
        paramName: 'photo',
        maxFilesize: '5',
        maxFiles: '8'
    };

    $scope.dzCallbacks = {
        'addedfile': function (file) {
            console.info('File added from dropzone 1.', file);
        }
    };

    $scope.AccID = getUrlParameter('AccommID');
});

function getUrlParameter(param, dummyPath) {
    var sPageURL = dummyPath || window.location.search.substring(1),
        sURLVariables = sPageURL.split(/[&||?]/),
        res;

    for (var i = 0; i < sURLVariables.length; i += 1) {
        var paramName = sURLVariables[i],
            sParameterName = (paramName || '').split('=');

        if (sParameterName[0] === param) {
            res = sParameterName[1];
        }
    }
    return res;
}