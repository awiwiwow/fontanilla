const bodyParser    = require("body-parser"),
      express       = require("express"),
      app           = express(),
      mongoose      = require("mongoose");

            //            APP CONFIG                  //

//add dbs with mongoose
mongoose.connect("mongodb://localhost/fontanilla", {useNewUrlParser: true, useUnifiedTopology: true, useFindAndModify: false, useCreateIndex: true  });
//add a directory
app.use(express.static("public"));
//use bodyparser
app.use(bodyParser.urlencoded({extended: true}));
//make the default file extension to be ejs
app.set("view engine", "ejs");


            //                  ROUTES                     //
app.get("/", function(req, res){
    res.render("home");
})

app.listen(3000,function(){
    console.log("Welcome to the server");
});