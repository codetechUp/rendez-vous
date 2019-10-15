$(function() {
    $("#cacher").click(function() {
        $("#no").removeClass('no');
        $("#no").addClass('ouss');

    });
    //Si on change la valeur de l id=select(les pays);
    $("#select").change(function() {
        //array contenant les pays associe à leurs index;
        var indicateurs = { "Senegal": "+221", "Mali": "+224", "Mauritanie": "+200", "Gambie": "+220" };
        //stockage d la valeur du select retour un pays ex=senegal
        var a = $('#select').val();
        //changement valeur de l element d id=tel en indicateur[pays];
        $(' #tel').val(indicateurs[a]);
        //change valeur de l option du select en mettant l indicatif
        $(' #tel').text(indicateurs[a]);

    });
    $("#sheure").change(function() {
        var heure = $("#sheure").val();
        $("#heure").text(" à " + heure);

    });

});