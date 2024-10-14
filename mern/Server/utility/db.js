const mongoose = require('mongoose');
require('dotenv').config(); // Load environment variables
// Make sure your password is URL-encoded
//const uri = "mongodb+srv://umair:Umair%40123@cluster0.totnb.mongodb.net/mydb?retryWrites=true&w=majority";
// now i am fetching data from .env file 
const uri = process.env.MONGOD_UAI; // This should correctly fetch the value from the .env file
const DbConnection = async () => {
    try {
        await mongoose.connect(uri);  // Connect to the database
        console.log("Successfully connected to MongoDB");
    } catch (error) {
        console.error("Connection failed:", error.message);
        process.exit(0);
    }
};

module.exports= DbConnection;


// mongoose.connect(uri, { useNewUrlParser: true, useUnifiedTopology: true })
//   .then(() => console.log('MongoDB connected!'))
//   .catch(err => console.log(err));