var IconLink = React.createClass({
  render: function() {
    return <a href={this.props.link.url} style={{paddingRight:0.3+'em'}}>
        <i className={this.props.link.iconClass} aria-hidden="true"></i>
      </a>;
  }
})

var SimplePage = React.createClass({
  popLinks: function(link) {
    return <IconLink key={link.url} link={link}/>
  },
  render: function() {
    return <div className="container-fluid" id="page">
      <h1 id="name">
        {this.props.title}
        <br/>
        <small>
          {this.props.links.map(this.popLinks)}
        </small>
      </h1>
    </div>;
  }
});

var renderPage = function(title, links) {
  ReactDOM.render(
    <SimplePage title={title} links={links}/>,
    document.getElementById('container')
  );
}
