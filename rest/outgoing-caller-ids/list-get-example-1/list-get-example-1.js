// Download the Node helper library from twilio.com/docs/node/install
// These vars are your accountSid and authToken from twilio.com/user/account
var accountSid = 'AC3094732a3c49700934481addd5ce1659';
var authToken = "{{ auth_token }}";
var client = require('twilio')(accountSid, authToken);

client.outgoingCallerIds.list(function(err, data) {
    data.callerIds.forEach(function(callerId) {
        console.log(callerId.PhoneNumber);
    });
});