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
var bodyParser = require("body-parser");
// mongoose.connect('mongodb://localhost/nodelab');
var post = require('../models/modelPost');

router.get('/',function (req,res) {
	post.find({},function (err,posts) {
		 if(err)
		 {
		 	console.log('error');
 			res.render('error',{'error':err});
		 } 
		 // console.log(posts);
		 // res.json(posts);
		 res.render('posts',{"posts":posts});
	});
});


router.get('/single/:id',function (req,res) {
	 var id = req.params.id;
	 post.findOne({"_id":id},function (err, post) {
	 	 if(err) console.log(err);

	 	 // res.json(post); 
	 	 res.render('single',{"post":post});
	 });
});

router.get('/addpost', function(req, res) {
	console.log("jkadfhjkasdghkj");
  res.render('addpost');
  
});


router.post('/addpost',function (req,res) {
	 ses = req.session
	 console.log('post request');
	 console.log(req.body);
	 var newPost = new post();
	 newPost.title = req.body.title;
	 newPost.content = req.body.content;
	 // newPost.user = req.body.user;
	 if(ses)
	 {
	 	console.log("user "+ses.user)
	 	newPost.user = ses.user;
	 }
	 else
	 {
	 	newPost.user = 'salama22';
	 }
	 
	 newPost.save(function(error,insertedPost){
	 	if(error) console.log(error);
	 	res.render('posts'); 
	 });
});


router.get('/update/:id',function(req,res){

	var id = req.params.id;
	 post.findOne({"_id":id},function (err, post) {
	 	if(err) console.log(err);
	 	console.log(post);
	 	 // res.json(post); 
		res.render('editpost',{"post":post});

	 });

});


router.post('/update/:id',function (req,res) {
	console.log('put');
	console.log(req.params);
	 var id = req.params.id;
	 post.findOneAndUpdate({"_id":id},req.body,{},function(err,updatedpost){
	 	if(err) console.log(err);
	 	massage = {'massage':'post has updated successfully'}
	 	console.log(massage);
	 	 res.json(massage);
	 });
});

router.get('/delete/:id',function(req,res){

	var id = req.params.id;
	 post.remove({"_id":id},function (err, post) {
	 	if(err) console.log(err);
	 	massage = {'massage':'post has deleted successfully'}
	 	console.log(massage);
	 	 res.json(massage); 
		// res.render('editpost',{"post":post});

	 });

});
module.exports = router;
