var express = require('express');
var app = express();
 
app.get('/', function (req, res) {
   res.send('Merhaba Node.js Dunyasi');
})

app.get('/sayfa2', function (req, res) {
    res.send('Burası sayfa2');
 })
 
var server = app.listen(8081, function () {
   var host = server.address().address
   var port = server.address().port
   
   console.log("Dinlenen adres ve port: http://%s:%s", host, port)
})