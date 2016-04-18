var express = require('express');
//defin session
var session = require('express-session');
var router = express.Router();
	var sessionOptions = {
	  secret: "secret",
	  resave : true,
	  saveUninitialized : false
	};

// using session
router.use(session(sessionOptions));

var mongoose = require('mongoose');
mongoose.connect('mongodb://localhost/nodelab');
var user = require('../models/modelUser');


/* GET users listing. */
router.get('/', function(req, res, next) {
  user.find({},function (err,users) {
		 if(err) console.log('error');
		 console.log(users);
		 // res.json(users);
		  res.render('users',{"users":users});
	});
});


router.post('/register',function (req,res) {
	 console.log("in /users/register");
	 console.log(req.body);
	 var newUser = new user();
	 newUser._id = req.body.username;
	 newUser.password = req.body.password;
	 newUser.save(function(error,insertedUser){
	 	if(error) console.log(error);
	 	res.render('login'); 
	 });
});
router.get('/register', function(req, res) {
  res.render('register');
  
});
router.post('/login',function (req,res) {
	 ses = req.session
	 console.log("in /users/login");
	 console.log(req.body);
	 user.findOne({_id:req.body.username,password:req.body.password},
	 	function (err,users) {
		 if(err) console.log('error');
		 console.log(users);
		 if(users)
		 {
		 	
			ses.user = req.body.username;
		 }
		 if(ses.user)
		 {
		 	 massage = {'massage':'welcome MR: '+ses.user}
		 	 res.json(massage);
		 }
		 else
		 {
		 	massage = {'massage':'sorry this email or password isnot exsist'}
		 	res.json(massage);
		 }
		// res.json(users);
		  
	});

});
router.get('/login', function(req, res) {
  res.render('login');
  
});
module.exports = router;
