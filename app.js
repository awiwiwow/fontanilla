const bodyParser    = require("body-parser"),
      express       = require("express"),
      app           = express(),
      Patient       = require("./models/Patient"),
      methodOverride= require("method-override"),
      passport      = require("passport"),
      LocalStrategy = require("passport-local"),
      async      = require("async"),
      mongoose      = require("mongoose");

            //            APP CONFIG                  //

//add dbs with mongoose
mongoose.connect("mongodb://localhost/fontanilla", {useNewUrlParser: true, useUnifiedTopology: true, useFindAndModify: false, useCreateIndex: true  });

//add public to node directory
app.use(express.static(__dirname +'/public'));
//use bodyparser
app.use(bodyParser.urlencoded({extended: true}));
//make the default file extension to be ejs
app.set("view engine", "ejs");
//To use put and delete method in forms
app.use(methodOverride("_method"));

             //           PASSPORT CONFIGURATION            //
// USER AUTH
app.use(require("express-session")({
    secret: "Anything can be place here",
    resave: false,
    saveUninitialized: false
}));

app.use(passport.initialize());
app.use(passport.session());

//this comes from passport-local-mongoose
passport.use(new LocalStrategy(Patient.authenticate()));
passport.serializeUser(Patient.serializeUser());
passport.deserializeUser(Patient.deserializeUser());

//use currentUser in every module/templates
app.use(function(req, res, next){
    res.locals.currentUser = req.user;
    next();
});
            //                  ROUTES                     //
app.get("/", function(req, res){
    res.render("home");
})

        //              AUTH ROUTES

// show register form
app.get("/register", function(req, res){
    res.render("register", {page: 'register'}); 
 });

 //show login form
app.get("/login", function(req, res){
    res.render("login", {page: 'login'}); 
 });

//handling user sign up
app.post("/register", function(req, res){
    
    let newUser =   new Patient({
        username: req.body.username,
        firstName: req.body.firstName,
        lastName: req.body.lastName,
        email: req.body.email,
        gender: req.body.gender,
        address: req.body.address,
        contact: req.body.contact,
    });
    // if(req.body.admincode === "181606"){
    //     newUser.isAdmin = true;
    // }
            //registers username and password to database
    Patient.register(newUser, req.body.password, function(err, user){
        if(err){
            console.log(err);
            return res.render("register", {error: err.message});
        }
            //if successful proceed to profile
            passport.authenticate("local")(req, res, function(){
                res.redirect("/");
            });
    });
});

//login logic
    //middleware runs in the middle of the route
    app.post("/login", passport.authenticate("local",{
    successRedirect: "/",
    failureRedirect: "/login"
    })   , function(req, res){
});

//LOGOUT ROUTES
app.get("/logout", function(req, res){
    req.logout();
    res.redirect("/login");
});

// USER PROFILE
app.get("/users/:id", function(req, res) {
    Patient.findById(req.params.id, function(err, foundUser) {
      if(err) {
        req.flash("error", "Something went wrong.");
        return res.redirect("/");
      }   
    res.render("show", {user: foundUser});
      })
});


app.listen(3000,function(){
    console.log("Welcome to the server");
});