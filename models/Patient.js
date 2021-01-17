const mongoose      = require("mongoose");
const passportLocalMongoose = require("passport-local-mongoose");

let PatientSchema = new mongoose.Schema({
    username: {type: String, unique: true, required: true},
    password: String,
    firstName: String,
    lastName: String,
    email: {type: String, unique: true, required: true},
    resetPasswordToken: String,
    resetPasswordExpires: Date,
    gender: String,
    address: String,
    contact: String
});

PatientSchema.plugin(passportLocalMongoose);

module.exports = mongoose.model('Patient', PatientSchema);