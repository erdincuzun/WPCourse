var http = require("http");

http.createServer(function (request, response) {
    console.log("Bana istek geldi.");
    // HTTP Başlığı gönder 
    // HTTP Status: 200 : OK anlamında
    // İçerik tipi metin olsun : Content Type: text/plain
    response.writeHead(200, {'Content-Type': 'text/plain'});
    
    // Cevabın asıl metnini (body) gönder
    response.end('Merhaba Node.JS Dunyası\n');
 }).listen(8081);
 //listen ile oluşan sunucuyu istediğin bir bağlantı noktasına bağla
 //ve dinle
  
 // Sunucu tarafında console ekranına mesaj yazdır
 console.log('Sunucu çalışıyor: http://127.0.0.1:8081/');