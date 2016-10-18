var IconLink = React.createClass({
  displayName: "IconLink",

  render: function () {
    return React.createElement(
      "a",
      { href: this.props.link.url, style: { paddingRight: 0.3 + 'em' } },
      React.createElement("i", { className: this.props.link.iconClass, "aria-hidden": "true" })
    );
  }
});

var SimplePage = React.createClass({
  displayName: "SimplePage",

  popLinks: function (link) {
    return React.createElement(IconLink, { key: link.url, link: link });
  },
  render: function () {
    return React.createElement(
      "div",
      { className: "container-fluid", id: "page" },
      React.createElement(
        "h1",
        { id: "name" },
        this.props.title,
        React.createElement("br", null),
        React.createElement(
          "small",
          null,
          this.props.links.map(this.popLinks)
        )
      )
    );
  }
});

var renderPage = function (title, links) {
  ReactDOM.render(React.createElement(SimplePage, { title: title, links: links }), document.getElementById('container'));
};