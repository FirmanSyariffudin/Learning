import React, {Component} from "react";
import {Route, NavLink, BrowserRouter} from "react-router-dom";

import Home from "./Home";
import About from "./About";
import Contact from "./Contact";




class Main extends Component {
    render () {
        return (
            <BrowserRouter>
            <div>
                <h1>SIMPLE SPA</h1>
                <ul className="header">
                    <li> <NavLink exact to = "/">HOME</NavLink></li>
                    <li> <NavLink to = "/about">ABOUT</NavLink></li>
                    <li> <NavLink to = "/contact">CONTACT</NavLink></li>
                </ul>
                <div className="content">
                    <Route exact path="/" component={Home}/>
                    <Route path="/about" component={About}/>
                    <Route path="/contact" component={Contact}/>
                </div>
                <div >
                <ul className="footer">
                    <li> <NavLink exact to = "/">HOME</NavLink></li>
                    <li> <NavLink to = "/about">ABOUT</NavLink></li>
                    <li> <NavLink to = "/contact">CONTACT</NavLink></li>
                </ul>
                </div>
            </div>
            </BrowserRouter>
        );
    }
}

export default Main;
