import React from "react";

const Hero = () => (
  <section className="hero fade-in flex flex-col items-center justify-center min-h-[60vh] text-center bg-gradient-to-b from-gray-900 via-gray-800 to-gray-900 text-white p-8">
    <h1 className="text-4xl md:text-6xl font-bold mb-4">Jean-Michel</h1>
    <h2 className="text-2xl md:text-3xl font-semibold mb-2">Backend Web Developer</h2>
    <p className="max-w-xl mx-auto mb-6 text-lg md:text-xl opacity-80">
      I specialize in building robust, scalable web applications and APIs using modern backend technologies like PHP, Laravel, Node.js, and Docker.
    </p>
    <div className="flex gap-4 justify-center mb-4">
      <a href="https://github.com/jmdev" target="_blank" rel="noopener noreferrer" className="bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded shadow transition">GitHub</a>
      <a href="https://linkedin.com/in/jmdev" target="_blank" rel="noopener noreferrer" className="bg-blue-700 hover:bg-blue-600 text-white px-4 py-2 rounded shadow transition">LinkedIn</a>
      <a href="#projects" className="bg-green-700 hover:bg-green-600 text-white px-4 py-2 rounded shadow transition">View My Work</a>
    </div>
  </section>
);

export default Hero;
