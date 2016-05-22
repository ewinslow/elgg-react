define(function(require) {
    var React = require('react');
    var ReactDOM = require('react-dom');
    
    var h1 = React.DOM.h1;
    var containerElement = document.getElementById('react-container');
    
    ReactDOM.render(h1({}, 'Hello, world!'), containerElement);
});