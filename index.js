
var express    = require('express');
var mongoose   = require('mongoose');
var bodyParser = require('body-parser');
var app        = express();

//bodyparser things for json data
app.use(bodyParser.urlencoded({
  extended: true
}));

app.use(bodyParser.json());
app.use(express.static('public'));

//return the home page
app.get('/', function(req, res){
    res.sendFile(__dirname + '/editor.html');
});

//database stuff with mongoose/mongodb

mongoose.connect('mongodb://localhost/wysiwig');

var db = mongoose.connection;
db.on('error', console.error.bind(console, 'connection error:'));
db.once('open', function (callback) {
  // do something here
});

//basic schema for an article
var wysiwigSchema = mongoose.Schema({
    text: String,
    title: String,
    author: String
});

var Wysiwig = mongoose.model('Wysiwig', wysiwigSchema);

//route that takes the submitted article
app.post('/sendarticle', function (req, res) {

    var wysiwig = new Wysiwig({text: req.body.text});

    wysiwig.save(function(error, result){
        if (!error){
            res.json(result);
        } else {
            res.send(error);
        }
    });
});

app.get('/article/:title', function(req, res){
    //return that article in a template
});

var server = app.listen(8000, function () {
  var host = 'localhost';
  var port = server.address().port;
  console.log('Wysiwig editor listening at http://%s:%s', host, port);
});
