import './App.css';
import React, { Component } from 'react';

class App extends Component {
  constructor(props) {
    super(props);
    this.state = {healthCheck: "Don't know"}; // initial status
  }

  componentDidMount() {
    // construct the url of the API call
    const url = `${process.env.REACT_APP_API_URL}/healthCheck`;
    fetch(url)
        .then(res => res.json())
        .then(
            (result) => {
              this.setState({
                healthCheck: result.status
              });
            }
        )
  }

  render() {
    // get the status from the state
    const healthCheck = this.state.healthCheck;

    return (
        <div className="App">
          <header className="App-header">
            Server HealthCheck status: {healthCheck}
          </header>
        </div>
    );
  }
}

export default App;