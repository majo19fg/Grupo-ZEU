var longitud = 40;
var p = document.querySelector('.recortar');

if ( p ) {
    
  var truncar = p.innerHTML;
    
  if ( truncar.length > longitud ) {

    // Truncamos el contenido, volviendo al final de la palabra anterior
    // para asegurarnos de no recortar en medio de una palabra
    truncar = truncar.substring(0, longitud);    
    truncar = truncar.replace(/\w+$/, '');

    // Añadir un elipses al final y convertirlo en un enlace
    // que expande el párrafo de nuevo a su tamaño original
    truncar += '<a href="#" onclick="this.parentNode.innerHTML=' +
      'unescape(\''+escape(p.innerHTML)+'\');return false;">...<\/a>';
      
    p.innerHTML = truncar;
  }
}