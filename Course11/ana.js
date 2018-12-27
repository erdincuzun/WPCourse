const fs = require('fs');
const child_process = require('child_process');
 
for(var i=0; i<4; i++) {
   var workerProcess = child_process.exec('node destek.js '+ i,function 
      (error, stdout, stderr) {
      
      if (error) {
         console.log(error.stack);
         console.log('Hata Kodu: '+error.code);
         console.log('Sinyal alindi: '+error.signal);
      }
      console.log('stdout: ' + stdout);
      console.log('stderr: ' + stderr);
   });
 
   workerProcess.on('exit', function (code) {
      console.log('Alt islem exit kodu ile cikti '+code);
   });
}