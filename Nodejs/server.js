const http = require("http");
const fs = require("fs");
const url = require("url");
const { parse } = require("qs");
const myserver = http.createServer((request, response) => {
    const log = `${Date.now()}: ${request.url} - request received\n`;
    const myurl =url.parse(request.url, true);
    console.log(myurl);
    fs.appendFile('log.txt', log, (err, data) => {
        switch(request.url){
            case '/':
                response.end('this is home page');
                break;
                case '/about':
                    response.end('this is about');
                    break;
                    case '/contact':
                        response.end('this is contact');
                        break;
                        default :
                       
                            response.end('this is 404 error');
                            
        }
        console.log(request.method, request.url);
    });
   
});
myserver.listen(5000, () => {
    console.log('Server started on port 5000');
});
