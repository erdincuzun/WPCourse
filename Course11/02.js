var fs = require("fs");
 
var data = fs.readFileSync('metin.txt');
 
console.log(data.toString());
console.log("Program Bitti");