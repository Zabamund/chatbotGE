// Read Synchrously
const fs = require('fs');
let content = fs.readFileSync("./dummy.json");
console.log("Output Content : \n"+ content);
let jsonContent = JSON.parse(content);
console.log(jsonContent.username);
console.log(jsonContent.password);
console.log(jsonContent.email);
console.log(jsonContent.uid);
