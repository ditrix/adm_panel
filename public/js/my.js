$('.delete').click(function () {
    var confirm_delete = confirm('Delete record?')
    if( !confirm_delete )
        return false;
});

$('.deletebd').click(function () {
    var confirm_delete = confirm('Delete record?');
    if(confirm_delete) {
        var confirm_force_delete = confirm('Remove unrestored?');
        if(!confirm_force_delete) {
            return false;
        }

    }

    if( !confirm_delete ) return false;
});
