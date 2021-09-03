$('#name').on('keyup', function (e) {
    //alert("key up");
    e.preventDefault();
    var str = $(this).val();
    str = str.replace(/\W+(?!$)/g, '-').toLowerCase();
    str = str.replace(/\W$/, '').toLowerCase();
    $('#slug').val(str);
});

$('#example1, #datatables, #datatable1, #datatable3, #datatable2, #datatable4, #datatable5, #datatable6').DataTable();

//$('#datatables').DataTable();
$('#example2, #example3').DataTable({
    'paging': true,
    'lengthChange': false,
    'searching': false,
    'ordering': true,
    'info': true,
    'autoWidth': false
});

$('.select2').select2();



$(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('description');
    //bootstrap WYSIHTML5 - text editor
    //$('#description').wysihtml5();
});