var validate = require("validate.js");
// Simply set validate.Promise to be the promise constructor
// RSVP works
validate.Promise = RSVP.Promise;
// and Q.js too
validate.Promise = Q.Promise;

var constraints = {
  creditCardNumber: {
    presence: true,
    format: {
      pattern: /^(34|37|4|5[1-5]).*$/,
      message: function(value, attribute, validatorOptions, attributes, globalOptions) {
        return validate.format("^%{num} is not a valid credit card number", {
          num: value
        });
      }
    },
    length: function(value, attributes, attributeName, options, constraints) {
      if (value) {
        // Amex
        if ((/^(34|37).*$/).test(value)) return {is: 15};
        // Visa, Mastercard
        if ((/^(4|5[1-5]).*$/).test(value)) return {is: 16};
      }
      // Unknown card, don't validate length
      return false;
    }
  },
  creditCardZip: function(value, attributes, attributeName, options, constraints) {
    if (!(/^(34|37).*$/).test(attributes.creditCardNumber)) return null;
    return {
      presence: {message: "is required when using AMEX"},
      length: {is: 5}
    };
  }
};

validate({creditCardNumber: "4"}, constraints);
// => {"creditCardNumber": ["Credit card number is the wrong length (should be 16 characters)"]}

validate({creditCardNumber: "9999999999999999"}, constraints);
// => {"creditCardNumber": ["9999999999999999 is not a valid credit card number"]}

validate({creditCardNumber: "4242424242424242"}, constraints);
// => undefined

validate({creditCardNumber: "340000000000000"}, constraints);
// => {"creditCardZip": ["Credit card zip is required when using AMEX"]}