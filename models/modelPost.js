var mongoose = require('mongoose');
var User = require('../models/modelUser');

var PostSchema = new mongoose.Schema({
	title: {
		type: String,
		required: true
	},
	content:{
		type: String,
		required: true
	},
	"published-date":{
		type: Date,
		default: Date.now
	},
	user:{
		type: mongoose.Schema.Types.ObjectId,
		// type:String,
		ref:'User',
		required: true
	},
	comments:[{
		comment:{
			type :String,
		}
	}],
	tags:['PHP','Django','NodeJs','Java','Python'],
});

var Post = mongoose.model('Post',PostSchema);

module.exports = Post;