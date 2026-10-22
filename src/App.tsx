import React from "react";
import "./index.css";
import "./animations.css";
import Hero from "./components/Hero";
import Skills from "./components/Skills";
import Projects from "./components/Projects";
import Contact from "./components/Contact";

function App() {
  return (
    <div className="app-bg">
      <nav className="navbar">
        <div className="logo">JMDev</div>
        <ul>
          <li><a href="#skills">Skills</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
      <main>
        <Hero />
        <Skills />
        <Projects />
        <Contact />
      </main>
      <footer>
        &copy; {new Date().getFullYear()} JMDev. All rights reserved.
      </footer>
    </div>
  );
}

export default App;

