const User = require('../models/user-models')
const home = async (req, res) => {
  try {
    res
      .status(200)
      .send("this is from controller");

  }
  catch (error) {
    console.log(error);
  }
};
const register = async (req, res) => {
  try {
    // console.log(req.body); 
    const data = req.body;
    const { userName, email, phone, password } = req.body;
    const userExist = await User.findOne({ email: email }); // we use await when find one use
    if (userExist) {
      return res.status(400).send({ message: 'email already exist' });
    } else {
      const newUser = await User.create({ userName, email, phone, password });
      return res.status(201).send({ message: 'User created successfully', user: newUser });
    }

  } catch (error) {
    console.log(error);
  }
};

module.exports = { home, register };