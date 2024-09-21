"use client"
import { useState } from 'react';

const Contact = () => {
  const [formData, setFormData] = useState({
    name: '',
    email: '',
    subject: '',
    message: '',
    file: null,
  });

  const handleChange = (e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement>) => {
    const { name, value } = e.target;
    setFormData({ ...formData, [name]: value });
  };

  const handleFileChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    if (e.target.files && e.target.files[0]) {
      setFormData({ ...formData, file: e.target.files[0] });
    } else {
      setFormData({ ...formData, file: null });
    }
  };

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();

    const response = await fetch('/api/contact', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(formData),
    });

    if (response.ok) {
      alert('Email sent successfully');
    } else {
      alert('Error sending email');
    }
  };

  return (
    <section id="contact" className="py-20 bg-gray-100 dark:bg-gray-800">
      <div className="container mx-auto text-center">
        <h2 className="text-3xl font-bold mb-4 text-gray-900 dark:text-gray-100">Contact Us</h2>
        <form onSubmit={handleSubmit} className="max-w-lg mx-auto">
          <div className="mb-4">
            <input type="text" name="name" placeholder="Name" required className="w-full p-2 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100" onChange={handleChange} />
          </div>
          <div className="mb-4">
            <input type="email" name="email" placeholder="Email" required className="w-full p-2 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100" onChange={handleChange} />
          </div>
          <div className="mb-4">
            <input type="text" name="subject" placeholder="Subject" required className="w-full p-2 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100" onChange={handleChange} />
          </div>
          <div className="mb-4">
            <textarea name="message" placeholder="Message" required className="w-full p-2 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100" onChange={handleChange}></textarea>
          </div>
          <div className="mb-4">
            <input type="file" name="file" className="w-full p-2 border border-gray-300 rounded dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100" onChange={handleFileChange} aria-label="File Upload" />
          </div>
          <button type="submit" className="w-full p-2 bg-blue-500 text-white rounded dark:bg-blue-700">Send</button>
        </form>
      </div>
    </section>
  );
};

export default Contact;
