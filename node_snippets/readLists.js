// Read Synchrously
const fs = require('fs');
let list_content = fs.readFileSync("../DATA_format_JSON/CE/datas/2351/CE_infosListes.json");
//console.log("Output Content : \n"+ list_content);
let jsonContent = JSON.parse(list_content);
console.log(jsonContent[1]["nom"]);