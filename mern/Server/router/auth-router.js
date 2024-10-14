const express = require('express');
const router = express.Router();
const app = express();
const {register, home} = require('../controller/auto-controller.js')

// router.get('/', (req, res) => {
//     res.status(200).send('Using router');
// });
// also we can use this method
// router.route('/').get((req, res) => {
//     res.status(200).send('Using router');
// });
router.route('/').get(home);
router.route('/register').post(register);


// router.route('/')
//     .get((req, res) => {
//         res.status(200).send('GET method on /');
//     })
//     .post((req, res) => {
//         res.status(201).send('POST method on /');
//     });

module.exports = router;
