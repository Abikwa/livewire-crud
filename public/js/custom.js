$(function () {

    $('#tasksAssigned').on('shown.bs.collapse', function (e) {
        $('#assigned-icon-collapse').removeClass('fa-angle-right').addClass('fa-angle-down');
    });

    $('#tasksAssigned').on('hidden.bs.collapse', function (e) {
        $('#assigned-icon-collapse').removeClass('fa-angle-down').addClass('fa-angle-right');
    });

    $('#tasksFinished').on('shown.bs.collapse', function (e) {
        $('#finished-icon-collapse').removeClass('fa-angle-right').addClass('fa-angle-down');
    });

    $('#tasksFinished').on('hidden.bs.collapse', function (e) {
        $('#finished-icon-collapse').removeClass('fa-angle-down').addClass('fa-angle-right');
    });

    $('#productsAssigned').on('shown.bs.collapse', function (e) {
        $('#assigned-icon-collapse').removeClass('fa-angle-right').addClass('fa-angle-down');
    });

    $('#productsAssigned').on('hidden.bs.collapse', function (e) {
        $('#assigned-icon-collapse').removeClass('fa-angle-down').addClass('fa-angle-right');
    });

    $('#projectsAssigned').on('shown.bs.collapse', function (e) {
        $('#assigned-icon-collapse').removeClass('fa-angle-right').addClass('fa-angle-down');
    });

    $('#projectsAssigned').on('hidden.bs.collapse', function (e) {
        $('#assigned-icon-collapse').removeClass('fa-angle-down').addClass('fa-angle-right');
    });

    $('#projectsFinished').on('shown.bs.collapse', function (e) {
        $('#finished-icon-collapse').removeClass('fa-angle-right').addClass('fa-angle-down');
    });

    $('#projectsFinished').on('hidden.bs.collapse', function (e) {
        $('#finished-icon-collapse').removeClass('fa-angle-down').addClass('fa-angle-right');
    });

});
