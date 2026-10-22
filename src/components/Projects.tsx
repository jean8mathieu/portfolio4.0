import React from "react";

const projects = [
  {
    name: "API Platform",
    desc: "A scalable REST API for e-commerce, built with Node.js and PostgreSQL.",
    stack: ["Node.js", "PostgreSQL", "Docker"],
    github: "https://github.com/jmdev/api-platform",
    demo: "#"
  },
  {
    name: "DevOps Dashboard",
    desc: "Real-time monitoring dashboard using Docker, Prometheus, and React.",
    stack: ["Docker", "Prometheus", "React"],
    github: "https://github.com/jmdev/devops-dashboard",
    demo: "#"
  },
  {
    name: "Authentication Service",
    desc: "Secure OAuth2 authentication microservice in Laravel.",
    stack: ["Laravel", "OAuth2", "PHP"],
    github: "https://github.com/jmdev/auth-service",
    demo: "#"
  }
];

const Projects = () => (
  <section id="projects" className="projects fade-in py-12 bg-gray-50 text-gray-900">
    <h2 className="text-3xl font-bold mb-8 text-center">Projects</h2>
    <div className="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
      {projects.map(p => (
        <div className="project-card bg-white rounded shadow p-6 flex flex-col" key={p.name}>
          <h3 className="text-xl font-semibold mb-2">{p.name}</h3>
          <p className="mb-4 opacity-80">{p.desc}</p>
          <div className="mb-4 flex flex-wrap gap-2">
            {p.stack.map(tech => (
              <span key={tech} className="bg-gray-200 px-2 py-1 rounded text-xs font-medium">{tech}</span>
            ))}
          </div>
          <div className="mt-auto flex gap-3">
            <a href={p.github} target="_blank" rel="noopener noreferrer" className="text-blue-700 hover:underline">GitHub</a>
            {p.demo !== "#" && (
              <a href={p.demo} target="_blank" rel="noopener noreferrer" className="text-green-700 hover:underline">Live Demo</a>
            )}
          </div>
        </div>
      ))}
    </div>
  </section>
);

export default Projects;
