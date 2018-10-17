function AfficherJeux(idCateg)
{
    $.ajax(
        type="get",
        url="index.php/CtrlCategories/afficherJeux",
        data="idCateg="+idCateg,
        success=function(data)
        {
            $('#divJeux').empty();
            $('#divJeux').append(data);
        },
        error=function()
        {
            alert('Erreur SQL');
        }
    
    );
}
