import fs from "fs";
const indexHtml = fs.readFileSync("./index.html", "utf-8");
const dataJson = JSON.parse(fs.readFileSync("./data.json", "utf-8"));
const products = dataJson.products;
import express, { urlencoded } from "express";
import { toUnicode } from "punycode";
const server = express();
server.use(express.json())//midleware parse json doto to body
server.use(urlencoded())// for form handling
server.use(express.static('public'))// we can create static hosting this search index.html from public by default
//midle whare 
server.use((req, res, next)=>{
    console.log(req.method, req.ip, req.hostname)
    next()
})
const auth = (req, res, next)=>{
    console.log(req.query)
    if(req.query.password==123){
       
        res.send(' correct');
        next()
    }else{
        res.send('not correct');
    }
    
}
const authpost = (req, res, next)=>{
    if(req.body.password==123){
       
        res.send(' correct');
        next()
    }else{
        res.send('not correct');
    }
    
}
server.get('/',auth, (req, res)=>{
   res.status(200).send("for get");
    // res.sendFile('/var/www/html/check/Ch3Express/data.json')//absolute path provide here
    // res.json(dataJson); // use for send data of json
})
server.patch('/',(req, res)=>{
    res.status(200).send("for patch");
 })
 server.delete('/',(req, res)=>{
    res.status(200).send("for delete");
 })
 server.post('/',authpost,(req, res)=>{
    res.status(200).send("for post");
 })
 server.put('/',(req, res)=>{
    res.status(200).send("for put");
 })
server.listen(2000, ()=>{
    console.log("server startd")
});
