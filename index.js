
var express    = require('express');
var bodyParser = require('body-parser');
var app        = express();

//bodyparser things for json data
app.use(bodyParser.urlencoded({
  extended: true
}));
app.use(bodyParser.json());

//route that takes the submitted article
app.post('/sendarticle', function (req, res) {
    console.log(req);
    console.log(req.body);

    res.send('Recieved the article');
});

var server = app.listen(8000, function () {
  var host = server.address().address;
  var port = server.address().port;
  console.log('Wysiwig editor listening at http://%s:%s', host, port);
});
