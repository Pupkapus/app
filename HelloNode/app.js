const util = require("util");
const EventEmitter = require("events");
function User()
{}
util.inherits(User, EventEmitter);
let eventName = "greet";
