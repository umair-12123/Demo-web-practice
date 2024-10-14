import sum from './lib.js';
console.log(sum);
import express from 'express';
const app = express();

app.listen(4005, ()=>{
    console.log("server started at post 4005");
})