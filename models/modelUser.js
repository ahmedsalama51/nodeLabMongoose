var mongoose = require('mongoose');

var UserSchema = mongoose.Schema({
	_id:{
		type: String,
		required: true,
	},
	password:{
		type: String,
		required: true
	},
	"joined-date":{
		type: Date,
		default: Date.now
	},
});

var User = mongoose.model('User',UserSchema);

module.exports = User;