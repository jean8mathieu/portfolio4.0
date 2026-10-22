import React, { useState } from "react";

const Contact = () => {
  const [sent, setSent] = useState(false);

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    setSent(true);
  };

  return (
    <section id="contact" className="contact fade-in py-12 bg-gray-100 text-gray-900">
      <h2 className="text-3xl font-bold mb-8 text-center">Contact Me</h2>
      <div className="flex flex-col md:flex-row gap-8 max-w-3xl mx-auto mb-8">
        <a href="mailto:jmdev@example.com" className="flex-1 bg-white rounded shadow p-6 flex items-center gap-3 hover:bg-gray-50 transition">
          <span className="font-semibold">Email</span>
          <span className="text-blue-700">jmdev@example.com</span>
        </a>
        <a href="https://linkedin.com/in/jmdev" target="_blank" rel="noopener noreferrer" className="flex-1 bg-white rounded shadow p-6 flex items-center gap-3 hover:bg-gray-50 transition">
          <span className="font-semibold">LinkedIn</span>
          <span className="text-blue-700">linkedin.com/in/jmdev</span>
        </a>
        <a href="https://github.com/jmdev" target="_blank" rel="noopener noreferrer" className="flex-1 bg-white rounded shadow p-6 flex items-center gap-3 hover:bg-gray-50 transition">
          <span className="font-semibold">GitHub</span>
          <span className="text-blue-700">github.com/jmdev</span>
        </a>
      </div>
      <div className="max-w-xl mx-auto">
        {sent ? (
          <p className="text-green-700 font-semibold">Thank you! I'll get back to you soon.</p>
        ) : (
          <form onSubmit={handleSubmit} className="bg-white rounded shadow p-6 flex flex-col gap-4">
            <input type="text" placeholder="Your Name" required className="border rounded px-3 py-2" />
            <input type="email" placeholder="Your Email" required className="border rounded px-3 py-2" />
            <textarea placeholder="Message" required className="border rounded px-3 py-2" />
            <button type="submit" className="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-600 transition">Send</button>
          </form>
        )}
      </div>
    </section>
  );
};

export default Contact;
