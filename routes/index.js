var express = require('express');
var session = require('express-session');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
  // if(err) 
 	// {
 	// 	console.log('error');
 	// 	res.render('error',{'error':err});
 	// }
  res.render('index', { title: 'Express' });
  
});

module.exports = router;
