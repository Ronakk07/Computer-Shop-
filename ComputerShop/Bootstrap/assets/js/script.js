// Array slideshow
var wss_i = 0;
var array_wss = [",  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium",",   Doloremque laudantium, totam rem aperiam"];
var wss_elem;
function wssNext(){
   wss_i++;
   wss_elem.style.opacity = 0;
   if(wss_i > (array_wss.length - 1)){
     wss_i = 0;
   }
   setTimeout('wssSlide()',1000);
}
function wssSlide(){
   wss_elem.innerHTML = array_wss[wss_i];
   wss_elem.style.opacity = 1;
   setTimeout('wssNext()',2000);
}
