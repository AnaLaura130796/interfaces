function onHover()
{
    $("#menuImg").attr('src', 'img/Cuadro Gris.jpg');
}

function offHover()
{
    $("#menuImg").attr('src', 'img/proveedores.jpg');
}
function fecha_dia()
{
  document.getElementById('start').value =  today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
}
