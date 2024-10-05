var http = require('http');

http.createServer(function (req, res) {
  res.writeHead(200, {'Content-Type': 'text/html'});
  res.end('Hello World!');
}).listen(5000); // You can change this to 8080 if desired

console.log('Server running at http://localhost:5000/'); // Ensure this matches the listening port
