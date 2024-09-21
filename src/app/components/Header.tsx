import Image from 'next/image';
import Link from 'next/link';
import React from 'react';

const Header = () => {
  return (
    <header className="fixed w-full bg-white dark:bg-gray-900 shadow-md">
      <div className="container mx-auto flex justify-between items-center p-4">
        <Image src="/Logo.png" alt="Root Cave Logo" width={150} height={50} />
        <nav>
          <ul className="flex space-x-4">
            <li><Link href="#about" className="text-gray-900 dark:text-gray-100">About</Link></li>
            <li><Link href="#services" className="text-gray-900 dark:text-gray-100">Services</Link></li>
            <li><Link href="#contact" className="text-gray-900 dark:text-gray-100">Contact</Link></li>
          </ul>
        </nav>
      </div>
    </header>
  );
};

export default Header;
