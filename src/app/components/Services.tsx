import React from "react";

const services = [
  { title: 'Web Design', description: 'Creating visually appealing and user-friendly web designs.', icon: '🌐' },
  { title: 'Web Application Development', description: 'Developing robust and scalable web applications.', icon: '💻' },
  { title: 'Hybrid Mobile App Development', description: 'Building cross-platform mobile applications.', icon: '📱' },
  { title: 'Software Technical Project Management Consultation', description: 'Providing expert project management services.', icon: '📊' },
  { title: 'Email, Domain, and Hosting Implementation', description: 'Setting up email, domain, and hosting services.', icon: '📧' },
];

const Services = () => {
  return (
    <section id="services" className="py-20 bg-gray-100 dark:bg-gray-800">
      <div className="container mx-auto text-center">
        <h2 className="text-3xl font-bold mb-8 text-gray-900 dark:text-gray-100">Our Services</h2>
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          {services.map((service, index) => (
            <div key={index} className="p-6 bg-white dark:bg-gray-700 shadow-md rounded-lg">
              <div className="text-4xl mb-4">{service.icon}</div>
              <h3 className="text-xl font-bold mb-2 text-gray-900 dark:text-gray-100">{service.title}</h3>
              <p className="text-gray-700 dark:text-gray-300">{service.description}</p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Services;
