$(document).ready(function(){
    $("#submit").click(function(){
        $obj ={
            nome: $("#nome").val(),
            email: $("#email").val(),
            telefone: $("#telefone").val()
        };
        console.log($obj);
    });
});