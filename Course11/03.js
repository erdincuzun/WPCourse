var http = require('http');
var fs = require('fs');
var url = require('url');

// Sunucu olustur
http.createServer( function (request, response) {  
   // Gelen URL'yi çözümle, istenen sayfayi bul
   var pathname = url.parse(request.url).pathname;
   
   // URL'den gelen sayfa, 
   console.log("Istenen sayfa " + pathname + " alindi.");
   
   // Istenen sayfayi sunucunun dosya sisteminden oku
   fs.readFile(pathname.substr(1), function (err, data) {
      if (err) {
         console.log(err);
         // İstenen sayfa bulunmadiysa 404 hatasi uret.
         // HTTP Status: 404 : NOT FOUND
         // Content Type: text/plain
         response.writeHead(404, {'Content-Type': 'text/html'});
      }else {	  
         // Istenen sayfa bulundu: HTTP Status: 200 : OK
         // Content Type: text/plain
         response.writeHead(200, {'Content-Type': 'text/html'});	
         
         // Dosyadan okunan degeri cevaba yaz
         response.write(data.toString());		
      }
      //Cevabi istemciye gonder
      response.end();
   });   
}).listen(8081); //dinlenen port bilgisi

// Sunucunun calistigi IP ve dinledigi port
console.log('Sunucu calisiyor: http://127.0.0.1:8081/');