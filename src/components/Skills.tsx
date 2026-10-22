import React from "react";

const skills = {
  Languages: ["PHP", "TypeScript", "JavaScript"],
  Frameworks: ["Laravel", "Node.js", "Express"],
  Databases: ["PostgreSQL", "MongoDB", "MySQL", "SQLite"],
  Tools: ["Docker", "Git", "Linux", "CI/CD", "Testing"]
};

const Skills = () => (
  <section id="skills" className="skills fade-in py-12 bg-gray-100 text-gray-900">
    <h2 className="text-3xl font-bold mb-8 text-center">Backend Skills</h2>
    <div className="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
      {Object.entries(skills).map(([category, items]) => (
        <div key={category} className="bg-white rounded shadow p-6">
          <h3 className="text-xl font-semibold mb-4">{category}</h3>
          <ul className="flex flex-wrap gap-3">
            {items.map(skill => (
              <li key={skill} className="bg-gray-200 px-3 py-1 rounded text-sm font-medium">{skill}</li>
            ))}
          </ul>
        </div>
      ))}
    </div>
  </section>
);

export default Skills;
