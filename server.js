var express = require('express');
var https = require('https');
var querystring = require('querystring');
var app = express();

app.use(express.static(__dirname));
app.set('views', __dirname);
app.engine('html', require('ejs').renderFile);
app.set('view engine', 'html');

var makePayment = function (token) {
	var post_data = querystring.stringify({
		'access_token': token,
		'user_id': '1545349416091648522',
		'note': 'REALTEST',
	    'amount': 0.01
	});

	var post_options = {
		host: 'api.venmo.com',
		path: '/v1/payments',
		method: 'POST',
		headers: {
			'Content-Type': 'application/x-www-form-urlencoded',
			'Content-Length': post_data.length
	  	}
	};

	var post_req = https.request(post_options, function(res) {
		console.log("Payment Made");
	});

	post_req.write(post_data);
	post_req.end();
}

app.get('/',function(req,res){
	if (req.query.access_token) {
		makePayment(req.query.access_token);
	}

	res.render('Website.html');
});



app.listen(3000);