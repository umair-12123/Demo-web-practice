import http from "http";
const data = { age: 5 };
import fs from "fs";
const indexHtml = fs.readFileSync("./index.html", "utf-8");
const dataJson = JSON.parse(fs.readFileSync("./data.json", "utf-8"));
const products = dataJson.products;

const server = http.createServer((req, res) => {
    console.log("Server started");
    if(req.url.startsWith('/product')){
        const id = req.url.split('/')[2];
        const product = products.find(p=>p.id===(+id));
        console.log(product);
            res.writeHead(200, {
                "Content-Type": "text/html",});
            const index =    indexHtml.replace('**title**', product.title).replace('**brand**',product.brand).replace('**price**',product.price).replace('**discount**',product.discountPercentage);
            res.end(`${index}`);
                return ;
    }
    switch (req.url) {
        case "/":
            res.writeHead(200, {
                "Content-Type": "text/html",
                "My-Created-Header": "MyHeaderValue",
            });
            res.end(`${data.age} : Hello, World\n`);
            break;
        case "/index":
            res.writeHead(200, {
                "Content-Type": "text/html",
                "My-Created-Header": "MyHeaderValue",
            });
            res.end(`${indexHtml} `);
            break;
        case "/data":
            res.writeHead(200, {
                "Content-Type": "application/json",
                "My-Created-Header": "MyHeaderValue",
            });
            res.end(JSON.stringify(dataJson));
            break;         
        default:
            res.end("page nor found");
    }
});
server.listen(8085, () => {
    console.log("Server is listening on port 8085");
});
