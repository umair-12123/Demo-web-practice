const file = require("fs");
const pcdetail = require("os");
// const result = file.writeFileSync('./create.txt', 'Hi Umair I am created by a synic');
// const result1 = file.writeFile('./create.txt', 'Hi Umair I am created by a Asynic',(err)=>{});
// const fetchresult = file.readFileSync('./create.txt', ('utf8'));
// console.log(fetchresult);
// const fetchresult1 = file.readFile('./create.txt', 'utf8', (err, fetchresult1)=>{
//     if(!err){
//         console.log(fetchresult1);
//     }else{
//         console.log('error', err);
//     }
// });
//const appentfun = file.appendFileSync('create.txt', '\n hi i append from same file');
// file.cpSync ('create.txt', 'copy.txt');
// console.log(file.statSync('create.txt'));
//file.mkdirSync('dir');
//file.mkdirSync('dir/a/b/s',{recursive: true});
console.log(pcdetail.cpus().length);