const express = require("express");
const App = express();
const authRouter = require('./router/auth-router')
const DbConnection = require('./utility/db.js')
App.use(express.json());

//: This line mounts the authRouter at the /api/auth path.
// Now, any route defined in authRouter will be accessible under /api/auth.
App.use('/api/auth', authRouter);
// App.get('/', (req, res) => {
//     res.status(200).send("welcom to mern serios");
// });
// App.get('/register', (req, res) => {
//     res.status(200).send("welcom to registeration page");
// });
// App.get('/home', (req, res) => {
//     res.status(200).send("welc om to home page");
// });
const port = 5002;
// App.listen(port,
//     () => {
//         console.log(`server is running at port ${port}`)
//     });
DbConnection().then(()=>{
    App.listen(port,
            () => {
                console.log(`server is running at port ${port}`)
            });
})